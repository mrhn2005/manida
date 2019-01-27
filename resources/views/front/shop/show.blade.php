@extends('front.layout.page')

@section('title')
	{{setting('site.title')}} | {{$product->getTranslatedAttribute('title')}}
@endsection

@section('page_name')	
    {{$product->getTranslatedAttribute('title')}}
@endsection

        
@section('page_content')
     
     @include('front.shop.includes.single')

@endsection
