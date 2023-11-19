
{{--
  Template Name: Articles
--}}

@extends('layouts.app')

@section('content')
@include('partials.page-header')

@if (!have_posts())
<div class="alert alert-warning">
    {{ __('Sorry, no results were found.', 'sage') }}
</div>
{!! get_search_form(false) !!}
@endif



<section class="container-fluid pb-5">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 wow fadeIn fadeInRight">
                @while (have_posts()) @php the_post() @endphp
                @include('partials.content-'.get_post_type())
                @endwhile
            </div>
            <div class="col-12 col-lg-4  pt-lg-5 wow fadeIn fadeInRight jedruchniewicz-sidebar">
                @php(dynamic_sidebar('sidebar-primary'))
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row">
            <div class="col">
                {!! get_the_posts_navigation() !!}
            </div>
        </div>
    </div>
</section>



@endsection