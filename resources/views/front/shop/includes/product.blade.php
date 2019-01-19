<div class="inner-box">
	<div class="image-box">
    	<figure class="image"><a href="{{ Voyager::image($product->getThumbnail($product->single_image(), 'medium'))}}">
    	    <img src="{{ Voyager::image($product->getThumbnail($product->single_image(), 'medium'))}}" alt="{{$product->getTranslatedAttribute('title')}}"></a>
    	  </figure>
    </div>
    <div class="lower-content">
    	<h3><a href="shop-single.html">{{$product->getTranslatedAttribute('title')}}</a></h3>
        <div class="price"><span class="price-txt">$ {{$product->price}}</span></div>
    </div>
    
    <!--Overlay Box-->
    <div class="overlay-box">
    	<div class="prod-options">
        	<a  class="theme-btn add-cart-btn" href="{{route('product.show',[$product->id,$product->slug])}}"> Show <span class="fa fa-eye"></span> </a>
            <!--<a class="option-btn" href="shop-single.html"><span class="fa fa-heart-o"></span></a>-->
            <!--<a class="option-btn" href="shop-single.html"><span class="fa fa-retweet"></span></a>-->
            <!--<a href="shop-single.html" class="theme-btn add-cart-btn">ADD TO CART <span class="fa fa-shopping-cart"></span></a>-->
        </div>
    </div>
    
</div>