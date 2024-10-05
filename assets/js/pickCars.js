$(document).ready(function() {

    // var tab = [
    //     ["AUDI","2020","V8"],
    //     ["ASTON MARTIN","2020","V32"]
    // ];
    // $("button").on("click", function(){
    //     console.log("salut");
    //     $.each(tab, function(){
    //         console.log(this[0]);
    //         $("#bouton1").on("click", function() {
    //             $('#comparGaucheNom').text(this[0]);
    //         });
    //         $("#bouton2").on("click", function() {
    //             $('#comparGaucheNom').text(this[0]);
    //         });
    //     });
    // });
    //ASTON MARTIN
    $("#bouton1").on("click", function() {
        $("#card1").css("border", "3px solid green");
        $("#accordeon1").css("border", "3px solid green");
        $('#lienImg1ComparGauche').attr("src","/mansory_php/assets/images/voitures/aston_martin/dbx/dbx_avant.jpg");
        $('#lienImg1ComparGauche').attr("class","p-0");
        $('#comparGaucheNom').text("ASTON MARTIN DBX");
        $('#comparGaucheAnnee').text("2020");
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
        $('#lienImg1ComparGauche').attr("class","p-0");
        $('#comparDroiteNom').text("ASTON MARTIN DBX");
        $('#comparDroiteAnnee').text("2020");
        $('#comparDroiteMoteur').text("V8");
        $('#comparDroitePuissance').text("800ch");
        $('#comparDroiteCouple').text("1000nm");
        $('#comparDroiteAcceleration').text("3.8s");
        $('#comparDroiteVitesse').text("325km/h");
        $('#comparDroitePrix').text("400 000€"); 
    });
    //AUDI
    $("#bouton2").on("click", function() {
        $("#card2").css("border", "3px solid green");
        $("#accordeon2").css("border", "3px solid green");
        $('#lienImg1ComparGauche').attr("src","/mansory_php/assets/images/voitures/audi/RS6/RS6_avant.jpg");
        $('#lienImg1ComparGauche').attr("class","p-0");
        $('#comparGaucheNom').text("AUDI RS6");
        $('#comparGaucheAnnee').text("2020");
        $('#comparGaucheMoteur').text("V8");
        $('#comparGauchePuissance').text("730ch");
        $('#comparGaucheCouple').text("1000nm");
        $('#comparGaucheAcceleration').text("3.2s");
        $('#comparGaucheVitesse').text("320km/h");
        $('#comparGauchePrix').text("300 000€"); 
    });
    $("#bouton18").on("click", function() {
        $("#card18").css("border", "3px solid green");
        $("#accordeon18").css("border", "3px solid green");
        $('#lienImg1ComparDroite').attr("src","/mansory_php/assets/images/voitures/audi/RS6/RS6_avant.jpg");
        $('#lienImg1ComparDroite').attr("class","p-0");
        $('#comparDroiteNom').text("AUDI RS6");
        $('#comparDroiteAnnee').text("2020");
        $('#comparDroiteMoteur').text("V8");
        $('#comparDroitePuissance').text("730ch");
        $('#comparDroiteCouple').text("1000nm");
        $('#comparDroiteAcceleration').text("3.2s");
        $('#comparDroiteVitesse').text("320km/h");
        $('#comparDroitePrix').text("300 000€"); 
    });
    $("#bouton102").on("click", function() {
        $("#card102").css("border", "3px solid green");
        $("#accordeon2").css("border", "3px solid green");
        $('#lienImg1ComparGauche').attr("src","/mansory_php/assets/images/voitures/audi/rsq8/rsq8_avant.jpg");
        $('#lienImg1ComparGauche').attr("class","p-0");
        $('#comparGaucheNom').text("AUDI RSQ8");
        $('#comparGaucheAnnee').text("2020");
        $('#comparGaucheMoteur').text("V8");
        $('#comparGauchePuissance').text("780ch");
        $('#comparGaucheCouple').text("1000nm");
        $('#comparGaucheAcceleration').text("3.3s");
        $('#comparGaucheVitesse').text("320km/h");
        $('#comparGauchePrix').text("300 000€"); 
    });
    $("#bouton118").on("click", function() {
        $("#card118").css("border", "3px solid green");
        $("#accordeon18").css("border", "3px solid green");
        $('#lienImg1ComparDroite').attr("src","/mansory_php/assets/images/voitures/audi/rsq8/rsq8_avant.jpg");
        $('#lienImg1ComparDroite').attr("class","p-0");
        $('#comparDroiteNom').text("AUDI RSQ8");
        $('#comparDroiteAnnee').text("2020");
        $('#comparDroiteMoteur').text("V8");
        $('#comparDroitePuissance').text("780ch");
        $('#comparDroiteCouple').text("1000nm");
        $('#comparDroiteAcceleration').text("3.3s");
        $('#comparDroiteVitesse').text("320km/h");
        $('#comparDroitePrix').text("300 000€"); 
    });
});