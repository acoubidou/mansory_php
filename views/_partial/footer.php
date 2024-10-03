		<footer>
			<div>
				<div class="container">
					<div class="d-flex flex-raw justify-content-between">
						<p class="ps-3 pt-3 allLienFooter">
							<a href="https://www.facebook.com/mansory" target="blanket" class="allLienFooter"><i class="fa-brands fa-facebook-f lienFooter" id="lienFacebook"></i></a>
							| 
							<a href="https://www.instagram.com/" target="blanket" class="allLienFooter"><i class="fa-brands fa-instagram lienFooter" id="lienInsta"></i></a>
							| 
							<a href="https://www.youtube.com/mansory" target="blanket" class="allLienFooter"><i class="fa-brands fa-youtube lienFooter" id="lienYtb"></i></a>
							| 
							<a href="https://www.mansory.com/" target="blanket" class="lienFooter lienReste pe-1" class="allLienFooter">Site officiel</a>
						</p>
						<p class="lienFooter pe-3 pt-3 allLienFooter">
							<a href="/mansory_php/views/mentions_legales.php" class="lienFooter lienReste">Mentions légales</a>
							|
							<a href="/mansory_php/views/plan_du_site.php" class="lienFooter lienReste">Plan du site</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
	<?php if($strPage == "accueil"){?>
        <script src="assets/js/imgRandom.js"></script>
    <?php }?>
	<?php if($strPage == "comparateur"){?>
        <script src="/mansory_php/assets/js/pickCars.js"></script>
    <?php }?>
</body>
</html>