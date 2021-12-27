<article @php post_class() @endphp>
    <section class="container-fluid single-zespol-title">
        <div>
            <div>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1 class="font-serif text-center"> {!! get_the_title() !!}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="single-zespol-content">
        <div class="container pt-5 pb-5 mb-5 mt-5">
            <div class="row">
                <div class="col">
                    <?php echo the_content() ?>
                </div>
            </div>
        </div>
    </section>

    @include('partials.cta')
</article>