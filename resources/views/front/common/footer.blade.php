<footer class="main-footer footer-style-one">
    	
        <!--Footer Upper-->        
        <div class="footer-upper">
            <div class="auto-container">
                
                <div class="column centered-column">
                    <div class="footer-widget about-widget">
                        <figure class="footer-logo"><a href="{{route('home')}}"><img src="{{Voyager::image(setting('site.logo'))}}" alt=""></a></figure>
                        
                        <div class="text">
                            <p>Vestibulum facilisis rhoncus tempor. Duis non ipsum volutpat, rhoat nacus nisi sed, pulvinar ex. Etiam sit amet libero consea</p>
                        </div>
                        
                        <div class="social-links">
                            <h3>Follow Us On:</h3>
                            <div class="links">
                                @foreach($socials as $social)
                                    <a class="social-networks" href="{{$social->getTranslatedAttribute('link')}}"><i class="{{$social->icon}}"></i></a>
                                @endforeach
                            </div>
                        </div>
                        
                    </div>
                </div>
                
            </div>
        </div>
        
        <!--Footer Bottom-->
    	<div class="footer-bottom">
            <div class="auto-container">
                    
                <!--Copyright-->
                <div class="copyright">Copyrights &copy; Warsaw 2016. All rights reserved.</div>
                
            </div>
        </div>
        
    </footer>