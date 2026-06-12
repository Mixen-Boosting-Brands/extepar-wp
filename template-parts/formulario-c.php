<!-- ══════════════════════════════════════════════════════════
     HABLEMOS DE TU PROYECTO – FORMULARIO
═══════════════════════════════════════════════════════════ -->
<section class="contact-section bg-brand-yellow-2" id="contacto">
    <div class="container">
        <!-- Encabezado -->
        <div class="row mb-5" data-aos="fade-right">
            <div class="col-12">
                <h2 class="contact-section__heading mb-0">
                    <strong>Queremos</strong><br />
                    <span
                        class="d-flex align-items-baseline gap-3 flex-wrap"
                    >
                        conocerte
                        <span class="contact-section__lead mb-0"
                            >Comparte tu información y adjunta tu CV.</span
                        >
                    </span>
                </h2>
            </div>
        </div>

        <form
            id="form-contacto"
            class="needs-validation"
            action="<?php echo get_template_directory_uri(); ?>/mailer.php"
            method="POST"
            enctype="multipart/form-data"
            novalidate
            data-aos="fade-up"
            data-aos-delay="80"
        >
            <input type="hidden" name="form_type" value="talento">
            <div id="hold-on-a-sec"></div>
            <div id="respuesta"></div>

            <div class="row justify-content-center">
                <div class="col-12 col-lg-8">
                    <div class="row g-4">

                        <!-- Nombre completo -->
                        <div class="col-12">
                            <label class="form-label" for="nombre">Nombre completo</label>
                            <input
                                type="text"
                                class="form-control"
                                id="nombre"
                                name="nombre"
                                required
                            />
                            <div class="invalid-feedback">
                                Ingresa tu nombre completo.
                            </div>
                        </div>

                        <!-- Correo + Teléfono -->
                        <div class="col-12 col-sm-6">
                            <label class="form-label" for="correo">Correo electrónico</label>
                            <input
                                type="email"
                                class="form-control"
                                id="correo"
                                name="correo"
                                required
                            />
                            <div class="invalid-feedback">
                                Ingresa un correo electrónico válido.
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label class="form-label" for="telefono">Teléfono</label>
                            <input
                                type="tel"
                                class="form-control"
                                id="telefono"
                                name="telefono"
                                required
                            />
                            <div class="invalid-feedback">
                                Ingresa un número de teléfono.
                            </div>
                        </div>

                        <!-- Área o puesto de interés -->
                        <div class="col-12">
                            <label class="form-label" for="cargo">Área o puesto de interés</label>
                            <select
                                class="form-select"
                                id="cargo"
                                name="cargo"
                                required
                            >
                                <option value="" disabled selected>Selecciona una opción</option>
                                <option value="Campo y operación">Campo y operación</option>
                                <option value="Administración y apoyo">Administración y apoyo</option>
                                <option value="Supervisión, maquinaria y oficina de obra">Supervisión, maquinaria y oficina de obra</option>
                            </select>
                            <div class="invalid-feedback">
                                Selecciona un área o puesto de interés.
                            </div>
                        </div>

                        <!-- Adjuntar CV -->
                        <div class="col-12">
                            <label class="form-label" for="cv">Adjunta tu CV</label>
                            <input
                                type="file"
                                class="form-control"
                                id="cv"
                                name="cv"
                                accept=".pdf,.doc,.docx,.jpg,.jpeg,.png,application/pdf,application/msword,application/vnd.openxmlformats-officedocument.wordprocessingml.document,image/jpeg,image/png"
                                required
                            />
                            <div class="form-text">
                                Formatos aceptados: PDF, Word, JPG o PNG.
                            </div>
                            <div class="invalid-feedback">
                                Adjunta tu CV para continuar.
                            </div>
                        </div>

                        <!-- Botón de envío -->
                        <div class="col-12 text-end">
                            <button
                                type="submit"
                                class="btn btn-secondary rounded-pill"
                            >
                                Enviar CV
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </form>
    </div>
</section>
