<footer class="main-footer">
    <div class="pattern-layer-one" style="background-image: url(assets/images/icons/pattern-3.png)"></div>
    <div class="pattern-layer-two" style="background-image: url(assets/images/icons/vector-2.png)"></div>
    <div class="auto-container">
        
        <!-- Widgets Section -->
        <div class="widgets-section">
            <div class="row clearfix">
                <!-- Column -->
                <div class="big-column col-lg-7 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        
                        <!-- Footer Column -->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <!-- Logo -->
                                <div class="logo"><a href="{{route('index')}}"><img src="{{(!empty($logo->logo))?URL::to('storage/'.$logo->logo):URL::to('image/no_image.png')}}" alt="logo" style="max-width: 243px;max-height:72px"></a></div>
                                <div class="text">{!!$contact->address!!}</div>
                                <ul class="contact-list">
            
                                    <li><span class="icon flaticon-call"></span>{{$contact->phone}}</li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Footer Column -->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>Find It Fast</h5>
                                <ul class="page-list">
                                    <li><a href="#">All Product</a></li>
                                    <li><a href="#">Cameras Photos</a></li>
                                    <li><a href="#">Fashion Collection</a></li>
                                    <li><a href="#">Hot Fashion Photo</a></li>
                                    <li><a href="#">Gift Card</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <!-- Column -->
                <div class="big-column col-lg-5 col-md-12 col-sm-12">
                    <div class="row clearfix">
                        
                        <!-- Footer Column -->
                        <div class="footer-column col-lg-7 col-md-6 col-sm-12">
                            <div class="footer-widget links-widget">
                                <h5>Quick Links</h5>
                                <ul class="page-list">
                                    <li><a href="#">Your Account</a></li>
                                    <li><a href="#">Returns & Exchanges</a></li>
                                    <li><a href="#">Return Center</a></li>
                                    <li><a href="#">Purchase Hisotry</a></li>
                                    <li><a href="#">App Download</a></li>
                                </ul>
                            </div>
                        </div>
                        
                        <!-- Footer Column -->
                        <div class="footer-column col-lg-5 col-md-6 col-sm-12">
                            <div class="footer-widget instagram-widget">
                                <h5>Service us</h5>
                                <ul class="page-list-two">
                                    <li><a href="#">Support Center</a></li>
                                    <li><a href="#">Term & Conditions</a></li>
                                    <li><a href="#">Shipping</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Help</a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        
        <!-- Footer Bottom -->
        <div class="footer-bottom">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="copyright"><span>&copy; 2023</span> Powered by Looms Fashion. All Rights Reserved.</div>
                <div class="email-box">
                    <a href="mailto:inf@creativbydesigns.com"><span class="icon flaticon-mail"></span>{{$contact->email}}</a>
                </div>
                <div class="cards"><img src="{{asset('frontend')}}/assets/images/icons/cards.png" alt="24short-img"></div>
            </div>
        </div>
        
    </div>
</footer>