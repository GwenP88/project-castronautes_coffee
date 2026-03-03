/* ══════════════════════════════════════════
                NAV : menu burger
   ══════════════════════════════════════════ */

const navToggle = document.querySelector('.nav-toggle');
const navMenu   = document.querySelector('.nav-menu');

/* ── Fermer le menu (helper réutilisable) ── */
function closeMenu() {
    navMenu.classList.remove('is-open');
    navToggle.setAttribute('aria-expanded', 'false');
    navToggle.setAttribute('aria-label', 'Ouvrir le menu');
}

/* ── Ouvrir / fermer au clic sur le burger ── */
navToggle.addEventListener('click', function() {
    const isOpen = navMenu.classList.toggle('is-open');
    navToggle.setAttribute('aria-expanded', isOpen);
    navToggle.setAttribute('aria-label', isOpen ? 'Fermer le menu' : 'Ouvrir le menu');
});

/* ── Fermer au clic sur un lien ── */
document.querySelectorAll('.nav-link').forEach(function(link) {
    link.addEventListener('click', closeMenu);
});

/* ── Fermer au clic en dehors ── */
document.addEventListener('click', function(e) {
    if (!navMenu.contains(e.target) && !navToggle.contains(e.target)) {
        closeMenu();
    }
});


/* ══════════════════════════════════════════
        NAV : étoiles canvas (mode nuit)
   ══════════════════════════════════════════ */

const navCanvas = document.querySelector('.nav-stars');

if (navCanvas) {
    const ctx   = navCanvas.getContext('2d');
    const COUNT = 60;
    const stars = [];
    let animationId = null;

    /* ── Vérifier si le mode nuit est actif ── */
    function isNightMode() {
        return document.documentElement.getAttribute('data-theme') === 'night'
            || document.body.classList.contains('is-night-mode');
    }

    /* ── Redimensionner le canvas ── */
    function resizeNavCanvas() {
        navCanvas.width  = navCanvas.offsetWidth;
        navCanvas.height = navCanvas.offsetHeight;
    }

    /* ── Générer les étoiles ── */
    function initNavStars() {
        stars.length = 0;
        for (let i = 0; i < COUNT; i++) {
            stars.push({
                x:         Math.random() * navCanvas.width,
                y:         Math.random() * navCanvas.height,
                r:         Math.random() * 1.2 + 0.2,
                speed:     Math.random() * 0.006 + 0.002,
                offset:    Math.random() * Math.PI * 2,
                turquoise: Math.random() > 0.6
            });
        }
    }

    /* ── Dessiner les étoiles (boucle d'animation) ── */
    function drawNavStars(t) {
        ctx.clearRect(0, 0, navCanvas.width, navCanvas.height);
        stars.forEach(function(s) {
            const a = 0.15 + 0.5 * (0.5 + 0.5 * Math.sin(t * s.speed + s.offset));
            ctx.beginPath();
            ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
            ctx.fillStyle = s.turquoise
                ? `rgba(76, 201, 240, ${a})`
                : `rgba(255, 255, 255, ${a})`;
            ctx.fill();
        });
        animationId = requestAnimationFrame(drawNavStars);
    }

    /* ── Démarrer l'animation ── */
    function startNavStars() {
        if (animationId) return;
        resizeNavCanvas();
        initNavStars();
        animationId = requestAnimationFrame(drawNavStars);
    }

    /* ── Arrêter l'animation ── */
    function stopNavStars() {
        if (animationId) {
            cancelAnimationFrame(animationId);
            animationId = null;
            ctx.clearRect(0, 0, navCanvas.width, navCanvas.height);
        }
    }

    /* ── Init au chargement ── */
    if (isNightMode()) startNavStars();

    /* ── Démarrer / arrêter selon le thème ── */
    const themeObserver = new MutationObserver(function() {
        if (isNightMode()) startNavStars();
        else stopNavStars();
    });

    themeObserver.observe(document.documentElement, { attributes: true, attributeFilter: ['data-theme'] });
    themeObserver.observe(document.body, { attributes: true, attributeFilter: ['class', 'data-theme'] });

    /* ── Resize uniquement si animation active ── */
    window.addEventListener('resize', function() {
        if (animationId) {
            resizeNavCanvas();
            initNavStars();
        }
    });
}


/* ══════════════════════════════════════════
                NAV : lien actif
   ══════════════════════════════════════════ */

const currentPage = location.pathname.split('/').pop() || 'index.html';

/* ── Calculer et appliquer le lien actif ── */
function setActiveLink() {
    const hash = location.hash;
    document.querySelectorAll('.nav-link').forEach(function(link) {
        link.classList.remove('is-active');
        const href = link.getAttribute('href');

        /* Page courante */
        if (href === currentPage) link.classList.add('is-active');

        /* Page contact : ancres #equipe / #contact */
        if (currentPage === 'contact.html') {
            if (hash === '#contact' && href === 'contact.html#contact') {
                link.classList.add('is-active');
            } else if (hash !== '#contact' && href === 'contact.html#equipe') {
                link.classList.add('is-active');
            }
        }
    });
}

/* ── Au chargement ── */
setActiveLink();

/* ── Au clic sur un lien ancre (délai pour laisser l'URL se mettre à jour) ── */
document.querySelectorAll('.nav-link').forEach(function(link) {
    link.addEventListener('click', function() {
        setTimeout(setActiveLink, 50);
    });
});

/* ── Navigation précédent / suivant ── */
window.addEventListener('hashchange', setActiveLink);