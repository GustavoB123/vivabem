@extends('layout.layout')

@section('title', 'Home')

@section('conteudo')




{{-- SEÇÃO DO BMI + SERVIÇOS --}}
<div class="service-bg2-area" data-bg-src="assets/img/bg/service-bg2.png">
        <!--==============================
        BMI Area
        ==============================-->
        <div class="bmi-area-1 space">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-5">
                        <div class="title-area mb-30">
                            <span class="sub-title">TEST YOUR BMI</span>
                            <h2 class="sec-title text-white fw-semibold">BODY MASS INDEX</h2>
                            <p class="sec-text">BMI is a widely used tool for assessing body weight relative to height. It can provide a general indication of whether an individual falls within a healthy weight range.</p>
                        </div>
                        <div class="bmi-table mb-lg-0 mb-40">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">BMI</th>
                                        <th scope="col">WEIGHT STATUS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">Below 18.5</th>
                                        <td>Weight Status</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">18.5 - 24.9</th>
                                        <td>Healthy</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">25.0 - 29.9</th>
                                        <td>Overwight</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">30.0 - Above</th>
                                        <td>Obese</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-6 align-self-end">
                        <div class="bmi-calculator-form">
                            <h4 class="form-title">Book Your Seat:</h4>
                            <form class="bmi-form" id="form" name="bmiCalc">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input for="weight" class="form-control style-border" placeholder="Weight / KG" type="text" name="weight">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input for="height" class="form-control style-border" placeholder="Height / CM" type="text" name="height">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="number" class="form-control style-border" name="age" id="age" placeholder="Age">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control style-border" name="sex" id="sex" placeholder="Sex">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input for="bmi_result" class="form-control style-border" placeholder="Your BMI" type="text" name="bmi">
                                </div>
                                <div class="form-group">
                                    <input for="bmi_message" placeholder="This Means" class="form-control style-border" type="text" name="meaning">
                                </div>
                                <div class="btn style3">
                                    <input type="button" value="Calculate BMI" onClick="calculateBMI()">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--==============================
        Service Area 01
        ==============================-->
        <div class="service-area-1 space-bottom overflow-hidden">
            <div class="container">
                <div class="title-area">
                    <span class="sub-title">Our Features</span>
                    <h2 class="sec-title text-white fw-semibold">SERVICES WE'RE OFFERING</h2>
                </div>
            </div>
            <div class="container-fluid p-0">
                <div class="row global-carousel service-slider-1 style2" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false">
                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{asset('img/icon/service-icon_1-1.svg')}}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Tons of Equipment</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{asset('img/icon/service-icon_1-2.svg')}}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Rows of Cardio</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{asset('img/icon/service-icon_1-3.svg')}}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Heart Pumping</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{asset('img/icon/service-icon_1-4.svg')}}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Strength Training</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{asset('img/icon/service-icon_1-1.svg')}}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Tons of Equipment</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{asset('img/icon/service-icon_1-2.svg')}}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Rows of Cardio</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{asset('img/icon/service-icon_1-3.svg')}}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Heart Pumping</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="service-card">
                            <div class="service-card_icon">
                                <img src="{{asset('img/icon/service-icon_1-4.svg')}}" alt="img">
                            </div>
                            <div class="service-card_content">
                                <h4 class="service-card_title h5"><a href="service-details.html">Strength Training</a></h4>
                                <p class="service-card_text">Lacinia montes est odio tpor volutpat rhoncus quisque sagittis</p>
                                <a href="service-details.html" class="link-btn" tabindex="0">Read More <i class="fas fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
{{-- ---------------------- --}}

{{-- SEÇÃO DE CONTAGEM DAS PORCENTAGENS --}}
<div class="counter-area-3 space">

    <div class="container">

        <div class="row gy-4">

            <div class="col-sm-6 col-lg-3">

                <div class="counter-card style3" data-bg-src="{{asset('img/bg/counter-card-bg.png')}}">

                    <div class="media-body">

                        <div class="counter-circle">

                            <div class="progressbar">

                                <div class="circle" data-percent="75">

                                    <div class="circle-num">75%</div>

                                </div>

                            </div>

                        </div>

                        <p class="counter-card_text">QUALITY SERVICE</p>

                    </div>

                </div>

            </div>

            <div class="col-sm-6 col-lg-3">

                <div class="counter-card style3" data-bg-src="{{asset('img/bg/counter-card-bg.png')}}">

                    <div class="media-body">

                        <div class="counter-circle">

                            <div class="progressbar">

                                <div class="circle" data-percent="55">

                                    <div class="circle-num">55%</div>

                                </div>

                            </div>

                        </div>

                        <p class="counter-card_text">SKILLED MEMBERS</p>

                    </div>

                </div>

            </div>

            <div class="col-sm-6 col-lg-3">

                <div class="counter-card style3" data-bg-src="{{asset('img/bg/counter-card-bg.png')}}">

                    <div class="media-body">

                        <div class="counter-circle">

                            <div class="progressbar">

                                <div class="circle" data-percent="85">

                                    <div class="circle-num">85%</div>

                                </div>

                            </div>

                        </div>

                        <p class="counter-card_text">HAPPY CUSTOMERS</p>

                    </div>

                </div>

            </div>

            <div class="col-sm-6 col-lg-3">

                <div class="counter-card style3" data-bg-src="{{asset('img/bg/counter-card-bg.png')}}">

                    <div class="media-body">

                        <div class="counter-circle">

                            <div class="progressbar">

                                <div class="circle" data-percent="35">

                                    <div class="circle-num">35%</div>

                                </div>

                            </div>

                        </div>

                        <p class="counter-card_text">PROJECT FAILS</p>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>
{{-- -------------------- --}}

{{-- SEÇÃO FEATURE (CARACTERÍSTICAS) --}}
<div class="feature-area-2 space text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <div class="title-area">
                    <span class="sub-title style2">Our Features</span>
                    <h2 class="sec-title fw-bold">WELCOME TO OUR GYM & FITNESS STUDIO</h2>
                </div>
            </div>
        </div>
        <div class="row gy-40">
            <div class="col-lg-4">
                <div class="feature-card2">
                    <div class="feature-card_img">
                        <img src="{{asset('img/normal/feature_1-1.png')}}" alt="img">
                        <a href="service-details.html" class="feature-card_icon">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <h4 class="feature-card_title"><a href="service-details.html">No Long Term Contract</a></h4>
                    <p class="feature-card_text">We are proud to offer a gym membership with no long-term contract.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-card2">
                    <div class="feature-card_img">
                        <img src="{{asset('img/normal/feature_1-2.png')}}" alt="img">
                        <a href="service-details.html" class="feature-card_icon">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <h4 class="feature-card_title"><a href="service-details.html">Best Gym Equipment</a></h4>
                    <p class="feature-card_text">We are proud to offer a gym membership with no long-term contract.</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="feature-card2">
                    <div class="feature-card_img">
                        <img src="{{asset('img/normal/feature_1-3.png')}}" alt="img">
                        <a href="service-details.html" class="feature-card_icon">
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                    <h4 class="feature-card_title"><a href="service-details.html">Your Dedicated Gym App</a></h4>
                    <p class="feature-card_text">We are proud to offer a gym membership with no long-term contract.</p>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- -------------------- --}}

{{-- SEÇÃO SOBRE --}}
<div class="space" data-bg-src="{{asset('img/bg/about3-bg.png')}}">

    <div class="container">

        <div class="row gy-80">

            <div class="col-xl-6 order-xl-2">

                <div class="about-thumb-2">
                    <img class="about-img-1" src="{{asset('img/normal/about_3-1.png')}}" alt="img">
                    <div class="about-thumb-num">
                        01
                    </div>
                </div>

            </div>

            <div class="col-xl-6 order-xl-1">

                <div class="about-content-wrap me-xl-4 mb-xl-0 mb-40">

                    <div class="title-area mb-0">

                        <span class="sub-title style2">OUR BENEFITS</span>
                        <h2 class="sec-title fw-bold text-white">Unlock Your Potential, Unleash Your Greatness</h2>
                        <p class="sec-text mb-10">Define your specific bodybuilding goals. Determine what you want to achieve in terms of muscle size, strength, and overall physique. Set realistic and measurable goals that will guide your training and nutrition plan. Implement progressive overload principles in your training.</p>
                        <a class="btn style3" href="about.html">LEARN MORE</a>

                    </div>

                </div>

            </div>

            <div class="col-xl-6 order-xl-3">

                <div class="about-thumb-2 style2">

                    <img class="about-img-1" src="{{asset('img/normal/about_3-2.png')}}" alt="img">

                    <div class="about-thumb-num">
                        02
                    </div>

                </div>

            </div>

            <div class="col-xl-6 order-xl-4">

                <div class="about-content-wrap ms-xl-4">

                    <div class="title-area mb-0">

                        <span class="sub-title style2">Students BENEFITS</span>
                        <h2 class="sec-title fw-bold text-white">GET 50% OFF ON YOUR FIRST GYM PLAN</h2>
                        <p class="sec-text mb-10">Pay attention to your nutrition and consume a well-balanced diet that supports muscle growth and recovery. Focus on consuming sufficient protein to provide the building blocks for muscle repair and growth.</p>

                        <div class="checklist">

                            <h6 class="checklist-title text-white fw-semibold">Fitmas Special Services:</h6>

                            <div class="row">

                                <div class="col-sm-6">
                                    <ul>
                                        <li><i class="far fa-circle-check"></i>Emergency Solutions Anytime</li>
                                        <li><i class="far fa-circle-check"></i>Affordable price upto 2 years</li>
                                    </ul>
                                </div>

                                <div class="col-sm-6">
                                    <ul>
                                        <li><i class="far fa-circle-check"></i>Emergency Solutions Anytime</li>
                                        <li><i class="far fa-circle-check"></i>Reliable & Experienced Team</li>
                                    </ul>

                                </div>

                            </div>

                        </div>

                        <a class="btn style3" href="about.html">MAKE AN APPOINTMENT</a>
                    </div>

                </div>

            </div>

        </div>

    </div>

    {{-- <div class="sec-shape2-bottom">
        <img src="{{asset('img/bg/sec-shape2-top.png')}}" alt="img">
    </div> --}}

</div>
{{-- -------------------- --}}

{{-- SEÇÃO DE PORTFOLIO --}}
<div class="portfolio-area-2 space-top" data-bg-src="{{asset('img/bg/portfolio-bg-2.png')}}">
    <div class="container">
        <div class="title-area">
            <h3 class="sub-title style2">Our Features</h3>
            <h2 class="sec-title fw-bold text-white">PHOTOS FROM GALLERY</h2>
        </div>
    </div>
    <div class="container-fluid px-15">
        <div class="row global-carousel portfolio-slider2" data-slide-show="4" data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-sm-slide-show="1" data-arrows="false">
            <div class="col-md-6 col-xl-4">
                <div class="project-card">
                    <div class="project-img">
                        <img src="{{asset('img/project/project2_1.png')}}" alt="project image">
                    </div>
                    <div class="project-content">
                        <h6 class="project-subtitle">Premier Logistics</h6>
                        <h4 class="project-title"><a href="project-details.html" tabindex="-1">Door To Fast Parcel</a></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="project-card style2">
                    <div class="project-img">
                        <img src="{{asset('img/project/project2_2.png')}}" alt="project image">
                    </div>
                    <div class="project-content">
                        <h6 class="project-subtitle">Premier Logistics</h6>
                        <h4 class="project-title"><a href="project-details.html" tabindex="-1">Door To Fast Parcel</a></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="project-card style2">
                    <div class="project-img">
                        <img src="{{asset('img/project/project2_3.png')}}" alt="project image">
                    </div>
                    <div class="project-content">
                        <h6 class="project-subtitle">Premier Logistics</h6>
                        <h4 class="project-title"><a href="project-details.html" tabindex="-1">Door To Fast Parcel</a></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="project-card style2">
                    <div class="project-img">
                        <img src="{{asset('img/project/project2_4.png')}}" alt="project image">
                    </div>
                    <div class="project-content">
                        <h6 class="project-subtitle">Premier Logistics</h6>
                        <h4 class="project-title"><a href="project-details.html" tabindex="-1">Door To Fast Parcel</a></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="project-card">
                    <div class="project-img">
                        <img src="{{asset('img/project/project2_1.png')}}" alt="project image">
                    </div>
                    <div class="project-content">
                        <h6 class="project-subtitle">Premier Logistics</h6>
                        <h4 class="project-title"><a href="project-details.html" tabindex="-1">Door To Fast Parcel</a></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="project-card style2">
                    <div class="project-img">
                        <img src="{{asset('img/project/project2_2.png')}}" alt="project image">
                    </div>
                    <div class="project-content">
                        <h6 class="project-subtitle">Premier Logistics</h6>
                        <h4 class="project-title"><a href="project-details.html" tabindex="-1">Door To Fast Parcel</a></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="project-card style2">
                    <div class="project-img">
                        <img src="{{asset('img/project/project2_3.png')}}" alt="project image">
                    </div>
                    <div class="project-content">
                        <h6 class="project-subtitle">Premier Logistics</h6>
                        <h4 class="project-title"><a href="project-details.html" tabindex="-1">Door To Fast Parcel</a></h4>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-xl-4">
                <div class="project-card style2">
                    <div class="project-img">
                        <img src="{{asset('img/project/project2_4.png')}}" alt="project image">
                    </div>
                    <div class="project-content">
                        <h6 class="project-subtitle">Premier Logistics</h6>
                        <h4 class="project-title"><a href="project-details.html" tabindex="-1">Door To Fast Parcel</a></h4>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
{{-- -------------------- --}}

{{-- SEÇÃO DE PORTFOLIO --}}
<div class="contact-area">
    <div class="container">
        <div class="contact-card style2">
            <div class="info-card">
                <div class="info-card_icon">
                    <i class="fas fa-location-dot"></i>
                </div>
                <div class="info-card_content">
                    <p class="info-card_text">Gym Location</p>
                    <a href="https://www.google.com/maps" class="info-card_link">Marina Lane Berlin</a>
                </div>
            </div>
            <div class="info-card style2" data-bg-src="assets/img/bg/contact-card-bg.png">
                <h6 class="info-card_title">
                    Follow Us Now
                </h6>
                <div class="info-card_content">
                    <div class="social-btn">
                        <a href="https://twitter.com/" tabindex="0"><i class="fab fa-twitter"></i></a>
                        <a href="https://linkedin.com/" tabindex="0"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.discord.com/" tabindex="0"><i class="fab fa-discord"></i></a>
                    </div>
                </div>
            </div>
            <div class="info-card">
                <div class="info-card_icon">
                    <i class="fas fa-phone-volume"></i>
                </div>
                <div class="info-card_content">
                    <p class="info-card_text">Phone Number</p>
                    <a href="tel:+18925382145" class="info-card_link">(+189) 2538-2145</a>
                </div>
            </div>
        </div>
    </div>
</div>

{{-- SEÇÃO DA LOCALIZAÇÃO (MAPA GOOGLE) --}}
<div class="map-sec">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.7310056272386!2d89.2286059153658!3d24.00527418490799!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe9b97badc6151%3A0x30b048c9fb2129bc!2s!5e0!3m2!1sen!2sbd!4v1651028958211!5m2!1sen!2sbd" allowfullscreen="" loading="lazy"></iframe>
</div>
{{-- -------------------- --}}



@endsection
