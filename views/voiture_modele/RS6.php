<?php 
    $strPage = "Audi RS6";
    $strTitre = "Audi RS6 - Mansory";
    include("../_partial/header.php");

    // Nom de code
    $strCodeMarque = "audi";
    $strCodeModele = "RS6";

    // Nom de visuel
    $strNomMarque = "Audi";
    $strNomModele = "RS6";

    // Paragraphe découverte
    $strTitreParagraphe = "MANSORY AUDI RS6";
    $boolTitreMilieu = false;
    $strTitreMilieu = "";
    $strSousTitre = 'Élégance surpuissante : Découvrez la Mansory Audi RS6, l\'expression ultime de la performance automobile alliée au raffinement supérieur.';
    $strParagraphe = "La quatrième génération de l'Audi RS6, de type 'C8', bénéficie de la fidélité de sa clientèle sportive depuis de nombreuses années, qui 
                    apprécie grandement la possibilité de posséder un véhicule combinant les performances d'une voiture de sport à celles d'un break adapté
                    à un usage quotidien.<br><br>
                    Alors que MANSORY s'est jusqu'à présent concentré sur la modification de voitures de sport, de véhicules tout-terrain et de limousines de 
                    luxe, les breaks de sport ultra-performants deviennent de plus en plus populaires auprès des clients. Pour cette raison, le préparateur bavarois 
                    présente donc pour la première fois une Audi personnalisée et élargit une fois de plus son portefeuille de produits.<br><br>
                    Et, comme c'est la norme pour toutes les conversions complètes MANSORY, toutes les pièces de carrosserie de cette transformation complète de 
                    l'Audi RS6 Avant sont en fibre de carbone de haute qualité. Ainsi, en plus des nouveaux pare-chocs avant et des diffuseurs latéraux, l'arrière de 
                    la voiture est également en carbone. Ces composants en carbone ont tous été fabriqués en interne dans une qualité unique que seuls les ingénieurs 
                    et designers de MANSORY peuvent produire au plus haut niveau de qualité grâce à leurs nombreuses années d'expérience.</p>";
    
    // Valeur performance
    $strMoteur = "V8";
    $strPuissance = "730ch";
    $strCouple = "1000nm";
    $strAcceleration = "3.2s";
    $strVitesse = "320km/h";

    // Liste photo
    $strLienPhoto1 = "avant.jpg";
    $strLienPhoto2 = "arriere.jpg";
    $strLienPhoto3 = "profil.jpg";
    $strLienPhoto4 = "interieur.jpg";
    $strLienPhoto5 = "volant.jpg";

    // Vidéo YTB
    $strTitreVideo = "DECOUVREZ LA MANSORY AUDI RS6 EN VIDEO";
    $strLienVideo = "https://www.youtube.com/embed/aKObU6B3v4c?si=Ids70LMTRrswT5Kv";
    include("../_partial/modele_voiture.php");

    include("../_partial/footer.php"); 
?>