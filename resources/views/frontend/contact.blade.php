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
            <h2>Staff Vacancies</h2>
            <hr>
        </div>
        <img src="../img/contact/pink svg.svg" alt="" class="svg">
        <p class="medium">If you are interested in working with us a teacher in our school, kindly send us your CV to
            info@arabicclub.co.uk. Even if we don’t have immediate vacancies we can keep your CV and contact you if a
            vacancy comes up as we are in the process of expanding our branches around London and the UK and also expand
            our number of classes within branches.</p>

        <h4 class="h-red medium">All applicants should:</h4>

        <ul class="should">
            <li class="sb-para medium">Be fluent in Arabic both written and spoken Modern Standard/ Fusha as well as
                dialect.</li>
            <li class="sb-para medium">Have a range of skills in early years and early childhood between the ages of 3-14
            </li>
            <li class="sb-para medium">Have prior teaching experience</li>
        </ul>
    </section>

    <section class="small-container blue-container reveal">
        <p class="medium">All applicants that are offered a job will be given a job role and be given an offer. All
            those who join will receive a contract. This will include <b>(This will 5 Saturdays/Sundays of working at
                the school at a training rate)</b> which they would need to complete successfully. After this applicants
            will start working with us at their rate of pay as agreed.</p>

        <p class="bold">Please note we cannot currently arrange visas and require applicants to be able to make their
            own arrangements if necessary.</p>

        <img src="../img/contact/alpha.svg" alt="" class="svg">
    </section>

    <section class="small-container center reveal">
        <p class="l-para">If you are interested in working with us please call us at <span class="h-red">020 79939010</span> or you can mail us at <span class="h-red bold">Info@arabicclub.co.uk</span></p>
    </section>

<!-- --------------------- contact us ---------------------------  -->
    <section class="contactUs reveal">
        <div class="form flex-layout-sp small-container">
            <div class="c-detail">
                <h2 class="h-white">Contact Us</h2>
                <p class="h-yellow">You can send us any questions  or comments and we will contact you soon</p>

                <p>For enrolment or other  while in-school</p>
                <p class="bold">South London Branch: 07958072728</p>
                <p class="bold">North London Branch: 07958072728</p>
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