<?php 
	$strPage = "plan";
    $strTitre = "Plan du site";
	include("_partial/header.php");
?>

<main>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/mansory_php/index.php">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Plan du site</li>
        </ol>
    </nav>
    <div class="container">
        <div class="row">
            <h1 class="titrePlan d-flex justify-content-center">Plan du site</h1>
            <p><br><br></p>
            <div class="col-12 col-lg-3">
                <h2 class="titrePlan">Pages principales</h2>
                <?php 
                    $pages = [
                        ["/mansory_php/index","Accueil"],
                        ["voitures_marques","Voitures"],
                        ["a_propos_de_nous","A propos de nous"],
                        ["nous_contacter","Nous contacter"],
                        ["nous_trouver","Nous Trouver"],
                        ["mentions_legales","Mentions légales"],
                        ["plan_du_site","Plan du site"]
                    ];
                    foreach($pages as list($code, $nom)){
                        echo ('<a href="'.$code.'.php" class="lienPlan">'.$nom.'</a><br>');
                    }
                ?>
                <p></p>
            </div>
            <div class="col-12 col-lg-3">
                <h2 class="titrePlan">Catégories voitures</h2>
                <?php 
                    $cat = [
                        ["voitures_marques","Toutes les marques"],
                        ["voitures_visu","Toutes les voitures"],
                        ["voiture_categorie/voitures_cat_suv","SUV"],
                        ["voiture_categorie/voitures_cat_cab","Cabriolet"],
                        ["voiture_categorie/voitures_cat_el","Editions limitée"],
                        ["voiture_categorie/voitures_marques_all","Marques Allemandes"],
                        ["voiture_categorie/voitures_visu_all","Voitures Allemandes"],
                        ["voiture_categorie/voitures_marques_us","Marques Américaines"],
                        ["voiture_categorie/voitures_visu_us","Voitures Américaines"],
                        ["voiture_categorie/voitures_marques_uk","Marques Anglaises"],
                        ["voiture_categorie/voitures_visu_uk","Voitures Anglaises"],
                        ["voiture_categorie/voitures_marques_fr","Marques Françaises"],
                        ["voiture_categorie/voitures_visu_fr","Voitures Françaises"],
                        ["voiture_categorie/voitures_marques_it","Marques Italiennes"],
                        ["voiture_categorie/voitures_visu_it","Voitures Italiennes"],
                    ];
                    foreach($cat as list($code, $nom)){
                        echo ('<a href="'.$code.'.php" class="lienPlan">'.$nom.'</a><br>');
                    }
                ?>
                <p></p>
            </div>
            <div class="col-12 col-lg-2">
                <h2 class="titrePlan">Marques</h2>
                <?php 
                    $cat = [
                        ["aston_martin","Aston Martin"],
                        ["audi","Audi"],
                        ["bentley","Bentley"],
                        ["bmw","BMW"],
                        ["bugatti","Bugatti"],
                        ["cadillac","Cadillac"],
                        ["ferrari","Ferrari"],
                        ["ford","Ford"],
                        ["lamborghini","Lamborghini"],
                        ["land_rover","Land Rover"],
                        ["lotus","Lotus"],
                        ["maserati","Maserati"],
                        ["mclaren","Mclaren"],
                        ["mercedes","Mercedes"],
                        ["porsche","Porsche"],
                        ["rolls_royce","Rolls Royce"],

                    ];
                    foreach($cat as list($code, $nom)){
                        echo ('<a href="voiture_marque/'.$code.'.php" class="lienPlan">'.$nom.'</a><br>');
                    }
                ?>
                <p></p>
            </div>
            <div class="col-12 col-lg-2">
                <h2 class="titrePlan">Modèle</h2>
                <?php 
                    $cat = [
                        ["dbx","DBX"],
                        ["rs6","RS6"],
                        ["rsq8","RSQ8"],
                        ["bentayga","Bentayga"],
                        ["flying_spur","Flying Spur"],
                        ["serie7","Serie 7"],
                        ["serie7new","Serie 7 NEW"],
                        ["chiron","Chiron"],
                        ["escalade","Escalade"],
                        ["812_gts","812 GTS"],
                        ["sf90_spider","SF90 SPIDER"],
                        ["gt","GT"],
                        ["aventador_svj_roadster", "Aventador SVJ Roadster"],
                        ["urus","Urus"],
                        ["sv","Range Rover SV"],
                        ["evora_gte","Evora GTE"],
                        ["mc20","MC20"],
                        ["720S","720S"],
                        ["amg_gt63_s_e_performance","AMG GT63 S E Performance"],
                        ["sl63","SL63"],
                        ["911_(992)","911 (992)"],
                        ["cullinan","Cullinan"],
                        ["ghost", "Ghost"],

                    ];
                    foreach($cat as list($code, $nom)){
                        echo ('<a href="voiture_modele/'.$code.'.php" class="lienPlan">'.$nom.'</a><br>');
                    }
                ?>
                <p></p>
            </div>
            <div class="col-12 col-lg-2">
                <h2 class="titrePlan">Garages</h2>
                <?php 
                    $cat = [
                        ["all","Allemagne"],
                        ["emi","Emirats Arabes Unis"],
                        ["gra_bre","Grande Bretagne"],
                        ["rep_tch","République tchèque"],
                        ["rus","Russie"],
                        ["sui","Suisse"],
                        ["tur","Turquie"],

                    ];
                    foreach($cat as list($code, $nom)){
                        echo ('<a href="nous_trouver/man_'.$code.'.php" class="lienPlan">'.$nom.'</a><br>');
                    }
                ?>
                <p></p>
            </div>
        </div>
    </div> 
</main> 

<?php include("_partial/footer.php");?>