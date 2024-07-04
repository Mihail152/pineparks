</main>
<footer class="footer">
    <div class="footer__top">
        <div class="footer__container">
            <div class="footer__columns">
                <div class="row">
                    <div class="col-6">
                        <a href="/" class="footer__logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/logo-footer.svg" class="img-logo">
                            <span>SAFARI</span>
                        </a>
                    </div>
                    <div class="col-6 flex">
                        <div class="footer__column">
                            <h3 class="footer__title">Top destinations</h3>
                            <div class="footer__bottom-menu">
                                <?php wp_nav_menu(array('theme_location' => 'footer-menu-1', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                            </div>
                        </div>
                        <div class="footer__column">
                            <h3 class="footer__title">Travel information</h3>
                            <div class="footer__bottom-menu">
                                <?php wp_nav_menu(array('theme_location' => 'footer-menu-2', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>')); ?>
                            </div>
                            <button class="btn white">Book a tour</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="footer__bottom">
        <div class="footer__container">

            <div class="footer__bottom-column">
                <span class="footer__copiright">© <? echo date('Y'); ?> <?php echo esc_html(get_bloginfo('name')); ?></span>
                <ul class="footer__bottom-menu">
                    <li><a href="#">Terms and conditions</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                </ul>
            </div>
            <div class="footer__bottom-column">
                <ul class="flex footer__bottom-social">
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/soc-1.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/soc-2.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/soc-3.svg" alt=""></a></li>
                    <li><a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/soc-4.svg" alt=""></a></li>
                </ul>
            </div>

        </div>
    </div>

</footer>
</div>
<script src="https://code.jquery.com/jquery-3.7.1.js?_v=20240704194647"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js?_v=20240704194647" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js?_v=20240704194647"></script>


<?php wp_footer(); ?>
</body>

</html>