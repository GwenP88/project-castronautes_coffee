const navToggle = document.querySelector('.nav-toggle');
const navMenu = document.querySelector('.nav-menu');

navToggle.addEventListener('click', function() {
    const isOpen = navMenu.classList.toggle('is-open');
    navToggle.setAttribute('aria-expanded', isOpen);
    navToggle.setAttribute('aria-label', isOpen ? 'Fermer le menu' : 'Ouvrir le menu');
});

document.querySelectorAll('.nav-link').forEach(function(link) {
    link.addEventListener('click', function() {
        navMenu.classList.remove('is-open');
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.setAttribute('aria-label', 'Ouvrir le menu');
    });
});

document.addEventListener('click', function(e) {
    if (!navMenu.contains(e.target) && !navToggle.contains(e.target)) {
        navMenu.classList.remove('is-open');
        navToggle.setAttribute('aria-expanded', 'false');
        navToggle.setAttribute('aria-label', 'Ouvrir le menu');
    }
});


const navCanvas = document.querySelector('.nav-stars');

if (navCanvas) {
    const ctx = navCanvas.getContext('2d');
    const COUNT = 60;
    const stars = [];
    let animationRunning = false;

    function resizeNavCanvas() {
        navCanvas.width = navCanvas.offsetWidth;
        navCanvas.height = navCanvas.offsetHeight;
    }

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
        if (animationRunning) requestAnimationFrame(drawNavStars);
    }

    resizeNavCanvas();
    initNavStars();

    window.addEventListener('resize', function() {
        resizeNavCanvas();
        initNavStars();
    });

    const navObserver = new IntersectionObserver(function(entries) {
        entries.forEach(function(entry) {
            if (entry.isIntersecting) {
                animationRunning = true;
                requestAnimationFrame(drawNavStars);
            } else {
                animationRunning = false;
            }
        });
    });
    navObserver.observe(navCanvas);
}


const currentPage = location.pathname.split('/').pop() || 'index.html';
const currentHash = location.hash;

function setActiveLink() {
    const hash = location.hash;
    document.querySelectorAll('.nav-link').forEach(function(link) {
        link.classList.remove('is-active');
        const href = link.getAttribute('href');

        if (href === currentPage) {
            link.classList.add('is-active');
        }

        if (currentPage === 'contact.html') {
            if (hash === '#contact' && href === 'contact.html#contact') {
                link.classList.add('is-active');
            } else if (hash !== '#contact' && href === 'contact.html#equipe') {
                link.classList.add('is-active');
            }
        }
    });
}

setActiveLink();

document.querySelectorAll('.nav-link').forEach(function(link) {
    link.addEventListener('click', function() {
        setTimeout(setActiveLink, 50);
    });
});

window.addEventListener('hashchange', setActiveLink);