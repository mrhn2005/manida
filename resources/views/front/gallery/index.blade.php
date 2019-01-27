@extends('front.layout.page')

@section('title')
	{{setting('site.title')}} | gallery
@endsection

@section('page_name')	
Our Gallery
@endsection

        
@section('page_content')
     
     @include('front.gallery.includes.gallery')

@endsection

	



