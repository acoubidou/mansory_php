<?php 
	$strPage = "voitures_marques_it";
    $strTitre = "Voitures Mansory";
	include("../_partial/header.php");

    $strDropdownNomPays = "Italie";
    $strDropdownNomCat = "Catégorie";
    $strBesoinMarques = "Non";
    $strBesoinVoitures = "Oui";

    $strVoituresMarques = "../voitures_marques";
    $strVoituresVisu = "voitures_visu_it";
    $strVoituresTous = "../voitures_marques";

    $strVoituresAll = "voitures_marques_all";
    $strVoituresUs = "voitures_marques_us";
    $strVoituresFr = "voitures_marques_fr";
    $strVoituresUk = "voitures_marques_uk";
    $strVoituresIt = "voitures_marques_it";

    $strVoituresCatTous = "../voitures_visu";
    $strVoituresCatSuv = "voitures_cat_suv";
    $strVoituresCatCab = "voitures_cat_cab";
    $strVoituresCatEl = "voitures_cat_el";
    include("../_partial/voiture_header.php");

    $array = [
        ["ferrari","120px","Ferrari","lamborghini","150px","Lamborghini","maserati","150px","Maserati",],
    ];
?>
    <!--     Liste des marques allemandes avec logo     -->
    <?php 
            foreach ($array as list($marque1, $taille1, $nom1, $marque2, $taille2, $nom2, $marque3, $taille3, $nom3,)){
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
                </div>
                ');
            }
        ?>
        <div class="pt-5 pb-5"></div>
    </div>
</main>

<?php include("../_partial/footer.php");?>