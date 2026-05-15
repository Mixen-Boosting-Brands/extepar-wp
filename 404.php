<?php get_header(); ?>

<!-- ══════════════════════════════════════════════════════════
     HERO – 404 PÁGINA NO ENCONTRADA
═══════════════════════════════════════════════════════════ -->
<section class="hero">
    <div
        class="hero__bg"
        style="background-image: url('<?php echo esc_url(
            get_template_directory_uri(),
        ); ?>/assets/images/hero-bg.jpg');"
    ></div>
    <div class="hero__overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="mb-3" data-aos="fade-up">
                    <span class="pill pill--yellow">Error 404</span>
                </div>
                <h1
                    class="hero__title"
                    data-aos="fade-up"
                    data-aos-delay="80"
                >
                    Página no<br />
                    <strong>encontrada</strong>
                </h1>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="160"
                >
                    La página que buscas no existe o fue movida a otra
                    dirección.
                </p>
                <div
                    class="d-flex gap-3 flex-wrap"
                    data-aos="fade-up"
                    data-aos-delay="240"
                >
                    <a
                        href="<?php echo esc_url(home_url("/")); ?>"
                        class="btn btn-primary rounded-pill"
                    >
                        Volver al inicio
                    </a>
                    <a
                        href="<?php echo esc_url(home_url("/contacto")); ?>"
                        class="btn btn-outline-light rounded-pill"
                    >
                        Contactar
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     ACCESOS RÁPIDOS
═══════════════════════════════════════════════════════════ -->
<section class="section-split">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12" data-aos="fade-up">
                <h2 class="section-split__heading">
                    ¿A dónde <strong>querías ir?</strong>
                </h2>
                <p class="section-split__lead">
                    Estos son los accesos principales del sitio.
                </p>
            </div>
        </div>
        <div class="row g-4">
            <div
                class="col-12 col-sm-6 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="0"
            >
                <div class="step-card card--dark">
                    <div class="step-card__icon">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3 class="step-card__title text-accent">Servicios</h3>
                    <p class="step-card__text">
                        Conoce todos nuestros servicios de infraestructura.
                    </p>
                    <a
                        href="<?php echo esc_url(home_url("/servicios")); ?>"
                        class="project-card__link text-accent mt-3 d-inline-block"
                    >
                        Ver servicios <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div
                class="col-12 col-sm-6 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="80"
            >
                <div class="step-card card--dark">
                    <div class="step-card__icon">
                        <i class="fas fa-images"></i>
                    </div>
                    <h3 class="step-card__title text-accent">Proyectos</h3>
                    <p class="step-card__text">
                        Explora los proyectos ejecutados por Extepar.
                    </p>
                    <a
                        href="<?php echo esc_url(home_url("/proyectos")); ?>"
                        class="project-card__link text-accent mt-3 d-inline-block"
                    >
                        Ver proyectos <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div
                class="col-12 col-sm-6 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="160"
            >
                <div class="step-card card--dark">
                    <div class="step-card__icon">
                        <i class="fas fa-building"></i>
                    </div>
                    <h3 class="step-card__title text-accent">Nosotros</h3>
                    <p class="step-card__text">
                        Conoce al equipo y la historia de Extepar.
                    </p>
                    <a
                        href="<?php echo esc_url(home_url("/nosotros")); ?>"
                        class="project-card__link text-accent mt-3 d-inline-block"
                    >
                        Conocer más <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
            <div
                class="col-12 col-sm-6 col-lg-3"
                data-aos="fade-up"
                data-aos-delay="240"
            >
                <div class="step-card card--dark">
                    <div class="step-card__icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h3 class="step-card__title text-accent">Contacto</h3>
                    <p class="step-card__text">
                        Habla con nosotros sobre tu próximo proyecto.
                    </p>
                    <a
                        href="<?php echo esc_url(home_url("/contacto")); ?>"
                        class="project-card__link text-accent mt-3 d-inline-block"
                    >
                        Contactar <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/control-banner"); ?>

<?php get_footer(); ?>
