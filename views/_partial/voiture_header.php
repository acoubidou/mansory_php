<main>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/mansory_php/index.php">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Voitures</li>
        </ol>
    </nav>
    <div class="container">
        <div class="catVoiture">
            <?php if ($strPage == "voitures_marques") { echo '<button type="button" class="btn btn-lg btn-secondary" disabled>Marques</button>';}
                  elseif ($strBesoinMarques == "Non") {echo '<button type="button" class="btn btn-lg btn-secondary" disabled>Marques</button>';}
                  else {echo '<a href="'.$strVoituresMarques.'.php"><button type="button" class="btn btn-lg btn-outline-dark">Marques</button></a>';}?> 
            <?php 
                  if ($strPage == "voitures_visu") { echo '<button type="button" class="btn btn-lg btn-secondary">Voitures</button>';}
                  elseif ($strBesoinVoitures == "Non") {echo '<button type="button" class="btn btn-lg btn-secondary" disabled>Voitures</button>';}
                  else {echo '<a href="'.$strVoituresVisu.'.php"><button type="button" class="btn btn-lg btn-outline-dark">Voitures</button></a>';}?> 
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <button class="btn btn-lg 
                    <?php if ($strDropdownNomPays != "Pays") {echo 'btn-secondary';}
                    else {echo 'btn-outline-dark';}?>
                    dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo($strDropdownNomPays); ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="<?php echo($strVoituresTous); ?>.php">Tous</a></li>
                        <li><a class="dropdown-item" href="<?php echo($strVoituresAll); ?>.php">Allemagne</a></li>
                        <li><a class="dropdown-item" href="<?php echo($strVoituresUs); ?>.php">Etats Unis</a></li>
                        <li><a class="dropdown-item" href="<?php echo($strVoituresFr); ?>.php">France</a></li>
                        <li><a class="dropdown-item" href="<?php echo($strVoituresUk); ?>.php">Grande Bretagne</a></li>
                        <li><a class="dropdown-item" href="<?php echo($strVoituresIt); ?>.php">Italie</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <button class="btn btn-lg 
                    <?php if ($strDropdownNomCat != "Catégorie") {echo 'btn-secondary';}
                    else {echo 'btn-outline-dark';}?> 
                    dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo($strDropdownNomCat); ?>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-dark">
                        <li><a class="dropdown-item" href="<?php echo($strVoituresCatTous); ?>.php">Tous</a></li>
                        <li><a class="dropdown-item" href="<?php echo($strVoituresCatSuv); ?>.php">SUV</a></li>
                        <li><a class="dropdown-item" href="<?php echo($strVoituresCatCab); ?>.php">Cabriolet</a></li>
                        <li><a class="dropdown-item" href="<?php echo($strVoituresCatEl); ?>.php">Edition limitée</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <input class="btn btn-lg btn-outline-dark dropdown-toggle" placeholder="Rechercher" id="myInput" onkeyup="myFunction()" data-bs-toggle="dropdown" aria-expanded="false">
                    <ul class="dropdown-menu dropdown-menu-dark" id="myUL" style="width:100%;">
                        <?php 
                            $dropdown = [
                                ["aston_martin","Aston Martin","marque"], ["dbx", "DBX","modele"], 
                                ["audi","Audi","marque"], ["rs6","RS6","modele"], ["rsq8", "RSQ8", "modele"],
                                ["bentley","Bentley","marque"], ["bentayga","Bentayga","modele"], ["flying_spur","Flying Spur","modele"],
                                ["bmw","BMW","marque"], ["serie7","Serie 7","modele"], ["serie7new","Serie 7 NEW","modele"],
                                ["bugatti","Bugatti","marque"], ["chiron","Chiron","modele"],
                                ["cadillac","Cadillac","marque"], ["escalade","Escalade","modele"],
                                ["ferrari","Ferrari","marque"], ["812_gts","812 GTS","modele"], ["sf90_spider","SF90 SPIDER","modele"],
                                ["ford","Ford","marque"], ["gt","GT","modele"],
                                ["lamborghini","Lamborghini","marque"], ["urus","Urus","modele"], ["aventador_svj_roadster","Aventador SVJ Roadster","modele"],
                                ["land_rover","Land Rover","marque"], ["sv","RANGE ROVER SV","modele"],
                                ["lotus","Lotus","marque"], ["evora_gte","Evora GTE","modele"],
                                ["maserati","Maserati","marque"], ["mc20","MC20","modele"],
                                ["mclaren","Mclaren","marque"], ["720S","720 S","modele"],
                                ["mercedes","Mercedes","marque"], ["amg_gt63_s_e_performance","AMG GT63 S E PERFORMANCE","modele"],["sl63","SL63","modele"],
                                ["porsche","Porsche","marque"], ["911_(992)","911 (992)","modele"],
                                ["rolls_royce","Rolls-Royce","marque"], ["cullinan","Cullinan","modele"], ["ghost", "Ghost","modele"],
                            ];
                            foreach($dropdown as list($code, $nom, $type)){
                                echo ('<li style="display:none;"><a class="dropdown-item" href="/mansory_php/views/voiture_'.$type.'/'.$code.'.php">'.$nom.'</a></li>');
                            }
                        ?>
                    </ul>
                </li>
            </ul>
        </div>