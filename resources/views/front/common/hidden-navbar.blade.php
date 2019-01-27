<section class="hidden-bar right-align">
        
        <div class="hidden-bar-closer">
            <button class="btn"><i class="fa fa-close"></i></button>
        </div>
        
        <!-- Hidden Bar Wrapper -->
        <div class="hidden-bar-wrapper">
        
            <!-- .logo -->
            <div class="logo text-center">
                <a href="index.html"><img src="{{Voyager::image(setting('site.logo'))}}" alt=""></a>			
            </div><!-- /.logo -->
            
            <!-- .Side-menu -->
            <div class="side-menu">
            <!-- .navigation -->
                <!--<ul class="navigation">-->
                    {!!	 Helper::menu()  !!}
                    
                <!--</ul>-->
            </div><!-- /.Side-menu -->
        
            <div class="social-icons">
                <ul>
                    @include('front.common.social-links')
                </ul>
            </div>
        
        </div><!-- / Hidden Bar Wrapper -->
    </section>