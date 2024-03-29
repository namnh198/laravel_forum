@php $secure = config('app.env') === 'production' ? true : false; @endphp
<!DOCTYPE html> 
<html lang="{{ app()->getLocale() }}"> 
<head> 
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
 
    <!-- CSRF Token --> 
    <meta name="csrf-token" content="{{ csrf_token() }}"> 
 
    <title>{{ config('app.name', 'Laravel') }}</title> 
 
    <!-- Scripts --> 
    <script src="{{ asset('js/app.js', $secure) }}" defer></script> 
 
    <!-- Fonts -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.12/css/all.css" integrity="sha384-G0fIWCsCzJIMAVNQPfjH08cyYaUtMwjJwqiRKxxE/rx96Uroj1BtIQ6MLJuheaO9" crossorigin="anonymous">
    <link rel="dns-prefetch" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css"> 
 
    <!-- Styles --> 
    <link href="{{ asset('css/app.css', $secure) }}" rel="stylesheet"> 
    <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atom-one-dark.min.css">
</head> 
<body> 
    <div id="app"> 
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel"> 
            <div class="container"> 
                <a class="navbar-brand" href="{{ url('/') }}"> 
                    {{ config('app.name', 'Laravel') }} 
                </a> 
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
                    <span class="navbar-toggler-icon"></span> 
                </button> 
 
                <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                    <!-- Left Side Of Navbar --> 
                    <ul class="navbar-nav mr-auto"> 
 
                    </ul> 
 
                    <!-- Right Side Of Navbar --> 
                    <ul class="navbar-nav ml-auto"> 
                        <!-- Authentication Links --> 
                        @guest 
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li> 
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li> 
                        @else 
                            <li class="nav-item dropdown"> 
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre> 
                                    {{ Auth::user()->name }} <span class="caret"></span> 
                                </a> 
 
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                                    <a class="dropdown-item" href="{{ route('logout') }}" 
                                       onclick="event.preventDefault(); 
                                                     document.getElementById('logout-form').submit();"> 
                                        {{ __('Logout') }} 
                                    </a> 
 
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> 
                                        @csrf 
                                    </form> 
                                </div> 
                            </li> 
                        @endguest 
                    </ul> 
                </div> 
            </div> 
        </nav> 
 
        <main class="py-4 "> 
 
            @yield('content') 
 
        </main> 
    </div> 
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> 
    <script src="{{ asset('js/jquery.textarea.js', $secure)}}"></script>
    <script> 
        @if(Session::has('message')) 
        var type="{{Session::get('alert-type','info')}}" 
 
        switch(type){ 
            case 'info': 
                toastr.info("{{ Session::get('message') }}"); 
                break; 
            case 'success': 
                toastr.success("{{ Session::get('message') }}"); 
                break; 
            case 'warning': 
                toastr.warning("{{ Session::get('message') }}"); 
                break; 
            case 'error': 
                toastr.error("{{ Session::get('message') }}"); 
                break; 
        } 
        @endif 

        var tabby_opts = {tabString:'   '};
        $('.tabby').tabby({tabString:'   '});
        console.log(tabby_opts);
    </script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
    
    <script>hljs.initHighlightingOnLoad();</script>

</body> 
</html> 
