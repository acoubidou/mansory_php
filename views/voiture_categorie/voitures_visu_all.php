<?php 
	$strPage = "voitures_visu_all";
    $strTitre = "Voitures Mansory";
	include("../_partial/header.php");

    $strDropdownNomPays = "Allemagne";
    $strDropdownNomCat = "Catégorie";
    $strBesoinMarques = "Oui";
    $strBesoinVoitures = "Non";

    $strVoituresMarques = "voitures_marques_all";
    $strVoituresVisu = "voitures_visu_all";
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
        ["audi", "rs6", "RS6"],
        ["audi", "rsq8", "RSQ8"],
        ["bmw", "serie7", "SERIE 7"],
        ["bmw", "serie7new", "SERIE 7 NEW"],
        ["mercedes", "amg_gt63_s_e_performance", "AMG GT63 S E"],
        ["mercedes", "sl63", "SL63"],
        ["porsche", "911_(992)", "911 (992)"],
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