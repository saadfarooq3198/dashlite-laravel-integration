<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/curriculum.css') }}" />
    <script src="{{ asset('/imporFunc.js') }}" defer></script>
    <script src="{{ asset('/script.js') }}" defer></script>
    <title>Tack - Curriculum</title>
    
    <style>
      .research-container{
        background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.5))),
        url("{{asset('storage/images/'.settings('curriculum','banner'))}}");
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("{{asset('storage/images/'.settings('curriculum','banner'))}}");
      }
    </style>
</head>

<body>

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
        <!-- --------------------------------- main code start here ------------------------------------  -->
        
        <section class="research-container flex-layout-c">
          <h1>Our Curriculum</h1>
          <div class="shadowbg"></div>
        </section>
        
        <section class="publication container reveal">
            <div class="hr-center-heading">
                <h2> Our Publication & Resources</h2>
                <hr></div>
    
            <p class="medium">In order to create a fun and engaging learning environment in all of our provision, we have developed a range of curriculum resources that support the development of Arabic literacy and also to create a bilingual environment. We have also written material for teachers to support them to provide high-quality Arabic language learning settings.</p>
    
            <img src="../img/reserch & community page/svg pink.svg" alt="" class="svg">
        </section>
    
    
        <!-- new section -->
        <section class="development container">
            <div class="dvlp dvlp1 m-right flex-layout-c reveal">
                <div class="dvlp-left">
                    <h2>Reading</h2>
                    <img src="../img/reserch & community page/pink.svg" alt="" class="small-svg">
    
                    <p class="medium">TACK has researched and published a series of texts to teach reading skills in Arabic. These vibrant books offer plenty of opportunities for building oral and written language as the children learn to read. <span>(Link to the Arabic Club Readers on the OUP or Amazon
                        website)</span> <br>
                        We have developed a method of assessing reading progress that enables teachers to
                        match books to the level of each individual child and fine-tune reading instruction to make sure that progress is consistent and sustained.</p>
                </div>
    
                <div class="dvlp-right"><img src="../img/reserch & community page/dvlp 1.png" alt=""></div>
            </div>
            <div class="dvlp dvlp2 m-left flex-layout-c reveal">
                <div class="dvlp-right"><img src="../img/reserch & community page/dvlp 2.png" alt=""></div>
    
                <div class="dvlp-left">
                    <h2>Learning Letters</h2>
                    <img src="../img/reserch & community page/green.svg" alt="" class="small-svg">
    
                    <p class="medium">Learning letter-sound relationships is a particular challenge in Arabic as each letter of the alphabet has a different grapheme when at the beginning, the middle or the end of a
                        word. <br>
                        TACK has developed innovative approaches to learning how to recognise Arabic letters
                        drawing on research on how children learn to discriminate letter shapes.</p>
                </div>
    
            </div>
            <div class="dvlp dvlp3 m-right flex-layout-c reveal">
                <div class="dvlp-left">
                    <h2>Phonics</h2>
                    <img src="../img/reserch & community page/svg pink.svg" alt="" class="small-svg">
    
                    <p class="medium">Phonics is an important element in the teaching of reading in all alphabetic languages. Learning the relationships between the letters we see and the speech sounds we hear is particularly important in the early stages of learning. This learning is much more effective if it is systematic. <br>
                        TACK is researching how this can be applied to Arabic and taught systematically and
                        thoroughly.</p>
                </div>
    
                <div class="dvlp-right"><img src="../img/reserch & community page/dvlp 3.png" alt=""></div>
            </div>
        </section>
    
        <!-- ------------------------------------------ end ------------------------------------------  -->
    @include("frontend.layouts.footer")


  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('/scrolll.js.js') }}"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

  <script>
    ScrollReveal().reveal('.reveal', {delay: 500});
  </script>
</body>

</html>