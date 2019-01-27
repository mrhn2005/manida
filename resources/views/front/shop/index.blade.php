@extends('front.layout.page')

@section('title')
	{{setting('site.title')}} | products
@endsection

@section('page_name')	
    Our Products
@endsection

        
@section('page_content')
     
     @include('front.shop.includes.products')

@endsection

	



