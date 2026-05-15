<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<!-- ══════════════════════════════════════════════════════════
     HERO – ENCABEZADO DEL ARTÍCULO
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
                <div
                    class="d-flex align-items-center gap-2 mb-3 flex-wrap"
                    data-aos="fade-up"
                >
                    <?php
                    $categories = get_the_category();
                    if ($categories) : ?>
                    <a
                        href="<?php echo esc_url(get_category_link($categories[0]->term_id)); ?>"
                        class="pill pill--yellow"
                    ><?php echo esc_html($categories[0]->name); ?></a>
                    <?php endif; ?>
                    <span class="pill pill--light">
                        <time datetime="<?php the_time('Y-m-d'); ?>">
                            <?php echo get_the_date(); ?>
                        </time>
                    </span>
                </div>
                <h1
                    class="hero__title"
                    data-aos="fade-up"
                    data-aos-delay="80"
                >
                    <?php the_title(); ?>
                </h1>
                <p
                    class="hero__text"
                    data-aos="fade-up"
                    data-aos-delay="160"
                >
                    <small><?php the_author(); ?></small>
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     CONTENIDO DEL ARTÍCULO
═══════════════════════════════════════════════════════════ -->
<section class="section-split">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-8" data-aos="fade-up">
                <div class="post-body">
                    <?php the_content(); ?>
                </div>

                <?php $tags = get_the_tags(); if ($tags) : ?>
                <div
                    class="d-flex flex-wrap gap-2 mt-5 pt-4"
                    style="border-top: 1px solid rgba(0,0,0,.08);"
                >
                    <span class="section-split__lead">
                        <strong>Etiquetas:</strong>
                    </span>
                    <?php foreach ($tags as $tag) : ?>
                    <a
                        href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                        class="pill pill--light"
                    ><?php echo esc_html($tag->name); ?></a>
                    <?php endforeach; ?>
                </div>
                <?php endif; ?>

                <?php edit_post_link(
                    '<i class="fas fa-pen me-1"></i> Editar artículo',
                    '<p class="mt-4">',
                    '</p>'
                ); ?>
            </div>
        </div>
    </div>
</section>

<!-- ══════════════════════════════════════════════════════════
     NAVEGACIÓN ENTRE ARTÍCULOS
═══════════════════════════════════════════════════════════ -->
<?php
$prev_post = get_previous_post();
$next_post = get_next_post();
if ($prev_post || $next_post) : ?>
<section class="section-split bg-brand-yellow-light" style="padding: 40px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center gap-4 flex-wrap">
                    <?php if ($prev_post) : ?>
                    <a
                        href="<?php echo esc_url(get_permalink($prev_post->ID)); ?>"
                        class="d-flex align-items-center gap-2 section-split__lead"
                        style="text-decoration: none; max-width: 45%;"
                    >
                        <i class="fas fa-arrow-left text-accent flex-shrink-0"></i>
                        <span><?php echo esc_html(get_the_title($prev_post->ID)); ?></span>
                    </a>
                    <?php endif; ?>
                    <?php if ($next_post) : ?>
                    <a
                        href="<?php echo esc_url(get_permalink($next_post->ID)); ?>"
                        class="d-flex align-items-center gap-2 section-split__lead ms-auto text-end"
                        style="text-decoration: none; max-width: 45%;"
                    >
                        <span><?php echo esc_html(get_the_title($next_post->ID)); ?></span>
                        <i class="fas fa-arrow-right text-accent flex-shrink-0"></i>
                    </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>

<?php endwhile; endif; ?>

<?php get_template_part('template-parts/formulario-a'); ?>

<?php get_footer(); ?>
