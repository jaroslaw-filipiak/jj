{{--
  Template Name: FAQ
--}}

@extends('layouts.app')

@section('content')

<section class="container-fluid hero-faq wow fadeIn fadeInRight"
    style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?> )">
    <div class="container h-100 h-full d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col">
                <h1 class="font-serif wow fadeIn fadeInRight"> @include('partials.title')</h1>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid section-faq" style="background: #fff;">
    <div class="container">
        <div class="row section-faq--items-wrapper">
            <div class="col">
                <div class="accordion" id="accordionExample">
                    <?php 
                    // WP_Query arguments
                    $args = array(
                    'post_type' => array( 'faq' ),
                    'posts_per_page' => '-1',
                   
                    );

                    // The Query
                    $query = new WP_Query( $args );

                    // The Loop
                    if ( $query->have_posts() ) {
                       
                    $i = 0 ;
                    while ( $query->have_posts() ) {
                    $query->the_post(); $i++ ?>


                    <div class="card mb-2 card-<?php echo $i ?>">
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
                            aria-labelledby="headingTwo-<?php echo $i ?>" data-parent="#accordionExample">
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
</section>

@include('partials.cta')

@endsection