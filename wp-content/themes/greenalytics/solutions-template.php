<?php

/**
 * Template Name: Solutions
 *
 */

get_header(); ?>
<main>

    <?php $count = 1; while ( have_rows('sections') ) : the_row(); $count++;?>
    <?php if( get_row_layout() == 'image_content_section' ) : ?>
    <section class="about style-7">
        <div class="container">
            <div class="row align-items-center<?php echo ($count%2==1)?' flex-row-reverse':'';?>">
                <div class="col-lg-6">
                    <?php if( get_sub_field('content_group') ) : ?>
                    <div class="info">
                        <div class="section-head style-4">
                            <div class="top-title mb-10">
                                <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/line_l.png" alt=""> -->
                            </div>
                            <h2 class="mb-30"><?php echo get_sub_field('content_group')['heading']; ?></h2>
                            <div class="solupage1">
                                <?php echo get_sub_field('content_group')['content']; ?>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
                <div class="col-lg-6">

                    <?php if( !empty( get_sub_field('image')['url'] ) ): ?>
                    <div class="img">
                        <img src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>"
                            alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>">
                        <span class="circle scale_up_down"></span>
                    </div>
                    <?php endif; ?>

                </div>
            </div>
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/about7_lines.png" alt=""
            class="bg-lines">
    </section>
    <?php endif; ?>

    <?php if( get_row_layout() == 'animated_image_section' ) : ?>
    <section class="screenshots style-14 section-padding" style="padding: 24px 0;">
        <div class="container mt-90">
            <div class="about-row mb-50">
                <div class="row gx-5 align-items-center<?php echo ($count%2==0)?' flex-row-reverse':'';?>">
                    <div class="col-lg-6">
                        <?php if( get_sub_field('images') ): ?>
                        <?php if( empty( get_sub_field('images')['animated_image_1']['url'] ) && empty( get_sub_field('images')['animated_image_2']['url'] ) ): ?>
                        <?php else: ?>
                        <div class="img">
                            <div class="row gx-0">
                                <div class="<?php if(!empty( get_sub_field('images')['animated_image_2']['url'] )):?>col-6<?php else:?>col-12<?php endif;?>">
                                    <img src="<?php echo esc_url( get_sub_field('images')['animated_image_1']['url'] ); ?>"
                                        alt="" class="main-img slide_up_down">
                                </div>
                                <div class="col-6 pt-50">
                                    <img src="<?php echo esc_url( get_sub_field('images')['animated_image_2']['url'] ); ?>"
                                        alt="" class="main-img slide_up_down">
                                </div>
                            </div>
                        </div>
                        <?php endif; ?>
                        <?php endif; ?>
                    </div>
                    <div class="col-lg-6">
                        <?php if( get_sub_field('content_group') ) : ?>
                        <div class="info mt-5 mt-lg-0">
                            <div class="section-head mb-40">
                                <h2 class="fs-1"><?php echo get_sub_field('content_group')['heading']; ?></h2>
                            </div>
                            <?php echo get_sub_field('content_group')['content']; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <?php endif; ?>

    <?php if( get_row_layout() == 'green_section' ) : ?>
    <section class="about style-7" style="padding: 15px 0px;">
        <div class="container backbox">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="img1">
                        <img src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>"
                            alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>" class="main-img">
                        <span class="circle scale_up_down"></span>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="info">
                        <?php if(!empty(get_sub_field('content_group')['heading'])):?>
                        <div class="section-head style-4 mb-40">
                            <h2 class="">
                                <?php echo get_sub_field('content_group')['heading']; ?>
                            </h2>
                        </div>
                        <?php endif; ?>
                        <!-- <div class="text"> -->
                            <?php echo get_sub_field('content_group')['content']; ?>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/about7_lines.png" alt=""
            class="bg-lines">
    </section>
    <?php endif; ?>
    <?php endwhile; ?>






    <?php while ( have_rows('sections') ) : the_row(); ?>
    <?php if( get_row_layout() == 'call_to_action' ) : ?>
    <section class="testimonials style-7" style="padding: 0px 0px 114px 0px">
        <div class="container">
            <div class="get-qoute-banner">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="info">
                            <h6><?php echo get_sub_field('content'); ?></h6>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 d-none d-lg-block">
                        <div class="img">
                            <img src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>"
                                alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>">
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <?php 
                    $link = get_sub_field('link');
                    if( $link ): 
                        $link_url = $link['url'];
                        $link_title = $link['title'];
                        $link_target = $link['target'] ? $link['target'] : '_self';
                        ?>
                        <div class="btns text-lg-end">
                            <a href="<?php echo esc_url( $link_url ); ?>"
                                class="btn btn-icon-circle rounded-pill bg-blue7 fw-bold text-white"
                                target="<?php echo esc_attr( $link_target ); ?>">
                                <small> <?php echo esc_html( $link_title ); ?> <i
                                        class="fas fa-long-arrow-alt-right"></i> </small>
                            </a>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php endwhile; ?>
    <section style="background-color: #fff;"></section>
</main>
<?php get_footer(); ?>