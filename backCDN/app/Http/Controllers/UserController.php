<?php

namespace App\Http\Controllers;

use App\Mail\AuthMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all() ;
        return response()->json([
            'users'=> $users
        ], 200) ;
    }

   
    public function consultations($id)
    {
        $user = User::findOrFail($id) ;
        $articles = $user->consultations ;
        return response()->json([
            'articles' => $articles
        ],200) ;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string|email|unique:users',
            'password' => 'required|string|max:255|min:6',
            'cpassword' => 'required|string|max:255|min:6' 
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        if ($request->password === $request->cpassword ) {
            $user = User::create([
                'nom' => $request->nom ,
                'prenom' => $request->prenom ,
                'email' => $request->email,
                'password' => Hash::make($request->password) ,
            ]) ;
            $code = $this->code() ;
            $user->verification_code = $code;
            $user->save();
            try {
            Mail::to($user->email)->send(new AuthMail($user, $code));
            } catch (\Exception $e) {
                return response()->json(['message' => 'Failed to send email', 'error' => $e->getMessage()], 500);
            }
        } else {
            return response()->json(['message' => 'Error'], 500);
        }
        
        return response()->json(['message' => 'Utilisateur mis à jour avec succès', 'code' => $code, 'user' => $user], 200);
    }

    // public function email(){
    //     $user= User::findOrFail(1);
    //     $code = '101012' ;
    //     Mail::to($user->email)->send(new AuthMail($user, $code)) ;
    //     dd('Successfuy send') ;
    // }


   public function emailVerify(Request $request, $id){
        $request->validate([
            'code' => 'required|string',
        ]); 
        $user = User::findOrFail($id) ;
        if ($user->verification_code == $request->code) {
            $user->update([
                'email_verified_at' => now(),
            ]) ;
            return response()->json(['message' => 'Utilisateur mis à jour avec succès'], 200);
        }else {
            return response()->json(['message' => 'Error'], 401);
        }
   }

    public function show($user)
    {
        $usr = User::findOrFail($user) ; 
        if ($usr) {
            return response()->json([
                'user' => $usr
            ],200) ;
        }
        return response()->json([
            'message' => 'User not found'
        ],500) ;
    }

    private function code(){
        $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
        $code = '';
        $length = strlen($characters);
        for ($i = 0; $i < 6; $i++) {
            $code .= $characters[rand(0, $length - 1)];
        }
        return $code;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $user)
    {
        $validator = Validator::make($request->all(), [
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'email' => 'required|string|email|unique:users,email,'.$user,
            'profession' => 'nullable|string|max:255',
            'profil' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg', 
        ]);
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $user = User::findOrFail($user);
        $data = $request->only(['nom', 'prenom', 'email', 'profession']);
        if ($request->hasFile('profil')) {
            $file = $request->file('profil');
            $path = $file->store('profiles', 'public');
            $data['profil'] = $path;

            if ($user->profil) {
                Storage::disk('public')->delete($user->profil);
            }
        }

        $user->update($data);

        return response()->json(['message' => 'Utilisateur mis à jour avec succès', 'user' => $user], 200);

    }

    public function experts(){
        $experts = User::where('status', 3)->get() ;
        return response()->json([
            'experts' => $experts ,
        ],200) ;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
