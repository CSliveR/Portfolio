<?php 
    require(__DIR__ . '/globals.php'); 
?>
<!DOCTYPE html>
<html lang="<?= $lang ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Portfolio">
    <meta name="author" content="CSliveR">
    <link rel="stylesheet" href="/css/style.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="icon" href="data:image/svg+xml,%253Csvg%2520xmlns=%2522http://www.w3.org/2000/svg%2522%2520viewBox=%25220%25200%2520100%2520100%2522%253E%253Ctext%2520y=%2522.9em%2522%2520font-size=%252290%2522%253E🎯%253C/text%253E%253C/svg%253E'%3E%0A">
    <title><?= $pageTitle ?? "Document" ?></title>
</head>
<body>
<header>
    <div id="themeContainer">
        <img id="lightTheme" src="/img/light_mode_16dp_FFFFFF_FILL1_wght100_GRAD0_opsz20.png" alt="icone soleil">
        <img id="darkTheme" src="/img/dark_mode_16dp_000000_FILL1_wght100_GRAD0_opsz20.png" alt="icone lune">
    </div>
    <button id="burgerBtn">
        <i class="fas fa-bars"></i>
    </button>
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
                <a href="/pages/experiences-pro.php?lang=<?= $lang ?>" class="<?= $currentNavPart === 'experiences-pro' ? 'active' : '' ?>"><?= $trad['pro_experiences'] ?></a>
            </li>
            <li>
                <a href="/pages/competences.php?lang=<?= $lang ?>" class="<?= $currentNavPart === 'competences' ? 'active' : '' ?>"><?= $trad['skills'] ?></a>
            </li>
            <li>
                <a href="/pages/contact.php?lang=<?= $lang ?>" class="<?= $currentNavPart === 'contact' ? 'active' : '' ?>"><?= $trad['contact'] ?></a>
            </li>
        </ul>
    </nav>
    <div id="dropdown" class="flexRow flexCenter" role="navigation" aria-label="Sélection de la langue">
        <?php if ($lang === "fr") : ?>
            <img class="icon" src="/img/icons8-la-france-32.png" alt="langue actuelle">
            <!-- Menu déroulant -->
            <div id="dropdown-content">                    
                <a href="?lang=en"><img src="/img/icons8-etats-unis-32.png" alt="Anglais"> English</a>
                <a href="?lang=ja"><img src="/img/icons8-japon-32.png" alt="Japonais"> 日本語</a>
            </div>
        <?php elseif ($lang === "en") : ?>
            <img class="icon" src="/img/icons8-etats-unis-32.png" alt="langue actuelle">
            <!-- Menu déroulant -->
            <div id="dropdown-content">    
                <a href="?lang=fr"><img src="/img/icons8-la-france-32.png" alt="Français"> Français</a>                
                <a href="?lang=ja"><img src="/img/icons8-japon-32.png" alt="Japonais"> 日本語</a>
            </div>
        <?php else : ?>
            <img class="icon" src="/img/icons8-japon-32.png" alt="langue actuelle">
            <!-- Menu déroulant -->
            <div id="dropdown-content">                    
                <a href="?lang=en"><img src="/img/icons8-etats-unis-32.png" alt="Anglais"> English</a>
                <a href="?lang=fr"><img src="/img/icons8-la-france-32.png" alt="Français"> Français</a>
            </div>
        <?php endif; ?>
    </div>
</header>

