<!-- footer -->
<div class="footer-bg">
</div>
<footer>
    <div class="top">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="tab">
                        <h4>Opening Hours</h4>
                        <p>6:00am - 7:00pm</p>
                    </div>
                </div>
                <div class="col-md-8">
                    <?php /*
                    <form class="form" method="post">
                        <input type="text" placeholder="Enter your email">
                        <input class="btn-d" type="submit" value="Subscribe">
                    </form>
                    */ ?>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">

                </div>
                <div class="col-md-4">
                    <h4>Quick Links</h4>
                    <ul>
                        <li><a href="/about-us/">About Us</a></li>
                        <li><a href="/daycare-programs/">Daycare Programs</a></li>
                        <li><a href="/daycare-transportation/">Transportation</a></li>
                        <li><a href="/harris-palm-bay-daycare/">Harris Palm Bay</a></li>
                        <li><a href="/food-program/">Food Program</a></li>
                        <li><a href="/contact-us/">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-md-3" id="social-media">
                    <h4>Social Media</h4>
                    <a href="https://www.facebook.com/palmbaydaycare/" target="_blank"><i class="fa fa-facebook-square"></i></a>
                    <a href="https://plus.google.com/100928120523744144484?hl=en" target="_blank"><i class="fa fa-google-plus-square"></i></a>
                    <a href="https://twitter.com/palmbaydaycare" target="_blank"><i class="fa fa-twitter-square"></i></a>
                    <hr>
                    <div style="color: #ffffff;" itemscope itemtype="http://schema.org/Product">
                        <span itemprop="name">Daycare Service</span><br>
                        <div itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                            Average Rating: <span itemprop="ratingValue">4.5</span><br>
                            Votes: <span itemprop="ratingCount">28</span><br>
                            Reviews: <span itemprop="reviewCount">28</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <h4>Location</h4>
                    <ul class="contact-info">
                        <li><i class="fa fa-map-marker"></i>1430 Glenham Dr NE
                            <br> Palm Bay, FL 32905 </li>
                        <li><a href="tel:<?php echo MAIN_PHONE; ?>"><i class="fa fa-phone"></i> <?php echo format_phone(MAIN_PHONE); ?></a></li>
                        <li><i class="fa fa-envelope"></i>  <a style="display: inline" href="mailto:care@palmbaydaycares.com">Care@PalmBayDaycares.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <p>&copy; <?php echo @date('Y'); ?> <a href="/">Palm Bay Daycare</a>  All Rights Reserved.</p>
    </div>
</footer>
<!-- /footer -->

<?php wp_footer(); ?>


<script type="text/javascript" src="/slick/slick.min.js"></script>
<script>

    /* Home Slider */
    $('.slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
    });

    /* Small Navigation */
    $('.nav-btn-box').on('click',function(){
        $('.nav-btn').stop().toggleClass('nav-btn-1');
        $('.nav-btn1').stop().toggleClass('nav-btn-2');
        $('.nav-btn2').stop().toggleClass('nav-btn-3');

        $('nav ul').slideToggle(500);
    });
</script>
<?php wp_footer(); ?>

</body>
</html>
