<?php 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../libs/PHPMailer/Exception.php';
    require '../libs/PHPMailer/PHPMailer.php';
    require '../libs/PHPMailer/SMTP.php';
    
	$strPage = "contact";
    $strTitre = "Contact Mansory";
	include("_partial/header.php");
?>

<main>
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/mansory_php/index.php">Accueil</a></li>
        <li class="breadcrumb-item active" aria-current="page">Nous contacter</li>
        </ol>
    </nav>
    <h1 class="d-flex justify-content-center p-5">NOUS CONTACTER</h1>
    <div class="container">
        <div class="row">
            <div class="col-12 offset-lg-1 col-lg-4">
                <form action="" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nom et Prénom<span>*</span></label>
                        <input type="text" class="form-control" required id="name" aria-describedby="name" name="nom" autocomplete="on">
                    </div>
                    <div class="mb-3">
                        <label for="Email" class="form-label">Email<span>*</span></label>
                        <input type="email" class="form-control" required id="Email" aria-describedby="email" name="mail" autocomplete="on">
                    </div>
                    <div class="mb-3">
                        <label for="Pays" class="form-label">Sujet<span>*</span></label>
                        <input type="text" class="form-control" required id="Pays" aria-describedby="pays" name="sujet">
                    </div>
                    <div class="mb-3">
                        <label for="exampleFormControlTextarea1" class="form-label">Message<span>*</span></label>
                        <textarea class="form-control"  required id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" required class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">J'accepte la collecte et le traitement des données personnelles</label>
                        </div>
                    <button type="submit" class="btn btn-primary" name="envoyer">Submit</button>
                    <p id="success"></p>
                    </form>
            </div>
            <div class="col-12 col-lg-6 text-center">
                <div class="caseLocSpec pt-5">
                    <!--<i class="fa-solid fa-location-dot" style="color: black;"></i><span class="ps-3">MANSORY DESIGN</span><br>
                    <span>Wunsiedler Str.1 95682 Brand</span><br>
                    <span>ALLEMAGNE</span><br>
                    <i class="fa-solid fa-phone"></i><span class="ps-3"><a href="tel:+49 9236 96820">+49 9236 96820</a></span><br>-->
                    <i class="fa-regular fa-envelope"></i><span class="ps-3"><a href="mailto:sami.achbani@gmail.com">sami.achbani@gmail.com</a></span><br>
                    <i class="fa-solid fa-globe"></i><span class="ps-3"><a href="https://www.samiachbani.fr" target="_blank">https://www.samiachbani.fr</a></span>
                </div>
            </div>
        </div>
    </div>
    <img src="/mansory_php/assets/images/page_contact/siège-social-allemagne.jpg" alt="siège social allemagne" class="pt-5">
</main>

<?php 
    
    if(isset($_POST['envoyer'])){
        sendMail();
    }

    function sendMail(){

        $name = $_POST['nom'];
        $email = $_POST['mail'];
        $subject = $_POST['sujet'];
        $body = $_POST['message'];
        $bodyMEF = 'Nom : '.$name.'Mail: '.$email.'Message: '.$body;

        $mail = new PHPMailer();
        $mail->CharSet = "UTF-8";
        $mail->IsSMTP();
        $mail->Mailer = "smtp";
    
        $mail->SMTPDebug= 0;
        $mail->SMTPAuth= TRUE;
        $mail->SMTPSecure= "tls";
        $mail->Port = 587;
        $mail->Host = "smtp.gmail.com";
        $mail->Username= 'projetmansory@gmail.com';
        $mail->Password= 'poux bsgw oijp hqzw';
    
        $mail->IsHTML(true);
        $mail->setFrom('projetmansory@gmail.com', 'Visiteur Mansory');
        $mail->addAddress('sami.achbani@gmail.com', 'Sami');
        $mail->Subject= $subject;
        $mail->Body = $bodyMEF;
        //$mail->addAttachment('test.txt');
        if (!$mail->send()) {
        echo'Erreur de Mailer : ' . $mail->ErrorInfo;
        } else{
        echo'Le message a été envoyé.';
        }
    }

    include("_partial/footer.php");
?>