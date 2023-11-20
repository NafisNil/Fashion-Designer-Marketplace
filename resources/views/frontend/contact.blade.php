@extends('frontend.layout.master')
@section('title')
    Contact Us - Looms Fashion
@endsection
@section('content')
    	
	<!-- Page Title -->
    <section class="page-title">
        <div class="auto-container">
			<h2>Contact Us</h2>
			<ul class="bread-crumb clearfix">
				<li><a href="{{route('index')}}">Home</a></li>
				
				<li>Contact Us</li>
			</ul>
        </div>
    </section>
    <!-- End Page Title -->
	
	<!-- About Section -->
    <div class="contact-page-section">
    	<div class="auto-container">
        	<div class="row clearfix">
				<!-- Info Column -->
				<div class="info-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
					
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner d-flex align-items-center">
								<div class="icon flaticon-email-1"></div>
								<div class="content">
									<strong>Mail address</strong>
									<a href="mailto:{{$contact->email}}">{{$contact->email}}</a><br>
									
								</div>
							</div>
						</div>
						
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner d-flex align-items-center">
								<div class="icon flaticon-map"></div>
								<div class="content">
									<strong>Office address</strong>
									<div class="text">{!! $contact->address !!}</div>
								</div>
							</div>
						</div>
						
						<!-- Info Box -->
						<div class="info-box">
							<div class="box-inner d-flex align-items-center">
								<div class="icon flaticon-call"></div>
								<div class="content">
									<strong>Phone Number</strong>
									<a href="tel:{{$contact->phone}}">{{$contact->phone}}</a><br>
									
								</div>
							</div>
						</div>
						
					</div>
				</div>
				<!-- Map Column -->
				<div class="map-column col-lg-8 col-md-12 col-sm-12">
					<div class="inner-column">
						<!--Map Outer-->
						<div class="map-outer">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d805184.6331292129!2d144.49266890254142!3d-37.97123689954809!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad646b5d2ba4df7%3A0x4045675218ccd90!2sMelbourne%20VIC%2C%20Australia!5e0!3m2!1sen!2s!4v1574408946759!5m2!1sen!2s" allowfullscreen=""></iframe>
						</div>
					</div>
				</div>
			</div>
			
			<!-- Contact Boxed -->
	
			<!-- End Contact Boxed -->
			
		</div>
	</div>
	<!-- End About Section -->
@endsection