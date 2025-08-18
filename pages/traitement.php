<?php
    $pageTitle = "Me contacter";
    $currentNavPart = "contact";
    require(__DIR__ . '../../header.php'); 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require '../vendor/autoload.php';

    //Retrieve all form data
    $prenom = $_POST['prenom'];
    $nom = $_POST['nom'];
    $objet = $_POST['objet'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $config = require(__DIR__ . '/../credentials.php');

    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                    //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host = 'smtp.gmail.com';                             //Set the SMTP server to send through
        $mail->SMTPAuth = true;                                     //Enable SMTP authentication
        $mail->Username = $config['RECIPIENT_EMAIL'];               //SMTP username
        $mail->Password = $config['SMTP_PASSWORD'];                 //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable explicit TLS encryption via STARTTLS
        $mail->Port = 587;                                          //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom($email, htmlspecialchars($prenom) . " " . htmlspecialchars($nom));
        $mail->addAddress($config['RECIPIENT_EMAIL']);
        $mail->addReplyTo($email, htmlspecialchars($prenom) . " " . htmlspecialchars($nom));

        //Content
        $mail->isHTML(true);                                        //Set email format to HTML
        $mail->CharSet = 'UTF-8';                              
        $mail->Subject = htmlspecialchars($objet);
        $mail->Body = nl2br(htmlspecialchars($message));
        $mail->AltBody = strip_tags(htmlspecialchars($message));
        $mail->send();
?>
<main class="revealEffect">
    <section class="flexRow">
        <div class="flexCol">
            <h1>Votre message a bien été envoyé</h1> 
            <p>Merci <?php echo htmlspecialchars($prenom); ?>, je vous répondrai dès que possible.</p>
            <a href="contact.php?lang=<?= $lang ?>" class="btn">Retour au formulaire</a>
        </div>
    </section>
<?php 
    } catch (Exception $e) {
?>
    <div class="error-message">
        <h2>Erreur ❌</h2>
        <p>Le message n'a pas pu être envoyé.<br>
        <strong>Erreur :</strong> <?php echo htmlspecialchars($mail->ErrorInfo); ?></p>
        <a href="contact.php?lang=<?= $lang ?>" class="btn">Réessayer</a>
    </div>
</main>
<?php } ?>

<?php 
    require(__DIR__ . '../../footer.php'); 
?>

