<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title')</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="{{ asset('assets/backend/css/')}}/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css" integrity="sha512-q3eWabyZPc1XTCmF+8/LuE1ozpg5xxn7iO89yfSOd5/oKvyqLngoNGsx8jq92Y8eXJ/IRxQbEC+FGSYxtk2oiw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        @stack('css')
        <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">
        <style>
            .active{
                color: #fff;
            }
        </style>
    </head>
    <body class="sb-nav-fixed">
        @include('backend.layouts.header')
        <div id="layoutSidenav">
            @include('backend.layouts.sidebar')

            <div id="layoutSidenav_content">
                <main>
                    @yield('content')
                </main>

                @include('backend.layouts.footer')
            </div>
        </div>
        <script src="{{ asset('assets/backend/js/')}}/jquery.min.js"></script>
        <script src="{{ asset('assets/backend/js/')}}/popper.min.js"></script>
        <script src="{{ asset('assets/backend/js/')}}/bootstrap.min.js"></script>
        <script src="{{ asset('assets/backend/js/')}}/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/backend/assets/demo/')}}/demo/chart-area-demo.js"></script>
        <script src="{{ asset('assets/backend/assets/demo/')}}/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/backend/js/')}}/datatables-simple-demo.js"></script>
        @stack('script')
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
    </body>
</html>
