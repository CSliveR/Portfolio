<?php 
    $pageTitle = "Mes compétences";
    $currentNavPart = "competences";
    require(__DIR__ . '../../header.php'); 
?>
<main class="revealEffect">
    <h1><?= $trad["skills"] ?></h1>
    <div class="horizontalContainer">
        <div class="verticalContainer">
            <section>
                <h2><?= $trad["perseverance"] ?></h2>
                <p><?= $trad["perseverance_text"] ?></p>
            </section>
            
            <section>
                <h2><?= $trad["listening"] ?></h2>
                <p><?= $trad["listening_text"] ?></p>
            </section>
        </div>
        
        <div class="verticalContainer">
            <section>
                <h2><?= $trad["team_spirit"] ?></h2>
                <p><?= $trad["team_spirit_text"] ?></p>
            </section>
            
            <section>
                <h2><?= $trad["languages"] ?></h2>
                <p><?= $trad["french_native"] ?></p>
                <p><?= $trad["english_level"] ?></p>
                <p><?= $trad["japanese_level"] ?></p>
            </section>
        </div>
    </div>

    <section>
        <h2><?= $trad["programming_languages"] ?></h2>
        <div class="gridContainer3">
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>HTML5</p>
                    <img style="height:55px; width:55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-plain-wordmark.svg" />
                </div>
                <p><?= $trad["level_advanced"] ?></p>
            </div>

            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>CSS3</p>
                    <img style="height:55px; width:55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-plain-wordmark.svg" />
                </div>
                <p><?= $trad["level_intermediate"] ?></p>
            </div>

            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>Java</p>
                    <img style="height:55px; width:55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original-wordmark.svg" />
                </div>
                <p><?= $trad["level_intermediate"] ?></p>
            </div>

            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>PostgreSQL</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-plain-wordmark.svg" />
                </div>
                <p><?= $trad["level_intermediate"] ?></p>
            </div>

            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>JavaScript</p>
                    <img style="height:55px; width:55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" />
                </div>
                <p><?= $trad["level_intermediate"] ?></p>
            </div>

            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>C++</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/cplusplus/cplusplus-original.svg" />
                </div>
                <p><?= $trad["level_intermediate"] ?></p>
            </div>

            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>C</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/c/c-original.svg" />
                </div>
                <p><?= $trad["level_beginner_plus"] ?></p> <!-- "initié" -->
            </div>

            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>Python</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original-wordmark.svg" />
                </div>
                <p><?= $trad["level_beginner_plus"] ?></p>
            </div>

            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>TypeScript</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/typescript/typescript-original.svg" />
                </div>
                <p><?= $trad["level_beginner"] ?></p>
            </div>
        </div>
    </section>

    <section>
        <h2><?= $trad["tools_and_technologies"] ?></h2>
        <div class="gridContainer3">
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>Visual Studio Code</p>
                    <img style="height:55px; width:55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" />
                </div>
                <p><?= $trad["level_advanced"] ?></p>
            </div>

            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>IntelliJ IDEA</p>
                    <img style="height:55px; width:55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/intellij/intellij-original.svg" />
                </div>
                <p><?= $trad["level_intermediate"] ?></p>
            </div>

            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>Shell Bash</p>
                    <img style="height:55px; width:55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bash/bash-original.svg" />
                </div>
                <p><?= $trad["level_intermediate"] ?></p>
            </div>

            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>PowerShell</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/powershell/powershell-original.svg" />
                </div>
                <p><?= $trad["level_beginner_plus"] ?></p>
            </div>

            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>Docker</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-plain-wordmark.svg" />
                </div>
                <p><?= $trad["level_beginner"] ?></p>
            </div>
        </div>
    </section>
</main>
<?php 
    require(__DIR__ . '../../footer.php'); 
?>