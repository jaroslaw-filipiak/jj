<?php

$CTA_bg = get_field('cta_bg', 'options');
$CTA_content = get_field('cta_content', 'options');

?>

<section class="cta" style="background-image: url(<?php echo $CTA_bg ?>)">
    <div class="container pt-5 pb-5 ">
        <div class="row">
            <div class="col-12 col-lg-6 text-white text-left">
                <?php echo $CTA_content ?>
            </div>
            <div class="col-12 col-lg-6"></div>
        </div>
    </div>
</section>