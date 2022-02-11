@php dynamic_sidebar('sidebar-footer') @endphp

<footer class="container-fluid" id="footer">

    <div class="container pt-5 pb-1">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-6 d-flex align-items-center pb-5 wow fadeIn fadeInRight">
                @php dynamic_sidebar('sidebar-footer-1') @endphp
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center text-white pb-5 wow fadeIn fadeInRight"
                style="border-bottom: 1px solid white;">
                @php dynamic_sidebar('sidebar-footer-2') @endphp
            </div>
        </div>
    </div>

    <div class="container pt-5 pt-lg-0">
        <div class="row">
            <div class="col-12 col-lg-6 d-flex align-items-center text-white">
                <p><?php echo date("Y"); ?> © All rights reserved </p>
                <a class="pl-3 text-white" style="margin-bottom: 20px;"
                    href="<?php echo get_privacy_policy_url() ?>">Polityka prywatności</a>
            </div>
            <!-- footer col 3 -->
            <div class="col-12 col-lg-6 d-flex flex-wrap align-items-center text-white">
                @php dynamic_sidebar('sidebar-footer-3') @endphp
                <ul class="social-media-icons">
                    <?php if( have_rows('sm_icons_repeater', 'option') ): ?>

                    <?php while( have_rows('sm_icons_repeater', 'option') ): the_row(); 
                            $class = get_sub_field('icon_class', 'option');
                            $url = get_sub_field('icon_url', 'option');
                        ?>

                    <li><a href="<?php echo $url ?>"> <i class="<?php echo $class ?>"></i></a></li>

                    <?php endwhile; ?>
                </ul>
                <?php endif; ?>

            </div>
            <!-- footer col 3 -->
        </div>
    </div>

</footer>

<!-- Back to top button -->
<a id="button">
    <img src="<?php echo get_theme_file_uri() ?>/resources/assets/images/swiper-next.png" alt="back to top button">
</a>


<script>
new WOW({
    boxClass: 'wow',
    animateClass: 'animated',
    offset: 45,
    mobile: false,
    live: true
}).init();
</script>

<style>
.bg-pattern {
    background-image: url(<?php echo get_theme_file_uri() ?>/resources/assets/images/pattern.jpg);
    background-size: 500px;
    /* background-attachment: fixed; */
}
</style>