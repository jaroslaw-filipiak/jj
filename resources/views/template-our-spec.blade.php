{{--
  Template Name: Nasze specjalizacje
--}}


@extends('layouts.app')

@section('content')

<section class="container-fluid hero-faq wow fadeIn fadeInRight"
    style="background-image: url(<?php echo get_the_post_thumbnail_url(); ?> )">
    <div class="container h-100 h-full d-flex align-items-center justify-content-center">
        <div class="row">
            <div class="col">
                <h1 class="font-serif text-center wow fadeIn fadeInRight"> <?php echo get_the_title() ?></h1>
            </div>
        </div>
    </div>
</section>

<section id="specjalizacje" class="wow fadeIn fadeInRight specjalization container-fluid pt-5"
    style="margin-top: 100px;">
    <div>

        <div class="spec-item--layout-2">
            @include('partials.spec-items-loop')
        </div>
    </div>
</section>


<div style="height: 50px"></div>

@include('partials.cta')

@endsection