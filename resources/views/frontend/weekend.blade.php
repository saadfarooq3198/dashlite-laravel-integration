<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/weekend.css') }}" />
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="{{ asset('/imporFunc.js') }}" defer></script>
    <script src="{{ asset('/script.js') }}" defer></script>
    <title>Tack - Weekend</title>
</head>

<body>
    @include("frontend.layouts.header")
    <!-- ------------------------- stikcy mnu -----------------------  -->
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
            <li class="tab-li md-para"><a href="#" class="tab-link h-red">School Value</a></li>
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
  <!-- ------------------------- end -----------------------  -->
    <!-- --------------------------- main code starts here ---------------------------------------  -->

    <section class="weekend">
        <!-- <div class="empty"></div> -->
        <div class="weekend-search flex-layout-c">
            <div class="weekend-data">
                <h2 class="h-white">Our Weekend  School</h2>

                <form action="" class="week-form">
                    <label for="city">City</label>
                    <br>
                    <div class="select">
                        <select>
                            <option value="London">London</option>

                        </select>
                    </div>
                    <br>
                    <label for="region">Region</label>
                    <br>
                    <div class="select">
                        <select>
                            <option value="school">Lark Hall Primary School</option>
                            <option value="2">More</option>
                            <option value="3">S4fss</option>
                        </select>
                    </div>

                    <button type="submit" class="g-btn">Know More</button>
                </form>
            </div>
        </div>
        <div class="shadowbg"></div>
    </section>



    <section class="school-value container reveal">
        <h2>Our School Values</h2>

        <p class="medium">Our school is run as an Arabic language school (we do not teach religion). We believe in
            welcoming all children who want to learn the beautiful Arabic language as it exists in our 21st Century
            world today, as a live, dynamic modern language and also exudes which a rich culture, history and history of
            literature, to enable and empower children to use and apply Arabic as relevant in their lives.</p>

        <a href="#" class="b-btn">Read More</a>

        <img src="../img/about page/value grade.png" alt="">
    </section>



    <section class="admission reveal">
        <div class="admission-container small-container">
            <div class="hr-center-heading h-white">
                <h2>Admissions</h2>
                <hr>

            </div>                
            <div class="swiper-button-next3"><button class="arrow "><iconify-icon icon="material-symbols:arrow-right-alt"
                rotate="180deg"></iconify-icon></button></div>
            <div class="swiper mySwiper3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="adms-card adms-c1">
                                <div class="date">01 June, 2022</div>
            
                                <div class="card-down-d">
                                    <h4 class="sb-para">Class 3-5</h4>
            
                                    <p class="sb-para">Am soluta nobis est
                                        eligendi optio cumque
                                        nihil impedit quo
                                        minus id quod</p>
            
                                    <a href="#" class="expr">Explore More <iconify-icon
                                            icon="material-symbols:arrow-right-alt-rounded"></iconify-icon></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="adms-card adms-c1">
                                <div class="date">01 June, 2022</div>
            
                                <div class="card-down-d">
                                    <h4 class="sb-para">Class 5-7</h4>
            
                                    <p class="sb-para">Am soluta nobis est
                                        eligendi optio cumque
                                        nihil impedit quo
                                        minus id quod</p>
            
                                    <a href="#" class="expr">Explore More <iconify-icon
                                            icon="material-symbols:arrow-right-alt-rounded"></iconify-icon></a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="adms-card adms-c1">
                                <div class="date">01 June, 2022</div>
            
                                <div class="card-down-d">
            
                                    <h4 class="sb-para">Class 5-9</h4>
            
                                    <p class="sb-para">Am soluta nobis est
                                        eligendi optio cumque
                                        nihil impedit quo    adms-card-cont flex-layout-c
                                        minus id quod</p>
            
                                    <a href="#" class="expr">Explore More <iconify-icon
                                            icon="material-symbols:arrow-right-alt-rounded"></iconify-icon></a>
                                </div>
                            </div> 
                        </div>
                </div>
            </div>
            <div class="swiper-button-prev3"><button class="arrow "><iconify-icon icon="material-symbols:arrow-right-alt"></iconify-icon></button></div>
        
    </section>

    <section class="gallery container reveal">
        <div class="hr-center-heading">
            <h2>Photo Gallery</h2>
            <hr>

        </div>

        <div class="gallery-card">
            <div class="g-card g-card1"><img src="../img/about page/g-1.png" alt=""></div>
            <div class="g-card g-card2"><img src="../img/about page/g-2.png" alt=""></div>
            <div class="g-card g-card3"><img src="../img/about page/g-3.png" alt=""></div>
            <div class="g-card g-card4"><img src="../img/about page/g-4.png" alt=""></div>
            <div class="g-card g-card5"><img src="../img/about page/g-5.png" alt=""></div>
            <div class="g-card g-card6"><img src="../img/about page/g-6.png" alt=""></div>
        </div>

    </section>

 
    <section class="review container reveal">
        <div class="hr-center-heading">
            <h2>Testimonials</h2>
            <hr>
        </div>

        <div class="swiper-button-next4"><button class="arrow "><iconify-icon icon="material-symbols:arrow-right-alt"
            rotate="180deg"></iconify-icon></button></div>
        <div class="swiper mySwiper4 testimonial">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="rvw-profile rvw-profile1"><img src="../img/about page/review 1.png" alt="">
                        <h5>Mark <br> Anderson</h5>
                        <p class="para-detail">Designation</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rvw-profile rvw-profile2"><img src="../img/about page/review 2.png" alt="">
                        <h5>Chalos <br> Parker</h5>
                        <p class="para-detail">Designation</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rvw-profile rvw-profile3"><img src="../img/about page/review 3.png" alt="">
                        <h5>Alex <br> Balson</h5>
                        <p class="para-detail">Designation</p>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="rvw-profile rvw-profile4"><img src="../img/about page/review 4.png" alt="">
                        <h5>Jessica <br> Brown</h5>
                        <p class="para-detail">Designation</p>
                    </div>
                </div>
                
        </div>
    </div>
    <div class="swiper-button-prev4"><button class="arrow "><iconify-icon icon="material-symbols:arrow-right-alt"></iconify-icon></button></div>
    </section>
    <!-- --------------------------- end ---------------------------------------  -->
    @include("frontend.layouts.footer")
    <!-- ---------------------------- necessary js ---------------------------  -->
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('/scrolll.js.js') }}"></script>

  <script>
    ScrollReveal().reveal('.reveal', { delay: 500 });
  </script>

    
   <script>
    var swiper3 = new Swiper('.mySwiper3', {
            breakpoints: {
                // when window width is >= 320px
                1001: {
                    slidesPerView: 3,
                },
                600:{
                    slidesPerView: 2
                },
                500: {
                    slidesPerView: 1
                },
                },
                spaceBetween: 40,
                clickable: true,
                navigation: {
                    nextEl: ".swiper-button-next3",
                    prevEl: ".swiper-button-prev3",
                },
        });
    var swiper4 = new Swiper('.mySwiper4', {
            breakpoints: {
                // when window width is >= 320px
                1001: {
                    slidesPerView: 4,
                },
                700:{
                    slidesPerView: 3,
                },
                500: {
                    slidesPerView: 2
                },
                },
                spaceBetween: 50,
                clickable: true,
                navigation: {
                    nextEl: ".swiper-button-next4",
                    prevEl: ".swiper-button-prev4",
                },
        });
   </script>
</body>

</html>