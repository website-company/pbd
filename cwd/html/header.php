<!doctype html>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    <meta name="ROBOTS" content="ALL" />

    <link href="//www.google-analytics.com" rel="dns-prefetch">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" href="/public/css/theme1.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <script type="text/javascript" src="/public/js/main.js"></script>
    <link rel="apple-touch-icon" sizes="57x57" href="/pbd/public/images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="/public/images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/public/images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="/public/images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/public/images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="/public/images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="/public/images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="/public/images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/public/images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="/public/images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/public/images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/public/images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/public/images/favicon/favicon-16x16.png">
    <link rel="manifest" href="/public/images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/public/images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <?php
        /* Constants */
        define('MAIN_PHONE', '3217682120');

    ?>
    <script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "ChildCare",
  "telephone": "+1<?php echo format_phone(MAIN_PHONE); ?>",
  "name": "Palm Bay Daycare and Learning Center",
  "url": "http://palmbaydaycares.com",
  "logo": "http://palmbaydaycares.com/public/images/palm-bay-daycare-logo.jpg",
  "description": "Daycare center in Palm Bay FL providing quality child care where children can have fun while they learn from enthusiastic and loving teachers. ",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "1430 Glenham Dr NE",
    "addressLocality": "Palm Bay",
    "addressRegion": "Florida",
    "postalCode": "32905",
    "addressCountry": "United States"
  },
  "image" : "http://palmbaydaycares.com/public/images/palm-bay-daycare-and-learning-center.jpg",
  "priceRange": "$",
  "openingHours": "Mo, Tu, We, Th, Fr 06:30-19:00",
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+1<?php echo format_phone(MAIN_PHONE); ?>",
    "contactType": "Customer Service"
  }
}
 </script>
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-93838489-1', 'auto');
        ga('send', 'pageview');

    </script>
    <?php wp_head(); ?>
    <!-- Start Alexa Certify Javascript -->
    <script type="text/javascript">
        _atrk_opts = { atrk_acct:"NRvsp1IW1d10cv", domain:"palmbaydaycares.com",dynamic: true};
        (function() { var as = document.createElement('script'); as.type = 'text/javascript'; as.async = true; as.src = "https://d31qbv1cthcecs.cloudfront.net/atrk.js"; var s = document.getElementsByTagName('script')[0];s.parentNode.insertBefore(as, s); })();
    </script>
    <noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=NRvsp1IW1d10cv" style="display:none" height="1" width="1" alt="" /></noscript>
    <!-- End Alexa Certify Javascript -->
</head>
<body <?php body_class(); ?>>
<!-- header -->
<header>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <a href="/"><img id="logo" title="Palm Beach Daycare and Learning Center" src="/public/images/palm-bay-daycare-logo.png" class="img-responsive" alt="Palm Beach Daycare Logo"></a>
            </div>
            <div class="col-sm-9">
                <div class="row hidden-xs" id="header-info">
                    <div class="col-md-4 col-sm-6 phone">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                            </div>
                            <div class="col-sm-8" id="tel-box">
                                Call Us Anytime
                                <a href="tel:<?php echo MAIN_PHONE; ?>">Ph: <?php echo format_phone(MAIN_PHONE); ?></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                            </div>
                            <div class="col-sm-8">
                                Open Time
                                <span class="link">6:00am - 7:00pm</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 " id="email">
                        <div class="row">
                            <div class="col-sm-4">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                            </div>
                            <div class="col-sm-8">
                                Mail Us
                                <a href="mailto:Care@PalmBayDaycare.com">Care@PalmBayDaycare.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <nav>
        <div class="container nav-body">
            <div class="row">
                <div class="col-xs-12 visible-xs">
                    <div class="nav-controls">
                        <i class="fa fa-phone" aria-hidden="true"></i>
                        <div class="nav-btn-box">
                            <div class="nav-btn"></div>
                            <div class="nav-btn1"></div>
                            <div class="nav-btn2"></div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">

                </div>
                <div class="col-sm-8">
                    <?php wp_nav_menu( array( 'theme_location' => 'main' ) ); ?>
                </div>
            </div>
        </div>
    </nav>
</header>
<!-- /header -->
