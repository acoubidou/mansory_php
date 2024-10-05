$(document).ready(function() {

    $("#bouton1").on("click", function() {
        $("#card1").css("border", "3px solid green");
        $("#accordeon1").css("border", "3px solid green");
        $('#lienImg1ComparGauche').attr("src","/mansory_php/assets/images/voitures/aston_martin/dbx/dbx_avant.jpg");
        $('#comparGaucheNom').text("ASTON MARTIN DBX");
        $('#comparGaucheAnnee').text("2021");
        $('#comparGaucheMoteur').text("V8");
        $('#comparGauchePuissance').text("800ch");
        $('#comparGaucheCouple').text("1000nm");
        $('#comparGaucheAcceleration').text("3.8s");
        $('#comparGaucheVitesse').text("325km/h");
        $('#comparGauchePrix').text("400 000€"); 
    });
    $("#bouton17").on("click", function() {
        $("#card17").css("border", "3px solid green");
        $("#accordeon17").css("border", "3px solid green");
        $('#lienImg1ComparDroite').attr("src","/mansory_php/assets/images/voitures/aston_martin/dbx/dbx_avant.jpg");
        $('#comparDroiteNom').text("ASTON MARTIN DBX");
        $('#comparDroiteAnnee').text("2021");
        $('#comparDroiteMoteur').text("V8");
        $('#comparDroitePuissance').text("800ch");
        $('#comparDroiteCouple').text("1000nm");
        $('#comparDroiteAcceleration').text("3.8s");
        $('#comparDroiteVitesse').text("325km/h");
        $('#comparDroitePrix').text("400 000€"); 
    });

});