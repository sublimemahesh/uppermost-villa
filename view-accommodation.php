<?php
include_once(dirname(__FILE__) . '/class/include.php');

$id = '';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

$ROOM = new Room($id);

$rooms = $ROOM->all();
?>

<!DOCTYPE html>
<html lang="en-US" class="scheme_original">

    <head>

        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        <link rel="icon" type="image/x-icon" href="images/favicon.png" />
        <title>Uppermost Villa - <?php echo $ROOM->title; ?></title>
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
        <link href="js/vendor/booked/booked.css" rel="stylesheet" type="text/css"/>
        <link href="css/custom/instagram-widget.css" rel="stylesheet" type="text/css"/>
        <link href="js/vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>
        <link href="plugins/galleria/themes/classic/galleria.classic.css" rel="stylesheet" type="text/css"/>

        <style>
            .galleria-slider {
                border: solid 1px #AFAFAF;
                box-shadow: 0px 0px 4px #6F6F6F;
                margin-bottom: 20px;
            }
            .galleria-slider .galleria-stage {
                background: #000 !important;
            }
        </style>




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
                            <h1 class="page_title banner-title"><?php echo $ROOM->title; ?></h1>
                            <div class="breadcrumbs banner-title">
                                <a class="breadcrumbs_item home" href="./">Home</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <a class="breadcrumbs_item home" href="accommodations.php">Accommodations</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current"><?php echo $ROOM->title; ?></span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/breadcrumbs-->

                <div class="page_content_wrap accommo-padding">
                    <div class="content_wrap">
                        <div class="content">
                            <section class="post_featured">
                                <div class="post_thumb image-view">
                                    <div id="room_photos" class="galleria-slider  ">

                                        <?php
                                        $photos = RoomPhoto::getRoomPhotosById($ROOM->id);
                                        foreach ($photos as $photo) {
                                            
                                            ?>
                                            <a href="upload/room/gallery/<?php echo $photo['image_name']; ?>">
                                                <img src="upload/room/gallery/thumb/<?php echo $photo['image_name']; ?>" data-title="" >
                                            </a>
                                            <?php
                                        }
                                        ?>

                                    </div> 
                                </div>
                            </section>
                            <section class="post_content">
                                <h3 class="post_title"><?php echo $ROOM->title; ?></h3>
                                <div class="ps_single_info">                                   
                                    <div class="property_price_box property-price-box1">
                                        <span class="property_price_box_sign">$</span>
                                        <span class="property_price_box_price"><?php echo $ROOM->price; ?></span>
                                        <span class="price-day"> / Day</span></div>
                                    <div class="sc_property_info_list">
                                        <span class="icon-bed"></span>
                                        <span class="icon-bath"></span>
                                        <span class="fa fa-wifi"></span>
                                        <span class="fa fa-tv"></span> 
                                    </div>
                                    <div class="cL"></div>
                                </div>
                                <div class="sc_section">
                                    <p class="text-justify text-bottom"><?php echo $ROOM->description; ?></p>                 
                                </div>
                            </section>
                        </div>
                    </div>
                </div>

                <div class="custom_shortcode_box">
                    <div class="content_wrap">
                        <h4 class="sc_title">More Accommodations</h4>
                        <div class="sc_property_wrap">
                            <div class="sc_property sc_property_style_property-1 " data-interval="5446" data-slides-per-view="3">
                                <div class="sc_columns columns_wrap">

                                    <?php
                                    foreach ($rooms as $key => $room) {
                                        if ($key < 3) {
                                            ?>
                                            <div class="column-1_3 column_padding_bottom">
                                                <div class="sc_property_item">
                                                    <div class="sc_property_image">
                                                        <a href="">
                                                            <div class="property_price_box">
                                                                <span class="property_price_box_price"><?php echo "$", $room['price'] ?></span>
                                                            </div>
                                                            <img alt="" src="upload/room/<?php echo $room['image_name'] ?>">
                                                        </a>
                                                    </div>
                                                    <div class="sc_property_info">
                                                        <div>
                                                            <div class="sc_property_title">
                                                                <div class="sc_property_title_address_1">
                                                                    <a href="#"><?php
                                                                        if (strlen($room['title']) > 25) {
                                                                            echo substr($room['title'], 0, 23) . '...';
                                                                        } else {
                                                                            echo $room['title'];
                                                                        }
                                                                        ?></a> 
                                                                </div>
                                                                <div class="text-justify accommo-property-content"><?php echo substr($room['short_description'], 0, 150) . '...'; ?></div>
                                                            </div>
                                                            <div class="cL"></div>
                                                        </div>
                                                    </div>
                                                    <div class="sc_property_info_list">
                                                        <span class="icon-bed"></span>
                                                        <span class="icon-bath"></span>
                                                        <span class="fa fa-wifi"></span>

                                                        <a href="view-accommodation.php?id=<?php echo $room["id"]; ?>"><button class="read-more accommo-readmore">Read More</button></a>

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

                <!-- Footer -->
                <?php
                include 'footer.php';
                ?>
                <!-- /Footer -->

            </div>
        </div>
        <a href="#" class="scroll_to_top icon-up"></a>
        <script src="plugins/galleria/jquery.1.12.4.min.js" type="text/javascript"></script>
        <script data-cfasync="false" src="cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script>
        <!--<script type='text/javascript' src='js/vendor/jquery.js'></script>-->
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
        <script src="js/vendor/magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
<!--        <script src="plugins/sliderengine/amazingslider.js" type="text/javascript"></script>
        <script src="plugins/sliderengine/initslider-1.js" type="text/javascript"></script>-->

        <script src="plugins/galleria/galleria.js" type="text/javascript"></script>
        <script src="plugins/galleria/galleria.classic.min.js" type="text/javascript"></script>


        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

        <script type="text/javascript">
            $('#room_photos').galleria({
                responsive: true,
                height: 500,
                autoplay: 7000,
                lightbox: true,
                showInfo: true,

                //                imageCrop: true,
            });
        </script>
    </body>

</html>