<!--News Section-->
    <section class="news-section">
        <div class="auto-container">
        	<!--Section Title-->
            <div class="sec-title-one">
                <h2>Latest blog updates</h2>
            </div>
            
        	<div class="row clearfix">
            	
                <!--News Style One-->
                @foreach($posts as $post)
                <div class="news-style-one col-md-4 col-sm-6 col-xs-12">
                	<div class="inner-box">
                    	<figure class="image-box"><a href="blog-single.html">
                    	    <img src="{{Voyager::image($post->thumbnail('medium'))}}" alt="{{$post->getTranslatedAttribute('title')}}"></a>
                    	</figure>
                        <div class="lower-content">
                        	<h3><a href="blog-single.html">{{$post->getTranslatedAttribute('title')}}</a></h3>
                            <div class="text">{{str_limit($post->getTranslatedAttribute('excerpt'), 150)}}</div>
                            <div class="info clearfix">
                            	<ul class="post-meta clearfix">
                                	<li><a href="index-2.html#"><span class="fa fa-clock-o"></span> {{$post->humanDate()}}</a></li>
                                    <!--<li><a href="index-2.html#"><span class="fa fa-comment-o"></span> 13 Comments</a></li>-->
                                </ul>
                                <div class="more-link"><a href="{{route('blog.show',[$post->id,$post->slug])}}">Read More</a></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </section>