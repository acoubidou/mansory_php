<?php 
	$strPage = "voitures_visu";
    $strTitre = "Voitures Mansory";
	include("_partial/header.php");

    $strDropdownNomPays = "Pays";
    $strDropdownNomCat = "Catégorie";
    $strBesoinMarques = "Oui";
    $strBesoinVoitures = "Non";

    $strVoituresMarques = "voitures_marques";
    $strVoituresVisu = "voitures_visu";
    $strVoituresTous = "voitures_visu";

    $strVoituresAll = "voiture_categorie/voitures_visu_all";
    $strVoituresUs = "voiture_categorie/voitures_visu_us";
    $strVoituresFr = "voiture_categorie/voitures_visu_fr";
    $strVoituresUk = "voiture_categorie/voitures_visu_uk";
    $strVoituresIt = "voiture_categorie/voitures_visu_it";

    $strVoituresCatTous = "voitures_visu";
    $strVoituresCatSuv = "voiture_categorie/voitures_cat_suv";
    $strVoituresCatCab = "voiture_categorie/voitures_cat_cab";
    $strVoituresCatEl = "voiture_categorie/voitures_cat_el";
    include("_partial/voiture_header.php");

    $array = [
        ["aston_martin", "dbx", "DBX"],
        ["audi", "RS6", "RS6"],
        ["audi", "rsq8", "RSQ8"],
        ["bentley", "bentayga", "BENTAYGA"],
        ["bentley", "flying_spur", "FLYING SPUR"],
        ["bmw", "serie7", "SERIE 7"],
        ["bmw", "serie7new", "SERIE 7 NEW"],
        ["bugatti", "chiron", "CHIRON"],
        ["cadillac", "escalade", "ESCALADE"],
        ["ferrari", "812_gts", "812 GTS"],
        ["ferrari", "sf90_spider", "SF90 SPIDER"],
        ["ford", "gt", "GT"],
        ["lamborghini", "urus", "URUS"],
        ["lamborghini", "aventador_svj_roadster", "AVENTADOR SVJ ROADSTER"],
        ["land_rover", "sv", "RANGE ROVER SV"],
        ["lotus", "evora_gte", "EVORA GTE"],
        ["maserati", "mc20", "MC20"],
        ["mclaren", "720S", "720S"],
        ["mercedes", "amg_gt63_s_e_performance", "AMG GT63 S E"],
        ["mercedes", "sl63", "SL63"],
        ["porsche", "911_(992)", "911 (992)"],
        ["rolls_royce", "cullinan", "CULLINAN"],
        ["rolls_royce", "ghost", "GHOST"],
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
<?php
    include("_partial/footer.php");
?>