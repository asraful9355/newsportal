<!DOCTYPE html>
<html lang="en" class="no-js">
   <head>
      <title>Newsportal</title>
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
      <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900,400italic" rel="stylesheet" type="text/css" />
      <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet" />
      <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/bootstrap.min.css')}}" media="screen" />
      <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/jquery.bxslider.css')}}" media="screen" />
      <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/font-awesome.css')}}" media="screen" />
      <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/magnific-popup.css')}}" media="screen" />
      <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/owl.carousel.css')}}" media="screen" />
      <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/owl.theme.css')}}" media="screen" />
      <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/ticker-style.css')}}" />
      <link rel="stylesheet" type="text/css" href="{{asset('front-end/css/style.css')}}" media="screen" />
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
                        <a class="navbar-brand" href="/"><img src="{{ asset($logoImg->logo) }}" alt="" style=""></a>
                        <!-- width:350px; height:120px;position: relative; right: 50px;bottom:20px; -->
                        <!-- <a href="navbar-brand"><img src="https://banglanews24.falgunibazar.com/uploads/logo/1644295879Untitled-1.png" alt=""></a> -->
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
         <section class="heading-news2">
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
              
            </div>
         </section>


    <!-- ai khan theke lekha suru hobe body -->
   

    <section class="single-wide">
            <div class="image-slider">
               <ul class="bxslider">
                  <li>
                     <div class="news-post image-post">
                        <img src="{{asset( $slider->featured)}}" alt="" style=" widht:1920px; height:400px;">
                        <div class="hover-box">
                           <div class="inner-hover">
                              <div class="container">
                                 <h1>{{ $slider->title }} </h1>
                                 <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>{{ $slider->created_at->diffForHumans()}}</li>
                                    <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                                    <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li>
                                    <li><i class="fa fa-eye"></i>{{ $slider->view }}</li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </li>
               </ul>
            </div>
         </section>
    
   
         <!-- End single-post-wide-slider -->
         <!-- block-wrapper-section
            ================================================== -->
         <section class="block-wrapper">
            <div class="container">
               <div class="row">
                  <div class="col-sm-8">
                     <!-- block content -->
                     <div class="block-content">
                        <!-- single-post box -->
                        <div class="single-post-box wide-version">
                           
                           <div class="post-content">{{ $slider->content }}</p>
                           </div>
                          
                           <div class="post-tags-box">
                              <ul class="tags-box">
                                 <li><i class="fa fa-tags"></i><span>বিষয়:</span></li>
                               @if(count($slider->tags) > 0)
                                 @foreach($slider->tags as $tag)
                                  <li><a href="{{ route('tag.single',['id'=>$tag->id])}}">{{ $tag->name }}</a></li>
                                 @endforeach

                               @else
                                <p>There Are No tag Yet.</p>
                               @endif
                                
                              </ul>
                           </div>
                           <div class="share-post-box">
                              <ul class="share-box">
                              <li><i class="fa fa-share-alt"></i><span>Share Post</span></li>
                                 <li><a class="facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a></li>
                                 <li><a class="twitter" href="https://www.twitter.com/"><i class="fa fa-twitter"></i><span>Share on Twitter</span></a></li>
                                 <li><a class="google" href="https://www.google.com/#"><i class="fa fa-google-plus"></i><span></span></a></li>
                                 <li><a class="linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i><span></span></a></li>
                              </ul>
                           </div>
                           <div class="prev-next-posts">
                         
                              <div class="prev-post">
                               @if($prev_post)
                                 <img src="{{asset($prev_post->featured )}}" alt="">
                                 <div class="post-content">
                                    <h2>
                                
                                     <a href="{{ route('single.post',['id'=>$prev_post->id, 'slug'=>$prev_post->slug])}}" title="prev post">{{$prev_post->title}}</a>
                                     
                                    </h2>
                                    <ul class="post-tags">
                                       <li><i class="fa fa-clock-o"></i>{{ $prev_post->created_at->diffForHumans() }}</li>
                                       <li><a href="#"><i class="fa fa-comments-o"></i><span>11</span></a></li>
                                    </ul>
                                 </div>
                                @endif
                              </div>
                              <div class="next-post">
                               @if($next_post)
                                 <img src="{{asset($next_post->featured )}}" alt="">
                                 <div class="post-content">
                                    <h2>
                                  
                                        <a href="{{ route('single.post',['id'=>$next_post->id, 'slug'=>$next_post->slug])}}" title="next post">{{$next_post->title}} </a>
                                 
                                    </h2>
                                    <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>{{ $next_post->created_at->diffForHumans() }}</li>
                                       <li><a href="#"><i class="fa fa-comments-o"></i><span>8</span></a></li>
                                    </ul>
                                 </div>
                                @endif
                              </div>
                           </div>
                           <div class="about-more-autor">
                              <ul class="nav nav-tabs">
                                 <li class="active">
                                    <a href="#about-autor" data-toggle="tab">About The Autor</a>
                                 </li>
                                 <li>
                                    <a href="#more-autor" data-toggle="tab">More From Autor</a>
                                 </li>
                              </ul>
                              <div class="tab-content">
                                 <div class="tab-pane active" id="about-autor">
                                    <div class="autor-box">
                                       <img src="{{ asset(Auth::user()->profile_photo_path) }}" alt="">
                                       <div class="autor-content">
                                          <div class="autor-title">
                                          @php
                                          $posts = App\Models\Post::latest()->get();
                                         @endphp
                                             <h1><span></span><a href="autor-details.html">{{ $post->count()}}</a></h1>
                                             <ul class="autor-social">
                                                <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                                                <li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                                                <li><a href="#" class="youtube"><i class="fa fa-youtube"></i></a></li>
                                                <li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
                                                <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                                <li><a href="#" class="dribble"><i class="fa fa-dribbble"></i></a></li>
                                             </ul>
                                          </div>
                                          <p>
                                             Suspendisse mauris. Fusce accumsan mollis eros. Pellentesque a diam sit amet mi ullamcorper vehicula. Integer adipiscing risus a sem. Nullam quis massa sit amet nibh viverra malesuada. 
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="tab-pane" id="more-autor">
                                    <div class="more-autor-posts">
                                       <div class="news-post image-post3">
                                          <img src="{{asset('front-end/upload/news-posts/gal1.jpg')}}" alt="">
                                          <div class="hover-box">
                                             <h2><a href="single-post.html">Donec odio. Quisque volutpat mattis eros.</a></h2>
                                             <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="news-post image-post3">
                                          <img src="{{asset('front-end/upload/news-posts/gal2.jpg')}}" alt="">
                                          <div class="hover-box">
                                             <h2><a href="single-post.html">Nullam malesuada erat ut turpis. </a></h2>
                                             <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="news-post image-post3">
                                          <img src="{{asset('front-end/upload/news-posts/gal3.jpg')}}" alt="">
                                          <div class="hover-box">
                                             <h2><a href="single-post.html">Suspendisse urna nibh.</a></h2>
                                             <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                             </ul>
                                          </div>
                                       </div>
                                       <div class="news-post image-post3">
                                          <img src="{{asset('front-end/upload/news-posts/gal4.jpg')}}" alt="">
                                          <div class="hover-box">
                                             <h2><a href="single-post.html">Donec nec justo eget felis facilisis fermentum. Aliquam </a></h2>
                                             <ul class="post-tags">
                                                <li><i class="fa fa-clock-o"></i>27 may 2013</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <!-- carousel box -->
                         
                           <!-- End carousel box -->
                           <!-- contact form box -->
                           <div class="contact-form-box">
                              <div class="title-section">
                                 <h1><span>Leave a Comment</span> <span class="email-not-published">Your email address will not be published.</span></h1>
                              </div>
                            @include('vendor.disqus');
                           </div>
                           <!-- End contact form box -->
                        </div>
                        <!-- End single-post box -->
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
                              <img src="	https://banglanews24.falgunibazar.com/FrontEndMagazine/upload/addsense/g.gif" alt="">
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
                  
                     <!-- End sidebar -->
                  </div>
               </div>
            </div>
         </section>
         <!-- End block-wrapper-section -->
    

      
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
                        <h1>Random Post</h1>
                        <ul class="list-posts">
                           <li>
                              <img src="#" alt="">
                              <div class="post-content">
                                 <a href="1">পাবনা প্রতিদিন</a>
                                 <h2><a href="#">পাবনায় নির্বাচন পরবর্তী সহিংসতায় আওয়ামী লীগের প্রচার সম্পাদক নিহত</a></h2>
                                 <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>Feb 5, 2022</li>
                                 </ul>
                              </div>
                           </li>
                           <li>
                              <img src="#" alt="">
                              <div class="post-content">
                                 <a href="2">বিশ্ব সংবাদ</a>
                                 <h2><a href="#">পুতিন-শি সম্পর্ক কোন দিকে</a></h2>
                                 <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>Feb 5, 2022</li>
                                 </ul>
                              </div>
                           </li>
                           <li>
                              <img src="#" alt="">
                              <div class="post-content">
                                 <a href="3">খেলা</a>
                                 <h2><a href="#">নাদিয়া নাদিম: আফগান শরণার্থী থেকে প্রভাবশালী ফুটবলার ও চিকিৎসক</a></h2>
                                 <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>Feb 5, 2022</li>
                                 </ul>
                              </div>
                           </li>
                           <li>
                              <img src="#" alt="">
                              <div class="post-content">
                                 <a href="4">জাতীয়</a>
                                 <h2><a href="#">সাড়ে চার মাসের মধ্যে করোনায় সর্বোচ্চ মৃত্যু</a></h2>
                                 <ul class="post-tags">
                                    <li><i class="fa fa-clock-o"></i>Feb 5, 2022</li>
                                 </ul>
                              </div>
                           </li>
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
      <!-- footer -->





      </div>
      <!-- End Container -->
      <script type="text/javascript" src="{{asset('front-end/js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('front-end/js/jquery.migrate.js')}}"></script>
      <script type="text/javascript" src="{{asset('front-end/js/jquery.bxslider.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('front-end/js/jquery.magnific-popup.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('front-end/js/bootstrap.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('front-end/js/jquery.ticker.js')}}"></script>
      <script type="text/javascript" src="{{asset('front-end/js/jquery.imagesloaded.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('front-end/js/jquery.isotope.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('front-end/js/owl.carousel.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('front-end/js/retina-1.1.0.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('front-end/js/script.js')}}"></script>
   </body>
</html>