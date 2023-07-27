<?php

use App\Autoloader;
use App\Models\AnnoncesModel;

require_once 'Autoloader.php';
Autoloader::register();

$Model = new AnnoncesModel;

$model->setEmail('contact@nouvelle-techno.fr')
->setPassword(password_hash('azerty', PASSWORD_ARGON2I));


$annonce = $model->find(2);
//Tableau
/*$donnees = [
    'titre' => 'Annonce modifiée',
    'description'=> 'Description de l\'annonce modifiée',
    'actif' => 0
];
*/

//Objet
//$annonce = $model->hydrate($donnees);


//Objet crée dans la base de données
//$model->delete(5);

var_dump($annonce);