@extends('frontend.layout.master')
@section('title')
    Index - Looms Fashion
@endsection

@section('content')
    	<!-- Main Section -->
        <section class="main-slider">
            <div class="main-slider-carousel owl-carousel owl-theme">
                @foreach ($slider as $item)
                <div class="slide">
                    <!-- Ct Dot Animated -->
                    <div class="ct-dot-animated">
                        <div class="ct-dot-container">
                            <div class="ct-dot-item">
                                <span></span>
                            </div>
                            <div class="ct-dot-item">
                                <span></span>
                            </div>
                            <div class="ct-dot-item">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <!-- End Ct Dot Animated -->
                    <div class="image-layer" style="background-image: url({{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}})"></div>
                    <div class="auto-container">
                        
                        <!-- Content Column -->
                        <div class="content-box">
                            <div class="box-inner">
                                <div class="vector-icon-three" style="background-image: url(frontend/assets/images/main-slider/vector-3.png)"></div>
                               
                                <div class="title">{{$item->title}}</div>
                                <h1>{{$item->subtitle}}</h1>
                             
                            </div>
                        </div>
                        
                    </div>
                </div>
                @endforeach
                <!-- Slide One -->
             
                <!-- End Slide One -->
                
  
                
            </div>
            
        </section>
        <!-- End Main Section -->
        
        <!-- Featured Section -->
        <section class="featured-section">
            <div class="vector-layer" style="background-image: url(frontend/assets/images/icons/vector-1.png)"></div>
            <div class="vector-layer-two" style="background-image: url(frontend/assets/images/icons/feature.png)"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="row clearfix">
                    
                        <!-- Feature Block -->
                        <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon flaticon-fast"></div>
                                    <h2>Free Shipping</h2>
                                    <div class="text">Free shipping over $100</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Feature Block -->
                        <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon flaticon-padlock"></div>
                                    <h2>Payment Secure</h2>
                                    <div class="text">Got 100% Payment Safe</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Feature Block -->
                        <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon flaticon-headphones-1"></div>
                                    <h2>Support 24/7</h2>
                                    <div class="text">Top quialty 24/7 Support</div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Feature Block -->
                        <div class="feature-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="content">
                                    <div class="icon flaticon-wallet"></div>
                                    <h2>100% Money Back</h2>
                                    <div class="text">Cutomers Money Backs</div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- End Featured Section -->
        
        <!-- Shop By Category Section -->
        <section class="shopby-category-section">
            <div class="auto-container">
                <div class="sec-title">
                    <h2><span>Choose </span> from Category !</h2>
                </div>
                <div class="shopby-category owl-carousel owl-theme">				
                    <!-- Shop category -->
                    @foreach ($category as $item)
                  
                    <div class="shop-category">
                        <div class="category-image">
                            <a class="text-center" href="shop.html">
                                <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="24short-img">
                                <span class="category-title">{{$item->name}}</span>
                            </a>
                        </div>
                    </div>
      
                    @endforeach
            </div>
            </div>
        </section>	
        <!-- End Shop By Category Section -->
    
        <!-- Products Section -->
        <section class="products-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <h2><span>Populer</span> Designers For You !</h2>
                </div>
                <div class="four-item-carousel owl-carousel owl-theme">
                    @foreach ($designer as $item)
                    <div class="shop-item">
                        <div class="inner-box">
                            <div class="image">
                                <a href="shop-detail.html"><img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="24short-img"></a>
                                
                              
                            </div>
                            <div class="lower-content">
                        
                                <h6><a href="shop-detail.html">{{$item->name}}</a></h6>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="price">{{$item->min_price}} -  {{$item->max_price}}</div>
                 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    @endforeach
                    <!-- Shop Item -->
                 
      
                    
                </div>
            </div>
        </section>
        <!-- End Products Section -->
        
        <!-- Brand Section -->
   
        <!-- End Brand Section -->
        
        <!-- Sale Section -->
     {{--  <section class="sale-section">
            <div class="auto-container">
                <div class="row clearfix">
                
                    <!-- Sale Block -->
                    <div class="sale-block col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="sale-box">
                                SALE
                                <span>30<i>% OFF</i></span>
                            </div>
                            <div class="image d-flex justify-content-between align-items-center">
                                <img src="assets/images/resource/shop-1.jpg" alt="24short-img">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="off">Get 30% off</div>
                                        <h5><a href="shop-detail.html">Be together in the moment <br> with 24Shot calling</a></h5>
                                        <a class="buy-now" href="shop-detail.html">buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Sale Block -->
                    <div class="sale-block col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="inner-box">
                            <div class="sale-box">
                                SALE
                                <span>30<i>% OFF</i></span>
                            </div>
                            <div class="image d-flex justify-content-between align-items-center">
                                <img src="assets/images/resource/shop-2.jpg" alt="24short-img">
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="off">Get 30% off</div>
                                        <h5><a href="shop-detail.html">Be together in the moment <br> with 24Shot calling</a></h5>
                                        <a class="buy-now" href="shop-detail.html">buy now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>--}} 
        <!-- End Sale Section -->
        
        <!-- Products Section Two -->
        <section class="products-section-two">
            <div class="bottom-white-border"></div>
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title centered">
                    <h2><span>Populer</span> Designers For You !</h2>
                </div>
                <div class="inner-container">
                    <div class="single-item-carousel owl-carousel owl-theme">
                        
                        <!-- Slide -->
                        <div class="slide">
                            <div class="row clearfix">
                            @foreach ($designer as $key=>$item)
                                      <!-- Product Block Four -->
                                      <div class="product-block-four col-lg-3 col-md-6 col-sm-6">
                                        <div class="inner-box d-flex justify-content-between align-items-center flex-wrap">
                                            <div class="image">
                                                <span class="number">{{++$key}}</span>
                                                <img src="{{asset('frontend')}}/assets/images/resource/product-1.png" alt="24short-img">
                                            </div>
                                            <div class="content">
                                                <h6><a href="shop-detail.html">{{$item->name}}</a></h6>
                                                <div class="total-products">(312 Product)</div>
                                            </div>
                                        </div>
                                    </div>
                                    
                            @endforeach
                          
                               
                                
                            </div>
                        </div>
                        
 
                        
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Products Section Two -->
        
        <!-- Counter Section -->

        
        <!-- Products Section Three -->
        <section class="products-section-three">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <h2><span>Products </span> your choich !</h2>
                </div>
                
                <!-- MixitUp Galery -->
                <div class="mixitup-gallery">
                    
                    <!-- Filter -->
                    <div class="filters">
                        <ul class="filter-tabs">
                            <li class="active filter" data-role="button" data-filter="all">Trending</li>
                            @foreach ($category as $item)
                            <li class="filter" data-role="button" data-filter=".{{$item->id}}">{{$item->name}}</li>
                            @endforeach
                           
                            
                        </ul>
                    </div>
                    
                    <div class="filter-list row clearfix">
                        
                        @foreach ($product as $item)
                        <div class="shop-item mix music {{$item->id}} col-lg-3 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <div class="image">
                                    <a href="shop-detail.html"><img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt="24short-img"></a>
                                    <span class="tag flaticon-heart"></span>
                                    
                                </div>
                                <div class="lower-content">
                              
                                    <h6><a href="shop-detail.html">{{$item->name}}</a></h6>
                                    <b>{{$item->designer->name}}</b>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="price">{{$item->price}} </div>
                                        <!-- Quantity Box -->
                                        <div class="quantity-box">
                                
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- Shop Item -->
                      
           
                        
          
                        
                    </div>
                    
                    <!-- Button Box -->
                    <div class="button-box text-center">
                        <a href="shop.html" class="theme-btn btn-style-one">
                            Shop Now <span class="icon flaticon-right-arrow"></span>
                        </a>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End Products Section Three -->
        
        <!-- Sponsors Section -->
        <section class="sponsors-section">
            <div class="auto-container">
                <div class="inner-container">
                    <div class="sponsors-outer">
                        <!-- Sponsors Carousel -->
                        <ul class="sponsors-carousel owl-carousel owl-theme">
                            @foreach ($partner as $item)
                            <li class="slide-item"><figure class="image-box"><a href="#"><img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}" alt=""></a></figure></li>
                            @endforeach
                           
                 
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Sponsors Section -->
        
        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title">
                    <h2><span>Latest </span> News Offer !</h2>
                </div>
                <div class="news-carousel owl-carousel owl-theme">
                
                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image">
                                <div class="tag">bedroom</div>
                                <a href="blog-detail.html"><img src="{{asset('frontend')}}/assets/images/resource/news-1.jpg" alt="24short-img"></a>
                            </div>
                            <div class="lower-content">
                                <div class="author">
                                    <img src="{{asset('frontend')}}/assets/images/resource/author-1.jpg" alt="24short-img">
                                </div>
                                <h5><a href="blog-detail.html">10 Simple Products That Will Help You</a></h5>
                                <div class="info">By: <span>Jhone Wely</span> <i>Sep 23,2023</i></div>
                                <a href="blog-detail.html" class="theme-btn btn-style-one">
                                    View More <span class="icon flaticon-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image">
                                <div class="tag">bedroom</div>
                                <a href="blog-detail.html"><img src="{{asset('frontend')}}/assets/images/resource/news-2.jpg" alt="24short-img"></a>
                            </div>
                            <div class="lower-content">
                                <div class="author">
                                    <img src="{{asset('frontend')}}/assets/images/resource/author-1.jpg" alt="24short-img">
                                </div>
                                <h5><a href="blog-detail.html">10 Simple Fashion Products Include Marketed</a></h5>
                                <div class="info">By: <span>Jhone Wely</span> <i>Sep 23,2023</i></div>
                                <a href="blog-detail.html" class="theme-btn btn-style-one">
                                    View More <span class="icon flaticon-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image">
                                <div class="tag">bedroom</div>
                                <a href="blog-detail.html"><img src="{{asset('frontend')}}/assets/images/resource/news-3.jpg" alt="24short-img"></a>
                            </div>
                            <div class="lower-content">
                                <div class="author">
                                    <img src="{{asset('frontend')}}/assets/images/resource/author-1.jpg" alt="24short-img">
                                </div>
                                <h5><a href="blog-detail.html">Fashion Products Include Marketed Fast</a></h5>
                                <div class="info">By: <span>Jhone Wiely</span> <i>Sep 23,2023</i></div>
                                <a href="blog-detail.html" class="theme-btn btn-style-one">
                                    View More <span class="icon flaticon-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- News Block -->
                    <div class="news-block">
                        <div class="inner-box">
                            <div class="image">
                                <div class="tag">bedroom</div>
                                <a href="blog-detail.html"><img src="{{asset('frontend')}}/assets/images/resource/news-4.jpg" alt="24short-img"></a>
                            </div>
                            <div class="lower-content">
                                <div class="author">
                                    <img src="{{asset('frontend')}}/assets/images/resource/author-1.jpg" alt="24short-img">
                                </div>
                                <h5><a href="blog-detail.html">Best Fashion Products Include Marketed</a></h5>
                                <div class="info">By: <span>Jhone Wely</span> <i>Sep 23,2023</i></div>
                                <a href="blog-detail.html" class="theme-btn btn-style-one">
                                    View More <span class="icon flaticon-right-arrow"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- End News Section -->
        
        <!-- Testimonial Section -->
        <section class="testimonial-section">
            <div class="pattern-layer" style="background-image: url(assets/images/background/pattern-3.png)"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="pattern-layer-two" style="background-image: url(assets/images/background/pattern-4.png)"></div>
                    <div class="vector-layer" style="background-image: url(assets/images/background/pattern-2.png)"></div>
                    <div class="single-item-carousel owl-carousel owl-theme">
                        
                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <!-- Image Column -->
                                    <div class="image-column col-lg-4 col-md-12 col-sm-12">
                                        <div class="inner-column">
                                            <div class="arrow-layer" style="background-image: url(assets/images/icons/arrow-2.png)"></div>
                                            <div class="image">
                                                <img src="assets/images/resource/author-2.jpg" alt="24short-img">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Content Column -->
                                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                                        <div class="inner-column">
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="text">The most <span>advanced</span> revenue than this. I will refer everyone I know I like Level more and more each day because it makes my life a lot easier. It really saves me time and effort.</div>
                                            <div class="quote-icon flaticon-quote"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Testimonial Block -->
                        <div class="testimonial-block">
                            <div class="inner-box">
                                <div class="row clearfix">
                                    <!-- Image Column -->
                                    <div class="image-column col-lg-4 col-md-12 col-sm-12">
                                        <div class="inner-column">
                                            <div class="arrow-layer" style="background-image: url(assets/images/icons/arrow-2.png)"></div>
                                            <div class="image">
                                                <img src="{{asset('frontend')}}/assets/images/resource/author-3.png" alt="24short-img">
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Content Column -->
                                    <div class="content-column col-lg-8 col-md-12 col-sm-12">
                                        <div class="inner-column">
                                            <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                            </div>
                                            <div class="text">The most <span>advanced</span> revenue than this. I will refer everyone I know I like Level more and more each day because it makes my life a lot easier. It really saves me time and effort.</div>
                                            <div class="quote-icon flaticon-quote"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- End Testimonial Section -->
        
        <!-- Gallery Section -->
        <section class="gallery-section">
            <div class="outer-container">
                <div class="instagram-carousel owl-carousel owl-theme">
                    
                    <!-- Insta Gallery -->
                    <div class="insta-gallery">
                        <img src="{{asset('frontend')}}/assets/images/gallery/1.jpg" alt="24short-img">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a class="lightbox-image icon flaticon-instagram" href="{{asset('frontend')}}/assets/images/gallery/1.jpg"></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Insta Gallery -->
                    <div class="insta-gallery">
                        <img src="{{asset('frontend')}}/assets/images/gallery/2.jpg" alt="24short-img">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a class="lightbox-image icon flaticon-instagram" href="{{asset('frontend')}}/assets/images/gallery/1.jpg"></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Insta Gallery -->
                    <div class="insta-gallery">
                        <img src="{{asset('frontend')}}/assets/images/gallery/3.jpg" alt="24short-img">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a class="lightbox-image icon flaticon-instagram" href="{{asset('frontend')}}/assets/images/gallery/3.jpg"></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Insta Gallery -->
                    <div class="insta-gallery">
                        <img src="{{asset('frontend')}}/assets/images/gallery/4.jpg" alt="24short-img">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a class="lightbox-image icon flaticon-instagram" href="{{asset('frontend')}}/assets/images/gallery/4.jpg"></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Insta Gallery -->
                    <div class="insta-gallery">
                        <img src="{{asset('frontend')}}/assets/images/gallery/5.jpg" alt="24short-img">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a class="lightbox-image icon flaticon-instagram" href="{{asset('frontend')}}/assets/images/gallery/5.jpg"></a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Insta Gallery -->
                    <div class="insta-gallery">
                        <img src="{{asset('frontend')}}/assets/images/gallery/6.jpg" alt="24short-img">
                        <div class="overlay-box">
                            <div class="overlay-inner">
                                <a class="lightbox-image icon flaticon-instagram" href="{{asset('frontend')}}/assets/images/gallery/6.jpg"></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
@endsection