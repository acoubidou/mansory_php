$(document).ready(function() {

    $("#bouton1").on("click", function() {
        $("#card1").css("border", "3px solid green");
        $('#lienImg1ComparGauche').attr("src","/mansory_php/assets/images/voitures/aston_martin/dbx/dbx_avant.jpg");
        $('#ComparGaucheTitre').text("ASTON MARTIN DBX");
        
        
    });

});