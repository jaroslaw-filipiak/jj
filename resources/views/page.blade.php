@extends('layouts.app')

@section('content')

<section class="container-fluid hero-small">
    <div class="container h-100 h-full d-flex align-items-center justify-items-center">
        <div class="row ">
            <div class="col-12 col-lg-10">
                <h1 class="font-serif text-left"> {!! get_the_title() !!}</h1>
            </div>
        </div>
    </div>
</section>

<?php the_content() ?>

<div class="container mt-5 mb-5">
    @while(have_posts()) @php the_post() @endphp
    @include('partials.content-page')
    @endwhile
</div>

@endsection