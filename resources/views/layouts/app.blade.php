<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'TBest blog') }}</title>
    <link rel="icon" href="{{asset('uploads/tee_icon.jpg')}}" type="image/gif" />

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
   
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
     <!-- style css -->
     <link rel="stylesheet" href="{{asset('css/style.css')}}">
     <!-- Responsive-->
     <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
     <!-- fevicon -->
     <!-- Scrollbar Custom CSS -->
     <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
     <link rel="stylesheet" href="{{asset('css/font-awesome-all.css')}}">
    

     @vite([ 'resources/js/app.js'])
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                        <div class="logo"> <a href="/index"><img src="{{asset('uploads/tee_logo.jpg')}}" alt="#"></a> </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                <div class="menu-area">
                   <div class="limit-box">
                      <nav class="main-menu">
                        {{-- <a class="navbar-brand" href="{{ url('/') }}">
                            {{ config('app.name', 'Laravel') }}
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>
        
                        <div class="collapse navbar-collapse" id="navbarSupportedContent"> --}}
                            <!-- Left Side Of Navbar -->
                            <ul class="menu-area-main">
                                <li class="active">
                                   <a href="/">Home</a>
                                 </li>
                                 <li>
                                    <a href="{{route('contact.index')}}">About</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('blog.create')}}">Create a Blog</a>
                                 </li>
                                 <li>
                                    <a href="{{ route('blog.index')}}">Blogs</a>
                                 </li>
                                 <li>
                                    <a href="{{route('contact.create')}}">Contact us</a>
                                 </li>
                                 <li>
                                    <a href="https://www.google.com"><img src="{{asset('uploads/search_icon.png')}}" alt="#" /></a>
                                 </li>
                                 
                            
        
                               <!-- Right Side Of Navbar -->
                           
                                <!-- Authentication Links -->
                                @guest
                                    @if (Route::has('login'))
                                        <li class="">
                                            <a class="" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif
        
                                    @if (Route::has('register'))
                                        <li class="">
                                            <a class="" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>
        
                                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
        
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </nav>
                 </div>
                </div>
            </div>
        </div>
    </header>

        <main class="py-4">
            @yield('content')
        </main>
        @include('layouts.footer')
    </div>
    <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/popper.min.js')}}"></script>
      <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
      <script src="{{asset('js/plugin.js')}}"></script>
      <!-- Scrollbar Js Files -->
      <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('js/ascustom.js')}}"></script>
      <script src="{{asset('js/fontawesome.js')}}"></script>
</body>
</html>

