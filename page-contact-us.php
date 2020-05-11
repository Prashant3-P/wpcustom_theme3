<?php get_header(); ?>

<section class="section">
    <div class="container">
        <div class="row py-100">
            <div class="col-lg-4 offset-lg-1 col-md-5">
                <h2 class="section-title">Contact Us</h2>
                <ul class="pl-0">
                    <!-- contact items -->
                    <li class="d-flex mb-30">
                       <i class="fas fa-mobile-alt round-icon mr-3"></i>
                        <div class="align-self-center font-primary">
                            <p>+88 0123 456 789</p>
                            <p>+88 987 654 3210</p>
                        </div>
                    </li>
                    <li class="d-flex mb-30">
                        <i class="far fa-envelope round-icon mr-3"></i>
                        <div class="align-self-center font-primary">
                            <p>info@biztrox.com</p>
                            <p>biztrox@email.com</p>
                        </div>
                    </li>
                    <li class="d-flex mb-30">
                        <i class="fa fa-map-marked-alt round-icon mr-3"></i>
                        <div class="align-self-center font-primary">
                            <p>24/B Garden Street.</p>
                            <p>Northambia, Weals, UK</p>
                        </div>
                    </li>
                </ul>
            </div>
            <!-- form -->
            <div class="col-lg-6 col-md-7">
                <div class="p-5 rounded box-shadow">
                    <form action="#">
                        <div class="col-lg-12">
                            <h3>Contact Form</h3>
                        </div>
                        <?php 
                    echo do_shortcode('[contact-form-7 id="265" title="Contact form3"]'); 
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>