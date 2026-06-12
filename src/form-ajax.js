'use strict';

window.addEventListener('load', function () {
    var forms = document.getElementsByClassName('needs-validation');

    Array.prototype.forEach.call(forms, function (form) {
        form.addEventListener('submit', function (event) {
            event.preventDefault();
            event.stopPropagation();

            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return;
            }

            form.classList.add('was-validated');

            var $form     = $(form);
            var $respuesta = $form.find('#respuesta');
            var $spinner  = $form.find('#hold-on-a-sec');

            $.ajax({
                type: $form.attr('method'),
                url: $form.attr('action'),
                data: new FormData(form),
                processData: false,
                contentType: false,
                beforeSend: function () {
                    $spinner.addClass('is-loading');
                    $respuesta.removeClass('success error').text('');
                },
                success: function (response) {
                    form.classList.remove('was-validated');
                    $respuesta.removeClass('error').addClass('success').text(response);
                    form.reset();
                    setTimeout(function () {
                        $respuesta.fadeOut(400, function () {
                            $(this).removeClass('success error').text('').show();
                        });
                    }, 5000);
                },
                error: function (xhr) {
                    var msg = xhr.responseText || 'Lo sentimos, ocurrió un error. Intenta nuevamente.';
                    $respuesta.removeClass('success').addClass('error').text(msg);
                    setTimeout(function () {
                        $respuesta.fadeOut(400, function () {
                            $(this).removeClass('success error').text('').show();
                        });
                    }, 5000);
                },
                complete: function () {
                    $spinner.removeClass('is-loading');
                }
            });
        }, false);
    });
}, false);
