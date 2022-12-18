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
              
            </div>
         </section>

<!-- aikhan theke body er part suru -->

<div class="grid-box" style="  position: relative; top: 15px">
   <div class="title-section">
      <h1><span class="world">{{ $tag->name }}</span><span style=" margin: 20px;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    font-size: 12px;
    line-height: 20px;
    text-align: center;    
    background: #808080;
    color: #fff;">{{ $tag->posts->count()}}</span></h1></div></span></h1>
   </div>
   <div class="row">
   @foreach( $tag->posts()->get() as $post)
      <div class="col-sm-4 col-lg-3 col-md-6">
         <div class="news-post standard-post2">
            <div class="post-gallery">
               <img width="270" height="200"  src="{{ asset($post->featured)}}" alt="">
               <a class="category-post tech" href="#">{{ $post->category->name}}</a>
            </div>
            <div class="post-title">
               <h2><a  href="{{ route('single.post',['id'=>$post->id, 'slug'=>$post->slug])}}">{{ $post->title }}</a></h2>
               <ul class="post-tags">
                  <li><i class="fa fa-clock-o"></i>{{ $post->created_at->diffForHumans()}}</li>
                  <li><i class="fa fa-user"></i>by <a href="#">Md Ashraful Islam</a></li>
                  <!-- <li><a href="#"><i class="fa fa-comments-o"></i><span>23</span></a></li> -->
                  <li><i class="fa fa-eye"></i>{{ $post->view}}</li>
               </ul>
            </div>
           
         </div>
      </div>
     
     @endforeach
      
   </div>
</div>
      




        
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