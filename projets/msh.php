<?php
    $pageTitle = "Application ADELE";
    $currentNavPart = "projets-pro";

    // Clés de traduction pour la MSH
    $projectTitleKey = 'title_adele';
    $projectDescKey  = 'adele_desc';

    $skillsKeys = [
        'adele_skill_1',
        'adele_skill_2',
        'adele_skill_3',
        'adele_skill_4',
        'adele_skill_5',
        'adele_skill_6',
        'adele_skill_7',
    ];

    $links = [
        // Lien vers le site institutionnel si tu le souhaites
        ['url' => 'https://www.msh-alpes.fr/', 'labelKey' => 'btn_site'],
    ];

    $images = [
        // ['src' => '../../img/menu-spaceInvaders.png', 'alt' => 'Générateur NoCode ADELE'],
    ];

    require(__DIR__ . '/project_template.php');
?>