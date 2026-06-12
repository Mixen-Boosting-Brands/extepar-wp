<?php get_header(); ?>

<!-- ══════════════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════════════ -->
<section class="hero" id="inicio">
    <div
        class="hero__bg"
        style="
            background-image: url(&quot;<?php echo esc_url(
                get_template_directory_uri(),
            ); ?>/assets/images/hero-bg.jpg&quot;);
        "
    ></div>
    <div class="hero__overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h1 class="hero__title" data-aos="fade-up">
                    <strong>Obras a la primera</strong>, a tiempo y sin sorpresas.
                </h1>

                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="160"
                >
                    Con transparencia total, asegurando que el cliente mantenga siempre el control del proyecto.
                </p>
                <a
                    href="<?php echo esc_url(home_url("/cv")); ?>"
                    class="btn btn-primary rounded-pill"
                    data-aos="fade-up"
                    data-aos-delay="240"
                >
                    Contáctanos ahora
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     LA BASE DEL PROYECTO DEFINE EL RESULTADO
═══════════════════════════════════════════════════════════ -->
<section class="section-split" id="base">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12" data-aos="fade-up">
                <h2 class="section-split__heading">
                    <strong>El control</strong> inicial<br />
                    <strong>evita correciones.</strong>
                </h2>
                <p class="section-split__lead">
                    Extepar interviene en etapas críticas con seguimiento en campo para evitar sorpresas.
                </p>
            </div>
            <div class="col-12">
                <div class="cards-overlap">
                    <div
                        class="cards-overlap__back"
                        data-aos="fade-right"
                    >
                        <div class="check-list card--dark">
                            <h3 class="check-list__label">
                                Cuando hay sorpresas:
                            </h3>
                            <ul>
                                <li>
                                    <i class="fa-solid fa-shield"></i>
                                    Retrasos
                                </li>
                                <li>
                                    <i class="fa-solid fa-shield"></i>
                                    Reprocesos
                                </li>
                                <li>
                                    <i class="fa-solid fa-shield"></i>
                                    Sobrecostos
                                </li>
                                <li>
                                    <i class="fa-solid fa-shield"></i>
                                    Falta de control
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div
                        class="cards-overlap__front"
                        data-aos="fade-left"
                        data-aos-delay="250"
                    >
                        <div class="check-list card--yellow">
                            <p class="check-list__label">
                                Control con transparencia:
                            </p>
                            <ul>
                                <li>
                                    <i
                                        class="fa-solid fa-circle-check"
                                    ></i>
                                    Validación en campo
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-circle-check"
                                    ></i>
                                    Decisiones informadas
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-circle-check"
                                    ></i>
                                    Seguimiento continuo
                                </li>
                                <li>
                                    <i
                                        class="fa-solid fa-circle-check"
                                    ></i>
                                    Ejecución sin sorpresas
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     CONTROL REAL RESPALDADO POR CAPACIDAD OPERATIVA
═══════════════════════════════════════════════════════════ -->
<section class="section-split bg-brand-yellow-light" id="nosotros">
    <div class="container">
        <div class="row align-items-center gy-5">
            <div class="col-12 col-lg-7" data-aos="fade-right">
                <h2 class="section-split__heading">
                    <strong>Control real</strong> respaldado<br />
                    por <strong>capacidad operativa.</strong>
                </h2>
                <p class="section-split__lead mb-4">
                    Usamos un sistema de supervisión, validación y decisiones en campo para hacer sencillo lo complejo y ejecutar a la primera, sin sorpresas.
                </p>
                <p class="section-split__lead mb-4">
                    Extepar mantiene transparencia sobre lo que ocurre en obra para que el cliente sepa dónde está parado el <a href="<?php echo esc_url(
                        home_url("/contacto"),
                    ); ?>" style="color: #15253e;">proyecto</a>.
                </p>

                <div class="pill-group mb-3">
                    <h4 class="pill-group__label">Control:</h4>
                    <a href="#" class="pill pill--light"
                        >Seguimiento continuo en obra</a
                    >
                    <a href="#" class="pill pill--light"
                        >Validación técnica en cada etapa</a
                    >
                    <a href="#" class="pill pill--light"
                        >Decisiones basadas en condiciones reales</a
                    >
                    <a href="#" class="pill pill--light"
                        >Prevención antes que corrección</a
                    >
                </div>

                <div class="pill-group">
                    <h4 class="pill-group__label">Capacidad:</h4>
                    <a href="#" class="pill"
                        >Más de 37 años de experiencia</a
                    >
                    <a href="#" class="pill"
                        >Maquinaria y equipo propio</a
                    >
                    <a href="#" class="pill"
                        >Sistema de trabajo Extepar</a
                    >
                    <a href="#" class="pill"
                        >Ejecución con control constante</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     UNA FORMA CLARA DE EJECUTAR CADA PROYECTO (PROCESO)
═══════════════════════════════════════════════════════════ -->
<section class="step-flow" id="proceso">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 col-lg-8" data-aos="fade-up">
                <h2 class="step-flow__heading">
                    Una <strong>forma clara de</strong><br />
                    <strong>ejecutar</strong> sin sorpresas.
                </h2>
                <p class="step-flow__sub">
                    Cada etapa está diseñada para mantener control y
                    reducir errores desde el inicio.
                </p>
            </div>
        </div>
        <div class="row g-3">
            <div
                class="col-12 col-sm-6 col-lg">
                <div class="step-card card--dark" data-aos="fade-right"
                data-aos-delay="0" data-aos-duration="600">
                    <div class="step-card__icon">
                        <i class="fas fa-magnifying-glass-chart"></i>
                    </div>
                    <h3 class="step-card__title text-accent">
                        Diagnóstico Técnico
                    </h3>
                    <p class="step-card__text">
                        Evaluación de condiciones del sitio, suelos y
                        requerimientos antes de iniciar.
                    </p>
                </div>
            </div>
            <div class="col-auto d-none d-lg-flex align-items-center step-flow__arrow" data-aos="fade-right" data-aos-delay="75" data-aos-duration="600">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div
                class="col-12 col-sm-6 col-lg">
                <div class="step-card card--dark" data-aos="fade-right"
                data-aos-delay="150" data-aos-duration="600">
                    <div class="step-card__icon">
                        <i class="fas fa-layer-group"></i>
                    </div>
                    <h3 class="step-card__title text-accent">
                        Planeación Estructurada
                    </h3>
                    <p class="step-card__text">
                        Programa de trabajo detallado con tiempos y
                        criterios técnicos del proyecto.
                    </p>
                </div>
            </div>
            <div class="col-auto d-none d-lg-flex align-items-center step-flow__arrow" data-aos="fade-right" data-aos-delay="225" data-aos-duration="600">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div
                class="col-12 col-sm-6 col-lg">
                <div class="step-card card--dark" data-aos="fade-right"
                data-aos-delay="300" data-aos-duration="600">
                    <div class="step-card__icon">
                        <i class="fas fa-gears"></i>
                    </div>
                    <h3 class="step-card__title text-accent">
                        Ejecución Controlada
                    </h3>
                    <p class="step-card__text">
                        Operación con sistema y supervisión técnica constante en campo.
                    </p>
                </div>
            </div>
            <div class="col-auto d-none d-lg-flex align-items-center step-flow__arrow" data-aos="fade-right" data-aos-delay="375" data-aos-duration="600">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div
                class="col-12 col-sm-6 col-lg">
                <div class="step-card card--dark" data-aos="fade-right"
                data-aos-delay="450" data-aos-duration="600">
                    <div class="step-card__icon">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
                    <h3 class="step-card__title text-accent">
                        Seguimiento y ajuste
                    </h3>
                    <p class="step-card__text">
                        Monitoreo continuo, validación en campo y
                        ajustes basados en condiciones reales.
                    </p>
                </div>
            </div>
            <div class="col-auto d-none d-lg-flex align-items-center step-flow__arrow" data-aos="fade-right" data-aos-delay="525" data-aos-duration="600">
                <i class="fas fa-chevron-right"></i>
            </div>
            <div
                class="col-12 col-sm-6 col-lg">
                <div class="step-card card--dark" data-aos="fade-right"
                data-aos-delay="600" data-aos-duration="600">
                    <div class="step-card__icon">
                        <i class="fa-solid fa-circle-check"></i>
                    </div>
                    <h3 class="step-card__title text-accent">
                        Entrega
                    </h3>
                    <p class="step-card__text">
                        Validación final de la etapa ejecutada para avanzar sin arrastrar errores.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     SERVICIOS ENFOCADOS EN LA BASE DEL PROYECTO
═══════════════════════════════════════════════════════════ -->
<!-- section class="services-section" id="servicios">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="services-section__heading">
                    <strong>Extepar System</strong><br />
                    Ejecución sin sorpresas, con control real en campo.
                </h2>
                <p class="services-section__sub">
                    Un sistema de trabajo para planear, coordinar, ejecutar y liberar cada etapa con compromisos claros, control en campo y evidencia de avance.
                </p>
            </div>
        </div>
        <div class="row" data-aos="zoom-in-up" data-aos-delay="200" data-aos-duration="1200">
            <div class="col-12">
                <div class="services-section__img-wrapper">
                    <img
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/servicios-tabla.png"
                        alt="Planeación de ejecución en campo"
                    />
                </div>
            </div>
        </div>
    </div>
</section -->

<?php get_template_part("template-parts/control-banner"); ?>

<!-- ══════════════════════════════════════════════════════════
     PROYECTOS DONDE LA PRECISIÓN ES CRÍTICA
═══════════════════════════════════════════════════════════ -->
<section class="projects-section" id="proyectos">
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-12 col-lg-8" data-aos="fade-right">
                <h2 class="projects-section__heading">
                    <strong>Proyectos</strong> donde<br />
                    la <strong>precisión</strong> es crítica
                </h2>
                <p class="projects-section__sub">
                    Cada proyecto tiene condiciones logísticas y operativas donde una desviación puede afectar tiempo, costo y continuidad.
                </p>
            </div>
            <div
                class="col-12 col-lg-4 text-lg-end my-auto"
                data-aos="fade-left"
            >
                <a href="<?php echo esc_url(
                    home_url("/proyectos"),
                ); ?>" class="btn btn-primary rounded-pill">
                    Ver proyectos
                </a>
            </div>
        </div>
        <?php
        $proyectos = new WP_Query([
            "post_type"           => "proyectos-extepar",
            "posts_per_page"      => 6,
            "orderby"             => "menu_order",
            "order"               => "ASC",
            "post_status"         => "publish",
            "ignore_sticky_posts" => true,
        ]);
        $hay_mas = $proyectos->found_posts > 6;
        ?>
        <div class="row g-4">
            <?php if ($proyectos->have_posts()):
                $total = count($proyectos->posts);
                $i = 0;
                while ($proyectos->have_posts()):

                    $proyectos->the_post();
                    $i++;
                    $offset = ($total === 5 && $i === 4) ? ' offset-lg-2' : '';
                    ?>
            <div
                class="col-12 col-md-4<?php echo $offset; ?>"
                data-aos="fade-up"
                data-aos-delay="<?php echo $i % 3 === 1
                    ? 0
                    : ($i % 3 === 2
                        ? 80
                        : 160); ?>"
            >
                <div class="project-card">
                    <?php if (has_post_thumbnail()): ?>
                    <img
                        class="project-card__img"
                        src="<?php echo esc_url(
                            get_the_post_thumbnail_url(null, "medium_large"),
                        ); ?>"
                        alt="<?php the_title_attribute(); ?>"
                    />
                    <?php else: ?>
                    <img
                        class="project-card__img"
                        src="<?php echo esc_url(
                            get_template_directory_uri(),
                        ); ?>/assets/images/proyecto-1.jpg"
                        alt="<?php the_title_attribute(); ?>"
                    />
                    <?php endif; ?>
                    <div class="project-card__body">
                        <?php
                        $tipos = get_the_terms(get_the_ID(), "tipo-proyecto");
                        if ($tipos && !is_wp_error($tipos)): ?>
                        <span class="project-card__type">
                            <?php echo esc_html($tipos[0]->name); ?>
                        </span>
                        <?php endif;
                        ?>
                        <h3 class="project-card__title"><?php the_title(); ?></h3>
                        <p class="project-card__text">
                            <?php echo wp_trim_words(
                                get_the_excerpt(),
                                15,
                                "…",
                            ); ?>
                        </p>
                        <a href="<?php echo esc_url(
                            home_url("/proyectos"),
                        ); ?>/#proyectos" class="project-card__link">
                            Ver proyecto
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            endif; ?>
        </div>

        <?php if ($hay_mas): ?>
        <div class="row mt-5" data-aos="fade-up">
            <div class="col-12 text-center">
                <a
                    href="<?php echo esc_url(home_url("/proyectos")); ?>"
                    class="btn btn-primary rounded-pill"
                >
                    Ver más proyectos
                </a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     TRABAJAMOS CON QUIENES NO PUEDEN FALLAR
═══════════════════════════════════════════════════════════ -->
<section class="audience-section" id="capacidades">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 col-lg-8" data-aos="fade-up">
                <h2 class="audience-section__heading">
                    <strong>Trabajamos con</strong><br />
                    quienes no pueden fallar
                </h2>
            </div>
        </div>
        <div class="row g-4">
            <div
                class="col-12 col-md-4"
                data-aos="fade-up"
                data-aos-delay="0"
            >
                <div class="step-card card--dark">
                    <div class="text-end">
                        <div class="step-card__icon">
                            <i class="fas fa-building"></i>
                        </div>
                    </div>
                    <h3 class="step-card__title text-accent">
                        Desarrolladores<br />
                        Industriales
                    </h3>
                    <p class="step-card__text">
                        Protección del programa desde el control de obra.
                    </p>
                </div>
            </div>
            <div
                class="col-12 col-md-4"
                data-aos="fade-up"
                data-aos-delay="80"
            >
                <div class="step-card card--dark">
                    <div class="text-end">
                        <div class="step-card__icon">
                            <i class="fas fa-gear"></i>
                        </div>
                    </div>
                    <h3 class="step-card__title text-accent">
                        General<br />
                        Contractors
                    </h3>
                    <p class="step-card__text">
                        Un subcontratista que no genera sorpresas en
                        obra.
                    </p>
                </div>
            </div>
            <div
                class="col-12 col-md-4"
                data-aos="fade-up"
                data-aos-delay="160"
            >
                <div class="step-card card--dark">
                    <div class="text-end">
                        <div class="step-card__icon">
                            <i class="fas fa-screwdriver-wrench"></i>
                        </div>
                    </div>
                    <h3 class="step-card__title text-accent">
                        Industria y<br />
                        Mantenimiento
                    </h3>
                    <p class="step-card__text">
                        Intervenciones confiables sin afectar operación.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/stats-banner"); ?>

<?php get_template_part("template-parts/formulario-a"); ?>

<?php get_footer(); ?>
