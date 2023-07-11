@extends('layouts.frontend')

@section('page-content')
<!--Page Title-->
<section class="page-title" style="background-image:url('../index/wp-content/uploads/2019/01/page-title-1.jpg');">
    <div class="auto-container">
        <h1>About Us</h1>
        <div class="bread-crumb">
            <ul class="">
                <li><a href="/">Home</a></li>
                <li>About us</li>
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
                <!--Desc Box-->
                <div class="desc-box">
                    <div class="auto-container">
                        <div class="sec-title no-underline">
                            <h3>Our Philosophy of Care </h3>
                            <h2>VISION, VALUES &amp; MISSION</h2>
                            <p> </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="vc_row wpb_row vc_row-fluid">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <!--About Section-->
                <section class="about-section" id="about-section">

                    <!--Lower Content-->
                    <div class="lower-content" style="background-image:url('../wp-content/uploads/2017/02/1.jpg');">
                        <div class="auto-container">
                            <div class="content-box">
                                <div class="row clearfix">

                                    <!--Column-->
                                    <div class="col-md-7  col-sm-7 col-xs-12 column">
                                        <h2 class="main-title"></h2>
                                        <p>Introducing {{config('app.name')}}: Your Specialist Provider for Complex Care Packages
                                            Are you in need of a reliable and expert provider for complex care packages? Look no further than {{config('app.name')}}. 
                                            Our nurse-led service is here to cater to your unique needs, ensuring top-quality care and support every step of the way. 
                                            As proud holders of both CQC registration for personal care and nursing care, we guarantee exceptional service in the treatment of various diseases, disorders, and injuries.</p>
                                        <p>At {{config('app.name')}}, we are dedicated to assisting individuals with a wide range of health conditions. From learning disabilities and autism to mental health issues, acquired brain injuries, and complex physical health problems, we are equipped to handle diverse care requirements. 
                                            Our compassionate support workers have undergone extensive training to efficiently perform delegated health tasks, ensuring the highest standards of care.</p>
                                        <p>Currently, we are in the process of obtaining CQC registration for our specialist residential and nursing homes in Nottinghamshire. 
                                            With 18 bed residential homes and 2 bed nursing homes, we provide tailored support to individuals within the comfort of their own homes. 
                                            Our knowledgeable and skilled staff are readily available to deliver the care and assistance you or your loved ones need.</p>
                                        <p>Leading our clinical governance is an esteemed professional with a wealth of experience. 
                                            Having held prominent roles such as ward manager and clinical quality lead in both NHS and private secure hospitals, she possesses invaluable expertise. 
                                            Her comprehensive background includes Discharge to Assess (D2A) and reablement, Safeguarding Adults, leadership and team management, complex case management encompassing CHC, 
                                            mental health, and learning disabilities, quality monitoring, complaints handling and investigation, serious incident investigations, transition planning, service transformation, 
                                            quality improvement, working age adults and older adults mental health services, crisis and risk management, and conducting internal audits and clinical reviews to ensure impeccable care and governance arrangements.</p>
                                        <p>Choose {{config('app.name')}} for your complex care needs, and experience the dedication and professionalism that sets us apart. We are committed to providing exceptional care, tailored to your unique circumstances. Contact us today to learn more about our services and how we can assist you.</p>
                                        <h3>Value Statements</h3>
                                        <p>The following value statements, which guide {{ config('app.name') }}’s mission, are an expression of the vision and intent of our founders.</p>
                                        <ul class="styled-list">
                                            <li>To focus on clients by providing person centred care to meet the meets of all clients.</li>
                                            <li>To provide personal care and support in a ways which have positive outcomes for clients and promote their active participation. </li>
                                            <li>To seek to ensure that the core Principles of Good Care are fundamental to {{config('app.name')}}</li>
                                            <li>To promote dignity, respect and offer choice.</li>
                                            <li>To ensure we are fit for our purpose.</li>
                                            <li>To examine our operations constantly through a self-audit to ensure that we are successfully achieving our stated aims and purposes. </li>
                                            <li>To work for the comprehensive welfare of our Clients.</li>
                                            <li>To provide for each Client a package of care that contributes to his/her overall personal and healthcare needs and preferences. </li>
                                            <li>To co-operate with other services and professionals to help to maximise each Clients independence and to ensure as fully as possible the Clients maximum participation in the community. </li>
                                        </ul>
                                    </div>

                                    <!--Column-->
                                    <div class="col-md-5  col-sm-5 col-xs-12 column">

                                        <article class="featured-box">
                                            <figure class="image"><a href="#"><img src="../wp-content/uploads/2016/10/gallery-image-1-1.jpg" alt=""></a></figure>
                                            <h2>Our Mission</h2>
                                            <div class="text">
                                                <p>The business mission is to maximise growth, productivity and profit whilst:</p>
                                                <ul class="styled-list">
                                                    <li>Assisting those in need of care to live as comfortably and as securely as possible.</li>
                                                    <li>Actively encouraging the independence of all customers.</li>
                                                    <li>Always providing the highest standards of care.</li>
                                                    <li>Maintaining highly competitive and sensible fees.</li>
                                                    <li>To deliver professional and compassionate high-quality person-centered care services.</li>
                                                    <li>To deliver services within safe, suitable and beneficial environments.</li>
                                                    <li>To foster a positive working environment that attracts, develops and retains, highly committed, motivated personnel. </li>
                                                    <li>To consistently operate on the basis of honesty, fairness and transparency for the mutual benefit of our customers, staff and stakeholders.</li>
                                                </ul>
                                            </div>
                                            <div class="more-link"><a href="#" class="read-more"><span class="fa fa-caret-right"></span> </a></div>
                                        </article>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
</div>
@endsection