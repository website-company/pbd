<?php
/* Template Name: Contact Us */
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
                        <div class="row">
                            <div class="col-sm-6">
                                <?php echo $page_data['top_text']; ?>
                            </div>
                            <div class="col-sm-6">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9961.064708110058!2d-80.59599061727555!3d28.031559712561236!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88de1252189d4333%3A0xe641199f04b011f4!2s1430+Glenham+Dr+NE%2C+Palm+Bay%2C+FL+32905!5e0!3m2!1sen!2sus!4v1487134296649"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form contact">
                                    <p class="heading">Contact Us Today</p>
                                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <input type="text" name="names" id="names" class="name-form" placeholder="Enter Name">
                                                <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                                                <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
                                                <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone">
                                            </div>
                                            <div class="col-sm-6">
                                                <p><textarea class="form-control" id="comments" name="message" placeholder="Comments"></textarea></p>
                                                <input type="hidden" name="action" value="contact_form">
                                                <input type="hidden" name="cur_url" id="cur_url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
                                                <input type="submit" class="btn form" value="Submit">
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php /*<div class="clear-footer"></div> */ ?>
</main>
<?php get_footer(); ?>
