<main>
    <!-- Fil d'ariane -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../../">Accueil</a></li>
            <li class="breadcrumb-item"><a href="../voitures_marques.php">Voitures</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo($strPage) ?></li>
        </ol>
    </nav>
    <div class="container">
        <div class="row">
            <!-- Première voiture -->
            <?php 
            if(isset($boolPlus)){
                echo ('
                <div class="col-12 offset-lg-1 col-lg-4 d-flex flex-column text-center">
                    <div>
                        <a href="/mansory_php/views/voiture_modele/'.$strCodeModele1.'.php"><img src="/mansory_php/assets/images/voitures/'.$strCodeMarque.'/'.$strCodeModele1.'/'.$strCodeModele1.'.png" alt="'.$strCodeModele1.'" class="imgModeleHover"></a> 
                    </div>
                    <div class="btnModeleMarque d-flex justify-content-center align-self-center">
                        <a href="/mansory_php/views/voiture_modele/'.$strCodeModele1.'.php" class="btnModele">'.$strNomModele1.'</a>
                    </div>
                </div>
                <div class="col-12 offset-lg-2 col-lg-4 d-flex flex-column text-center">
                    <div>
                        <a href="/mansory_php/views/voiture_modele/'.$strCodeModele2.'.php"><img src="/mansory_php/assets/images/voitures/'.$strCodeMarque.'/'.$strCodeModele2.'/'.$strCodeModele2.'.png" alt="'.$strCodeModele2.'" class="imgModeleHover"></a> 
                    </div>
                    <div class="btnModeleMarque d-flex justify-content-center align-self-center">
                        <a href="/mansory_php/views/voiture_modele/'.$strCodeModele2.'.php" class="btnModele">'.$strNomModele2.'</a>
                    </div>
                </div>
                ');
            }else{
                echo ('
                <div class="col-12 offset-lg-4 col-lg-4 d-flex flex-column text-center">
                    <div>
                        <a href="/mansory_php/views/voiture_modele/'.$strCodeModele1.'.php"><img src="/mansory_php/assets/images/voitures/'.$strCodeMarque.'/'.$strCodeModele1.'/'.$strCodeModele1.'.png" alt="'.$strCodeModele1.'" class="imgModeleHover"></a> 
                    </div>
                    <div class="btnModeleMarque d-flex justify-content-center align-self-center">
                        <a href="/mansory_php/views/voiture_modele/'.$strCodeModele1.'.php" class="btnModele">'.$strNomModele1.'</a>
                    </div>
                </div>
                ');
            }
            ?>

        </div>
    </div>
</main>