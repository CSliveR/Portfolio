<?php 
    $pageTitle = "Me contacter";
    $currentNavPart = "contact";
    require(__DIR__ . '../../header.php'); 
?>

<main class="verticalContainer" id="contactMain">
    <h1>Me contacter</h1>
    <p>Ce formulaire de contact n'est pas encore fonctionnel. Merci de votre compréhension.</p>
        <form class="revealEffect" method="post" action="traitement.php">
        <div class="horizontalContainer">
            <input id="Prenom" type="text" name="Prenom" placeholder="Prénom" required>
            <input id="nom" type="text" name="nom" placeholder="Nom" required>
        </div>

        <div>
            <input id="email" type="email" name="email" placeholder="Email" required>
        </div>

        <div>
            <input id="objet" type="text" name="objet" placeholder="Objet" required>
        </div>

        <div>
            <textarea name="message" id="message" cols="30" rows="5" placeholder="Message"></textarea>
        </div>
                        
        <div>
            <input id="envoi" type="submit" value="Envoyer">
        </div>
    </form>
</main>
<?php 
    require(__DIR__ . '../../footer.php'); 
?>