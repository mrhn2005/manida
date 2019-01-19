    <section class="gallery-section-three">
    	<div class="auto-container">
            <!--Section Title-->
            <div class="sec-title-one">
                <h2>Our latest works</h2>
            </div>    
        
            <div class="row clearfix">
                
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <!--Default Portfolio Item -->
                    <div class="default-portfolio-item">
                        <div class="inner-box">
                            <figure class="image-box"><img src="images/gallery/15.jpg" alt=""></figure>
                            <div class="overlay-box">
                                <div class="overlay-inner">
                                    <div class="overlay-content">
                                        <a href="images/gallery/15.jpg" class="lightbox-image option-btn theme-btn" data-fancybox-group="fancybox"><span class="fa fa-search"></span></a>
                                        <a href="shop.html" class="option-btn theme-btn"><span class="fa fa-link"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6 col-sm-12 col-xs-12">
                     @foreach($galleries as $gallery)
                    <div class="row clearfix">
                        <!--Default Portfolio Item -->
                       
                        <div class="default-portfolio-item col-md-6 col-sm-6 col-xs-12">
                            <div class="inner-box">
                                <figure class="image-box"><img src="images/gallery/16.jpg" alt=""></figure>
                                <div class="overlay-box">
                                    <div class="overlay-inner">
                                        <div class="overlay-content">
                                            <a href="images/gallery/16.jpg" class="lightbox-image option-btn theme-btn" data-fancybox-group="fancybox"><span class="fa fa-search"></span></a>
                                            <a href="shop.html" class="option-btn theme-btn"><span class="fa fa-link"></span></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
            </div>
            
    	</div>
    </section>