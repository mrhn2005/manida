<div class="sidebar-page-container">
        <div class="auto-container">
            <div class="row clearfix">
                
                <!--Content Side-->      
                <div class="content-side col-lg-9 col-md-8 col-sm-12 col-xs-12">
                    
                    <!--Blog Classic-->
                    <section class="blog-classic-view post-details">
                       
                        <!--News Style One-->
                        <div class="news-style-one">
                            <div class="inner-box">
                                <figure class="image-box"><a href="{{route('blog.show',[$post->id,$post->slug])}}">
                                    <img src="{{Voyager::image($post->image)}}" alt="{{$post->getTranslatedAttribute('title')}}"></a>
                                    
                                </figure>
                                <div class="lower-content">
                                    <h3><a href="blog-single.html">{{$post->getTranslatedAttribute('title')}}</a></h3>
                                    <div class="post-content">
                                    	{!! $post->getTranslatedAttribute('body') !!}
                                    </div>
                                </div>
                                <div class="info clearfix">
                                        <ul class="post-meta clearfix">
                                            <li><a href="blog.html#"><span class="fa fa-clock-o"></span> {{$post->humanDate()}}</a></li>
                                            <!--<li><a href="blog.html#"><span class="fa fa-comment-o"></span> 13 Comments</a></li>-->
                                        </ul>
                                       
                                    </div>
                                <!--<div class="post-info clearfix">-->
                                <!--    <div class="post-tags"><span class="fa fa-tag"></span> &ensp; <a href="blog-single.html#">Fertiliser</a>, <a href="blog-single.html#">Organic Food</a>, <a href="blog-single.html#">Tips</a> </div>-->
                                <!--</div>-->
                            </div>
                        </div>
                        
                        <!--Comments Area-->
                        <!--<div class="comments-area">-->
                        <!--	<div class="sidebar-title"><h3>Comments (02)</h3></div>-->
                            
                        <!--    <div class="comment-box">-->
                                
                        <!--        <div class="comment">-->
                        <!--        	<div class="comment-inner">-->
                        <!--                <div class="author-thumb"><img src="images/resource/author-thumb-2.jpg" alt=""></div>-->
                        <!--                <div class="comment-content">-->
                        <!--                    <div class="comment-header clearfix">-->
                        <!--                        <strong>Stevan Smith</strong> <span class="date">September  22, 2016</span>-->
                        <!--                    </div>-->
                        <!--                    <div class="text">Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam cursus nibh vitae lacus  vitae dictum lectus faucibus. Quisque id venenatis nisi, vel dictum lorem.</div>-->
                        <!--                    <div class="link-box"><a href="blog-single.html#" class="reply-btn">Reply </a></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                                
                        <!--        <div class="comment reply-comment">-->
                        <!--        	<div class="comment-inner">-->
                        <!--                <div class="author-thumb"><img src="images/resource/author-thumb-3.jpg" alt=""></div>-->
                        <!--                <div class="comment-content">-->
                        <!--                    <div class="comment-header clearfix">-->
                        <!--                        <strong>Ellena Gilbert</strong> <span class="date">September  22, 2016</span>-->
                        <!--                    </div>-->
                        <!--                    <div class="text">Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam cursus nibh vitae lacus  vitae dictum lectus faucibus.</div>-->
                        <!--                    <div class="link-box"><a href="blog-single.html#" class="reply-btn">Reply </a></div>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                                
                        <!--    </div>-->
                        <!--</div>-->
                        
                        <!--Comment Form-->
                        <!--<div class="comment-form default-form">-->
                        <!--    <div class="sidebar-title"><h3>Leave a Comment</h3></div>-->
                        <!--    <form method="post" action="blog.html">-->
                        <!--        <div class="row clearfix">-->
                                	
                        <!--            <div class="col-md-6 col-sm-6 col-xs-12">-->
                        <!--                <div class="form-group">-->
                        <!--                	<div class="field-label">Name</div>-->
                        <!--                    <input type="text" name="username" value="">-->
                        <!--                </div>-->
            
                        <!--                <div class="form-group">-->
                        <!--                	<div class="field-label">Email</div>-->
                        <!--                    <input type="email" name="email" value="" required>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="col-md-6 col-sm-6 col-xs-12">-->
                        <!--                <div class="form-group">-->
                        <!--                	<div class="field-label">Comments</div>-->
                        <!--                    <textarea name="message"></textarea>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--            <div class="col-md-12 col-sm-12 col-xs-12">-->
                        <!--            	<div class="form-group">-->
                        <!--                    <button type="submit" class="theme-btn btn-style-two">Submit</button>-->
                        <!--                </div>-->
                        <!--            </div>-->
                        <!--        </div>-->
                        <!--    </form>-->
                        <!--</div>-->
                        
                    </section>
                
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
                                <li><a href="blog-single.html#">Autumn (1)</a></li>
                                <li><a href="blog-single.html#">Fruits (2)</a></li>
                                <li class="current"><a href="blog-single.html#">Organic Foods (2)</a></li>
                                <li><a href="blog-single.html#">Vegetables (4)</a></li>
                                <li><a href="blog-single.html#">Spring (2)</a></li>
                            </ul>
                            
                        </div>
                        
                        <!-- Recent Posts -->
                        <div class="widget recent-posts sidebar-widget">
                            <div class="sidebar-title"><h3>Latest News</h3></div>
                            
                            <div class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-1.jpg" alt=""><a href="blog-single.html#" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                <div class="desc-text"><a href="blog-single.html#">It is a long established the fresh fruits fact</a></div>
                                <div class="time">September 22, 2016</div>
                            </div>
                            
                            <div class="post">
                                <figure class="post-thumb"><img src="images/resource/post-thumb-2.jpg" alt=""><a href="blog-single.html#" class="overlay-link"><span class="fa fa-link"></span></a></figure>
                                <div class="desc-text"><a href="blog-single.html#">12 plants that repel un wanted insects</a></div>
                                <div class="time">Augest 29, 2016</div>
                            </div>
                            
                        </div>
                        
                        <!-- Archives -->
                        <div class="widget archives-list sidebar-widget">
                            <div class="sidebar-title"><h3>Archives</h3></div>
                            
                            <ul class="list">
                                <li><a href="blog-single.html#">August 2016</a></li>
                                <li><a href="blog-single.html#">July 2016</a></li>
                                <li><a href="blog-single.html#">June 2016</a></li>
                                <li><a href="blog-single.html#">May 2016</a></li>
                                <li><a href="blog-single.html#">Apirl 2016</a></li>
                            </ul>
                            
                        </div>
                        
                        <!-- Popular Tags -->
                        <div class="widget sidebar-widget popular-tags">
                            <div class="sidebar-title"><h3>Tags</h3></div>
                            
                            <a href="blog-single.html#">Family</a>
                            <a href="blog-single.html#">Farming</a>
                            <a href="blog-single.html#">Clean &amp; Clear</a>
                            <a href="blog-single.html#">Fruits</a>
                            <a href="blog-single.html#">Fresh</a>
                            <a href="blog-single.html#">Vegetables</a>
                            <a href="blog-single.html#">Nutrition</a>
                            <a href="blog-single.html#">Health</a>
                            <a href="blog-single.html#">Life</a>
                            
                        </div>
                        
                    </aside>
                </div><!--End Sidebar-->      
                
            </div>
        </div>
    </div>