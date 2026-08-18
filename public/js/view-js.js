document.addEventListener("DOMContentLoaded", function() {
    const html = document.documentElement;

    // Check user Language e imposta attributo lang per l'accessibilità iniziale
    const userLanguage = navigator.language || navigator.userLanguage;
    const isItalian = userLanguage.toLowerCase().startsWith('it');
    html.lang = isItalian ? 'it' : 'en';

    const titleIta = document.querySelector('.title-ita');
    const bodyIta = document.querySelector('.ita');
    const titleEn = document.querySelector('.title-en');
    const bodyEn = document.querySelector('.en');

    if (!isItalian) {
        if (titleIta) titleIta.classList.add('hidden');
        if (bodyIta) bodyIta.classList.add('hidden');
        
        if (titleEn) titleEn.classList.remove('hidden');
        if (bodyEn) bodyEn.classList.remove('hidden');
    }

    // Toggle Menù
    const toggleBtn = document.getElementById('menu-toggle');
    const menuItems = document.querySelectorAll('.menu-item');
    let isOpen = false;

    //GSAP
    if(typeof gsap !== 'undefined') {
        gsap.set(menuItems, { y: 20, opacity: 0, scale: 0.5 });
    }

    toggleBtn.addEventListener('click', () => {
        isOpen = !isOpen;
        
        //Accessibility
        toggleBtn.setAttribute('aria-expanded', isOpen);

        if (isOpen) {
            menuItems.forEach(item => item.classList.remove('hidden'));
            gsap.to(menuItems, { y: 0, opacity: 1, scale: 1, duration: 0.4, stagger: 0.1, ease: "back.out(1.5)" });
            gsap.to(toggleBtn, { duration: 0.3, backgroundColor: "#ef4444" });
        } else {
            gsap.to(menuItems, {
                y: 20, opacity: 0, scale: 0.5, duration: 0.3, stagger: -0.1, ease: "power2.in",
                onComplete: () => {
                    menuItems.forEach(item => item.classList.add('hidden'));
                }
            });
            gsap.to(toggleBtn, { duration: 0.3, backgroundColor: "#2563eb" });
        }
    });
    
    // Dark/Light Mode
    const btnTheme = document.getElementById('btn-theme');
    btnTheme.addEventListener('click', () => {
        html.classList.toggle('dark');
    });

    //Font dimension
    const btnFont = document.getElementById('btn-font');
    const contentContainer = document.getElementById('content-container');
    let isLargeFont = false;

    if (btnFont && contentContainer) {
        btnFont.addEventListener('click', () => {
            isLargeFont = !isLargeFont;
            
            //Change Screen Reader
            btnFont.setAttribute('aria-pressed', isLargeFont);

            if (isLargeFont) {
                contentContainer.classList.add('text-accessible');
            } else {
                contentContainer.classList.remove('text-accessible');
            }
        });
    }

    // ITA/EN Toggle
    const btnLang = document.getElementById('btn-lang');
    let currentLang = isItalian ? "IT" : "EN";
    
    if(btnLang) btnLang.textContent = isItalian ? 'EN' : 'IT';

    if (btnLang) {
        btnLang.addEventListener('click', () => {
            currentLang = currentLang === 'IT' ? 'EN' : 'IT';
            btnLang.textContent = currentLang === 'IT' ? 'EN' : 'IT'; 
            
            // Update Lang Attribute
            html.lang = currentLang.toLowerCase();
            
            if (currentLang === 'EN') {
                titleIta.classList.add('hidden');
                bodyIta.classList.add('hidden');
                titleEn.classList.remove('hidden');
                bodyEn.classList.remove('hidden');
            } else {
                titleIta.classList.remove('hidden');
                bodyIta.classList.remove('hidden');
                titleEn.classList.add('hidden');
                bodyEn.classList.add('hidden');
            }
        });
    }
});