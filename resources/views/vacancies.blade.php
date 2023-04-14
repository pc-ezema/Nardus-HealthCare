@extends('layouts.frontend')

@section('page-content')
<!--Page Title-->
<section class="page-title">
    <div class="auto-container">
        <h1> Vacancies</h1>
        <div class="bread-crumb">
            <ul class="">
                <li><a href="/">Home</a></li>
                <li>Our current vacancies</li>
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
                                    <h2>Latest Vacancies</h2>
                                </div>
                                <!--Featured Three Column-->
                                <section class="featured-three-column ">
                                    <div class="auto-container">
                                        <div class="row clearfix">
                                            <!--Column-->
                                            <div class="col-md-6 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                                <article class="inner-box">
                                                    <div class="content">
                                                        <h3>Care Home Manager - Worksop</h3>
                                                    </div>
                                                    <!-- <div class="text">
                                                        <p>{{ config('app.name') }} is a specialist provider of learning disability services&#8230;</p>
                                                    </div> -->
                                                    <div class="link"><a href="#" data-toggle="modal" data-target="#open-model"  class="read-more normal-btn theme-btn"><span class="fa fa-caret-right"></span> APPLY</a></div>
                                                </article>
                                            </div>
                                            <!--Column-->
                                            <div class="col-md-6 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                                <article class="inner-box">
                                                    <div class="content">
                                                        <h3>Administrator - Worksop</h3>
                                                    </div>
                                                    <!-- <div class="text">
                                                        <p>{{ config('app.name') }} is a specialist provider of learning disability services&#8230;</p>
                                                    </div> -->
                                                    <div class="link"><a href="#" data-toggle="modal" data-target="#open-model"  class="read-more normal-btn theme-btn"><span class="fa fa-caret-right"></span> APPLY</a></div>
                                                </article>
                                            </div>
                                            <!--Column-->
                                            <div class="col-md-6 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                                <article class="inner-box">
                                                    <div class="content">
                                                        <h3>Support Worker - Worksop</h3>
                                                    </div>
                                                    <!-- <div class="text">
                                                        <p>{{ config('app.name') }} is a specialist provider of learning disability services&#8230;</p>
                                                    </div> -->
                                                    <div class="link"><a href="#" data-toggle="modal" data-target="#open-model"  class="read-more normal-btn theme-btn"><span class="fa fa-caret-right"></span> APPLY</a></div>
                                                </article>
                                            </div>
                                            <!--Column-->
                                            <div class="col-md-6 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                                <article class="inner-box">
                                                    <div class="content">
                                                        <h3>Healthcare Assistant - Staffordshire</h3>
                                                    </div>
                                                    <!-- <div class="text">
                                                        <p>{{ config('app.name') }} is a specialist provider of learning disability services&#8230;</p>
                                                    </div> -->
                                                    <div class="link"><a href="#" data-toggle="modal" data-target="#open-model"  class="read-more normal-btn theme-btn"><span class="fa fa-caret-right"></span> APPLY</a></div>
                                                </article>
                                            </div>
                                            <!--Column-->
                                            <div class="col-md-6 column wow fadeInLeft" data-wow-delay="200ms" data-wow-duration="1500ms">
                                                <article class="inner-box">
                                                    <div class="content">
                                                        <h3>Healthcare Assistant - Northampton</h3>
                                                    </div>
                                                    <!-- <div class="text">
                                                        <p>{{ config('app.name') }} is a specialist provider of learning disability services&#8230;</p>
                                                    </div> -->
                                                    <div class="link"><a href="#" data-toggle="modal" data-target="#open-model" class="read-more normal-btn theme-btn"><span class="fa fa-caret-right"></span> APPLY</a></div>
                                                </article>
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
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="open-model" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="font-size: 2rem; color: #000; font-weight: 700;">Application Process</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="font-size: 2rem; color: #000;">Kindly download the application form below, fill and submit to recruitment@nardushealthcare.co.uk</p>
        <a download="Application Form Nardus Healthcare" href="{{ Storage::url('Application Form Nardus Healthcare.doc') }}" title="Application Form Nardus Healthcare" style="font-size: 1.5rem;">Click to download application form</a>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>


<style>
    .inner-box {
        align-items: center;
        border: 1px solid #593202;
        border-left: 10px solid #593202;
        border-radius: 4px;
        padding: 30px;
        padding-left: 25px;
        background: #fff !important;
    }

    .inner-box .content {
        display: grid;
        grid-template-columns: 1fr;
        grid-gap: 35px;
    }

    .inner-box .content h3 {
        color: #000 !important;
    }
</style>
@endsection