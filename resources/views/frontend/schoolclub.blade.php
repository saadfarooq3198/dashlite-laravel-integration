<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
    <link rel="stylesheet" href="{{ asset('style/schoolclub.css') }}" />
    <script src="{{ asset('/imporFunc.js') }}" defer></script>
    <script src="{{ asset('/script.js') }}" defer></script>
    <title>Tack - School Club</title>
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
  <!-- ---------------------------- main code start here ---------------------------  -->
  <section class="school-club">
      <div class="school-club-container">
          <div class="club-data">
              <h2>Our After <br> School Clubs</h2>

              <div class="s-club-detail">
                  <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy
                      nibh euismod tincidunt ut laoreet dolore magna aliquam erat. Lorem ipsum dolor sit amet,
                      consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna
                      aliquam erat.</p>
              </div>
          </div>
      </div>
  <div class="shadowbg"></div>

  </section>


  <section class="club reveal">
      <div class="club-container flex-layout-c">

          <div class="club-left"><img src="../img/about page/club photo.png" alt=""></div>

          <div class="club-right h-white">
              <h2>What is AlMayeeyah?</h2>
              <img src="../img/about page/white 4 sq.svg" alt="" class="svg">
              <p class="medium">AlMaeeyah is TACK’s new and innovatively designed after school club with the help
                  of experts from the field of children’s education and language learning, keeping the aims young
                  learners in after
                  school fun in mind. AlMaeeyah after school clubs are lead by teacher’s from TACK who have
                  undergone training specifically for the delivery of the after school programme with us. If you are
                  interested in encouraging your school to open an TACK’s AlMaeeyah after school club, please let us
                  know your interest and we can contact your school or if you want to encourage your school yourself,
              </p>

              <button class=" flex-layout-c"><iconify-icon icon="material-symbols:arrow-right-alt"></iconify-icon></button>

          </div>
      </div>
  </section>

  <section class="parent reveal">
      <div class="parent-container container">
          <div class="hr-center-heading">
              <h2>Admissions</h2>
              <hr>
          </div>

          <div class="img"><img src="../img/about page/mid about img.png" alt=""></div>

          <div class="help-btn">
              <a href="#" class="previous btn-1">Download</a>
              <a href="#" class="next btn-1">Explore</a>
          </div>
      </div>
  </section>

  <section class="why-us container reveal">
      <h2>TACK School Partnership?</h2>

      <p class="medium">A TACK School Partnership is an alliance or affiliation between TACK and a school or
          other educational organisation. It assists both partners to achieve their educational vision and contribute
          to their mission. The TACK school partnership is an informal way for both partners to benefit from the other
          by sharing their knowledge, experience and resources, so that they can provide better learning outcomes for
          their students. <br> <br>
          A partnership may not generate further income streams between the two parties though may indirectly lead to
          further business for one or both of the parties or include activity that requires payment between the
          parties.</p>

      <a href="#" class="b-btn">Know More</a>

  </section>
  <!-- -------------------------------- end -----------------------------------  -->
  @include("frontend.layouts.footer")

    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('/scrolll.js.js') }}"></script>
    <script src="https://unpkg.com/scrollreveal"></script>

  <script>
    ScrollReveal().reveal('.reveal', { delay: 500 });
  </script>
</body>

</html>