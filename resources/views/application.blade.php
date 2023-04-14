@extends('layouts.frontend')

@section('page-content')
<!--Page Title-->
<section class="page-title">
    <div class="auto-container">
        <h1>Application</h1>
        <div class="bread-crumb">
            <ul class="">
                <li><a href="/">Home</a></li>
                <li>Job Application</li>
            </ul>
        </div>
    </div>
    <!--Go Down Button-->
    <div class="go-down">
        <div class="curve scroll-to-target" data-target="#sidebar-section"><span class="icon fa fa-arrow-down"></span></div>
    </div>
</section>

<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <!--Contact Section-->
                <div class="contact-section" id="contact-section">

                    <div class="auto-container">
                        <div class="row clearfix">
                            <div class="sec-title" style="text-align: center;">
                                <h2>Job Application Form</h2>
                            </div>
                            <!--Content Side-->
                            <div class="col-12 column">
                                <div class="form-box">
                                    <div role="form" class="wpcf7" id="wpcf7-f757-p370-o1" lang="en-US" dir="ltr">
                                        <div class="screen-reader-response">
                                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                                            <ul></ul>
                                        </div>
                                        <div id="contact-form" novalidate="novalidate">
                                            <div class="row clearfix">
                                                <div class="form-group col-xs-12">
                                                    <div class="field-label" style="font-size: 2rem;">Job Details</div>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                    <div class="field-label">Position Applied For *</div>
                                                    <input type="text" name="name" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" required>
                                                </div>
                                                <div class="form-group col-md-6 col-sm-12 col-xs-12">
                                                    <div class="field-label">Please indicate preferred working arrangements*</div>
                                                    <input type="checkbox" value="Full time"> &nbsp; Full time &nbsp; 
                                                    <input type="checkbox" value="Part time"> &nbsp; Part time &nbsp; 
                                                    <input type="checkbox" value="Job share"> &nbsp; Job share &nbsp; 
                                                </div>
                                                <div class="form-group col-xs-12">
                                                    <div class="field-label" style="font-size: 2rem;">Personal Details</div>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="field-label">Surname *</div>
                                                    <input type="number" name="phone" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-required="true" aria-invalid="false" required>
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <div class="field-label">First Name *</div>
                                                    <input type="text" name="subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" required>
                                                </div>
                                                <div class="form-group col-md-7 col-sm-12 col-xs-12">
                                                    <div class="field-label">Title (select as appropriate)*</div>
                                                    <input type="checkbox" value="Mr."> &nbsp; Mr. &nbsp; 
                                                    <input type="checkbox" value="Mrs."> &nbsp; Mrs. &nbsp; 
                                                    <input type="checkbox" value="Miss"> &nbsp; Miss &nbsp; 
                                                    <input type="checkbox" value="Ms"> &nbsp; Ms &nbsp; 
                                                    <input type="checkbox" value="Other"> &nbsp; Other &nbsp; 
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <div class="field-label">Preferred Name *</div>
                                                    <input type="text" name="subject" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <div class="field-label">Address*</div>
                                                    <textarea type="text" name="subject" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" required></textarea>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <div class="field-label">Email Address*</div>
                                                    <input type="text" name="subject" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <div class="field-label">Daytime Telephone Number*</div>
                                                    <input type="text" name="subject" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <div class="field-label">Mobile*</div>
                                                    <input type="text" name="subject" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <div class="field-label">Home*</div>
                                                    <input type="text" name="subject" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <div class="field-label">National Insurance Number*</div>
                                                    <input type="text" name="subject" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" required>
                                                </div>
                                                <div class="form-group col-md-12">
                                                    <div class="field-label">Do you require a work permit?</div>
                                                    <input type="checkbox" value="Yes"> &nbsp; Yes &nbsp; 
                                                    <input type="checkbox" value="No"> &nbsp; No &nbsp; 
                                                </div>
                                                <div class="form-group col-xs-12">
                                                    <div class="field-label" style="font-size: 2rem;">Employment History</div>
                                                    <p>Please list most recent first. Include permanent and temporary work, service with HM Forces, voluntary work and any work experience from leaving school (continue on a separate sheet as necessary)</p>
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
    </div>
</div>
@endsection