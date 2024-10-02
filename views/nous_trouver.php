<?php 
	$strPage = "trouver";
    $strTitre = "Trouver Mansory";
	include("_partial/header.php");
?>

<main>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/mansory_php/index.php">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nous trouver</li>
        </ol>
    </nav>
    <div class="container text-center">
        <div class="row">
            <div class="col-12">
                <iframe src="https://www.google.com/maps/d/u/0/embed?mid=1Fn6k2KyiL2l2me3G5VaCgrIFmQyVFXo&ehbc=2E312F&noprof=1" width="100%" height="500px" class="d-flex justify-content-center"></iframe>
            </div>
        </div>
        <div class="row">
            <?php
                /* Allemagne */
                $strLocLien = "nous_trouver/man_all.php";
                $strLocNom = "MANSORY DESIGN";
                $strLocPays = "ALLEMAGNE";
                $strLocVille = "Wunsiedler";
                include("_partial/case_loc.php");

                /* Rep tchèque */
                $strLocLien = "nous_trouver/man_rep_tch.php";
                $strLocNom = "MANSORY AUTOMOTIVE";
                $strLocPays = "REPUBLIQUE TCHEQUE";
                $strLocVille = "Prague";
                include("_partial/case_loc.php");

                /* Suisse */
                $strLocLien = "nous_trouver/man_sui.php";
                $strLocNom = "MANSORY GROUP SARL";
                $strLocPays = "SUISSE";
                $strLocVille = "Genève";
                include("_partial/case_loc.php");

                /* Emirats */
                $strLocLien = "nous_trouver/man_emi.php";
                $strLocNom = "MANSORY MOYEN ORIENT LLC";
                $strLocPays = "EMIRATS ARABES UNIS";
                $strLocVille = "Dubai";
                include("_partial/case_loc.php");

                /* Russie */
                $strLocLien = "nous_trouver/man_rus.php";
                $strLocNom = "MANSORY";
                $strLocPays = "RUSSIE";
                $strLocVille = "Moscow";
                include("_partial/case_loc.php");

                /* Turquie */
                $strLocLien = "nous_trouver/man_tur.php";
                $strLocNom = "MANSORY";
                $strLocPays = "TURQUIE";
                $strLocVille = "Istanbul";
                include("_partial/case_loc.php");

                /* Grande Bretagne */
                $strLocLien = "nous_trouver/man_gra_bre.php";
                $strLocNom = "MANSORY";
                $strLocPays = "GRANDE BRETAGNE";
                $strLocVille = "Londres";
                $milieu = " offset-md-4";
                include("_partial/case_loc.php");
            ?>
        </div>
    </div>
</main>

<?php include("_partial/footer.php");?>