const sunBtn = document.querySelector('#lightTheme');
const moonBtn = document.querySelector('#darkTheme');

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
const burgerBtn = document.querySelector('#burgerBtn');

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