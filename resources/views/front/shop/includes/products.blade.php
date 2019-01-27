<section class="shop-section">
    	<div class="auto-container">
            <div class="row clearfix">
            	<!--Default Shop Item-->
            	@foreach($products as $product)
                <div class="default-shop-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                	@include('front.shop.includes.product')
                </div>
                @endforeach
                
            
            </div>
            
            <!-- Styled Pagination -->
            <div class="styled-pagination text-center">
            
                {{ $products->links() }}
            
            </div>
        </div>
</section>