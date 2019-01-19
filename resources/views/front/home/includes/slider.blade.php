<section class="main-slider" id="scroll-section-one" data-start-height="900" data-slide-overlay="yes">
    	
        <div class="tp-banner-container">
            <div class="tp-banner">
                <ul>
                	@foreach($banners as $banner)
                    <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="{{Voyager::image($banner->image)}}"  data-saveperformance="off"  data-title="Awesome Title Here">
                    <img src="{{Voyager::image($banner->image)}}"  alt=""  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> 
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="{{$banner->position}}" data-hoffset="15"
                    data-y="center" data-voffset="-290"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><figure class="content-image"><img src="images/main-slider/leaf-icon.png" alt=""></figure></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="{{$banner->position}}" data-hoffset="0"
                    data-y="center" data-voffset="-170"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><h2>{{$banner->title}}</h2></div>
                    
                    <div class="tp-caption sfr sfb tp-resizeme"
                    data-x="{{$banner->position}}" data-hoffset="0"
                    data-y="center" data-voffset="-90"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><div class="big-text">{{$banner->subtitle}}</div></div>
                    
                    <div class="tp-caption sfl sfb tp-resizeme"
                    data-x="{{$banner->position}}" data-hoffset="0"
                    data-y="center" data-voffset="-20"
                    data-speed="1500"
                    data-start="500"
                    data-easing="easeOutExpo"
                    data-splitin="none"
                    data-splitout="none"
                    data-elementdelay="0.01"
                    data-endelementdelay="0.3"
                    data-endspeed="1200"
                    data-endeasing="Power4.easeIn"><a href="{{$banner->link}}" class="theme-btn btn-style-one">Shop Now</a></div>
                    
                    
                    </li>
                    @endforeach
                </ul>
                
            	<div class="tp-bannertimer"></div>
            </div>
        </div>
    </section>