<?php


// WP_Query arguments
$args = array(
    'post_type'              => array( 'specjalizacje' ),
);

// The Query
$query = new WP_Query( $args );

// The Loop
if ( $query->have_posts() ) {
    while ( $query->have_posts() ) {
        $query->the_post(); 

        $icon = get_field('spec_icon');
        $bg = get_field('spec_bg');

        $themeFileURI = get_theme_file_uri();
        $iconPlaceholder = "{$themeFileURI}/resources/assets/images/spec-icon.png";
        $bgPlaceholder = "{$themeFileURI}/resources/assets/images/item-bg.png";

        
        ?>

<div class="spec-item spec-item-<?php echo get_the_ID() ?>">
    <div class="spec-item--bg" style="background-image: url(<?php echo $bg ? $bg : $bgPlaceholder ?>)">
    </div>
    <div class="d-flex align-items-center pr-5 position-relative">
        <img class="img-fluid position-relative" src="<?php echo $icon ? $icon : $iconPlaceholder ?>"
            alt="<?php echo get_the_title() ?>-icon">
        <div class="spec-item--title pl-3 position-relative">
            <?php echo get_the_title() ?>
        </div>
    </div>

    <div class="pt-4 position-relative">
        <p><?php echo get_field('spec_excerpt') ?>
        </p>
    </div>

    <div class="d-flex justify-content-end spec-item--link">

        <a href="<?php echo get_the_permalink() ?>"><img class="d-none d-lg-flex"
                src="<?php echo get_theme_file_uri() ?>/resources/assets/images/arrow-next.png" alt="arrow next"> Czytaj
            dalej</a>
    </div>
</div>


<?php }
        } else {
            // no posts found
        }
        
        // Restore original Post Data
        wp_reset_postdata();

?>