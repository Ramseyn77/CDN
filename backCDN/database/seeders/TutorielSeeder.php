<?php

namespace Database\Seeders;

use App\Models\Tutoriel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TutorielSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tutoriel::factory()->create([
            'titre' => 'Quelles sont les meilleures pratiques pour créer un mot de passe fort ?' ,
            'contenu' => 'Un mot de passe fort doit être : Long( Au moins 12 caractères), Complexe(Combiner des majuscules, des minuscules, des chiffres et des symboles), 
            Unique(Ne pas réutiliser le même mot de passe pour différents comptes), Difficile à deviner( Éviter les mots du dictionnaire, les dates de naissance, les noms d\'utilisateur évidents, etc ), 
            Régulièrement changé(Mettre à jour vos mots de passe régulièrement)',
        ]) ;

        Tutoriel::factory()->create([
            'titre' => 'Comment protéger ses données personnelles en ligne ?', 
            'contenu' => 'Méfiez-vous du phishing (ne cliquez pas sur des liens suspects dans des e-mails ou des messages).
            Utilisez un VPN (Un réseau privé virtuel peut chiffrer votre connexion internet).
            Activez l\'authentification à deux facteurs(Cela ajoute une couche de sécurité supplémentaire à vos comptes).
            Soyez prudent sur les réseaux sociaux (Limitez l\'accès à vos informations personnelles et soyez vigilant quant aux demandes d\'amis).
            Mettez à jour vos logiciels(Les mises à jour contiennent souvent des correctifs de sécurité).'
        ]) ;

        Tutoriel::factory()->create([
            'titre' => 'Quels sont les risques liés à l\'utilisation de réseaux Wi-Fi publics ?', 
            'contenu' => 'Les réseaux Wi-Fi publics sont souvent moins sécurisés. Les risques incluent :
            l\'interception de vos données, l\'infection par des logiciels malveillants, l\'usurpation d\'identité
            '
        ]) ;

        Tutoriel::factory()->create([
            'titre' => 'Que faire en cas de piratage ?' ,
            'contenu' => 'Changez immédiatement vos mots de passe.
            Contactez votre banque et les sites web concernés.
            Signalez le piratage aux autorités compétentes.
            Scannez votre ordinateur à la recherche de logiciels malveillants.'
        ]) ;
    }
}
