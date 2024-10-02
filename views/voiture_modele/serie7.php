<?php 
    $strPage = "BMW Serie 7";
    $strTitre = "BMW Serie 7 - Mansory";
    include("../_partial/header.php");

    // Nom de code
    $strCodeMarque = "bmw";
    $strCodeModele = "serie7";

    // Nom de visuel
    $strNomMarque = "BMW";
    $strNomModele = "Serie 7";

    // Paragraphe découverte
    $strTitreParagraphe = "MANSORY BMW serie7";
    $boolTitreMilieu = false;
    $strTitreMilieu = "";
    $strSousTitre = 'Modification de luxe pour la BMW serie 7';
    $strParagraphe = "Plongez dans un univers d'opulence automobile avec la BMW Série 7 de 2017, une berline qui incarne le luxe. MANSORY élève ce véhicule 
                    exceptionnel à de nouveaux sommets grâce à son programme de personnalisation, intégrant de manière transparente des matériaux issus de 
                    la Formule 1 et du voyage spatial pour créer une expérience de conduite hors du commun.<br><br>
                    Au-delà de l'attrait de son extérieur, l'attention se porte sur l'intérieur, où chaque détail est méticuleusement conçu pour un confort 
                    inégalé. Le cuir et le carbone ornent les sièges, les fonctionnalités et les surfaces, transformant l'habitacle en un havre de sophistication. 
                    Le résultat n'est pas simplement une voiture ; c'est un sanctuaire où chaque moment passé à l'intérieur devient une indulgence.<br><br>
                    Sous le capot, l'expertise de MANSORY se dévoile à travers l'amélioration méticuleuse du moteur à essence. Une unité de contrôle optimisée, 
                    un filtre à air sportif et un système d'échappement haute performance, avec un silencieux et des embouts d'échappement, collaborent pour 
                    conférer à la limousine de classe supérieure de Munich une puissance supplémentaire de 35 chevaux (26 kW) et une augmentation de 40 Newton-mètres 
                    de couple maximal. Cette augmentation de puissance transforme l'expérience de conduite, garantissant que chaque trajet n'est pas simplement une 
                    course, mais une odyssée palpitante.<br><br>
                    Dans le monde de MANSORY, le luxe n'est pas seulement un concept ; c'est un style de vie, et la BMW Série 7 de 2017 devient un chef-d'œuvre de 
                    l'artisanat automobile, repoussant les limites de ce qui est possible sur la route.";
                    
    // Valeur performance
    $strMoteur = "V8";
    $strPuissance = "640ch";
    $strCouple = "920nm";
    $strAcceleration = "4.2s";
    $strVitesse = "323km/h";

    // Liste photo
    $strLienPhoto1 = "avant.jpg";
    $strLienPhoto2 = "arriere.jpg";
    $strLienPhoto3 = "profil.jpg";
    $strLienPhoto4 = "lateral.jpg";
    $strLienPhoto5 = "pare-choc.jpg";

    // Vidéo YTB
    $strTitreVideo = "DECOUVREZ LA MANSORY BMW SERIE 7 EN VIDEO";
    $strLienVideo = "https://www.youtube.com/embed/uOm8fjozcTg?si=ms2-zrBQIZqaPF2P";
    include("../_partial/modele_voiture.php");

    include("../_partial/footer.php"); 
?>