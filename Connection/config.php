<?php
    
    try {
        $bdd = new PDO('mysql:host=Nom_du_serveur; dbname=Nom_de_la_base_de_donnée; charset=utf8', 'Nom de l_utilisateur utilsant le serveur', 'Mot de passe de l_utilisateur utilsant le serveur');
    }
    catch (Exception $e) {
        die('Erreur'.$e->getMessage());
    }
?>
