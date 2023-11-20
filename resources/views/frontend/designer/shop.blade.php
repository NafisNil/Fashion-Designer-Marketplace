@extends('frontend.layout.master')
@section('title')
   Shop - Looms
@endsection
@section('content')
    	<!-- Page Title -->
        <section class="page-title">
            <div class="auto-container">
                <h2>Shop</h2>
                <ul class="bread-crumb clearfix">
                    <li><a href="{{route('index')}}">Home</a></li>
                    <li>Shop</li>
                   
                </ul>
            </div>
        </section>
        <!-- End Page Title -->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">
                    
                    <!-- Content Side -->
                    <div class="content-side col-lg-9 col-md-12 col-sm-12">
                        <!-- Filter Box -->
                        <div class="filter-box">
                            <div class="d-flex justify-content-between align-items-center flex-wrap">
                                <!-- Left Box -->
                               
                                <!-- Right Box -->
                                <div class="right-box d-flex">
                                    <div class="form-group">
                                        <select name="currency" class="custom-select-box">
                                            <option>Recently Added</option>
                                            <option>Added 01</option>
                                            <option>Added 02</option>
                                            <option>Added 03</option>
                                            <option>Added 04</option>
                                        </select>
                                    </div>
                                    <ul class="pages-list">
                                        <li><a class="flaticon-list" href="#"></a></li>
                                        <li><a class="flaticon-menu-2" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- End Filter Box -->
                        
                        <div class="shops-outer">
                            <div class="row clearfix">
                              
                                @foreach ($designer as $item)
                                @php
                                $product= App\Models\Product::select('logo')->where('designer_id', $item->id)->first();
                            @endphp
                                <div class="shop-item col-lg-4 col-md-4 col-sm-12">
                                    <div class="inner-box">
                                        <div class="image">
                                            <a href="{{route('designer.single', $item->id)}}"><img src="{{(!empty($product->logo))?URL::to('storage/'.$product->logo):URL::to('image/no_image.png')}}" alt="24short-img"></a>
                                            <div class="options-box">
                                             <!--   <ul class="option-list">
                                                    <li><a class="flaticon-resize" href="shop-detail.html"></a></li>
                                                    <li><a class="flaticon-heart" href="shop-detail.html"></a></li>
                                                    <li><a class="flaticon-shopping-cart-2" href="shop-detail.html"></a></li>
                                                </ul>-->
                                            </div>
                                        </div>
                                        <div class="lower-content">
                                   <!--         <div class="rating">
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="fa fa-star"></span>
                                                <span class="light fa fa-star"></span>
                                            </div> -->
                                            <h6><a href="{{route('designer.single', $item->id)}}">{{$item->name}} </a></h6>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <div class="price">{{$item->min_price}}Tk - {{$item->max_price}}Tk</div>
                                                <!-- Quantity Box -->
                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                                <!-- Shop Item -->
                              
                                
         
                                
                            </div>
                        
                            <!-- Styled Pagination -->
                            <ul class="styled-pagination text-center">
                               {{$designer->links()}}
                            </ul>
                            <!-- End Styled Pagination -->
                        
                        </div>
                        
                    </div>
                    
                    <!-- Sidebar Side -->
                    <div class="sidebar-side col-lg-3 col-md-12 col-sm-12">
                        <aside class="sidebar">
                            <div class="sidebar-inner">
                            <!-- Category Widget -->
                            <div class="sidebar-widget category-widget">
                                <div class="widget-content">
                                    <!-- Sidebar Title -->
                                    <div class="sidebar-title-two">
                                        <h5>Product Catagories</h5>
                                    </div>
                                    <!-- Category List -->
                                    <ul class="category-list">
                                        @foreach ($category as $item)
                                        <li><a href="#">{{$item->name}} </a></li>
                                        @endforeach
                                    
                                      
                                    </ul>
                                    
                                </div>
                            </div>
                            
                            <!-- Colors Widget -->
                
                            
                            <!-- Brands Widget -->
           
                                                    
                            <!-- Tags Widget -->
               
                            
                        </aside>
                    </div>
                    
                </div>
            </div>
        </div>
        	<!-- Shop Detail Section -->
	
	<!-- End Shop Page Section -->
	

	<!-- End Products Section Six -->
@endsection