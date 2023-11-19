<article @php post_class() @endphp>
    <section class="container-fluid single-zespol-title">
        <div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col pt-5 mt-3">
                            <h1 class="font-serif text-center"> {!! get_the_title() !!}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="single-zespol-content">
        <div class="container pb-5 mb-5">
            <div class="row">
                <div class="col">
                    <?php echo the_content() ?>
                </div>
            </div>
        </div>
    </section>

    @include('partials.cta')
</article>