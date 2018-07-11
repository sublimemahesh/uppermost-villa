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
        <link href="booking-form/style.css" rel="stylesheet" type="text/css"/>
        <link href="css/contact-form.css" rel="stylesheet" type="text/css"/>

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
                            <h1 class="page_title banner-title">Booking</h1>
                            <div class="breadcrumbs banner-title">
                                <a class="breadcrumbs_item home" href="index.php">Home</a>
                                <span class="breadcrumbs_delimiter"></span>
                                <span class="breadcrumbs_item current">Booking</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/breadcrumbs-->
                <div class="page_content_wrap page_paddings_top content-booking">
                    <div class="sc_section overflow_hidden">
                        <div class="content_wrap margin_bottom_xlarge">
                            <div class="columns_wrap">
                                <div class="clearfix">
                                    <div class="row form-group">
                                        <div class="column-1_2">
                                            <label>Your Name</label>
                                            <input type="text" name="txtFullName" class="form-control input-validater" id="txtFullName" value="" placeholder="Your Name">
                                            <span id="spanFullName"></span>
                                        </div>
                                        <div class="column-1_2">
                                            <label>Your Email</label>
                                            <input type="text" name="txtEmail" id="txtEmail" class="form-control input-validater" value="" placeholder="Your Email">
                                            <span id="spanEmail"></span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="column-1_2">
                                            <label>Your Country</label>
                                            <input type="text" name="txtCountry" class="form-control input-validater" id="txtCountry" value="" placeholder="Your Country">
                                            <span id="spanCountry"></span>
                                        </div>
                                        <div class="column-1_2"> 
                                            <label>Your Contact Number</label>
                                            <input type="text" name="txtPhone" id="txtPhone" class="form-control input-validater" value="" placeholder="Your Contact Number">
                                            <span id="spanPhone"></span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="column-1_2">
                                            <label>Arrival Date</label>
                                            <input type="text" name="txtArrival" id="datepicker" placeholder="Select date">
                                            <span id="spanArrival"></span>
                                        </div>
                                        <div class="column-1_2">
                                            <label>Departure Date</label>
                                            <input type="text" name="txtDeparture" id="datepicker1" placeholder="Select date"> 
                                            <span id="spanDeparture"></span>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="column-1_1">
                                            <label>Your Message</label>
                                            <textarea name="txtMessage" id="txtMessage" class="form-control input-validater" placeholder="Your Message"></textarea>
                                            <!--<span id="spanMessage"></span>-->
                                        </div>
                                    </div>
                                </div>

                                <div class="row form-group">
                                    <div class="column-1_4">
                                        <label for="comment" id="form-label">Security Code:</label>
                                        <input type="text" name="captchacode" id="captchacode" class="form-control input-validater" placeholder="Enter the security code >> ">
                                        <span id="capspan" ></span>
                                    </div>
                                    <div class="column-1_4">
                                        <label></label>
                                        <span><?php include("./booking-form/captchacode-widget.php"); ?></span>
                                    </div>
                                    <div class="column-1_4 btn-booking">
                                        <label></label>
                                        <button type="submit" id="btnSubmit" class="btn btn-primary btn-lg">SUBMIT NOW</button>
                                    </div>
                                </div>
                                <div class="col-xs-6 col-sm-3">
                                    <div class="col-sm-4">
                                        <div class="div-check" >
                                            <img src="booking-form/img/checking.gif" id="checking"/>
                                        </div>
                                    </div>
                                </div>


                                <div id="dismessage" align="center"></div>

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
        <script src="booking-form/scripts.js" type="text/javascript"></script>

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
    </body>

</html>