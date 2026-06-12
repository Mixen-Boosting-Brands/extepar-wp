<?php
/*
Template Name: Talento
*/
get_header(); ?>

<!-- ══════════════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════════════ -->
<section class="hero" id="inicio">
    <div
        class="hero__bg"
        style="
            background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg-7.jpg&quot;);
        "
    ></div>
    <div class="hero__overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h1 class="hero__title" data-aos="fade-up">
                    Personas que trabajan con<br />
                    <strong>orden y <span class="text-accent">responsabilidad</span></strong>
                </h1>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="80"
                >
                    En EXTEPAR buscamos personas comprometidas, responsables y con buena actitud. Gente que sepa trabajar en equipo, aprender, comunicar con claridad y cuidar lo que hace.
                </p>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <small
                        >Orden | Responsabilidad | Trabajo en equipo</small
                    >
                </p>
                <a
                    href="<?php echo esc_url(home_url("/cv")); ?>"
                    class="btn btn-primary rounded-pill"
                    data-aos="fade-up"
                    data-aos-delay="160"
                >
                    Enviar mi CV
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
    UNA OPERACIÓN QUE EXIGE EJECUCIÓN REAL
═══════════════════════════════════════════════════════════ -->
<section class="section-split" id="base">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="section-split__heading">
                    <strong>Una cultura</strong><br />
                    basada en<br />
                    <strong>transparencia y compromiso</strong>
                </h2>
                <p class="section-split__lead">
                    En EXTEPAR valoramos a la gente que trabaja con sentido de urgencia, compromiso, ética y disciplina.
                </p>
                <p class="section-split__lead">
                    Buscamos personas que sepan cumplir, aprender, comunicarse con claridad y actuar con transparencia cuando se necesita. Cada puesto cuenta cuando se trabaja con orden.
                </p>
            </div>
            <div
                class="col-lg-5 my-auto text-center"
                data-aos="fade-left"
                data-aos-delay="80"
            >
                <div class="check-list card--yellow">
                    <ul>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Orden en el trabajo
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Compromiso en cada tarea
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Comunicación clara y respetuosa
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Sentido de urgencia para resolver
                        </li>
                    </ul>
                </div>
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
                    Lo que valoramos y<br />
                    <strong>lo que puedes encontrar</strong>
                </h2>
            </div>
            <div class="col-lg-6" data-aos="fade-right">
                <div class="check-list card--yellow">
                    <h3 class="check-list__label">Valoramos:</h3>
                    <ul>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Responsabilidad para cumplir
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Orden para trabajar
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Comunicación clara
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Actitud para aprender y resolver
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="check-list card--dark">
                    <p class="check-list__label">Encuentras:</p>
                    <ul>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Un equipo con forma clara de trabajar
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Aprendizaje en el puesto
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Trabajo que aporta al resultado
                        </li>
                        <li>
                            <i class="fa-solid fa-circle-check"></i>
                            Equipos que trabajan con orden y respeto
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
    OPORTUNIDADES EN CAMPO
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
                    <strong>Oportunidades</strong><br />
                    para crecer en EXTEPAR
                </h2>
                <p class="section-split__lead">
                    Buscamos personas que quieran integrarse a una empresa donde el orden, la responsabilidad y la buena actitud se toman en serio. Hay espacio para perfiles de campo, operación, administración y apoyo general.
                </p>
                <p class="section-split__lead">
                    <strong>Áreas donde puedes aportar:</strong>
                </p>
                <ul class="section-split__lead">
                    <li>Campo y operación</li>
                    <li>Administración y apoyo</li>
                    <li>Supervisión, maquinaria y oficina de obra</li>
                </ul>
                <p class="section-split__lead">
                    Comparte tu información y revisaremos en qué área podrías desarrollarte mejor dentro de EXTEPAR.
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
