<?php

get_header();

$page_data = array(
    'h1' => get_field('top_left_section')[0]['top_heading'],
    'top_text' => get_field('top_left_section')[0]['text_content'],
    'testimonial_tags' => get_field('testimonials') ? : NULL
);

$testimonial_tags = ($page_data['testimonial_tags'] != NULL) ? $page_data['testimonial_tags'][0]->slug  : 'All';

?>

<main id="page" role="main">
    <div class="container inside">
        <div class="row">
            <div class="col-sm-12">
                <div class="img-border">
                    <div class="text-box" id="top-section">
                        <div class="row">
                            <div class="col-md-8">
                                <h1><?php echo $page_data['h1']; ?> </h1>
                            </div>
                            <div class="col-md-4 text-right">
                                <?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>
                            </div>
                        </div>
                        <hr class="blue">
                        <?php echo $page_data['top_text']; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if($testimonial_tags != 'none') : ?>
        <div class="row">
            <div class="col-md-12">
                <?php echo do_shortcode('[daycare_testimonial tags="'.$testimonial_tags.'" version="wdr" limit="10" style="7"]'); ?>
            </div>
        </div>
        <?php endif; ?>
        <div class="row">
            <div class="col-sm-8">
                <div class="row" id="home-services">
                    <?php
                    $last_posts = get_posts(
                        array(
                            'posts_per_page' => 3
                        )
                    );
                    if ( $last_posts ) {
                        foreach ( $last_posts as $post ) :
                            ?>
                            <div class="col-sm-12">
                                <div class="img-border">
                                    <div class="row">
                                        <div class="col-sm-3 left">
                                            <div class="home-service-box" style="background-image:url(' <?php the_post_thumbnail_url( 'medium' ); ?>')">
                                            </div>
                                        </div>
                                        <div class="col-sm-9 right">
                                            <div class="home-service-box border">
                                                <?php
                                                setup_postdata( $post ); ?>
                                                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                                                <?php the_excerpt(); ?>
                                                <a href="<?php the_permalink(); ?>" class="btn-icon"> Read More</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; wp_reset_postdata();} ?>
                </div>
            </div>
            <div class="col-sm-4">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
<?php /*<div class="clear-footer"></div> */ ?>
</main>
<?php get_footer(); ?>
