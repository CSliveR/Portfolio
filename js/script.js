document.addEventListener('DOMContentLoaded', () => {
    const sunBtn = document.getElementById('lightTheme');
    const moonBtn = document.getElementById('darkTheme');

     // Fonction pour activer le thème clair avec dégradé animé
     function activateLightTheme() {
        document.body.setAttribute('data-theme', 'light');
        document.documentElement.style.setProperty('--textColor', '#262626');
        document.documentElement.style.setProperty('--textColorHover', '#f1f1f1');
        document.body.style.background = 'linear-gradient(135deg, #f8d1e7, #f1f1f1, #f8d1e7)';
        document.body.style.backgroundSize = '200% 200%';
        document.body.style.animation = 'gradientSlide 10s ease-in-out infinite';
        sunBtn.style.display = 'none';
        moonBtn.style.display = 'block';
        localStorage.setItem('theme', 'light');
        document.body.setAttribute('actualTheme', 'light');
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
        document.body.setAttribute('actualTheme', 'dark');
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

    // Sélectionner tous les éléments avec la classe .scroll-reveal
    const revealElements = document.querySelectorAll('.scroll-reveal > *');

    // Fonction pour vérifier si l'élément est dans la zone visible de l'écran
    function checkScrollReveal() {
        revealElements.forEach(element => {
            const rect = element.getBoundingClientRect();
            const isVisible = rect.top <= window.innerHeight && rect.bottom >= 0;

            if (isVisible) {
                // Ajouter la classe pour révéler l'élément
                element.classList.add('scroll-reveal-visible');
            }
        });
    }

    // Ajouter un écouteur d'événement sur le défilement pour vérifier en continu
    window.addEventListener('scroll', checkScrollReveal);

    // Vérifier immédiatement au cas où certains éléments sont déjà visibles au chargement
    checkScrollReveal();

    const header = document.querySelector('header');
    const burgerBtn = document.getElementById('burgerBtn');
    
    burgerBtn.addEventListener('click', () => {
        header.classList.toggle('open-menu');
    });
});

let path = window.location.pathname;
let lang;

if (path.includes("/fr/")) {
    lang = "fr";
}else if (path.includes("/en/")) {
    lang = "en";
}else {
    lang = "ja";
}   

const homeBtn = document.querySelector('li:nth-child(2)');
const projetsIUTBtn = document.querySelector('li:nth-child(3)');
const projetsPersoBtn = document.querySelector('li:nth-child(4)');
const competencesBtn = document.querySelector('li:nth-child(5)');
const contactBtn = document.querySelector('li:last-child');

homeBtn.addEventListener('click', () => {
    location.assign(`../../${lang}/pages/index.html`);

});

projetsIUTBtn.addEventListener('click', () => {
    location.assign(`../../${lang}/pages/projets-iut.html`);
});

projetsPersoBtn.addEventListener('click', () => {
    location.assign(`../../${lang}/pages/projets-perso.html`);
});

competencesBtn.addEventListener('click', () => {
    location.assign(`../../${lang}/pages/competences.html`);
});

contactBtn.addEventListener('click', () => {
    location.assign(`../../${lang}/pages/contact.html`);
});


 













