<?php
    $pageTitle = "Traitement de ma liste d'anime";
    $currentNavPart = "projets-perso";
    require(__DIR__ . '../../header.php'); 
?>
<main class="revealEffect">
    <h1><?= $trad['title_anime'] ?></h1>
    <section class="horizontalContainer">
        <div class="verticalContainer">
            <h2><?= $trad['desc_project'] ?></h2>
            <p>
                <?= $trad['anime_desc'] ?>
            </p>
            <div class="verticalContainer">
                <h2><?= $trad['skills_acquired'] ?></h2>
                <p><?= $trad['anime_skill_1'] ?></p>
                <p><?= $trad['anime_skill_2'] ?></p>
                <p><?= $trad['anime_skill_3'] ?></p>
                <p><?= $trad['anime_skill_4'] ?></p>
                <p><?= $trad['anime_skill_5'] ?></p>
                <p><?= $trad['anime_skill_6'] ?></p>
            </div>
            <button onclick="window.location.href='https://github.com/CSliveR/Anime'"><?= $trad['btn_github'] ?></button>
        <!-- <div>
            <img src="/img/nutriscore1.png" alt="Menu du jeu Space Invaders">
            <img class="resizeImg" src="/img/nutriscore2.png" alt="Ecran de jeu Space Invaders">
        </div> -->
    </section>
</main>

<?php 
    require(__DIR__ . '../../footer.php'); 
?>
