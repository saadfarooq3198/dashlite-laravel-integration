<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/research.css') }}" />
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
    <script src="{{ asset('/imporFunc.js') }}" defer></script>
    <script src="{{ asset('/script.js') }}" defer></script>
    <title>Tack - Research</title>
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
  <!-- -------------------- main code start here ------------------------  -->
  <section class="research-container flex-layout-c">
    <h5 class="semi-bold smi">Our Project</h5>

    <h2>Our Publications & Resources</h2>

    <h5 class="semi-bold smi">Our Research Partner</h5>
    <div class="shadowbg "></div>

</section>




<section class="publication container center reveal">
    <div class="hr-center-heading">
        <h2> Our Publication & Resources</h2>
        <hr></div>

    <p class="medium">In order to create a fun and engaging learning environment in all of our provision, we have developed a range of curriculum resources that support the development of Arabic literacy and also to create a bilingual environment. We have also written material for teachers to support them to provide high-quality Arabic language learning settings.</p>

    <img src="../img/reserch & community page/svg pink.svg" alt="" class="svg">
</section>


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
    <div class="dvlp  dvlp2 m-left flex-layout-c reveal">
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
    <div class="dvlp dvlp4 m-left flex-layout-c reveal">
        <div class="dvlp-right"><img src="../img/reserch & community page/dvlp 4.png" alt=""></div>

        <div class="dvlp-left">
            <h2>Oral Language</h2>
            <img src="../img/reserch & community page/semi green.svg" alt="" class="small-svg">

            <p class="medium">Oral language is the foundation of reading and writing skills, even when the spoken form
                differs from the written form. <br>
                TACK seeks to create authentic and dialogic environments for language learning. Extra-
                curricular themed days make language learning fun and exciting.</p>
        </div>

    </div>
</section>


<section class="jig-jag reveal">
    <div class="jig-jag-container">
        <div class="j-j-data r-bg">
            <p>Developing ‘Big Books’ for whole class teaching.</p>
            <iconify-icon icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
        </div>
        <div class="j-j-img"><img src="../img/reserch & community page/j-j 1.png" alt=""></div>
        <div class="j-j-data r-bg change1">
            <p>Researching progressions in phonological and phonic knowledge in Arabic.</p>
            <iconify-icon icon="material-symbols:arrow-right-alt-rounded"></iconify-icon>
        </div>
        <div class="j-j-img change2"><img src="../img/reserch & community page/j-j 2.png" alt=""></div>
        <div class="j-j-img"><img src="../img/reserch & community page/j-j 3.png" alt=""></div>
        <div class="j-j-data g-bg">
            <p>Developing display materials that create an explicitly bilingual environment.</p>
            <iconify-icon icon="material-symbols:arrow-right-alt-rounded" rotate="180deg"></iconify-icon>
        </div>
        <div class="j-j-img"><img src="../img/reserch & community page/j-j 4.png" alt=""></div>
        <div class="j-j-data g-bg ">
            <p>Developing a consultancy offering to schools offering Arabic as a curriculum
                subject</p>
            <iconify-icon icon="material-symbols:arrow-right-alt-rounded" rotate="180deg"></iconify-icon>
        </div>
    </div>
</section>

<section class="research-partner reveal">
    <div class="r-partner-container small-container">
        <div class="hr-center-heading">
            <h2> Our Publication & Resources</h2>
            <hr>
        </div>

        
        <h2 class="medium svg-heading"><img src="../img/reserch & community page/blub.svg" alt="" class="small-svg bulb"> Dr. Sue Bodman</h2>
        <p>National Lead, Reading Recovery, Programme Leader, MA in Reading Recovery and Literacy Leadership,
            Module Leader,Dissertations and Reports in MA LLLD and MARRLL
        </p>

        <img src="../img/reserch & community page/svg pink.svg" alt="" class="small-svg">

        <p>Dr Sue Bodman works at the Institute of Education, UCL's Faculty of Education and Society, the world-leading centre for research and teaching in education and social science.  This institution has been ranked number one for education worldwide since 2014 in the QS World University Rankings by Subject.</p>
<br>
        <p>She has a diverse portfolio of work, teaching on masters and doctoral programmes in the areas of literacy development, literacy difficulties and research methods.  She also works with teachers, teacher educators and publishers, in many international contexts.  Sue’s research interests and publications include teacher education, continuing professional development for teachers, language development, literacy learning, literacy learning in bilingual settings and literacy interventions. Before moving to higher education in 2002, Sue worked as a classroom teacher and teacher adviser. She is passionate about supporting teachers working in all age phases to develop effective literacy programmes. Sue first met Dr Hamiduddin in 2009.  They have spent the last 10 years working together on a variety of projects to achieve change for the better in Arabic literacy teaching and learning. 
        </p>

        <div class="help-btn">
            <a href="#" class="previous btn-1">Previous</a>
            <a href="#" class="next btn-1">Next</a>
        </div>
    </div>
</section>


<section class="training reveal">
    <div class="train-data">
        <div class="hr-left-heading">
            <h2> Consultancy & Training</h2>

            <hr class="b-white">
        </div>
        <h5>Why Tack ?</h5>
        <p class="sb-para regular">The most effective way to ensure an effective learning environment for children is to educate and support its teachers. Therefore, we have created a collaborative hub of experts from literacy and language backgrounds who work with the Director to develop <br>
            the TACK methodology and support its staff through continuing professional development.</p>

        <h5>What we offer</h5>

        <ul class="page-ul">
            <li class="page-li"><p class="sb-para">Training and Support to set up an AlMaeeyah after school club </p></li>
            <li class="page-li"><p class="sb-para">Training to implement The Arabic Club for Kids guided reading programme</p></li>
            <li class="page-li"><p class="sb-para">Training to develop teacher</p></li>
        </ul>
    </div>

    <div class="train-img"><img src="../img/reserch & community page/image.png" alt=""></div>
</section>
  <!-- ---------------------------- end ------------------------------  -->
  @include("frontend.layouts.footer")
  <!-- ---------------------------- necessary js ---------------------------  -->
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="{{ asset('/scrolll.js.js') }}"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

  <script>
    ScrollReveal().reveal('.reveal', {delay: 500});
  </script>
</body>
</html>