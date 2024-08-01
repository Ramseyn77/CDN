<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->create([
            'nom' => 'Admin',
            'prenom' => 'Admin',
            'email' => 'cdnadmin@gmail.com',
            'password' => Hash::make('admin'),
            'email_verified_at' => now(),
            'status' => 1
        ]) ;

        User::factory()->create([
            'nom' => 'Ramseyn',
            'prenom' => 'Sufyane',
            'email' => 'sufyaneramseyn@gmail.com',
            'password' => Hash::make('masterclass'),
            'email_verified_at' => now(),
            'status' => 0
        ]) ;

        User::factory()->create([
            'nom' => 'COCO',
            'prenom' => 'Mané',
            'email' => 'manecoco@gmail.com',
            'password' => Hash::make('motdepasse'),
            'email_verified_at' => now(),
            'status' => 2
        ]) ;

        User::factory()->create([
            'nom' => 'ASSOBGA',
            'prenom' => 'Emery',
            'email' => 'assogba.ememry@gmail.com',
            'password' => Hash::make('@ssogbaemery'),
            'email_verified_at' => now(),
            'status' => 3
        ]) ;

        User::factory()->create([
            'nom' => 'ABGOTON',
            'prenom' => 'Romaric',
            'email' => 'romaricagboton@gmail.com',
            'password' => Hash::make('romaric@gboton'),
            'email_verified_at' => now(),
            'status' => 3
        ]) ;

        User::factory()->create([
            'nom' => 'BIAHOU',
            'prenom' => 'Frank-Eric',
            'email' => 'frankericbiahou@gmail.com',
            'password' => Hash::make('frankericbi@hou'),
            'email_verified_at' => now(),
            'status' => 3
        ]) ;
    }
}
