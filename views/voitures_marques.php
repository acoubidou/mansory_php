<?php 
	$strPage = "voitures_marques";
    $strTitre = "Voitures Mansory";
	include("_partial/header.php");

    $strDropdownNomPays = "Pays";
    $strDropdownNomCat = "Catégorie";
    $strBesoinMarques = "Non";
    $strBesoinVoitures = "Oui";

    $strVoituresMarques = "voitures_marques";
    $strVoituresVisu = "voitures_visu";
    $strVoituresTous = "voitures_marques";

    $strVoituresAll = "voiture_categorie/voitures_marques_all";
    $strVoituresUs = "voiture_categorie/voitures_marques_us";
    $strVoituresFr = "voiture_categorie/voitures_marques_fr";
    $strVoituresUk = "voiture_categorie/voitures_marques_uk";
    $strVoituresIt = "voiture_categorie/voitures_marques_it";

    $strVoituresCatTous = "voitures_visu";
    $strVoituresCatSuv = "voiture_categorie/voitures_cat_suv";
    $strVoituresCatCab = "voiture_categorie/voitures_cat_cab";
    $strVoituresCatEl = "voiture_categorie/voitures_cat_el";
    include("_partial/voiture_header.php");

    $array = [
        ["aston_martin","250px","Aston Martin","audi","250px","Audi","bentley","250px","Bentley","bmw","50%","BMW"],
        ["bugatti","250px","Bugatti","cadillac","100%","Cadillac","ferrari","120px","Ferrari","ford","250px","Ford"],
        ["lamborghini","150px","Lamborghini","land_rover","350px","Land Rover","lotus","150px","Lotus","maserati","150px","Maserati"],
        ["mclaren","250px","Mclaren","mercedes","150px","Mercedes","porsche","110px","Porsche","rolls_royce","180px","Rolls-Royce"],
    ];
?>

    <!--     Liste des marques avec logo     -->
        <?php 
            foreach ($array as list($marque1, $taille1, $nom1, $marque2, $taille2, $nom2, $marque3, $taille3, $nom3, $marque4, $taille4, $nom4, )){
                echo('
                <!-- Voiture -->
                <div class="row align-items-center pt-5 pb-3">
                    <div class="col-3 d-flex flex-column text-center">
                        <a href="/mansory_php/views/voiture_marque/'.$marque1.'.php"><img src="/mansory_php/assets/images/page_voitures/logo_voitures/'.$marque1.'.png" alt="logo '.$marque1.'" width="'.$taille1.'" class="logoMarques"></a>
                    </div>
                    <div class="col-3 d-flex flex-column text-center">
                        <a href="/mansory_php/views/voiture_marque/'.$marque2.'.php"><img src="/mansory_php/assets/images/page_voitures/logo_voitures/'.$marque2.'.png" alt="logo '.$marque2.'" width="'.$taille2.'" class="logoMarques"></a>
                    </div>
                    <div class="col-3 d-flex flex-column text-center">
                        <a href="/mansory_php/views/voiture_marque/'.$marque3.'.php"><img src="/mansory_php/assets/images/page_voitures/logo_voitures/'.$marque3.'.png" alt="logo '.$marque3.'" width="'.$taille3.'" class="logoMarques"></a> 
                    </div>
                    <div class="col-3 d-flex flex-column text-center">
                        <a href="/mansory_php/views/voiture_marque/'.$marque4.'.php"><img src="/mansory_php/assets/images/page_voitures/logo_voitures/'.$marque4.'.png" alt="logo '.$marque4.'" width="'.$taille4.'" class="logoMarques"></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-3 d-flex flex-column text-center">
                        <a href="/mansory_php/views/voiture_marque/'.$marque1.'.php" class="nomMarques">'.$nom1.'</a>
                    </div>
                    <div class="col-3 d-flex flex-column text-center">
                        <a href="/mansory_php/views/voiture_marque/'.$marque2.'.php" class="nomMarques">'.$nom2.'</a>
                    </div>
                    <div class="col-3 d-flex flex-column text-center">
                        <a href="/mansory_php/views/voiture_marque/'.$marque3.'.php" class="nomMarques">'.$nom3.'</a>
                    </div>
                    <div class="col-3 d-flex flex-column text-center">
                        <a href="/mansory_php/views/voiture_marque/'.$marque4.'.php" class="nomMarques">'.$nom4.'</a>
                    </div>
                </div>
                ');
            }
        ?>
        <p><br></p>
    </div>
</main>

<?php 
    include("_partial/footer.php");
?>