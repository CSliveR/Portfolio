<?php 
    $pageTitle = "Ilyès Drouiche";
    $currentNavPart = "accueil";
    require(__DIR__ . '/header.php'); 
?>
<main class="revealEffect">
    <section class="horizontalContainer">
        <div class="verticalContainer">
            <h1 id="homeTitle">
                <?= $trad['index_hello'] ?>
                <span><?= $trad['index_welcome'] ?></span>
            </h1> 
            <p>
                <?= $trad['index_text'] ?>
            </p>
        </div>
    </section>

    <section class="permanent-horizontalContainer">
        <h3><?= $trad['index_SNS'] ?></h3>
        <a href="https://www.linkedin.com/in/ilyes-drouiche-5b2695271/" target="_blank"><img src="/img/linkedin.png" alt="icone linkedin"></a>
        <a href="/pages/contact.php?lang=<?= $lang ?>"><img src="/img/gmail.png" alt="icone gmail"></a>
        <a href="https://github.com/CSliver" target="_blank"><img src="/img/github.png" alt="icone github"></a>
        <a href="https://gitlab.com/CSliveR" target="_blank"><img style="height:48px; width:48px;" src="/img/gitlab.png" alt="icone github"></a>
    </section>

    <section class="real">
        <h2><?= $trad['index_h2'] ?></h2>     
        <div class="horizontalContainer">
            <div class="verticalContainer">
                <h3><?= $trad['univ_projects'] ?></h3>
                <img src="/img/cgi.png" alt="Image de la page d'acceuil du site web">
            </div>

            <div class="verticalContainer">
                <h3><?= $trad['title_ESN'] ?></h3>
                <p>
                    <?= $trad['index_ESN'] ?>
                </p>
                <div class="horizontalContainer">
                    <button onclick="window.location.href='/projets/cgi.php?lang=<?= $lang ?>'"><?= $trad['btn_details'] ?></button>
                    <button onclick="window.location.href='/pages/projets-univ.php?lang=<?= $lang ?>'"><?= $trad['btn_more'] ?></button>
                </div>
            </div>
        </div>
    
        <div class="horizontalContainer">
            <div class="verticalContainer">
                <h3><?= $trad['pers_projects'] ?></h3>
                <img src="/img/bataille1.png" alt="image du jeu de bataille">
            </div>

        <div class="verticalContainer">
            <h3><?= $trad['title_card'] ?></h3>
                <p>
                    <?= $trad['index_card'] ?>
                </p>
                <div class="horizontalContainer">
                    <button onclick="window.location.href='/projets/bataille.php?lang=<?= $lang ?>'"><?= $trad['btn_details'] ?></button>
                    <button onclick="window.location.href='/pages/projets-perso.php?lang=<?= $lang ?>'"><?= $trad['btn_more'] ?></button>
                </div>
            </div>
        </div>
    </section>
</main>

<?php 
    require(__DIR__ . '/footer.php'); ?>



