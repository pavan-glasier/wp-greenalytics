<?php

/**
 * Template Name: Pricing Page
 *
 */

get_header(); ?>
<main>
    <?php if( have_rows('tabs') ): $tabName = 1;$tabContent = 1;?>
    <section class="portfolio-projects section-padding pt-50 style-1">
        <div class="container">
            <section class="portfolio style-1">
                <div class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <nav>
                                <div class="nav nav-tabs mb-3" id="nav-tab" role="tablist">
                                    <?php while( have_rows('tabs') ) : the_row(); ?>
                                    <button class="nav-link<?php echo ($tabName==1)?' active':'' ?>"
                                        id="tab_<?php echo $tabName;?>_tab" data-bs-toggle="tab"
                                        data-bs-target="#tab_<?php echo $tabName;?>" type="button" role="tab"
                                        aria-controls="tab_<?php echo $tabName;?>"
                                        aria-selected="<?php echo ($tabName==1)?' true':'' ?>"><?php echo get_sub_field('tab_name'); ?></button>
                                    <?php $tabName++; endwhile; ?>
                                </div>
                            </nav>
                            <div class="tab-content p-3" id="nav-tabContent">
                                <?php while( have_rows('tabs') ) : the_row(); ?>
                                <div class="tab-pane fade <?php echo ($tabContent==1)?' active show':'' ?>"
                                    id="tab_<?php echo $tabContent;?>" role="tabpanel"
                                    aria-labelledby="tab_<?php echo $tabContent;?>_tab">
                                    <?php if( have_rows('box') ): ?>
                                    <div class="container">
                                        <div class="content section-padding" style="padding: 34px 0;">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="price-cards">
                                                        <div class="row">
                                                            <?php while( have_rows('box') ) : the_row(); ?>
                                                            <div class="col-lg-4">
                                                                <div class="pricing-card style-3 mb-30 mb-lg-0">
                                                                    <?php if(!empty(get_sub_field('heading'))): ?>
                                                                    <div class="card-head">
                                                                        <div class="title">
                                                                            <h4><?php echo get_sub_field('heading'); ?>
                                                                            </h4>
                                                                        </div>
                                                                        <img src="<?php echo esc_url( get_sub_field('icon')['url'] ); ?>"
                                                                            style="max-width: 50px;">
                                                                    </div>
                                                                    <?php endif; ?>

                                                                    <?php if( have_rows('tab_content') ): ?>
                                                                    <div class="card-body">
                                                                        <?php while( have_rows('tab_content') ) : the_row(); ?>
                                                                        <?php if(!empty(get_sub_field('title'))): ?>
                                                                        <p class="mt-2 mb-2">
                                                                            <?php echo get_sub_field('title'); ?>
                                                                        </p>
                                                                        <?php endif; ?>
                                                                        <?php if( have_rows('points') ): ?>
                                                                        <ul>
                                                                            <?php while( have_rows('points') ) : the_row(); ?>
                                                                            <li>
                                                                                <i
                                                                                    class="fa fa-angle-right bulleticon"></i>
                                                                                <small><?php echo get_sub_field('point'); ?></small>
                                                                            </li>
                                                                            <?php endwhile; ?>
                                                                        </ul>
                                                                        <?php endif; ?>
                                                                        <?php endwhile; ?>
                                                                    </div>
                                                                    <?php endif; ?>

                                                                    <?php 
                                                                    $link = get_sub_field('link_button');
                                                                    if( $link ): 
                                                                        $link_url = $link['url'];
                                                                        $link_title = $link['title'];
                                                                        $link_target = $link['target'] ? $link['target'] : '_self';
                                                                    ?>
                                                                    <a class="btn rounded-pill bg-blue2 sm-butn w-100 text-white"
                                                                        href="<?php echo esc_url( $link_url ); ?>"
                                                                        target="<?php echo esc_attr( $link_target ); ?>">
                                                                        <span><?php echo esc_html( $link_title ); ?></span>
                                                                    </a>
                                                                    <?php endif; ?>
                                                                </div>
                                                            </div>
                                                            <?php endwhile; ?>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <!-- <img src="assets/img/testimonials/testi3_lines.png" alt=""
                                                class="testi_lines w-100"> -->
                                        </div>
                                    </div>
                                    <?php endif; ?>

                                </div>
                                <?php $tabContent++; endwhile; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <?php endif; ?>
</main>
<?php get_footer(); ?>