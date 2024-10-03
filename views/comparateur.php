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
                <div class="compar_gauche col-12 col-lg-5 d-flex flex-column mt-5 p-2">
                    <div class="compar_gauche_titre d-flex justify-content-center pb-5">Choisir la première voiture</div>

                    <div class="accordion pb-5" id="accordionExample1">

                        <?php
                            $array = [
                                ["1","17","Non","Aston Martin","DBX","aston_martin","dbx","Rien","Rien","Rien"],
                                ["2","18","Oui","Audi","RS6","audi","RS6","RSQ8","audi","RSQ8"],
                                ["3","19","Oui","Bentley","BENTAYGA","bentley","bentayga","FLYING SPUR","bentley","flying_spur"],
                                ["4","20","Oui","BMW","SERIE 7","bmw","serie7","SERIE 7 NEW","bmw","serie7new"],
                                ["5","21","Non","Bugatti","CHIRON","bugatti","chiron","Rien","Rien","Rien"],
                                ["6","22","Non","Cadillac","ESCALADE","cadillac","escalade","Rien","Rien","Rien"],
                                ["7","23","Oui","Ferrari","812 GTS","ferrari","812_gts","SF90 SPIDER","ferrari","sf90_spider"],
                                ["8","24","Non","Ford","GT","ford","gt","Rien","Rien","Rien"],
                                ["9","25","Oui","Lamborghini","URUS","lamborghini","urus","AVENTADOR SVJ ROADSTER","lamborghini","aventador_svj_roadster"],
                                ["10","26","Non","Land Rover","RANGE ROVER SV","land_rover","sv","Rien","Rien","Rien"],
                                ["11","27","Non","Lotus","EVORA GTE","lotus","evora_gte","Rien","Rien","Rien"],
                                ["12","28","Non","Maserati","MC20","maserati","mc20","Rien","Rien","Rien"],
                                ["13","29","Non","Mclaren","720S","mclaren","720S","Rien","Rien","Rien"],
                                ["14","30","Oui","Mercedes","AMG GT63 S E PERFORMANCE","mercedes","amg_gt63_s_e_performance","SL63","mercedes","sl63",],
                                ["15","31","Non","Porsche","911 (992)","porsche","911_(992)","Rien","Rien","Rien"],
                                ["16","32","Oui","Rolls-Royce","CULLINAN","rolls_royce","cullinan","GHOST","rolls_royce","ghost"],
                            ];

                            foreach ($array as list($numero1, $numero2, $condition, $marque, $modele, $marque_lien, $modele_lien, $modele2, $marque_lien2, $modele_lien2)) {
                                echo('
                                    <!--     NOUVEL ACCORDEON     -->
                                    <div class="accordion-item">
                                        <h2 class="accordion-header">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$numero1.'" aria-expanded="true" aria-controls="collapse'.$numero1.'">
                                            '.$marque.'
                                        </button>
                                        </h2>
                                        <div id="collapse'.$numero1.'" class="accordion-collapse collapse" data-bs-parent="#accordionExample1">
                                            <div class="accordion-body d-flex justify-content-around">
                                                <div class="card" style="width: 15rem;">
                                                    <img src="/mansory_php/assets/images/voitures/'.$marque_lien.'/'.$modele_lien.'/'.$modele_lien.'_avant.jpg" class="card-img-top" alt="'.$modele.'">
                                                    <div class="card-body">
                                                        <h5 class="card-title">'.$modele.'</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                                                        <a href="#" class="btn btn-primary">Choisir</a>
                                                    </div>
                                                </div>'
                                );
                                if ($condition == "Oui") { echo('
                                                <div class="card" style="width: 15rem;">
                                                    <img src="/mansory_php/assets/images/voitures/'.$marque_lien2.'/'.$modele_lien2.'/'.$modele_lien2.'_avant.jpg" class="card-img-top" alt="'.$modele2.'">
                                                    <div class="card-body">
                                                        <h5 class="card-title">'.$modele2.'</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                                                        <a href="#" class="btn btn-primary">Choisir</a>
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
                <div class="compar_droite col-12 col-lg-5 d-flex flex-column mt-5 p-2">
                    
                    <div class="compar_droite_titre d-flex justify-content-center pb-5">Choisir la deuxième voiture</div>

                    <div class="accordion pb-5" id="accordionExample2">
                            <?php
                                foreach ($array as list($numero1, $numero2, $condition, $marque, $modele, $marque_lien, $modele_lien, $modele2, $marque_lien2, $modele_lien2)) {
                                    echo('
                                        <!--     NOUVEL ACCORDEON     -->
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse'.$numero2.'" aria-expanded="true" aria-controls="collapse'.$numero2.'">
                                                '.$marque.'
                                            </button>
                                            </h2>
                                            <div id="collapse'.$numero2.'" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                                                <div class="accordion-body d-flex justify-content-around">
                                                    <div class="card" style="width: 15rem;">
                                                        <img src="/mansory_php/assets/images/voitures/'.$marque_lien.'/'.$modele_lien.'/'.$modele_lien.'_avant.jpg" class="card-img-top" alt="'.$modele.'">
                                                        <div class="card-body">
                                                            <h5 class="card-title">'.$modele.'</h5>
                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                                                            <a href="#" class="btn btn-primary">Go somewhere</a>
                                                        </div>
                                                    </div>
                                    ');
                                    if ($condition == "Oui") { echo('
                                                    <div class="card" style="width: 15rem;">
                                                        <img src="/mansory_php/assets/images/voitures/'.$marque_lien2.'/'.$modele_lien2.'/'.$modele_lien2.'_avant.jpg" class="card-img-top" alt="'.$modele.'">
                                                        <div class="card-body">
                                                            <h5 class="card-title">'.$modele2.'</h5>
                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                                                            <a href="#" class="btn btn-primary">Choisir</a>
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
        </div>
    </main>
<?php 
    include("_partial/footer.php");
?>