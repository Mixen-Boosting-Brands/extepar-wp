'use strict';

document.addEventListener('DOMContentLoaded', function () {
    var modalEl = document.getElementById('modal-proyecto');
    if (!modalEl) return;

    var modalTitle    = modalEl.querySelector('.modal-proyecto__title');
    var carouselEl    = modalEl.querySelector('#carrusel-proyecto');
    var carouselInner = modalEl.querySelector('.carousel-inner');
    var indicators    = modalEl.querySelector('.carousel-indicators');

    document.addEventListener('click', function (e) {
        var trigger = e.target.closest('.project-card__expand');
        if (!trigger) return;

        var card = trigger.closest('.project-card[data-images]');
        if (!card) return;

        var images = [];
        try { images = JSON.parse(card.dataset.images); } catch (_) { return; }
        if (!images.length) return;

        var title = card.dataset.title || '';

        carouselInner.innerHTML = images.map(function (src, i) {
            return '<div class="carousel-item' + (i === 0 ? ' active' : '') + '">' +
                '<img src="' + src + '" class="d-block w-100" alt="' + title + '">' +
                '</div>';
        }).join('');

        indicators.innerHTML = images.length > 1
            ? images.map(function (_, i) {
                return '<button type="button" data-bs-target="#carrusel-proyecto"' +
                    ' data-bs-slide-to="' + i + '"' +
                    (i === 0 ? ' class="active" aria-current="true"' : '') +
                    ' aria-label="Foto ' + (i + 1) + '"></button>';
            }).join('')
            : '';

        if (modalTitle) modalTitle.textContent = title;

        var bsCar = bootstrap.Carousel.getOrCreateInstance(carouselEl, { interval: false });
        bsCar.to(0);

        bootstrap.Modal.getOrCreateInstance(modalEl).show();
    });

    modalEl.addEventListener('hidden.bs.modal', function () {
        carouselInner.innerHTML = '';
        indicators.innerHTML = '';
    });
});
