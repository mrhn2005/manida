@extends('front.layout.page')

@section('title')
	{{setting('site.title')}} | {{ $page->getTranslatedAttribute('title') }}
@endsection

@section('page_name')	
    {{ $page->getTranslatedAttribute('title') }}
@endsection

        
@section('page_content')
     @include('front.pages.about-us.about-us') 

@endsection