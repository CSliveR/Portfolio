<?php
    $pageTitle = "Chief's Arena";
    $currentNavPart = "projets-univ";

    // On passe uniquement les clés de traduction
    $projectTitleKey = 'title_chiefs';
    $projectDescKey  = 'chiefs_desc';

    $skillsKeys = [
        'chiefs_skill_1',
        'chiefs_skill_2',
        'chiefs_skill_3',
        'chiefs_skill_4',
        'chiefs_skill_5',
        'chiefs_skill_6',
        'chiefs_skill_7',
    ];

    $links = [
        ['url' => 'https://github.com/CSliveR/Chief-s-Arena', 'labelKey' => 'btn_github'],
    ];

    $images = [
        ['src' => '/img/CAHome.png',            'alt' => "Page d'accueil de Chief's Arena"],
        ['src' => '/img/CA-Create-Concours.png','alt' => "Création d’un concours"],
        ['src' => '/img/CA-Edit-Concours.png',  'alt' => "Édition d’un concours"],
        ['src' => '/img/CA-Account.png',        'alt' => "Page de compte utilisateur"],
        ['src' => '/img/CA-Abonnement.png',     'alt' => "Page d’abonnement"],
        ['src' => '/img/CA-Analyse.png',        'alt' => "Analyse des résultats"],
    ];

    require(__DIR__ . '/project_template.php');
?>


