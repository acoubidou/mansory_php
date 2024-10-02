<?php 
	$strPage = "location";
    $strTitre = "Location - Mansory";
	include("../_partial/header.php");

    // Général de la page
    $strNomPage = "Mansory Suisse";
    $strLienMap = "https://www.google.com/maps/d/u/0/embed?mid=1u35AnA-iK5kVFzfxdCKbM_IiJ9GYOEc&ehbc=2E312F";

    // Informations location
    $strNomGarage = "MANSORY GROUP SARL";
    $strAdressegarage = "1 rue de Abraham-Gevray, Genève, 1201";
    $strPaysGarage = "SUISSE";
    $strTelGarage = "+41 79 802 00 00";
    $strMailGarage = "swiss@mansory.com";
    $strSiteGarage = "https://www.mansory.ch";
    include("../_partial/location.php");

    include("../_partial/footer.php");
?>