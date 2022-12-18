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
      <!-- footer
         ================================================== -->

