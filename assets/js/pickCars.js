$(document).ready(function() {

    $("#bouton1").on("click", function() {
        console.log("sami");
        $("#card1").css("border", "3px solid green");
        $('#lienImg1Compar').attr("src","/mansory_php/assets/images/voitures/aston_martin/dbx/dbx_avant.jpg");
        $('#tabGaucheComparTitre').text("ASTON MARTIN DBX");
        
        
    });

});