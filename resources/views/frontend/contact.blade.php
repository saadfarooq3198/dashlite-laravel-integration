<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/contact.css') }}" />
    <script src="{{ asset('/imporFunc.js') }}" defer></script>
    <script src="{{ asset('/script.js') }}" defer></script>
    <title>Tack - Contact Us</title>
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
    <!-- ------------------------ navbar end --------------------------  -->
    <!-- <div class="shadowbg"></div> -->

    <section class="contact container reveal">
        <div class="hr-center-heading">
            <h2>{{settings('contact', 'section_one_heading')}}</h2>
            <hr>
        </div>
        <img src="../img/contact/pink svg.svg" alt="" class="svg">
        <p class="medium">{!! settings('contact', 'section_one_description') !!}</p>

        <h4 class="h-red medium">{{settings('contact', 'section_two_heading')}}</h4>

        <ul class="should">
          {!! settings('contact', 'section_two_description') !!}
        </ul>
    </section>

    <section class="small-container blue-container reveal">
        <p class="medium">{!! settings('contact', 'section_three_description') !!}</p>

        

        <img src="../img/contact/alpha.svg" alt="" class="svg">
    </section>

    <section class="small-container center reveal">
        <p class="l-para">{!! settings('contact', 'section_four_description') !!}</p>
    </section>

<!-- --------------------- contact us ---------------------------  -->
    <section class="contactUs reveal">
        <div class="form flex-layout-sp small-container">
            <div class="c-detail">
                <h2 class="h-white">{{settings('contact', 'section_five_heading')}}</h2>
                <p class="h-yellow">{!! settings('contact', 'section_five_description') !!}</p>
            </div>

            <form action="" id="form">
                <input type="text" placeholder="Name">
                <input type="text" placeholder="Email">

                <textarea name="" id="" cols="30" rows="10" placeholder="Message"></textarea>

                <div class="btn">Submit</div>
            </form>
        </div>
    </section>
    @include("frontend.layouts.footer")
    <!-- ---------------------------- necessary js ---------------------------  -->
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/scrolll.js.js') }}"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

  <script>
    ScrollReveal().reveal('.reveal', { delay: 500 });
  </script>
</body>

</html>