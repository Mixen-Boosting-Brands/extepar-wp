<?php
/*
Template Name: Capacidad técnica
*/
get_header(); ?>

<!-- ══════════════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════════════ -->
<section class="hero" id="inicio">
    <div
        class="hero__bg"
        style="
            background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg-5.jpg&quot;);
        "
    ></div>
    <div class="hero__overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h1 class="hero__title" data-aos="fade-up">
                    <strong>Capacidad para ejecutar</strong><br />
                    con consistencia
                </h1>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="80"
                >
                    Extepar cuenta con los recursos y la estructura para ejecutar proyectos
                    industriales con continuidad y claridad en cada etapa.
                </p>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <small
                        >Maquinaria propia | Equipo especializado | Ejecución en campo</small
                    >
                </p>
                <a
                    href="<?php echo esc_url(home_url("/evaluar-proyecto")); ?>"
                    class="btn btn-primary rounded-pill"
                    data-aos="fade-up"
                    data-aos-delay="160"
                >
                    Evaluar proyecto
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
    LA CAPACIDAD NO SE DECLARA
═══════════════════════════════════════════════════════════ -->
<section class="section-split" id="base">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="section-split__heading">
                    La capacidad no<br />
                    se declara. <strong>Se</strong><br />
                    <strong>demuestra en obra.</strong>
                </h2>
                <p class="section-split__lead">
                    Más allá de contar con equipo y experiencia, la capacidad real se refleja en la forma en que se ejecuta cada proyecto.
                </p>
                <p class="section-split__lead">
                    Extepar opera con una estructura que permite mantener continuidad, responder ante condiciones reales y sostener el ritmo de ejecución.
                </p>
            </div>
            <div
                class="col-lg-5 my-auto text-center"
                data-aos="fade-left"
                data-aos-delay="80"
            >
                <figure class="mb-0">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-capacidad-tecnica.png"
                        alt=""
                        class="img-fluid"
                    />
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     CARDS
═══════════════════════════════════════════════════════════ -->
<section class="section-split" id="base">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="section-split__heading">
                    <strong>Capacidad operativa</strong> y<br />
                    <strong>técnica en campo</strong>
                </h2>
                <p class="section-split__lead">
                    Extepar cuenta con la estructura, equipo y herramientas necesarias para sostener la ejecución en obra con continuidad y consistencia.
                </p>
            </div>
            <div class="col-lg-6"
                data-aos="fade-right"
            >
                <div class="check-list card--dark">
                    <h3 class="check-list__label">
                        En campo:
                    </h3>
                    <ul>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Supervisión directa en obra
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Personal técnico especializado                              </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Coordinación operativa en sitio
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Continuidad en frentes de trabajo
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6"
                data-aos="fade-left"
            >
                <div class="check-list card--yellow">
                    <p class="check-list__label">
                        Soporte técnico:
                    </p>
                    <ul>
                        <li>
                            <i
                                class="fa-solid fa-circle-check"
                            ></i>
                            Metodología Lean Construction aplicada
                        </li>
                        <li>
                            <i
                                class="fa-solid fa-circle-check"
                            ></i>
                            Sistemas de seguimiento y control (PPC, KPIs)
                        </li>
                        <li>
                            <i
                                class="fa-solid fa-circle-check"
                            ></i>
                            Herramientas de monitoreo y avance
                        </li>
                        <li>
                            <i
                                class="fa-solid fa-circle-check"
                            ></i>
                            Tecnología topográfica especializada
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-3"
                data-aos="fade-up"
            >
                <div class="check-list card--yellow-light">
                    <p class="check-list__label">
                        Capacidad operativa:
                    </p>
                    <ul>
                        <li>
                            <i
                                class="fa-solid fa-circle-check"
                            ></i>
                            Maquinaria propia
                        </li>
                        <li>
                            <i
                                class="fa-solid fa-circle-check"
                            ></i>
                            Equipo especializado
                        </li>
                        <li>
                            <i
                                class="fa-solid fa-circle-check"
                            ></i>
                            Capacidad para proyectos de gran escala
                        </li>
                        <li>
                            <i
                                class="fa-solid fa-circle-check"
                            ></i>
                            Cobertura en distintas regiones
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/stats-banner"); ?>

<?php get_template_part("template-parts/formulario-a"); ?>

<?php get_footer(); ?>
