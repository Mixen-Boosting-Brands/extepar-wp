<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- ══════════════════════════════════════════════════════════
     HERO – ENCABEZADO DE PÁGINA
═══════════════════════════════════════════════════════════ -->
<section class="hero">
    <div
        class="hero__bg"
        style="background-image: url('<?php echo esc_url(
            has_post_thumbnail()
                ? get_the_post_thumbnail_url(null, 'full')
                : get_template_directory_uri() . '/assets/images/hero-bg.jpg'
        ); ?>');"
    ></div>
    <div class="hero__overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h1 class="hero__title" data-aos="fade-up">
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     CONTENIDO DE LA PÁGINA
═══════════════════════════════════════════════════════════ -->
<section class="section-split">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8" data-aos="fade-up">
                <div class="page-body">
                    <?php the_content(); ?>
                </div>
                <?php edit_post_link(
                    '<i class="fas fa-pen me-1"></i> Editar página',
                    '<p class="mt-4">',
                    '</p>'
                ); ?>
            </div>
        </div>
    </div>
</section>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
