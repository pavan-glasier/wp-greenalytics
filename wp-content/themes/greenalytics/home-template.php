<?php

/**
 * Template Name: Home Page
 *
 */

get_header(); ?>
<?php if( have_rows('sections') ) : ?>

<?php while ( have_rows('sections') ) : the_row();?>
<?php if( get_row_layout() == 'parallax_banner' ) : ?>
<!--Start Parallax page-->
<section class="parallax">
    <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/leaf.png" id="leaf"> -->
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/colorch/back.png" id="back">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/colorch/hill1.png" id="hill1">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/colorch/hill2-21.png" id="hill2">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/colorch/hill3.png" id="hill3">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/colorch/hill4.png" id="hill4">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/colorch/hill5.png" id="hill5">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/colorch/tree.png" id="tree">
    <h1 class="statictext"><?php echo get_sub_field('tag_line');?></h1>
    <h2 id="text"><?php echo get_sub_field('title');?> </h2>
    <!-- <a href="#"   id="getqout" data-toggle="modal" data-target="#exampleModal-2">
            <small> Get quote </small>
            </a> -->
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/colorch/plant.png" id="plant">
</section>
<section class="parallax1">
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/mobile_scree-01.png" class="parallax1">
    <h1 class="statictext"><?php echo get_sub_field('tag_line');?></h1>
    <h2 id="text"><?php echo get_sub_field('title');?> </h2>
</section>
<!--End Parallax page-->
<?php endif; ?>
<?php endwhile; ?>

<?php while ( have_rows('sections') ) : the_row(); ?>
<?php if( get_row_layout() == 'about_section' ) : ?>
<!-- ====== start header ====== -->
<header class="style-4" style="background-color: #fff;">
    <div class="content">
        <div class="container">
            <div class="row gx-0">
                <div class="col-lg-6">
                    <div class="info">
                        <small class="mb-20 title_small">GreenAlytics</small>
                        <h1 class="mb-20">
                            <?php echo get_sub_field('content_group')['heading'];?>
                        </h1>
                        <?php echo get_sub_field('content_group')['contents'];?>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="img">
                        <img src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>"
                            alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>">
                    </div>
                </div>
            </div>
        </div>
        <!-- <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/header_4_bubble.png" alt="" class="bubble"> -->
    </div>
    <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/header_4_wave.png" alt="" class="wave">
</header>
<!-- ====== end header ====== -->
<?php endif; ?>
<?php endwhile; ?>



<!--Contents-->
<main>
    <?php while ( have_rows('sections') ) : the_row(); ?>
    <?php if( get_row_layout() == 'what_we_do_section' ) : ?>
    <!-- ====== start features ====== -->
    <section class="features pt-70 pb-70 style-4">
        <div class="container">
            <div class="section-head text-center style-4">
                <!-- <small class="title_small bg-white">Lorem ipsum dolor sit.</small> -->
                <h2 class="mb-2"><?php echo get_sub_field('heading');?></h2>
                <p class="mb-70 weoff"><?php echo get_sub_field('description');?></p>
            </div>
            <?php if( have_rows('offers') ): ?>
            <div class="content">
                <?php while( have_rows('offers') ) : the_row(); ?>
                <?php echo get_sub_field('sub_field'); ?>
                <div class="features-card">
                    <div class="icon img-contain">
                        <img src="<?php echo esc_url( get_sub_field('icon')['url'] ); ?>"
                            alt="<?php echo esc_attr( get_sub_field('icon')['alt'] ); ?>">
                        <?php if(!empty(get_sub_field('badge'))): ?>
                        <span
                            class="label icon-40 alert-success text-success rounded-circle small text-uppercase fw-bold">
                            <?php echo get_sub_field('badge');?>
                        </span>
                        <?php endif; ?>
                    </div>
                    <h6><?php echo get_sub_field('title');?></h6>
                </div>
                <?php endwhile; ?>
            </div>
            <?php endif; ?>
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/feat_circle.png" alt=""
            class="img-circle">
    </section>
    <!-- ====== end features ====== -->
    <?php endif; ?>
    <?php endwhile; ?>





    <!-- ====== start about ====== -->
    <section class="about section-padding style-4">
        <?php 
        $counts=1; $rowRev=1; 
        while ( have_rows('sections') ) : the_row(); $rowRev++;?>
        <?php if( get_row_layout() == 'image_content_section' ) : ?>
        <div class="content frs-content">
            <div class="container">
                <div class="row align-items-center justify-content-between<?php if ($rowRev%2==0) { ?> flex-row-reverse<?php } ?>">
                    <div class="col-lg-6">
                        <div class="img mb-30 mb-lg-0">
                            <img src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>"
                                alt="<?php echo esc_attr( get_sub_field('image')['alt'] ); ?>">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="info">
                            <?php if( !empty( get_sub_field('content_group')['heading'] ) ): ?>
                            <div class="section-head style-4">
                                <h2 class="mb-30"><?php echo get_sub_field('content_group')['heading'];?></h2>
                            </div>
                            <?php endif; ?>
                            <?php echo get_sub_field('content_group')['content'];?>
                            <?php if( have_rows('points') ): ?>
                            <ul>
                                <?php while( have_rows('points') ) : the_row(); ?>
                                <li class="d-flex align-items-center mb-3">
                                    <small
                                        class="icon-30  rounded-circle color-blue4 d-inline-flex align-items-center justify-content-center me-3">
                                        <i class="fa fa-angle-right"></i>
                                    </small>
                                    <h6 class="fw-bold"><?php echo get_sub_field('point'); ?></h6>
                                </li>
                                <?php endwhile; ?>
                            </ul>
                            <?php endif; ?>

                            <?php 
                           $link_btn = get_sub_field('content_group')['button'];
                           if( $link_btn ): 
                              $link_btn_url = $link_btn['url'];
                              $link_btn_title = $link_btn['title'];
                              $link_btn_target = $link_btn['target'] ? $link_btn['target'] : '_self';
                              ?>
                            <a class="btn rounded-pill fw-bold text-white mt-50"
                                href="<?php echo esc_url( $link_btn_url ); ?>"
                                target="<?php echo esc_attr( $link_btn_target ); ?>"
                                style="background-color: #3f7e44 !important;">
                                <small><?php echo esc_html( $link_btn_title ); ?></small>
                            </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/about_s4_lines.png" alt=""
                class="lines">
            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/about_s4_bubble.png" alt=""
                class="bubble">
        </div>
        <?php endif; ?>
        <?php $counts++; endwhile; ?>

        <?php
        while ( have_rows('sections') ) : the_row(); ?>
        <?php if( get_row_layout() == 'model_image' ) : ?>
        <div class="integration pt-60">
            <div class="container-fluid">
                <div class="col-md-12">
                    <img src="<?php echo esc_url( get_sub_field('image')['url'] ); ?>"
                        class="modelimg">
                    <img src="<?php echo esc_url( get_sub_field('mobile_image')['url'] ); ?>"
                        class="modelimgrespon">
                </div>
            </div>
        </div>

        <?php endif; ?>
    <?php endwhile; ?>

    </section>
    <!-- ====== end about ====== -->
</main>
<!--End-Contents-->
<?php endif; ?>

<?php get_footer(); ?>