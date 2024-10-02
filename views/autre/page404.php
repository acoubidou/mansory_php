<!-- .htaccess -->
<!-- ErrorDocument 404 /page404.php -->
<?php 
    $strPage = "page_404";
    $strTitre = "Oups...";
    include("../_partial/header.php");
?>  

<h1 class="titre404 pt-5" >Oups... Cette page n'existe pas !</h1>
<h2 class="titre404 pt-5">Vous pouvez ...</h2>
<div class="center">
  <div class="btn-1">
    <a href="../../index.php"><span>Aller à l'accueil</span></a>
  </div>
  <!-- Created by   http://grohit.com/   -->
  <div class="btn-1">
    <a href="../voitures_marques.php"><span>Voir les voitures</span></a>
  </div>
</div>
<?php
    include("../_partial/footer.php")
?>