<?php

/**
 * Template Name: About Us
 *
 */

get_header(); ?>
<main>
    <?php while ( have_rows('sections') ) : the_row();?>
    <?php if( get_row_layout() == 'growing_focus_section' ) :?>
    <!-- ====== start features ====== -->
    <section class="features  pb-70 style-4" style="background-color: #fff;">
        <div class="container mt-90">
            <?php if( !empty( get_sub_field('heading') ) ): ?>
            <div class="row gx-0">
                <div class="col-lg-12">
                    <div class="info">
                        <p class="text mb-50" style="text-align: center; font-size: 21px; color: #666;">
                            <?php echo get_sub_field('heading');?>
                        </p>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            <div class="section-head text-center style-4">
                <?php if( !empty( get_sub_field('title') ) ):?>
                <h2><?php echo get_sub_field('title');?></h2>
                <?php endif; ?>
                <?php if( !empty( get_sub_field('description') ) ):?>
                <p class="mb-70 mt-20"><?php echo get_sub_field('description');?></p>
                <?php endif; ?>
            </div>

            <?php if( have_rows('points') ): ?>
            <div class="content">

                <?php while( have_rows('points') ) : the_row(); ?>
                <div class="features-card">
                    <div class="icon img-contain">
                        <img src="<?php echo esc_url( get_sub_field('icon')['url'] ); ?>"
                            alt="<?php echo esc_attr( get_sub_field('icon')['alt'] ); ?>"
                            class="side-img slide_up_down">
                    </div>
                    <h6><?php echo get_sub_field('title'); ?></h6>
                </div>
                <?php endwhile; ?>

            </div>
            <?php endif; ?>
        </div>
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/img/feat_circle.png" alt=""
            class="img-circle">
    </section>
    <?php endif; ?>
    <?php endwhile; ?>


    <?php while ( have_rows('sections') ) : the_row();?>
    <?php if( get_row_layout() == 'aim_section' ) :?>
    <section class="community pt-40 style-5 mb-80">
        <div class="container">
            <?php if( !empty( get_sub_field('heading') ) ):?>
            <div class="section-head text-center mb-40 style-5">
                <p class="text" style="text-align: center; font-size: 21px;">
                    <?php echo get_sub_field('heading');?>
                </p>
            </div>
            <?php endif; ?>

            <?php if( have_rows('points') ): ?>
            <div class="content rounded-pill">
                <?php while( have_rows('points') ) : the_row(); ?>
                <div class="commun-card">
                    <div class="icon">
                        <img src="<?php echo esc_url( get_sub_field('icon')['url'] ); ?>"
                            alt="<?php echo esc_attr( get_sub_field('icon')['alt'] ); ?>" style="width: 75px;">
                    </div>
                    <div class="inf">
                        <span class="aboutsecttree"><?php echo get_sub_field('title'); ?></span>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            
            <?php endif; ?>
        </div>
    </section>
    <?php endif; ?>
    <?php endwhile; ?>
    <section style="background-color: #fff;"></section>
    <!-- ====== end features ====== -->
</main>
<?php get_footer(); ?>