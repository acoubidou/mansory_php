$(document).ready(function() {
    /* SLOT 1 */
    var idimg = 1 + Math.floor(2 * Math.random());
    $('#slot1').attr("src","assets/images/page_accueil/imageRandom/slot1/voiture"+idimg+".jpg");
    console.log(idimg);
    if (idimg == 1) {
        $('#lien1').attr("href","views/voiture_modele/amg_gt63_s_e_performance.php");
        $('#text1').text("AMG GT63 S E");
        $('#text1').attr("href","views/voiture_modele/amg_gt63_s_e_performance.php");
    }
    if (idimg == 2) {
        $('#lien1').attr("href","views/voiture_modele/rsq8.php");
        $('#text1').text("RSQ8");
        $('#text1').attr("href","views/voiture_modele/rsq8.php");
    }
    /* SLOT 2 */
    var idimg = 1 + Math.floor(2 * Math.random());
    $('#slot2').attr("src","assets/images/page_accueil/imageRandom/slot2/voiture"+idimg+".jpg");
    console.log(idimg);
    if (idimg == 1) {
        $('#lien2').attr("href","views/voiture_modele/812_gts.php");
        $('#text2').text("812 GTS");
        $('#text2').attr("href","views/voiture_modele/812_gts.php");
    }
    if (idimg == 2) {
        $('#lien2').attr("href","views/voiture_modele/dbx.php");
        $('#text2').text("DBX");
        $('#text2').attr("href","views/voiture_modele/dbx.php");
    }
    /* SLOT 3 */
    var idimg = 1 + Math.floor(2 * Math.random());
    $('#slot3').attr("src","assets/images/page_accueil/imageRandom/slot3/voiture"+idimg+".jpg");
    console.log(idimg);
    if (idimg == 1) {
        $('#lien3').attr("href","views/voiture_modele/911_(992).php");
        $('#text3').text("911 (992)");
        $('#text3').attr("href","views/voiture_modele/911_(992).php");
    }
    if (idimg == 2) {
        $('#lien3').attr("href","views/voiture_modele/sv.php");
        $('#text3').text("RANGE ROVER SV");
        $('#text3').attr("href","views/voiture_modele/sv.php");
    }
});