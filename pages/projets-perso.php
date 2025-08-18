<?php 
    $pageTitle = "Projets personnels";
    $currentNavPart = "projets-perso";
    require(__DIR__ . '../../header.php'); 
?>
<main class="revealEffect">
    <h1><?= $trad['pers_projects'] ?></h1>
    <div class="projectsPage">
        <section class="cardContainer">
            <h2>
                <a href="/projets/bataille.php?lang=<?= $lang ?>">
                    <?= $trad['title_card'] ?>
                </a>
            </h2>
            <p><?= $trad['sdesc_card'] ?></p>
            <div>
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/intellij/intellij-original.svg" alt="IntelliJ" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original-wordmark.svg" alt="Java" />
            </div>
        </section>

        <section class="cardContainer">
            <h2>
                <a href="/projets/recipeWebsite.php?lang=<?= $lang ?>">
                    <?= $trad['title_responsive'] ?>
                </a>
            </h2>
            <p><?= $trad['sdesc_responsive'] ?></p>
            <div>
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" alt="VS Code" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-plain-wordmark.svg" alt="HTML5" />  
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-plain-wordmark.svg" alt="CSS3" />
            </div>
        </section>

        <section class="cardContainer">
            <h2>
                <a href="/projets/animeList.php?lang=<?= $lang ?>">
                    <?= $trad['title_animelist'] ?>
                </a>
            </h2>
            <p><?= $trad['sdesc_animelist'] ?></p>
            <div>
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/intellij/intellij-original.svg" alt="IntelliJ" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original-wordmark.svg" alt="Java" />
            </div>
        </section>

        <section class="cardContainer">
            <h2>
                <a href="/projets/spaceInvaders.php?lang=<?= $lang ?>">
                    <?= $trad['title_spaceinvaders'] ?>
                </a>
            </h2>
            <p><?= $trad['sdesc_spaceinvaders'] ?></p>
            <div>
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" alt="VS Code" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-plain-wordmark.svg" alt="HTML5" />  
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-plain-wordmark.svg" alt="CSS3" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" alt="JavaScript" />
            </div>
        </section>
    </div>
</main>
<?php 
    require(__DIR__ . '../../footer.php'); 
?>
