<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Islamic Mosque | Comunity Center HTML5 Theme</title>

        <link href="<?php echo base_url(); ?>include/front/css/custom.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>include/front/css/color.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>include/front/css/responsive.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>include/front/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>include/front/css/font-awesome.min.css" rel="stylesheet">
        <link href="<?php echo base_url(); ?>include/front/css/owl.carousel.css" rel="stylesheet">

        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div id="wrapper">

            <header class="cp-mosque-header">
                <div class="container">
                    <div class="row">

                        <div class="col-md-2">
                            <div class="site-logo">
                                <a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>include/front/images/logo.png" alt=""></a>
                            </div>
                        </div>

                        <div class="col-md-10">
                            <div class="cp-topbar">
                                <ul class="cp-prayer-search">
                                    <li><strong>Prayer Time:</strong></li>
                                    <li>
                                        <div class="dropdown">
                                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <span class="caret"></span>5:05 AM <i class="fa fa-star"></i> Fajr </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                                                <li> 11:51 AM <i class="fa fa-sun-o"></i> Zuhr</li>
                                                <li> 2:50 PM <i class="fa fa-sun-o"></i> Asar</li>
                                                <li> 5:12 PM <i class="fa fa-moon-o"></i> Magrib</li>
                                                <li> 6:37 PM <i class="fa fa-moon-o"></i> Isha</li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li><i class="fa fa-bars"></i></li>
                                    <li><a href="#"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </div>
                            <div class="cp-navbar">
                                <nav class="navbar navbar-default">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                        <ul class="nav navbar-nav">
                                            <li><a href="<?php echo base_url(); ?>">Home </a></li>
                                            <li><a href="aboutus.html">About Us </a></li>
                                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Projects <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="cf-listing.html">CrowdFunding | Listing</a></li>
                                                    <li><a href="cf-grid.html">CrowdFunding | Grid</a></li>
                                                    <li><a href="cf-details.html">CrowdFunding | Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Events <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="event-listing.html">Events | Listing</a></li>
                                                    <li><a href="event-grid.html">Events | Grid</a></li>
                                                    <li><a href="event-details.html">Events | Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="blog-listing.html">Blog | Listing</a></li>
                                                    <li><a href="blog-grid.html">Blog | Grid</a></li>
                                                    <li><a href="blog-sidebar.html">Blog | Sidebar</a></li>
                                                    <li><a href="blog-details.html">Blog | Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Shop <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="shop-listing.html">Shop | Listing</a></li>
                                                    <li><a href="shop-grid.html">Shop | Grid</a></li>
                                                    <li><a href="shop-details.html">Shop | Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="gallery-full.html">Gallery | Full</a></li>
                                                    <li><a href="gallery-2col.html">Gallery | 2 Coloum Grid</a></li>
                                                    <li><a href="gallery-3col.html">Gallery | 3 Column Grid</a></li>
                                                    <li><a href="gallery-4col.html">Gallery | 4 Column Grid</a></li>
                                                </ul>
                                            </li>
                                            <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages <span class="caret"></span></a>
                                                <ul class="dropdown-menu">
                                                    <li><a href="donate.html">Donate</a></li>
                                                    <li><a href="news.html">News</a></li>
                                                    <li><a href="news-details.html">News Details</a></li>
                                                    <li><a href="team.html">Team</a></li>
                                                    <li><a href="testimonials.html">Testimonials</a></li>
                                                    <li><a href="masjid-services.html">Masjid Services</a></li>
                                                    <li><a href="islamic-teachings.html">Islamic Teachings</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact-us.html">Contact Us </a></li>
                                        </ul>
                                    </div>

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="prayer-time-home">
                <table width="100%" border="1">
                    <thead>
                        <tr>
                            <td>Prayer name</td>
                            <td>Start</td>
                            <td>Ekamah</td>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if(isset($all_prayers)){ foreach ($prayersname as $prayername){ ?>
                        <tr>
                            <td><?php echo $prayername; ?></td>
                            <td><?php echo $all_prayers->FajrPrayerTime; ?></td>
                            <td><?php echo '0:00'; ?></td>
                        </tr>
                        <?php } } ?>
                    </tbody>

                </table>

                <a href="<?php echo base_url(); ?>admin/prayer-setting" class="btn btn-primary btn-update">Update</a>
            </div>

            <div class="cp-main-slider">
                <div id="main-slider" class="owl-carousel owl-theme">
                    <div class="item active">
                        <img src="<?php echo base_url(); ?>include/front/images/slider/1.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>include/front/images/slider/2.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>include/front/images/slider/3.jpg" alt="">
                    </div>
                    <div class="item">
                        <img src="<?php echo base_url(); ?>include/front/images/slider/4.jpg" alt="">
                    </div>
                </div>
            </div>

            <div class="cp-main-content">
                <div class="cp-welcome">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-5"> <img src="<?php if(isset($all_aboutus)){ echo $all_aboutus->AboutUsImages; } ?>" alt=""> </div>
                            <div class="col-md-7">
                                <div class="cp-welcome-content">
                                    <?php if(isset($all_aboutus)){ ?>
                                    <h2><?php if(isset($all_aboutus)){ echo $all_aboutus->AboutUsTitle; } ?></h2>
                                    <p><?php if(isset($all_aboutus)){ echo $all_aboutus->AboutUsDetails; } ?></p>
                                    <a href="javascripr:void(0)" class="read-more">Read More</a> 
                                    <?php }else{ ?>
                                    <p><?php echo 'About-Us Information Empty'; ?></p>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="home-events-slider">
                    <div class="container">
                        <div class="row">
                            <div class="section-title"> <strong>Our Upcoming</strong>
                                <h2> Muslim Events</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div id="home-event-slider" class="owl-carousel owl-theme">
                                    <?php if(isset($all_events)){ foreach ($all_events as $event){ ?>

                                    <div class="item">
                                        <div class="holder">
                                            <div class="frame"> <strong class="date">06 <span>oct</span></strong> <img alt="img" src="<?php echo $event->EventImages; ?>"></div>
                                            <div class="text-box">
                                                <h3><a href="javascript:void(0)"><?php echo $event->EventTitle; ?></a></h3>
                                                <p><?php echo $event->EventDescription; ?><a href="javascript:void(0)">[+]</a></p>
                                                <div class="link-holder"> <a class="link1" href="#"><i class="fa fa-clock-o"></i><?php echo $event->EventStartTime; ?></a> <a class="link2" href="#"><i class="fa fa-map-marker"></i><?php echo $event->EventLocation; ?></a></div>
                                                <div class="countdown-outer">
                                                    <div class="defaultCountdown"></div>
                                                </div>
                                                <a class="participate" href="event-detail.html">Participate</a> </div>
                                        </div>
                                    </div>
                                    <?php } } ?>

                                    <div class="item">
                                        <div class="holder">
                                            <div class="frame"> <strong class="date">06 <span>oct</span></strong> <img alt="img" src="<?php echo base_url(); ?>include/front/images/event-2.jpg"></div>
                                            <div class="text-box">
                                                <h3><a href="event-detail.html">Prayer Timing of Eid-ul-Azha Event</a></h3>
                                                <p>Duis consequat eros nec tortor mollis luctus. Proin imperdiet nibh vitae lacus dignissim dictum. Etiam suscipit, sem et aliquam faucibus, justo risus aliquet ante, vitae ullamcorper sapien mauris a justo. Cras ac scelerisque lorem. Aliquam auctor pellentesque rutrum. Duis et interdum nisl. Nam in ju...<a href="event-detail.html">[+]</a></p>
                                                <div class="link-holder"> <a class="link1" href="#"><i class="fa fa-clock-o"></i>7:00 a.m. to 7:30 a.m.</a> <a class="link2" href="#"><i class="fa fa-map-marker"></i>Masjid Road, New York.</a></div>
                                                <div class="countdown-outer">
                                                    <div class="defaultCountdown"></div>
                                                </div>
                                                <a class="participate" href="event-detail.html">Participate</a> </div>
                                        </div>
                                    </div>

                                    <div class="item">
                                        <div class="holder">
                                            <div class="frame"> <strong class="date">06 <span>oct</span></strong> <img alt="img" src="<?php echo base_url(); ?>include/front/images/event-3.jpg"></div>
                                            <div class="text-box">
                                                <h3><a href="event-detail.html">Prayer Timing of Eid-ul-Azha Event</a></h3>
                                                <p>Duis consequat eros nec tortor mollis luctus. Proin imperdiet nibh vitae lacus dignissim dictum. Etiam suscipit, sem et aliquam faucibus, justo risus aliquet ante, vitae ullamcorper sapien mauris a justo. Cras ac scelerisque lorem. Aliquam auctor pellentesque rutrum. Duis et interdum nisl. Nam in ju...<a href="event-detail.html">[+]</a></p>
                                                <div class="link-holder"> <a class="link1" href="#"><i class="fa fa-clock-o"></i>7:00 a.m. to 7:30 a.m.</a> <a class="link2" href="#"><i class="fa fa-map-marker"></i>Masjid Road, New York.</a></div>
                                                <div class="countdown-outer">
                                                    <div class="defaultCountdown"></div>
                                                </div>
                                                <a class="participate" href="event-detail.html">Participate</a> </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <footer class="cp-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>Facebook</h3>
                                <div class="facebook">
                                    <div id="fb-root"></div>
                                    <script>
                                        (function (d, s, id) {

                                            var js, fjs = d.getElementsByTagName(s)[0];

                                            if (d.getElementById(id))
                                                return;

                                            js = d.createElement(s);
                                            js.id = id;

                                            js.src = "../../connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=133982306765662";

                                            fjs.parentNode.insertBefore(js, fjs);

                                        }(document, 'script', 'facebook-jssdk'));
                                    </script>
                                    <div class="fb-page" data-href="https://www.facebook.com/crunchpress.themes" data-width="263px" data-height="300px" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="true">
                                        <div class="fb-xfbml-parse-ignore">
                                            <blockquote cite="https://www.facebook.com/crunchpress.themes"><a href="https://www.facebook.com/crunchpress.themes">CrunchPress</a></blockquote>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>Tags</h3>
                                <div class="tagcloud"> <a href="#islamic">islamic</a> <a href="#kalma">Kalma</a> <a href="#mosque">Mosque</a> <a href="#namaz">Namaz</a> <a href="#people">people</a> <a href="#project">Project</a> <a href="#quran">Quran</a> <a href="#rights">Rights</a> <a href="#salat">Salat</a> <a href="#zakat">Zakat</a></div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>Quick Links</h3>
                                <ul class="quick-links">
                                    <li><a href="#"><i class="fa fa-arrow-right"></i> Marriage and Islam</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i> Importance of Prayer</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i> Quran Recitation</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i> Children Rights In Islam</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i> Pray! Before It Is Late</a></li>
                                    <li><a href="#"><i class="fa fa-arrow-right"></i> Mosque, Center For Peace</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="footer-widget">
                                <h3>Contact</h3>
                                <address>
                                    <ul>
                                        <li>The Church Branch,<br>
                                            123 Lorem Ipsum Avenue, New York United States, 012345 </li>
                                        <li><i class="fa fa-phone"></i> 0123 456 7890</li>
                                        <li><i class="fa fa-fax"></i> 0123 456 7890</li>

                                        <li><i class="fa fa-globe"></i> www.example.com</li>
                                    </ul>
                                </address>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-cr">
                    <div class="container">
                        <p> Islamic Mosque © 2016 All Rights Reserved, Designed & Developed by CrunchPress.com </p>
                    </div>
                </div>
            </footer>

        </div>

        <script src="<?php echo base_url(); ?>include/front/js/jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>include/front/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>include/front/js/owl.carousel.min.js"></script>
        <script src="<?php echo base_url(); ?>include/front/js/jquery.countdown.min.js"></script>
        <script src="<?php echo base_url(); ?>include/front/js/custom.js"></script>

    </body>

</html>