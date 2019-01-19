<div class="inner-box">
    <div class="image-box">
    	<figure class="image"><a class="lightbox-image option-btn" data-fancybox-group="example-gallery" 
    	        href="{{ Voyager::image($product->getThumbnail($product->single_image(), 'medium'))}}" title="{{$product->getTranslatedAttribute('title')}}">
    	    <img src="{{ Voyager::image($product->getThumbnail($product->single_image(), 'medium'))}}" alt=""></a>
    	</figure>
        <div class="lower-content">
        	<h3><a href="shop.html">{{$product->getTranslatedAttribute('title')}}</a></h3>
            <div class="price">$ {{$product->price}}</div>
        </div>
    </div>
</div>

