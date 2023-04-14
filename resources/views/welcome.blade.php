@extends('layouts.frontend')

@section('page-content')
<div class="vc_row wpb_row vc_row-fluid main-slider">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <!-- START Home REVOLUTION SLIDER 6.2.1 -->
                <p class="rs-p-wp-fix"></p>
                <rs-module-wrap id="rev_slider_1_1_wrapper" data-source="gallery" style="background:transparent;padding:0;margin:0px auto;margin-top:0;margin-bottom:0;">
                    <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.2.1">
                        <rs-slides>
                            <rs-slide data-key="rs-1" data-title="Slide" data-thumb="//serenityinmind.co.uk/wp-content/uploads/2019/01/slide2-100x50.jpg" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
                                <img src="{{URL::asset('wp-content/uploads/2019/01/slide2.jpg')}}" title="Home Style One" class="rev-slidebg" data-no-retina>
                                <rs-layer id="slider-1-slide-1-layer-1" data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;y:c;yo:-149px;" data-text="l:22;" data-frame_0="y:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:500;sp:1500;sR:500;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:7000;" style="z-index:5;">
                                    <h2 style="line-height: 0px !important;">MORE THAN JUST <br>A CARERR IN CARE</h2>
                                </rs-layer>
                                <rs-layer class="layer" id="slider-1-slide-1-layer-3" data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;xo:-98px;y:c;" data-text="l:22;" data-frame_0="x:-100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:500;sp:1500;sR:500;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:7000;" style="z-index:7;">
                                    <div class="link-box"><a href="/contact" class="default-btn theme-btn">Contact Us Now</a></div>
                                </rs-layer>
                                <rs-layer class="layer" id="slider-1-slide-1-layer-4" data-type="text" data-color="rgba(255, 255, 255, 1)" data-rsp_ch="on" data-xy="x:c;xo:100px;y:c;" data-text="l:22;" data-frame_0="x:100%;o:1;tp:600;" data-frame_0_mask="u:t;" data-frame_1="tp:600;st:500;sp:1500;sR:500;" data-frame_1_mask="u:t;" data-frame_999="o:0;tp:600;e:nothing;st:w;sR:7000;" style="z-index:8;">
                                <div class="link-box"><a href="/about" class="default-btn theme-btn">Find Out More</a></div>
                                </rs-layer>
                            </rs-slide>
                        </rs-slides>
                        <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
                    </rs-module>
                    <script type="text/javascript">
                        setREVStartSize({
                            c: 'rev_slider_1_1',
                            rl: [1240, 1024, 778, 480],
                            el: [],
                            gw: [1200],
                            gh: [780],
                            type: 'standard',
                            justify: '',
                            layout: 'fullwidth',
                            mh: "0"
                        });
                        var revapi1,
                            tpj;
                        jQuery(function() {
                            tpj = jQuery;
                            if (tpj("#rev_slider_1_1").revolution == undefined) {
                                revslider_showDoubleJqueryError("#rev_slider_1_1");
                            } else {
                                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                                    jsFileLocation: "///wp-content/plugins/revslider/public/assets/js/",
                                    sliderLayout: "fullwidth",
                                    visibilityLevels: "1240,1024,778,480",
                                    gridwidth: 1200,
                                    gridheight: 780,
                                    spinner: "spinner0",
                                    responsiveLevels: "1240,1024,778,480",
                                    disableProgressBar: "on",
                                    navigation: {
                                        mouseScrollNavigation: false,
                                        onHoverStop: false,
                                        arrows: {
                                            enable: true,
                                            tmp: "<div class=\"tp-arr-allwrapper\">	<div class=\"tp-arr-imgholder\"></div>	<div class=\"tp-arr-titleholder\"></div>	</div>",
                                            style: "hermes",
                                            left: {
                                                h_offset: 0
                                            },
                                            right: {
                                                h_offset: 0
                                            }
                                        }
                                    },
                                    fallbacks: {
                                        allowHTML5AutoPlayOnAndroid: true
                                    },
                                });r56f
                            }

                        });
                    </script>
                </rs-module-wrap>
                <!-- END REVOLUTION SLIDER -->
            </div>
            
        </div>
    </div>
</div>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="sec-title no-underline" style="margin-top: 40px;">
                    <h2>Our services</h2>
                    <p> </p>
                </div>
                <!--Featured Three Column-->
                <section class="featured-three-column ">
                    <div class="auto-container">
                        <div class="row clearfix">
                            <!--Column-->
                            <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <article class="inner-box">
                                    <div class="content">
                                        <h3>Personal Care</h3>
                                    </div>
                                </article>
                            </div>
                            <!--Column-->
                            <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <article class="inner-box">
                                    <div class="content">
                                        <h3>Children Care (0-18years)</h3>
                                    </div>
                                </article>
                            </div>
                            <!--Column-->
                            <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <article class="inner-box">
                                    <div class="content">
                                        <h3>Dementia</h3>
                                    </div>
                                </article>
                            </div>
                            <!--Column-->
                            <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <article class="inner-box">
                                    <div class="content">
                                        <h3>Eating Disorders</h3>
                                    </div>
                                </article>
                            </div>
                            <!--Column-->
                            <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <article class="inner-box">
                                    <div class="content">
                                        <h3>Physical Disabilities</h3>
                                    </div>
                                </article>
                            </div>
                            <!--Column-->
                            <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <article class="inner-box">
                                    <div class="content">
                                        <h3>Sensory Impairments</h3>
                                    </div>
                                </article>
                            </div>
                            <!--Column-->
                            <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <article class="inner-box">
                                    <div class="content">
                                        <h3>Mental Health <br>Conditions</h3>
                                    </div>
                                </article>
                            </div>
                             <!--Column-->
                             <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <article class="inner-box">
                                    <div class="content">
                                        <h3>Treatment of Disease, Disorder or Injury</h3>
                                    </div>
                                </article>
                            </div>
                            <!--Column-->
                            <div class="col-md-4 col-sm-6 col-xs-12 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                <article class="inner-box">
                                    <div class="content">
                                        <h3>Adults Care Over/Under 65years</h3>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <!--Why Us Section-->
                <section class="why-us-section">

                    <div class="bg-grey"></div>
                    <div class="bg-image" style="background-image:url('wp-content/uploads/2016/10/6-1.jpg');"></div>

                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="col-md-6 col-sm-6 col-xs-12 content-column">
                                <article class="inner-box">
                                    <div class="sec-title style-two style-three">
                                        <h3 class="text-left">Why Choose Us?</h3>
                                        <h2 class="text-left">The Reasons That You Should Contact Us</h2>
                                        <div class="line"></div>
                                    </div>
                                    <div class="block">
                                        <div class="number wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">1</div>
                                        <h4></h4>
                                        <p>We consistently operate on the basis of honesty, fairness and transparency for the mutual benefit of our customers.
                                        </p>
                                    </div>
                                    <div class="block">
                                        <div class="number wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">2</div>
                                        <h4></h4>
                                        <p>We focus on clients by providing person centred care to meet the meets of all clients.</p>
                                    </div>
                                    <div class="block">
                                        <div class="number wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">3</div>
                                        <h4></h4>
                                        <p>We foster a positive working environment that attracts, develops and retains, highly committed, motivated personnel. 
                                        </p>
                                    </div>
                                    <div class="block">
                                        <div class="number wow rollIn" data-wow-delay="0ms" data-wow-duration="1500ms">4</div>
                                        <h4></h4>
                                        <p>We ensure we are fit for our purpose. </p>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <!--Parallax Section-->
                <section class="parallax-section" style="background-image:url(wp-content/uploads/2016/10/image-3.jpg);">
                    <div class="auto-container">
                        <div class="text-center wow fadeInUp" data-wow-delay="250ms" data-wow-duration="1500ms">
                            <h2>Assisting those in need of care to live as comfortably and as securely as possible</h2>
                            <div class="line"></div>
                            <a class="theme-btn default-btn" href="/contact">REACH OUT TO US</a>
                            <a class="theme-btn normal-btn" href="/contact">Tel: +44 7496 353714</a>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>

<style>
   @media(max-width: 991px) {
        .layer {
            display: none !important;
        }
    }
</style>
@endsection