/* ── Formulaire : validation et envoi ── */

const form = document.querySelector('.contact-form');

if (form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        let isValid = true;

        /* ── Validation : nom ── */
        const nameField  = document.getElementById('contact-name');
        const nameParent = nameField.closest('.form-field');
        if (nameField.value.trim() === '') {
            nameParent.classList.add('has-error');
            isValid = false;
        } else {
            nameParent.classList.remove('has-error');
        }

        /* ── Validation : email ── */
        const emailField  = document.getElementById('contact-email');
        const emailParent = emailField.closest('.form-field');
        if (!/@/.test(emailField.value.trim())) {
            emailParent.classList.add('has-error');
            isValid = false;
        } else {
            emailParent.classList.remove('has-error');
        }

        /* ── Validation : message ── */
        const messageField  = document.getElementById('contact-message');
        const messageParent = messageField.closest('.form-field');
        if (messageField.value.trim() === '') {
            messageParent.classList.add('has-error');
            isValid = false;
        } else {
            messageParent.classList.remove('has-error');
        }

        /* ── Validation : consentement ── */
        const consent       = document.getElementById('contact-consent');
        const consentParent = consent.closest('.form-check');
        if (!consent.checked) {
            consentParent.classList.add('has-error');
            isValid = false;
        } else {
            consentParent.classList.remove('has-error');
        }

        /* ── Envoi simulé ── */
        if (isValid) {
            const btn = form.querySelector('.form-submit');
            btn.textContent    = 'Signal envoyé ✦';
            btn.disabled       = true;
            btn.style.background = 'var(--accent)';
            btn.style.opacity  = '0.7';
            form.reset();
        }
    });
}