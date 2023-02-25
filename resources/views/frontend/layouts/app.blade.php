<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ mix('/frontend_assets/css/style.css') }}"/>
  <link rel="shortcut icon" href="{{ asset('../img/home page/logo.png') }}" type="image/png">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
  <title>Tack - Home</title>
</head>
<body>
@include("frontend.layouts.header")
@yield("content")
@include("frontend.layouts.footer")

  <!-- ---------------------------- necessary js ---------------------------  -->
  <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="{{ mix('/frontend_assets/js/script.js') }}"></script>
  <script src="https://unpkg.com/scrollreveal"></script>

</body>

</html>