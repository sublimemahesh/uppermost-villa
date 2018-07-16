<?php
include_once(dirname(__FILE__) . '/class/include.php');

$PHOTO_ALBUM = new PhotoAlbum(Null);
$photo_albums = $PHOTO_ALBUM->all();
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
        <link rel='stylesheet' href='js/vendor/booked/styles.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/fontello/css/fontello.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/_animation.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/shortcodes.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/skin.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/custom-style.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/colors.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/skin.responsive.css' type='text/css' media='all' />
        <!--<link rel='stylesheet' href='js/vendor/swiper/swiper.css' type='text/css' media='all' />-->
        <link rel='stylesheet' href='css/custom/_messages.css' type='text/css' media='all' />
        <!--<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">-->
        <link rel='stylesheet' href='js/vendor/revslider/settings.css' type='text/css' media='all' />
        <link href="plugins/fancybox-master/css/jquery.fancybox.min.css" rel="stylesheet" type="text/css"/>


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
                            <h1 class="page_title banner-title">Gallery</h1>
                            <div class="breadcrumbs banner-title">
                                <a class="breadcrumbs_item home" href="index.php">Home</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">Gallery</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/breadcrumbs-->

                <div class="page_content_wrap accommo-padding">
                    <div class="content_wrap">
                        <div class="content">
                            <div class="sc_property sc_property_style_property-1">
                                <div class="columns_wrap ">

                                    <?php
                                    foreach ($photo_albums as $photo_album) {
                                        ?>
                                        <div class="column-1_3 column_padding_bottom img-hover">
                                            <a href="upload/photo-album/<?php echo $photo_album['image_name'] ?>" data-fancybox="images">    
                                                 <div class="middle">
                                                    <i class="eg-icon-search"></i>
                                                </div>
                                                <img src="upload/photo-album/<?php echo $photo_album['image_name'] ?>" />
                                               
                                            </a>
                                        </div>

                                        <?php
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

        <script data-cfasync="false" src="cdn-cgi/scripts/f2bf09f8/cloudflare-static/email-decode.min.js"></script>
        <script type='text/javascript' src='js/vendor/jquery.js'></script>
        <script type='text/javascript' src='js/custom/plugins.js'></script>
        <script type='text/javascript' src='js/custom/messages.js'></script>
        <script type='text/javascript' src='js/vendor/jquery-migrate.min.js'></script>
        <script type='text/javascript' src='js/vendor/modernizr.min.js'></script>
        <script type='text/javascript' src='js/vendor/ui/jquery-ui.min.js'></script>
        <script type='text/javascript' src='js/vendor/superfish.js'></script>
        <script type='text/javascript' src='js/custom/_utils.js'></script>
        <script type='text/javascript' src='js/custom/_init.js'></script>
        <script type='text/javascript' src='js/custom/_shortcodes.js'></script>

        <script src="plugins/fancybox-master/js/jquery.fancybox.min.js" type="text/javascript"></script>


    </body>
</html>