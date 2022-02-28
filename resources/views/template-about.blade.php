{{--
  Template Name: O kancelarii
--}}

@extends('layouts.app')

@section('content')

<section class="container-fluid hero swiper">
    <div class="swiper-wrapper">
        <!-- slide -->
        <div class="swiper-slide slide wow fadeIn fadeInRight"
            style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>)">
            <div class="container border h-100 h-full d-none d-lg-flex">
                <div class="row">
                    <div class="col-10 col-lg-4 hero--title">
                        @include('partials.title')
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="about-wrapper">

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


    <section class="container-fluid pt-5 about-wrapper">

        <div class="container pt-5 pb-3">

            <div class="row">
                <div class="col-12">
                    <?php echo the_field('about_1') ?>
                </div>
            </div>

        </div>
    </section>

    <div class="bg-pattern">

        <section class="mb-5 container-fluid">
            <div class="container mt-5 pt-lg-5 mb-5">
                <div class="row mb-5">
                    <div class="col">
                        <h1 class="font-serif display-4 mb-xl-5 pb-5 wow fadeIn fadeInRight">Zespół</h1>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid mb-5">
            <div class="container position-relative" style="top: -120px">

                <?php

                    $query_args = array(
                        'post_type' => 'zespol',
                    );
                    
                    $the_query = new WP_Query( $query_args );
                    
                    if ( $the_query->have_posts() ) {
                        while ( $the_query->have_posts() ) {
                            $the_query->the_post(); ?>


                <div class="row pt-5 pb-5 d-flex align-items-center justify-content-center wow fadeIn fadeInRight">
                    <div class="col-12 col-lg-6 person-row"
                        style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>">
                    </div>
                    <div class="col-12 col-lg-6 pl-lg-5 text-center">
                        <h3 class="font-serif">@php echo get_the_title() @endphp</h3>
                        <a class="btn btn-dark btn-rounded" href="<?php echo get_the_permalink() ?>">Czytaj więcej</a>
                    </div>
                </div>


                <?php }
                    
                        wp_reset_postdata();
                    } else {
                        
                    }
                    
                    ?>
            </div>
        </section>
    </div>

</div><!-- pos relative div -->

@include('partials.spec')
<div class="empty-space d-none d-lg-block" style="height: 100px;"></div>
@include('partials.cta')

@endsection