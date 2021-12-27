{{--
  Template Name: O kancelarii
--}}

@extends('layouts.app')

@section('content')

<section class="container-fluid hero swiper">
    <div class="swiper-wrapper">
        <!-- slide -->
        <div class="swiper-slide slide"
            style="background-image: url(<?php echo get_theme_file_uri() ?>/resources/assets/images/about-bg.jpg)">
            <div class="container border h-100 h-full d-none d-lg-flex">
                <div class="row">
                    <div class="col-10 col-lg-4 hero--title">
                        <p class="h1 font-serif">@php echo get_the_title() @endphp</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="container-fluid pt-5">

    <div class="container pt-5 pb-3">
        <div class="row">
            <div class="col-12">
                <h1 class="font-serif display-4">O kancelarii</h1>
                <p>Kancelaria posiada doświadczenie w obsłudze przedsiębiorców. Wykształcenie naszych prawników pozwala
                    zapewnić rzetelną obsługę przedsiębiorcom na wielu etapach prowadzonego biznesu.</p>
                <p>Osobom fizycznym zapewniamy opiekę w zakresie sporów z przedsiębiorcami.
                </p>
            </div>
        </div>
    </div>
</section>

<div class="bg-pattern">

    <section class="mb-5 container-fluid">
        <div class="container mt-5 pt-lg-5 mb-5">
            <div class="row mb-5">
                <div class="col">
                    <h1 class="font-serif display-4 mb-xl-5 pb-5">Zespół</h1>
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


            <!-- item -->
            <div class="row pt-5 pb-5 d-flex align-items-center justify-content-center">
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



@include('partials.spec')
<div class="empty-space d-none d-lg-block" style="height: 100px;"></div>
@include('partials.cta')

@endsection