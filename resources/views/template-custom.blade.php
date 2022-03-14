{{--
  Template Name: jjkp default contained
--}}

<!doctype html>
<html {!! get_language_attributes() !!}>
@include('partials.head')

<body @php body_class() @endphp>
    @php do_action('get_header') @endphp
    @include('partials.header')

    <section class="container-fluid hero-small">
    <div class="container h-100 h-full d-flex align-items-center justify-items-center">
        <div class="row ">
            <div class="col-12 col-lg-10">
                <h1 class="font-serif text-left"> {!! get_the_title() !!}</h1>
            </div>
        </div>
    </div>
    </section>

    <section class="container pt-5 pb-5">

    <?php the_content() ?>

    </section>

  
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
</body>

</html>



