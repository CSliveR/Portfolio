<?php
    $pageTitle = "Mini Space Invaders";
    $currentNavPart = "projets-perso";
    require(__DIR__ . '../../header.php'); 
?>
<main class="revealEffect">
    <h1><?= $trad['title_space_invaders'] ?></h1>
    <section class="horizontalContainer">
        <div class="verticalContainer">
            <h2><?= $trad['desc_project'] ?></h2>
            <p><?= $trad['space_invaders_desc'] ?></p>
            <div class="verticalContainer">
                <h2><?= $trad['skills_acquired'] ?></h2>
                <p><?= $trad['space_invaders_skill_1'] ?></p>
                <p><?= $trad['space_invaders_skill_2'] ?></p>
                <p><?= $trad['space_invaders_skill_3'] ?></p>
            </div>
            <button onclick="window.location.href='https://github.com/CSliveR/Mini-Space-Invaders'"><?= $trad['btn_github'] ?></button>
        </div>
        <!-- <div>
            <img class="resizeImg" src="/img/menu-spaceInvaders.png" alt="Menu du jeu Space Invaders">
            <img class="resizeImg" src="/img/spaceInvaders.png" alt="Ecran de jeu Space Invaders">
        </div> -->
    </section>
</main>
<?php 
    require(__DIR__ . '../../footer.php'); 
?>
