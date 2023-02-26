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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">


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
    <!-- include libraries(jQuery, bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
</body>

</html>