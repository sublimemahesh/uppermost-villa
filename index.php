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
        <link rel='stylesheet' href='css/style.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/_animation.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/shortcodes.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/skin.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/custom-style.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/colors.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/skin.responsive.css' type='text/css' media='all' />
        <link rel='stylesheet' href='js/vendor/swiper/swiper.css' type='text/css' media='all' />
        <link rel='stylesheet' href='css/custom/_messages.css' type='text/css' media='all' />

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
                                <div class="sc_property_search">
                                    <form method="get" action="#">
                                        <div class="sc_ps_status">
                                            <select name="ps_status">
                                                <option value="-1">Property Status</option>
                                                <option value="sale">For sale</option>
                                                <option value="rent">For rent</option>
                                            </select>
                                        </div>
                                        <div class="sc_ps_location">
                                            <select name="ps_location">
                                                <option value="-1">Property Location</option>
                                                <option value="Upper East Side">Upper East Side</option>
                                                <option value="Upper West Side">Upper West Side</option>
                                                <option value="Midtown East">Midtown East</option>
                                                <option value="Midtown West">Midtown West</option>
                                                <option value="Downtown">Downtown</option>
                                                <option value="Upper Manhattan">Upper Manhattan</option>
                                                <option value="Brooklyn">Brooklyn</option>
                                                <option value="Queens">Queens</option>
                                                <option value="Bronx">Bronx</option>
                                                <option value="Staten Island">Staten Island</option>
                                            </select>
                                        </div>
                                        <div class="sc_ps_type">
                                            <select name="ps_type">
                                                <option value="-1">Property Type</option>
                                                <option value="Cooperative">Cooperative</option>
                                                <option value="Condominium">Condominium</option>
                                                <option value="Cond-op">Cond-op</option>
                                                <option value="House">House</option>
                                                <option value="Investment">Investment</option>
                                                <option value="Commercial">Commercial</option>
                                                <option value="Professional / Medical">Professional / Medical</option>
                                                <option value="New Development">New Development</option>
                                                <option value="Townhouse">Townhouse</option>
                                                <option value="Vacant Lot / Land">Vacant Lot / Land</option>
                                            </select>
                                        </div>
                                        <div class="sc_ps_style">
                                            <select name="ps_style">
                                                <option value="-1">Property Style</option>
                                                <option value="Pre-war">Pre-war</option>
                                                <option value="Post-war">Post-war</option>
                                                <option value="Loft">Loft</option>
                                                <option value="Townhouse Apartment">Townhouse Apartment</option>
                                                <option value="Penthouse">Penthouse</option>
                                            </select>
                                        </div>
                                        <div class="sc_ps_bedrooms">
                                            <select name="ps_bedrooms">
                                                <option value="-1">Bedrooms</option>
                                                <option value="1">Bedrooms at least 1</option>
                                                <option value="2">Bedrooms at least 2</option>
                                                <option value="3">Bedrooms at least 3</option>
                                                <option value="4">Bedrooms at least 4</option>
                                                <option value="5">Bedrooms 5 or more</option>
                                            </select>
                                        </div>
                                        <div class="sc_ps_bathrooms">
                                            <select name="ps_bathrooms">
                                                <option value="-1">Bathrooms</option>
                                                <option value="1">Bathrooms at least 1</option>
                                                <option value="2">Bathrooms at least 2</option>
                                                <option value="3">Bathrooms at least 3</option>
                                                <option value="4">Bathrooms at least 4</option>
                                                <option value="5">Bathrooms 5 or more</option>
                                            </select>
                                        </div>
                                        <div class="sc_ps_area">
                                            <div class="ps_area ps_range_slider">
                                                <div class="ps_area_info">
                                                    <div class="ps_area_info_title">Area</div>
                                                    <div class="ps_area_info_value"></div>
                                                    <div class="cL"></div>
                                                </div>
                                                <div id="slider-range-area"></div>
                                                <input type="hidden" class="ps_area_min" name="ps_area_min" value="0">
                                                <input type="hidden" class="ps_area_max" name="ps_area_max" value="10000">
                                                <input type="hidden" class="ps_area_big" name="ps_area_big" value="10000">
                                            </div>
                                        </div>
                                        <div class="sc_ps_price">
                                            <div class="ps_price ps_range_slider">
                                                <div class="ps_price_info">
                                                    <div class="ps_price_info_title">Price</div>
                                                    <div class="ps_price_info_value"></div>
                                                    <div class="cL"></div>
                                                </div>
                                                <div id="slider-range-price"></div>
                                                <input type="hidden" class="ps_price_min" name="ps_price_min" value="0">
                                                <input type="hidden" class="ps_price_max" name="ps_price_max" value="10000000">
                                                <input type="hidden" class="ps_price_big" name="ps_price_big" value="10000000">
                                            </div>
                                        </div>
                                        <div class="sc_ps_submit">
                                            <input type="submit" class="sc_button sc_button_box sc_button_style_style2" value="Search">
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page_content_wrap page_paddings_no">
                    <div class="sc_section">
                        <div class="content_wrap">
                            <div class="columns_wrap margin_top_xlarge margin_bottom_xmedium">
                                <div class="column-1_2">
                                    <h2 class="sc_title sc_title_iconed ind2 margin_top_null margin_bottom_xmedium">
                                        <span class="sc_title_box">
                                            <a href="#">Welcome</a>
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
                    <div class="sc_section overflow_hidden bg_color_1">
                        <div class="content_wrap margin_top_large margin_bottom_medium">
                            <h4 class="sc_title margin_top_null margin_bottom_medium">recent properties</h4>
                            <div class="sc_property_wrap">
                                <div class="sc_property sc_property_style_property-1">
                                    <div class="sc_columns columns_wrap">
                                        <div class="column-1_3 column_padding_bottom">
                                            <div class="sc_property_item">
                                                <div class="sc_property_image">
                                                    <a href="single-post.html">
                                                        <div class="property_price_box"><span class="property_price_box_sign">$</span><span class="property_price_box_price">1,249,000</span></div>
                                                        <img alt="" src="images/image-7-1-770x460.jpg">
                                                    </a>
                                                </div>
                                                <div class="sc_property_info">
                                                    <div class="sc_property_description">House for sale</div>
                                                    <div>
                                                        <div class="sc_property_icon">
                                                            <span class="icon-location"></span>
                                                        </div>
                                                        <div class="sc_property_title">
                                                            <div class="sc_property_title_address_1">
                                                                <a href="single-post.html">87 Mishaum Point Rd</a> 
                                                            </div>
                                                            <div class="sc_property_title_address_2">Dartmouth, MA 02748</div>
                                                        </div>
                                                        <div class="cL"></div>
                                                    </div>
                                                </div>
                                                <div class="sc_property_info_list">
                                                    <span class="icon-building113">1,286 sqft</span><span class="icon-bed">2</span><span class="icon-bath">3</span><span class="icon-warehouse">2</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column-1_3 column_padding_bottom">
                                            <div class="sc_property_item">
                                                <div class="sc_property_image">
                                                    <a href="single-post.html">
                                                        <div class="property_price_box"><span class="property_price_box_sign">$</span><span class="property_price_box_price">2,189,000</span></div>
                                                        <img alt="" src="images/image-12-1-770x460.jpg">
                                                    </a>
                                                </div>
                                                <div class="sc_property_info">
                                                    <div class="sc_property_description">Townhouse for sale</div>
                                                    <div>
                                                        <div class="sc_property_icon">
                                                            <span class="icon-location"></span>
                                                        </div>
                                                        <div class="sc_property_title">
                                                            <div class="sc_property_title_address_1">
                                                                <a href="single-post.html">9615 Shore Rd APT BA</a> 
                                                            </div>
                                                            <div class="sc_property_title_address_2">Brooklyn, NY 11209</div>
                                                        </div>
                                                        <div class="cL"></div>
                                                    </div>
                                                </div>
                                                <div class="sc_property_info_list">
                                                    <span class="icon-building113">1,286 sqft</span><span class="icon-bed">2</span><span class="icon-bath">3</span><span class="icon-warehouse">3</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="column-1_3 column_padding_bottom">
                                            <div class="sc_property_item">
                                                <div class="sc_property_image">
                                                    <a href="single-post.html">
                                                        <div class="property_price_box"><span class="property_price_box_sign">$</span><span class="property_price_box_price">3,449</span><span class="property_price_box_per">/year</span></div>
                                                        <img alt="" src="images/image-11-1-770x460.jpg">
                                                    </a>
                                                </div>
                                                <div class="sc_property_info">
                                                    <div class="sc_property_description">House for rent</div>
                                                    <div>
                                                        <div class="sc_property_icon">
                                                            <span class="icon-location"></span>
                                                        </div>
                                                        <div class="sc_property_title">
                                                            <div class="sc_property_title_address_1">
                                                                <a href="single-post.html">80646 Via Pessaro</a> 
                                                            </div>
                                                            <div class="sc_property_title_address_2">La Quinta, CA 32453</div>
                                                        </div>
                                                        <div class="cL"></div>
                                                    </div>
                                                </div>
                                                <div class="sc_property_info_list">
                                                    <span class="icon-building113">886 sqft</span><span class="icon-bed">2</span><span class="icon-bath">3</span><span class="icon-warehouse">2</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sc_parallax" data-vc-parallax="1.5" data-vc-parallax-image="images/img_map.jpg">
                        <div class="content_wrap">
                            <div class="sc_section scheme_dark">
                                <div class="sc_section_inner">
                                    <div class="sc_services_wrap">
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
                    <div class="sc_section mobile-box back_image_1">
                        <div class="content_wrap">
                            <div class="bgtext1">
                                <p>MOBILE</p>
                            </div>
                            <div class="columns_wrap sc_columns">
                                <div class="column-1_2 sc_column_item">
                                    <h1 class="sc_title">Search Best Deals <b>on Go</b></h1>
                                    <div class="sc_section margin_bottom_medium section_style_1">
                                        <div class="sc_section_inner">
                                            <p>The European languages are members of the same family. Their separate existence is a myth. For science, music, sport, etc, Europe uses the same vocabulary.</p>
                                        </div>
                                    </div>
                                    <div class="sc_section">
                                        <div class="sc_section_inner">
                                            <figure class="sc_image alignleft margin_bottom_small">
                                                <a href="#"><img src="images/img_b1.png" alt="" /></a>
                                            </figure>
                                            <figure class="sc_image alignleft margin_bottom_large">
                                                <a href="#"><img src="images/img_b2.png" alt="" /></a>
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-1_2 sc_column_item">
                                    <figure class="sc_image customImgHome1"><img src="images/img_mobile.png" alt="" /></figure>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sc_section back_image_2">
                        <div class="sc_testimonials sc_testimonials_style_testimonials-2 sc_slider_swiper sc_slider_pagination sc_slider_pagination_bottom sc_slider_nocontrols scheme_dark" data-interval="7529" data-slides-min-width="250">
                            <div class="slides swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="sc_testimonial_item">
                                        <div class="sc_testimonial_content">
                                            <p>Thank your team for your hard work, advice, honesty and commitment to enable us to sell my mothers house.</p>
                                        </div>
                                        <div class="sc_testimonial_author">
                                            <a href="#" class="sc_testimonial_author_name">Irine Gosh</a>
                                            <br><span class="sc_testimonial_author_position">22 years</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="sc_testimonial_item">
                                        <div class="sc_testimonial_content">
                                            <p>Thank you so much for your good wishes and for your not insignificant part in our move. You are stars!</p>
                                        </div>
                                        <div class="sc_testimonial_author">
                                            <span class="sc_testimonial_author_name">Emma Bennett</span>
                                            <br><span class="sc_testimonial_author_position">40 years</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div  class="sc_testimonial_item">
                                        <div class="sc_testimonial_content">
                                            <p>You were superb from the start! We made the best decision. We wish the company well for the future.</p>
                                        </div>
                                        <div class="sc_testimonial_author">
                                            <a href="#" class="sc_testimonial_author_name">Logan Hughes</a>
                                            <br><span class="sc_testimonial_author_position">31 years</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sc_slider_controls_wrap">
                                <a class="sc_slider_prev" href="#"></a>
                                <a class="sc_slider_next" href="#"></a>
                            </div>
                            <div class="sc_slider_pagination_wrap"></div>
                        </div>
                    </div>
                </div>
                <div class="contacts_emailer_wrap">
                    <div class="content_wrap">
                        <div class="sc_emailer">
                            <div class="sc_emailer_title">Sign up for updates</div>
                            <div class="sc_emailer_content">
                                <form class="sc_emailer_form">
                                    <input type="text" class="sc_emailer_input" name="email" value="" placeholder="Please, enter you email address.">
                                    <a href="#" class="sc_emailer_button sc_button sc_button_box sc_button_style_style3" title="Submit">subscribe</a>
                                </form>
                            </div>
                            <div class="cL"></div>
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



    </body>
</html>