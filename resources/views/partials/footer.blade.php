@php dynamic_sidebar('sidebar-footer') @endphp

<footer class="container-fluid" id="footer">

    <div class="container pt-5 pb-1">
        <div class="row d-flex align-items-center">
            <div class="col-12 col-lg-6 d-flex align-items-center pb-5">
                <!-- footer col 1 -->
                <img src="<?php echo get_theme_file_uri() ?>/resources/assets/images/logo-white-footer.png"
                    alt="logo footer">
                <h6 class="text-white font-serif">Kancelaria wspierająca przedsiębiorczość</h6>
                <!-- footer col 1 -->
            </div>
            <div class="col-12 col-lg-6 d-flex align-items-center text-white pb-5"
                style="border-bottom: 1px solid white;">
                <!-- footer col 2 -->
                <p>Kancelaria Jędruchniewicz & Jędruchniewicz <br>
                    ul. Stryjeńskich 13c lok. 94<br>
                    02-791 Warszawa
                </p>
                <!-- footer col 2 -->
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
                <p class="pr-3">Mail: kancelaria@jedruchniewicz.com</p>
                <p>Tel. 508-786-242</p>
            </div>
            <!-- footer col 3 -->
        </div>
    </div>

</footer>

<style>
.bg-pattern {
    background-image: url(<?php echo get_theme_file_uri() ?>/resources/assets/images/pattern.jpg);
    background-size: 500px;
    background-attachment: fixed;
}
</style>