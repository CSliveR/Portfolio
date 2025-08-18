<?php
    $pageTitle = "Premier site responsive";
    $currentNavPart = "projets-perso";

    // Clés de traduction
    $projectTitleKey = 'title_recipe';
    $projectDescKey  = 'recipe_desc';

    $skillsKeys = [
        'recipe_skill_1',
        'recipe_skill_2',
        'recipe_skill_3',
        'recipe_skill_4',
    ];

    $links = [
        ['url' => 'https://github.com/CSliveR/responsive-cooking-recipe-site-homepage', 'labelKey' => 'btn_github'],
        ['url' => 'https://csliver.github.io/responsive-cooking-recipe-site-homepage', 'labelKey' => 'btn_site'],
    ];

    $images = [
        // Tu peux les remettre si tu veux montrer un aperçu du site
        // ['src' => '/img/cookingWebsite.png', 'alt' => 'Aperçu du site de recettes'],
        // ['src' => '/img/cookingWebsite2.png', 'alt' => 'Deuxième page du site de recettes'],
    ];

    require(__DIR__ . '/project_template.php');
?>

