<?php
    $pageTitle = "MaraPont";
    $currentNavPart = "projets-univ";

    // On passe uniquement les clés de traduction
    $projectTitleKey = 'title_marapont';
    $projectDescKey  = 'marapont_desc';

    $skillsKeys = [
        'marapont_skill_1',
        'marapont_skill_2',
        'marapont_skill_3',
        'marapont_skill_4',
        'marapont_skill_5',
        'marapont_skill_6',
    ];

    $links = [
        ['url' => 'https://gricad-gitlab.univ-grenoble-alpes.fr/iut2-info-stud/2024-s3/s3.01/team-10/marapont', 'labelKey' => 'btn_gitlab'],
        ['url' => 'https://marapont.fr', 'labelKey' => 'visit_marapont'],
    ];

    $images = [
        // Tu pourras mettre les screenshots du site quand tu les auras
        // ['src' => '/img/marapont1.png', 'alt' => "Page d’accueil de MaraPont"],
        // ['src' => '/img/marapont2.png', 'alt' => "Exemple d’itinéraire sur MaraPont"],
    ];

    require(__DIR__ . '/project_template.php');
?>