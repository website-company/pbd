<?php /* Template Name: Content */


get_header();

$page_data = array(
    'h1' => get_field('top_left_section')[0]['top_heading'],
    'top_text' => get_field('top_left_section')[0]['text_content'],
    'testimonial_tags' => get_field('testimonials') ? : NULL
);

?>

<main role="main">
    <div class="container inside-white">
        <div class="row">
            <div class="col-sm-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
                    the_content();
                endwhile; else: ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <?php /*<div class="clear-footer"></div> */ ?>
</main>
<?php get_footer(); ?>
