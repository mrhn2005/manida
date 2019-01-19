<section class="gallery-section">
    	<div class="auto-container">
			<!--Section Title-->
            <div class="sec-title-one">
                <h2>Our new products</h2>
            </div>
            
            <div class="mixitup-gallery">
        		<!--Filter-->
                <div class="filters text-center">
                    <ul class="filter-tabs filter-btns clearfix">
                        <li class="active filter" data-role="button" data-filter="all">All</li>
                        @foreach($categories as $category)
                          
                          <li class="filter" data-role="button" data-filter=".{{$category->slug}}">{{$category->getTranslatedAttribute('title')}}</li>
                        @endforeach

                    </ul>
                </div>

                <!--Filter List-->
                <div class="filter-list row clearfix">

                    @foreach($products as $product)
                    <!--Default Food Item-->
                    <div class="col-md-3 col-sm-4 col-xs-12 default-food-item mix mix_all all 
                    @foreach($product->categories as $category)
                      {{$category->slug}}
                    
                    @endforeach
                    
                    ">
                        @include('front.common.product-card')
                    </div>
                    @endforeach

                </div>

				<!--Button Outer-->
				<div class="more-btn-outer text-center"><a href="{{route('product.index')}}" class="theme-btn btn-style-four">View More</a></div>

            </div>
            
        </div>
    </section>