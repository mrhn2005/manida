<!--Gallery Section Two-->
    <section class="gallery-section-two fullwidth-gallery">
    	<div class="auto-container">
        	<!--Section Title-->
            <div class="sec-title-two">
                <h2>Our latest gallery</h2>
            </div>
        </div>
        
        <div class="clearfix">
        
            <!--Default Portfolio Item -->
            @foreach($galleries as $gallery)
            <div class="default-portfolio-item col-lg-3 col-md-4 col-sm-6 col-xs-12">
                <div class="inner-box">
                    <figure class="image-box"><img src="{{Voyager::image($gallery->thumbnail('medium'))}}" alt=""></figure>
                    <div class="overlay-box">
                        <div class="overlay-inner">
                            <div class="overlay-content">
                                <a href="{{Voyager::image($gallery->image)}}" 
                                   class="lightbox-image option-btn theme-btn" title="{{$gallery->getTranslatedAttribute('title')}}" data-fancybox-group="fancybox">
                                    <span class="fa fa-search"></span>
                                </a>
    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            @endforeach
            
        </div>
            
        <!--Button Outer-->
        <div class="more-btn-outer text-center"><a href="{{route('gallery.index')}}" class="theme-btn btn-style-four">View More</a></div>
            
            
    </section>