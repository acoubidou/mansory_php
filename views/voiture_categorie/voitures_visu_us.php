<?php 
	$strPage = "voitures_visu_us";
    $strTitre = "Voitures Mansory";
	include("../_partial/header.php");

    $strDropdownNomPays = "Etats Unis";
    $strDropdownNomCat = "Catégorie";
    $strBesoinMarques = "Oui";
    $strBesoinVoitures = "Non";

    $strVoituresMarques = "voitures_marques_us";
    $strVoituresVisu = "voitures_visu_us";
    $strVoituresTous = "../voitures_visu";

    $strVoituresAll = "voitures_visu_all";
    $strVoituresUs = "voitures_visu_us";
    $strVoituresFr = "voitures_visu_fr";
    $strVoituresUk = "voitures_visu_uk";
    $strVoituresIt = "voitures_visu_it";

    $strVoituresCatTous = "../voitures_visu";
    $strVoituresCatSuv = "voitures_cat_suv";
    $strVoituresCatCab = "voitures_cat_cab";
    $strVoituresCatEl = "voitures_cat_el";
    include("../_partial/voiture_header.php");

    $array = [
        ["cadillac", "escalade", "ESCALADE"],
        ["ford", "gt", "GT"],
    ];
?>
        <div class="row pb-5">
            <?php 
            foreach ($array as list($marque, $modele, $nom)){
                echo('
                <!-- Voiture -->
                <div class="col-12 col-lg-4 d-flex flex-column text-center">
                    <div>
                        <a href="/mansory_php/views/voiture_modele/'.$modele.'.php"><img src="/mansory_php/assets/images/voitures/'.$marque.'/'.$modele.'/'.$modele.'.png" alt="'.$modele.'" class="imgModeleHover"></a> 
                    </div>
                    <div class="btnModeleMarque d-flex justify-content-center align-self-center">
                        <a href="/mansory_php/views/voiture_modele/'.$modele.'.php" class="btnModele">'.$nom.'</a>
                    </div>
                </div>
                ');
            }
            ?>
        </div>
    </div>
</main>
<?php include("../_partial/footer.php");?>