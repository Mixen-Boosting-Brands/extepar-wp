<?php
/*
Template Name: Servicios
*/
get_header(); ?>

<!-- ══════════════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════════════ -->
<section class="hero" id="inicio">
    <div
        class="hero__bg"
        style="
            background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg-2.jpg&quot;);
        "
    ></div>
    <div class="hero__overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h1 class="hero__title" data-aos="fade-up">
                    <strong>Servicios</strong> que controlan<br />
                    las etapas críticas de tu obra
                </h1>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="80"
                >
                    Terracerías, plataformas y mejoramiento de suelos ejecutados con validación técnica, seguimiento en campo y claridad para reducir riesgos desde el inicio.
                </p>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <small
                        >Proyectos industriales y logísticos | Ejecución
                        con seguimiento en sitio | Control y visibilidad
                        en cada etapa</small
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
    NO TODOS LOS SERVICIOS
═══════════════════════════════════════════════════════════ -->
<section class="section-split" id="base">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="section-split__heading">
                    No todos los<br />
                    servicios <strong>aportan</strong><br />
                    <strong>el mismo valor</strong>
                </h2>
                <p class="section-split__lead">
                    Extepar se enfoca en etapas donde un error puede afectar tiempo, costo y continuidad.
                </p>
                <p class="section-split__lead">
                    La preparación del terreno, la formación de
                    plataformas y el control en ejecución definen
                    tiempos, costos y continuidad.
                </p>
                <p class="section-split__lead">
                    <strong
                        >Cuando esta etapa está bajo control, todo el
                        proyecto avanza distinto.</strong
                    >
                </p>
            </div>
            <div
                class="col-lg-5 my-auto text-center"
                data-aos="fade-left"
                data-aos-delay="80"
            >
                <figure class="mb-0">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-servicios.png"
                        alt=""
                        class="img-fluid"
                    />
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
    SERVICIOS ENFOCADOS EN LA BASE DEL PROYECTO
═══════════════════════════════════════════════════════════ -->
<section class="projects-section" id="proyectos">
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-12 col-lg-8" data-aos="fade-right">
                <h2 class="projects-section__heading">
                    <strong>Servicios enfocados</strong><br />
                    en controlar etapas críticas
                </h2>
                <p class="projects-section__sub">
                    Extepar interviene en la etapa donde la ejecución
                    define tiempos, costos y continuidad.
                </p>
            </div>
            <div
                class="col-12 col-lg-4 text-lg-end my-auto"
                data-aos="fade-left"
            >
                <a href="#" class="btn btn-primary rounded-pill">
                    Ver proyectos
                </a>
            </div>
        </div>
        <div class="row g-4">
            <div
                class="col-12 col-md-4"
                data-aos="fade-up"
                data-aos-delay="0"
            >
                <div class="project-card">
                    <img
                        class="project-card__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-servicio-1.png"
                        alt="Terracerías y movimiento de tierras"
                    />
                    <div class="project-card__body">
                        <h3 class="project-card__title">
                            Terracerías y movimiento de tierras
                        </h3>
                        <p class="project-card__text">
                            <strong>Base técnica del proyecto</strong>
                        </p>
                        <p class="project-card__text">
                            Esta etapa define la estabilidad del proyecto y previene que el cliente tome decisiones bajo presión durante el resto del proyecto.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="col-12 col-md-4"
                data-aos="fade-up"
                data-aos-delay="80"
            >
                <div class="project-card">
                    <img
                        class="project-card__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-servicio-2.png"
                        alt="Plataformas industriales"
                    />
                    <div class="project-card__body">
                        <h3 class="project-card__title">
                            Plataformas industriales
                        </h3>
                        <p class="project-card__text">
                            <strong
                                >Preparación precisa para
                                ejecución</strong
                            >
                        </p>
                        <p class="project-card__text">
                            Formación de plataformas listas para recibir
                            construcción con niveles, pendientes y
                            condiciones controladas.
                        </p>
                        <p class="project-card__text">
                            Una ejecución correcta evita reprocesos y
                            mantiene el avance del proyecto sin
                            interrupciones.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="col-12 col-md-4"
                data-aos="fade-up"
                data-aos-delay="160"
            >
                <div class="project-card">
                    <img
                        class="project-card__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-servicio-3.png"
                        alt="Mejoramiento de suelos"
                    />
                    <div class="project-card__body">
                        <h3 class="project-card__title">
                            Mejoramiento de suelos
                        </h3>
                        <p class="project-card__text">
                            <strong
                                >Condiciones estables desde el
                                origen</strong
                            >
                        </p>
                        <p class="project-card__text">
                            Intervención técnica para optimizar la
                            capacidad del terreno y asegurar su
                            desempeño.
                        </p>
                        <p class="project-card__text">
                            Permite trabajar sobre una base confiable y
                            reducir incertidumbre durante la ejecución.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="col-12 col-md-4 offset-md-2"
                data-aos="fade-up"
                data-aos-delay="0"
            >
                <div class="project-card">
                    <img
                        class="project-card__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-servicio-4.png"
                        alt="Estabilización"
                    />
                    <div class="project-card__body">
                        <h3 class="project-card__title">
                            Estabilización
                        </h3>
                        <p class="project-card__text">
                            <strong
                                >Soporte estructural del terreno</strong
                            >
                        </p>
                        <p class="project-card__text">
                            Aplicación de soluciones para mantener
                            consistencia y comportamiento adecuado del
                            suelo.
                        </p>
                        <p class="project-card__text">
                            Evita fallas futuras y asegura continuidad
                            en las siguientes etapas del proyecto.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="col-12 col-md-4"
                data-aos="fade-up"
                data-aos-delay="80"
            >
                <div class="project-card">
                    <img
                        class="project-card__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-servicio-5.png"
                        alt="Mantenimiento e infraestructura de parques logísticos"
                    />
                    <div class="project-card__body">
                        <h3 class="project-card__title">
                            Mantenimiento e infraestructura de parques logísticos
                        </h3>
                        <p class="project-card__text">
                            <strong
                                >Soporte para continuidad
                                operativa</strong
                            >
                        </p>
                        <p class="project-card__text">
                            Servicios complementarios enfocados en
                            mantener funcionalidad y operación sin
                            afectar el desempeño del proyecto.
                        </p>
                        <p class="project-card__text">
                            Intervenciones diseñadas para dar
                            continuidad a la infraestructura ya en uso.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
    EL VALOR NO ESTÁ EN EL SERVICIO
═══════════════════════════════════════════════════════════ -->
<section class="section-split text-center">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12" data-aos="fade-right">
                <h2 class="section-split__heading">
                    El valor no está en el servicio.<br />
                    <strong>Está en cómo se ejecuta.</strong>
                </h2>
                <p class="section-split__lead">
                    Extepar se diferencia donde la obra suele perder control: anticipa, valida y resuelve.
                </p>
                <p class="section-split__lead">
                    En una etapa donde un error impacta todo el
                    proyecto, la diferencia no está en el alcance, sino
                    en la forma de ejecutar.
                </p>
            </div>
            <div
                class="col-12 my-auto text-center"
                data-aos="fade-left"
                data-aos-delay="80"
            >
                <div class="mb-3">
                    <a href="#" class="pill pill--dark mb-3 mb-lg-0"
                        >Control real en campo, no solo en planeación</a
                    >
                    <a href="#" class="pill pill--yellow"
                        >Seguimiento constante sobre lo que realmente se
                        ejecuta</a
                    >
                </div>
                <div class="mb-3">
                    <a href="#" class="pill pill--yellow mb-3 mb-lg-0"
                        >Validación técnica en cada etapa crítica</a
                    >
                    <a href="#" class="pill pill--dark"
                        >Menor fricción operativa durante la obra</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/stats-banner"); ?>

<?php get_template_part("template-parts/formulario-a"); ?>

<?php get_footer(); ?>
