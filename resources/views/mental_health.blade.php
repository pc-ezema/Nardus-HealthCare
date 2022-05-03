@extends('layouts.frontend')

@section('page-content')
<!--Page Title-->
<section class="page-title">
    <div class="auto-container">
        <h1> Mental Health</h1>
        <div class="bread-crumb">
            <ul class="">
                <li><a href="/">Home</a></li>
                <li>Mental Health</li>
            </ul>
        </div>
    </div>
    <!--Go Down Button-->
    <div class="go-down">
        <div class="curve scroll-to-target" data-target="#sidebar-section"><span class="icon fa fa-arrow-down"></span></div>
    </div>
</section>

<!--Sidebar Page-->
<div class="sidebar-section no-bg" id="sidebar-section">
    <div class="auto-container">
        <div class="row clearfix">

            <!-- sidebar area -->

            <!--Content Side-->
            <div class="content-side  col-lg-12 col-md-12 col-sm-12 col-xs-12 ">

                <!--Default Section-->
                <section class="blog-section">
                    <!--Blog Post-->
                    <!-- blog post item -->
                    <div class="vc_row wpb_row vc_row-fluid">
                        <div class="wpb_column vc_column_container vc_col-sm-12">
                            <div class="vc_column-inner ">
                                <div class="wpb_wrapper">
                                    <!--Desc Box-->
                                    <div class="desc-box">
                                        <div class="auto-container">
                                            <div class="sec-title no-underline">
                                                <h3>WE CARE ABOUT OUR SERVICE USERS</h3>
                                                <h2>OUR OUTSTANDING SERVICES</h2>
                                                <p> </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="sidebar-section" class="vc_row wpb_row vc_row-fluid sidebar-section">
                        <div class="container">
                            <div class="wpb_column vc_column_container vc_col-sm-9">
                                <div class="vc_column-inner ">
                                    <div class="wpb_wrapper">
                                        <!--Content Side-->
                                        <div class="content-side">

                                            <section class="service-details">
                                                <figure class="full-image"><a href="#"><img src="../wp-content/uploads/2018/09/outreach.jpg" alt=""></a></figure>
                                                <div class="content-outer">
                                                    <h2>Mental Health</h2>
                                                    <p>{{ config('app.name') }} is a specialist provider of mental health support services, with an impressive track record in delivering high quality support.</p>
                                                    <p>We understand that finding the right support or care provider can be a daunting task, and we aim to make this as simple as possible.</p>
                                                    <h3>Our Mission</h3>
                                                    <p>Through the recovery focussed approach, we encourage and support people with mental health needs to take control of their own lives as much as they can.</p>
                                                    <h3>Our Approach</h3>
                                                    <p>We specialise in providing recovery focussed support to people with complex mental health support needs, including people with a history of misusing substances and/or alcohol or have been a part of the criminal justice system.<br />
                                                        We have staff experienced in supporting people with a range of mental health support needs including:</p>
                                                    <ul>
                                                        <li>Behaviours that challenge including self-harm</li>
                                                        <li>Schizophrenia</li>
                                                        <li>Bi polar effective disorder</li>
                                                        <li>Severe depression</li>
                                                        <li>Severe anxiety</li>
                                                        <li>Drug induced psychosis</li>
                                                    </ul>
                                                    <p></p>

                                                    <br>

                                                    <div class="row clearfix">
                                                        <div class="col-md-7 col-sm-6 col-xs-12">
                                                            <h3>Services</h3>
                                                            <p>We provide services that promote recovery and help people to develop skills that enable them to liveas independently as possible.<br />
                                                                We offer the following mental health services:</p>
                                                            <ul>
                                                                <li>Supported Living</li>
                                                                <li>Individual Support Service – supporting people within their own home and/or to access community</li>
                                                            </ul>
                                                            <p>We are registered with the Care Quality Commission (CQC).</p>
                                                            <p></p>
                                                        </div>

                                                        <div class="col-md-5 col-sm-6 col-xs-12">
                                                            <figure class="image"><img src="#" class="img-responsive" alt=""></figure>
                                                        </div>
                                                    </div>
                                                </div>

                                            </section>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div itemscope itemtype="https://schema.org/Comment" id="comments" class="post-comments comment-area clearfix">


                        <!-- Comment Form -->
                        <div class="comment-form wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <!-- Heading -->

                        </div>
                    </div><!-- #comments -->
                    <!-- end comments -->

                    <!--Pagination-->
                    <div class="pager-outer clearfix">
                        <div class="pagination text-right">
                        </div>
                    </div>
                </section>
            </div>
            <!--Content Side-->

            <!--Sidebar-->
            <!-- sidebar area -->
            <!--Sidebar-->
        </div>
    </div>
</div>
@endsection