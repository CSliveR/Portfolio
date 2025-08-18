<?php 
    $pageTitle = "Ilyès Drouiche";
    $currentNavPart = "accueil";
    require(__DIR__ . '/header.php'); 
?>
<main class="revealEffect">
    <section>
        <h1 id="homeTitle"><?= $trad['index_hello'] ?><span><?= $trad['index_welcome'] ?></span></h1> 
        <p><?= $trad['index_text'] ?></p>
    </section>

    <section>
        <h3><?= $trad['index_SNS'] ?></h3>
        <div id="sns">
            <a href="https://www.linkedin.com/in/ilyes-drouiche-5b2695271/" target="_blank"><img src="/img/linkedin.png" alt="icone linkedin"></a>
            <a href="/pages/contact.php?lang=<?= $lang ?>"><img src="/img/gmail.png" alt="icone gmail"></a>
            <a href="https://github.com/CSliver" target="_blank"><img src="/img/github.png" alt="icone github"></a>
            <a href="https://gitlab.com/CSliveR" target="_blank"><img style="height:48px; width:48px;" src="/img/gitlab.png" alt="icone github"></a>
        </div>
    </section>

    <section>
        <h2><?= $trad['index_h2'] ?></h2>
        <div class="univProject">
            <section>
                <h3><?= $trad['univ_projects'] ?></h3>
                <img class="picture" src="/img/cgi.png" alt="Image de la page d'acceuil du site web">
            </section>
            <section>
                <h3><?= $trad['title_ESN'] ?></h3>
                <p><?= $trad['index_ESN'] ?></p>
                <div class="btnGroup">
                    <a href="/projets/cgi.php?lang=<?= $lang ?>" class="btn"><?= $trad['btn_details'] ?></a>
                    <a href="/pages/projets-univ.php?lang=<?= $lang ?>" class="btn"><?= $trad['btn_more'] ?></a>
                </div>
            </section>
        </div>     

        <div class="persProject">
            <section>
                <h3><?= $trad['pers_projects'] ?></h3>
                <img class="picture" src="/img/bataille1.png" alt="image du jeu de bataille">
            </section>
            <section>
                <h3><?= $trad['title_card'] ?></h3>
                <p><?= $trad['index_card'] ?></p>
                <div class="btnGroup">
                    <a href="/projets/bataille.php?lang=<?= $lang ?>" class="btn"><?= $trad['btn_details'] ?></a>
                    <a href="/pages/projets-perso.php?lang=<?= $lang ?>" class="btn"><?= $trad['btn_more'] ?></a>
                </div>
            </section>
        </div>
    </section>
</main>
<?php 
    require(__DIR__ . '/footer.php'); 
?>
