<div class="footer-bg"></div><footer><div class="top"><div class="container"><div class="row"><div class="col-md-4"><div class="tab"><h4>Opening Hours</h4><p>6:30am - 6:30pm</p></div></div><div class="col-md-8"><form class="form" method="post"> <input type="text" placeholder="Enter your email"> <input class="btn-d" type="submit" value="Subscribe"></form></div></div></div></div><div class="bottom"><div class="container"><div class="row"><div class="col-md-12"></div><div class="col-md-4"><h4>Quick Links</h4><ul><li><a href="#">About Us</a></li><li><a href="#">Daycare Programs</a></li><li><a href="#">Transpiration</a></li><li><a href="#">Enrollment</a></li><li><a href="#">Food Program</a></li><li><a href="#">Contact Us</a></li></ul></div><div class="col-md-3"></div><div class="col-md-5"><h4>Location</h4><ul class="contact-info"><li><i class="fa fa-map-marker"></i>1430 Glenham Dr NE<br> Palm Bay, FL 32905</li><li><i class="fa fa-phone"></i>555-555-55555</li><li><i class="fa fa-envelope"></i> <a style="display: inline" href="mailto:care@palmbaydaycares.com">Care@PalmBayDaycares.com</a></li></ul></div></div></div></div><div class="copyright"><p>&copy; <?php echo @date('Y'); ?> <a href="/">Palm Bay Daycare</a> All Rights Reserved.</p></div></footer></body><script type="text/javascript" src="/public/js/main.js"></script><script type="text/javascript" src="/slick/slick.min.js"></script><script>

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
</script></html>