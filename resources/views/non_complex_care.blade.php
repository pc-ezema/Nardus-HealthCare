@extends('layouts.frontend')

@section('page-content')
<!--Page Title-->
<section class="page-title">
    <div class="auto-container">
        <h1> Our Residential Care Home</h1>
        <div class="bread-crumb">
            <ul class="">
                <li><a href="/">Home</a></li>
                <li>Non Complex Care</li>
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
            <!--Content Side-->
            <div class="content-side col-lg-12">
                <div class="vc_row wpb_row vc_row-fluid">
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner ">
                            <div class="wpb_wrapper">
                                <div class="sec-title no-underline" style="margin-top: 40px; text-align: left !important; padding-left: 1.5rem;">
                                    <h3>Address: 40 Holding Street Worksop S81 0ND</h3>
                                </div>
                                <!--Featured Three Column-->
                                <div class="container">
                                    <div class="box">
                                        <img src="images/non-complex-care/1.jpeg" alt="Non Complex Care">
                                    </div>
                                    <div class="box">
                                        <img src="images/non-complex-care/2.jpeg" alt="Non Complex Care">
                                    </div>
                                    <div class="box">
                                        <img src="images/non-complex-care/3.jpeg" alt="Non Complex Care">
                                    </div>
                                </div>
                                <div class="container">
                                    <div class="box">
                                        <img src="images/non-complex-care/4.jpeg" alt="Non Complex Care">
                                    </div>
                                    <div class="box">
                                        <img src="images/non-complex-care/5.jpeg" alt="Non Complex Care">
                                    </div>
                                    <div class="box">
                                        <img src="images/non-complex-care/6.jpeg" alt="Non Complex Care">
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

<style>
    .container {
        display: flex;
        width: 100%;
        padding: 4% 2%;
        box-sizing: border-box;
        height: auto;
    }

    .box {
        flex: 1;
        overflow: hidden;
        transition: .5s;
        margin: 0 2%;
        box-shadow: 0 20px 30px rgba(0, 0, 0, .1);
        line-height: 0;
    }

    .box>img {
        width: 200%;
        height: calc(100% - 10vh);
        object-fit: cover;
        transition: .5s;
    }

    .box>span {
        font-size: 3.8vh;
        display: block;
        text-align: center;
        height: 10vh;
        line-height: 2.6;
    }

    .box:hover {
        flex: 1 1 50%;
    }

    .box:hover>img {
        width: 100%;
        height: 100%;
    }
</style>
@endsection