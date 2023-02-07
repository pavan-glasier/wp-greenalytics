<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package greenalytics
 */
?>
<img src="<?php echo esc_url( home_url( '/wp-content/uploads/2023/02/footer_small_4_wave.png' ) ); ?>" alt=""
    class="wave marbotwave">

<footer class="style-6">
    <div class="container">
        <div class="content section-padding" style="padding: 50px 0px">
            <div class="row gx-0 justify-content-between">
                <div class="col-lg-3">
                    <div class="items">
                        <?php if( !empty(get_field('col_1_heading', 'option')) ): ?>
                        <div class="title">
                            <?php echo get_field('col_1_heading', 'option'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if( have_rows('col_1_links', 'option') ): ?>
                        <ul>
                            <?php while( have_rows('col_1_links', 'option') ) : the_row(); ?>
                            <?php 
							$link = get_sub_field('link');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
                            <li>
                                <a href="<?php echo esc_url( $link_url ); ?>"
                                    target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            </li>
                            <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="items">
                        <?php if( !empty(get_field('col_2_heading', 'option')) ): ?>
                        <div class="title">
                            <?php echo get_field('col_2_heading', 'option'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if( have_rows('col_2_links', 'option') ): ?>
                        <ul>
                            <?php while( have_rows('col_2_links', 'option') ) : the_row(); ?>
                            <?php 
							$link = get_sub_field('link');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
                            <li>
                                <a href="<?php echo esc_url( $link_url ); ?>"
                                    target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            </li>
                            <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="items">
                        <?php if( !empty(get_field('col_3_heading', 'option')) ): ?>
                        <div class="title">
                            <?php echo get_field('col_3_heading', 'option'); ?>
                        </div>
                        <?php endif; ?>
                        <?php if( have_rows('col_3_links', 'option') ): ?>
                        <ul>
                            <?php while( have_rows('col_3_links', 'option') ) : the_row(); ?>
                            <?php 
							$link = get_sub_field('link');
							if( $link ): 
								$link_url = $link['url'];
								$link_title = $link['title'];
								$link_target = $link['target'] ? $link['target'] : '_self';
								?>
                            <li>
                                <a href="<?php echo esc_url( $link_url ); ?>"
                                    target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a>
                            </li>
                            <?php endif; ?>
                            <?php endwhile; ?>
                        </ul>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="items">
                        <?php if( !empty(get_field('col_4_heading', 'option')) ): ?>
                        <div class="title">
                            <?php echo get_field('col_4_heading', 'option'); ?>
                        </div>
                        <?php endif; ?>
                        <ul>
                            <?php if( !empty(get_field('col_4_email_1', 'option')) ): ?>
                            <li>
                                <a href="mailto:<?php echo get_field('col_4_email_1', 'option'); ?>">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;
                                    <?php echo get_field('col_4_email_1', 'option'); ?>
                                </a>
                            </li>
                            <?php endif; ?>
                            <?php if( !empty(get_field('col_4_email_2', 'option')) ): ?>
                            <li>
                                <a href="mailto:<?php echo get_field('col_4_email_2', 'option'); ?>">
                                    <i class="fa fa-envelope" aria-hidden="true"></i> &nbsp;
                                    <?php echo get_field('col_4_email_2', 'option'); ?>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if( !empty(get_field('col_4_phone_1', 'option')) ): ?>
                            <li>
                                <a href="tel:<?php echo get_field('col_4_phone_1', 'option'); ?>">
                                    <i class="fa fa-phone" aria-hidden="true"></i> &nbsp;
                                    <?php echo get_field('col_4_phone_1', 'option'); ?>
                                </a>
                            </li>
                            <?php endif; ?>

                            <?php if( !empty(get_field('col_4_phone_2', 'option')) ): ?>
                            <li>
                                <a href="tel:<?php echo get_field('col_4_phone_2', 'option'); ?>">
                                    <i class="fa fa-phone" aria-hidden="true"></i> &nbsp;
                                    <?php echo get_field('col_4_phone_2', 'option'); ?>
                                </a>
                            </li>
                            <?php endif; ?>
                        </ul>

                        <?php if( have_rows('social_media', 'option') ): ?>
                        <div class="social-icons">
                            <?php while( have_rows('social_media', 'option') ) : the_row(); ?>
                            <a href="<?php echo get_sub_field('link'); ?>"
                                class="icon-35 rounded-circle bg-gray1 overflow-hidden d-inline-flex align-items-center justify-content-center text-gray me-2"
                                target="_blank">
                                <?php echo get_sub_field('icon'); ?>
                            </a>
                            <?php endwhile; ?>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
		<?php if(!empty(get_field('copyright_text', 'option'))): ?>
        <div class="foot  p-3 rounded-pill text-center">
            <p> <?php echo get_field('copyright_text', 'option'); ?> </p>
        </div>
		<?php endif; ?>
    </div>
</footer>
<!-- ====== end footer ====== -->
<!-- ====== start to top button ====== -->
<a href="#" class="to_top bg-gray rounded-circle icon-40 d-inline-flex align-items-center justify-content-center">
    <i class="fa fa-angle-up fs-6 text-dark"></i>
</a>
<?php wp_footer(); ?>

</body>

</html>