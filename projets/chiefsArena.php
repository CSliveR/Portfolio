<?php
    $pageTitle = "Chief's Arena";
    $currentNavPart = "projets-univ";
    require(__DIR__ . '../../header.php'); 
?>
<main class="revealEffect">
    <h1><?= $trad['title_chiefs'] ?></h1>
    <section class="horizontalContainer">
        <div class="verticalContainer">
            <h2><?= $trad['desc_project'] ?></h2>
            <p>
                <?= $trad['chiefs_desc'] ?>
            </p>
            <div class="verticalContainer">
                <h2><?= $trad['skills_acquired'] ?></h2>
                <p><?= $trad['chiefs_skill_1'] ?></p>
                <p><?= $trad['chiefs_skill_2'] ?></p>
                <p><?= $trad['chiefs_skill_3'] ?></p>
                <p><?= $trad['chiefs_skill_4'] ?></p>
                <p><?= $trad['chiefs_skill_5'] ?></p>
                <p><?= $trad['chiefs_skill_6'] ?></p>
                <p><?= $trad['chiefs_skill_7'] ?></p>
            </div>
            <button onclick="window.location.href='https://github.com/CSliveR/Chief-s-Arena'"><?= $trad['btn_github'] ?></button>
        </div>
    </section>
        <!-- <div class="gridContainer">
            <img class="resizeImg" src="/img/CAHome.png" alt="">
            <img class="resizeImg" src="/img/CA-Create-Concours.png" alt="">
            <img class="resizeImg" src="/img/CA-Edit-Concours.png" alt="">
            <img class="resizeImg" src="/img/CA-Account.png" alt="">
            <img class="resizeImg" src="/img/CA-Abonnement.png" alt="">
            <img class="resizeImg" src="/img/CA-Analyse.png" alt="">
        </div> -->
    </section>
</main>

<?php 
    require(__DIR__ . '../../footer.php'); ?>

