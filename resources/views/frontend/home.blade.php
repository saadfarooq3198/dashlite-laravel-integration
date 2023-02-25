
  @extends('frontend.layouts.app')
  @section('content')
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



  <!-- ---------------------------- landing page swiper ---------------------------  -->

  <div class="swiper mySwiper backimg">
    <div class="swiper-wrapper">
              <div class="swiper-slide flex-box"><img src="{{asset('storage/images/'.settings('home','banner'))}}" alt="">
      </div>
      {{-- <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 2.png" alt="">
    </div>
      <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 3.png" alt="">
     </div>
      <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 3.png" alt="">
      </div>
      <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 3.png" alt="">
      </div> --}}
    </div>
    <div class="swiper-pagination"></div>
    <div class="shadowbg"></div>
  </div>

  <!-- ---------------------------- landing page swiper end ---------------------------  -->



  <!-- ---------------------------- landing page card start ---------------------------  -->
  <section class="landing-section small-container"  >

    <!-- ---------------------- card 1 -------------------  -->
    <div class="landing-box small-container flex-layout-sp gap reveal">
      <div class="l-img-cont"><img src="{{asset('storage/images/'.settings('home','section_one_image'))}}" alt="pic of boy"></div>

      <div class="landing-detail">
        <div class="hr-left-heading h-red">
          <h5>{{settings('home', 'section_one_heading')}}</h5>
          <hr class="b-red">
        </div>

        <p class="m-3">{{settings('home', 'section_one_description')}}</p>

        <img src="../img/home page/Group.svg" alt="" class="svg">
      </div>
    </div>
    <!-- ---------------------- card 2 -------------------  -->

    <div class="landing-box small-container flex-layout-sp gap reverse reveal">
      <div class="landing-detail">
        <div class="hr-left-heading h-green">
          <h5>{{settings('home', 'section_two_heading')}}</h5>
          <hr class="b-green">
        </div>
        <p class="m-3">
          {{settings('home', 'section_two_description')}}
        </p>
        <img src="../img/home page/Group-1.svg" alt="" class="svg">

      </div>

      <div class="l-img-cont"><img src="{{asset('storage/images/'.settings('home','section_two_image'))}}" alt="pic of boy"></div>
    </div>

    <!-- ---------------------- card 3 -------------------  -->

    <div class="landing-box small-container flex-layout-sp gap reveal">
      <div class="l-img-cont"><img src="{{asset('storage/images/'.settings('home','section_three_image'))}}" alt="pic of boy"></div>

      <div class="landing-detail">
        <div class="hr-left-heading h-blue">
          <h5>{{settings('home', 'section_three_heading')}}</h5>
          <hr class="b-blue">
        </div>
        <p class="m-3">
          {{settings('home', 'section_three_description')}}
        </p>


        <img src="../img/home page/Group-2.svg" alt="" class="svg">
      </div>
    </div>

    <!-- ---------------------- card 4 -------------------  -->

    <div class="landing-box small-container flex-layout-sp gap reverse reveal">
      <div class="landing-detail">
        <div class="hr-left-heading h-yellow">
          <h5>{{settings('home', 'section_four_heading')}}</h5>
          <hr class="b-yellow">
        </div>
        <p class="m-3">
          {{settings('home', 'section_four_description')}}
        </p>

        <img src="../img/home page/Group-3.svg" alt="" class="svg">

      </div>
      <div class="l-img-cont"><img src="{{asset('storage/images/'.settings('home','section_four_image'))}}" alt="pic of boy"></div>
    </div>
  </section>

  <!-- ---------------------------- landing page card end ---------------------------  -->
  @endsection


  <script>
    ScrollReveal().reveal('.reveal', { delay: 500 });
  </script>
  <script>
    var swiper = new Swiper(".mySwiper", {
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        renderBullet: function (index, className) {
            return '<span class="' + className + '">' + "</span>";
        },
    },
});
  </script>

</html>