<?php
/*
Template Name: Nosotros
*/
get_header(); ?>

<!-- ══════════════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════════════ -->
<section class="hero" id="inicio">
    <div
        class="hero__bg"
        style="
            background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg-6.jpg&quot;);
        "
    ></div>
    <div class="hero__overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h1 class="hero__title" data-aos="fade-up">
                    Una forma distinta<br />
                    <strong>de ejecutar en obra</strong>
                </h1>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="80"
                >
                    Extepar es una firma especializada en
                    infraestructura industrial que ejecuta proyectos con
                    disciplina, seguimiento en campo y claridad
                    operativa.
                </p>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <small
                        >Ejecución en campo | Disciplina operativa |
                        Claridad en cada etapa</small
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
    UNA OPERACIÓN ENFOCADA EN EJECUTAR MEJOR
═══════════════════════════════════════════════════════════ -->
<section class="section-split" id="base">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="section-split__heading">
                    Una operación<br />
                    <strong>enfocada en</strong><br />
                    <strong>ejecutar mejor</strong>
                </h2>
                <p class="section-split__lead">
                    Extepar es una firma especializada en
                    infraestructura industrial que interviene en una de
                    las etapas más críticas del proyecto: la preparación
                    del terreno.
                </p>
                <p class="section-split__lead">
                    Su enfoque está en reducir la incertidumbre en obra
                    mediante una ejecución más clara, ordenada y
                    consistente desde el inicio.
                </p>
                <p class="section-split__lead">
                    No participa como un proveedor más, sino como un
                    equipo que entiende el impacto de cada decisión en
                    la continuidad del proyecto.
                </p>
            </div>
            <div
                class="col-lg-5 my-auto text-center"
                data-aos="fade-left"
                data-aos-delay="80"
            >
                <figure class="mb-0">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-nosotros.png"
                        alt=""
                        class="img-fluid"
                    />
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     CTA BANNER 2 - UNA FORMA CLARA DE TRABAJAR
═══════════════════════════════════════════════════════════ -->
<section class="cta-banner">
    <div
        class="cta-banner__bg"
        style="
            background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/images/banner-una-forma-clara-de-trabajar-bg.jpg&quot;);
        "
    ></div>
    <div class="cta-banner__overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="cta-banner__title mb-4">
                    Una forma clara <strong>de trabajar</strong>
                </h2>
            </div>
            <div
                class="col-12 my-auto text-center"
                data-aos="fade-left"
                data-aos-delay="80"
            >
                <div class="mb-3">
                    <a href="#" class="pill pill--yellow-2 mb-3 mb-lg-0"
                        >La base del proyecto no admite improvisación</a
                    >
                    <a href="#" class="pill pill--yellow"
                        >La ejecución se valida en campo, no en papel</a
                    >
                </div>
                <div class="mb-3">
                    <a href="#" class="pill pill--yellow mb-3 mb-lg-0"
                        >La claridad operativa es parte del resultado</a
                    >
                    <a href="#" class="pill pill--yellow-2"
                        >Menos fricción también es un valor</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
    EQUIPO TÉCNICO, EJECUCIÓN REAL
═══════════════════════════════════════════════════════════ -->
<section class="section-split" id="base">
    <div class="container">
        <div class="row gy-4">
            <div
                class="col-lg-5 my-auto text-center"
                data-aos="fade-right"
                data-aos-delay="80"
            >
                <figure class="mb-0">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-nosotros-2.png"
                        alt=""
                        class="img-fluid"
                    />
                </figure>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <h2 class="section-split__heading">
                    Equipo técnico,<br />
                    <strong>ejecución real</strong>
                </h2>
                <p class="section-split__lead">
                    El equipo de Extepar está conformado por personal
                    técnico y operativo que entiende la exigencia de
                    proyectos industriales y trabaja con enfoque en
                    ejecución, seguimiento y resultado.
                </p>
                <p class="section-split__lead">
                    Trabajar con Extepar implica mayor claridad durante
                    la ejecución, menor desgaste operativo y una base
                    mejor resuelta para lo que sigue.
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/formulario-a"); ?>

<?php get_footer(); ?>
