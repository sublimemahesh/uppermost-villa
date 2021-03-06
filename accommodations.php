<?php
include_once(dirname(__FILE__) . '/class/include.php');

$ROOM = new Room(Null);
$rooms = $ROOM->all();
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
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <link href="js/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

    </head>
    <body class="body_style_wide responsive_menu scheme_original top_panel_show top_panel_above sidebar_hide">
        <div class="body_wrap">
            <div class="page_wrap">

                <!-- Header -->
                <?php
                include 'header.php';
                ?>
                <!-- /Header -->

                <!--breadcrumbs-->
                <div class="top_panel_title heading-banner top_panel_style_1  title_present scheme_original">
                    <div class="top_panel_title_inner top_panel_inner_style_1 breadcrumbs_present_inner">
                        <div class="content_wrap">
                            <h1 class="page_title banner-title">Accommodations</h1>
                            <div class="breadcrumbs banner-title">
                                <a class="breadcrumbs_item home" href="./">Home</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">Accommodations</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/breadcrumbs-->

                <?php
                foreach ($rooms as $room) {
                    if (strlen($room['title']) > 35) {
                        ?>

                        <div class="page_content_wrap accommo-padding1">
                            <div class="content_wrap">
                                <div class="content">
                                    <div class="sc_property sc_property_style_property-1">
                                        <div class="columns_wrap1 ">
                                            <div class="sc_property_wrap">
                                                <div class="sc_property sc_property_style_property-1">

                                                    <div class="sc_columns columns_wrap excursion-bg-color col-margin">
                                                        <div class="ribbon"><span><?php echo "US$ ", number_format($room['price']); ?></span></div>
                                                        <div class="column-1_4 col-4 padding-col">
                                                            <img src="upload/room/<?php echo $room['image_name'] ?>" alt=""/>
                                                        </div>
                                                        <div class="column-1_2 col-2 entry-box">
                                                            <h3 style="margin-top: 25px;" class="entry-title-accommo"><?php echo $room['title']; ?></h3>
                                                            <p class="entry-content-accommo p-margin text-justify"><?php echo substr($room['short_description'], 0, 400) . '...'; ?></p>                                                        
                                                            <span class="accommo-span1">
                                                                <a href="view-accommodation.php?id=<?php echo $room["id"];?>"><button class="read-more btn-readmore1">Read More</button></a>
                                                            </span>
                                                            <span class="accommo-span2">
                                                                <a href="booking.php?type=<?php echo $room["id"];?>"><button class="read-more btn-readmore1">Book Now</button></a>
                                                            </span>
                                                        </div>                                              
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>                          
                                </div>
                            </div>
                        </div>

                        <?php
                    } else {
                        ?>
                
                        <div class="page_content_wrap accommo-padding1">
                            <div class="content_wrap">
                                <div class="content">
                                    <div class="sc_property sc_property_style_property-1">
                                        <div class="columns_wrap1 ">
                                            <div class="sc_property_wrap">
                                                <div class="sc_property sc_property_style_property-1">

                                                    <div class="sc_columns columns_wrap excursion-bg-color col-margin">
                                                        <div class="ribbon"><span><?php echo "US$ ", number_format($room['price']); ?></span></div>
                                                        <div class="column-1_4 col-4 padding-col">
                                                            <img src="upload/room/<?php echo $room['image_name'] ?>" alt=""/>
                                                        </div>
                                                        <div class="column-1_2 col-2 entry-box">
                                                            <h3 style="margin-top: 25px;" class="entry-title-accommo"><?php echo $room['title']; ?></h3>
                                                            <p class="entry-content-accommo p-margin text-justify"><?php echo substr($room['short_description'], 0, 420) . '...'; ?></p>
                                                            <span class="accommo-span1">
                                                                <a href="view-accommodation.php?id=<?php echo $room["id"];?>"><button class="read-more btn-readmore1">Read More</button></a>
                                                            </span>
                                                            <span class="accommo-span2">
                                                                <a href="booking.php?type=<?php echo $room["id"];?>"><button class="read-more btn-readmore1">Book Now</button></a>
                                                            </span>
                                                        </div>                                              
                                                    </div>
                                                </div>
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

                <!-- Footer -->
                <?php
                include 'footer.php';
                ?>
                <!-- /Footer -->

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
        <script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false'></script>
        <script src="js/custom/_googlemap.js" type="text/javascript"></script>
        <script src="js/vendor/magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>

        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    </body>

</html>