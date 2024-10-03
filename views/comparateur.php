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
                                ["1","1001","17","17.1","Aston Martin","DBX","aston_martin","dbx","Rien","Rien","Rien"],
                                ["2","1002","18","18.1","Audi","RS6","audi","RS6","RSQ8","audi","rsq8"],
                                ["3","1003","19","19.1","Bentley","BENTAYGA","bentley","bentayga","FLYING SPUR","bentley","flying_spur"],
                                ["4","1004","20","20.1","BMW","SERIE 7","bmw","serie7","SERIE 7 NEW","bmw","serie7new"],
                                ["5","1005","21","21.1","Bugatti","CHIRON","bugatti","chiron","Rien","Rien","Rien"],
                                ["6","1006","22","22.1","Cadillac","ESCALADE","cadillac","escalade","Rien","Rien","Rien"],
                                ["7","1007","23","23.1","Ferrari","812 GTS","ferrari","812_gts","SF90 SPIDER","ferrari","sf90_spider"],
                                ["8","1008","24","24.1","Ford","GT","ford","gt","Rien","Rien","Rien"],
                                ["9","1009","25","25.1","Lamborghini","URUS","lamborghini","urus","AVENTADOR SVJ ROADSTER","lamborghini","aventador_svj_roadster"],
                                ["10","1010","26","26.1","Land Rover","RANGE ROVER SV","land_rover","sv","Rien","Rien","Rien"],
                                ["11","1011","27","27.1","Lotus","EVORA GTE","lotus","evora_gte","Rien","Rien","Rien"],
                                ["12","1012","28","28.1","Maserati","MC20","maserati","mc20","Rien","Rien","Rien"],
                                ["13","1013","29","29.1","Mclaren","720S","mclaren","720S","Rien","Rien","Rien"],
                                ["14","1014","30","30.1","Mercedes","AMG GT63 S E PERFORMANCE","mercedes","amg_gt63_s_e_performance","SL63","mercedes","sl63",],
                                ["15","1015","31","31.1","Porsche","911 (992)","porsche","911_(992)","Rien","Rien","Rien"],
                                ["16","1016","32","32.1","Rolls-Royce","CULLINAN","rolls_royce","cullinan","GHOST","rolls_royce","ghost"],
                            ];

                            foreach ($array as list($numero1, $sousnumero1, $numero2, $sousnumero2, $marque, $modele, $marque_lien, $modele_lien, $modele2, $marque_lien2, $modele_lien2)) {
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
                                                <div class="card me-2" style="width: 15rem;">
                                                    <img src="/mansory_php/assets/images/voitures/'.$marque_lien.'/'.$modele_lien.'/'.$modele_lien.'_avant.jpg" class="card-img-top" alt="'.$modele.'">
                                                    <div class="card-body">
                                                        <h5 class="card-title">'.$modele.'</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                                                        <button class="btn btn-primary" id="bouton'.$numero1.'">Choisir</button>
                                                    </div>
                                                </div>'
                                );
                                if ($modele2 != "Rien") { echo('
                                                <div class="card" style="width: 15rem;">
                                                    <img src="/mansory_php/assets/images/voitures/'.$marque_lien2.'/'.$modele_lien2.'/'.$modele_lien2.'_avant.jpg" class="card-img-top" alt="'.$modele2.'">
                                                    <div class="card-body">
                                                        <h5 class="card-title">'.$modele2.'</h5>
                                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                                                        <a href="#" class="btn btn-primary" id="bouton'.$sousnumero1.'">Choisir</a>
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
                                foreach ($array as list($numero1, $sousnumero1, $numero2, $sousnumero2, $marque, $modele, $marque_lien, $modele_lien, $modele2, $marque_lien2, $modele_lien2)) {
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
                                                            <button class="btn btn-primary id="bouton'.$numero2.'">Choisir</button>
                                                        </div>
                                                    </div>
                                    ');
                                    if ($modele2 != "Rien") { echo('
                                                    <div class="card" style="width: 15rem;">
                                                        <img src="/mansory_php/assets/images/voitures/'.$marque_lien2.'/'.$modele_lien2.'/'.$modele_lien2.'_avant.jpg" class="card-img-top" alt="'.$modele.'">
                                                        <div class="card-body">
                                                            <h5 class="card-title">'.$modele2.'</h5>
                                                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card\'s content.</p>
                                                            <a href="#" class="btn btn-primary id="bouton'.$sousnumero2.'">Choisir</a>
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