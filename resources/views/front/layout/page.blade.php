@extends('front.layout.front')



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
            <h1>@yield('page_name')</h1>
        </div>
    </section>
    

    @yield('page_content')
        
    <!--Main Footer / Footer Style One-->
    @include('front.common.footer')

	</div>

@endsection

