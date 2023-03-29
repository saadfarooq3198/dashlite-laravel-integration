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
    <style>  
      .school-club {
    position: relative;
    width: 100%;
    background: url("{!! asset('storage/images/'.settings('school_club','section_one_image')) !!}");
    height: 50rem;
    background-size: cover;
    background-position: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    margin-top: 8rem;
}
      </style>
</head>

<body>

  @include("frontend.layouts.header")
  <!-- ------------------------- stikcy mnu -----------------------  -->
  @include('frontend.partials.sticky_menu')
<!-- ------------------------- end -----------------------  -->
  <!-- ---------------------------- main code start here ---------------------------  -->
  <section class="school-club">
      <div class="school-club-container">
          <div class="club-data">
              <h2>{!! settings('school_club', 'section_one_heading') !!}</h2>

              <div class="s-club-detail">
                  <p>{!! settings('school_club', 'section_one_description') !!}</p>
              </div>
          </div>
      </div>
  <div class="shadowbg"></div>

  </section>


  <section class="club reveal">
      <div class="club-container flex-layout-c">

          <div class="club-left"><img src="{!! asset('storage/images/'.settings('school_club','section_two_image')) !!}" alt=""></div>

          <div class="club-right h-white">
              <h2>{!! settings('school_club', 'section_two_heading') !!}</h2>
              <img src="../img/about page/white 4 sq.svg" alt="" class="svg">
              <p class="medium">{!! settings('school_club', 'section_two_description') !!}
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

          <div class="img"><img src="{!! asset('storage/images/'.settings('school_club','section_three_image')) !!}" alt=""></div>

          <div class="help-btn">
              <a href="#" class="previous btn-1">Download</a>
              <a href="#" class="next btn-1">Explore</a>
          </div>
      </div>
  </section>

  <section class="why-us container reveal">
      <h2>{!! settings('school_club', 'section_three_heading') !!}</h2>

      <p class="medium">{!! settings('school_club', 'section_three_description') !!}</p>

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