<?php
    /**
     * Template pour afficher les détails d'un projet.
     *
     * Variables attendues :
     * - $pageTitle       : Titre de la page
     * - $currentNavPart  : Section active de la navigation
     * - $projectTitleKey : Clé de traduction pour le titre du projet
     * - $projectDescKey  : Clé de traduction pour la description du projet
     * - $skillsKeys      : Tableau des clés de traduction des compétences acquises
     * - $links           : Tableau des liens associés au projet 
     *                       (chaque lien = ['url' => ..., 'labelKey' => ...])
     * - $images (optionnel) : Tableau des images du projet
     *                       (chaque image = ['src' => ..., 'alt' => ...])
     */

    require(__DIR__ . '../../header.php'); 
?>
<main class="revealEffect projectPage">
    <h1><?= $trad[$projectTitleKey] ?></h1>

    <section>
        <h2><?= $trad['desc_project'] ?></h2>
        <p><?= $trad[$projectDescKey] ?></p>
    </section>

    <section class="projectSkills">
        <h2><?= $trad['skills_acquired'] ?></h2>
        <ul>
            <?php foreach ($skillsKeys as $key): ?>
                <li><?= $trad[$key] ?></li>
            <?php endforeach; ?>
        </ul>
    </section>

    <div class="projectLinks">
        <?php foreach ($links as $link): ?>
            <a class="btn" href="<?= $link['url'] ?>"><?= $trad[$link['labelKey']] ?></a>
        <?php endforeach; ?>
    </div>

        <?php /* if (!empty($images)): ?>
            <div class="gridContainer3x2">
                <?php foreach ($images as $img): ?>
                    <img class="smallImg" src="<?= $img['src'] ?>" alt="<?= $img['alt'] ?>">
                <?php endforeach; ?>
            </div>
            <?php endif; */?>
    </section>
</main>
<?php
    require(__DIR__ . '../../footer.php'); 
?>

