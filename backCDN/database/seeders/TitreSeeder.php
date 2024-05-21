<?php

namespace Database\Seeders;

use App\Models\Titre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Titre::factory()->create([
            'numero' => '1' ,
            'nom' => 'DE LA LUTTE CONTRE LA CYBERCRIMINALITE ' ,
            'livre_id' => 6 ,
        ]) ;

        Titre::factory()->create([
            'numero' => '2' ,
            'nom' => 'DU CADRE INSTITUTIONNEL' ,
            'livre_id' => 6 ,
        ]) ;

        Titre::factory()->create([
            'numero' => '3' ,
            'nom' => 'DE LA CYBERSECURITE ' ,
            'livre_id' => 6 ,
        ]) ;
    }
}
