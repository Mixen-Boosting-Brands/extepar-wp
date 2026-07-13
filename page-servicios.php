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
                    Extepar interviene en las etapas donde la ejecución define tiempos, costos, desempeño y continuidad operativa.
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
        <div class="row g-4">
            <div
                class="col-12 col-md-6"
                data-aos="fade-up"
                data-aos-delay="0"
            >
                <div class="project-card">
                    <img
                        class="project-card__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-servicio-1.png"
                        alt="Terracerías, movimiento de tierras, mejoramiento de suelos y estabilización"
                    />
                    <div class="project-card__body">
                        <h3 class="project-card__title">
                            Terracerías, movimiento de tierras, mejoramiento de suelos y estabilización
                        </h3>
                        <p class="project-card__text">
                            <strong>Control del terreno desde el origen</strong>
                        </p>
                        <p class="project-card__text">
                            Integramos terracerías, movimiento de tierras, mejoramiento de suelos y estabilización bajo Extepar System, con planeación clara, control en campo, trazabilidad y transparencia en cada frente. Coordinamos accesos, secuencia constructiva, control de humedad, compactación y restricciones para dar orden a la ejecución desde el origen. Estos controles con transparencia reducen incertidumbre, evitan fallas futuras y dan continuidad operativa, permitiendo avanzar a la primera, a tiempo y sin sorpresas.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="col-12 col-md-6"
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
                                >Preparación controlada para construir con certeza</strong
                            >
                        </p>
                        <p class="project-card__text">
                            Desarrollamos plataformas industriales para naves, patios y áreas operativas con control de pendientes, compactación, drenaje y capacidad de soporte. Bajo Extepar System damos seguimiento a avances, liberaciones y restricciones con transparencia para que cada etapa quede clara antes de continuar.
                        </p>
                        <p class="project-card__text">
                            Una plataforma bien controlada evita reprocesos, fortalece el arranque de obra y genera condiciones confiables para construir y operar con mayor certidumbre, orden y continuidad.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="col-12 col-md-6"
                data-aos="fade-up"
                data-aos-delay="160"
            >
                <div class="project-card">
                    <img
                        class="project-card__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-servicio-5.png"
                        alt="Mantenimiento en parques logísticos e infraestructura urbana"
                    />
                    <div class="project-card__body">
                        <h3 class="project-card__title">
                            Mantenimiento en parques logísticos e infraestructura urbana
                        </h3>
                        <p class="project-card__text">
                            <strong
                                >Intervenciones que protegen tu operación</strong
                            >
                        </p>
                        <p class="project-card__text">
                            Atendemos vialidades, patios, accesos e infraestructura urbana con estrategia, diagnóstico y procesos constructivos pensados para operación continua. Cada intervención busca resolver la causa del deterioro y no solo el efecto visible, priorizando durabilidad, control de afectaciones, seguridad del usuario y transparencia durante la ejecución.
                        </p>
                        <p class="project-card__text">
                            El objetivo es reducir mantenimientos repetitivos, evitar nuevos paros en planta o circulación y conservar la infraestructura funcionando con mayor estabilidad y continuidad.
                        </p>
                    </div>
                </div>
            </div>
            <div
                class="col-12 col-md-6"
                data-aos="fade-up"
                data-aos-delay="240"
            >
                <div class="project-card">
                    <img
                        class="project-card__img"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-servicio-4.png"
                        alt="Pavimentos rígidos y flexibles"
                    />
                    <div class="project-card__body">
                        <h3 class="project-card__title">
                            Pavimentos rígidos y flexibles
                        </h3>
                        <p class="project-card__text">
                            <strong
                                >Diseño e ingeniería para alto desempeño</strong
                            >
                        </p>
                        <p class="project-card__text">
                            Desarrollamos soluciones integrales para pavimentos viales y pisos industriales enfocadas en optimizar el CAPEX y entregar un bajo LCC (Life Cycle Cost), sin comprometer desempeño ni durabilidad. En pavimentos rígidos diseñamos pisos industriales cortados y jointless, vialidades en losas de geometría optimizada y whitetopping adherido o no adherido, ya sea UTW, TW o WT, cuando el tramo lo permite, utilizando exclusivamente macrofibras sintéticas de uso estructural como refuerzo.
                        </p>
                        <p class="project-card__text">
                            También integramos soluciones asfálticas para estacionamientos, accesos y vialidades. Todas nuestras soluciones buscan optimizar recursos, reducir mantenimiento y disminuir la huella de carbono de su construcción.
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
