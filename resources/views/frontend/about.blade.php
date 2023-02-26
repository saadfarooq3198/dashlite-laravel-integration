<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
    <link rel="stylesheet" href="{{ asset('style/about.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <script src="{{ asset('/imporFunc.js') }}" defer></script>
    <script src="{{ asset('/script.js') }}" defer></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <title>Tack - About Us</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css'><link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
 
</head>

<body>
  @php
      $t = "ddfdff";
  @endphp
 <style>
  .owl-wrapper-outer:after {
  content: "{!! settings('about', 'special_events') !!}";
  font-size: 20px;
}
 </style>
    @include("frontend.layouts.header")
    <div class="sticky-menu">
        <!-- --------------- menu ------------------  -->
        <div class="tabber">
          <label for="tab-checkbox" class="tab-menu"><img src="../img/menu img/menu.svg" class="menu-svg" alt=""></label>
          <input type="checkbox" name="tab-checkbox" id="tab-checkbox" class="tab-checkbox">
        </div>
    
        <!-- ---------------- navigation --------------------- -->
        <div class="sticky-navigation">
          <ul class="tab-imgs">
            <!-- 1 img  -->
            <li class="tab-img "><img src="../img/menu img/top 1.svg" class="my-svg hoverImg"  data-title-id="title-1" alt="">
              <div class="title-cont" id="title-1">
                <p class=" bold title title-right"> <img src="../img/menu img/stick.svg" class="stick" alt=""> Our Weekend School 1</p>
    
              <ul class="tab-ul">
                <li class="tab-li md-para"><a href="" class="tab-link h-red">School Value</a></li>
                <li class="tab-li md-para"><a href="#" class="tab-link h-red">Newsletter</a></li>
                <li class="tab-li md-para"><a href="#" class="tab-link h-red">Photogallery</a></li>
                <li class="tab-li md-para"><a href="#" class="tab-link h-red">Testimonials & review</a></li>
              </ul>
              </div>
            </li>
            <!-- 2nd img -->
            <li class="tab-img"><img src="../img/menu img/top 2.svg" class="my-svg hoverImg" data-title-id="title-2" alt="">
              <div class="title-cont" id="title-2">
                <p class=" bold title title-right"> <img src="../img/menu img/stick.svg" class="stick" alt=""> Our Weekend School 2</p>
    
              <ul class="tab-ul">
                <li class="tab-li md-para"><a href="#" class="tab-link h-green">School Value</a></li>
                <li class="tab-li md-para"><a href="#" class="tab-link h-green">Newsletter</a></li>
                <li class="tab-li md-para"><a href="#" class="tab-link h-green">Photogallery</a></li>
                <li class="tab-li md-para"><a href="#" class="tab-link h-green">Testimonials & review</a></li>
              </ul>
              </div>
            </li>
            <!-- 3rd img -->
            <li class="tab-img"><img src="../img/menu img/top 3.svg" class="my-svg hoverImg" data-title-id="title-3" alt="">
              <div class="title-cont" id="title-3">
                <p class=" bold title title-right"> <img src="../img/menu img/stick.svg" class="stick" alt=""> Our Weekend School 3</p>
    
              <ul class="tab-ul">
                <li class="tab-li md-para"><a href="#" class="tab-link h-blue">School Value</a></li>
                <li class="tab-li md-para"><a href="#" class="tab-link h-blue">Newsletter</a></li>
                <li class="tab-li md-para"><a href="#" class="tab-link h-blue">Photogallery</a></li>
                <li class="tab-li md-para"><a href="#" class="tab-link h-blue">Testimonials & review</a></li>
              </ul>
              </div>
            </li>
            <!-- 4th img  -->
            <li class="tab-img"><img src="../img/menu img/top 4.svg" class="my-svg hoverImg"data-title-id="title-4" alt="">
              <div class="title-cont" id="title-4">
                <p class=" bold title title-right"> <img src="../img/menu img/stick.svg" class="stick" alt=""> Our Weekend School 4</p>
    
              <ul class="tab-ul">
                <li class="tab-li md-para"><a href="#" class="tab-link h-yellow">School Value</a></li>
                <li class="tab-li md-para"><a href="#" class="tab-link h-yellow">Newsletter</a></li>
                <li class="tab-li md-para"><a href="#" class="tab-link h-yellow">Photogallery</a></li>
                <li class="tab-li md-para"><a href="#" class="tab-link h-yellow">Testimonials & review</a></li>
              </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>

    <!-- --------------------------------- main think start here -----------------------------------  -->

   
     <!-- ---------------------------- landing page swiper ---------------------------  -->
     <div class="swiper mySwiper_custom backimg about-sli">
        <div class="swiper-wrapper about-sli">
          @foreach ($banners as $banner)
            <div class="swiper-slide flex-box"><img src="{{asset('storage/images/'.$banner->banner)}}" alt="">
            <div class="banner-text">
              <h1>Welcome !</h1>
            </div>
          </div>
          @endforeach
          {{-- <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 1.png" alt="">
            <div class="banner-text">
              <h1>Welcome !</h1>
            </div>
        </div>
          <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 1.png" alt="">
            <div class="banner-text">
              <h1>Welcome !</h1>
            </div>
         </div>
          <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 1.png" alt="">
            <div class="banner-text">
              <h1>Welcome !</h1>
            </div>
          </div>
          <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 1.png" alt="">
            <div class="banner-text">
              <h1>Welcome !</h1>
            </div>
          </div> --}}
        </div>
        <div class="swiper-pagination"></div>
        <div class="shadowbg"></div>
      </div>
    

  <!-- ---------------------------- landing page swiper end ---------------------------  -->

     
    <!-- ---------------- who's who ---------------------  -->
    <section  class="container who reveal">
      {!! settings('about', 'who_is_who') !!}
    </section>
 <!-- ------------- slider ------------------  -->
    <div class="slider-container" style="margin-top:5rem;">
        <div class="slider">
          <div>
            <div class="slide-wrap">
              <div class="image"></div>

              <section class="owner">
                <div class="owner-container small-container reveal" >
                    <div class="flex-layout-sp team">
                        <div class="director father-div">
                            <img src="../img/about page/Group 41858.svg" alt="" class="svg-bulb">
                            <h2 class="semi-bold">Rabab Hamiduddin</h2>
                            <p class="post">Director and Founder of the School.</p>
        
                            <img src="../img/about page/Group 11.svg" alt="" class="svg">
        
                            <p class="post">Rabab Hamiduddin founded The Arabic Club for Kids in 2007.</p>
                        </div>
                        <span class="stick-line"></span>
                        <div class="manager father-div">
                            <img src="../img/about page/Group 41951.svg" alt="" class="svg-bulb">
                            <h2 class="semi-bold">Fatima Naghi</h2>
                            <p class="post">Manager</p>
        
                            <img src="../img/about page/Group 11.svg" alt="" class="svg">
        
                            <p class="post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</p>
                        </div>
                    </div>
                </div>
                
            </section>            </div>
          </div>
          <div>
            <div class="slide-wrap">
              <div class="image"></div>
              <section class="owner">
                <div class="owner-container small-container reveal" >
                    <div class="flex-layout-sp team">
                        <div class="director father-div">
                            <img src="../img/about page/Group 41858.svg" alt="" class="svg-bulb">
                            <h2 class="semi-bold">Rabab Hamiduddin</h2>
                            <p class="post">Director and Founder of the School.</p>
        
                            <img src="../img/about page/Group 11.svg" alt="" class="svg">
        
                            <p class="post">Rabab Hamiduddin founded The Arabic Club for Kids in 2007.</p>
                        </div>
                        <span class="stick-line"></span>
                        <div class="manager father-div">
                            <img src="../img/about page/Group 41951.svg" alt="" class="svg-bulb">
                            <h2 class="semi-bold">Fatima Naghi</h2>
                            <p class="post">Manager</p>
        
                            <img src="../img/about page/Group 11.svg" alt="" class="svg">
        
                            <p class="post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</p>
                        </div>
                    </div>
                </div>
            </section>              </div>
          </div>
          <div>
            <div class="slide-wrap">
              <div class="image"></div>
              <section class="owner">
                <div class="owner-container small-container reveal" >
                    <div class="flex-layout-sp team">
                        <div class="director father-div">
                            <img src="../img/about page/Group 41858.svg" alt="" class="svg-bulb">
                            <h2 class="semi-bold">Rabab Hamiduddin</h2>
                            <p class="post">Director and Founder of the School.</p>
        
                            <img src="../img/about page/Group 11.svg" alt="" class="svg">
        
                            <p class="post">Rabab Hamiduddin founded The Arabic Club for Kids in 2007.</p>
                        </div>
                        <span class="stick-line"></span>
                        <div class="manager father-div">
                            <img src="../img/about page/Group 41951.svg" alt="" class="svg-bulb">
                            <h2 class="semi-bold">Fatima Naghi</h2>
                            <p class="post">Manager</p>
        
                            <img src="../img/about page/Group 11.svg" alt="" class="svg">
        
                            <p class="post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</p>
                        </div>
                    </div>
                </div>
            </section>              </div>
          </div>
          <div>
            <div class="slide-wrap">
              <div class="image"></div>
              <section class="owner">
                <div class="owner-container small-container reveal" >
                    <div class="flex-layout-sp team">
                        <div class="director father-div">
                            <img src="../img/about page/Group 41858.svg" alt="" class="svg-bulb">
                            <h2 class="semi-bold">Rabab Hamiduddin</h2>
                            <p class="post">Director and Founder of the School.</p>
        
                            <img src="../img/about page/Group 11.svg" alt="" class="svg">
        
                            <p class="post">Rabab Hamiduddin founded The Arabic Club for Kids in 2007.</p>
                        </div>
                        <span class="stick-line"></span>
                        <div class="manager father-div">
                            <img src="../img/about page/Group 41951.svg" alt="" class="svg-bulb">
                            <h2 class="semi-bold">Fatima Naghi</h2>
                            <p class="post">Manager</p>
        
                            <img src="../img/about page/Group 11.svg" alt="" class="svg">
        
                            <p class="post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</p>
                        </div>
                    </div>
                </div>
            </section>              </div>
          </div>
          <div>
            <div class="slide-wrap">
              <div class="image"></div>
              <section class="owner">
                <div class="owner-container small-container reveal" >
                    <div class="flex-layout-sp team">
                        <div class="director father-div">
                            <img src="../img/about page/Group 41858.svg" alt="" class="svg-bulb">
                            <h2 class="semi-bold">Rabab Hamiduddin</h2>
                            <p class="post">Director and Founder of the School.</p>
        
                            <img src="../img/about page/Group 11.svg" alt="" class="svg">
        
                            <p class="post">Rabab Hamiduddin founded The Arabic Club for Kids in 2007.</p>
                        </div>
                        <span class="stick-line"></span>
                        <div class="manager father-div">
                            <img src="../img/about page/Group 41951.svg" alt="" class="svg-bulb">
                            <h2 class="semi-bold">Fatima Naghi</h2>
                            <p class="post">Manager</p>
        
                            <img src="../img/about page/Group 11.svg" alt="" class="svg">
        
                            <p class="post">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                incididunt ut labore</p>
                        </div>
                    </div>
                </div>
            </section>              </div>
          </div>
        </div>
      </div>
       <!-- ------------- slider end ------------------  -->
    <section class="research-development container reveal">
       {!! settings('about', 'research_and_development') !!}


        <div class="programmer">
            <h5>Our research and development programmes include:</h5>

            <div class="program-container">
                <div class="prog-img"><img src="../img/about page/Group 42124.png"></div>
                <div class="program-1 program"><img src="../img/about page/p-1.png" alt=""></div>
                <div class="program-2 program"><img src="../img/about page/p-2.png" alt=""></div>
                <div class="program-3 program"><img src="../img/about page/p-3.png" alt=""></div>
                <div class="program-4 program"><img src="../img/about page/p-4.png" alt=""></div>
                <div class="prog-img2"><img src="../img/about page/Star Idea.svg"></div>
            </div>
        </div>

        <a href="#" class="ex-btn">Explore More</a>
    </section>


    <section class="news">
        <div class="news-container container reveal">
          {!! settings('about', 'latest_news') !!}

            <div class="recent-upload flex-layout-sp">
                <h5 class="bold">Our recent events over the past year include</h5>

                <div class="arrowBtn">
                    <div class="swiper-button-nex"><button class="arrow right-a"><iconify-icon icon="material-symbols:arrow-right-alt" rotate="180deg"></iconify-icon></button></div>
                    <div class="swiper-button-pre"><button class="arrow left-a"><iconify-icon icon="material-symbols:arrow-right-alt"></iconify-icon></button></div>
                </div>
            </div>


            <div class="news-card">
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="card card1">
                              <div class="card-btn"><button><a href="#">Event</a></button></div>
                                <div class="card-img"><img src="../img/about page/new 1.png" alt=""></div>

                                <div class="n-card-data">
                                    <h5 class="bold">A Circus Skills and Arabic event.</h5>
                                    <p class="s-para">We had loads of fun this day as children learnt circus skills in
                                        Arabic</p>

                                    <div class="number-div">
                                        <div class="view"><iconify-icon icon="ic:baseline-remove-red-eye"
                                                rotate="180deg"></iconify-icon><span class="number">789</span></div>
                                        <div class="comment"><iconify-icon
                                                icon="material-symbols:mode-comment"></iconify-icon><span
                                                class="number">45</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card2">
                              <div class="card-btn"><button><a href="#">Event</a></button></div>
                                <div class="card-img"><img src="../img/about page/new 2.png" alt=""></div>

                                <div class="n-card-data">
                                    <h5 class="bold">A children and parents cultural day and cultural food party</h5>
                                    <p class="s-para">Children and parents dressed up and came to school and produced an
                                        absolutely
                                        amazing and delectable spread of cultural dishes which we all enjoyed</p>

                                    <div class="number-div">
                                        <div class="view"><iconify-icon icon="ic:baseline-remove-red-eye"
                                                rotate="180deg"></iconify-icon><span class="number">789</span></div>
                                        <div class="comment"><iconify-icon
                                                icon="material-symbols:mode-comment"></iconify-icon><span
                                                class="number">45</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="card card3">
                              <div class="card-btn"><button><a href="#">Event</a></button></div>
                                <div class="card-img"><img src="../img/about page/new 3.png" alt=""></div>
                                <div class="n-card-data">
                                    <h5 class="bold">Sports Day in Arabic</h5>
                                    <p class="s-para">A beautiful summer day hosted our informal sports day event where
                                        children
                                        had fun in various sports events</p>

                                    <div class="number-div">
                                        <div class="view"><iconify-icon icon="ic:baseline-remove-red-eye"
                                                rotate="180deg"></iconify-icon><span class="number">789</span></div>
                                        <div class="comment"><iconify-icon
                                                icon="material-symbols:mode-comment"></iconify-icon><span
                                                class="number">45</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                          <div class="card card3">
                            <div class="card-btn"><button><a href="#">Event</a></button></div>
                              <div class="card-img"><img src="../img/about page/new 3.png" alt=""></div>
                              <div class="n-card-data">
                                  <h5 class="bold">Sports Day in Arabic</h5>
                                  <p class="s-para">A beautiful summer day hosted our informal sports day event where
                                      children
                                      had fun in various sports events</p>

                                  <div class="number-div">
                                      <div class="view"><iconify-icon icon="ic:baseline-remove-red-eye"
                                              rotate="180deg"></iconify-icon><span class="number">789</span></div>
                                      <div class="comment"><iconify-icon
                                              icon="material-symbols:mode-comment"></iconify-icon><span
                                              class="number">45</span></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="swiper-slide">
                        <div class="card card3">
                          <div class="card-btn"><button><a href="#">Event</a></button></div>
                            <div class="card-img"><img src="../img/about page/new 3.png" alt=""></div>
                            <div class="n-card-data">
                                <h5 class="bold">Sports Day in Arabic</h5>
                                <p class="s-para">A beautiful summer day hosted our informal sports day event where
                                    children
                                    had fun in various sports events</p>

                                <div class="number-div">
                                    <div class="view"><iconify-icon icon="ic:baseline-remove-red-eye"
                                            rotate="180deg"></iconify-icon><span class="number">789</span></div>
                                    <div class="comment"><iconify-icon
                                            icon="material-symbols:mode-comment"></iconify-icon><span
                                            class="number">45</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>

    </section>




      <!-- ------------- new slider------------------  -->
    <div class="container newsli">
      <div class="row">
        <div class="hr-center-heading">
          <h2>Our Special Events</h2>
          <hr>
      </div>
         <div class="event-foot-img">
          <img src="../img/about page/Football.svg">
         </div>
          <div class="col-md-12">
              <div id="testimonial-slider" class="owl-carousel">
                  <!--  ////////////////////////////////////////////////////////  -->
                  <div class="testimonial-item equal-height style-6" style="height: 254px;">
                      <div class="testimonial-image cell-left">
                        <div class="s-card s-card1"><img src="../img/about page/special 1.png" alt="">
                          <h5>Sport Day</h5>
                      </div>                      </div>
                      <div class="cell-right">
                        
                      </div>
                      <div class="testimonial-content quote"><i class="fa fa-quote-left">  
                          </i>
                      </div>
                  </div>
                  <!--  ////////////////////////////////////////////////////////  -->
                  <div class="testimonial-item equal-height style-6" style="height: 254px;">
                      <div class="testimonial-image cell-left">
                        <div class="s-card s-card1"><img src="../img/about page/special 1.png" alt="">
                          <h5>Sport Day</h5>
                      </div>                       </div>
                      <div class="cell-right">
                       
                      </div>
                      <div class="testimonial-content quote"><i class="fa fa-quote-left">  
                          </i>
                      </div>
                  </div>
                  <!--  ////////////////////////////////////////////////////////  -->
                  <div class="testimonial-item equal-height style-6" style="height: 254px;">
                      <div class="testimonial-image cell-left">
                        <div class="s-card s-card1"><img src="../img/about page/special 1.png" alt="">
                          <h5>Sport Day</h5>
                      </div>                       </div>
                      <div class="cell-right">
                    
                      </div>
                      <div class="testimonial-content quote"><i class="fa fa-quote-left">  
                          </i>
                      </div>
                  </div>
                  <!--  ////////////////////////////////////////////////////////  -->
                  <div class="testimonial-item equal-height style-6" style="height: 254px;">
                      <div class="testimonial-image cell-left">
                        <div class="s-card s-card1"><img src="../img/about page/special 1.png" alt="">
                          <h5>Sport Day</h5>
                      </div>                       </div>
                      <div class="cell-right">
                    
                      </div>
                      <div class="testimonial-content quote"><i class="fa fa-quote-left">  
                          </i>
                      </div>
                  </div>
                  <!--  ////////////////////////////////////////////////////////  -->
                  <div class="testimonial-item equal-height style-6" style="height: 254px;">
                      <div class="testimonial-image cell-left">
                        <div class="s-card s-card1"><img src="../img/about page/special 1.png" alt="">
                          <h5>Sport Day</h5>
                      </div>                       </div>
                      <div class="cell-right">
                   
                      </div>
                      <div class="testimonial-content quote"><i class="fa fa-quote-left">  
                          </i>
                      </div>
                  </div>
                  <!--  ////////////////////////////////////////////////////////  -->
                  <div class="testimonial-item equal-height style-6" style="height: 254px;">
                      <div class="testimonial-image cell-left">
                        <div class="s-card s-card1"><img src="../img/about page/special 1.png" alt="">
                          <h5>Sport Day</h5>
                      </div>                       </div>
                      <div class="cell-right">
                     
                      </div>
                      <div class="testimonial-content quote"><i class="fa fa-quote-left">  
                          </i>
                      </div>
                  </div>
                  <!--  ////////////////////////////////////////////////////////  -->
                  <div class="testimonial-item equal-height style-6" style="height: 254px;">
                      <div class="testimonial-image cell-left">
                        <div class="s-card s-card1"><img src="../img/about page/special 1.png" alt="">
                          <h5>Sport Day</h5>
                      </div>                       </div>
                      <div class="cell-right">
                      
                      </div>
                      <div class="testimonial-content quote"><i class="fa fa-quote-left">  
                          </i>
                      </div>
                  </div>
                  <!--  ////////////////////////////////////////////////////////  -->
              </div>
          </div>
      </div>
  </div>
    @include("frontend.layouts.footer")



    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    {{-- <script src="../scrolll.js"></script> --}}

 

    
    <script>
        var swiper = new Swiper('.mySwiper', {
            // slidesPerView: 3,
            breakpoints: {
                // when window width is >= 320px
                900: {
                    slidesPerView: 3
                },
                600: {
                    slidesPerView: 2
                },
                200:{
                    slidesPerView: 1
                }},
                spaceBetween: 30,
                clickable: true,
                navigation: {
                    nextEl: ".swiper-button-nex",
                    prevEl: ".swiper-button-pre",
                },
            })
        
        var swiper2 = new Swiper('.mySwiper2', {
            breakpoints: {
                // when window width is >= 320px
                1001: {
                    slidesPerView: 3,
                },
                700:{
                    slidesPerView: 2
                },
                500: {
                    slidesPerView: 1
                },
                },
                spaceBetween: 10,
                clickable: true,
                navigation: {
                    nextEl: ".swiper-button-next2",
                    prevEl: ".swiper-button-prev2",
                },
        })
         console.log(swiper.slidesPerView);

    </script>
   

     <!-- Swiper JS -->

     <script>
        ScrollReveal().reveal('.reveal', { delay: 500 });
      </script>
  <script>
    ScrollReveal().reveal('.reveal', { delay: 500 });
  </script>
  <script>
    var swiper = new Swiper(".mySwiper_custom", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + "</span>";
        },
    },
});
  </script>
<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js'></script><script  src="./script.js"></script>
<script>
    $(".slider")
  .slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true
  })
  .on("setPosition", function () {
    resizeSlider();
  });

$(window).on("resize", function (e) {
  resizeSlider();
});

var slickHeight = $(".slick-track").outerHeight();

var slideHeight = $(".slick-track").find(".slick-slide").outerHeight();

function resizeSlider() {
  $(".slick-track")
    .find(".slick-slide .slide-wrap")
    .css("height", slickHeight + "px");
    
}
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
    $("#testimonial-slider").owlCarousel({
        items:3,
        itemsDesktop:[1000,2],
        itemsDesktopSmall:[980,1],
        itemsTablet:[768,1],
        pagination:true,
        navigation:true,
        navigationText:["previous","next"],
        autoPlay:false
    });
});
</script>
 
</body>
</html>