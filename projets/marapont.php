<?php
    $pageTitle = "Chief's Arena";
    $currentNavPart = "projets-univ";
    require(__DIR__ . '../../header.php'); 
?>
<main class="revealEffect">
    <h1>Marapont</h1>
    <section class="horizontalContainer">
        <div class="verticalContainer">
            <h2><?= $trad['desc_project'] ?></h2>
            <p><?= $trad['marapont_desc'] ?></p>
            <div class="verticalContainer">
                <h2><?= $trad['skills_acquired'] ?></h2>
                <p><?= $trad['marapont_skill_1'] ?></p>
                <p><?= $trad['marapont_skill_2'] ?></p>
                <p><?= $trad['marapont_skill_3'] ?></p>
                <p><?= $trad['marapont_skill_4'] ?></p>
                <p><?= $trad['marapont_skill_5'] ?></p>
                <p><?= $trad['marapont_skill_6'] ?></p>
            </div>
            <button onclick="window.location.href='https://gricad-gitlab.univ-grenoble-alpes.fr/iut2-info-stud/2024-s3/s3.01/team-10/marapont'"><?= $trad['btn_gitlab'] ?></button>
            <button onclick="window.location.href='https://marapont.fr'"><?= $trad['visit_marapont'] ?></button>
        </div>
    </section>
</main>
<?php 
    require(__DIR__ . '../../footer.php'); ?>
