<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Article::factory()->create([
            'numero' => '493' ,
            'nom' => 'Garantie des droits fondamentaux et des libertés ' ,
            'contenu' => 'La mise en œuvre et l’application des pouvoirs et procédures prévus au présent Titre 
            sont soumises aux conditions et sauvegardes prévues par le droit interne de la République du Bénin, 
            qui doit assurer une protection adéquate des droits de l\'homme et des libertés, en particulier des droits établis conformément aux obligations que celle-ci a souscrites en application du Pacte international relatif aux droits civils et politiques des Nations-Unies et de la Charte africaine des droits de l\'homme et des peuples ou d’autres instruments internationaux applicables concernant
             les droits de l’homme, et qui doit intégrer le principe de la proportionnalité. ',
            'titre_id' => 1,
        ]) ;

        Article::factory()->create([
            'numero' => '517' ,
            'nom' => 'Traitement non autorisé  ' ,
            'contenu' => 'Quiconque aura procédé à un traitement de données à caractère personnel soit sans avoir préalablement
             informé individuellement les personnes concernées de leur droit d’accès, de rectification ou d’opposition, de la 
             nature des données transmises et des destinataires de celles-ci, soit malgré l’opposition de la personne concernée
              est puni selon les peines prévues à l’article 454 du présent code ',
            'titre_id' => 1,
        ]) ;

        Article::factory()->create([
            'numero' => '522' ,
            'nom' => 'Prostitution de mineurs ' ,
            'contenu' => 'Le fait de solliciter, d\'accepter ou d\'obtenir, 
            en échange d\'une rémunération ou d\'une promesse
            de rémunération, des relations de nature sexuelle de la part d`\'un mineur
            qui se livre à la prostitution, y compris de façon occasionnelle, est puni de vingt (20)
            ans d\'emprisonnement et cinquante millions (50 000 000) de francs CFA d\'amende lorsque la personne a été mise en contact avec l\’auteur des faits au moyen d\’un ou sur un réseau de communication électronique ou un système informatique ',
            'titre_id' => 1,
        ]) ;

        Article::factory()->create([
            'numero' => '523' ,
            'nom' => 'Viol ' ,
            'contenu' => 'Le viol est puni de vingt (20) ans de réclusion criminelle et de cinquante millions (50 000 000)
             de francs CFA d\'amende lorsque la victime a été mise en contact avec l\'auteur des faits au moyen
             d’un ou sur un réseau de communication électronique ou un système informatique',
            'titre_id' => 1,
        ]) ;

        Article::factory()->create([
            'numero' => '524' ,
            'nom' => 'Infractions sexuelles ' ,
            'contenu' => 'Les agressions sexuelles autres que le viol sont punies de dix (10) ans d\'emprisonnement
             et vingt-cinq millions (25 000 000) de francs CFA d\'amende lorsque la victime a été mise en contact avec l\'auteur 
            des faits au moyen d’un ou sur un réseau de communication électronique ou un système informatique. ',
            'titre_id' => 1,
        ]) ;

        Article::factory()->create([
            'numero' => '525' ,
            'nom' => 'Prostitution des personnes vulnérables' ,
            'contenu' => 'Est puni des peines prévues à l’article 522 le fait de solliciter,
             d\'accepter ou d\'obtenir, en échange d\'une rémunération ou d\'une promesse de rémunération, 
             des relations sexuelles de la part d\'une personne qui se livre à la prostitution, y compris de 
             façon occasionnelle, lorsque cette personne présente une particulière vulnérabilité, apparente ou 
             connue de son auteur,
             due à une maladie, à une infirmité, à une déficience physique ou psychique ou à un état de grossesse.',
            'titre_id' => 1,
        ]) ;

        Article::factory()->create([
            'numero' => '531' ,
            'nom' => 'Sanctions' ,
            'contenu' => 'Sont punis d’une peine d’emprisonnement de trois (03) mois à deux (02) ans et 
            d’une amende de cinq cent mille (500 000) francs CFA à dix millions (10 000 000) de FCFA, 
            les atteintes à la propriété intellectuelle 
            commises au moyen d’un ou sur un réseau de communication 	électronique 	ou 	un 	système informatique. ',
            'titre_id' => 1,
        ]) ;

        Article::factory()->create([
            'numero' => '532' ,
            'nom' => 'Œuvres de l’esprit ' ,
            'contenu' => 'Constitue une atteinte à la propriété intellectuelle, le fait, sans autorisation de l’auteur ou de ses ayants droit de reproduire, représenter ou de mettre à la disposition du public une œuvre de l’esprit protégée par le droit d’auteur 
            ou un droit voisin au moyen d’un ou sur un réseau de communication électronique ou un système informatique. ',
            'titre_id' => 1,
        ]) ;

        Article::factory()->create([
            'numero' => '534' ,
            'nom' => 'Contrefaçon de dessins et modèles  ' ,
            'contenu' => 'Constitue une atteinte à la propriété intellectuelle, le fait, sans autorisation de l’auteur ou de ses ayants droit de 
            reproduire, de représenter ou de mettre à la disposition du public, un dessin ou un modèle protégé par le droit
            d’auteur ou un droit voisin au moyen d’un ou sur un réseau de communication électronique ou un système informatique ',
            'titre_id' => 1,
        ]) ;

        Article::factory()->create([
            'numero' => '535' ,
            'nom' => 'Atteinte aux droits de propriété des brevets' ,
            'contenu' => ' Constitue une atteinte à la propriété intellectuelle le fait, en 
            toute connaissance de cause, sans droit, de vendre ou de mettre à disposition du public par
             reproduction ou par représentation, un bien ou un produit protégé par un brevet 
            d’invention au moyen d’un ou sur un réseau de communication électronique ou un système informatique. ',
            'titre_id' => 1,
        ]) ;
    }
}

