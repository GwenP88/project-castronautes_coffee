const form = document.querySelector('.contact-form');

if (form) {
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        let isValid = true;

        // Nom
        const nameField = document.getElementById('contact-name');
        const nameParent = nameField.closest('.form-field');
        if (nameField.value.trim() === '') {
            nameParent.classList.add('has-error');
            isValid = false;
        } else {
            nameParent.classList.remove('has-error');
        }

        // Email
        const emailField = document.getElementById('contact-email');
        const emailParent = emailField.closest('.form-field');
        const emailRegex = /@/;
        if (!emailRegex.test(emailField.value.trim())) {
            emailParent.classList.add('has-error');
            isValid = false;
        } else {
            emailParent.classList.remove('has-error');
        }

        // Message
        const messageField = document.getElementById('contact-message');
        const messageParent = messageField.closest('.form-field');
        if (messageField.value.trim() === '') {
            messageParent.classList.add('has-error');
            isValid = false;
        } else {
            messageParent.classList.remove('has-error');
        }

        // Checkbox
        const consent = document.getElementById('contact-consent');
        const consentParent = consent.closest('.form-check');
        if (!consent.checked) {
            consentParent.classList.add('has-error');
            isValid = false;
        } else {
            consentParent.classList.remove('has-error');
        }

        // Si tout est valide, on simule un envoi
        if (isValid) {
            const btn = form.querySelector('.form-submit');
            btn.textContent = 'Signal envoyé ✦';
            btn.disabled = true;
            btn.style.background = 'var(--accent)';
            btn.style.opacity = '0.7';
            form.reset();
        }
    });
}