// filtres menu

const tabs = document.querySelectorAll('.menu-tab');
const sections = document.querySelectorAll('[data-section]');
const menuSelect = document.querySelector('.menu-tabs-select');

function filterMenu(filter) {
    // Mettre à jour les boutons desktop
    tabs.forEach(function(t) {
        const match = t.getAttribute('data-filter') === filter;
        t.classList.toggle('is-active', match);
        t.setAttribute('aria-pressed', match);
    });

    // Mettre à jour le select mobile
    if (menuSelect) menuSelect.value = filter;

    // Afficher / cacher les sections
    sections.forEach(function(section) {
        if (filter === 'all' || section.getAttribute('data-section') === filter) {
            section.removeAttribute('hidden');
        } else {
            section.setAttribute('hidden', '');
        }
    });
}

// Boutons desktop
tabs.forEach(function(tab) {
    tab.addEventListener('click', function() {
        filterMenu(tab.getAttribute('data-filter'));
    });
});

// Select mobile
if (menuSelect) {
    menuSelect.addEventListener('change', function() {
        filterMenu(this.value);
    });
}

// fond contact stars night

const contactCanvas = document.querySelector('.contact-stars');

if (contactCanvas) {
    const ctx = contactCanvas.getContext('2d');
    const COUNT = 80;
    const stars = [];

    function resizeContactCanvas() {
        contactCanvas.width = contactCanvas.offsetWidth;
        contactCanvas.height = contactCanvas.offsetHeight;
    }

    function initContactStars() {
        stars.length = 0;
        for (let i = 0; i < COUNT; i++) {
            stars.push({
                x:      Math.random() * contactCanvas.width,
                y:      Math.random() * contactCanvas.height,
                r:      Math.random() * 1.8 + 0.3,
                speed:  Math.random() * 0.006 + 0.002,
                offset: Math.random() * Math.PI * 2,
                turquoise: Math.random() > 0.6
            });
        }
    }

    function drawContactStars(t) {
        ctx.clearRect(0, 0, contactCanvas.width, contactCanvas.height);
        stars.forEach(function(s) {
            const a = 0.2 + 0.8 * (0.5 + 0.5 * Math.sin(t * s.speed + s.offset));
            ctx.beginPath();
            ctx.arc(s.x, s.y, s.r, 0, Math.PI * 2);
            ctx.fillStyle = s.turquoise
                ? `rgba(76, 201, 240, ${a})`
                : `rgba(255, 255, 255, ${a})`;
            ctx.fill();
        });
        requestAnimationFrame(drawContactStars);
    }

    resizeContactCanvas();
    initContactStars();
    window.addEventListener('resize', function() {
        resizeContactCanvas();
        initContactStars();
    });
    requestAnimationFrame(drawContactStars);
}