<?php
    $pageTitle = "Application Cuillère Code";
    $currentNavPart = "projets-pro"; // Idéal pour le distinguer des projets univ/perso !

    // Clés de traduction pour Kapt
    $projectTitleKey = 'title_kapt';
    $projectDescKey  = 'kapt_desc';

    $skillsKeys = [
        'kapt_skill_1',
        'kapt_skill_2',
        'kapt_skill_3',
        'kapt_skill_4',
        'kapt_skill_5',
        'kapt_skill_6',
    ];

    $links = [
        // Exemple si tu souhaites mettre un lien vers le site de Kapt
        ['url' => 'https://www.kapt.mobi/', 'labelKey' => 'btn_site'],
    ];

    $images = [
        // Tu pourras décommenter et ajouter tes captures d'écran ici plus tard :
        // ['src' => '../../img/CA-Home.png', 'alt' => 'Tableau de bord Cuillère Code'],
    ];

    require(__DIR__ . '/project_template.php');
?>