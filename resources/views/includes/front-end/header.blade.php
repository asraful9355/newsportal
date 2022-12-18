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
                        <a class="navbar-brand" href="#"><img src="{{ asset($logoImg->logo) }}" alt="" style=""></a>
                        <!-- <a href="navbar-brand"><img src="https://banglanews24.falgunibazar.com/uploads/logo/1644295879Untitled-1.png" alt=""></a> -->
                     </div>
                     <div class="advertisement">
                        <div class="desktop-advert">
                         
                           <img width="936" height="120" src="https://tpc.googlesyndication.com/simgad/5177891174330933212" alt="">
                        </div>
                     </div
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

</div>