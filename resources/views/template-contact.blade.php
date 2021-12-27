{{--
  Template Name: Kontakt
--}}

@extends('layouts.app')

@section('content')

<section class="container-fluid hero swiper">
    <div class="swiper-wrapper">
        <!-- slide -->
        <div class="swiper-slide slide wow fadeIn fadeInRight"
            style="background-image: url(<?php echo get_theme_file_uri() ?>/resources/assets/images/contact-bg.jpg)">
            <div class="container h-100 h-full d-none d-lg-flex">
                <div class="row">
                    <div class="col-10 col-lg-4 hero--title">
                        <p class="h1 font-serif">Kontakt</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>


<section class="container-fluid pt-5">

    <div class="container pt-5">
        <div class="row">
            <div class="col-12 wow fadeIn fadeInRight">
                <?php echo get_the_content() ?>
            </div>
        </div>
    </div>
</section>

<section class="container-fluid pt-3 bg-pattern">

    <div class="container">
        <div class="row">
            <div class="col-12 wow fadeIn fadeInRight">
                <h3 class="font-serif display-6 h1 pt-5 pb-5">Formularz kontaktowy</h3>
                <?php echo do_shortcode('[contact-form-7 id="61" title="Formularz 1"]') ?>
            </div>
        </div>
    </div>
</section>

<section>

</section>



<div class="empty-space d-none d-lg-block" style="height: 100px;"></div>
@include('partials.cta')

<section class="map">
    <div class="container-fluid">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2449.082653160203!2d21.051337415793085!3d52.13281797974277!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47192d9b25eef0a1%3A0xd9655bfc7f7e3ec!2sStryje%C5%84skich%2013c%2C%2002-791%20Warszawa!5e0!3m2!1sen!2spl!4v1639319139912!5m2!1sen!2spl"
            width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</section>

@endsection