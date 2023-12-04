@extends('layout.layout')

@section('title', 'Treinos')

@section('conteudo')

<div class="breadcumb-wrapper" data-bg-src="{{ asset ('img/bg/fundoTreino2.png') }}">
    <!-- bg animated image/ -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcumb-content">
                    <h1 class="breadcumb-title">Treinos</h1>
                    <ul class="breadcumb-menu">
                        <li><a href="{{url('/home')}}">HOME</a></li>
                        <li class="active"><a href="{{ url ('/treino') }}">TREINOS</a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="pricing-area space">
    <div class="container">
        <div class="title-area text-center">
            <h3 class="sub-title"> Preço Dos Planos</h3>
            <h2 class="sec-title">Nossos Preços</h2>
        </div>
        <div class="row gy-4 justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="{{asset('img/bg/pricing-card1-bg.png')}}" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="{{asset('img/icon/picing-icon_1-1.svg')}}" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Plano Básico</h3>
                    <h4 class="pricing-card_price"><span class="currency">R$</span>19<span class="duration">/month</span>
                    </h4>
                    <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 trainings</li>
                            <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                            <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                            <li><i class="far fa-check-circle"></i>Free parking</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Choose This Plan</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card pricing-card_active">
                    <div class="pricing-card_bg">
                        <img src="{{ asset ('img/bg/pricing-card1-bg.png') }}" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="{{ asset ('img/icon/picing-icon_1-2.svg') }}" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Plano Standard</h3>
                    <h4 class="pricing-card_price"><span class="currency">$</span>39<span class="duration">/month</span>
                    </h4>
                    <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 trainings</li>
                            <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                            <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                            <li><i class="far fa-check-circle"></i>Free parking</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Choose This Plan</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="pricing-card">
                    <div class="pricing-card_bg">
                        <img src="{{ asset ('img/bg/pricing-card1-bg.png')}}" alt="img">
                    </div>
                    <div class="pricing-card_icon">
                        <img src="{{ asset ('img/icon/picing-icon_1-3.svg') }}" alt="img">
                    </div>
                    <h3 class="pricing-card_title">Plano Gold</h3>
                    <h4 class="pricing-card_price"><span class="currency">R$</span>199,99<span class="duration">/month</span>
                    </h4>
                    <p class="pricing-card_content">This category typically offers access to the gym's facilities and equipment. </p>
                    <div class="checklist">
                        <ul>
                            <li><i class="far fa-check-circle"></i>12 trainings</li>
                            <li><i class="far fa-check-circle"></i>Free shower & lockers</li>
                            <li><i class="far fa-check-circle"></i>Personal yoga mat</li>
                            <li><i class="far fa-check-circle"></i>Free parking</li>
                        </ul>
                    </div>
                    <a class="btn style2" href="pricing.html">Choose This Plan</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="blog-area space">
    <div class="container">
        <div class="title-area text-center">
            <span class="sub-title">Blog Posts
            </span>
            <h2 class="sec-title">Read Our Latest Articles</h2>
        </div>
        <div class="row global-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2" data-sm-slide-show="1" data-xs-slide-show="1" data-dots="false" data-md-dots="true">
            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('img/blog/blog_1_1.png')}}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{asset('img/blog/blog_card1_bg.png')}}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Nutrition Tips and Advice for Gym Goers</a></h3>
                        <p class="blog-text">These specialized memberships are designed to make fitness accessible and affordable for these specific...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('img/blog/blog_1_2.png')}}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="^{{asset('img/blog/blog_card1_bg.png')}}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Uncover Your True Potential at Fitmas</a></h3>
                        <p class="blog-text">If you're visiting the area or want to bring a friend along for a workout, we offer day passes and guest passes...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('img/blog/blog_1_3.png')}}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{asset('img/blog/blog_card1_bg.png')}}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Offer discounted options for students seniors</a></h3>
                        <p class="blog-text">We understand the importance of fitness for the whole family. Our family option allows multiple family...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('img/blog/blog_1_1.png')}}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{asset('img/blog/blog_card1_bg.png')}}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Nutrition Tips and Advice for Gym Goers</a></h3>
                        <p class="blog-text">These specialized memberships are designed to make fitness accessible and affordable for these specific...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('img/blog/blog_1_2.png')}}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{asset('img/blog/blog_card1_bg.png')}}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Uncover Your True Potential at Fitmas</a></h3>
                        <p class="blog-text">If you're visiting the area or want to bring a friend along for a workout, we offer day passes and guest passes...</p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="blog-card">
                    <div class="blog-img">
                        <img src="{{asset('img/blog/blog_1_3.png')}}" alt="blog image">
                    </div>
                    <div class="blog-content" data-bg-src="{{asset('img/blog/blog_card1_bg.png')}}">
                        <div class="blog-meta">
                            <a href="blog.html"><i class="fal fa-calendar"></i>15 Dec 2023</a>
                            <a href="blog.html"><i class="far fa-user"></i>by Andrew</a>
                        </div>
                        <h3 class="blog-title box-title"><a href="blog-details.html">Offer discounted options for students seniors</a></h3>
                        <p class="blog-text">We understand the importance of fitness for the whole family. Our family option allows multiple family...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
