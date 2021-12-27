{{--
  Template Name: Homepage
--}}

@extends('layouts.app')

@section('content')

<section class="container-fluid hero swiper">
    <div class="swiper-wrapper">
        <!-- slide -->
        <div class="swiper-slide slide"
            style="background-image: url(<?php echo get_theme_file_uri() ?>/resources/assets/images/slider-1.jpg)">
            <div class="container border h-100 h-full d-none d-lg-flex">
                <div class="row">
                    <div class="col-10 col-lg-4 hero--title">
                        <p class="h1 font-serif"> O kancelarii</p>
                        <div>
                            <a class="btn-underline font-sans"
                                href="<?php echo get_home_url('','o-kancelarii') ?>">przejdź do strony</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide 2 -->
        <div class="swiper-slide slide"
            style="background-image: url(<?php echo get_theme_file_uri() ?>/resources/assets/images/faq-bg.jpg)">
            <div class="container border h-100 h-full d-none d-lg-flex">
                <div class="row">
                    <div class="col-10 col-lg-4 hero--title">
                        <p class="h1 font-serif">FAQ</p>
                        <div>
                            <a class="btn-underline font-sans" href="<?php echo get_home_url('','faq') ?>">przejdź do
                                strony</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- slide 3 -->
        <div class="swiper-slide slide"
            style="background-image: url(<?php echo get_theme_file_uri() ?>/resources/assets/images/contact-bg.jpg)">
            <div class="container border h-100 h-full d-none d-lg-flex">
                <div class="row">
                    <div class="col-10 col-lg-4 hero--title">
                        <p class="h1 font-serif">Kontakt</p>
                        <div>
                            <a class="btn-underline font-sans" href="<?php echo get_home_url('','kontakt') ?>">przejdź
                                do strony</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="swiper-arrows d-none d-md-flex">
        <div class="swiper-custom-arrow swiper-custom-arrow-prev">
            <img src="<?php echo get_theme_file_uri() ?>/resources/assets/images/swiper-prev.png" alt="prev button">
        </div>
        <div class="swiper-custom-arrow swiper-custom-arrow-next">
            <img src="<?php echo get_theme_file_uri() ?>/resources/assets/images/swiper-next.png" alt="next button">
        </div>
    </div>

    <!-- If we need scrollbar -->
    <div class="swiper-scrollbar"></div>

</section>

<section id="about" class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-9">
                <h3 class="font-serif">Podmiotom, które nie są zainteresowane toczeniem długotrwałego sporu sądowego
                    oferujemy obsługę w
                    zakresie mediacji cywilnych i gospodarczych.
                </h3>
                <p>Zapewniamy poufność i otwartość na wszelkie <br>potrzeby naszych klientów.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid">
    <div>
        <div class="row">
            <div class="d-none d-lg-block col-lg-1"></div>
            <div class="col-12 col-lg-11 feature-box text-white">
                <h4 class="font-sans h5">
                    Naszych klientów wspieramy również w obsłudze w zakresie ochrony danych osobowych. Tworzymy
                    polityki, regulaminy, umowy powierzenia przetwarzania danych osobowych, analizy ryzyka i obsługę
                    przed Prezesem Urzędu Ochrony Danych Osobowych. Zapewniamy obsługę w postaci outsorcingu Inspektora
                    Ochrony Danych Osobowych.
                </h4>
                <p>Przedsiębiorców obsługujemy w zakresie prawa zamówień publicznych. Jesteśmy nastawieni na kompleksową
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
            <div class="col-12 col-lg-6 pb-lg-4">
                <h1 class="font-serif display-6">O kancelarii</h1>
                <p>Kancelaria posiada doświadczenie w obsłudze przedsiębiorców. Wykształcenie naszych prawników pozwala
                    zapewnić rzetelną obsługę przedsiębiorcom na wielu etapach prowadzonego biznesu.</p>
                <p>Osobom fizycznym zapewniamy opiekę w zakresie sporów z przedsiębiorcami.
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
            <div class="col-12 col-lg-6 person-row"
                style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>">
            </div>
            <div class="col-12 col-lg-5 pl-lg-5 pr-lg-5 ">
                <h3 class="font-serif pr-lg-5">@php echo get_the_title() @endphp </h3>
                <p> @php echo get_the_excerpt() @endphp </p>
                <a class="btn btn-dark btn-rounded" href="<?php echo get_the_permalink() ?>">Więcej</a>
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
                <h3 class="font-serif display-6 h1">FAQ</h3>
                <p class="pl-4">Czyli najczęściej zadawane pytania</p>
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
                            <h2 class="mb-0">
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
                            <h2 class="mb-0">
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
            <div class="mx-auto text-center"> <a class="btn-underline btn-more-faq"
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