<?php
    $strPage = "comparateur";
    $strTitre = "Comparateur Mansory";
    include("_partial/header.php");
?> 
    <main>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/mansory_php/index.php">Accueil</a></li>
            <li class="breadcrumb-item active" aria-current="page">Comparateur</li>
            </ol>
        </nav>
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-12 col-lg-5 d-flex flex-column mt-5 p-2">
                    <div class="compar_gauche_titre d-flex justify-content-center pb-5">Choisir la première voiture</div>

                    <div class="accordion pb-5" id="accordionExample1">

                        <?php
                            $array = [
                                ["1","101","17","117","Aston Martin","DBX","aston_martin","dbx","Rien","Rien","Rien"],
                                ["2","102","18","118","Audi","RS6","audi","RS6","RSQ8","audi","rsq8"],
                                ["3","103","19","119","Bentley","BENTAYGA","bentley","bentayga","FLYING SPUR","bentley","flying_spur"],
                                ["4","104","20","120","BMW","SERIE 7","bmw","serie7","SERIE 7 NEW","bmw","serie7new"],
                                ["5","105","21","121","Bugatti","CHIRON","bugatti","chiron","Rien","Rien","Rien"],
                                ["6","106","22","122","Cadillac","ESCALADE","cadillac","escalade","Rien","Rien","Rien"],
                                ["7","107","23","123","Ferrari","812 GTS","ferrari","812_gts","SF90 SPIDER","ferrari","sf90_spider"],
                                ["8","108","24","124","Ford","GT","ford","gt","Rien","Rien","Rien"],
                                ["9","109","25","125","Lamborghini","URUS","lamborghini","urus","AVENTADOR SVJ ROADSTER","lamborghini","aventador_svj_roadster"],
                                ["10","110","26","126","Land Rover","RANGE ROVER SV","land_rover","sv","Rien","Rien","Rien"],
                                ["11","111","27","127","Lotus","EVORA GTE","lotus","evora_gte","Rien","Rien","Rien"],
                                ["12","112","28","128","Maserati","MC20","maserati","mc20","Rien","Rien","Rien"],
                                ["13","113","29","129","Mclaren","720S","mclaren","720S","Rien","Rien","Rien"],
                                ["14","114","30","130","Mercedes","AMG GT63 S E PERFORMANCE","mercedes","amg_gt63_s_e_performance","SL63","mercedes","sl63",],
                                ["15","115","31","131","Porsche","911 (992)","porsche","911_(992)","Rien","Rien","Rien"],
                                ["16","116","32","132","Rolls-Royce","CULLINAN","rolls_royce","cullinan","GHOST","rolls_royce","ghost"],
                            ];

                            foreach ($array as list($numero1, $sousnumero1, $numero2, $sousnumero2, $marque, $modele, $marque_lien, $modele_lien, $modele2, $marque_lien2, $modele_lien2)) {
                                echo('
                                    <!--     NOUVEL ACCORDEON     -->
                                    <div class="accordion-item accordeonAllGauche" id="accordeon'.$numero1.'">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$numero1.'" aria-expanded="true" aria-controls="collapse'.$numero1.'">
                                            '.$marque.'
                                        </button>
                                        </h2>
                                        <div id="collapse'.$numero1.'" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body d-flex justify-content-center">
                                                <div class="card me-2 cardAllGauche" id="card'.$numero1.'" style="width: 15rem;">
                                                    <img src="/mansory_php/assets/images/voitures/'.$marque_lien.'/'.$modele_lien.'/'.$modele_lien.'_avant.jpg" class="card-img-top" alt="'.$modele.'">
                                                    <div class="card-body">
                                                        <h5 class="card-title">'.$modele.'</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                                                        <button class="btn btn-primary boutonAll" id="bouton'.$numero1.'">Choisir</button>
                                                    </div>
                                                </div>'
                                );
                                if ($modele2 != "Rien") { echo('
                                                <div class="card cardAllGauche" id="card'.$sousnumero1.'" style="width: 15rem;">
                                                    <img src="/mansory_php/assets/images/voitures/'.$marque_lien2.'/'.$modele_lien2.'/'.$modele_lien2.'_avant.jpg" class="card-img-top" alt="'.$modele2.'">
                                                    <div class="card-body">
                                                        <h5 class="card-title">'.$modele2.'</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                                                        <button class="btn btn-primary boutonAll" id="bouton'.$sousnumero1.'">Choisir</button>
                                                    </div>
                                                </div>
                                    ');
                                }
                                echo('
                                            </div>
                                        </div>
                                    </div>
                                ');
                            }
                        ?>
                    </div>
                </div>

                
                <div class="col-12 col-lg-5 d-flex flex-column mt-5 p-2">
                    
                    <div class="compar_droite_titre d-flex justify-content-center pb-5">Choisir la deuxième voiture</div>

                    <div class="accordion pb-5" id="accordionExample2">
                            <?php
                                foreach ($array as list($numero1, $sousnumero1, $numero2, $sousnumero2, $marque, $modele, $marque_lien, $modele_lien, $modele2, $marque_lien2, $modele_lien2)) {
                                    echo('
                                        <!--     NOUVEL ACCORDEON     -->
                                        <div class="accordion-item accordeonAllDroite" id="accordeon'.$numero2.'">
                                            <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$numero2.'" aria-expanded="true" aria-controls="collapse'.$numero2.'">
                                                '.$marque.'
                                            </button>
                                            </h2>
                                            <div id="collapse'.$numero2.'" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                                <div class="accordion-body d-flex justify-content-center">
                                                    <div class="card me-2 cardAllDroite" id="card'.$numero2.'" style="width: 15rem;">
                                                        <img src="/mansory_php/assets/images/voitures/'.$marque_lien.'/'.$modele_lien.'/'.$modele_lien.'_avant.jpg" class="card-img-top" alt="'.$modele.'">
                                                        <div class="card-body">
                                                            <h5 class="card-title">'.$modele.'</h5>
                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                                                            <button class="btn btn-primary boutonAll" id="bouton'.$numero2.'">Choisir</button>
                                                        </div>
                                                    </div>
                                    ');
                                    if ($modele2 != "Rien") { echo('
                                                    <div class="card cardAllDroite" id="card'.$sousnumero2.'" style="width: 15rem;">
                                                        <img src="/mansory_php/assets/images/voitures/'.$marque_lien2.'/'.$modele_lien2.'/'.$modele_lien2.'_avant.jpg" class="card-img-top" alt="'.$modele.'">
                                                        <div class="card-body">
                                                            <h5 class="card-title">'.$modele2.'</h5>
                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                                                            <button class="btn btn-primary boutonAll" id="bouton'.$sousnumero2.'">Choisir</button>
                                                        </div>
                                                    </div>
                                        ');
                                    }
                                    echo('
                                                </div>
                                            </div>
                                        </div>
                                    ');
                                }
                            ?>
                    </div>
                </div>  
            </div>

            <!-- IMAGE DE LA VOITURE -->                    
            <div class="row">
                <div class="comparGaucheEntier col-6 d-flex flex-column">
                    <div class="comparGauche d-flex justify-content-center">
                        <img id="lienImg1ComparGauche" class="p-3" src="/mansory_php/assets/images/general/mansory_logo_noir.png">
                    </div>
                </div>
                <div class="comparGaucheEntier col-6 d-flex flex-column">
                    <div class="comparDroite d-flex justify-content-center">
                        <img id="lienImg1ComparDroite" class="p-3" src="/mansory_php/assets/images/general/mansory_logo_noir.png">
                    </div>
                </div>
            </div>
            
            <!-- NOM DE LA VOITURE --> 
            <div class="row">
                <div class="comparGaucheEntier col-6 d-flex flex-column">
                    <div class="comparGauche pt-3">
                        <p class="comparTitres">Nom de la voiture</p>
                        <p id="comparGaucheNom" class="d-flex justify-content-center">-</p>
                    </div>
                </div>
                <div class="comparGaucheEntier col-6 d-flex flex-column">
                    <div class="comparDroite pt-3">
                        <p class="comparTitres">Nom de la voiture</p>
                        <p id="comparDroiteNom" class="d-flex justify-content-center">-</p>
                    </div>
                </div>
            </div>
            
            <!-- ANNEE DE LA VOITURE --> 
            <div class="row">
                <div class="comparGaucheEntier col-6 d-flex flex-column">
                    <div class="comparGauche pt-3" id="comparGaucheAnneeCase">
                        <p class="comparTitres">Année de sortie</p>
                        <p id="comparGaucheAnnee" class="d-flex justify-content-center">-</p>
                    </div>
                </div>
                <div class="comparGaucheEntier col-6 d-flex flex-column">   
                    <div class="comparDroite pt-3" id="comparDroiteAnneeCase">
                        <p class="comparTitres">Année de sortie</p>
                        <p id="comparDroiteAnnee" class="d-flex justify-content-center">-</p>
                    </div>  
                </div>
            </div>

            <!-- MOTEUR DE LA VOITURE --> 
            <div class="row">
                <div class="comparGaucheEntier col-6 d-flex flex-column">
                    <div class="comparGauche pt-3" id="comparGaucheMoteurCase">
                        <p class="comparTitres">Moteur</p>
                        <p id="comparGaucheMoteur" class="d-flex justify-content-center">-</p>
                    </div>
                </div>
                <div class="comparGaucheEntier col-6 d-flex flex-column">   
                    <div class="comparDroite pt-3" id="comparDroiteMoteurCase">
                        <p class="comparTitres">Moteur</p>
                        <p id="comparDroiteMoteur" class="d-flex justify-content-center">-</p>
                    </div>  
                </div>
            </div>

            <!-- PUISSANCE DE LA VOITURE --> 
            <div class="row">
                <div class="comparGaucheEntier col-6 d-flex flex-column">
                    <div class="comparGauche pt-3" id="comparGauchePuissanceCase">
                        <p class="comparTitres">Puissance</p>
                        <p id="comparGauchePuissance" class="d-flex justify-content-center">-</p>
                    </div>
                </div>
                <div class="comparGaucheEntier col-6 d-flex flex-column">   
                    <div class="comparDroite pt-3" id="comparDroitePuissanceCase">
                        <p class="comparTitres">Puissance</p>
                        <p id="comparDroitePuissance" class="d-flex justify-content-center">-</p>
                    </div>  
                </div>
            </div>

            <!-- COUPLE DE LA VOITURE --> 
            <div class="row">
                <div class="comparGaucheEntier col-6 d-flex flex-column">
                    <div class="comparGauche pt-3" id="comparGaucheCoupleCase">
                        <p class="comparTitres">Couple</p>
                        <p id="comparGaucheCouple" class="d-flex justify-content-center">-</p>
                    </div>
                </div>
                <div class="comparGaucheEntier col-6 d-flex flex-column">   
                    <div class="comparDroite pt-3" id="comparDroiteCoupleCase">
                        <p class="comparTitres">Couple</p>
                        <p id="comparDroiteCouple" class="d-flex justify-content-center">-</p>
                    </div>  
                </div>
            </div>

            <!-- 0-100KM/H DE LA VOITURE --> 
            <div class="row">
                <div class="comparGaucheEntier col-6 d-flex flex-column">
                    <div class="comparGauche pt-3" id="comparGaucheAccelerationCase">
                        <p class="comparTitres">0-100km/h</p>
                        <p id="comparGaucheAcceleration" class="d-flex justify-content-center">-</p>
                    </div>
                </div>
                <div class="comparGaucheEntier col-6 d-flex flex-column">   
                    <div class="comparDroite pt-3" id="comparDroiteAccelerationCase">
                        <p class="comparTitres">0-100km/h</p>
                        <p id="comparDroiteAcceleration" class="d-flex justify-content-center">-</p>
                    </div>  
                </div>
            </div>

            <!-- VITESSE DE LA VOITURE --> 
            <div class="row">
                <div class="comparGaucheEntier col-6 d-flex flex-column">
                    <div class="comparGauche pt-3" id="comparGaucheVitesseCase">
                        <p class="comparTitres">Vitesse</p>
                        <p id="comparGaucheVitesse" class="d-flex justify-content-center">-</p>
                    </div>
                </div>
                <div class="comparGaucheEntier col-6 d-flex flex-column">   
                    <div class="comparDroite pt-3" id="comparDroiteVitesseCase">
                        <p class="comparTitres">Vitesse</p>
                        <p id="comparDroiteVitesse" class="d-flex justify-content-center">-</p>
                    </div>  
                </div>
            </div>

            <!-- PRIX DE LA VOITURE --> 
            <div class="row">
                <div class="comparGaucheEntier col-6 d-flex flex-column">
                    <div class="comparGauche pt-3" id="comparGauchePrixCase">
                        <p class="comparTitres">Prix</p>
                        <p id="comparGauchePrix" class="d-flex justify-content-center">-</p>
                    </div>
                </div>
                <div class="comparGaucheEntier col-6 d-flex flex-column">   
                    <div class="comparDroite pt-3" id="comparDroitePrixCase">
                        <p class="comparTitres">Prix</p>
                        <p id="comparDroitePrix" class="d-flex justify-content-center">-</p>
                    </div>  
                </div>
            </div>

        </div>
    </main>
<?php 
    include("_partial/footer.php");
?>