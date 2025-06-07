<?php 
    $pageTitle = "Projets universitaires";
    $currentNavPart = "projets-univ";
    require(__DIR__ . '../../header.php'); 
?>
<main class="revealEffect">
    <h1><?= $trad['univ_projects'] ?></h1>
    <div class="verticalContainer">
        <div class="gridContainer">
            <section class="cardContainer">
                <h2><a href="/projets/cgi.php?lang=<?=$lang?>"><?= $trad['title_ESN'] ?></a></h2>
                <p><?= $trad['sdesc_ESN'] ?></p>
                <div>
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" />
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-plain-wordmark.svg" />  
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-plain-wordmark.svg" />
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" />
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" />
                    <img src="/img/github.png" alt="icone github">
                </div>
            </section>

            <section class="cardContainer">
                <h2><a href="/projets/nutriscore.php?lang=<?=$lang?>"><?= $trad['title_nutriscore'] ?></a></h2>
                <p><?= $trad['sdesc_nutriscore'] ?>.</p>
                <div>
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" />
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-plain-wordmark.svg" />
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/rstudio/rstudio-original.svg" />
                </div>
            </section>

            <section class="cardContainer">
                <h2><a href="/projets/chiefsArena.php?lang=<?=$lang?>"><?= $trad['title_chiefarena'] ?></a></h2>
                <p><?= $trad['sdesc_chiefarena'] ?></p>
                <div>
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/intellij/intellij-original.svg" />
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original-wordmark.svg" />
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/junit/junit-original-wordmark.svg" />
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" />
                    <img src="/img/github.png" alt="icone github">
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/rstudio/rstudio-original.svg" />
                </div>
            </section>

            <section class="cardContainer">
                <h2><a href="/projets/marapont.php?lang=<?=$lang?>"><?= $trad['title_bridge'] ?></a></h2>
                <p><?= $trad['sdesc_bridge'] ?></p>
                <div>
                    <img style="height: 37px; width: 37px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" />
                    <img style="height: 37px; width: 37px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-plain-wordmark.svg" />
                    <img style="height: 37px; width: 37px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-plain-wordmark.svg" />
                    <img style="height: 37px; width: 37px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/npm/npm-original-wordmark.svg" />
                    <img style="height: 37px; width: 37px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/astro/astro-original.svg" />
                    <img style="height: 37px; width: 37px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original-wordmark.svg" />
                    <img style="height: 37px; width: 37px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" />
                    <img style="height: 37px; width: 37px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/typescript/typescript-original.svg" />
                    <img style="height: 40px; width: 40px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-plain-wordmark.svg" />
                    <img style="height: 37px; width: 37px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/apache/apache-original.svg" />
                    <img style="height: 37px; width: 37px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/gitlab/gitlab-original.svg" />
                </div>
            </section>              
        </div>
    </div>
</main>

<?php 
    require(__DIR__ . '../../footer.php');
?>