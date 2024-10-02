<?php 
	$strPage = "accueil";
	$strTitre = "Mansory";
	include("views/_partial/header.php");
?>

<main>
	<div id="carouselExampleCaptions" class="carousel carousel-dark slide">
	<div class="carousel-indicators">
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
		<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
		<?php 
			$array = [
				["urus","Lamborghini Urus ","active"],
				["720S","Mclaren 720S",""],
				["rs6","Audi RS6 ",""],
			];

			foreach($array as list($code, $nom, $active)){
				echo ('
				<div class="carousel-item '.$active.'">
					<img src="assets/images/page_accueil/carousel/'.$code.'_avant_crop.jpg" class="d-block w-100">
					<div class="carousel-caption d-none d-md-block">
						<a href="views/voiture_modele/'.$code.'.php" class="lienCarousel"><h3 class="titreCarousel">'.$nom.' <i class="fa-solid fa-arrow-up-right-from-square" style="color: #000000;font-size: 20px;"></i></h3></a>
					</div>
				</div>
				');
			};
		?>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="visually-hidden">Next</span>
	</button>
	</div>

<!-- CONTENU -->
	<div class="container">
		<h1 class="titreContenuMilieu text-center pb-3">Découvrez MANSORY</h1>
		<p class="text-center pb-5">Mansory, l'incarnation de l'élégance et de l'innovation dans le monde 
			automobile. En tant que pionnier de la personnalisation de voitures de prestige, Mansory élève 
			le concept de luxe à de nouvelles hauteurs. Nos créations uniques marient avec virtuosité la 
			puissance mécanique à l'expression artistique, redéfinissant les limites du possible sur quatre 
			roues. Découvrez l'univers exclusif de Mansory, où la passion pour la perfection rencontre 
			l'audace du design, offrant une expérience de conduite inégalée. Bienvenue dans le monde de 
			l'automobile sur mesure, bienvenue chez Mansory.
		</p>
		<div class="text-center">
			<a href="views/a_propos_de_nous.php"><button type="button" class="btn btn-dark btn-lg">Découvrir Mansory</button></a>
		</div>
	</div>

<!--PRESENTATION DES 3 VOITURES-->
	<div class="row g-0 troisVoiture pt-5">
		<?php 
			$array = [
				["lien1","slot1","text1"],
				["lien2","slot2","text2"],
				["lien3","slot3","text3"],
			];
			foreach($array as list($imgLien, $imgSlot, $btnLien)){
				echo ('
				<div class="col-12 col-lg-4 d-flex flex-column text-center">
					<div>
						<a id="'.$imgLien.'" href=""><img id="'.$imgSlot.'" src="" alt="" class="imgAccHover p-5"></a>
					</div>
					<div class="btnModeleMarque d-flex justify-content-center align-self-center">
						<a id="'.$btnLien.'" href="" class="btnModele"></a>
					</div>
				</div>
				');
			};
		?>
	</div>
	<div class="row g-0">
		<div class="offset-lg-3 col-12 col-lg-6 d-flex flex-column text-center pt-5 pb-5">
			<!-- Bouton toute voiture -->
			<div class="btnModeleMarque d-flex justify-content-center align-self-center">
				<a href="views/voitures_visu.php" class="btnModele">VOIR TOUTES LES VOITURES</a>
			</div>
		</div>
	</div>
</main>

<?php include("views/_partial/footer.php");?>