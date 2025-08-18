<?php
    $pageTitle = "Mini Space Invaders";
    $currentNavPart = "projets-perso";

    // Clés de traduction
    $projectTitleKey = 'title_space_invaders';
    $projectDescKey  = 'space_invaders_desc';

    $skillsKeys = [
        'space_invaders_skill_1',
        'space_invaders_skill_2',
        'space_invaders_skill_3',
    ];

    $links = [
        ['url' => 'https://github.com/CSliveR/Mini-Space-Invaders', 'labelKey' => 'btn_github'],
    ];

    $images = [
        // Tu peux les remettre si besoin :
        // ['src' => '/img/menu-spaceInvaders.png', 'alt' => 'Menu du jeu Space Invaders'],
        // ['src' => '/img/spaceInvaders.png', 'alt' => 'Écran de jeu Space Invaders'],
    ];

    require(__DIR__ . '/project_template.php');
?>
