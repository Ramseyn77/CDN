<?php

namespace Database\Seeders;

use App\Models\Chapitre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChapitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Chapitre::factory()->create([
            'nom' => 'DES PRINCIPES GENERAUX',
            'numero' => 1 ,
            'titre_id' => 1
        ]) ;

        Chapitre::factory()->create([
            'nom' => 'DE LA RESPNSABILITE DES ACTEURS DE L\'INTERNET',
            'numero' => 2 ,
            'titre_id' => 1
        ]) ;

        Chapitre::factory()->create([
            'nom' => 'DES ATTEINTES AUX RESEAUX ET AUX SYSTEMES D\'INFORMATION',
            'numero' => 3 ,
            'titre_id' => 1
        ]) ;
    }
}
