{{--
  Template Name: Lista wpisow
--}}

@extends('layouts.app')

@section('content')

<section class="container-fluid pb-5 pt-5 ">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-8 wow fadeIn fadeInRight pt-5 ">
                <?php echo do_shortcode("[wp_blog_designer]");  ?>
            </div>
            <div class="col-12 col-lg-4  pt-lg-5 wow fadeIn fadeInRight jedruchniewicz-sidebar">
                @php(dynamic_sidebar('sidebar-blog'))
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