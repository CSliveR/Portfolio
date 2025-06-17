<?php 
    $pageTitle = "Me contacter";
    $currentNavPart = "contact";
    require(__DIR__ . '../../header.php'); 
?>
<main class="verticalContainer revealEffect" id="contactMain">
    <h1><?= $trad["contact"] ?></h1>
    <p><?= $trad["contact_form_notice"]?></p>
    <form method="post" action="traitement.php">
        <div class="horizontalContainer">
            <input id="Prenom" type="text" name="Prenom" placeholder="<?= $trad["placeholder_first_name"] ?>" required>
            <input id="nom" type="text" name="nom" placeholder="<?= $trad["placeholder_last_name"] ?>" required>
        </div>

        <div>
            <input id="email" type="email" name="email" placeholder="<?= $trad["placeholder_email"]  ?>" required>
        </div>

        <div>
            <input id="objet" type="text" name="objet" placeholder="<?= $trad["placeholder_subject"] ?>" required>
        </div>

        <div>
            <textarea name="message" id="message" cols="30" rows="5" placeholder="<?= $trad["placeholder_message"] ?>"></textarea>
        </div>
                        
        <div>
            <input id="envoi" type="submit" value="<?= $trad["send_button"] ?>">
        </div>
    </form>
</main>
<?php 
    require(__DIR__ . '../../footer.php'); 
?>