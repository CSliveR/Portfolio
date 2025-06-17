<?php
    $pageTitle = "CGI";
    $currentNavPart = "projets-univ";
    require(__DIR__ . '../../header.php'); 
?>
<main class="revealEffect">
    <h1><?= $trad['title_ESN'] ?></h1>
    <section class="horizontalContainer">
        <div class="verticalContainer">
            <h2><?= $trad['desc_project'] ?></h2>
            <p>
                <?= $trad['cgi_desc'] ?>
            </p>
            <div class="verticalContainer">
                <h2><?= $trad['skills_acquired'] ?></h2>
                <p><?= $trad['cgi_skill_1'] ?></p>
                <p><?= $trad['cgi_skill_2'] ?></p>
                <p><?= $trad['cgi_skill_3'] ?></p>
                <p><?= $trad['cgi_skill_4'] ?></p>
            </div>
            <div class="horizontalContainer">
                <button onclick="window.location.href='https://github.com/CSliveR/ITC-website-project'"><?= $trad['btn_github'] ?></button>
                <button onclick="window.location.href='https://iut-info-uga.github.io/'"><?= $trad['btn_site'] ?></button>
            </div>
        </div>
<!-- 
        <div class="gridContainer3x2">
            <img class="smallImg" src="/img/cgi.png" alt="Image de la page d'acceuil du site web">
            <img class="smallImg" src="/img/cgi2.png" alt="Image de la page 'Engagements' du site web">
            <img class="smallImg" src="/img/cgi3.png" alt="Image de la page 'Services' du site web">
            <img class="smallImg" src="/img/cgi4.png" alt="Image de la page 'Valeurs' du site web">
            <img class="smallImg" src="/img/cgi5.png" alt="Image de la page 'Légal' du site web">
        </div> -->
    </section>
</main>

<?php
    require(__DIR__ . '../../footer.php'); ?>
