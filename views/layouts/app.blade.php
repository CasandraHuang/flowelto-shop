<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Home Flowelto Shop</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                   Flowelto Shop
                </a>
              
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                  
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                     <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Categories
                      </a>
                      @if(!empty($title))
                     
                     <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                     @foreach($title as $t)
                     <a class="dropdown-item" href="{{ url('handmade') }}/{{ $t->id }}">{{$t->title_bunga}}</a>
                     @endforeach
                     </div>
                    
                    </li>
                    
                    @endif
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <!-- buat bagian user -->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>
                                @can ('isUser')
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <?php

                                $pesanan_utama = \App\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
                                if(!empty($pesanan_utama)){
                                $notif = \App\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                                }
                                ?>
                                @if(!empty($notif))
                                    <a class="dropdown-item" href="{{ url('check_out') }}">MyCart <span class="badge badge-pill badge-danger">{{ $notif }}</span></a>
                                @endif
                                <a class="dropdown-item" href="{{ url('transaction') }}">Transaction History</a>
                                <a class="dropdown-item" href="{{ url('change-password') }}">Change Password</a>
                                @endcan

                                @can ('isManager')
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ url('create') }}">Add Flower</a>
                                    <a class="dropdown-item" href="{{ url('') }}">Manage Category</a>
                                    <a class="dropdown-item" href="{{ url('change-password') }}">Change Password</a>
                                @endcan
                            </li>
                            <!-- buatlogout -->
                            <li class="nav-item">
                                    <a class="nav-link" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                            </li>
                            <li class="nav-item">
                                <p>{{date('D, d M Y')}}</p>
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
</body>
</html>
