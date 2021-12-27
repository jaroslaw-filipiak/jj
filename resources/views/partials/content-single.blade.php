<article @php post_class() @endphp>
    <section class="container-fluid hero-single-spec">
        <div class="container h-100 h-full d-flex align-items-center justify-items-center">
            <div class="row ">
                <div class="col-12 col-lg-10">
                    <h1 class="font-serif text-left"> {!! get_the_title() !!}</h1>
                </div>
            </div>
        </div>
    </section>
    <section class="single-specjalizacje-content">
        <div class="container pt-5 pb-5 mb-5 mt-5">
            <div class="row">
                <div class="col">
                    <?php echo get_the_content() ?>
                </div>
            </div>
        </div>
    </section>

    <footer>
        {!! wp_link_pages(['echo' => 0, 'before' => '<nav class="page-nav">
            <p>' . __('Pages:', 'sage'), 'after' => '</p>
        </nav>']) !!}
    </footer>


    <div class="empty-space" style="height: 70px"></div>
    @include('partials.cta')

</article>