<?php

/**
 * Template Name: Request Demo
 *
 */

get_header(); ?>


<main>
    <section class="about style-7" style="padding: 80px 0;">
        <div class="container">
            <div class="section-head text-center style-4">
                <h2 class="requesttext"><?php the_title();?></h2>
            </div>
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/about7_lines.png" alt="" class="bg-lines">
    </section>
    <section class="contact section-padding pt-0 style-6">
        <div class="container backbox">
            <div class="row">
                <div class="col-lg-6">
                    <div class="info boxinfo">
                        <div class="section-head style-4">
                        </div>
                        <p class="text mb-10" style="font-size: 20px;">
                            <?php echo get_field('content');?>
                        </p>
                    </div>
                </div>
                <?php if(!empty(get_field('form'))): ?>
                <div class="col-md-6">
                    <div class="content">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <?php echo do_shortcode('[contact-form-7 id="'.get_field('form').'" html_class="needs-validation"]');?>
                                <!-- <form class="needs-validation form" novalidate>
                                    <div class="row mt-30">
                                        <div class="col-lg-6">
                                            <div class="form-group mb-20">
                                                <label for="exampleInputEmail1" class="labletext">First Name <span
                                                        style="color: red;"> * </span> </label>
                                                <input type="text" name="name" id="name" class="form-control"
                                                    placeholder="First Name" required>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-20">
                                                <label for="exampleInputEmail1" class="labletext">Last Name<span
                                                        style="color: red;"> * </span> </label>
                                                <input type="text" name="last" id="last" class="form-control"
                                                    placeholder="Last Name" required>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-20">
                                                <label for="exampleInputEmail1" class="labletext"> Email <span
                                                        style="color: red;"> * </span> </label>
                                                <input type="email" name="email" id="email" class="form-control"
                                                    placeholder="Email" required>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group mb-20">
                                                <label for="exampleInputEmail1" class="labletext"> Job Title <span
                                                        style="color: red;"> * </span> </label>
                                                <input type="text" name="jobtital" id="jobtital" class="form-control"
                                                    placeholder="Job Title" required>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label for="exampleInputEmail1" class="labletext"> Company Name <span
                                                    style="color: red;"> * </span> </label>
                                            <div class="form-group mb-20">
                                                <input type="text" name="companyname" id="companyname"
                                                    class="form-control" placeholder="Company Name" required>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group mb-20">
                                                <label for="exampleInputEmail1" class="labletext"> Mobile <span
                                                        style="color: red;"> * </span> </label>
                                                <input type="text" name="mobile" id="mobile" class="form-control"
                                                    placeholder="Mobile" required>
                                                <div class="invalid-feedback">Please fill out this field.</div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 text-center">
                                            <button type="submit"
                                                class="btn rounded-pill fw-bold text-white mt-20 mb-20 sendreq">
                                                <small> Send Your Request </small>
                                            </button>
                                        </div>
                                        <div id="msgSubmit" class="h6 hidden"></div>
                                    </div>
                                </form> -->
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>
            </div>

        </div>
    </section>
    <section style="background-color: #fff;"></section>
    <!-- ====== end features ====== -->
</main>
<?php get_footer(); ?>