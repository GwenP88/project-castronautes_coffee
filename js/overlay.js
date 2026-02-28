// Restauration du mode au chargement de la page
if (localStorage.getItem('theme') === 'night') {
    activateNightMode();
}

// Fonctions mode nuit (disponibles partout)
function activateNightMode() {
    document.documentElement.setAttribute('data-theme', 'night');
    document.body.setAttribute('data-theme', 'night');
    document.body.classList.add('is-night-mode');
    localStorage.setItem('theme', 'night');

    document.querySelectorAll('.is-day').forEach(function(el) { el.style.display = 'none'; });
    document.querySelectorAll('.is-night').forEach(function(el) {
        el.removeAttribute('hidden');
        el.style.display = 'inline';
    });
}

function deactivateNightMode() {
    document.documentElement.removeAttribute('data-theme');
    document.body.removeAttribute('data-theme');
    document.body.classList.remove('is-night-mode');
    localStorage.removeItem('theme');

    document.querySelectorAll('.is-day').forEach(function(el) { el.style.display = ''; });
    document.querySelectorAll('.is-night').forEach(function(el) {
        el.setAttribute('hidden', '');
        el.style.display = '';
    });
}

// Boutons toggle (présents sur toutes les pages)
document.querySelectorAll('[data-open-night]').forEach(function(btn) {
    btn.addEventListener('click', function() {
        if (document.body.hasAttribute('data-theme')) {
            deactivateNightMode();
        } else {
            if (overlay) openOverlay();
            else activateNightMode();
        }
    });
});

// Overlay (présent uniquement sur index.php)
const overlay = document.getElementById('nightOverlay');

if (overlay) {
    const terminal = document.getElementById('nightTerminal');
    const nightDots = document.getElementById('nightDots');
    const statusDots = document.getElementById('nightStatusDots');
    const statusResult = document.getElementById('nightStatusResult');
    const nightFinal = document.getElementById('nightFinal');
    const script = document.getElementById('nightScript').innerHTML.trim();

    function wait(ms) {
        return new Promise(function(resolve) { setTimeout(resolve, ms); });
    }

    function animateDots(element, duration) {
        return new Promise(function(resolve) {
            const states = ['.', '..', '...'];
            let i = 0;
            element.textContent = states[0];
            const interval = setInterval(function() {
                i++;
                element.textContent = states[i % states.length];
            }, 400);
            setTimeout(function() { clearInterval(interval); resolve(); }, duration);
        });
    }

    async function typeText(element, text, speed) {
        for (let i = 0; i < text.length; i++) {
            element.textContent += text[i];
            await wait(speed);
        }
    }

    async function typeLines(lines) {
        for (let i = 0; i < lines.length; i++) {
            await typeText(terminal, lines[i], 35);
            terminal.textContent += '\n';
            await wait(180);
        }
    }

    async function runOverlaySequence() {
        terminal.textContent = '';
        nightDots.textContent = '…';
        statusDots.removeAttribute('hidden');
        statusResult.setAttribute('hidden', '');
        nightFinal.setAttribute('hidden', '');

        await animateDots(nightDots, 3000);
        nightDots.textContent = '.';

        const lines = script
            .split('\n')
            .map(function(l) { return l.trim(); })
            .filter(function(l) { return l !== ''; });

        await typeLines(lines);
        await wait(400);
        await animateDots(statusDots, 2000);
        statusDots.setAttribute('hidden', '');
        statusResult.removeAttribute('hidden');
        await wait(600);
        nightFinal.removeAttribute('hidden');
        await wait(1000);
        activateNightMode();
        await wait(800);
        closeOverlay();
    }

    function openOverlay() {
        overlay.removeAttribute('hidden');
        document.body.style.overflow = 'hidden';
        runOverlaySequence();
    }

    function closeOverlay() {
        overlay.setAttribute('hidden', '');
        document.body.style.overflow = '';
    }

    overlay.addEventListener('click', function(e) {
        if (e.target.hasAttribute('data-close')) closeOverlay();
    });

    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && !overlay.hasAttribute('hidden')) closeOverlay();
    });
}