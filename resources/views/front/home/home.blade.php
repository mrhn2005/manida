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
    
    
    <!--Main Slider-->
    @include('front.home.includes.slider')
    
    
    <!--Intro Section-->
    @include('front.home.includes.intro')
    
    
    <!--About Farm Section-->
    @include('front.home.includes.about')
    
    
    <!--Fluid Section One-->
    @include('front.home.includes.fluid1')
    
    
    <!--Gallery Section-->
    @include('front.home.includes.products')
    
    <!--Gallery-->
    @include('front.home.includes.gallery')
    
    <!--Our Blog-->
    @include('front.home.includes.blog')
    
    <!--Testimonials Section-->
    @include('front.home.includes.testimonal')
    
    
    <!--sponsors style one-->
    @include('front.home.includes.sponsors')
    
    
    <!--Fluid Section Two-->
    @include('front.home.includes.fluid2')
    
    
    <!--Main Footer / Footer Style One-->
    @include('front.common.footer')

	</div>

@endsection

