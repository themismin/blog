<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>@yield('title') </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="@yield('description')" />
    <meta name="keywords" content="@yield('keywords')" />
    <meta name="author" content="Mingo" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{ asset('default/css/bootstrap.min.css') }}">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{ asset('default/css/animate.css') }}">

    @yield('style')

    <link rel="stylesheet" href="{{ asset('default/css/index.css') }}">

    <link rel="stylesheet" href="{{ asset('css/markdown.css') }}">

</head>
<body>
@inject('systemPresenter', 'App\Presenters\SystemPresenter')
<header id='mingo-header'>
    <nav class='navbar navbar-default navbar-static-top'>
        <div class='container'>
            <div class="navbar-header">
                <!-- Mobile Toggle Menu Button -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url("/") }}" >{{ $systemPresenter->getKeyValue('blog_name') }}</a>
            </div>
            @include('default.navigation')
        </div>
    </nav>
</header>

<section id='content' style="margin-top:40px;">
    <div class='container'>
        <div class='row'>
            <div class='col-md-12' >
                <div class="content-wrap">
                    @yield('header-text')

                    @yield('content')
                </div>
            </div>
        </div>
    </div>
</section>

@include('default.footer')

<!-- jQuery -->
<script src="{{ asset('default/js/jQuery-2.2.0.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('default/js/bootstrap.min.js') }}"></script>
<!-- Waypoints -->

<script src="{{ asset('default/js/index.js') }}"></script>

@yield('script')
</body>
</html>
