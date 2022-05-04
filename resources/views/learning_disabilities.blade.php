@extends('layouts.frontend')

@section('page-content')
<!--Page Title-->
<section class="page-title">
    <div class="auto-container">
        <h1> Learning Disabilities</h1>
        <div class="bread-crumb">
            <ul class="">
                <li><a href="/">Home</a></li>
                <li>Learning Disabilities</li>
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
                                                <figure class="full-image"><a href="#"><img src="../wp-content/uploads/2019/01/learning.jpg" alt=""></a></figure>
                                                <div class="content-outer">
                                                    <h2>Learning Disabilities</h2>
                                                    <p>{{ config('app.name') }} is a specialist provider of learning disability services, established since May, 2021, with an impressive track record in delivering high quality support. We understand that finding the right support or care provider can be a daunting task, and we aim to make this as simple as possible.</p>
                                                    <p>Our mission is that by delivering a range of flexible care and support services we will ensure people with learning disabilities are as independent as possible and connected with their local communities.</p>
                                                    <h3>Our Approach</h3>
                                                    <p>Our staff are highly trained and we specialise in supporting people with complex and challenging needs, including:</p>
                                                    <ul>
                                                        <li>Autism and Asperger’s Syndrome</li>
                                                        <li>Downs Syndrome</li>
                                                        <li>Dementia</li>
                                                        <li>Communication support needs</li>
                                                        <li>Sensory and physical support needs (e.g. mobility support needs)</li>
                                                        <li>Drugs and alcohol abuse</li>
                                                        <li>Dual diagnosis - people with learning disability who have additional mental illness, behavioural difficulties</li>
                                                    </ul>
                                                    <p>We encourage the people we support to develop the skills to live safely and more independently, making decisions about how they want to live their lives.<br />
                                                    </p>

                                                    <br>

                                                    <div class="row clearfix">
                                                        <div class="col-md-7 col-sm-6 col-xs-12">
                                                            <h3>Services</h3>
                                                            <p>We offer the following learning disability services:</p>
                                                            <ul>
                                                                <li>Supported Living</li>
                                                                <li>Domiciliary Care delivered within your own home</li>
                                                                <li>Respite services and short breaks</li>
                                                                <li>Individual Support Service – supporting people within their own homes and to access the community</li>
                                                                <li>Registered Residential Care Services<br />
                                                                    We are setting up enhanced social care (high intensity service) for high-risk individuals with specific accommodation requirements to move from a hospital setting or other institutional settings back to accommodation within Leicester city, Leicestershire and Rutland areas. This will support people who have complex and varied needs.</li>
                                                                <li>Step-Down Service<br />
                                                                    {{ config('app.name') }} seeks to make a significant contribution to the Transforming Care Programme. The aim is to reduce unnecessary admissions and to give people the support they need to remain independent. {{ config('app.name') }} aims to work with Clinical Commissioning Groups (CCG), and Adult Social Care Services using national best practice, to improve the “step down” support and community provisions available for Service users after they are well enough to move out of secure inpatient mental health and Learning Disability Units</li>
                                                            </ul>
                                                            <p>Following our experience working with a wide range of stakeholders including the local community, service users, carers, clinicians and partners, we have recently developed some services to empower service users to take much more control over their own care and treatment and . Our new services in South Wigston and Leicester City (is set to commence soon) will help people with learning disability and mental health problems receive the right care, in the right place at the right time by supporting their recovery in the community.</p>
                                                            <p>Our step-down facilities will provide a move-on pathway for service users by adjusting their support levels until they are ready to make the transition to living in the community with floating support. They have been designed to provide a modern and homely feel and will enable good quality and access to care for service users. The services will also feature a Structured Community Support Service which will independence. This can be in the form of employment, welfare or housing-related support or enabling individuals to access local community services, such as volunteering or training opportunities.</p>
                                                            <p>We are registered with the Care Quality Commission (CQC). You may visit CQC website where you can read review information and compliments about our services.</p>
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