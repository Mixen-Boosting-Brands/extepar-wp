<?php
/*
Template Name: Cómo trabajamos
*/
get_header(); ?>

<!-- ══════════════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════════════ -->
<section class="hero" id="inicio">
    <div
        class="hero__bg"
        style="
            background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg-4.jpg&quot;);
        "
    ></div>
    <div class="hero__overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h1 class="hero__title" data-aos="fade-up">
                    Una forma clara de<br />
                    <strong>ejecutar cada proyecto</strong>
                </h1>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="80"
                >
                    Extepar trabaja con un enfoque estructurado que
                    permite mantener visibilidad, seguimiento en campo y
                    consistencia durante toda la ejecución.
                </p>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <small
                        >Planeación técnica | Seguimiento en sitio | Validación por etapas</small
                    >
                </p>
                <a
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
    NO SOLO ES EJECUTAR
═══════════════════════════════════════════════════════════ -->
<section class="section-split" id="base">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="section-split__heading">
                    No solo es ejecutar.<br />
                    <strong>Es sostener el</strong><br />
                    <strong>proceso</strong> en campo.
                </h2>
                <p class="section-split__lead">
                    La mayoría de los problemas en obra no vienen del diseño, sino de la falta de seguimiento durante la ejecución.
                </p>
                <p class="section-split__lead">
                    Extepar trabaja con un enfoque que permite mantener claridad, orden y continuidad en cada etapa del proyecto.
                </p>
            </div>
            <div
                class="col-lg-5 my-auto text-center"
                data-aos="fade-left"
                data-aos-delay="80"
            >
                <figure class="mb-0">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-como-trabajamos.png"
                        alt=""
                        class="img-fluid"
                    />
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
    ETAPAS QUE SOSTIENEN LA EJECUCIÓN
═══════════════════════════════════════════════════════════ -->
<section class="step-flow" id="proceso">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="step-flow__heading">
                    <strong>Etapas que sostienen</strong> la ejecución
                </h2>
            </div>
        </div>
        <div class="row g-3">
            <div
                class="col-12 col-sm-6 col-lg"
                data-aos="fade-up"
                data-aos-delay="0"
            >
                <div class="step-card card--dark">
                    <h2 class="step-card__title text-accent">
                        1.
                    </h2>
                    <h3 class="step-card__title text-accent">
                        Diagnóstico
                    </h3>
                    <p class="step-card__text">
                        Condiciones reales antes de iniciar.
                    </p>
                    <p class="step-card__text">
                        Se analizan variables del terreno y contexto del proyecto antes de definir cualquier ejecución.
                    </p>
                </div>
            </div>
            <div
                class="col-12 col-sm-6 col-lg"
                data-aos="fade-up"
                data-aos-delay="60"
            >
                <div class="step-card card--dark">
                    <h2 class="step-card__title text-accent">
                        2.
                    </h2>
                    <h3 class="step-card__title text-accent">
                        Planeación
                    </h3>
                    <p class="step-card__text">
                        Estrategia y criterios definidos.
                    </p>
                    <p class="step-card__text">
                        Se establecen tiempos, secuencia de trabajo y decisiones clave antes de entrar a obra.
                    </p>
                </div>
            </div>
            <div
                class="col-12 col-sm-6 col-lg"
                data-aos="fade-up"
                data-aos-delay="120"
            >
                <div class="step-card card--dark">
                    <h2 class="step-card__title text-accent">
                        3.
                    </h2>
                    <h3 class="step-card__title text-accent">
                        Ejecución
                    </h3>
                    <p class="step-card__text">
                        Seguimiento continuo en campo.
                    </p>
                    <p class="step-card__text">
                        Supervisión directa para validar que lo ejecutado cumpla con lo planeado.
                    </p>
                </div>
            </div>
            <div
                class="col-12 col-sm-6 col-lg"
                data-aos="fade-up"
                data-aos-delay="180"
            >
                <div class="step-card card--dark">
                    <h2 class="step-card__title text-accent">
                        4.
                    </h2>
                    <h3 class="step-card__title text-accent">
                        Seguimiento
                    </h3>
                    <p class="step-card__text">
                        Comparación y ajuste constante.
                    </p>
                    <p class="step-card__text">
                        Revisión continua para detectar desviaciones y corregir oportunamente.
                    </p>
                </div>
            </div>
            <div
                class="col-12 col-sm-6 col-lg"
                data-aos="fade-up"
                data-aos-delay="240"
            >
                <div class="step-card card--dark">
                    <h2 class="step-card__title text-accent">
                        5.
                    </h2>
                    <h3 class="step-card__title text-accent">
                        Entrega
                    </h3>
                    <p class="step-card__text">
                        Validación antes de liberar.
                    </p>
                    <p class="step-card__text">
                        Se asegura que cada etapa cumpla con los criterios antes de avanzar.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
    CÓMO SE SOSTIENE LA EJECUCIÓN EN CAMPO
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
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-como-trabajamos-2.png"
                        alt=""
                        class="img-fluid"
                    />
                </figure>
            </div>
            <div class="col-lg-7" data-aos="fade-left">
                <h2 class="section-split__heading">
                    Cómo se sostiene la<br />
                    <strong>ejecución en campo</strong>
                </h2>
                <p class="section-split__lead">
                    Extepar mantiene presencia y seguimiento directo en obra para asegurar que cada decisión se tome con base en condiciones reales.
                </p>
                <p class="section-split__lead">
                    Este enfoque se respalda con metodología, herramientas y sistemas que permiten dar visibilidad, mantener ritmo y reducir desviaciones durante la ejecución.
                </p>
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
            <div class="col-lg-6"
                data-aos="fade-right"
            >
                <div class="check-list card--yellow text-center">
                    <h3 class="check-list__label">
                        En campo:
                    </h3>
                    <ul>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Supervisión constante en sitio
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Decisiones basadas en condiciones reales                                </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Validación técnica en cada etapa
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Menor dependencia de correcciones posteriores
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6"
                data-aos="fade-left"
            >
                <div class="check-list card--yellow text-center">
                    <p class="check-list__label">
                        Soporte técnico:
                    </p>
                    <ul>
                        <li>
                            <i
                                class="fa-solid fa-circle-check"
                            ></i>
                            Metodología Lean Construction aplicada en obra
                        </li>
                        <li>
                            <i
                                class="fa-solid fa-circle-check"
                            ></i>
                            Seguimiento mediante indicadores y control de avance (PPC, KPIs)
                        </li>
                        <li>
                            <i
                                class="fa-solid fa-circle-check"
                            ></i>
                            Tableros visuales y herramientas de seguimiento en campo
                        </li>
                        <li>
                            <i
                                class="fa-solid fa-circle-check"
                            ></i>
                            Validación técnica y control topográfico con tecnología especializada
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
    BANNER EJECUCIÓN
═══════════════════════════════════════════════════════════ -->
<section class="stats-banner">
    <div
        class="stats-banner__bg"
        style="
            background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/images/banner-ejecucion-bg.jpg&quot;);
        "
    ></div>
    <div class="stats-banner__overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-up">
                <h2 class="stats-banner__title">
                    <strong
                        >Una ejecución más,
                        <span id="aniv"
                            >clara</span
                        ></strong
                    ><br />
                    <strong>más ordenada</strong> y con menos fricción
                </h2>
                <p class="stats-banner__text">
                    El resultado no es solo cumplir una etapa, sino permitir que el proyecto avance con<br />
                    mayor continuidad, menor riesgo y mejor desempeño en cada fase.
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/formulario-a"); ?>

<?php get_footer(); ?>
