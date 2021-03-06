<?php
include_once(dirname(__FILE__) . '/class/include.php');

$ROOM = new Room(Null);
$rooms = $ROOM->all();

$EXCURSION = new Excursions(Null);
$excursions = $EXCURSION->all();

$COMMENT = new Comments(Null);
$comments = $COMMENT->all();

$sliders = Slider::all();
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
        <link href="css/responsive.css" rel="stylesheet" type="text/css"/>
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
                                    <form method="get" action="booking.php">
                                        <div class="sc_ps_status">
                                            <h5>ROOM TYPE</h5>
                                            <select name="type">
                                                <option value="0">Select Room Type</option>
                                                <option value="1">Double Room with Mountain View</option>
                                                <option value="2">Double Room with Pool View </option>
                                                <option value="3">Double Room  </option>
                                                <option value="4">Deluxe Double  Room</option>                                                
                                            </select>
                                        </div>
                                        <div class="sc_ps_location">
                                            <h5>ARRIVAL DATE</h5>
                                            <input type="text" id="datepicker" placeholder="Select date" name="arrival">                                  
                                        </div>
                                        <div class="sc_ps_type">
                                            <h5>DEPARTURE DATE</h5>
                                            <input type="text" id="datepicker1" placeholder="Select date" name="departure">    
                                        </div>
                                        <input type="submit" class="sc_button sc_button_box sc_button_style_style2 btn-search" value="Search">
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
                                    <div class="bgtext1 bg bgtext1-welcome hidden-sm hidden-xs">
                                        <p>WELCOME</p>
                                    </div>
                                    <h2 class="sc_title sc_title_iconed ind2 margin_top_null margin_bottom_xmedium index-welcome">
                                        <span class="sc_title_box welcome-title">
                                            <h2 class="page-topic-black text-welcome">Welcome</h2>
                                            <span class="sc_title_subtitle">Uppermost Villa</span>
                                        </span>
                                    </h2>
                                    <div class="sc_section margin_bottom_xmedium section_style_1">
                                        <div class="sc_section_inner content-welcome">
                                            <p>Uppermost Villa truly an amazing place located on top of the mountain. Naturally made surroundings will be brought perfect ambiance blended of tranquility. Uppermost villa specially design for having great relaxation with tranquility. Uppermost Villa  serving unique, ultimate, superb service which located near Unawatuna and offers amenities with services beyond your expectation. 
                                            </p>
                                        </div>
                                    </div>
                                    
                                    <div class="sc_property_wrap">
                                        <div class="sc_property sc_property_style_property-2">
                                            <div class="sc_property_item">
                                                <div class="ps_single_info">
                                                    <div class="btn-readmore-welcome">
                                                        <a href="about.php"><button class="read-more btn-readmore-welcome">Read More</button></a>
                                                    </div>                                                    
                                                    <div class="cL"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-1_2">
                                    <figure class="sc_image ">
                                        <a href="#"><img src="images/image-new/1.jpg" alt="" /></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="accommo-section" style="background-image: url(images/image-new/parallex-01.jpg);padding-bottom: 45px;">                  
                        <div class="content_wrap title_margin_top2 margin_bottom_medium">
                            <div class="bgtext1 bgtext1-accommo hidden-sm hidden-xs">
                                <p>ACCOMMODATIONS</p>
                            </div>
                            <h2 class="sec-title-one h2 accommo-text page-topic-white">Accommodations</h2>
                            <div class="sc_property_wrap property-wrap-top">
                                <div class="sc_property sc_property_style_property-1">
                                    <div class="owl-carousel" id="accommodation-carousel">
                                        <?php
                                        foreach ($rooms as $room) {
                                            ?>
                                            <div class="my-corousel">
                                                <div class="sc_columns columns_wrap bg_color_1">
                                                    <div class="column-1_2 column_padding_bottom accommo-column">
                                                        <!--<img src="images/img-600x410.jpg" alt=""/>-->
                                                        <img src="upload/room/<?php echo $room['image_name'] ?>" alt=""/>
                                                    </div>
                                                    <div class="column-1_2 column_padding_bottom accommo-column1">
                                                        <h3 class="entry-title"><?php echo $room['title']; ?></h3>
                                                        <p class="entry-content"><?php echo substr($room['short_description'], 0, 400) . '...'; ?></p>
                                                        <span>
                                                            <a href="view-accommodation.php?id=<?php echo $room["id"]; ?>"><button class="read-more btn-readmore">Read More</button></a>
                                                        </span>
                                                        <div class="accommo-icons">
                                                            <div class="entry-footer">
                                                                <span class="icon-bed bed-style"></span>
                                                                <span class="icon-bath bath-style"></span>
                                                                <span class="fa fa-wifi"></span>

                                                                <div class="property_price_box1">
                                                                    <span class="property_price_box_sign price-font">US$</span>
                                                                    <span class="property_price_box_price price-font"><?php echo number_format($room['price']) ?></span>
                                                                    <span class="price-day"> / Night</span>
                                                                </div>
                                                            </div>
                                                        </div>
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

                    <div class="sc_section overflow_hidden bg_color_1 excursion-bottom">
                        <div class="content_wrap title_margin_top1 margin_bottom_medium excursion-top">
                            <div class="bgtext1 bgtext1-excursions hidden-sm hidden-xs">
                                <p>EXCURSIONS</p>
                            </div>
                            <h2 class="sc_title margin_top_null margin_bottom_medium page-topic-black">Excursions</h2>
                            <div class="sc_property_wrap">
                                <div class="sc_property sc_property_style_property-1">
                                    <div class="owl-carousel sc_columns columns_wrap" id="excurision-carousel">

                                        <?php
                                        foreach ($excursions as $excursion) {
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
                                                                <div class="text-justify"><?php echo substr($excursion['short_description'], 0, 200) . '...'; ?></div>
                                                            </div>
                                                            <div class="cL"></div>
                                                        </div>
                                                    </div>
                                                    <div class="sc_property_info_list">
    <!--                                                    <span class="icon-bed">2</span>
                                                        <span class="icon-bath">3</span>
                                                        <span class="icon-warehouse">2</span>-->
                                                        <span>
                                                            <a href="view-excursion.php?id=<?php echo $excursion["id"]; ?>"><button class="read-more excursion-readmore">Read More</button></a>
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
                    <div class="accommo-section" style="background-image: url(images/image-new/parallex-02.jpg);padding-bottom: 10px;">

                        <div class="content_wrap title_margin_top3 margin_bottom_medium">
                            <div class="bgtext1 bgtext1-facilities hidden-sm hidden-xs">
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
                                                        <a href="facilities.php"><span class="sc_icon icon-swiming_pool"></span></a>
                                                        <div class="sc_services_item_content">
                                                            <h4 class="sc_services_item_title"><a href="facilities.php">Swimming Pool</a></h4>
                                                            <div class="sc_services_item_description">
                                                                <p>Uppermost Villa Unawatuna features one swimming pool laying in front of the villa, the pool sits by the perfectly groomed gardens of the villa.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_4 column_padding_bottom">
                                                    <div class="sc_services_item">
                                                        <a href="facilities.php"><span class="sc_icon"><i class="fa fa-plane"></i></span></a>
                                                        <div class="sc_services_item_content">
                                                            <h4 class="sc_services_item_title"><a href="facilities.php">Airport Transfers</a></h4>
                                                            <div class="sc_services_item_description">
                                                                <p>Uppermost Villa serves Airport pickup or drops taxi service for your convenient. Our drivers will ensure you reach the airport safely & on time. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_4 column_padding_bottom">
                                                    <div class="sc_services_item">
                                                        <a href="facilities.php"><span class="sc_icon"><i class="fa fa-birthday-cake"></i></span></a>
                                                        <div class="sc_services_item_content">
                                                            <h4 class="sc_services_item_title"><a href="facilities.php">Arrange Parties</a></h4>
                                                            <div class="sc_services_item_description">
                                                                <p>Uppermost Villa we offer the perfect setting for your birthday, anniversary or get together parties. </p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="column-1_4 column_padding_bottom">
                                                    <div class="sc_services_item">
                                                        <a href="facilities.php"><span class="sc_icon"><i class="fa fa-wifi"></i></span></a>
                                                        <div class="sc_services_item_content">
                                                            <h4 class="sc_services_item_title"><a href="facilities.php">Other</a></h4>
                                                            <div class="sc_services_item_description">
                                                                <p>Complimentary Wi-Fi is provided throughout the public areas as we know how important it is to stay in touch on your travels.</p>
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
                    <div class="sc_section overflow_hidden bg_color_1">
                        <div class="content_wrap title_margin_top1 margin_bottom_medium excursion-top">
                            <div class="bgtext1 bgtext1-feedback hidden-sm hidden-xs">
                                <p>FEEDBACK</p>
                            </div>
                            <h2 class="sc_title margin_top_null margin_bottom_medium page-topic-black">Feedback</h2>
                            <div class="sc_property_wrap">
                                <div class="sc_property sc_property_style_property-1">
                                    <div class="owl-carousel" id="feedback-carousel">

                                        <?php
                                        foreach ($comments as $comment) {
                                            ?>

                                            <div class="my-corousel">
                                                <img alt="" src="upload/comments/<?php echo $comment['image_name'] ?>" class="img-circle center-block">
                                                <h4 class="feed-name"><center><?php echo $comment['name']; ?></center></h4>
                                                <h5 class=""><center><?php echo $comment['title']; ?></center></h5>
                                                <span class="para-feed"><?php echo $comment['comment']; ?></span>
                                            </div>

                                            <?php
                                        }
                                        ?>


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