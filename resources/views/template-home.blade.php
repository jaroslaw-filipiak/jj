{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')

<section class="container-fluid hero swiper">
    <div class="swiper-wrapper">

        <?php if( have_rows('home_slider') ): ?>

        <?php while( have_rows('home_slider') ): the_row(); 

            $image = get_sub_field('home_slider_bg');
            $title = get_sub_field('home_slider_title');
            $link = get_sub_field('home_slider_link');
            
        ?>

        <!-- slide -->
        <div class="swiper-slide slide" style="background-image: url(<?php echo $image ?>)">
            <div class="container border h-100 h-full d-none d-lg-flex">
                <div class="row">
                    <div class="col-10 col-lg-4 hero--title wow fadeIn fadeInRight">
                        <p class="h1 font-serif"><?php echo $title ?></p>
                        <div>
                            <a class="btn-underline font-sans wow fadeIn fadeInRight"
                                href="<?php echo $link['url'] ?>"><?php echo $link['title'] ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END slide -->

        <?php endwhile; ?>

        <?php endif; ?>

    </div>

    <div class="swiper-arrows d-none d-md-flex">
        <div class="swiper-custom-arrow swiper-custom-arrow-prev wow fadeIn fadeInRight">
            <img src="<?php echo get_theme_file_uri() ?>/resources/assets/images/swiper-prev.png" alt="prev button">
        </div>
        <div class="swiper-custom-arrow swiper-custom-arrow-next wow fadeIn fadeInRight">
            <img src="<?php echo get_theme_file_uri() ?>/resources/assets/images/swiper-next.png" alt="next button">
        </div>
    </div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>

</section>

<section id="about" class="container-fluid">

    <div class="sign-wrapper">
        <div id="sign">
            <img data-depth="0.3" src="<?php echo get_theme_file_uri() ?>/resources/assets/images/sign/j.png" alt="">
            <img data-depth="0.3" src="<?php echo get_theme_file_uri() ?>/resources/assets/images/sign/circle.png"
                alt="">
            <img data-depth="0.5" src="<?php echo get_theme_file_uri() ?>/resources/assets/images/sign/m.png" alt="">
            <img data-depth="0.4" src="<?php echo get_theme_file_uri() ?>/resources/assets/images/sign/line.png" alt="">
        </div>
    </div>

    <script>
    var scene = document.getElementById('sign');
    var parallaxInstance = new Parallax(scene);
    </script>

    <div class="container">

        <div class="row">
            <div class="col-12 col-lg-9 wow fadeIn fadeInRight ">
                <h3 class="font-serif">Podmiotom, które nie są zainteresowane toczeniem długotrwałego sporu sądowego
                    oferujemy obsługę w zakresie mediacji cywilnych i gospodarczych.
                </h3>
                <p>Zapewniamy poufność i otwartość na wszelkie <br>potrzeby naszych klientów.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid ">
    <div>
        <div class="row">
            <div class="d-none d-lg-block col-lg-1"></div>
            <div class="col-12 col-lg-11 feature-box text-white ">
                <h4 class="font-sans h5 wow fadeIn fadeInRight ">
                    Naszych klientów wspieramy również w obsłudze w zakresie ochrony danych osobowych. Tworzymy
                    polityki, regulaminy, umowy powierzenia przetwarzania danych osobowych, analizy ryzyka i obsługę
                    przed Prezesem Urzędu Ochrony Danych Osobowych. Zapewniamy obsługę w postaci outsorcingu Inspektora
                    Ochrony Danych Osobowych.
                </h4>
                <p class="wow fadeIn fadeInRight">Przedsiębiorców obsługujemy w zakresie prawa zamówień publicznych.
                    Jesteśmy
                    nastawieni na kompleksową
                    obsługę w zakresie przetargów, tj. składanie ofert przetargowych, odpowiedzi na wezwania
                    zamawiających, wyjaśnienia dot. rażąco niskiej ceny, wnoszenie odwołań do Prezesa Urzędu Zamówień
                    Publicznych.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid pt-5 bg-pattern">
    <div class="container pt-4 pb-3">
        <div class="row">
            <div class="col-12 col-lg-6 pb-lg-4 ">
                <h1 class="font-serif display-6 wow fadeIn fadeInRight">O kancelarii</h1>
                <p class="wow fadeIn fadeInRight">Kancelaria posiada doświadczenie w obsłudze przedsiębiorców.
                    Wykształcenie naszych
                    prawników pozwala
                    zapewnić rzetelną obsługę przedsiębiorcom na wielu etapach prowadzonego biznesu.</p>
                <p class="wow fadeIn fadeInRight">Osobom fizycznym zapewniamy opiekę w zakresie sporów z
                    przedsiębiorcami.
                </p>
            </div>
        </div>
    </div>
    <div class="pb-5 home-zespol--loop">

        <?php

                $query_args = array(
                	'post_type' => 'zespol',
                );
                
                $the_query = new WP_Query( $query_args );
                
                if ( $the_query->have_posts() ) {
                	while ( $the_query->have_posts() ) {
                		$the_query->the_post(); ?>


        <div class="home-zespol--single row pb-5 d-flex align-items-center justify-content-center">
            <div class="col-12 col-lg-6 person-row wow fadeIn fadeInRight"
                style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>">
            </div>
            <div class="col-12 col-lg-5 pl-lg-5 pr-lg-5 ">
                <h3 class="font-serif pr-lg-5 wow fadeIn fadeInRight">@php echo get_the_title() @endphp </h3>
                <p class="wow fadeIn fadeInRight"> @php echo get_the_excerpt() @endphp </p>
                <a class="btn btn-dark btn-rounded wow fadeIn fadeInRight"
                    href="<?php echo get_the_permalink() ?>">Więcej</a>
            </div>
        </div>


        <?php }
                
                	wp_reset_postdata();
                } else {
                	
                }

        ?>

    </div>
</section>

@include('partials.spec')

<section class="container-fluid">
    <div class="container">
        <div class="row pt-5 pb-5">
            <div class="col d-flex align-items-center mb-5">
                <h3 class="font-serif display-6 h1 wow fadeIn fadeInRight">FAQ</h3>
                <p class="pl-4 wow fadeIn fadeInRight">Czyli najczęściej zadawane pytania</p>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid section-faq">
    <div class="container">
        <div class="row section-faq--items-wrapper">
            <div class="col">
                <div class="accordion" id="accordionExample">

                    <?php 
                    // WP_Query arguments
                    $args = array(
                    'post_type' => array( 'faq' ),
                    'posts_per_page' => '3',
                    );

                    // The Query
                    $query = new WP_Query( $args );

                    // The Loop
                    if ( $query->have_posts() ) {
                       
                    $i = 0 ;
                    while ( $query->have_posts() ) {
                    $query->the_post(); $i++ ?>


                    <div class="card card-<?php echo $i ?>">
                        <div class="card-header" id="headingOne-<?php echo $i ?>">
                            <h2 class="mb-0 wow fadeIn fadeInRight">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseOne-<?php echo $i ?>" aria-expanded="true"
                                    aria-controls="collapseOne-<?php echo $i ?>">
                                    <?php echo get_the_title() ?>
                                </button>
                            </h2>
                            <div class="plusminus"></div>
                        </div>

                        <div id="collapseOne-<?php echo $i ?>" class="collapse"
                            aria-labelledby="headingOne-<?php echo $i ?>" data-parent="#accordionExample">
                            <div class="card-body">
                                <?php echo get_the_content() ?>
                            </div>
                        </div>
                    </div>


                    <?php }
                    } else {
                    // no posts found
                    }

                    // Restore original Post Data
                    wp_reset_postdata();
                    
                    ?>



                </div>
            </div>
            <div class="col">
                <div class="accordion" id="accordionExample2">
                    <?php 
                    // WP_Query arguments
                    $args = array(
                    'post_type' => array( 'faq' ),
                    'posts_per_page' => '3',
                    'offset' => '3',
                    );

                    // The Query
                    $query = new WP_Query( $args );

                    // The Loop
                    if ( $query->have_posts() ) {
                       
                    $i = 0 ;
                    while ( $query->have_posts() ) {
                    $query->the_post(); $i++ ?>


                    <div class="card card-<?php echo $i ?>">
                        <div class="card-header" id="headingTwo-<?php echo $i ?>">
                            <h2 class="mb-0 wow fadeIn fadeInRight">
                                <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                    data-target="#collapseTwo-<?php echo $i ?>" aria-expanded="true"
                                    aria-controls="collapseTwo-<?php echo $i ?>">
                                    <?php echo get_the_title() ?>
                                </button>
                            </h2>
                            <div class="plusminus"></div>
                        </div>

                        <div id="collapseTwo-<?php echo $i ?>" class="collapse"
                            aria-labelledby="headingTwo-<?php echo $i ?>" data-parent="#accordionExample2">
                            <div class="card-body">
                                <?php echo get_the_content() ?>
                            </div>
                        </div>
                    </div>


                    <?php }
                    } else {
                    // no posts found
                    }

                    // Restore original Post Data
                    wp_reset_postdata();
                    
                    ?>

                </div>
            </div>

        </div>
    </div>
    <div class="container mx-auto pb-5">
        <div class="row d-flex justify-content-center">
            <div class="mx-auto text-center"> <a class="btn-underline btn-more-faq wow fadeIn fadeInRight"
                    href="<?php echo get_home_url('','faq-czeste-pytania') ?>">Zobacz wszystkie
                    najczęściej zadawane
                    pytania
                    <img class="d-none d-lg-block"
                        src="<?php echo get_theme_file_uri() ?>/resources/assets/images/arrow-next.png"
                        alt="arrow next">
                </a></div>

        </div>
    </div>
</section>

@include('partials.cta')





@endsection