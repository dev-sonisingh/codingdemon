<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <title>Coding Demon – Website development Solution </title>
    <meta name="description"
        content="Welcome to Coding Demon, we provide solutions and insights to troubleshoot and resolve various errors.
         Discover effective strategies, best practices, and troubleshooting techniques to tackle errors efficiently. 
         Let us help you overcome obstacles and achieve optimal performance. Explore our comprehensive resources and empower yourself with Coding Demon expertise">
    <meta name=keywords
        content="Coding Demon,it programming language,php,laravel 5,jquery,javascript,mysql,git,html,css,MySQL,HTML,CSS,git,AJAX,bootstrap, jQuery,JavaScript,Designing,Demo,codingdemon">
    <meta name="author" content="Coding Demon">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('Frontend_assets/style.css') }}">

    <!-- Skins -->
    <link rel="stylesheet" href="{{ asset('Frontend_assets/css/skins/skins.css') }}">

    <!-- Responsive Style -->
    <link rel="stylesheet" href="{{ asset('Frontend_assets/css/responsive.css') }}">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{ asset('Frontend_assets/images/favicon.png') }}">
    <style>
        /* .question-desc {

            display: -webkit-box;
            max-width: 800px;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
           
        } */



        /* Adjust this value to define the maximum width of the excerpt */
    </style>
</head>

<body>

    <div class="loader">
        <div class="loader_html"></div>
    </div>

    <div id="wrap" class="grid_1200">

        @include('Front.includes.header')
        @yield('content')
        @include('Front.includes.footer')

    </div>

    <div class="go-up"><i class="icon-chevron-up"></i></div>

    <!-- js -->
    <script src="{{ asset('Frontend_assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/jquery-ui-1.10.3.custom.min.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/jquery.easing.1.3.min.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/html5.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/twitter/jquery.tweet.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/jflickrfeed.min.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/jquery.inview.min.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/jquery.tipsy.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/tabs.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/jquery.flexslider.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/jquery.carouFredSel-6.2.1-packed.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/jquery.scrollTo.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/jquery.nav.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/tags.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('Frontend_assets/js/custom.js') }}"></script>
    <!-- End js -->

</body>

</html>
