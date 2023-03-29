<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/guide.css') }}" />
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <script src="{{ asset('/imporFunc.js') }}" defer></script>
  <script src="{{ asset('/script.js') }}" defer></script>
  <title>Tack - Guide</title>
</head>

<body>

    @include("frontend.layouts.header")
    <!-- ------------------------- stikcy mnu -----------------------  -->
    @include('frontend.partials.sticky_menu')
  <!-- ------------------------- end -----------------------  -->
  <!-- ------------------- main code start here --------------------  -->
  <section class="guide-container small-container reveal">
    <div class="sub-container">
      <div class="heading">
        <h2>Guided Reading</h2>
        <img src="../img/contact/computer.svg" alt="computer" class="computer">
      </div>

      <div class="year-btn flex-layout-sp">
        <div class="year">
          <p class="medium">Year: 2022 <span></span> Category: Reading</p>
        </div>
        <div class="arrowBtn">
          <button class="arrow right-a swiper-button-nex5"><iconify-icon icon="material-symbols:arrow-right-alt"
              rotate="180deg"></iconify-icon></button>
          <button class="arrow left-a swiper-button-pre5"><iconify-icon icon="material-symbols:arrow-right-alt"></iconify-icon></button>
        </div>
      </div>

      <div class="slide-container">
        <div class="swiper mySwiper5">

          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="slide-img"><img src="../img/contact/pexels-pixabay-60582.png" alt=""></div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img"><img src="../img/contact/pexels-pixabay-60582.png" alt=""></div>
            </div>
            <div class="swiper-slide">
              <div class="slide-img"><img src="../img/contact/pexels-pixabay-60582.png" alt=""></div>
            </div>


          </div>
        </div>
      </div>

      <div class="guide-para reveal">
        <p class="sb-para">TACK has developed a progression in early reading skills in Arabic. This has included the
          design and publication of a guided reading scheme, The Arabic Club Readers. The Arabic Club Readers is a
          series of colourful and fun books for young learners of Arabic, designed to nurture confidence and motivation.
          The series allows teachers and parents to closely match books to the skills of their child.
        </p>

        <p class="sb-para">
          We are continuing to research and develop the progression to extend into assessment of learning criteria for
          older pupils.
        </p>
      </div>
    </div>
  </section>
  <!-- ------------------- end --------------------  -->
    @include("frontend.layouts.footer")

  <!-- ---------------------------- necessary js ---------------------------  -->
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="{{ asset('/scrolll.js.js') }}"></script>

  <script>
    ScrollReveal().reveal('.reveal', { delay: 500 });

    var swiper = new Swiper('.mySwiper5', {
            // slidesPerView: 3,
            breakpoints: {
                // when window width is >= 320px
                600: {
                    slidesPerView: 2
                },
                200:{
                    slidesPerView: 1
                }},
                spaceBetween: 30,
                clickable: true,
                navigation: {
                    nextEl: ".swiper-button-nex5",
                    prevEl: ".swiper-button-pre5",
                },
            });
  </script>
</body>

</html>