<?php 
    $pageTitle = "Jeu de bataille de cartes";
    $currentNavPart = "projets-perso";
    require(__DIR__ . '../../header.php'); 
?>

<div class="horizontalContainer">
    <main>
        <h1><?= $trad['title_cardgame'] ?></h1>
        <section class="horizontalContainer">
            <div class="verticalContainer">
                <h2><?= $trad['desc_project'] ?></h2>
                <p>
                    <?= $trad['cardgame_desc'] ?>
                </p>
                <div class="verticalContainer">
                    <h2><?= $trad['skills_acquired'] ?></h2>
                    <p><?= $trad['cardgame_skill_1'] ?></p>
                    <p><?= $trad['cardgame_skill_2'] ?></p>
                    <p><?= $trad['cardgame_skill_3'] ?></p>
                </div>
                <button onclick="window.location.href='https://github.com/CSliveR/Card-game'"><?= $trad['btn_github'] ?></button>
            </div>
            <!---
            <div>
                <img src="/img/bataille1.png" alt="Menu du jeu Space Invaders">
                <img class="resizeImg" src="/img/bataille2.png" alt="Ecran de jeu Space Invaders">
            </div> --->
        </section>
    </main>
</div>

<?php 
    require(__DIR__ . '../../footer.php'); 
?>
