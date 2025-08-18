<?php 
    $pageTitle = "Jeu de bataille de cartes";
    $currentNavPart = "projets-perso";

    // On passe uniquement les clés de traduction
    $projectTitleKey = 'title_cardgame';
    $projectDescKey  = 'cardgame_desc';

    $skillsKeys = [
        'cardgame_skill_1',
        'cardgame_skill_2',
        'cardgame_skill_3',
    ];

    $links = [
        ['url' => 'https://github.com/CSliveR/Card-game', 'labelKey' => 'btn_github'],
    ];

    $images = [
        ['src' => '/img/bataille1.png', 'alt' => "Menu du jeu de bataille"],
        ['src' => '/img/bataille2.png', 'alt' => "Écran de jeu de bataille"],
    ];

    require(__DIR__ . '/project_template.php');
?>
