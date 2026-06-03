<!-- ══════════════════════════════════════════════════════════
     HABLEMOS DE TU PROYECTO – FORMULARIO
═══════════════════════════════════════════════════════════ -->
<section class="contact-section bg-brand-yellow-2" id="contacto">
    <div class="container">
        <!-- Encabezado -->
        <div class="row mb-5" data-aos="fade-right">
            <div class="col-12">
                <h2 class="contact-section__heading mb-0">
                    <strong>Hablemos</strong><br />
                    <span
                        class="d-flex align-items-baseline gap-3 flex-wrap"
                    >
                        de tu proyecto
                        <span class="contact-section__lead mb-0"
                            >Comparte los datos clave para una primera revisión técnica.</span
                        >
                    </span>
                </h2>
            </div>
        </div>

        <form
            id="form-contacto"
            class="needs-validation"
            action="#"
            method="POST"
            novalidate
            data-aos="fade-up"
            data-aos-delay="80"
        >
            <div id="hold-on-a-sec"></div>
            <div id="respuesta"></div>

            <!-- Fila 1: Tipo de proyecto + Ubicación -->
            <div class="row g-3 mb-3">
                <div class="col-12 col-lg-4">
                    <label class="form-label" for="tipo-proyecto"
                        >Tipo de proyecto</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="tipo-proyecto"
                        name="tipo_proyecto"
                        required
                    />
                    <div class="invalid-feedback">
                        Describe el tipo de proyecto.
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <label class="form-label" for="ubicacion"
                        >Ubicación</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="ubicacion"
                        name="ubicacion"
                        required
                    />
                    <div class="invalid-feedback">
                        Ingresa la ubicación del proyecto.
                    </div>
                </div>
            </div>

            <!-- Fila 2: Alcance requerido + Etapa del proyecto -->
            <div class="row g-3 mb-5">
                <div class="col-12 col-lg-4">
                    <label class="form-label" for="alcance"
                        >Alcance requerido</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="alcance"
                        name="alcance"
                        required
                    />
                    <div class="invalid-feedback">
                        Describe el alcance requerido.
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <label class="form-label" for="etapa"
                        >Etapa del proyecto</label
                    >
                    <input
                        type="text"
                        class="form-control"
                        id="etapa"
                        name="etapa"
                        required
                    />
                    <div class="invalid-feedback">
                        Indica la etapa actual del proyecto.
                    </div>
                </div>
            </div>

            <!-- Sección inferior: Preguntas técnicas + Datos de contacto -->
            <div class="row g-3">
                <!-- Columna izquierda: preguntas técnicas -->
                <div class="col-lg-7">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label
                                class="form-label"
                                for="estudios-suelos"
                                >¿Cuentas con estudio de mecánica de suelos?</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="estudios-suelos"
                                name="estudios_suelos"
                            />
                        </div>
                        <div class="col-12">
                            <label
                                class="form-label"
                                for="condiciones-terreno"
                                >¿Condiciones relevantes del
                                terreno?</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="condiciones-terreno"
                                name="condiciones_terreno"
                            />
                        </div>
                        <div class="col-12">
                            <label
                                class="form-label"
                                for="restricciones"
                                >¿Restricciones de tiempo o
                                ejecución?</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="restricciones"
                                name="restricciones"
                            />
                        </div>
                    </div>
                </div>

                <!-- Columna derecha: datos de contacto -->
                <div class="col-lg-5">
                    <div class="row gy-3">
                        <div class="col-12">
                            <label class="form-label" for="nombre"
                                >Nombre</label
                            >
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
                        <div class="col-6">
                            <label class="form-label" for="empresa"
                                >Empresa</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="empresa"
                                name="empresa"
                                required
                            />
                            <div class="invalid-feedback">
                                Ingresa el nombre de tu empresa.
                            </div>
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="cargo"
                                >Cargo</label
                            >
                            <input
                                type="text"
                                class="form-control"
                                id="cargo"
                                name="cargo"
                            />
                        </div>
                        <div class="col-6">
                            <label class="form-label" for="correo"
                                >Correo</label
                            >
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
                        <div class="col-6">
                            <label class="form-label" for="telefono"
                                >Teléfono</label
                            >
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
                    </div>
                </div>
            </div>

            <!-- Botón de envío -->
            <div class="row mt-4">
                <div class="col-12 text-end">
                    <button
                        type="submit"
                        class="btn btn-secondary rounded-pill"
                    >
                        Solicitar evaluación técnica
                    </button>
                </div>
            </div>
        </form>
    </div>
</section>
