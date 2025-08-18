<?php
    $pageTitle = "Traitement de ma liste d'anime";
    $currentNavPart = "projets-perso";

    // On passe uniquement les clés de traduction
    $projectTitleKey = 'title_anime';
    $projectDescKey  = 'anime_desc';

    $skillsKeys = [
        'anime_skill_1',
        'anime_skill_2',
        'anime_skill_3',
        'anime_skill_4',
        'anime_skill_5',
        'anime_skill_6',
    ];

    $links = [
        ['url' => 'https://github.com/CSliveR/Anime', 'labelKey' => 'btn_github'],
    ];

    $images = [
        // tu pourras en rajouter ici si besoin
        // ['src' => '/img/anime1.png', 'alt' => "Capture de la liste d'anime"],
    ];

    require(__DIR__ . '/project_template.php');
?>
