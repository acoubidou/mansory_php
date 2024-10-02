<main>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="../../">Accueil</a></li>
        <li class="breadcrumb-item"><a href="../voitures_marques.php">Voitures</a></li>
        <li class="breadcrumb-item"><a href="../voiture_marque/<?php echo($strCodeMarque) ?>.php"><?php echo($strNomMarque) ?></a></li>
        <li class="breadcrumb-item active" aria-current="page"><?php echo($strNomModele) ?></li>
        </ol>
    </nav>
    <div id="modele" class="p-5">
        <h1 class="Liberation"><?php echo($strTitreParagraphe) ?></h1>
        <?php 
            if($boolTitreMilieu = true){
                echo("<h2>".$strTitreMilieu."</h2>");
            }
        ?>
    </div>
    <div class="container p-5">
        <p id="textePres"><span class="titrePres"><?php echo($strSousTitre) ?></span><br><br>
            <?php echo($strParagraphe) ?>
        </p>
    </div>
    <img src="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_avant_crop.jpg" width="100%">
    <h2 class="text-center pt-5 titreCaracteristiques">Caractéristiques</h2>
    <div class="container">
        <div class="d-flex flex-column">
            <div class="d-flex flex-column flex-lg-row justify-content-center">
                <div class="d-flex justify-content-center p-5">
                    <div class="obj">
                        <div class="new"><?php echo($strMoteur) ?></div>
                        <div class="old">MOTEUR</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center p-5">
                    <div class="obj">
                        <div class="new"><?php echo($strPuissance) ?></div>
                        <div class="old">PUISSANCE</div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-center">
                <div class="d-flex justify-content-center p-5">
                    <div class="obj">
                        <div class="new"><?php echo($strCouple) ?></div>
                        <div class="old">COUPLE</div>
                    </div>
                </div>
                <div class="d-flex justify-content-center p-5">
                    <div class="obj">
                        <div class="new"><?php echo($strAcceleration) ?></div>
                        <div class="old">0-100</div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-column flex-lg-row justify-content-center">
                <div class="d-flex justify-content-center p-5">
                    <div class="obj">
                        <div class="new"><?php echo($strVitesse) ?></div>
                        <div class="old">VITESSE MAX</div>
                    </div>
                </div>
                <?php if($strPage == "Ford GT" or $strPage == "Lamborghini Aventador SVJ Roadster"){echo('
                    <div class="d-flex justify-content-center p-5">
                        <div class="obj">
                            <div class="new">'.$strPrix.'</div>
                            <div class="old">PRIX</div>
                        </div>
                    </div>
                    ');
                }else{echo('
                <div class="d-flex justify-content-center p-5">
                    <div class="objpdf">
                        <a href="/mansory_php/assets/documents/pdf/'.$strCodeMarque.'/'.$strCodeModele.'/'.$strCodeModele.'_overview.pdf" target="_blank" class="btnInfoTxt">TELECHARGER LA FICHE COMPLETE</a>
                    </div>
                </div>
                ');}?>
            </div>    
        </div>
    </div>
    <span id="photo1" class="target"></span>
    <span id="photo2" class="target"></span>
    <span id="photo3" class="target"></span>
    <span id="photo4" class="target"></span>
    <span id="photo5" class="target"></span>
    <div class="slider-css-target">
        <div class="slider-css-target-images pt-5">
            <div>
                <img src="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto1) ?>" alt="" height="400" width="600">
            </div>
            <div>
                <img src="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto2) ?>" alt="" height="400" width="600">
            </div>
            <div>
                <img src="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto3) ?>" alt="" height="400" width="600">
            </div>
            <div>
                <img src="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto4) ?>" alt="" height="400" width="600">
            </div>
            <div>
                <img src="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto5) ?>" alt="" height="400" width="600">
            </div>
        </div>
        <ul class="pb-5">
            <li><a href="#photo1"><img src="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto1) ?>" alt="" height="80" width="120"></a><a data-fslightbox="gallery" href="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto1) ?>"><i class="fa-solid fa-expand" style="color: #000000; padding-left: 43%;"></i></a></li>
            <li><a href="#photo2"><img src="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto2) ?>" alt="" height="80" width="120"></a><a data-fslightbox="gallery" href="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto2) ?>"><i class="fa-solid fa-expand" style="color: #000000; padding-left: 43%;"></i></a></li>
            <li><a href="#photo3"><img src="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto3) ?>" alt="" height="80" width="120"></a><a data-fslightbox="gallery" href="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto3) ?>"><i class="fa-solid fa-expand" style="color: #000000; padding-left: 43%;"></i></a></li>
            <li><a href="#photo4"><img src="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto4) ?>" alt="" height="80" width="120"></a><a data-fslightbox="gallery" href="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto4) ?>"><i class="fa-solid fa-expand" style="color: #000000; padding-left: 43%;"></i></a></li>
            <li><a href="#photo5"><img src="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto5) ?>" alt="" height="80" width="120"></a><a data-fslightbox="gallery" href="/mansory_php/assets/images/voitures/<?php echo($strCodeMarque) ?>/<?php echo($strCodeModele) ?>/<?php echo($strCodeModele) ?>_<?php echo($strLienPhoto5) ?>"><i class="fa-solid fa-expand" style="color: #000000; padding-left: 43%;"></i></a></li>
        </ul>
    </div>
    <div class="titreVideo pt-5 pb-5">
        <h1 class="pb-5"><?php echo($strTitreVideo) ?></h1>
        <iframe class="video pb-5" src="<?php echo($strLienVideo) ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</main>
<script src="/mansory_php/assets/js/fslightbox.js"></script>