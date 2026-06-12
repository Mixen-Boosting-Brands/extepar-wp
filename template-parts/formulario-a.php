<!-- ══════════════════════════════════════════════════════════
     HABLEMOS DE TU PROYECTO – FORMULARIO
═══════════════════════════════════════════════════════════ -->
<section class="contact-section bg-brand-yellow-2" id="contacto">
    <div class="container">
        <div class="row align-items-start gy-5">
            <div class="col-12" data-aos="fade-right">
                <h2 class="contact-section__heading">
                    <strong>Hablemos</strong> de<br />tu proyecto
                </h2>
                <p class="contact-section__lead">
                    Comparte la información inicial y revisamos alcance, condiciones y riesgos para darte una primera lectura técnica.
                </p>
            </div>
            <div
                class="col-12"
                data-aos="fade-left"
                data-aos-delay="80"
            >
                <form
                    id="form-contacto"
                    class="needs-validation"
                    action="<?php echo get_template_directory_uri(); ?>/mailer.php"
                    method="POST"
                    novalidate
                >
                    <input type="hidden" name="form_type" value="proyecto">
                    <div id="hold-on-a-sec"></div>
                    <div id="respuesta"></div>
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="row gy-3">
                                <div class="col-12">
                                    <label
                                        class="form-label"
                                        for="nombre"
                                        >Nombre completo</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="nombre"
                                        name="nombre"
                                        placeholder="Nombre completo"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Ingresa tu nombre completo.
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label
                                        class="form-label"
                                        for="empresa"
                                        >Empresa</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="empresa"
                                        name="empresa"
                                        placeholder="Nombre de tu empresa"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Ingresa el nombre de tu empresa.
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label
                                        class="form-label"
                                        for="tipo-proyecto"
                                        >Tipo de proyecto</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="tipo-proyecto"
                                        name="tipo_proyecto"
                                        placeholder="Ej. Plataforma industrial"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Describe el tipo de proyecto.
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label
                                        class="form-label"
                                        for="cargo"
                                        >Cargo</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="cargo"
                                        name="cargo"
                                        placeholder="Tu cargo en la empresa"
                                    />
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label
                                        class="form-label"
                                        for="dimensiones"
                                        >Dimensiones en m²</label
                                    >
                                    <input
                                        type="text"
                                        class="form-control"
                                        id="dimensiones"
                                        name="dimensiones"
                                        placeholder="Aprox. en m²"
                                    />
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label
                                        class="form-label"
                                        for="telefono"
                                        >Teléfono</label
                                    >
                                    <input
                                        type="tel"
                                        class="form-control"
                                        id="telefono"
                                        name="telefono"
                                        placeholder="55 123 4567"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Ingresa un número de teléfono.
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <label
                                        class="form-label"
                                        for="correo"
                                        >Correo electrónico</label
                                    >
                                    <input
                                        type="email"
                                        class="form-control"
                                        id="correo"
                                        name="correo"
                                        placeholder="correo@empresa.com"
                                        required
                                    />
                                    <div class="invalid-feedback">
                                        Ingresa un correo electrónico
                                        válido.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 d-flex flex-column">
                            <label class="form-label" for="informacion"
                                >Información adicional</label
                            >
                            <textarea
                                name="informacion"
                                id="informacion"
                                class="form-control flex-grow-1"
                                placeholder="Cuéntanos más sobre tu proyecto..."
                                required
                            ></textarea>
                            <div class="invalid-feedback">
                                Cuéntanos más sobre tu proyecto.
                            </div>
                        </div>

                        <div class="col-12 text-end mt-4">
                            <button
                                type="submit"
                                class="btn btn-secondary rounded-pill"
                            >
                                Enviar mensaje
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
