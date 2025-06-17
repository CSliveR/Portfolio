<?php
    $pageTitle = "Premier site responsive";
    $currentNavPart = "projets-perso";
    require(__DIR__ . '../../header.php'); 
?>

<main class="revealEffect">
    <h1><?= $trad['title_recipe'] ?></h1>
    <section class="horizontalContainer">
        <div class="verticalContainer">
            <h2><?= $trad['desc_project'] ?></h2>
            <p>
                <?= $trad['recipe_desc'] ?>
            </p>
            <div class="verticalContainer">
                <h2><?= $trad['skills_acquired'] ?></h2>
                <p><?= $trad['recipe_skill_1'] ?></p>
                <p><?= $trad['recipe_skill_2'] ?></p>
                <p><?= $trad['recipe_skill_3'] ?></p>
                <p><?= $trad['recipe_skill_4'] ?></p>
            </div>
            <div class="horizontalContainer">
                <button onclick="window.location.href='https://github.com/CSliveR/responsive-cooking-recipe-site-homepage'"><?= $trad['btn_github'] ?></button>
                <button onclick="window.location.href='https://csliver.github.io/responsive-cooking-recipe-site-homepage/'"><?= $trad['btn_site'] ?></button>
            </div>
        </div>
        <!-- <div class="downImg">
            <img class="resizeImg" src="/img/cookingWebsite.png" alt="Menu du jeu Space Invaders">
            <img class="resizeImg" src="/img/cookingWebsite2.png" alt="Ecran de jeu Space Invaders">
        </div> -->
    </section>
</main>
<?php 
    require(__DIR__ . '../../footer.php'); 
?>

