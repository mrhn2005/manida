<section class="gallery-section gallery-page">
    	<div class="auto-container">
            
            <div class="mixitup-gallery">
        		
                

               
                <div class="filter-list row clearfix">
					
                    
                    <!--Default Portfolio Item -->
                    @foreach($galleries as $gallery)
                    <div class="default-portfolio-item mix mix_all col-md-4 col-sm-6 col-xs-12 ">
                        <div class="inner-box">
                            <figure class="image-box"><img src="{{Voyager::image($gallery->thumbnail('medium'))}}" alt=""></figure>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <a href="{{ Voyager::image($gallery->image)}}" class="lightbox-image option-btn theme-btn" title="{{$gallery->getTranslatedAttribute('title')}}" data-fancybox-group="fancybox"><span class="fa fa-search"></span></a>
                                        <!--<a href="shop.html" class="option-btn theme-btn"><span class="fa fa-link"></span></a>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    

                </div>

            </div>
            
            <!-- Styled Pagination -->
            <div class="styled-pagination text-center">
                {{ $galleries->links() }}
            </div>
            
        </div>
    </section>