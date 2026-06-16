<?php
/*
Template Name: Proyectos
*/
get_header(); ?>

<!-- ══════════════════════════════════════════════════════════
     HERO
═══════════════════════════════════════════════════════════ -->
<section class="hero" id="inicio">
    <div
        class="hero__bg"
        style="
            background-image: url(&quot;<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg-3.jpg&quot;);
        "
    ></div>
    <div class="hero__overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h1 class="hero__title" data-aos="fade-up">
                    <strong>Obras a la primera,</strong> a tiempo<br />
                    <strong>y sin sorpresas</strong>
                </h1>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="80"
                >
                    Extepar participa en proyectos industriales y logísticos donde una desviación en campo puede afectar tiempo, costo y continuidad.
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="100"
                >
                    <small
                        >Ejecución con control en campo | Seguimiento
                        constante | Proyectos de alta exigencia</small
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
    NO TODOS LOS PROYECTOS
═══════════════════════════════════════════════════════════ -->
<section class="section-split" id="base">
    <div class="container">
        <div class="row gy-4">
            <div class="col-lg-7" data-aos="fade-right">
                <h2 class="section-split__heading">
                    No todos los<br />
                    <strong>proyectos</strong><br />
                    exigen el mismo<br />
                    <strong>nivel de control</strong>
                </h2>
                <p class="section-split__lead">
                    Extepar interviene en la etapa donde una desviación puede impactar todo el proyecto.
                </p>
                <p class="section-split__lead">
                    Por eso trabajamos con:
                </p>
                <ul class="section-split__lead">
                    <li>
                        Sistemas estructurados
                    </li>
                    <li>
                        Seguimiento permanente
                    </li>
                    <li>
                         Información verificable
                    </li>
                    <li>
                        Escalamiento rápido
                    </li>
                    <li>
                        Control operativo en campo
                    </li>
                </ul>
                <p class="section-split__lead">
                    No dependemos de héroes, dependemos de sistema y ejecución disciplinada.
                </p>
            </div>
            <div
                class="col-lg-5 my-auto text-center"
                data-aos="fade-left"
                data-aos-delay="80"
            >
                <figure class="mb-0">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/thumb-proyectos.png"
                        alt=""
                        class="img-fluid"
                    />
                </figure>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
    PROYECTOS QUE EXIGEN PRECISIÓN
═══════════════════════════════════════════════════════════ -->
<section class="split-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-12 col-lg-8" data-aos="fade-up">
                <h2 class="audience-section__heading">
                    Capacidad aplicada a<br />
                    <strong>proyectos de alta exigencia</strong>
                </h2>
            </div>
        </div>
        <div class="row g-4">
            <div
                class="col-12 col-md-3"
                data-aos="fade-up"
                data-aos-delay="0"
            >
                <div class="step-card card--dark">
                    <div class="text-start">
                        <div class="step-card__icon">
                            <i class="fa-solid fa-industry"></i>
                        </div>
                    </div>
                    <h3 class="step-card__title text-accent">
                        Parques<br />
                        Industriales
                    </h3>
                    <p class="step-card__text">
                        Desarrollos donde la correcta ejecución de
                        terracerías y plataformas asegura continuidad en
                        fases de construcción y operación.
                    </p>
                </div>
            </div>
            <div
                class="col-12 col-md-3"
                data-aos="fade-up"
                data-aos-delay="80"
            >
                <div class="step-card card--dark">
                    <div class="text-start">
                        <div class="step-card__icon">
                            <i class="fa-solid fa-cube"></i>
                        </div>
                    </div>
                    <h3 class="step-card__title text-accent">
                        Naves<br />
                        logísticas
                    </h3>
                    <p class="step-card__text">
                        Proyectos donde la precisión en la base permite
                        soportar cargas, evitar asentamientos y reducir
                        riesgos estructurales.
                    </p>
                </div>
            </div>
            <div
                class="col-12 col-md-3"
                data-aos="fade-up"
                data-aos-delay="160"
            >
                <div class="step-card card--dark">
                    <div class="text-start">
                        <div class="step-card__icon">
                            <i class="fa-solid fa-share-nodes"></i>
                        </div>
                    </div>
                    <h3 class="step-card__title text-accent">
                        Infraestructura<br />
                        interna
                    </h3>
                    <p class="step-card__text">
                        Vialidades, plataformas y áreas operativas donde
                        la durabilidad y el control en ejecución son
                        clave para mantener operación continua.
                    </p>
                </div>
            </div>
            <div
                class="col-12 col-md-3"
                data-aos="fade-up"
                data-aos-delay="160"
            >
                <div class="step-card card--dark">
                    <div class="text-start">
                        <div class="step-card__icon">
                            <i class="fa-solid fa-rotate-right"></i>
                        </div>
                    </div>
                    <h3 class="step-card__title text-accent">
                        Mantenimiento<br />
                        Industrial
                    </h3>
                    <p class="step-card__text">
                        Intervenciones en parques logísticos y espacios
                        en operación, donde el reto es trabajar sin
                        afectar la continuidad del negocio.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     PROYECTOS DONDE LA PRECISIÓN ES CRÍTICA
═══════════════════════════════════════════════════════════ -->
<section class="projects-section" id="proyectos">
    <div class="container">
        <div class="row align-items-end mb-4">
            <div class="col-12" data-aos="fade-right">
                <h2 class="projects-section__heading">
                    Proyectos que exigen<br />
                    <strong>precisión desde el inicio</strong>
                </h2>
                <p class="projects-section__sub">
                    Proyectos industriales y logísticos donde la
                    correcta ejecución del terreno impacta tiempos,
                    costos y continuidad.
                </p>
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

                    // Extraer imágenes del post para el carrusel
                    $images = [];
                    if (has_post_thumbnail()) {
                        $images[] = get_the_post_thumbnail_url(null, 'full');
                    }
                    preg_match_all('/<img[^>]+src=["\']([^"\']+)["\'][^>]*>/i', get_the_content(), $img_m);
                    foreach (($img_m[1] ?? []) as $u) {
                        $u = preg_replace('/-\d+x\d+(\.[a-zA-Z]+)$/', '$1', $u);
                        if (!in_array($u, $images)) $images[] = $u;
                    }
                    $card_data = !empty($images)
                        ? ' data-images="' . esc_attr(json_encode(array_values($images))) . '" data-title="' . esc_attr(get_the_title()) . '"'
                        : '';
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
                <div class="project-card"<?php echo $card_data; ?>>
                    <div class="project-card__media">
                        <?php if (count($images) > 1):
                            $slider_id = "proyecto-slider-" . get_the_ID();
                            ?>
                        <div
                            id="<?php echo esc_attr($slider_id); ?>"
                            class="carousel slide project-card__carousel"
                            data-bs-ride="false"
                        >
                            <div class="carousel-inner">
                                <?php foreach ($images as $idx => $img_url): ?>
                                <div class="carousel-item<?php echo $idx === 0 ? " active" : ""; ?>">
                                    <img
                                        class="project-card__img"
                                        src="<?php echo esc_url($img_url); ?>"
                                        alt="<?php the_title_attribute(); ?>"
                                    />
                                </div>
                                <?php endforeach; ?>
                            </div>
                            <button
                                class="carousel-control-prev"
                                type="button"
                                data-bs-target="#<?php echo esc_attr($slider_id); ?>"
                                data-bs-slide="prev"
                            >
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Anterior</span>
                            </button>
                            <button
                                class="carousel-control-next"
                                type="button"
                                data-bs-target="#<?php echo esc_attr($slider_id); ?>"
                                data-bs-slide="next"
                            >
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Siguiente</span>
                            </button>
                            <div class="carousel-indicators">
                                <?php foreach ($images as $idx => $img_url): ?>
                                <button
                                    type="button"
                                    data-bs-target="#<?php echo esc_attr($slider_id); ?>"
                                    data-bs-slide-to="<?php echo $idx; ?>"
                                    <?php echo $idx === 0 ? 'class="active" aria-current="true"' : ""; ?>
                                    aria-label="Foto <?php echo $idx + 1; ?>"
                                ></button>
                                <?php endforeach; ?>
                            </div>
                        </div>
                        <?php elseif (!empty($images)): ?>
                        <img
                            class="project-card__img"
                            src="<?php echo esc_url($images[0]); ?>"
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

                        <?php if (!empty($images)): ?>
                        <button
                            type="button"
                            class="project-card__expand"
                            aria-label="Ver galería en grande"
                        >
                            <i class="fa-solid fa-up-right-and-down-left-from-center"></i>
                        </button>
                        <?php endif; ?>
                    </div>
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
                        <?php
                        $tipos = get_the_terms(get_the_ID(), "ubicacion");
                        if ($tipos && !is_wp_error($tipos)): ?>
                        <p class="project-card__text">
                            <?php echo esc_html($tipos[0]->name); ?>
                        </p>
                        <?php endif;
                        ?>
                        <div class="project-card__text">
                            <?php
                            $content = apply_filters('the_content', get_the_content());
                            $content = preg_replace('/<figure\b[^>]*>.*?<\/figure>/si', '', $content);
                            $content = preg_replace('/<img[^>]+>/i', '', $content);
                            echo wp_kses_post($content);
                            ?>
                        </div>
                        <!-- a href="<?php the_permalink(); ?>" class="project-card__link">
                            Ver proyecto
                            <i class="fas fa-arrow-right"></i>
                        </a -->
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
                    href="<?php echo esc_url(
                        get_post_type_archive_link("proyectos-extepar"),
                    ); ?>"
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
    CAPACIDAD PARA PROYECTOS
═══════════════════════════════════════════════════════════ -->
<section class="section-split text-center">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12" data-aos="fade-right">
                <h2 class="section-split__heading">
                    <strong>Capacidad para proyectos</strong><br />
                    de alta exigencia
                </h2>
            </div>
            <div
                class="col-12 my-auto text-center"
                data-aos="fade-left"
                data-aos-delay="80"
            >
                <div class="mb-3">
                    <a href="#" class="pill pill--dark mb-3 mb-xl-0"
                        >Maquinaria propia</a
                    >
                    <a href="#" class="pill pill--yellow mb-3 mb-xl-0"
                        >Equipo especializado</a
                    >
                    <a href="#" class="pill pill--dark mb-3 mb-xl-0"
                        >Experiencia en proyectos industriales</a
                    >
                    <a href="#" class="pill pill--yellow"
                        >Control constante en campo</a
                    >
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/control-banner"); ?>

<?php get_template_part("template-parts/formulario-a"); ?>

<?php get_template_part("template-parts/modal-proyecto"); ?>

<?php get_footer(); ?>
