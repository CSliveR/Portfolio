<?php
    $pageTitle = "CGI";
    $currentNavPart = "projets-univ";

    // On passe uniquement les clés de traduction
    $projectTitleKey = 'title_ESN';
    $projectDescKey  = 'cgi_desc';

    $skillsKeys = [
        'cgi_skill_1',
        'cgi_skill_2',
        'cgi_skill_3',
        'cgi_skill_4',
    ];

    $links = [
        ['url' => 'https://github.com/CSliveR/ITC-website-project', 'labelKey' => 'btn_github'],
        ['url' => 'https://iut-info-uga.github.io/', 'labelKey' => 'btn_site'],
    ];

    $images = [
        ['src' => '/img/cgi.png',  'alt' => "Page d'accueil du site web"],
        ['src' => '/img/cgi2.png', 'alt' => "Page 'Engagements' du site web"],
        ['src' => '/img/cgi3.png', 'alt' => "Page 'Services' du site web"],
        ['src' => '/img/cgi4.png', 'alt' => "Page 'Valeurs' du site web"],
        ['src' => '/img/cgi5.png', 'alt' => "Page 'Légal' du site web"],
    ];

    require(__DIR__ . '/project_template.php');
?>
