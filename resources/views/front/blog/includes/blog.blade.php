<div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->      
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    
                    <!--Blog Classic-->
                    <section class="blog-classic-view">
                       @foreach($posts as $post)
                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box">
                                    <a href="{{route('blog.show',[$post->id,$post->slug])}}"><img src="{{Voyager::image($post->image)}}" alt="{{$post->getTranslatedAttribute('title')}}"></a>
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="blog-single.html">{{$post->getTranslatedAttribute('title')}}</a></h3>
                                    <div class="text">{{$post->getTranslatedAttribute('excerpt')}} </div>
                                    <div class="info clearfix">
                                        <ul class="post-meta clearfix">
                                            <li><a href="blog.html#"><span class="fa fa-clock-o"></span> {{$post->humanDate()}}</a></li>
                                            <!--<li><a href="blog.html#"><span class="fa fa-comment-o"></span> 13 Comments</a></li>-->
                                        </ul>
                                        <div class="more-link"><a href="{{route('blog.show',[$post->id,$post->slug])}}">Read More</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!--News Style One-->
                       @endforeach
                        
                    </section>
            
                    <!-- Styled Pagination -->
                    <div class="styled-pagination text-left">
                        {{ $posts->links() }}
                    </div>
                
                </div><!--End Content Side-->   
                
                <!--Sidebar-->      
                <div class="sidebar-side col-lg-3 col-md-4 col-sm-6 col-xs-12">
                    <aside class="sidebar">
                        
                        <!-- Search Form -->
                        <div class="widget search-box sidebar-widget">
                            
                            <form method="post" action="blog.html">
                                <div class="form-group">
                                    <input type="search" name="search-field" value="" placeholder="Search Now">
                                    <button type="submit"><span class="icon fa fa-search"></span></button>
                                </div>
                            </form>
                            
                        </div>
                        
                        <!-- Popular Categories -->
                        <div class="widget popular-categories sidebar-widget">
                            <div class="sidebar-title"><h3>Categories</h3></div>
                            
                            <ul class="list">
                                <li><a href="blog.html#">Autumn (1)</a></li>
                                <li><a href="blog.html#">Fruits (2)</a></li>
                                <li class="current"><a href="blog.html#">Organic Foods (2)</a></li>
                                <li><a href="blog.html#">Vegetables (4)</a></li>
                                <li><a href="blog.html#">Spring (2)</a></li>
                            </ul>
                            
                        </div>
                        
                        <!-- Recent Posts -->
                        <div class="widget recent-posts sidebar-widget">
                            <div class="sidebar-title"><h3>Latest News</h3></div>
                            
                            <div class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a href="blog.html#" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                <div class="desc-text"><a href="blog.html#">It is a long established the fresh fruits fact</a></div>
                                <div class="time">September 22, 2016</div>
                            </div>
                            
                            <div class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a href="blog.html#" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                <div class="desc-text"><a href="blog.html#">12 plants that repel un wanted insects</a></div>
                                <div class="time">Augest 29, 2016</div>
                            </div>
                            
                        </div>
                        
                        <!-- Archives -->
                        <div class="widget archives-list sidebar-widget">
                            <div class="sidebar-title"><h3>Archives</h3></div>
                            
                            <ul class="list">
                                <li><a href="blog.html#">August 2016</a></li>
                                <li><a href="blog.html#">July 2016</a></li>
                                <li><a href="blog.html#">June 2016</a></li>
                                <li><a href="blog.html#">May 2016</a></li>
                                <li><a href="blog.html#">Apirl 2016</a></li>
                            </ul>
                            
                        </div>
                        
                        <!-- Popular Tags -->
                        <div class="widget sidebar-widget popular-tags">
                            <div class="sidebar-title"><h3>Tags</h3></div>
                            
                            <a href="blog.html#">Family</a>
                            <a href="blog.html#">Farming</a>
                            <a href="blog.html#">Clean &amp; Clear</a>
                            <a href="blog.html#">Fruits</a>
                            <a href="blog.html#">Fresh</a>
                            <a href="blog.html#">Vegetables</a>
                            <a href="blog.html#">Nutrition</a>
                            <a href="blog.html#">Health</a>
                            <a href="blog.html#">Life</a>
                            
                        </div>
                        
                    </aside>
                </div><!--End Sidebar-->      
                
            </div>
        </div>
    </div>