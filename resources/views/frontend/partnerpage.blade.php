<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../img/home page/logo.png">
    <link rel="stylesheet" href="{{ asset('style/resuable.css') }}" />
    <link rel="stylesheet" href="{{ asset('style/partnerpage.css') }}" />
    <script src="{{ asset('/script.js') }}" defer></script>
    <title>Pages</title>
</head>
<body>
    @include("frontend.layouts.header")
        {!! settings('partnership', 'partnership') !!}
    @include("frontend.layouts.footer")

    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="{{ asset('/scrolll.js.js') }}"></script>
</body>
</html>