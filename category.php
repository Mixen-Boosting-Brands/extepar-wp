<?php get_header(); ?>

<!-- ══════════════════════════════════════════════════════════
     HERO – ENCABEZADO DE CATEGORÍA
═══════════════════════════════════════════════════════════ -->
<section class="hero">
    <div
        class="hero__bg"
        style="background-image: url('<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/hero-bg.jpg');"
    ></div>
    <div class="hero__overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <div class="mb-3" data-aos="fade-up">
                    <span class="pill pill--yellow">Categoría</span>
                </div>
                <h1
                    class="hero__title"
                    data-aos="fade-up"
                    data-aos-delay="80"
                >
                    <?php single_cat_title(); ?>
                </h1>
                <?php if (category_description()) : ?>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="160"
                >
                    <?php echo wp_kses_post(category_description()); ?>
                </p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     ARTÍCULOS DE LA CATEGORÍA
═══════════════════════════════════════════════════════════ -->
<section class="section-split">
    <div class="container">
        <?php if (have_posts()) : ?>
        <div class="row g-4">
            <?php $i = 0; while (have_posts()) : the_post(); $i++; ?>
            <div
                class="col-12 col-md-6 col-lg-4"
                data-aos="fade-up"
                data-aos-delay="<?php echo ($i % 3) * 80; ?>"
            >
                <div class="project-card">
                    <?php if (has_post_thumbnail()) : ?>
                    <img
                        class="project-card__img"
                        src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'medium_large')); ?>"
                        alt="<?php the_title_attribute(); ?>"
                    />
                    <?php else : ?>
                    <img
                        class="project-card__img"
                        src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/proyecto-1.jpg"
                        alt="<?php the_title_attribute(); ?>"
                    />
                    <?php endif; ?>
                    <div class="project-card__body">
                        <span class="project-card__type">
                            <?php echo esc_html(get_the_date()); ?>
                        </span>
                        <h2 class="project-card__title"><?php the_title(); ?></h2>
                        <p class="project-card__text">
                            <?php echo wp_trim_words(get_the_excerpt(), 18, '…'); ?>
                        </p>
                        <a href="<?php the_permalink(); ?>" class="project-card__link">
                            Leer más <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <?php endwhile; ?>
        </div>

        <div class="row mt-5" data-aos="fade-up">
            <div class="col-12 text-center">
                <?php echo paginate_links([
                    'prev_text' => '<i class="fas fa-arrow-left"></i> Anterior',
                    'next_text' => 'Siguiente <i class="fas fa-arrow-right"></i>',
                    'type'      => 'list',
                ]); ?>
            </div>
        </div>

        <?php else : ?>
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3 text-center" data-aos="fade-up">
                <p class="section-split__lead">
                    No se encontraron artículos en esta categoría.
                </p>
                <a
                    href="<?php echo esc_url(home_url('/')); ?>"
                    class="btn btn-primary rounded-pill mt-4"
                >
                    Volver al inicio
                </a>
            </div>
        </div>
        <?php endif; ?>
    </div>
</section>

<?php get_template_part('template-parts/control-banner'); ?>

<?php get_footer(); ?>
