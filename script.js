document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    const password = document.querySelector('input[name="password"]');
    const confirm_password = document.querySelector('input[name="confirm_password"]');
    const message = document.getElementById('message');

    form.addEventListener('submit', function(event) {
        if (password.value !== confirm_password.value) {
            event.preventDefault();
            message.textContent = "Passwords do not match.";
        }
    });
});
