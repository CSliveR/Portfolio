<?php 
    $pageTitle = "Projets universitaires";
    $currentNavPart = "projets-univ";
    require(__DIR__ . '/../header.php'); 
?>
<main class="revealEffect">
    <h1><?= $trad['univ_projects'] ?></h1>
    <div class="projectsPage">
        <section class="cardContainer">
            <h2><a href="/projets/cgi.php?lang=<?= $lang ?>"><?= $trad['title_ESN'] ?></a></h2>
            <p><?= $trad['sdesc_ESN'] ?></p>
            <div>
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" alt="VSCode" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-plain-wordmark.svg" alt="HTML5" />  
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-plain-wordmark.svg" alt="CSS3" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" alt="JS" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" alt="Git" />
                <img class="icon" src="/img/github.png" alt="Github">
            </div>
        </section>

        <section class="cardContainer">
            <h2><a href="/projets/nutriscore.php?lang=<?= $lang ?>"><?= $trad['title_nutriscore'] ?></a></h2>
            <p><?= $trad['sdesc_nutriscore'] ?>.</p>
            <div>
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" alt="VSCode" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-plain-wordmark.svg" alt="PostgreSQL" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/rstudio/rstudio-original.svg" alt="RStudio" />
            </div>
        </section>

        <section class="cardContainer">
            <h2><a href="/projets/chiefsArena.php?lang=<?= $lang ?>"><?= $trad['title_chiefs'] ?></a></h2>
            <p><?= $trad['sdesc_chiefarena'] ?></p>
            <div>
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/intellij/intellij-original.svg" alt="IntelliJ" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original-wordmark.svg" alt="Java" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/junit/junit-original-wordmark.svg" alt="JUnit" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/git/git-original.svg" alt="Git" />
                <img class="icon" src="/img/github.png" alt="Github">
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/rstudio/rstudio-original.svg" alt="RStudio" />
            </div>
        </section>

        <section class="cardContainer">
            <h2><a href="/projets/marapont.php?lang=<?= $lang ?>"><?= $trad['title_bridge'] ?></a></h2>
            <p><?= $trad['sdesc_bridge'] ?></p>
            <div>
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" alt="VSCode" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-plain-wordmark.svg" alt="Docker" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/nodejs/nodejs-plain-wordmark.svg" alt="NodeJS" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/npm/npm-original-wordmark.svg" alt="NPM" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/astro/astro-original.svg" alt="Astro" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vuejs/vuejs-original-wordmark.svg" alt="VueJS" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/tailwindcss/tailwindcss-original.svg" alt="TailwindCSS" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/typescript/typescript-original.svg" alt="TypeScript" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-plain-wordmark.svg" alt="PostgreSQL" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/apache/apache-original.svg" alt="Apache" />
                <img class="icon" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/gitlab/gitlab-original.svg" alt="GitLab" />
            </div>
        </section>              
    </div>
</main>
<?php 
    require(__DIR__ . '/../footer.php');
?>
