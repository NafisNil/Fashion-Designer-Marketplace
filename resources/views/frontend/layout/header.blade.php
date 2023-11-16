<header class="main-header">
    	
    <!-- Header Lower -->
    <div class="header-lower">
        
        <div class="auto-container">
            <div class="inner-container d-flex justify-content-between align-items-center">
                
                <div class="logo-box d-flex align-items-center">
                    <a class="nav-link" data-bs-toggle="offcanvas" href="#offcanvascart" role="button">
                    <div class="nav-toggle-btn a-nav-toggle navSidebar-button">
                        <span class="hamburger">
                          <span class="top-bun"></span>
                          <span class="meat"></span>
                          <span class="bottom-bun"></span>
                        </span>
                      </div>
                    </a>
                    <!-- Logo -->
                    <div class="logo"><a href="{{route('index')}}"><img src="{{asset('frontend')}}/assets/images/logo.png" alt="logo"></a></div>
                </div>
                <div class="nav-outer clearfix">
                    
                    <!-- Main Menu -->
                    <nav class="main-menu show navbar-expand-md">
                        <div class="navbar-header">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li class="dropdown"><a href="{{route('index')}}">Home</a>
 
                                </li>
                                <li class="dropdown"><a href="#">Pages</a>
                                    <ul>
                                        <li><a href="about.html">About Us</a></li>
                                        <li><a href="faq.html">Faq's</a></li>
                                        <li><a href="gift.html">Gift</a></li>
                                        <li><a href="register.html">Register</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Shop</a>
                                    <ul>
                                        <li><a href="shop.html">Our Products</a></li>
                                        <li><a href="shop-detail.html">Product Single</a></li>
                                        <li><a href="cart.html">Shoping Cart</a></li>
                                        <li><a href="checkout.html">CheckOut</a></li>
                                        <li><a href="my-account.html">My Account</a></li>
                                        <li><a href="wishlist.html">WhistList</a></li>								
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Our Collection</a>
                                    <ul>
                                        <li><a href="collection.html">Collection</a></li>
                                        <li><a href="single-collection.html">Single Collection</a></li>
                                        <li><a href="gift.html">Gift Cart</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="#">Blog</a>
                                    <ul>
                                        <li><a href="blog.html">Our Blog</a></li>
                                        <li><a href="blog-grid.html">Blog Grid Layout</a></li>
                                        <li><a href="blog-detail.html">Blog Single</a></li>
                                        <li><a href="not-found.html">Not Found</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html">Contact us</a></li>
                            </ul>
                        </div>
                        
                    </nav>
                    <!-- Main Menu End-->
                    
                </div>
                
                <!-- Outer Box -->
                <div class="outer-box d-flex align-items-center">
                    
                    <!-- Options Box -->
                    <div class="options-box d-flex align-items-center">
                    
                        <!-- Search Box -->
                        <div class="search-box-outer">
                            <div class="search-box-btn"><span class="flaticon-search-1"></span></div>
                        </div>
                        
                        <!-- User Box -->
                        <a class="user-box flaticon-user-3" data-bs-toggle="modal" data-bs-target="#loginmodal" href="javascript:void(0)"></a>
                        
                        <!-- Like Box -->
                        <div class="like-box">
                            <a class="user-box flaticon-heart" href="contact.html"></a>
                            <span class="total-like">0</span>
                        </div>
                        
                    </div>
                    
                    <!-- Cart Box -->
                    <div class="cart-box">
                        <div class="box-inner">
                            <a href="shop-detail.html" class="icon-box">
                                <span class="icon flaticon-bag"></span>
                                <i class="total-cart">0</i>
                            </a>
                            Phone<br>
                            <a class="phone" href="tel:88-1900-6789-56">88 1900 6789 56</a>
                        </div>
                    </div>
                    <!-- End Cart Box -->
                    
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                    
                </div>
                <!-- End Outer Box -->
                
            </div>
            
        </div>
    </div>
    <!-- End Header Lower -->
    
    <!-- Sticky Header  -->
    <div class="sticky-header">
        <div class="auto-container">
            <div class="d-flex justify-content-between align-items-center">
                <!-- Logo -->
                <div class="logo">
                    <a href="{{route('index')}}" title=""><img src="{{asset('frontend')}}/assets/images/logo-small.png" alt="logo"></a>
                </div>
                
                <!-- Right Col -->
                <div class="right-box">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                    <!-- Main Menu End-->
                    
                    <!-- Mobile Navigation Toggler -->
                    <div class="mobile-nav-toggler"><span class="icon flaticon-menu"></span></div>
                </div>
                
            </div>
        </div>
    </div>
    <!-- End Sticky Menu -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><span class="icon flaticon-multiply"></span></div>
        <nav class="menu-box">
            <div class="nav-logo"><a href="{{route('index')}}"><img src="{{asset('frontend')}}/assets/images/mobile-logo.png" alt="logo"></a></div>
            <!-- Search -->
            <div class="search-box">
                <form method="post" action="https://24short.creativbydesigns.com/demos/contact.html">
                    <div class="form-group">
                        <input type="search" name="search-field" value="" placeholder="SEARCH HERE" required>
                        <button type="submit"><span class="icon flaticon-search-1"></span></button>
                    </div>
                </form>
            </div>
            <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
        </nav>
    </div>
    <!-- End Mobile Menu -->

</header>