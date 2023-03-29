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
    <style>
      .research-container {
    position: relative;
    width: 100%;
    height: 50rem;
    background-image: -webkit-gradient(linear, left top, left bottom, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.5))),
        url("{!! asset('storage/images/'.settings('research','banner')) !!}");
    background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)),
        url("{!! asset('storage/images/'.settings('research','banner')) !!}");
    background-position: center;
    background-size: cover;
    flex-direction: column;
    margin-top: 8rem;
    color: white;
}
    </style>
</head>
<body>
  @include("frontend.layouts.header")
  <!-- ------------------------- stikcy mnu -----------------------  -->
  @include('frontend.partials.sticky_menu')
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
        <h2>{{settings('research', 'heading')}}</h2>
        <hr></div>

    <p class="medium">{!! settings('research', 'description') !!}</p>

    <img src="../img/reserch & community page/svg pink.svg" alt="" class="svg">
</section>


<section class="development container">
    <div class="dvlp dvlp1 m-right flex-layout-c reveal">
        <div class="dvlp-left">
            <h2>{{settings('research', 'section_one_heading')}}</h2>
            <img src="../img/reserch & community page/pink.svg" alt="" class="small-svg">

            <p class="medium">{!! settings('research', 'section_one_description') !!}</p>
        </div>

        <div class="dvlp-right"><img src="../img/reserch & community page/dvlp 1.png" alt=""></div>
    </div>
    <div class="dvlp  dvlp2 m-left flex-layout-c reveal">
        <div class="dvlp-right"><img src="../img/reserch & community page/dvlp 2.png" alt=""></div>

        <div class="dvlp-left">
            <h2>{{settings('research', 'section_two_heading')}}</h2>
            <img src="../img/reserch & community page/green.svg" alt="" class="small-svg">

            <p class="medium">{!! settings('research', 'section_two_description') !!}</p>
        </div>

    </div>
    <div class="dvlp dvlp3 m-right flex-layout-c reveal">
        <div class="dvlp-left">
            <h2>{{settings('research', 'section_three_heading')}}</h2>
            <img src="../img/reserch & community page/svg pink.svg" alt="" class="small-svg">

            <p class="medium">{!! settings('research', 'section_three_description') !!}</p>
        </div>

        <div class="dvlp-right"><img src="../img/reserch & community page/dvlp 3.png" alt=""></div>
    </div>
    <div class="dvlp dvlp4 m-left flex-layout-c reveal">
        <div class="dvlp-right"><img src="../img/reserch & community page/dvlp 4.png" alt=""></div>

        <div class="dvlp-left">
            <h2>{{settings('research', 'section_four_heading')}}</h2>
            <img src="../img/reserch & community page/semi green.svg" alt="" class="small-svg">

            <p class="medium">{!! settings('research', 'section_four_description') !!}</p>
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

        
        <h2 class="medium svg-heading"><img src="../img/reserch & community page/blub.svg" alt="" class="small-svg bulb">{{settings('research', 'publication_heading')}}</h2>
        <p>{!! settings('research', 'publication_description') !!}
        </p>

        <img src="../img/reserch & community page/svg pink.svg" alt="" class="small-svg">

        <p>{!! settings('research', 'publication_details') !!}</p>

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