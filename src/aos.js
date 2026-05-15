import AOS from 'aos';

document.addEventListener('DOMContentLoaded', function () {
    AOS.init({
        once: true,
        duration: 700,
        easing: 'ease-out-cubic',
        offset: 60,
    });
});
