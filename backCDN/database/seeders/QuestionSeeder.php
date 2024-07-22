<?php

namespace Database\Seeders;

use App\Models\Question;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Question::factory()->create([
            'contenu' => 'Quel est l\'objectif principal de la mise en œuvre et de l\'application des pouvoirs et procédures prévus dans le présent Titre?',
            'article_id' => 1,
            'status' => 0
        ]) ;

        Question::factory()->create([
            'contenu' => 'À quoi doivent se conformer les pouvoirs et procédures pour assurer la protection des droits de l\'homme au Bénin?',
            'article_id' => 1,
            'status' => 0
        ]) ;

        Question::factory()->create([
            'contenu' => 'Quel est le but de la mise en œuvre et de l\'application des pouvoirs et procédures dans le présent Titre?',
            'article_id' => 1,
            'status' => 1
        ]) ;

        Question::factory()->create([
            'contenu' => 'Quel est le sujet principal de l\'article "Traitement non autorisé"?',
            'article_id' => 2,
            'status' => 0
        ]) ;

        Question::factory()->create([
            'contenu' => 'Que stipule l\'article concernant le traitement non autorisé de données à caractère personnel?',
            'article_id' => 2,
            'status' => 1
        ]) ;
    }
}
