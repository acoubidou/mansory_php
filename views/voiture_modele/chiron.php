<?php 
    $strPage = "Bugatti Chiron";
    $strTitre = "Bugatti Chiron - Mansory";
    include("../_partial/header.php");

    // Nom de code
    $strCodeMarque = "bugatti";
    $strCodeModele = "chiron";

    // Nom de visuel
    $strNomMarque = "Bugatti";
    $strNomModele = "Chiron";

    // Paragraphe découverte
    $strTitreParagraphe = "MANSORY Centuria";
    $boolTitreMilieu = true;
    $strTitreMilieu = "Basé sur la bugatti chiron";
    $strSousTitre = 'La MANSORY Centuria concrétise le rêve de l\'hypercar ultime';
    $strParagraphe = " Bienvenue dans le monde bleu foncé du luxe et de la vitesse. Basée sur l'incomparable Bugatti Chiron, notre équipe d'ingénieurs a 
                    créé un véhicule absolument unique. La MANSORY Centuria élève le sens de la voiture de sport à un niveau inédit.<br><br>
                    L'intérieur de la CENTURIA se présente comme luxueux et fonctionnel de manière inégalée. L'ensemble de l'espace passager est revêtu 
                    du cuir le plus fin, créant la scène parfaite pour les applications en fibre de carbone de haute qualité.<br><br>
                    Avec notre savoir-faire, nous pouvons réveiller la puissance sous le capot comme personne d'autre. Nous aimons repousser les limites 
                    des moteurs et en tirer plus de performances avec un son encore plus impressionnant. Appelez-nous et découvrons ensemble jusqu'où peuvent 
                    aller les limites de votre voiture de sport.";
    
    // Valeur performance
    $strMoteur = "V16";
    $strPuissance = "1500ch";
    $strCouple = "1600nm";
    $strAcceleration = "2.4s";
    $strVitesse = "420km/h";

    // Liste photo
    $strLienPhoto1 = "avant.jpg";
    $strLienPhoto2 = "arriere.jpg";
    $strLienPhoto3 = "profil.jpg";
    $strLienPhoto4 = "aileron.jpg";
    $strLienPhoto5 = "interieur.jpg";

    // Vidéo YTB
    $strTitreVideo = "DECOUVREZ LA MANSORY CENTURIA";
    $strLienVideo = "https://www.youtube.com/embed/umW-rC9iWAY?si=C2SSXzfQSm4Wokpt";
    include("../_partial/modele_voiture.php");

    include("../_partial/footer.php"); 
?>