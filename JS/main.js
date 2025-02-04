// scripts/main.js

// Wait for the DOM to load
document.addEventListener('DOMContentLoaded', function () {
    // Add a click event to all buttons with the class 'btn'
    const buttons = document.querySelectorAll('.btn');
    buttons.forEach(button => {
        button.addEventListener('click', function () {
            alert('Button clicked!');
        });
    });

    // Smooth scroll to sections
    const scrollLinks = document.querySelectorAll('a[href^="#"]');
    scrollLinks.forEach(link => {
        link.addEventListener('click', function (event) {
            event.preventDefault();
            const targetId = link.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);

            window.scrollTo({
                top: targetElement.offsetTop,
                behavior: 'smooth'
            });
        });
    });

    // Form validation
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function (event) {
            const email = document.getElementById('email');
            const password = document.getElementById('password');

            if (!email.value || !password.value) {
                event.preventDefault();
                alert('Please fill in all fields.');
            } else if (!validateEmail(email.value)) {
                event.preventDefault();
                alert('Please enter a valid email address.');
            }
        });
    }

    // Email validation function
    function validateEmail(email) {
        const re = /^(([^<>()

\[\]

\\.,;:\s@"]+(\.[^<>()

\[\]

\\.,;:\s@"]+)*)|(".+"))@(([^<>()[\]

\\.,;:\s@"]+\.)+[^<>()[\]

\\.,;:\s@"]{2,})$/i;
        return re.test(String(email).toLowerCase());
    }

    // Modal popup
    const modalTriggers = document.querySelectorAll('.modal-trigger');
    const modal = document.querySelector('.modal');
    const modalClose = document.querySelector('.modal-close');

    if (modal && modalClose && modalTriggers.length > 0) {
        modalTriggers.forEach(trigger => {
            trigger.addEventListener('click', function () {
                modal.classList.add('is-active');
            });
        });

        modalClose.addEventListener('click', function () {
            modal.classList.remove('is-active');
        });

        window.addEventListener('click', function (event) {
            if (event.target === modal) {
                modal.classList.remove('is-active');
            }
        });
    }
});
