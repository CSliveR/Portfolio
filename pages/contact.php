<?php 
    $pageTitle = "Me contacter";
    $currentNavPart = "contact";
    require(__DIR__ . '../../header.php'); 
?>
<main class="revealEffect">
    <h1><?= $trad["contact"] ?></h1>
    <form method="post" action="traitement.php">
        <label for="prenom">Prénom :</label>
        <input id="prenom" type="text" name="prenom" placeholder="<?= $trad["placeholder_first_name"] ?>" required>

        <label for="nom">Nom :</label>
        <input id="nom" type="text" name="nom" placeholder="<?= $trad["placeholder_last_name"] ?>" required>

        <label for="email">Votre email :</label>
        <input id="email" type="email" name="email" placeholder="<?= $trad["placeholder_email"] ?>" required>

        <label for="objet">Objet :</label>
        <input id="objet" type="text" name="objet" placeholder="<?= $trad["placeholder_subject"] ?>" required>

        <label for="message">Votre message :</label>
        <textarea id="message" name="message" rows="6" placeholder="<?= $trad["placeholder_message"] ?>" required></textarea>

        <button type="submit" id="envoi"><?= $trad["send_button"] ?></button>
    </form>
</main>
<?php 
    require(__DIR__ . '../../footer.php'); 
?>