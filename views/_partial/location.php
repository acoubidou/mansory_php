<main>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="/mansory_php/index.php">Accueil</a></li>
    <li class="breadcrumb-item"><a href="/mansory_php/views/nous_trouver.php">Nous trouver</a></li>
    <li class="breadcrumb-item active" aria-current="page"><?php echo($strNomPage) ?></li>
    </ol>
</nav>
<div class="container text-center">
    <div class="row align-items-center">
        <div class="col-12 col-lg-6 pb-5">
            <iframe src="<?php echo($strLienMap) ?>" width="100%" height="500px"></iframe>
        </div>
        <div class="col-12 offset-md-2 col-lg-3 pb-5">
            <div class="caseLocSpec">
                <i class="fa-solid fa-location-dot" style="color: #d4b170;"></i><span class="ps-3"><?php echo($strNomGarage) ?></span><br>
                <span><?php echo($strAdressegarage) ?></span><br>
                <span><?php echo($strPaysGarage) ?></span><br>
                <i class="fa-solid fa-phone"></i><span class="ps-3"><a href="tel:<?php echo($strTelGarage) ?>"><?php echo($strTelGarage) ?></a></span><br>
                <i class="fa-regular fa-envelope"></i><span class="ps-3"><a href="mailto:<?php echo($strMailGarage) ?>"><?php echo($strMailGarage) ?></a></span><br>
                <i class="fa-solid fa-globe"></i><span class="ps-3"><a href="<?php echo($strSiteGarage) ?>" target="_blank"><?php echo($strSiteGarage) ?></a></span>
            </div>
        </div>
    </div>
</div>
</main>