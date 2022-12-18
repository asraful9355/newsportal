<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <title>Newsportal</title>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic" rel="stylesheet" type="text/css" />
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="screen" />
      <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css" media="screen" />
      <link rel="stylesheet" type="text/css" href="css/font-awesome.css" media="screen" />
      <link rel="stylesheet" type="text/css" href="css/magnific-popup.css" media="screen" />
      <link rel="stylesheet" type="text/css" href="css/owl.carousel.css" media="screen" />
      <link rel="stylesheet" type="text/css" href="css/owl.theme.css" media="screen" />
      <link rel="stylesheet" type="text/css" href="css/ticker-style.css" />
      <link rel="stylesheet" type="text/css" href="css/style.css" media="screen" />
   </head>
   <body class="boxed">
      <!-- Container -->
      <div id="container">
         <!-- Header
            ================================================== -->
         <header class="clearfix second-style">
            <!-- Bootstrap navbar -->
            <nav class="navbar navbar-default navbar-static-top" role="navigation">
               <!-- Top line -->
               <div class="top-line">
                  <div class="container">
                     <div class="row">
                        <div class="col-md-9">
                           <ul class="top-line-list">
                              
                              <li><span class="time-now">{{ "Today is" . date(" l d-m-y") }}</span></li>
                              
                           
                              <li><span class="time-now">{{ date("  h:i:a") }}</span></li>

                              <li><a href="{{ route('login')}}">Log In</a></li>
                              <li><a href="{{route('card.profile')}}">Contact</a></li>
                        
                           </ul>
                        </div>
                        <div class="col-md-3">
                           <ul class="social-icons">
                              <li>
                                 <a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                              </li>
                              <li>
                                 <a class="twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
                              </li>
                              <li>
                                 <a class="rss" href="https://rss.com/"><i class="fa fa-rss"></i></a>
                              </li>
                              
                              <li>
                                 <a class="linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                              </li>
                            
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Top line -->
               <!-- Logo & advertisement -->
               <div class="logo-advertisement">
                  <div class="container">
                     <!-- Brand and toggle get grouped for better mobile display -->
                     <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="/"><img src="{{ asset($logoImg->logo) }}" alt="" style=" height:70px; width:300px;"></a>
                       
                     </div>
                     <div class="advertisement">
                        <div class="desktop-advert">
                         
                           <img width="936" height="120" src="	https://tpc.googlesyndication.com/simgad/5177891174330933212" alt="">
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Logo & advertisement -->
               <!-- navbar list container -->
               <div class="nav-list-container ">
                  <div class="container">
                     <!-- Collect the nav links, forms, and other content for toggling -->
                     <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-left">
                           @foreach( $top_menu as $top)
                           <li class="drop">
                              <a class="home" href="{{ route('category.single',['id'=>$top->id])}}">{{ $top->name}}</a>
                           </li>
                           @endforeach 
                        </ul>
                        <form action="{{ route('search.post') }}" method="get" class="navbar-form navbar-right" role="search">
                           <input type="text" name="query" placeholder="Search here" required>
                           <button type="submit" id="search-submit"><i class="fa fa-search"></i></button>
                        </form>
                     </div>
                     <!-- /.navbar-collapse -->
                  </div>
               </div>
               <!-- End navbar list container -->
            </nav>
            <!-- End Bootstrap navbar -->
         </header>
         <!-- <-- End Header-->
         <section class="heading-news2 ">
            <div class="container ">
               <div class="ticker-news-box ">
                  <span class="breaking-news">সর্বশেষ</span>
                  <ul id="js-news">
                     @foreach($posts as $post)
                     <li class="news-item"><span class="time-news"></span>
                        <a  href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title}}</a>
                     </li>
                     @endforeach
                  </ul>
               </div>
               <div class="iso-call heading-news-box">
                  <div class="image-slider snd-size">
                     <ul class="bxslider ">
                        @foreach($first_posts as $post)
                        <li>
                           <div class="news-post image-post">
                              <img width="586" height="490" src="{{ $post->featured }}" alt="">
                              <div class="hover-box">
                                 <div class="inner-hover">
                                    <a class="btn btn-info">{{ $post->category->name}}</span></a>
                                    <h2><a href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title }}</a></h2>
                                    <ul class="post-tags">
                                       <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans() }}</li>
                                       <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                                       <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                      
                                       <li><i class="fa fa-eye"></i>{{ $post->view }}</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        </li>
                        @endforeach
                     </ul>
                  </div>
                  @foreach($second_posts as $post)
                  <div class="news-post image-post default-size">
                     <img width="293" height="245" src="{{ $post->featured}}" alt="image">
                     <div class="hover-box">
                        <div class="inner-hover">
                           <a class="category-post travel" href="9">{{ $post->category->name }}</a>
                           <h2><a href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title }}</a></h2>
                           <ul class="post-tags">
                              <li><i class="fa fa-clock-o"></i><span>{{ $post->created_at->diffForHumans() }}</span></li>
                           
                              <li><i class="fa fa-eye"></i>{{ $post->view}}</li>
                           </ul>
                           <p>
                              {{ $post->content}}}
                           </p>
                        </div>
                     </div>
                  </div>
                  @endforeach
               </div>
            </div>
         </section>
         <!-- End heading-news-section -->
         <!-- block-wrapper-section
            ================================================== -->
         <section class="block-wrapper">
            <div class="container">
               <div class="row">
                  <div class="col-sm-8">
                     <!-- block content -->
                     <div class="block-content">
                        <!-- grid box -->
                        <div class="grid-box">
                           <div class="title-section">
                              <h1><span>আজকের খবর</span></h1>
                           </div>
                           <div class="row">
                              @foreach($todayOne as $two)
                              <div class="col-md-6">
                                 <div class="news-post image-post2">
                                    <div class="post-gallery">
                                       <img width="368" height="300"  src="{{ $two->featured }}" alt="">
                                       <div class="hover-box">
                                          <div class="inner-hover">
                                             <a class="category-post tech" href="#">{{$two->category->name }}</a>
                                             <h2><a  href="{{ route('single.post',['id'=>$two->id, 'slug'=>$two->slug])}}">{{ $two->title }}</a></h2>
                                             <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>{{ $two->created_at->diffForHumans() }}</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam </a></li>
                                                <li><i class="fa fa-eye"></i>{{$two->view}}</li>
                                               
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                              <div class="col-md-6">
                                 <ul class="list-posts">
                                    @foreach( $today_news as $news)	
                                    <li>
                                       <img width="100" height="86"  src="{{ $news->featured }}" alt="">
                                       <div class="post-content">
                                          <a href="#">{{ $news->category->name }}</a>
                                          <h2><a  href="{{ route('single.post',['id'=>$news->id, 'slug'=>$news->slug])}}">{{ $news->title }}</a></h2>
                                          <ul class="post-tags">
                                             <li><i class="fa fa-clock-o"></i>{{ $news->created_at->diffForHumans()}}</li>
                                             <li><i class="fa fa-eye"></i>{{ $news->view}}</li>
                                          </ul>
                                       </div>
                                    </li>
                                    @endforeach	
                                 </ul>
                              </div>
                           </div>
                           <div class="row">
                              @foreach($today as $two)
                              <div class="col-md-6">
                                 <div class="news-post image-post2">
                                    <div class="post-gallery">
                                       <img width="368" height="300"  src="{{ $two->featured }}" alt="">
                                       <div class="hover-box">
                                          <div class="inner-hover">
                                             <a class="category-post tech" href="#">{{$two->category->name }}</a>
                                             <h2><a  href="{{ route('single.post',['id'=>$two->id, 'slug'=>$two->slug])}}">{{ $two->title }}</a></h2>
                                             <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>{{ $two->created_at->diffForHumans() }}</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam </a></li>
                                                <li><i class="fa fa-eye"></i>{{ $two->view}}</li>
                                             
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              @endforeach
                              <div class="col-md-6">
                                 <ul class="list-posts">
                                    @foreach( $today_second as $news)	
                                    <li>
                                       <img width="100" height="86"  src="{{ $news->featured }}" alt="">
                                       <div class="post-content">
                                          <a href="#">{{ $news->category->name ?? 'No Name'}}</a>
                                          <h2><a  href="{{ route('single.post',['id'=>$news->id, 'slug'=>$news->slug])}}">{{ $news->title }}</a></h2>
                                          <ul class="post-tags">
                                             <li><i class="fa fa-clock-o"></i>{{ $news->created_at->diffForHumans()}}</li>
                                             <li><i class="fa fa-eye"></i>{{ $news->view }}</li>
                                          </ul>
                                       </div>
                                    </li>
                                    @endforeach	
                                 </ul>
                              </div>
                           </div>
                           <div class="center-button">
                              <a href="#"><i class="fa fa-refresh"></i> More from featured</a>
                           </div>
                        </div>
                        <!-- End grid box -->
                        <!-- google addsense -->
                        <div class="advertisement">
                           <div class="desktop-advert">
                              <span>Advertisement</span>
                              <img src="	https://banglanews24.falgunibazar.com/FrontEndMagazine/upload/addsense/blog.gif" alt="">
                           </div>
                        </div>
                        <!-- End google addsense -->
                        <!-- grid box -->
                        <!-- ()->take(1)->get() as $post -->
                     @foreach( $main_menu as $category)
                        <div class="grid-box">
                           <div class="title-section">
                              <h1><span>{{ $category->name}}</span></h1>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="news-post image-post2">
                                    @foreach( $category->posts()->take(1)->get() as $post)
                                    <div class="post-gallery">
                                       <img width="368" height="300"  src="{{ $post->featured }}" alt="">
                                       <div class="hover-box">
                                          <div class="inner-hover">
                                             <a class="category-post tech" href="">{{ $post->category->name}}</a>
                                             <h2 style="color:white;"><a  href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}"></a>{{ $post->title }}</h2>
                                             <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                                                <li><i class="fa fa-eye"></i>{{ $post->view }}</li>
                                               
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <ul class="list-posts">
                                 @foreach( $category->posts()->take(3)->get() as $post)
                                    <li>
                                       <img width="100" height="86"  src="{{ $post->featured}}" alt="">
                                       <div class="post-content">
                                          <a href="10"></a>
                                          <h2><a  href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title}}</a></h2>
                                          <ul class="post-tags">
                                             <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                             <li><i class="fa fa-eye"></i>{{ $post->view}}</li>
                                          </ul>
                                       </div>
                                    </li>
                                 @endforeach 
                                 </ul>
                              </div>
                           </div>
                           <div class="center-button">
                              <a href="#"><i class="fa fa-refresh"></i> More from featured</a>
                           </div>
                        </div>
                        @endforeach

                   @foreach( $main_second as $category)
                        <div class="grid-box">
                           <div class="title-section">
                              <h1><span>{{ $category->name}}</span></h1>
                           </div>
                           <div class="row">
                              <div class="col-md-6">
                                 <div class="news-post image-post2">
                                 @foreach( $category->posts()->take(1)->get() as $post)
                                    <div class="post-gallery">
                                       <img width="368" height="300"  src="{{ $post->featured}}" alt="">
                                       <div class="hover-box">
                                          <div class="inner-hover">
                                             <a class="category-post tech" href="28">{{ $category->name}}</a>
                                             <h2><a target="_blank" href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title }}</a></h2>
                                             <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                                <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                                                <li><i class="fa fa-eye"></i>{{ $post->view }}</li>
                                              
                                          </div>
                                       </div>
                                    </div>
                               @endforeach

                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <ul class="list-posts">
                                 @foreach( $category->posts()->take(3)->get() as $post)
                                    <li>
                                       <img width="100" height="86"  src="{{ $post->featured }}" alt="">
                                       <div class="post-content">
                                          <a href="28">{{ $post->category->name }}</a>
                                          <h2><a target="_blank" href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title}}</a></h2>
                                          <ul class="post-tags">
                                             <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                             <li><i class="fa fa-eye"></i>{{ $post->view }}</li>
                                          </ul>
                                       </div>
                                    </li>
                                  @endforeach
                                 </ul>
                              </div>
                           </div>
                        @endforeach
                           <div class="center-button">
                              <a href="#"><i class="fa fa-refresh"></i> More from featured</a>
                           </div>
                        </div>
                      
                        <!-- grid-box -->
                      @foreach( $main_third as $category)   
                        <div class="grid-box">
                           <div class="title-section">
                              <h1><span class="world">{{ $category->name}}</span></h1>
                           </div>
                           <div class="row">
                           @foreach( $category->posts()->take(3)->get() as $post)
                              <div class="col-md-4">
                            
                                 <div class="news-post standard-post2">
                                    <div class="post-gallery">
                                       <img width="270" height="200"  src="{{ $post->featured }}" alt="">
                                       <a class="category-post tech" href="15">{{ $post->category->name}}</a>
                                    </div>
                                    <div class="post-title">
                                       <h2><a  href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title}}</a></h2>
                                       <ul class="post-tags">
                                          <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                          <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                                       
                                          <li><i class="fa fa-eye"></i>{{ $post->view }}</li>
                                       </ul>
                                    </div>
                                 </div>
                             
                              </div>
                              @endforeach 
                              
                           </div>
                        </div>

                      @endforeach  
                        <!-- End grid-box -->
                        <!-- google addsense -->
                        <div class="advertisement">
                           <div class="desktop-advert">
                              <span>Advertisement</span>
                              <img src="https://tpc.googlesyndication.com/simgad/8155636016249765331" alt="">
                           </div>
                        </div>
                        <!-- End google addsense -->
                        <!-- article box -->
                        <div class="article-box">
                           <div class="title-section">
                              <h1><span>{{ $main_seven->name}}</span></h1>
                           </div>
                           <div class="news-post article-post">
                              <div class="row">
                                 <div class="row">
                                 @foreach( $main_seven->posts()->take(1)->get() as $post)
                                    <div class="col-sm-5">
                                       <div class="post-gallery">
                                          <img alt="" src="{{ $post->featured }}">
                                       </div>
                                    </div>
                                    <div class="col-sm-7">
                                       <div class="post-content">
                                          <h2><a  href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title}}</a></h2>
                                          <ul class="post-tags">
                                             <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                             <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                                              <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                              <li><i class="fa fa-eye">{{ $post->view }}</i></li>
                                          </ul>
                                          <p>
                                           {{ $post->content }}
                                          </p>
                                          <a href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}" class="read-more-button"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                                       </div>
                                    </div>
                                    @endforeach
                                 </div>
                              </div>
                           </div>
                        </div>
                       
                     </div>
                     <!-- End block content -->
                  </div>
                  <div class="col-sm-4">
                     <!-- sidebar -->
                     <div class="sidebar">
                        <div class="widget social-widget">
                           <div class="title-section">
                              <h1><span>STAY CONNECTED</span></h1>
                           </div>
                           <ul class="social-share">
                              <li>
                                 <a href="#" class="rss"><i class="fa fa-rss"></i></a>
                                 <span class="number">9,455</span>
                                 <span>Subscribers</span>
                              </li>
                              <li>
                                 <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                                 <span class="number">56,743</span>
                                 <span>Fans</span>
                              </li>
                              <li>
                                 <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                                 <span class="number">43,501</span>
                                 <span>Followers</span>
                              </li>
                              <li>
                                 <a href="#" class="google"><i class="fa fa-google-plus"></i></a>
                                 <span class="number">35,003</span>
                                 <span>Followers</span>
                              </li>
                           </ul>
                        </div>
                        <div class="widget tab-posts-widget">
                           <ul class="nav nav-tabs" id="myTab">
                              <li class="active">
                                 <a href="#option1" data-toggle="tab">জনপ্রিয়</a>
                              </li>
                              <li>
                                 <a href="#option2" data-toggle="tab">সাম্প্রতিক</a>
                              </li>
                              <li>
                                 <a href="#option3" data-toggle="tab">শীর্ষ পর্যালোচনা</a>
                              </li>
                           </ul>
                           <div class="tab-content">
                              <div class="tab-pane active" id="option1">
                                 <ul class="list-posts">
                                 @foreach($jonoprio->take(4) as $prio)
                                    <li>
                                       <img src="{{ asset($prio->featured ) }}" alt="">
                                       <div class="post-content">
                                          <h2><a href="{{ route('single.post',['id'=>$prio->id, 'slug'=>$prio->slug])}}">{{ $prio->title }}</a></h2>
                                          <ul class="post-tags">
                                             <li><i class="fa fa-clock-o"></i>{{ $prio->created_at->diffForHumans() }}</li>
                                          </ul>
                                       </div>
                                    </li>
                                 @endforeach
                                    
                                 </ul>
                              </div>
                              <div class="tab-pane" id="option2">
                                 <ul class="list-posts">
                                 @foreach($recent->take(4) as $rcnt)
                                    <li>
                                       <img src="{{ asset($rcnt->featured) }}" alt="">
                                       <div class="post-content">
                                          <h2><a href="{{ route('single.post',['id'=>$rcnt->id, 'slug'=>$rcnt->slug])}}">{{ $rcnt->title }}</a></h2>
                                          <ul class="post-tags">
                                             <li><i class="fa fa-clock-o"></i>{{ $rcnt->created_at->diffForHumans() }}</li>
                                          </ul>
                                       </div>
                                    </li>
                                 @endforeach
                                 </ul>
                              </div>
                              <div class="tab-pane" id="option3">
                                 <ul class="list-posts">
                                 @foreach($jonoprio->take(4) as $prio)
                                    <li>
                                    <img src="{{ asset($prio->featured) }}" alt="">
                                       <div class="post-content">
                                          <h2><a href="{{ route('single.post',['id'=>$prio->id, 'slug'=>$prio->slug])}}">{{ $prio->title }}</a></h2>
                                          <ul class="post-tags">
                                             <li><i class="fa fa-clock-o"></i>{{ $prio->created_at->diffForHumans() }}</li>
                                          </ul>
                                       </div>
                                    </li>
                                 @endforeach
                                 </ul>
                              </div>
                           </div>
                        </div>
                        <div class="advertisement">
                           <div class="desktop-advert">
                              <span>Advertisement</span>
                              <img src="https://banglanews24.falgunibazar.com/FrontEndMagazine/upload/addsense/g.gif" alt="">
                           </div>
                        </div>
                        <div class="widget features-slide-widget">
                           <div class="title-section">
                              <h1><span>Featured Posts</span></h1>
                           </div>
                           <div class="image-post-slider">
                              <ul class="bxslider">
                                 <li>
                                    <div class="news-post image-post2">
                                       <div class="post-gallery">
                                          <img width="368" height="300" src="#" alt="">
                                          <div class="hover-box">
                                             <div class="inner-hover">
                                                <h2><a  href="#">আইপিএলের প্লে-অফ সূচি</a></h2>
                                                <ul class="post-tags">
                                                   <li><i class="fa fa-clock-o"></i>May 24, 2022</li>
                                                   <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                                                 
                                                   <li><i class="fa fa-eye"></i>20</li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="news-post image-post2">
                                       <div class="post-gallery">
                                          <img width="368" height="300" src="#" alt="">
                                          <div class="hover-box">
                                             <div class="inner-hover">
                                                <h2><a  href="">আঞ্চলিক সংকট মোকাবেলায় অর্থনৈতিক সহযোগিতা জোরদারে প্রধানমন্ত্রীর পাঁচ প্রস্তাব</a></h2>
                                                <ul class="post-tags">
                                                   <li><i class="fa fa-clock-o"></i>May 24, 2022</li>
                                                   <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                                                 
                                                   <li><i class="fa fa-eye"></i>4</li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                                 <li>
                                    <div class="news-post image-post2">
                                       <div class="post-gallery">
                                          <img width="368" height="300" src="#" alt="">
                                          <div class="hover-box">
                                             <div class="inner-hover">
                                                <h2><a  href="#">অ্যাটলেটিকোকে হারিয়ে শীর্ষ চারে বার্সেলোনা</a></h2>
                                                <ul class="post-tags">
                                                   <li><i class="fa fa-clock-o"></i>Feb 9, 2022</li>
                                                   <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                                                
                                                   <li><i class="fa fa-eye"></i>5</li>
                                                </ul>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </li>
                              </ul>
                           </div>
                        </div>
                        <div class="advertisement">
                           <div class="desktop-advert">
                              <span>Advertisement</span>
                              <img src="https://tpc.googlesyndication.com/simgad/11884754115564804005" alt="">
                           </div>
                        </div>
                        <div class="widget subscribe-widget">
                           <form class="subscribe-form" action="{{ route('subscribe') }}" method="post">
                     
                           @csrf
                              <h1>Subscribe to RSS Feeds</h1>
                              <input type="text" name="email" id="subscribe" placeholder="Email"/>
                              <button id="submit-subscribe">
                              <i class="fa fa-arrow-circle-right"></i>
                              </button>
                              <p>Get all latest content delivered to your email a few times a month.</p>
                           </form>
                        </div>
                        <div class="advertisement">
                           <div class="desktop-advert">
                              <span>Advertisement</span>
                              <img src="https://banglanews24.falgunibazar.com/FrontEndMagazine/upload/addsense/h.gif" alt="">
                           </div>
                        </div>
                        <div class="widget post-widget">
                           <div class="title-section">
                              <h1><span>Featured Video</span></h1>
                           </div>
                           <div class="news-post video-post">
                              <img alt="" src="# ">
                              <a href="" class="video-link"><i class="fa fa-play-circle-o"></i></a>
                             
                           </div>
                           <!-- <p>Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis. </p> -->
                        </div>
                        <div class="advertisement">
                           <div class="desktop-advert">
                              <span>Advertisement</span>
                              <img src="https://banglanews24.falgunibazar.com/FrontEndMagazine/upload/addsense/f.gif" alt="">
                           </div>
                        </div>
                        <div class="advertisement">
                           <div class="desktop-advert">
                              <span>Advertisement</span>
                              <img src="	https://tpc.googlesyndication.com/simgad/2052524042816878733" alt="">
                           </div>
                        </div>
                     </div>
                     <!-- End sidebar -->
                  </div>
               </div>
               <div class="grid-box">
                  <div class="title-section">
                     <h1><span class="world">{{$main_four->name}}</span></h1>
                  </div>
                  <div class="row">
                  @foreach( $main_four->posts()->take(4)->get() as $post)
                     <div class="col-sm-4 col-lg-3 col-md-6">
                        <div class="news-post standard-post2">
                          
                           <div class="post-gallery">
                              <img width="270" height="200"  src="{{ $post->featured}}" alt="">
                              <a class="category-post tech" href="">{{ $post->category->name }}</a>
                           </div>
                           <div class="post-title">
                              <h2><a href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title}}</a></h2>
                              <ul class="post-tags">
                                 <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                 <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                              
                                 <li><i class="fa fa-eye"></i>{{ $post->view }}</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                     @endforeach
  
                  </div>
               </div>
               
               <div class="grid-box">
                  <div class="title-section">
                     <h1><span class="world">{{ $main_five->name}}</span></h1>
                  </div>
                  
                  <div class="row">
                  @foreach( $main_five->posts()->take(4)->get() as $post)
                     <div class="col-sm-4 col-lg-3 col-md-6">
                        <div class="news-post standard-post2">
                           <div class="post-gallery">
                              <img width="270" height="200"  src="{{ $post->featured}}" alt="">
                              <a class="category-post tech" href="#">{{ $post->category->name}}</a>
                           </div>
                           <div class="post-title">
                              <h2><a  href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title}}</a></h2>
                              <ul class="post-tags">
                                 <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                 <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                               
                                 <li><i class="fa fa-eye"></i>{{ $post->view }}</li>
                              </ul>
                           </div>
                          
                        </div>
                     </div>
                     @endforeach
                    
                  </div>
               </div>
              
               <div class="grid-box">
                  <div class="title-section">
                     <h1><span class="world">{{ $main_six->name}}</span></h1>
                  </div>
                  
                  <div class="row">
                  @foreach( $main_six->posts()->take(4)->get() as $post)
                     <div class="col-sm-4 col-lg-3 col-md-6">
                        <div class="news-post standard-post2">
                           <div class="post-gallery">
                              <img width="270" height="200"  src="{{ $post->featured}}" alt="">
                              <a class="category-post tech" href="#">{{ $post->category->name}}</a>
                           </div>
                           <div class="post-title">
                              <h2><a  href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title}}</a></h2>
                              <ul class="post-tags">
                                 <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                 <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                                
                                 <li><i class="fa fa-eye"></i>{{ $post->view }}</li>
                              </ul>
                           </div>
                          
                        </div>
                     </div>
                     @endforeach
                    
                  </div>
               </div>
           
               <div class="heading-news2" style="background: white;">
                  <div class="title-section">
                     <h1><span class="world">{{ $chobi->name}}</span></h1>
                  </div>
                  <div class="container">
                     <div class="iso-call heading-news-box">
                        <div class="image-slider snd-size">
                        @foreach( $chobi->posts()->take(1)->get() as $post)
                           <div class="news-post image-post">
                              <img width="586" height="490" src="{{ $post->featured }}" alt="">
                              <div class="hover-box">
                                 <div class="inner-hover">
                                    <a class="category-post" href="#">{{ $chobi->name}}</a>
                                    <h2><a href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title }}</a></h2>
                                    <ul class="post-tags">
                                       <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                                       <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                                     
                                       <li><i class="fa fa-clock-o"></i>5 months ago</li>
                                    </ul>
                                 </div>
                              </div>
                           </div>
                        @endforeach 
                        </div>
                     @foreach( $chobi->posts()->take(4)->skip(1)->get() as $post)
                        <div class="news-post image-post default-size">
                           <img width="293" height="240" src="{{ $post->featured}}" alt="">
                           <div class="hover-box">
                              <div class="inner-hover">
                                 <a class="category-post" href="#">{{ $post->category->name }}</a>
                                 <h2><a href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title }}</a></h2>
                                 <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i><span>{{ $post->created_at->diffForHumans()}}</span></li>
                                    <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                                  
                                    <li><i class="fa fa-eye"></i>{{ $post->view }}</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                        @endforeach
                     </div>
                  </div>
               </div>
            </div>
         
      </div>
      </div>
      </section>
      <!-- block-wrapper-section
         ================================================== -->
      <!-- footer
         ================================================== -->
      <footer>
         <div class="container">
            <div class="footer-widgets-part">
               <div class="row">
                  <div class="col-md-3">
                     <div class="widget text-widget">
                        <h1>About</h1>
                        <p style="">bdnews24.com does not warrant that this website or any of its functions will be uninterrupted or error-free. Users assume the entire cost of all necessary servicing, repair or correction due to their use of this website.</p>
                        <p></p>
                     </div>
                     <div class="widget social-widget">
                        <h1>Stay Connected</h1>
                        <ul class="social-icons">
                           <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                           <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                           <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                           <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                           <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                           <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                           <li><a href="#" class="vimeo"><i class="fa fa-vimeo-square"></i></a></li>
                           <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                           <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                           <li><a href="#" class="flickr"><i class="fa fa-flickr"></i></a></li>
                           <li><a href="#" class="rss"><i class="fa fa-rss"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="widget posts-widget">
                        <h1></h1>
                        <ul class="list-posts">
                      
                           <!-- <li>
                              <img src="" alt="">
                              <div class="post-content">
                                 <a href="1"></a>
                                 <h2><a href="{{ route('category.single',['id'=>$top->id])}}">পাবনায় নির্বাচন পরবর্তী সহিংসতায় আওয়ামী লীগের প্রচার সম্পাদক নিহত</a></h2>
                                 <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>Feb 5, 2022</li>
                                 </ul>
                              </div>
                           </li> -->
                     
                          
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="widget categories-widget">
                        <h1>Hot Categories</h1>
                        <ul class="category-list">
                           @foreach($footer_category as  $category)  
                           <li>
                              <a href="{{ route('category.single',['id'=>$category->id])}}">
                              {{ $category->name }}
                              <span>{{ $category->posts->count()}}</span>
                              </a>
                           </li>
                           @endforeach
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-3">
                     <div class="widget flickr-widget">
                        <h1>Flickr Photos</h1>
                        <ul class="flickr-list">
                           <li><a href=""><img src="" alt=""></a></li>
                           <li><a href=""><img src="" alt=""></a></li>
                           <li><a href=""><img src="" alt=""></a></li>
                           <li><a href=""><img src="" alt=""></a></li>
                           <li><a href=""><img src="" alt=""></a></li>
                           <li><a href="><img src="" alt=""></a></li>
                        </ul>
                        <a href="#">View more photos...</a>
                     </div>
                  </div>
               </div>
            </div>
            <div class="footer-last-line">
               <div class="row">
                  <div class="col-md-6">
                     <p>Copyright © 2021-2022 Md Ashraful Islam . All rights reserved.</p>
                  </div>
                  <div class="col-md-6">
                     <nav class="footer-nav">
                        <ul>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- footer
         ================================================== -->

      </div>
      <!-- End Container -->
      <script type="text/javascript" src="js/jquery.min.js"></script>
      <script type="text/javascript" src="js/jquery.migrate.js"></script>
      <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
      <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
      <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script type="text/javascript" src="js/jquery.ticker.js"></script>
      <script type="text/javascript" src="js/jquery.imagesloaded.min.js"></script>
      <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
      <script type="text/javascript" src="js/owl.carousel.min.js"></script>
      <script type="text/javascript" src="js/retina-1.1.0.min.js"></script>
      <script type="text/javascript" src="js/script.js"></script>
   </body>
</html>