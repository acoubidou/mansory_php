<?php 
	$strPage = "a_propos";
    $strTitre = "A propos de Mansory";
	include("_partial/header.php");
?>

<main>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/mansory_php/index.php">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">A propos de nous</li>
        </ol>
    </nav>
    <!--     PRESENTATION DE LA MARQUE     -->
    <div class="container">
        <h1 class="text-center p-5">QUI SOMMES NOUS ?</h1>
        <p class="texteQui"><span class="titrePres">MANSORY - more than tradition, more than racing</span><br><br>
            Les voitures de luxe britanniques et leur style particulier ont toujours été la passion de Kourosh Mansory, le propriétaire et homonyme de MANSORY. 
            Cette passion l'a conduit à passer de nombreuses années en Angleterre et à s'engager personnellement en faveur de valeurs automobiles telles que la 
            tradition, l'artisanat et la technologie bien conçue. Déjà lors de la fondation de l'entreprise en 1989, une attention particulière a été accordée 
            aux marques Rolls Royce, Bentley, Aston Martin et Ferrari. À la mi-2001, l'entreprise a déménagé de Munich au Fichtelgebirge. Sur son nouveau site à 
            Brand, près de Bayreuth, célèbre pour son festival Wagner, l'équipe qualifiée produit un tuning haut de gamme dans toutes les disciplines de la fabrication 
            automobile individuelle. En reprenant la division Porsche-Tuning de la société suisse Rinspeed AG en novembre 2007, MANSORY a étendu son portefeuille 
            de produits. L'accent principal est mis sur le développement et la vente d'un programme de tuning et d'accessoires pour les automobiles Porsche, BMW 
            et Range Rover à l'échelle internationale.<br><br>
            La production au plus haut niveau technique combinée à un artisanat magistral et à des matériaux de la plus haute qualité - voilà la norme de qualité de 
            la société MANSORY. Des programmes d'aérodynamique harmonieusement conçus, des jantes en aluminium ultra-légères et des améliorations puissantes des 
            performances du moteur sont la base du programme technologique de MANSORY. Des accessoires de haute qualité et des équipements intérieurs élégants 
            complètent l'assortiment. Que ce soit de manière dynamique frappante ou extravagante et noble, les intérieurs MANSORY offrent confort et confiance.<br><br>
            MANSORY Design & Holding GmbH propose exclusivement des accessoires de modification développés en interne. Aujourd'hui, MANSORY emploie plus de 200 
            collaborateurs et réalise presque tous les rêves automobiles de sa clientèle exclusive, en Allemagne, en Suisse et via des partenaires de vente 
            sélectionnés dans le monde entier.</p>
    </div>
    <!--     INTEGRATION VIDEO YTB     -->
    <div class="videoPropos">
        <h1 class="text-center p-5">NOUS DECOUVRIR EN VIDEO</h1>
        <iframe  class="video" src="https://www.youtube.com/embed/sEazpZQEaxg?si=AC7KEr_cRZ995QEn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    </div>
</main>

<?php include("_partial/footer.php");?>