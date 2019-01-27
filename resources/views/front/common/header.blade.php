<header class="main-header">
        
    <!-- Main Box -->
	<div class="main-box">
    	<div class="auto-container">
        	<div class="outer-container clearfix">
                <!--Logo Box-->
                <div class="logo-box">
                    <div class="logo"><a href="index.html"><img src="{{Voyager::image(setting('site.logo'))}}" alt=""></a></div>
                </div>
                
                <!--Nav Outer-->
                <div class="nav-outer clearfix">
                    <!-- Main Menu -->
                    <nav class="main-menu">
                        <div class="navbar-header">
                            <!-- Toggle Button -->    	
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            </button>
                        </div>
                        
                        <div class="navbar-collapse collapse clearfix">
                            <!--<ul class="navigation clearfix">-->
                                {!!	 Helper::menu()  !!}
                                
                             <!--</ul>-->
                        </div>
                    </nav><!-- Main Menu End-->
                    
                </div><!--Nav Outer End-->
                
                <!-- Hidden Nav Toggler -->
                <div class="nav-toggler">
                <button class="hidden-bar-opener"><span class="icon fa fa-bars"></span></button>
                </div><!-- / Hidden Nav Toggler -->
                
        	</div>    
        </div>
    </div>

</header>