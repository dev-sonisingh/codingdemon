<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Phoenix</title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->

    <script src="{{ asset('Backend_assets/vendors/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/assets/js/config.js') }}"></script>

    <link href="{{ asset('Backend_assets/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">

    <link href="{{ asset('Backend_assets/assets/css/theme-rtl.min.css') }}" type="text/css" rel="stylesheet"
        id="style-rtl">

    <link href="{{ asset('Backend_assets/assets/css/user-rtl.min.css') }}" type="text/css" rel="stylesheet"
        id="user-style-rtl">
    <link rel="apple-touch-icon" sizes="180x180"
        href="{{ asset('Backend_assets/assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png')}}" sizes="32x32"
        href="{{ asset('Backend_assets/assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png')}}" sizes="16x16"
        href="{{ asset('Backend_assets/assets/img/favicons/favicon-16x16.png') }}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('Backend_assets/assets/img/favicons/favicon.ico') }}">
    <link rel="manifest" href="{{ asset('Backend_assets/assets/img/favicons/manifest.json') }}">
    <meta name="msapplication-TileImage"
        content="{{ asset('Backend_assets/assets/img/favicons/mstile-150x150.png') }}">
    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('Backend_assets/vendors/imagesloaded/imagesloaded.pkgd.min.js') }}"></script>
    <!--    Stylesheets-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href="{{ asset('Backend_assets/assets/css/theme.min.css') }}" type="text/css" rel="stylesheet"
        id="style-default">
    <link href="{{ asset('Backend_assets/assets/css/user.min.css') }}" type="text/css" rel="stylesheet"
        id="user-style-default">
    {{-- <link href="{{ asset('Backend_assets/vendors/leaflet/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('Backend_assets/vendors/leaflet.markercluster/MarkerCluster.css') }}" rel="stylesheet">
    <link href="{{ asset('Backend_assets/vendors/leaflet.markercluster/MarkerCluster.Default.css') }}" rel="stylesheet"> --}}
    <style>
        #myAlert {
            color: white;
        }

        .fadeOut {
            animation: fadeOut 1s ease-in-out forwards;
        }

        @keyframes fadeOut {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }
    </style>

    <script>
        // Wait for the document to load
        document.addEventListener('DOMContentLoaded', function() {
            // Get the alert element
            var alert = document.getElementById('myAlert');

            // Set a timeout to hide the alert after 5 seconds

            setTimeout(function() {
                alert.classList.add('fadeOut');
            }, 5000);
        });

        function confirmDelete() {
            return confirm("Are you sure you want to delete this record?");
        }

        var phoenixIsRTL = window.config.config.phoenixIsRTL;
        if (phoenixIsRTL) {
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
</head>

<body>
    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->
    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container">
            @if(session('alert'))
            <script>
                alert('{{ session('alert') }}');
            </script>
            @endif
            @include('Backend.manager.layouts.sidebar')
            @include('Backend.manager.layouts.header')
            <div class="content">
                @yield('content')
                @include('Backend.manager.layouts.footer')
            </div>
        </div>

    </main>

    @yield('scripts')

    <script src="{{ asset('Backend_assets/vendors/popper/popper.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/anchorjs/anchor.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/is/is.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/lodash/lodash.min.js') }}"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="{{ asset('Backend_assets/vendors/list.js/list.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/feather-icons/feather.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/dayjs/dayjs.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/assets/js/phoenix.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/echarts/echarts.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/chart/chart.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/dropzone/dropzone.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/choices/choices.min.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/leaflet/leaflet.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/leaflet.markercluster/leaflet.markercluster.js') }}"></script>
    <script src="{{ asset('Backend_assets/vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js') }}">
    </script>
    <script src="{{ asset('Backend_assets/assets/js/ecommerce-dashboard.js') }}"></script>
    <script src="{{ asset('Backend_assets/unpkg.com/%40googlemaps/markerclusterer%402.0.15/dist/index.min.js') }}">
    </script>
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDbaQGvhe7Af-uOMJz68NWHnO34UjjE7Lo&amp;callback=revenueMapInit"
        async></script>
    <script>
      


        tinymce.init({
            selector: '#myTextarea',
            plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect',
            toolbar: 'undo redo | blocks fontsize | bold italic underline | link image media table mergetags |  align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
            tinycomments_mode: 'embedded',
            tinycomments_author: 'Author name',
            mergetags_list: [{
                    value: 'First.Name',
                    title: 'First Name'
                },
                {
                    value: 'Email',
                    title: 'Email'
                },
            ],
        });
    </script>
</body>

</html>
