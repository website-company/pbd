<?php /* Template Name: Homepage */ get_header(); ?>

<?php

?>

<main role="main">
    <div id="top-clouds">
        <div class="clouds">
            <img src="/public/images/cloud1.png" alt="daycare cloud">
        </div>
        <div class="clouds">
            <img src="/public/images/cloud2.png" alt="child care clouds">
        </div>
        <div class="clouds">
            <img src="/public/images/cloud3.png" alt="kids in cloud">
        </div>
        <div class="clouds">
            <img src="/public/images/cloud4.png" alt="infant cloud">
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="slider">
                    <img src="/public/images/daycare-slide-2.jpg" alt="VPK Teacher teaching kids" class="img-responsive img-border">
                    <img src="/public/images/daycare-slide-1.jpg" alt="Child playing" class="img-responsive img-border">
                </div>
            </div>
            <div class="col-md-4">
                <div class="img-border form">
                    <p class="heading text-white">Schedule a Tour<br> Today</p>
                    <form action="<?php echo esc_url( admin_url('admin-post.php') ); ?>" method="post">
                        <input type="text" name="names" id="names" class="name-form" placeholder="Enter Name">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name">
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter Email">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone">
                        <p><textarea class="form-control" id="comments" name="message" placeholder="Comments"></textarea></p>
                        <input type="hidden" name="cur_url" id="cur_url" value="<?php echo $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>">
                        <input type="hidden" name="action" value="contact_form">
                        <input type="submit" name="submit" class="btn form" value="Submit">
                    </form>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="img-border">
                    <div class="text-box ">
                        <h1 class="text-center">Palm Bay Daycare, FL & ELC Brevard Child Care</h1>
                        <hr class="style1">
                        <div class="row">
                            <div class="col-sm-6">
                                <h2>Quality Daycare Service in Palm Bay, FL</h2>
                                <p>We offer parents a safe, clean, fun environment for their child to learn and have fun while their away for the day. </p>
                                <p>As parents ourselves, we truly understand how important it is that children are in a safe environment at all times. Therefore we are very thorough in making sure the daycare center is always free and clear of any hazards, while every child is carefully watched by screened, trained staff. The Daycare center's owner and director is consistently monitoring every area of the child care facility. </p>
                            </div>
                            <div class="col-sm-6 r-border">
                                <h3>Our Mission</h3>
                                <p>The entire staff at Palm Bay Daycare sets out each day to make a positive impact in the lives of every child they come in contact with.</p>
                                <p>We all believe that every child has the potential to learn something new every day, which helps pave the way to a successful future in their academics, while helping to promote good behaviour as they journey through life.  </p>
                                <p>Our satisfaction comes from teaching children to reach his or her maximum potential by assisting in reaching their next goal. Whether it's assisting a child through his or her first steps or working with an after school student with a challenging homework assignment - its all the same to us because we love what we do!</p>
                            </div>
                        </div>
                    </div>
                </div>
                <h3 class="heading text-center text-white">Daycare Services</h3>
                <hr class="style1">
            </div>
        </div>
        <div class="row" id="home-services">
            <div class="col-sm-6">
                <div class="img-border">
                    <div class="row">
                        <div class="col-sm-4 left">
                            <div class="home-service-box baby">
                            </div>
                        </div>
                        <div class="col-sm-8 right">
                            <div class="home-service-box border">
                                <h4>Infant Daycare</h4>
                                <p>Our infant daycare service in Palm Bay offers parents a safe clean environment for their baby to be cared for while their away. Our infant care-takers ensure a clean environment for the babies. This includes wearing sanitized shoe covers to ensure no dirt is tracked in and restricting access of the babies room to only authorized personnel who have been screened prior to entering.</p>
                                <a href="/infant-care" class="btn-icon"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="img-border">
                    <div class="row">
                        <div class="col-sm-4 left">
                            <div class="home-service-box one">
                            </div>
                        </div>
                        <div class="col-sm-8 right">
                            <div class="home-service-box border">
                                <h4>1-Year-Old's</h4>
                                <p>The 1-year-old child care program at Palm Bay Daycare offers a fun place children can learn and play. At one-years-old, children are really starting to utilize their motor skills as he or she gets around. Every child attending the the daycare center is encouraged by everyone of the teachers, to reach higher in their goals and achieve greatness as they grow and develop. </p>
                                <a href="/one-year-olds" class="btn-icon"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="img-border">
                    <div class="row">
                        <div class="col-sm-4 left">
                            <div class="home-service-box two">
                            </div>
                        </div>
                        <div class="col-sm-8 right">
                            <div class="home-service-box border">
                                <h4>2-Year-Old's</h4>
                                <p>The 2-year-old child care program offers toddlers a fun place to learn with other toddlers as he or she has a blast! By the time a child reaches 2-years-old, he or she is most likely getting around very easily and quickly. At this age the children are ready to begin learning to identify colors and letters, which help in building a solid foundation for them to build their next phase of development on.</p>
                                <a href="/two-year-olds" class="btn-icon"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="img-border">
                    <div class="row">
                        <div class="col-sm-4 left">
                            <div class="home-service-box three">
                            </div>
                        </div>
                        <div class="col-sm-8 right">
                            <div class="home-service-box border">
                                <h4>3 Year Old's</h4>
                                <p>In the the 3-year-old child care program at Palm Bay Daycare, kids continue building onto their development foundation as he or she prepares to excel in the VPK program. By now, kids are concurring walking and talking and are participating in skill building exercises that help them grow and develop into the next level of their journey of life.  </p>
                                <a href="/three-year-olds" class="btn-icon"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="img-border">
                    <div class="row">
                        <div class="col-sm-4 left">
                            <div class="home-service-box vpk">
                            </div>
                        </div>
                        <div class="col-sm-8 right">
                            <div class="home-service-box border">
                                <h4>Palm Bay VPK Program</h4>
                                <p>The Voluntary Prekindergarten Education program offered at Palm Bay Daycare is a place where children learn and play at an accredited VPK program in Palm Bay. The program is taught by carefully selected certified teachers who have an up-to-date CDA certification and love working with children. Children in the VPK program have a blast as their taught from creative curriculum, which provides a proven strategy in preparing them for Kindergarten.     </p>
                                <a href="/palm-bay-vpk-program" title="Fun Free, Accredited VPK Program" class="btn-icon"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="img-border">
                    <div class="row">
                        <div class="col-sm-4 left">
                            <div class="home-service-box aftercare">
                            </div>
                        </div>
                        <div class="col-sm-8 right">
                            <div class="home-service-box border">
                                <h4>Aftercare Program</h4>
                                <p>Palm Bay Daycare offers a fun and resourceful aftercare program where children can enjoy their time after school playing and learning with other kids. We encourage kids to take some time to work on their homework, where the teachers can assist them overcome challenging assignments he or she may have, this way when the child is home, he or she can spend more quality time with their loved ones. </p>
                                <a href="#" class="btn-icon"> Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="img-border">
                    <div class="text-box ">
                        <h3 class="text-center">Early Learning Coalition (ELC)</h3>
                        <hr class="style1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3">
                                        <img src="/public/images/ELC-Logo.png" alt="ELC of Brevard" class="img-responsive top">
                                    </div>
                                    <div class="col-lg-10 col-md-9">
                                        <p>Palm Bay Daycare strives to ensure every child has access to the quality daycare and learning programs we provide, therefore we proudly accept ELC.</p>
                                        <p>Our admissions team is very helpful in facilitating the Early Learning Coalition of Brevard County program. If you have any question or concerns about ELC, feel free to <a href="/contact-us">contact us</a>  and we'll be happy to assist you.    </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="img-border">
                    <div class="text-box ">
                        <h3 class="text-center">Nutritious meals and snacks Included</h3>
                        <hr class="style1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3">
                                        <img src="/public/images/florida-health.jpg" alt="Florida Health Food Program" class="img-responsive top">
                                    </div>
                                    <div class="col-lg-10 col-md-9">
                                        <p><strong>We proudly team up with Florida Health to ensure every child attending our daycare programs are consuming healthy meals and snacks every day their in our care.</strong></p>
                                        <p>Proper nutrition is the cornerstone of optimum development. Here at Palm Bay Daycare and Learning Center, we take pride in providing children with breakfast, lunch, and snacks in between meals to ensure children are consuming nutritious meas that promote health and strength as they learn and play.  </p>
                                        <p>Our food handlers are very cautious when it comes to sanitation and proper food handling, while they prepare savory meals for the children to enjoy! <a href="/food-program">Read more</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="img-border">
                    <div class="text-box ">
                        <h3 class="text-center">Before and Aftercare Transportation</h3>
                        <hr class="style1">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="row">
                                    <div class="col-lg-2 col-md-3">
                                        <img src="/public/images/childcare-bus-pickup.png" align="Daycare pickup bus" class="img-responsive top">
                                    </div>
                                    <div class="col-lg-10 col-md-9">
                                        <p>Have to be at work before your child goes to school? Or does your child's school let out before your out of work? If so, we have you covered. Here at Palm Beach Daycare we offer safe reliable transpiration for all after school kids.</p>
                                        <p>There's many great schools located throughout Brevard county that we provide our transpiration service to, which is included in the tuition. Check our <a href="/daycare-transpiration/">school transportation</a> list to see if your child's school is in our service area. Note: some schools we will provide transpiration to may not be list. For more details, feel free to give us a call.  </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
