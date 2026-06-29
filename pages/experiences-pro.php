<?php 
    $pageTitle = "Expériences professionnelles";
    $currentNavPart = "experiences-pro";
    require(__DIR__ . '../../header.php'); 
?>
<main class="revealEffect">
    <h1><?= $trad['pro_experiences'] ?></h1>
    <div>
        <section class="cardContainer">
            <h2>
                <a href="/projets/msh.php?lang=<?= $lang ?>">
                    <?= $trad['title_adele'] ?>
                </a>
            </h2>
            <p><?= $trad['sdesc_adele'] ?></p>
        </section>

        <section class="cardContainer">
            <h2>
                <a href="/projets/kapt.php?lang=<?= $lang ?>">
                    <?= $trad['title_kapt'] ?>
                </a>
            </h2>
            <p><?= $trad['sdesc_kapt'] ?></p>
        </section>
    </div>
</main>
<?php 
    require(__DIR__ . '../../footer.php'); 
?>
