<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('style/home.css') }}" />
  <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <script src="{{ asset('/imporFunc.js') }}" defer></script>
  <script src="{{ asset('/script.js') }}" defer></script>
  <title>Tack - Home</title>
</head>

<body>
  <!-- ------------------ navbar starts ---------------------------  -->
  @include("frontend.layouts.header")

  <!-- ------------------------ navbar end --------------------------  -->

  <!-- ---------------------------- responsive bar ----------------------------  -->
 @include('frontend.partials.sticky_menu')



  <!-- ---------------------------- landing page swiper ---------------------------  -->

  <div class="swiper mySwiper backimg">
    <div class="swiper-wrapper">
      @foreach ($banners as $banner)
      <div class="swiper-slide flex-box"><img src="{{asset('storage/images/'.$banner->banner)}}" alt="">
      </div>
      @endforeach
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

        <p class="m-3">{!! settings('home', 'section_one_description') !!}</p>

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
          {!! settings('home', 'section_two_description') !!}
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
          {!! settings('home', 'section_three_description') !!}
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
          {!! settings('home', 'section_four_description') !!}
        </p>

        <img src="../img/home page/Group-3.svg" alt="" class="svg">

      </div>
      <div class="l-img-cont"><img src="{{asset('storage/images/'.settings('home','section_four_image'))}}" alt="pic of boy"></div>
    </div>
  </section>

  <!-- ---------------------------- landing page card end ---------------------------  -->






  <!-- ---------------------------- Footer start ---------------------------  -->
  <footer class="footer reveal">
    <div class="footer-container container">
      <!-- social media start ----------------- -->
      <a href="#header" class="upperLink"><iconify-icon icon="material-symbols:keyboard-arrow-up-rounded"></iconify-icon></a>
      <div class="f-header">
        <div class="f-logo">
          <img src="../img/home page/footer.svg" alt="footer logo">
          <div>
            <p class="s-para">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
              tincidunt ut laoreet dolore magna aliquam erat.</p>
          </div>
        </div>
        <ul class="social-media">
          <li class="media-icon"><a href="" class="media-link"><iconify-icon
                icon="ic:round-facebook"></iconify-icon></a></li>
          <li class="media-icon"><a href="" class="media-link"><iconify-icon
                icon="entypo-social:twitter-with-circle"></iconify-icon></a></li>
          <li class="media-icon"><a href="" class="media-link"><iconify-icon
                icon="bxl:instagram-alt"></iconify-icon></a></li>
          <li class="media-icon"><a href="" class="media-link"><iconify-icon
                icon="entypo-social:linkedin-with-circle"></iconify-icon></a></li>
        </ul>
      </div>
      <!-- end of social media --------------------- -->

      <div class="f-middle">
        <!-- ------------ number section ------------------  -->
        <div class="number-section">
          <h5 class="semi-bold m-2">For enquiries: <span>02079939010</span></h5>
          <h5 class="semi-bold m-2">For in school enquiries: <span> 07958 072 782</span></h5>

          <div class="search-div reverse">
            <h5 class="semi-bold m-2">Subscribe to Newsletter</h5>

            <form action="" class="newsletter">
              <input type="text" name="" id="search-input" placeholder="Email">
              <button type="submit" class="submit-btn">Submit <iconify-icon
                  icon="material-symbols:arrow-right-alt-rounded"></iconify-icon></button>
            </form>
          </div>
        </div>

        <!-- ------------- nav-link --------------  -->
        <ul class="f-nav">
          <h5 class="semi-bold m-2">Quick Links</h5>
          <li class="f-nav-list"><a href="#" class="f-nav-link">Home</a></li>
          <li class="f-nav-list"><a href="#" class="f-nav-link s-link">Our Commitment to
              Research & Development
            </a></li>
          <li class="f-nav-list"><a href="#" class="f-nav-link">Our Ethos</a></li>
          <li class="f-nav-list"><a href="#" class="f-nav-link">Our Curriculum</a></li>
          <li class="f-nav-list"><a href="#" class="f-nav-link">Contact Us</a></li>

        </ul>
      </div>
      
      <!-- --------------- middle end -----------------  -->
      <div class="f-footer center">
        <ul class="terms flex-box gap">
          <li class="term-list"><a href="#" class="term-link">Terms of Use</a></li>
          <li class="term-list"><a href="#" class="term-link">Privacy Policy</a></li>
          <li class="term-list"><a href="#" class="term-link">Cookie Settings</a></li>
        </ul>

        <div class="reserve">
          <p>© 2022 TACK design, all rights reserved.</p>
        </div>
      </div>
    </div>
  </footer>


  <!-- ---------------------------- necessary js ---------------------------  -->
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <!-- <script src="../script.js"></script> -->
  <script src="../scrolll.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

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
</body>

</html>