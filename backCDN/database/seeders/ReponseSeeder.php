<?php

namespace Database\Seeders;

use App\Models\Reponse;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReponseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reponse::factory()->create([
            'contenu' => 'Assurer une protection adéquate des droits de l\'homme et des libertés' ,
            'question_id' => 1 ,
            'status' => 1
        ]);
        Reponse::factory()->create([
            'contenu' => 'Augmenter le pouvoir de l\'État' ,
            'question_id' => 1 ,
            'status' => 0
        ]);
        Reponse::factory()->create([
            'contenu' => 'Restreindre les libertés individuelles' ,
            'question_id' => 1 ,
            'status' => 0
        ]);
        Reponse::factory()->create([
            'contenu' => 'Promouvoir les intérêts économiques' ,
            'question_id' => 1 ,
            'status' => 0
        ]);


        Reponse::factory()->create([
            'contenu' => 'Aux règlements municipaux' ,
            'question_id' => 2 ,
            'status' => 0
        ]);
        Reponse::factory()->create([
            'contenu' => 'Aux conditions et sauvegardes prévues par le droit interne de la République du Bénin' ,
            'question_id' => 2 ,
            'status' => 1
        ]);
        Reponse::factory()->create([
            'contenu' => 'Aux directives de l\'ONU' ,
            'question_id' => 2 ,
            'status' => 0
        ]);
        Reponse::factory()->create([
            'contenu' => 'Aux recommandations de la société civile' ,
            'question_id' => 2 ,
            'status' => 0
        ]);


        Reponse::factory()->create([
            'contenu' => 'Le but est d\'assurer une protection adéquate des droits de l\'homme et des libertés.' ,
            'question_id' => 3 ,
            'status' => 1
        ]);

        Reponse::factory()->create([
            'contenu' => 'La collecte de données publiques' ,
            'question_id' => 4 ,
            'status' => 0
        ]);
        Reponse::factory()->create([
            'contenu' => 'Le traitement non autorisé de données à caractère personnel' ,
            'question_id' => 4 ,
            'status' => 1
        ]);
        Reponse::factory()->create([
            'contenu' => 'La collecte de données publiques' ,
            'question_id' => 4 ,
            'status' => 0
        ]);
        Reponse::factory()->create([
            'contenu' => 'La suppression des données personnelles' ,
            'question_id' => 4 ,
            'status' => 0
        ]);

        Reponse::factory()->create([
            'contenu' => 'Il stipule que quiconque aura procédé à un traitement de données à caractère personnel 
            sans avoir préalablement informé individuellement les personnes concernées de leur droit d’accès, de 
            rectification ou d’opposition, de la nature des données transmises et des destinataires de celles-ci,
            ou malgré l’opposition de la personne concernée, est puni selon les peines prévues à l’article 454 
            du présent code.' ,
            'question_id' => 5 ,
            'status' => 1
        ]);
    }
}
