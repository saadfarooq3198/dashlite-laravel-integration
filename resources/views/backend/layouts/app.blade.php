<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{config('app.name')}} @yield('title')</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="{{ asset('../img/home page/logo.png') }}" type="image/png">
    
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ mix('/css/app.css') }}"/>
    <link rel="stylesheet" href="{{ mix('/css/backend/theme.css') }}"/>

    <!-- page styles -->
    @yield('styles')
</head>

<body class="nk-body bg-lighter npc-default has-sidebar ">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- sidebar @s -->
            @include('backend.layouts.partials.sidebar')
            <!-- sidebar @e -->
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <!-- main header @s -->
                @include('backend.layouts.partials.header')
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container-fluid">
                        <div class="nk-content-inner">
                            <div class="nk-content-body">
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
                <!-- footer @s -->
                @include('backend.layouts.partials.footer')
                <!-- footer @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- general modal -->
    @include('backend.layouts.partials.modal')
    <!-- .modal -->
    <!-- JavaScript -->
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="{{ mix('/js/backend/theme.js') }}"></script>
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        // Hide alert message if any
        $('div.alert').not('.alert-important').delay(3000).slideUp(350);
    </script>
</body>

</html>