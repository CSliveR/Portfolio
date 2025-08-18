<?php
    $pageTitle = "Exploitation d'une BD (Nutriscore)";
    $currentNavPart = "projets-univ";

    // Clés de traduction
    $projectTitleKey = 'title_nutriscore';
    $projectDescKey  = 'nutriscore_desc';

    $skillsKeys = [
        'nutriscore_skill_1',
        'nutriscore_skill_2',
        'nutriscore_skill_3',
        'nutriscore_skill_4',
        'nutriscore_skill_5',
        'nutriscore_skill_6',
        'nutriscore_skill_7',
    ];

    $links = [
        ['url' => 'https://github.com/CSliveR/BUT-1A/tree/main/S2.04', 'labelKey' => 'btn_github'],
    ];

    $images = [
        // Exemple si tu veux réactiver les visuels plus tard
        // ['src' => '/img/nutriscore1.png', 'alt' => 'Exemple de requête SQL Nutriscore'],
        // ['src' => '/img/nutriscore2.png', 'alt' => 'Analyse des données Nutriscore'],
    ];

    require(__DIR__ . '/project_template.php');
?>
