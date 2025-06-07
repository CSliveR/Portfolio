<?php 
    require(__DIR__ . '/globals.php'); 
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title><?= $pageTitle ?? "Document" ?></title>
</head>
<body>
<header>
    <button id="burgerBtn">
        <i class="fas fa-bars"></i>
    </button>
    <div id="themeContainer">
        <img id="lightTheme" src="/img/light_mode_16dp_FFFFFF_FILL1_wght100_GRAD0_opsz20.png" alt="icone soleil">
        <img id="darkTheme" src="/img/dark_mode_16dp_000000_FILL1_wght100_GRAD0_opsz20.png" alt="icone lune">
    </div>
    <nav>
        <ul>
            <li>
                <a href="/?lang=<?= $lang ?>" class="<?= $currentNavPart === 'accueil' ? 'active' : '' ?>"><?= $trad['home'] ?></a>
            </li>
            <li>
                <a href="/pages/projets-univ.php?lang=<?= $lang ?>" class="<?= $currentNavPart === 'projets-univ' ? 'active' : '' ?>"><?= $trad['univ_projects'] ?></a>
            </li>
            <li>
                <a href="/pages/projets-perso.php?lang=<?= $lang ?>" class="<?= $currentNavPart === 'projets-perso' ? 'active' : '' ?>"><?= $trad['pers_projects'] ?></a>
            </li>
            <li>
                <a href="/pages/competences.php?lang=<?= $lang ?>" class="<?= $currentNavPart === 'competences' ? 'active' : '' ?>"><?= $trad['skills'] ?></a>
            </li>
            <li>
                <a href="/pages/contact.php?lang=<?= $lang ?>" class="<?= $currentNavPart === 'contact' ? 'active' : '' ?>"><?= $trad['contact'] ?></a>
            </li>
        </ul>
    </nav>
    <div class="horizontalContainer">
        <div id="dropdown" class="horizontalContainer" role="navigation" aria-label="Sélection de la langue">
            <?php if ($lang === "fr") : ?>
                <img src="/img/icons8-la-france-32.png" alt="langue actuelle">
                <!-- Menu déroulant -->
                <div id="dropdown-content">                    
                    <a href="?lang=en"><img src="/img/icons8-etats-unis-32.png" alt="Anglais"> English</a>
                    <a href="?lang=ja"><img src="/img/icons8-japon-32.png" alt="Japonais"> 日本語</a>
                </div>
            <?php elseif ($lang === "en") : ?>
                <img src="/img/icons8-etats-unis-32.png" alt="langue actuelle">
                <!-- Menu déroulant -->
                <div id="dropdown-content">    
                    <a href="?lang=fr"><img src="/img/icons8-la-france-32.png" alt="Français"> Français</a>                
                    <a href="?lang=ja"><img src="/img/icons8-japon-32.png" alt="Japonais"> 日本語</a>
                </div>
            <?php else : ?>
                <img src="/img/icons8-japon-32.png" alt="langue actuelle">
                <!-- Menu déroulant -->
                <div id="dropdown-content">                    
                    <a href="?lang=en"><img src="/img/icons8-etats-unis-32.png" alt="Anglais"> English</a>
                    <a href="?lang=fr"><img src="/img/icons8-la-france-32.png" alt="Français"> Français</a>
                </div>
            <?php endif; ?>
        </div>
    </div>
</header>

