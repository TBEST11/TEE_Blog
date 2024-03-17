<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>
        
        <link rel="stylesheet" href="{{asset('css/font-awesome-all.css')}}">
        <link rel="icon" href="{{asset('uploads/tee_icon.jpg')}}" type="image/gif" />

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <!-- style css -->
        <link rel="stylesheet" href="{{asset('css/style.css')}}">
        <!-- Responsive-->
        <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
        <!-- fevicon -->
        <!-- Scrollbar Custom CSS -->
        <link rel="stylesheet" href="{{asset('css/jquery.mCustomScrollbar.min.css')}}">
    </head>
    <body class="antialiased">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white">
            {{-- @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}
            <header>
                <!-- header inner -->
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
                                  <ul class="menu-area-main">
                                     <li class="active">
                                        <a href="/home">Home</a>
                                     </li>
                                     <li>
                                        <a href="{{ route('login') }}">Login</a>
                                     </li>
                                     <li>
                                        <a href="{{ route('register')}}">Register</a>
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
                                  </ul>
                               </nav>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
                <!-- end header inner -->
             </header>

                @include('layouts.upper')
                
                <!-- section --> 
                  <div class="section layout_padding blog_blue_bg light_silver">
                   <div class="container">
                       <div class="row">
                           <div class="col-md-8 offset-md-2">
                            <div class="heading">
                                  <h3>Blog</h3>
                              </div>
                           </div>
                       </div>
                      <div class="row">
                          <div class="col-md-8 offset-md-2">
                              <div class="full">
                               <div class="big_blog">
                                     <img class="img-responsive" src="{{('uploads/blog_1.png')}}" alt="#" />
                               </div>
                               <div class="blog_cont_2">
                                  <h3>Why do we use it</h3>
                                     <p class="sublittle">March 19 2019  5 READ</p>
                                     <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters as opposed to using Content here content here making..</p>
                                   </div>
                               </div>
                           </div>
                       </div>
                      </div>
                   </div>
                   @include('layouts.footer')
        <script src="{{asset('js/jquery.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
         <script src="{{asset('js/jquery-3.0.0.min.js')}}"></script>
        <script src="{{asset('js/plugin.js')}}"></script>
        <!-- Scrollbar Js Files -->
        <script src="{{asset('js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
        <script src="{{asset('js/ascustom.js')}}"></script>
    
    </body>
</html>
