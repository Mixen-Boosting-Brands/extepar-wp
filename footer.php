    <!-- ══════════════════════════════════════════════════════════
        FOOTER
    ═══════════════════════════════════════════════════════════ -->
    <footer class="site-footer">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-7">
                    <div class="row gy-4">
                        <!-- Brand -->
                        <div class="col-12" data-aos="fade-right">
                            <div class="site-footer__brand">
                                <h2 class="site-footer__tagline">
                                    Menos
                                    <span id="incertidumbre"
                                        >incertidumbre</span
                                    >.<br />
                                    <strong>Más control en obra.</strong>
                                </h2>
                            </div>
                        </div>

                        <!-- Contact -->
                        <div
                            class="col-6"
                            data-aos="fade-up"
                            data-aos-delay="100"
                        >
                            <p class="site-footer__heading">Contacto</p>
                            <ul class="site-footer__contact">
                                <li>
                                    <i class="fas fa-location-dot"></i>
                                    <address>
                                        Calle San Francisco Javier No. 3<br />
                                        Colonia Capula<br />
                                        Tepoztlán, Estado de México<br />
                                        C.P. 54603
                                    </address>
                                </li>
                                <li>
                                    <i class="fas fa-phone"></i>
                                    <a href="tel:+525558762020"
                                        >55 5876 2020</a
                                    >
                                </li>
                                <li>
                                    <i class="far fa-envelope"></i>
                                    <a href="mailto:contacto@extepar.com"
                                        >contacto@extepar.com</a
                                    >
                                </li>
                            </ul>
                        </div>

                        <!-- Nav -->
                        <div
                            class="col-6"
                            data-aos="fade-up"
                            data-aos-delay="200"
                        >
                            <p class="site-footer__heading">Menú</p>
                            <nav>
                                <?php wp_nav_menu([
                                    "theme_location" => "header-menu",
                                    "container" => false,
                                    "menu_class" => "site-footer__nav",
                                    "depth" => 1,
                                    "fallback_cb" => false,
                                ]); ?>
                            </nav>
                        </div>
                    </div>
                </div>
                <div
                    class="col-lg-5"
                    data-aos="fade-left"
                    data-aos-delay="150"
                >
                    <!-- Map -->
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3756.0093991451818!2d-99.21478552310349!3d19.712223981627822!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d21f8aaaf07887%3A0xa01a8d9b2a0f5d91!2sAv.%20Insurgentes%2035%2C%20Texcacoa%2C%2054605%20Tepotzotl%C3%A1n%2C%20M%C3%A9x.!5e0!3m2!1ses-419!2smx!4v1778270820824!5m2!1ses-419!2smx"
                        width="100%"
                        height="350"
                        style="border: 0"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                    ></iframe>
                </div>
            </div>

            <!-- Bottom bar -->
            <div
                data-aos="fade"
                data-aos-delay="200"
                class="site-footer__bottom d-flex flex-column flex-md-row justify-content-between gap-2"
            >
                <span>© <?php echo date("Y"); ?> <?php echo get_bloginfo(
     "name",
 ); ?>. Todos los derechos reservados.</span>
                <span>
                    <a href="<?php echo get_permalink(
                        3,
                    ); ?>">Aviso de privacidad</a>
                    &nbsp;·&nbsp; Design by:
                    <a href="https://mixen.mx/" target="_blank">Mixen</a>
                </span>
            </div>
        </div>
    </footer>

    <!-- WhatsApp button -->
    <!-- a
        href="https://wa.me/52614?text=Hola%20Extepar,%20necesito%20información."
        class="whatsapp"
        target="_blank"
    >
        <i class="fab fa-whatsapp"></i>
    </a -->

    <?php wp_footer(); ?>

    <script src="<?php echo esc_url(
        get_template_directory_uri(),
    ); ?>/assets/js/app.bundle.js" defer></script>
    </body>
</html>
