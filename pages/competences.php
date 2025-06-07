<?php 
    $pageTitle = "Mes compétences";
    $currentNavPart = "competences";
    require(__DIR__ . '../../header.php'); 
?>
<main class="revealEffect">
    <section>
        <h1>Mes compétences</h1>
        <div class="horizontalContainer">
            <div class="verticalContainer">
                <section>
                    <h2>La ténacité</h2>
                    <p>Malgré les difficultés que je suis amené à rencontrer, je n'abandonne pas et je persiste. Je suis obstiné à passer outre les difficultés.</p>
                </section>
                
                <section>
                    <h2>L'écoute</h2>
                    <p>J'essaie toujours d'être à l'écoute de ce que l'on exige de moi afin de répondre au mieux aux besoins de mon locuteur.</p>
                </section>
            </div>
            
            <div class="verticalContainer">
                <section>
                    <h2>L'esprit d'équipe</h2>
                    <p>J'essaie de prendre en considération toutes les remarques des personnes avec lesquelles je collabore et de faire au mieux 
                        pour trouver la meilleure solution possible.</p> 
                </section>
                <section>
                    <h2>Langues</h2>
                    <p>Français natif</p>
                    <p>Anglais : niveau intermédiaire (B2)</p>
                    <p>Japonais : niveau initié (A2)</p>
                </section>
            </div>
        </div>
    </section> 

    <section>
        <h2>Langages de programmation</h2> 
        <div class="gridContainer3">
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>HTML5</p>
                    <img style="height:55px; width:55px;"src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-plain-wordmark.svg" />  
                </div>
                <p>Niveau avancé</p>
            </div>
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>CSS3</p>
                    <img style="height:55px; width:55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/css3/css3-plain-wordmark.svg" />
                </div>
                <p>Niveau intermédiaire</p>
            </div>
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>Java</p>
                    <img style="height:55px; width:55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/java/java-original-wordmark.svg" />
                </div>
                <p>Niveau intermédiaire</p>
            </div>
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>PostgreSQL</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/postgresql/postgresql-plain-wordmark.svg" />
                </div>
                <p>Niveau intermédiaire</p>
            </div>
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>JavaScript</p>
                    <img style="height:55px; width:55px;"src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" />
                </div>
                <p>Niveau intermédiaire</p>
            </div>
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>C++</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/cplusplus/cplusplus-original.svg" />
                </div>
                <p>Niveau intermédiaire</p>
            </div>
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>C</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/c/c-original.svg" />
                </div>
                <p>Niveau initié</p>
            </div>
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>Python</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/python/python-original-wordmark.svg" />
                </div>
                <p>Niveau initié</p>
            </div>  
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>TypeScript</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/typescript/typescript-original.svg" />
                </div>
                <p>Niveau débutant</p>
            </div>      
        </div>
    </section>

    <section>
        <h2>Outils et technologies</h2> 
        <div class="gridContainer3">
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>Visual Studio Code</p>
                    <img style="height:55px; width:55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/vscode/vscode-original.svg" />
                </div>
                <p>Niveau avancé</p>
            </div>
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>IntelliJ IDEA</p>
                    <img style="height:55px; width:55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/intellij/intellij-original.svg" />
                </div>
                <p>Niveau intermédiaire</p>
            </div>
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>Shell Bash</p>
                    <img style="height:55px; width:55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/bash/bash-original.svg" />  
                </div>
                <p>Niveau intermédiaire</p>
            </div>
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>PowerShell</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/powershell/powershell-original.svg" />
                </div>
                <p>Niveau initié</p>
            </div>
            <div class="cardContainer">
                <div class="horizontalContainer">
                    <p>Docker</p>
                    <img style="height: 55px; width: 55px;" src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/docker/docker-plain-wordmark.svg" />
                </div>
                <p>Niveau débutant</p>
            </div>
        </div>
    </section>
</main>

<?php 
    require(__DIR__ . '../../footer.php'); 
?>