<?php get_header(); ?>
<section class="slider-section">
    <?php
    echo do_shortcode('[smartslider3 slider=2]');
    ?>
</section>
<section class="offers-section">
    <div class="container">
        <div class="offers--title">
            <h3> Oferta speciale</h3>
            <div>
                <div class="row">
                    <div class="col-3">
                        <div class="card">
                            <img src="<?php bloginfo('template_directory'); ?>/images/test.jpg" class="img-fluid logo" />
                            <div class="card--card-info">
                                <h4 class="card--card-info__h4">Wien - Prishinë</h4>
                                <h2 class="card--card-info__h2">59$</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img src="<?php bloginfo('template_directory'); ?>/images/test.jpg" class="img-fluid logo" />
                            <div class="card--card-info">
                                <h4 class="card--card-info__h4">Wien - Prishinë</h4>
                                <h2 class="card--card-info__h2">59$</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img src="<?php bloginfo('template_directory'); ?>/images/test.jpg" class="img-fluid logo" />
                            <div class="card--card-info">
                                <h4 class="card--card-info__h4">Wien - Prishinë</h4>
                                <h2 class="card--card-info__h2">59$</h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-3">
                        <div class="card">
                            <img src="<?php bloginfo('template_directory'); ?>/images/test.jpg" class="img-fluid logo" />
                            <div class="card--card-info">
                                <h4 class="card--card-info__h4">Wien - Prishinë</h4>
                                <h2 class="card--card-info__h2">59$</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</section>
<?php get_footer(); ?>