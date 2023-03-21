<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
    <link rel="stylesheet" href="{{ asset('style/ethos.css') }}" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
    <script src="{{ asset('/imporFunc.js') }}" defer></script>
    <script src="{{ asset('/script.js') }}" defer></script>
    <title>Tack - Ethos</title>
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
  
      <!-- --------------------------------------------------------------------------
    ------------------------------ ethos section ------------------------------
    --------------------------------------------------------------------------- -->
  
    <div class="swiper mySwiper backimg">
      <div class="swiper-wrapper">
        <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 1.png" alt="">
          <div class="banner-text">
            <h1>ethos</h1>
          </div>
        </div>
        <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 1.png" alt="">
          <div class="banner-text">
            <h1>ethos</h1>
          </div>
      </div>
        <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 1.png" alt="">
          <div class="banner-text">
            <h1>ethos</h1>
          </div>
       </div>
        <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 1.png" alt="">
          <div class="banner-text">
            <h1>ethos</h1>
          </div>
        </div>
        <div class="swiper-slide flex-box"><img src="../img/home page/slide pic 1.png" alt="">
          <div class="banner-text">
            <h1>ethos</h1>
          </div>
        </div>
      </div>
      <div class="swiper-pagination"></div>
      <div class="shadowbg"></div>
    </div>
  
  
      <section class="ethos reveal">
          <div class="ethos-container container grid-left-img">
              <div class="ethos-left"><img src="../img/home page/table img.png" alt=""></div>
              <div class="ethos-right">
                  <h5 class="h-yellow">{{settings('ethos', 'section_one_heading')}}</h5>
                  <p class="h-white">{!! settings('ethos', 'section_one_description') !!}
                  </p>
  
                  <img src="../img/home page/4 square.svg" alt="" class="svg">
              </div>
          </div>
      </section>
  
      <section class="ethod-big-img container reveal">
          <p class="md-para medium">{!! settings('ethos', 'section_two_description') !!}</p>
  
          <img src="../img/home page/ethod.png" alt="">
      </section>
  
  
  
      <section class="engage reveal">
          <div class="engage-container">
              <div class="engage-left">
                  <h5 class="w-heading innerTitle">{{settings('ethos', 'engage_heading')}}</h5>
                  <p class="sb-para">{!! settings('ethos', 'engage_description') !!}</p>
              </div>
              <div class="engage-right">
                  <!-- <img src="../img/home page/image.png" alt=""> -->
                  <ul class="engage-btn medium h-white">
                      <li class="e-btn engage e-btn-active">{{settings('ethos', 'engage_heading')}}</li>
                      <li class="e-btn equip">{{settings('ethos', 'equip_heading')}}</li>
                      <li class="e-btn empower">{{settings('ethos', 'empower_heading')}}</li>
                      <li class="e-btn respect">{{settings('ethos', 'respect_heading')}}</li>
                  </ul>
  
                  <div class="engage-slider flex-layout-sp">
                      <button class="flex-layout-c engage-prev"><iconify-icon icon="material-symbols:arrow-right-alt" rotate="180deg"></iconify-icon></button>
  
                      <div class="engage-slider-div" id="engage-slider-div">
                        
                        <div class="slide" id="slide1">
                          <div class="e-slider-div flex-layout-c">
                          <p class="sb-para">Engaging learners by authentic tasks rooted in social interaction 1</p>
                          <img src="../img/home page/pink svg.svg" alt="" class="small-svg">
                          </div>
                      </div>
                        <div class="slide" id="slide2">
                          <div class="e-slider-div flex-layout-c">
                          <p class="sb-para">Engaging learners by authentic tasks rooted in social interaction 2</p>
                          <img src="../img/home page/pink svg.svg" alt="" class="small-svg">
                          </div>
                      </div>
                        <div class="slide" id="slide3">
                          <div class="e-slider-div flex-layout-c">
                          <p class="sb-para">Engaging learners by authentic tasks rooted in social interaction 3</p>
                          <img src="../img/home page/pink svg.svg" alt="" class="small-svg">
                          </div>
                      </div>
  
  
                      </div>
  
                      <button class="flex-layout-c engage-next"><iconify-icon icon="material-symbols:arrow-right-alt"></iconify-icon></button>
                  </div>
              </div>
          </div>
      </section>
    @include("frontend.layouts.footer")

  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('/scrolll.js.js') }}"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

  <script>
    ScrollReveal().reveal('.reveal', { delay: 500 });

    //Select the elements
    const prev = document.querySelector(".engage-prev");
const next = document.querySelector(".engage-next");
const slides = document.querySelectorAll(".slide");
let currentSlide = 0;

slides[currentSlide].style.opacity = "1";

next.addEventListener("click", function() {
  slides[currentSlide].style.opacity = "0";
  slides[currentSlide].style.display = 'none'

  currentSlide = (currentSlide + 1) % slides.length;
  slides[currentSlide].style.opacity = "1";
  slides[currentSlide].style.display = 'block'
});

prev.addEventListener("click", function() {
  slides[currentSlide].style.opacity = "0";
  slides[currentSlide].style.display = 'none'

  currentSlide = (currentSlide - 1 + slides.length) % slides.length;
  slides[currentSlide].style.opacity = "1";
  slides[currentSlide].style.display = 'block'

});

  let innerTitle = document.querySelector('.innerTitle')
  let eBtn = document.querySelectorAll('.e-btn')

    const innerChnager = (idclass) => {
      eBtn.forEach(e => {
        e.addEventListener('click', () => {
          if(e.classList.contains(idclass)){
                innerTitle.innerHTML = idclass.toUpperCase()
                eBtn.forEach(btn => btn.classList.remove('e-btn-active'));
                e.classList.add('e-btn-active')
        }
        
        })
      })

    }

    innerChnager('engage');
    innerChnager('equip');
    innerChnager('empower');
    innerChnager('respect');
    </script>

<!-- ---------------------------- necessary js ---------------------------  -->
<script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<!-- <script src="../script.js"></script> -->
<script src="{{ asset('/scrolll.js.js') }}"></script>
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