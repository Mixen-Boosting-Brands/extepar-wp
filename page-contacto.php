<?php
/*
Template Name: Contacto
*/
get_header(); ?>

<!-- ══════════════════════════════════════════════════════════
    PROYECTOS DONDE PODEMOS APORTAR VALOR
═══════════════════════════════════════════════════════════ -->
<section class="section-split mt-100" id="base">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12" data-aos="fade-right">
                <h2 class="section-split__heading">
                    <strong>Proyectos</strong> donde<br />
                    podemos
                    <strong class="text-accent">aportar valor</strong>
                </h2>
                <p class="section-split__lead">
                    Trabajamos principalmente en proyectos industriales
                    y logísticos donde la preparación del terreno, las
                    plataformas y la infraestructura base requieren
                    precisión, seguimiento y ejecución estructurada.
                </p>
            </div>
        </div>
    </div>
</section>

<?php get_template_part("template-parts/formulario-a"); ?>

<?php if (is_page("16")): ?>
<!-- ══════════════════════════════════════════════════════════
    PROYECTOS DONDE PODEMOS APORTAR VALOR
═══════════════════════════════════════════════════════════ -->
<section class="section-split" id="base">
    <div class="container">
        <div class="row gy-4">
            <div class="col-12 text-center" data-aos="fade-right">
                <p class="section-split__lead mb-0">
                    Cada solicitud es revisada por el equipo técnico
                    para entender el proyecto y<br />
                    responder con claridad sobre el alcance, condiciones
                    y viabilidad de ejecución.
                </p>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
