<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <style>
        @media print {
            .noprint {
                display: none;
            }
        }
    </style>

    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title class="nopirnt">EPIS &amp; Elektronic Personal Information System</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon-16x16.png">
    <link rel="manifest" href="/assets/img/favicons/site.webmanifest">
    <link rel="mask-icon" href="/assets/img/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <script src={{ asset('assets/js/config.js') }}></script>
    <script src="vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">

    <link href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/buttons/2.4.1/css/buttons.dataTables.min.css" rel="stylesheet">


    <link href={{ asset('vendors/overlayscrollbars/OverlayScrollbars.min.css') }} rel="stylesheet">
    <link href={{ asset('assets/css/theme-rtl.min.css') }} rel="stylesheet" id="style-rtl">
    <link href={{ asset('assets/css/theme.min.css') }} rel="stylesheet" id="style-default">
    <link href={{ asset('assets/css/user-rtl.min.css') }} rel="stylesheet" id="user-style-rtl">
    <link href={{ asset('assets/css/user.min.css') }} rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>

    <style>
        #preloader {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: 9999;
            overflow: hidden;
            background: #0074aa;
        }

        #preloader:before {
            content: "";
            position: fixed;
            top: calc(50% - 30px);
            left: calc(50% - 30px);
            border: 6px solid #37517e;
            border-top-color: #fff;
            border-bottom-color: #fff;
            border-radius: 50%;
            width: 60px;
            height: 60px;
            animation: animate-preloader 1s linear infinite;
        }

        @keyframes animate-preloader {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>


</head>


<body>


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container" data-layout="container">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>
            {{-- @role('super admin')
                @include('partials.navbar_superadmin')
            @endrole
            @role('admin')
                @include('partials.navbar_admin')
            @endrole
            @role('user')
                @include('partials.navbar_user')
            @endrole --}}
            <div class="content">

                @include('partials.header')
                <div class="py-4">
                    @yield('content')
                </div>
                <footer class="footer">
                    <div class="row g-0 justify-content-between fs--1 mt-4 mb-3">
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600"><span class="d-none d-sm-inline-block"></span><br
                                    class="d-sm-none" />
                                <a href="https://themewagon.com"></a>
                            </p>
                        </div>
                        <div class="col-12 col-sm-auto text-center">
                            <p class="mb-0 text-600">v.2.0.0</p>
                        </div>
                    </div>
                </footer>
            </div>
            <div class="modal fade" id="authentication-modal" tabindex="-1" role="dialog"
                aria-labelledby="authentication-modal-label" aria-hidden="true">
                <div class="modal-dialog mt-6" role="document">
                    <div class="modal-content border-0">

                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->
    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->
    <script src={{ asset('vendors/popper/popper.min.js') }}></script>
    <script src={{ asset('vendors/bootstrap/bootstrap.min.js') }}></script>
    <script src={{ asset('vendors/anchorjs/anchor.min.js') }}></script>
    <script src={{ asset('vendors/is/is.min.js') }}></script>
    <script src={{ asset('vendors/echarts/echarts.min.js') }}></script>
    <script src={{ asset('vendors/fontawesome/all.min.js') }}></script>
    <script src={{ asset('vendors/lodash/lodash.min.js') }}></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src={{ asset('vendors/list.js/list.min.js') }}></script>
    <script src={{ asset('assets/js/theme.js') }}></script>
    <script src="{{ asset('assets/js2/main.js') }}"></script>

    @stack('js')
</body>

</html>
