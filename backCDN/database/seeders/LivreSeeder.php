<?php

namespace Database\Seeders;

use App\Models\Livre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LivreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Livre::factory()->create([
            'nom' => 'DES RESEAUX ET SERVICES DE COMMUNICATIONS ELECTRONIQUES'
        ]) ;

        Livre::factory()->create([
            'nom' => 'DES OUTILS ET ECRITS ELECTRONIQUES '
        ]) ;

        Livre::factory()->create([
            'nom' => 'DES PRESTATAIRES DE SERVICES DE CONFIANCE '
        ]) ;

        Livre::factory()->create([
            'nom' => 'DU COMMERCE ELECTRONIQUE '
        ]) ;

        Livre::factory()->create([
            'nom' => 'DE LA PROTECTION DES DONNEES A CARACTERE PERSONNEL'
        ]) ;

        Livre::factory()->create([
            'nom' => 'DE LA CYBERCRIMINALITE ET DE LA CYBERSECURITE '
        ]) ;

        Livre::factory()->create([
            'nom' => 'DES DISPOSITIONS TRANSITOIRES ET FINALES '
        ]) ;

    }
}
