@extends('front.layout.front')

@section('title')
	{{setting('site.title')}}
@endsection

@section('content')	
	<div class="page-wrapper">

	<!-- Header Start -->
	@include('front.common.header')
	<!-- Header End -->

    <!-- Hidden Navigation Bar -->
    @include('front.common.hidden-navbar')
    <!-- / Hidden Bar -->
    
    <section class="page-title" style="background-image:url(/images/background/bg-page-title-1.jpg);">
        <div class="auto-container">
            <h1>Our Products</h1>
        </div>
    </section>
    
    <section class="shop-section">
    	<div class="auto-container">
            @include('front.shop.includes.products')
        </div>
    </section>
    <!--Main Footer / Footer Style One-->
    @include('front.common.footer')

	</div>

@endsection

