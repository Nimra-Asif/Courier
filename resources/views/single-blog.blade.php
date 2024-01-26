@extends('Basic_Layout.Layouts')

@section('content')
            <!-- Content Wrapper -->
            <article> 
                <!-- Breadcrumb -->
                <section class="theme-breadcrumb pad-50">                
                    <div class="theme-container container ">  
                        <div class="row">
                            <div class="col-sm-8 pull-left">
                                <div class="title-wrap">
                                    <h2 class="section-title no-margin"> lorem quis </h2>
                                    <p class="fs-16 no-margin"> Track your product & see the current condition </p>
                                </div>
                            </div>
                            <div class="col-sm-4">                        
                                <ol class="breadcrumb-menubar list-inline">
                                    <li><a href="#" class="gray-clr">Home</a></li>                                   
                                    <li class="active">Single Posts</li>
                                </ol>
                            </div>  
                        </div>
                    </div>
                </section>
                <!-- /.Breadcrumb -->

                <!-- Blog -->
                <div class="theme-container container">
                    <div class="row">
                        <div class="blog-wrap  pt-80 pb-50 clearfix">
                            <section class="col-md-9 col-sm-8 pb-50">                         
                                <article class="post-wrap pb-50">
                                    <div class="post-img pb-10">
                                        <a href="#"> <img alt="" src="assets/img/background/banner-1.jpg"> </a>
                                    </div>
                                    <div class="post-content">
                                        <h6 class="title-2 fs-10">Photography</h6>
                                        <a class="title-1" href="#">Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat.</a>
                                        <div class="pad-10">
                                            <span class="black-clr">
                                                Posted on
                                                <span>17th</span>
                                                <span>May</span>
                                                <span>2014</span>
                                            </span>
                                            <span class="pull-right">
                                                <a href="#"> <i class="fa fa-comment"></i> 12</a>
                                            </span>
                                        </div>
                                        <p>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat
                                            consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra.</p>
                                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore 
                                            magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis 
                                            nisl ut aliquip.</p>
                                    </div>
                                    <div class="post-footer">
                                        <span class="post-readmore">
                                            <a class="font2-title1 fs-12" href="single-blog.html">Read more <span class="arrow_right fs-20"></span> </a>
                                        </span>
                                    </div>
                                </article>

                                <div class="comments-article">
                                    <div class="pad-30">
                                        <h2 class="title-1 text-center"> 1 Comment  </h2>
                                    </div>
                                    <ol class="comments-box clearfix ">
                                        <li class="comment">
                                            <article class="comment-body" id="div-comment-5">
                                                <footer>
                                                    <div class="comment-author">
                                                        <img class="avatar"  src="assets/img/flickr/flickr-feed.jpg" alt="avtar">	
                                                        <b class="fn">admin</b> <span class="says">says:</span>					
                                                    </div><!-- .comment-author -->

                                                    <div class="comment-metadata">
                                                        <a href="#">
                                                            <time datetime="2015-01-19T09:37:32+00:00"> January 19, 2015 at 9:37 am	</time>
                                                        </a>
                                                    </div><!-- .comment-metadata -->

                                                </footer><!-- .comment-meta -->

                                                <div class="comment-content">
                                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                                                </div><!-- .comment-content -->

                                                <div class="reply">
                                                    <a href="#">Reply</a>
                                                </div>		
                                            </article><!-- .comment-body -->
                                            <ol class="children">
                                                <li>
                                                    <article class="comment-body">
                                                        <footer>
                                                            <div class="comment-author">
                                                                <img class="avatar" src="assets/img/flickr/flickr-feed.jpg" alt="avtar">						
                                                                <b class="fn">John Doe</b> <span class="says">says:</span>					
                                                            </div>
                                                            <div class="comment-metadata">
                                                                <a href="#">
                                                                    <time datetime="2007-09-04T10:49:03+00:00">
                                                                        September 4, 2007 at 10:49 am							
                                                                    </time>
                                                                </a>
                                                                <span><a href="#">Edit</a></span>					
                                                            </div>
                                                        </footer>
                                                        <div class="comment-content">
                                                            <p>Contributor comment.</p>
                                                        </div>
                                                        <div class="reply">
                                                            <a href="#">Reply</a>				
                                                        </div>
                                                    </article>
                                                    <ol class="children">
                                                        <li>
                                                            <article class="comment-body">
                                                                <footer>
                                                                    <div class="comment-author">
                                                                        <img class="avatar" src="assets/img/flickr/flickr-feed.jpg" alt="avtar">						
                                                                        <b class="fn">John Doe</b> <span class="says">says:</span>					
                                                                    </div>
                                                                    <div class="comment-metadata">
                                                                        <a href="#">
                                                                            <time datetime="2007-09-04T10:49:03+00:00">
                                                                                September 4, 2007 at 10:49 am							
                                                                            </time>
                                                                        </a>
                                                                        <span><a href="#">Edit</a></span>					
                                                                    </div>
                                                                </footer>
                                                                <div class="comment-content">
                                                                    <p>Contributor comment.</p>
                                                                </div>
                                                                <div class="reply">
                                                                    <a href="#">Reply</a>				
                                                                </div>
                                                            </article>                                     
                                                        </li>
                                                    </ol>
                                                </li>
                                            </ol>
                                        </li><!-- #comment-## -->
                                    </ol>

                                    <div class="comment-respond pt-50">
                                        <h3 class="title-1 text-center">Leave a Reply</h3>
                                        <div class="calculate-form">
                                            <form class="row">
                                                <div class="col-md-4 col-sm-12"> 
                                                    <div class="form-group">                                                        
                                                        <label class="title-2"> Name: </label>
                                                        <input type="text" class="form-control" placeholder=""> 
                                                    </div>                                        
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="title-2"> Email: </label>
                                                        <input type="text" class="form-control" placeholder=""> 
                                                    </div>                                        
                                                </div>
                                                <div class="col-md-4 col-sm-12">
                                                    <div class="form-group">
                                                        <label class="title-2"> Website URl: </label>
                                                        <input type="text" class="form-control" placeholder="">
                                                    </div>                                        
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <label class="title-2"> Message: </label>
                                                        <textarea rows="5" cols="25" class="form-control"></textarea> 
                                                    </div>                                        
                                                </div>       
                                                <div class="col-sm-12"> 
                                                    <div class="form-group">
                                                        <button class="btn-1"> Post Comment </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div><!-- #respond -->                                    
                                </div>
                            </section>  

                            <div class="visible-xs pad-30"></div>

                            <aside class="sidebar col-sm-4 col-md-3">
                                <div class="widget-wrap pb-50">
                                    <h4 class="title-1">Join The Newsletter</h4>
                                    <form action="#" method="post">
                                        <div class="form-group">
                                            <input type="text" title="search" name="search" class="form-control" placeholder="Type and hit enter...">
                                            <input type="submit" hidden="hidden">
                                        </div>
                                    </form>
                                </div>
                                <div class="widget-wrap pb-50 categories">
                                    <h4 class="title-1">Categories</h4>
                                    <ul>
                                        <li><a href="#">Design <small>14</small></a></li>
                                        <li><a href="#">Art Direction <small>21</small></a></li>
                                        <li class="active"><a href="#">HTML and CSS <small>12</small></a></li>
                                        <li><a href="#">Themes <small>19</small></a></li>
                                        <li><a href="#">Wordpress <small>36</small></a></li>
                                    </ul>
                                </div>
                                <div class="widget-wrap pb-50 flickr-feed">
                                    <h4 class="title-1">Flickr Feed</h4>
                                    <ul>
                                        <li><a href="#"><img alt="" src="assets/img/flickr/flickr-feed.jpg"></a></li>
                                        <li><a href="#"><img alt="" src="assets/img/flickr/flickr-feed.jpg"></a></li>
                                        <li><a href="#"><img alt="" src="assets/img/flickr/flickr-feed.jpg"></a></li>
                                        <li><a href="#"><img alt="" src="assets/img/flickr/flickr-feed.jpg"></a></li>
                                        <li><a href="#"><img alt="" src="assets/img/flickr/flickr-feed.jpg"></a></li>
                                        <li><a href="#"><img alt="" src="assets/img/flickr/flickr-feed.jpg"></a></li>
                                        <li><a href="#"><img alt="" src="assets/img/flickr/flickr-feed.jpg"></a></li>
                                        <li><a href="#"><img alt="" src="assets/img/flickr/flickr-feed.jpg"></a></li>
                                    </ul>
                                </div>
                                <div class="widget-wrap pb-50 tag-cloud">
                                    <h4 class="title-1">Tags</h4>
                                    <ul>
                                        <li><a href="#">Creative</a></li>
                                        <li><a href="#">Design</a></li>
                                        <li><a href="#">Art</a></li>
                                        <li><a href="#">Autpor Name</a></li>
                                        <li><a href="#">Coorperate</a></li>
                                        <li><a href="#">Wordpress</a></li>
                                        <li><a href="#">3D Animations</a></li>
                                    </ul>
                                </div>
                            </aside>                   
                        </div>
                    </div>
                </div>
                <!-- /.Blog -->

            </article>
            <!-- /.Content Wrapper -->
@endsection
           