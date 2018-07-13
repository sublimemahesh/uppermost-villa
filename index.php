<?php
include_once(dirname(__FILE__) . '/class/include.php');

$ROOM = new Room(Null);
$rooms = $ROOM->all();

$EXCURSION = new Excursions(Null);
$excursions = $EXCURSION->all();

?>


<!DOCTYPE html>
<html lang="en-US" class="scheme_original">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" type="image/x-icon" href="images/favicon.png" />
        <title>Uppermost Villa</title>

        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Droid+Serif%3A400%2C700%7CRaleway%3A100%2C200%2C300%2C400%2C500%2C600%2C700%2C800%2C900%7COpen+Sans%3A300%2C400%2C600%2C700%2C800%7CMontserrat%3A700%2C400&amp;subset=cyrillic%2Ccyrillic-ext%2Clatin%2Cgreek-ext%2Cgreek%2Clatin-ext%2Cvietnamese&amp;ver=1.6.11" type="text/css" media="all">
        <link rel='stylesheet' href='js/vendor/booked/font-awesome.min.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/essgrid/tooltipster.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/essgrid/tooltipster-light.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/booked/styles.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/revslider/settings.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/fontello/css/fontello.css' type='text/css' media='all' />

        <link rel='stylesheet' href='css/custom/_animation.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/shortcodes.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/skin.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/custom-style.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/colors.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/skin.responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/swiper/swiper.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/_messages.css' type='text/css' media='all' />
        <link href="css/custom/_portfolio.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/owl-carousel/css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/owl-carousel/css/owl.theme.default.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    </head>
    <body class="body_style_wide responsive_menu scheme_original top_panel_show top_panel_over sidebar_hide">
        <div class="body_wrap">
            <div class="page_wrap">

                <!-- Header -->
                <?php
                include 'header.php';
                ?>
                <!-- /Header -->

                <!-- Slider -->
                <?php
                include 'slider.php';
                ?>
                <!-- /Slider -->



                <div class="ps_header">
                    <div class="content_wrap">
                        <div class="sc_section scheme_dark">
                            <div class="sc_section_inner">
                                <div class="sc_property_search search-align">
                                    <form method="get" action="#">
                                        <div class="sc_ps_status">
                                            <h5>ROOM TYPE</h5>
                                            <select name="ps_status">
                                                <option value="">Apartment with sea View</option>
                                                <option value="">Deluxe Double room with Balcony and Mountain View</option>
                                                <option value="">Deluxe Double room with ocean view</option>
                                                <option value="">Deluxe Double room with pool view</option>
                                                <option value="">Deluxe Double room with sea view</option>
                                                <option value="">Deluxe Single room with ocean view</option>
                                            </select>
                                        </div>
                                        <div class="sc_ps_location">
                                            <h5>ARRIVAL DATE</h5>
                                            <input type="text" id="datepicker" placeholder="Select date">                                  
                                        </div>
                                        <div class="sc_ps_type">
                                            <h5>DEPARTURE DATE</h5>
                                            <input type="text" id="datepicker1" placeholder="Select date">    
                                        </div>
                                        <a href="booking.php?id=1"><input type="submit" class="sc_button sc_button_box sc_button_style_style2 btn-search" value="Search"></a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page_content_wrap page_paddings_no">
                    <div class="sc_section">
                        <div class="content_wrap title_margin_top1 margin_bottom_medium">
                            <div class="columns_wrap margin_top_xlarge margin_bottom_xmedium">
                                <div class="column-1_2">
                                    <div class="bgtext1 bg bgtext1-welcome">
                                        <p>WELCOME</p>
                                    </div>
                                    <h2 class="sc_title sc_title_iconed ind2 margin_top_null margin_bottom_xmedium">
                                        <span class="sc_title_box welcome-title">
                                            <h2 class="page-topic-black text-welcome">Welcome</h2>
                                            <span class="sc_title_subtitle">Dartmouth, MA 02748</span>
                                        </span>
                                    </h2>
                                    <div class="sc_section margin_bottom_xmedium section_style_1">
                                        <div class="sc_section_inner">
                                            <p>On the best lot at Phuket is situated the Kailua Residence. It features Ipe hardwood flooring on the interior and granite stone flooring on the lanais, high vaulted cedar ceilings.</p>
                                        </div>
                                    </div>
                                    <div class="columns_wrap sc_columns margin_bottom_medium">
                                        <div class="column-1_2 sc_column_item">
                                            <ul class="sc_list sc_list_style_iconed color_1">
                                                <li class="sc_list_item">
                                                    <span class="sc_list_icon icon-stop color_2"></span>
                                                    <p>Quiet Neighbourhood</p>
                                                </li>
                                                <li class="sc_list_item">
                                                    <span class="sc_list_icon icon-stop color_2"></span>
                                                    <p>Great Local Community</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="column-1_2 sc_column_item">
                                            <ul class="sc_list sc_list_style_iconed color_1">
                                                <li class="sc_list_item">
                                                    <span class="sc_list_icon icon-stop color_2"></span>
                                                    <p>Fabulous Views</p>
                                                </li>
                                                <li class="sc_list_item">
                                                    <span class="sc_list_icon icon-stop color_2"></span>
                                                    <p>Large Play Center In Yard</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="sc_property_wrap">
                                        <div class="sc_property sc_property_style_property-2">
                                            <div class="sc_property_item">
                                                <div class="ps_single_info">
                                                    <div class="property_price_box">
                                                        <span class="property_price_box_sign">$</span><span class="property_price_box_price">1,249,000</span>
                                                    </div>
                                                    <div class="sc_property_info_list">
                                                        <span class="icon-area_2">1,286 sqft</span>
                                                        <span class="icon-bed">2</span>
                                                        <span class="icon-bath">3</span>
                                                        <span class="icon-warehouse">2</span>
                                                    </div>
                                                    <div class="cL"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-1_2">
                                    <figure class="sc_image ">
                                        <a href="#"><img src="images/image-7-1-570x414.jpg" alt="" /></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accommo-section" style="background-image: url(images/image-9-1.jpg);padding-bottom: 36px;">                  
                        <div class="content_wrap title_margin_top2 margin_bottom_medium">
                            <div class="bgtext1 bgtext1-accommo">
                                <p>ACCOMMODATIONS</p>
                            </div>
                            <h2 class="sec-title-one h2 accommo-text page-topic-white">Accommodations</h2>
                            <div class="sc_property_wrap property-wrap-top">
                                <div class="sc_property sc_property_style_property-1">
                                    <div class="owl-carousel" id="accommodation-carousel">
                                        <?php
                                        foreach ($rooms as $room) {
                                        if (strlen($room['title']) > 35) {
                                        ?>
                                        <div class="my-corousel">
                                            <div class="sc_columns columns_wrap bg_color_1">
                                                <div class="column-1_2 column_padding_bottom accommo-column">
                                                    <!--<img src="images/img-600x410.jpg" alt=""/>-->
                                                    <img src="upload/room/<?php echo $room['image_name'] ?>" alt=""/>
                                                </div>
                                                <div class="column-1_2 column_padding_bottom accommo-column1">
                                                    <h3 class="entry-title" style="margin-bottom: 5px;"><?php echo $room['title']; ?></h3>
                                                    <p class="entry-content"><?php echo substr($room['short_description'], 0, 250) . '...'; ?></p>
                                                    <span>
                                                        <a href="view-accommodation.php?id=<?php echo $room["id"];?>"><button class="read-more btn-readmore">Read More</button></a>                                                       
                                                    </span>
                                                    <div class="accommo-icons">
                                                        <div class="entry-footer">
                                                            <span class="icon-bed bed-style"></span>
                                                            <span class="icon-bath bath-style"></span>
                                                            <span class="icon-warehouse"></span>

                                                            <div class="property_price_box1">
                                                                <span class="property_price_box_sign price-font">$</span>
                                                                <span class="property_price_box_price price-font"><?php echo $room['price'] ?></span>
                                                                <span class="price-day"> / Day</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                        } else {
                                        ?>
                                        <div class="my-corousel">
                                            <div class="sc_columns columns_wrap bg_color_1">
                                                <div class="column-1_2 column_padding_bottom accommo-column">
                                                    <!--<img src="images/img-600x410.jpg" alt=""/>-->
                                                    <img src="upload/room/<?php echo $room['image_name'] ?>" alt=""/>
                                                </div>
                                                <div class="column-1_2 column_padding_bottom accommo-column1">
                                                    <h3 class="entry-title"><?php echo $room['title']; ?></h3>
                                                    <p class="entry-content"><?php echo $room['short_description'] ?></p>
                                                    <span>
                                                        <button class="read-more btn-readmore">Read More</button>
                                                    </span>
                                                    <div class="accommo-icons">
                                                        <div class="entry-footer">
                                                            <span class="icon-bed bed-style"></span>
                                                            <span class="icon-bath bath-style"></span>
                                                            <span class="icon-warehouse"></span>

                                                            <div class="property_price_box1">
                                                                <span class="property_price_box_sign price-font">$</span>
                                                                <span class="property_price_box_price price-font"><?php echo $room['price'] ?></span>
                                                                <span class="price-day"> / Day</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <?php
                                            }
                                        }
                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="sc_section overflow_hidden bg_color_1 excursion-bottom">
                        <div class="content_wrap title_margin_top1 margin_bottom_medium excursion-top">
                            <div class="bgtext1 bgtext1-excursions">
                                <p>EXCURSIONS</p>
                            </div>
                            <h2 class="sc_title margin_top_null margin_bottom_medium page-topic-black">Excursions</h2>
                            <div class="sc_property_wrap">
                                <div class="sc_property sc_property_style_property-1">
                                    <div class="owl-carousel sc_columns columns_wrap" id="excurision-carousel">
                                        
                                        <?php
                                        foreach($excursions as $excursion){
                                            ?>
                                        <div class="column_padding_bottom">
                                            <div class="sc_property_item">
                                                <div class="sc_property_image">
                                                    <a href="#">

                                                        <img alt="" src="upload/excursion/<?php echo $excursion['image_name'] ?>">
                                                    </a>
                                                </div>
                                                <div class="sc_property_info">
                                                    <div class="sc_property_description"></div>
                                                    <div>
                                                        <div class="sc_property_title">
                                                            <div class="sc_property_title_address_1">
                                                                <a href="#"><?php echo $excursion['title']; ?></a> 
                                                            </div>
                                                            <div class="text-justify"><?php echo substr($excursion['short_description'], 0, 150) . '...'; ?></div>
                                                        </div>
                                                        <div class="cL"></div>
                                                    </div>
                                                </div>
                                                <div class="sc_property_info_list">
<!--                                                    <span class="icon-bed">2</span>
                                                    <span class="icon-bath">3</span>
                                                    <span class="icon-warehouse">2</span>-->
                                                    <span>
                                                        <a href="view-excursion.php?id=<?php echo $excursion["id"];?>"><button class="read-more">Read More</button></a>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                                                                
                                        }
                                       
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sc_parallax" data-vc-parallax="1.5" data-vc-parallax-image="images/img_map.jpg">

                        <div class="content_wrap title_margin_top margin_bottom_medium">
                            <div class="bgtext1 bgtext1-facilities">
                                <p>FACILITIES</p>
                            </div>
                            <h2 class="sec-title-one h2 accommo-text page-topic-white">Facilities</h2>
                            <div class="sc_section scheme_dark">
                                <div class="sc_section_inner">
                                    <div class="sc_services_wrap home-facilities-section">
                                        <div class="sc_services sc_services_style_services-1">
                                            <div class="sc_columns columns_wrap">
                                                <div class="column-1_4 column_padding_bottom">
                                                    <div class="sc_services_item">
                                                        <a href="single-service.html"><span class="sc_icon icon-house263"></span></a>
                                                        <div class="sc_services_item_content">
                                                            <h4 class="sc_services_item_title"><a href="single-service.html">Best property lists</a></h4>
                                                            <div class="sc_services_item_description">
                                                                <p>We provide consumers with a content-rich listings in a handy format.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_4 column_padding_bottom">
                                                    <div class="sc_services_item">
                                                        <a href="single-service.html"><span class="sc_icon icon-thumbs4"></span></a>
                                                        <div class="sc_services_item_content">
                                                            <h4 class="sc_services_item_title"><a href="single-service.html">Best price in market</a></h4>
                                                            <div class="sc_services_item_description">
                                                                <p>Price estimates and sales histories for property, updating information.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_4 column_padding_bottom">
                                                    <div class="sc_services_item">
                                                        <a href="single-service.html"><span class="sc_icon icon-badges3"></span></a>
                                                        <div class="sc_services_item_content">
                                                            <h4 class="sc_services_item_title"><a href="single-service.html">Guaranteed services</a></h4>
                                                            <div class="sc_services_item_description">
                                                                <p>Our managers will keep you informed and you can act with certainty.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_4 column_padding_bottom">
                                                    <div class="sc_services_item">
                                                        <a href="single-service.html"><span class="sc_icon icon-line-graphic6"></span></a>
                                                        <div class="sc_services_item_content">
                                                            <h4 class="sc_services_item_title"><a href="single-service.html">Marketing research</a></h4>
                                                            <div class="sc_services_item_description">
                                                                <p>All our marketing researchers today have a tough job multitasking.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="sc_section overflow_hidden bg_color_1 excursion-bottom">
                        <div class="content_wrap title_margin_top1 margin_bottom_medium excursion-top">
                            <div class="bgtext1 bgtext1-feedback">
                                <p>FEEDBACK</p>
                            </div>
                            <h2 class="sc_title margin_top_null margin_bottom_medium page-topic-black">Feedback</h2>
                            <div class="sc_property_wrap">
                                <div class="sc_property sc_property_style_property-1">
                                    <div class="owl-carousel" id="feedback-carousel">
                                        <div class="my-corousel">
                                            <img alt="" src="images/img-img.jpg" class="img-circle center-block">
                                            <h4 class="feed-name"><center>Emma Watson</center></h4>
                                            <p>
                                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.....
                                            </p>
                                        </div>
                                        <div class="">
                                            <img alt="" src="images/img-img.jpg" class="img-circle center-block">
                                            <h4 class="feed-name"><center>Emma Watson1</center></h4>
                                            <p>
                                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.....
                                            </p>
                                        </div>
                                        <div class="">
                                            <img alt="" src="images/img-img.jpg" class="img-circle center-block">
                                            <h4 class="feed-name"><center>Emma Watson2</center></h4>
                                            <p>
                                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                                                Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.....
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


                <!-- Header -->
                <?php
                include 'footer.php';
                ?>
                <!-- /header -->

            </div>
        </div>
        <a href="#" class="scroll_to_top icon-up"></a>


        <script data-cfasync="false" src="cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script><script type='text/javascript' src='js/vendor/jquery.js'></script>
        <script type='text/javascript' src='js/custom/plugins.js'></script>
        <script type='text/javascript' src='js/custom/messages.js'></script>
        <script type='text/javascript' src='js/vendor/jquery-migrate.min.js'></script>
        <script type='text/javascript' src='js/vendor/essgrid/lightbox.js'></script>
        <script type='text/javascript' src='js/vendor/essgrid/jquery.themepunch.tools.min.js'></script>
        <script type='text/javascript' src='js/vendor/revslider/jquery.themepunch.revolution.min.js'></script>
        <script type='text/javascript' src='js/vendor/modernizr.min.js'></script>
        <script type='text/javascript' src='js/vendor/ui/jquery-ui.min.js'></script>
        <script type="text/javascript" src="js/vendor/revslider/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="js/vendor/revslider/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js/vendor/revslider/revolution.extension.navigation.min.js"></script>
        <script type='text/javascript' src='js/vendor/superfish.js'></script>
        <script type='text/javascript' src='js/custom/_utils.js'></script>
        <script type='text/javascript' src='js/custom/_init.js'></script>
        <script type='text/javascript' src='js/custom/_shortcodes.js'></script>
        <script type='text/javascript' src='js/vendor/parallax.js'></script>
        <script type='text/javascript' src='js/vendor/skrollr.min.js'></script>
        <script type='text/javascript' src='js/vendor/swiper/swiper.min.js'></script>
        <script src="js/vendor/isotope.min.js" type="text/javascript"></script>
        <script src="plugins/owl-carousel/js/owl.carousel.min.js" type="text/javascript"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            $(function () {
                $("#datepicker").datepicker();
            });
        </script>
        <script>
            $(function () {
                $("#datepicker1").datepicker();
            });
        </script>
        <script>
            $(document).ready(function () {
                $("#excurision-carousel").owlCarousel({
                    loop: true,
                    margin: 7,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                    dots: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 2
                        },
                        1000: {
                            items: 3
                        }
                    }
                });
            });
        </script>
        <script>
            $(document).ready(function () {
                $("#feedback-carousel").owlCarousel({
                    loop: true,
                    margin: 7,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 2000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                });
            });


        </script>
        <script>
            $(document).ready(function () {
                $("#accommodation-carousel").owlCarousel({
                    loop: true,
                    margin: 7,
                    nav: true,
                    autoplay: true,
                    autoplayTimeout: 3000,
                    autoplayHoverPause: true,
                    responsive: {
                        0: {
                            items: 1
                        },
                        600: {
                            items: 1
                        },
                        1000: {
                            items: 1
                        }
                    }
                });

                $('#accommodation-carousel').on('mouseover', function (e) {
                    owl.trigger('play.owl.autoplay');
                })
                $('#accommodation-carousel').on('mouseleave', function (e) {
                    owl.trigger('stop.owl.autoplay');
                })
            });


        </script>


    </body>
</html>