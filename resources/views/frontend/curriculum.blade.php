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
    @include('frontend.partials.sticky_menu')
      <!-- ------------------------- end -----------------------  -->
        <!-- --------------------------------- main code start here ------------------------------------  -->
        
        <section class="research-container flex-layout-c">
          <h1>Our Curriculum</h1>
          <div class="shadowbg"></div>
        </section>
        
        <section class="publication container reveal">
            <div class="hr-center-heading">
                <h2> {{settings('curriculum', 'heading')}}</h2>
                <hr></div>
    
            <p class="medium">{{settings('curriculum', 'description')}}</p>
    
            <img src="../img/reserch & community page/svg pink.svg" alt="" class="svg">
        </section>
    
    
        <!-- new section -->
        <section class="development container">
            <div class="dvlp dvlp1 m-right flex-layout-c reveal">
                <div class="dvlp-left">
                    <h2>{{settings('curriculum', 'section_one_heading')}}</h2>
                    <img src="../img/reserch & community page/pink.svg" alt="" class="small-svg">
    
                    <p class="medium">{{settings('curriculum', 'section_one_description')}}</p>
                </div>
    
                <div class="dvlp-right"><img src="{{asset('storage/images/'.settings('curriculum','section_one_image'))}}" alt=""></div>
            </div>
            <div class="dvlp dvlp2 m-left flex-layout-c reveal">
                <div class="dvlp-right"><img src="{{asset('storage/images/'.settings('curriculum','section_two_image'))}}" alt=""></div>
    
                <div class="dvlp-left">
                    <h2>{{settings('curriculum', 'section_two_heading')}}</h2>
                    <img src="../img/reserch & community page/green.svg" alt="" class="small-svg">
    
                    <p class="medium">{{settings('curriculum', 'section_two_description')}}</p>
                </div>
    
            </div>
            <div class="dvlp dvlp3 m-right flex-layout-c reveal">
                <div class="dvlp-left">
                    <h2>{{settings('curriculum', 'section_three_heading')}}</h2>
                    <img src="../img/reserch & community page/svg pink.svg" alt="" class="small-svg">
    
                    <p class="medium">{{settings('curriculum', 'section_three_description')}}</p>
                </div>
    
                <div class="dvlp-right"><img src="{{asset('storage/images/'.settings('curriculum','section_three_image'))}}" alt=""></div>
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