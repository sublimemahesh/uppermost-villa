<section class="slider_wrap slider_fullwide slider_engine_revo slider_alias_revsliderHome1">
    <!-- REVOLUTION SLIDER -->
    <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container">
        <div id="rev_slider_4_1" class="rev_slider fullwidthabanner" data-version="5.1">
            <ul>
                <?php
                foreach ($sliders as $key=>$slider) {
                    ?>
                    <li data-index="rs-<?php echo $key; ?>" data-transition="fade" data-slotamount="default" data-easein="default" data-easeout="default" data-masterspeed="1000" data-thumb="images/slider1h1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-description="">
                        <img src="upload/slider/<?php echo $slider['image_name']; ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <div class="tp-caption Estate tp-resizeme" id="slide-8-layer-1" data-x="center" data-hoffset="" data-y="center" data-voffset="" data-width="['auto']" data-height="['auto']" data-transform_idle="o:1;" data-transform_in="opacity:0;s:2000;e:Power2.easeInOut;" data-transform_out="opacity:0;s:300;s:300;" data-start="1500" data-splitin="none" data-splitout="none" data-responsive_offset="on">
                            <div class="sc_property_wrap">
                                <div class="sc_property sc_property_style_property-6" data-interval="7176" data-slides-min-width="250">
                                    <div class="sc_property_item">
                                        <div class="sc_pr_h1">
                                            <div class="sc_pr_h2" style="padding: 41px 88px 0px; font-size: 20px">GET</div>
                                        </div>
                                        <div class="sc_pr_t1">
                                            <a>Amazing and Enthusiastic Experience</a> 
                                        </div>
                                        <div class="sc_pr_t2">WITH US</div>
                                        <div class="sc_pr_f1">
                                            <div class="sc_pr_f11">
                                                <div class="sc_pr_f111"><span>House for rent</span></div>
                                            </div>
                                            <div class="sc_pr_f12"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <?php
                }
                ?>

            </ul>
            <div class="tp-bannertimer tp-bottom"></div>
        </div>
    </div>
    <!-- END REVOLUTION SLIDER -->
</section>