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
                        
<!--extra -->




<!-- extra -->


                        
                        <div class="shops-outer">
                            <div class="row clearfix">
                              
                                @foreach ($designer as $item)
                                @php
                                $product= App\Models\Product::select('logo')->where('designer_id', $item->id)->first();
                                $product_list = App\Models\Product::select('logo')->where('designer_id', $item->id)->limit(5)->get();
                            @endphp
                           							<div class="shop-item mix col-lg-3 col-md-6 col-sm-12">
                                                        <div class="inner-box">
                                                            <div class="image">
                                                                <a href="shop-detail.html">
                                                
                                                                    <div id="carouselExampleControls" class="carousel slide"
                                                                        data-bs-ride="carousel" data-bs-interval="2000">
                                                                        <div class="carousel-inner">
                                                                            @foreach ($product_list as $item)
                                                                            
                                                                           
                                                                            <div class="carousel-item active">
                                                                                <img src="{{(!empty($item->logo))?URL::to('storage/'.$item->logo):URL::to('image/no_image.png')}}"
                                                                                    class="d-block w-100" alt="...">
                                                                            </div>
                                                                            @endforeach
                                                                        </div>
                                                                        <button class="carousel-control-prev" type="button"
                                                                            data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                                            <span class="visually-hidden">Previous</span>
                                                                        </button>
                                                                        <button class="carousel-control-next" type="button"
                                                                            data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                                            <span class="visually-hidden">Next</span>
                                                                        </button>
                                                                    </div>
                        
                                                                </a>
                                                                <span class="tag flaticon-heart"></span>
                                                                <div class="cart-box text-center">
                                                                    <a class="cart" href="#">Add to Cart</a>
                                                                </div>
                                                            </div>
                                                            <div class="lower-content">
                                                                <div class="rating">
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="fa fa-star"></span>
                                                                    <span class="light fa fa-star"></span>
                                                                </div>
                                                                <h6>
                                                                    <a href="shop-detail.html">masks 95 percent 0.3-μm <br />
                                                                        particles</a>
                                                                </h6>
                                                                <div class="d-flex justify-content-between align-items-center">
                                                                    <div class="price"><span>$239.52</span> $362.00</div>
                                                                    <!-- Quantity Box -->
                                                                    <div class="quantity-box">
                                                                        <div class="item-quantity">
                                                                            <input class="qty-spinner" type="text" value="1" name="quantity" />
                                                                        </div>
                                                                    </div>
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
                                <div class="sidebar-widget category-widget">
									<div class="filter-container">
										<div class="label">
											<span>Price Range</span>
										</div>
                                        <input type="range" id="priceRangeSlider" min="500" max="500000" value="500">
										<style>
											.{
												justify-content: space-between;
											}
										</style>
										<div class="price-range-inputs"  style="display: flex;align-items: center;justify-content: space-between;">
											<input type="text" id="minPrice"  class="border" class="input-min text-center" style="width: 30%;" value="500">
											<input type="text" id="maxPrice" class="border" class="input-max text-center" style="width: 30%;" value="500000">
										</div>

									</div>
								</div>
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
	
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<!-- End Products Section Six -->
    <script>
        $(document).ready(function() {
    // Update min and max price inputs when range slider changes
    $("#priceRangeSlider").on('input', function() {
        var minPrice = $(this).val();
        var maxPrice = $(this).attr('max');

        $("#minPrice").val(minPrice);
        $("#maxPrice").val(maxPrice);

        // Trigger Ajax request to filter products
        filterProducts();
    });

    // Update min and max price inputs when min or max input values change
    $("#minPrice").on('input', function() {
        filterProducts();
    });

    $("#maxPrice").on('input', function() {
        filterProducts();
    });

    // Function to filter products
    function filterProducts() {
        var minPrice = $("#minPrice").val();
        var maxPrice = $("#maxPrice").val();

        // Send Ajax request to filter products
        $.ajax({
            url: "/products/filter",
            method: "POST",
            data: {
                minPrice: minPrice,
                maxPrice: maxPrice
            },
            success: function(data) {
                // Update product list with filtered results
                console.log(data);
            }
        });
    }
});

    </script>
@endsection