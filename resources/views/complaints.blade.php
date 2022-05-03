@extends('layouts.frontend')

@section('page-content')
<!--Page Title-->
<section class="page-title">
    <div class="auto-container">
        <h1> Complaints</h1>
        <div class="bread-crumb">
            <ul class="">
                <li><a href="/">Home</a></li>
                <li>Complaints</li>
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
                    <h3>Complaints  &amp; Compliments</h3>
                    <p>{{ config('app.name') }} aims to deliver affordable, safe and effective care services that people want and would like service users, family and other informal carers, our staff and other professionals to tell us what you think of our service.Thus, it is the company’s policy to welcome comments, complaints and compliments and to look upon them as an opportunity to learn, adapt, improve and provide better services. We are also happy to receive any complaint and compliments in whatever manner the person deems fit (i.e. verbally or in written form). We keep a full written record of the nature and details of each compliment.</p>
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