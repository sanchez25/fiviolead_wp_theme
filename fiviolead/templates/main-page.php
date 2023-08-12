<?php
/*Template Name: Main*/
?>

<?php get_header()?>

<section class="main-block" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/main-banner.webp)">
    <div class="main-block-text">
        <h1 class="main-title"><?php echo the_title() ?></h1>
        <span class="main-subtitle">Performance Marketing Agency</span>
        <a href="tel:+359876381318" class="banner-btn">Become our partner</a>
    </div>
</section>
<section class="about-us">
    <div class="container-block">
        <div class="content-block">
            <div class="content-title">
                <h2 class="content-h2">About Us</h2>
            </div>
            <div class="about-content">
                <p>
                    FivioLead is an international performance marketing agency specializing in different
                    areas of marketing and advertising. We help our clients find customers in 50+ countries
                    and have special teams in every region of the world.
                </p>
                <span>Our three basic principles are strategy, experience, and results.</span>
            </div>
        </div>
    </div>
</section>
<section class="traffic-block">
    <div class="container-block">
        <div class="content-title">
            <h2 class="content-h2">Traffic sources</h2>
        </div>
        <div class="cards">
            <div class="card-item">
                <div class="card-icon international" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/ads.webp)"></div>
                <span class="title-card">Google Ads</span>
                <p class="card-descr">Show ads when
                                      users search for
                                      what you offer</p>
            </div>
            <div class="card-item">
                <div class="card-icon managerial" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/facebook.webp)"></div>
                <span class="title-card">Facebook</span>
                <p class="card-descr">Find new clients
                                      on the largest
                                      social network
                                      in the world</p>
            </div>
            <div class="card-item">
                <div class="card-icon federal" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/seo.webp)"></div>
                <span class="title-card">SEO</span>
                <p class="card-descr">Reach your
                                      audience through
                                      search engine
                                      results</p>
            </div>
            <div class="card-item">
                <div class="card-icon finance" style="background-image: url(<?php echo get_template_directory_uri() ?>/img/aso.webp)"></div>
                <span class="title-card">ASO</span>
                <p class="card-descr">Promote your
                                      app to the top
                                      of AppStore
                                      & Google Play</p>
            </div>
        </div>
    </div>
</section>
<section class="contact-block">
    <div class="container-block">
        <div class="contact-text">
            <h2 class="contact-h2">WANT TO GET MILLIONS OF NEW CLIENTS?</h2>
            <a href="tel:+359876381318" class="contact-btn">Contact us</a>
        </div>
    </div>
</section>

<?php get_footer()?>





