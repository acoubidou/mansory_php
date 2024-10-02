<?php
try{
    // Connexion à la BDD
    $db = new PDO(
                            "mysql:host=localhost;dbname=mansory", // Serveur et BDD
                            "root", //utilisateur - même que phpmyadmin
                            "", 	//mot de passe - même que phpmyadmin
                            array(PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC) // Mode de renvoi
                        );
    // Encodage
    $db->exec("SET CHARACTER SET utf8");
    // Exceptions
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo("Erreur de connexion : ".$e->getMessage());
}
?>