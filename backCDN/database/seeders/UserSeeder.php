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
    }
}
