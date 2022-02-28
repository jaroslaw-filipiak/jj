<article @php post_class() @endphp>
    <section class="container-fluid hero-single-spec"
        style="background-image:url(<?php echo get_the_post_thumbnail_url() ?>)">
        <div class="container h-100 h-full d-flex align-items-center justify-items-center w-full">
            <div class="row w-100">
                <div class="col-12">
                    <h1 class="h1 font-serif wow fadeIn fadeInRight"> @include('partials.title')</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="single-specjalizacje-content">
        <div class="container pt-5 pb-5 mb-5 mt-5">
            <div class="row ">
                <div class="col wow fadeIn fadeInRight">
                    <?php echo get_the_content() ?>
                </div>
            </div>
        </div>
    </section>


    @include('partials.spec')
    <div class="empty-space" style="height: 70px"></div>
    @include('partials.cta')
</article>