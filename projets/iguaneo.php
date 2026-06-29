<?php
    $pageTitle = "Projet IGUANEO - Suivi de SAÉ";
    $currentNavPart = "projets-univ"; // Classé en projet universitaire/IUT

    // Clés de traduction pour IGUANEO
    $projectTitleKey = 'title_iguaneo';
    $projectDescKey  = 'iguaneo_desc';

    $skillsKeys = [
        'iguaneo_skill_1',
        'iguaneo_skill_2',
        'iguaneo_skill_3',
        'iguaneo_skill_4',
        'iguaneo_skill_5',
        'iguaneo_skill_6',
    ];

    $links = [
        // Tu pourras adapter les URLs selon tes vrais dépôts
        ['url' => 'https://github.com/CSliveR/iguaneo-sae-tracking', 'labelKey' => 'btn_github'],
    ];

    $images = [
        // Emplacement pour tes futures captures d'écran de l'application
        // ['src' => '../../img/iguaneo-dashboard.png', 'alt' => 'Tableau de bord IGUANEO'],
    ];

    require(__DIR__ . '/project_template.php');
?>