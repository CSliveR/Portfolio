const sunBtn = document.getElementById('lightTheme');
const moonBtn = document.getElementById('darkTheme');

// Fonction pour activer le thème clair avec dégradé animé
function activateLightTheme() {
    document.documentElement.style.setProperty('--textColor', '#262626');
    document.documentElement.style.setProperty('--textColorHover', '#f1f1f1');
    document.body.style.background = 'linear-gradient(135deg, #f8d1e7, #f1f1f1, #f8d1e7)';
    document.body.style.backgroundSize = '200% 200%';
    document.body.style.animation = 'gradientSlide 10s ease-in-out infinite';
    sunBtn.style.display = 'none';
    moonBtn.style.display = 'block';
    localStorage.setItem('theme', 'light');
}

// Fonction pour activer le thème sombre avec dégradé animé
function activateDarkTheme() {
    document.documentElement.style.setProperty('--textColor', '#f1f1f1');
    document.documentElement.style.setProperty('--textColorHover', '#262626');
    document.body.style.background = 'linear-gradient(135deg, #012345, #101010)';
    document.body.style.backgroundSize = '200% 200%';
    document.body.style.animation = 'gradientSlide 10s ease-in-out infinite';
    sunBtn.style.display = 'block';
    moonBtn.style.display = 'none';
    localStorage.setItem('theme', 'dark');
}

// Vérifie et applique le thème sauvegardé lors du chargement
const savedTheme = localStorage.getItem('theme');
if (savedTheme === 'dark') {
    activateDarkTheme();
} else {
    activateLightTheme();
}

// Écouteurs d'événements pour les boutons de changement de thème
sunBtn.addEventListener('click', activateLightTheme);
moonBtn.addEventListener('click', activateDarkTheme);

const header = document.querySelector('header');
const burgerBtn = document.getElementById('burgerBtn');

burgerBtn.addEventListener('click', () => {
    header.classList.toggle('open-menu');
});

document.addEventListener("DOMContentLoaded", () => {
    document.body.classList.add("show");
    // Forcer l'affichage des éléments cachés par revealEffect
    document.querySelectorAll(".revealEffect > *").forEach(element => {
        element.classList.add("revealEffect-visible");
    });
});

/*async function smooth_home_title(){
    let homeTitle = document.getElementById('homeTitle');
    //let homeTitleText = homeTitle.innerHTML;
    let homeTitleText = homeTitle.textContent;
    homeTitle.innerHTML = "";

    for(char of homeTitleText){
        let span = document.createElement('span');
        span.classList.add('smooth');
        span.innerHTML = char === " " ? '&nbsp' : char;
        homeTitle.appendChild(span);
        await new Promise(resolve => setTimeout(resolve, 50));
    }
}

smooth_home_title();*/
