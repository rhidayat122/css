<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{asset('/css/app.css')}}" rel="stylesheet">
    <link href="{{asset('/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('/css/dataTables.bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('/css/jquery.dataTables.css')}}" rel="stylesheet">
    <style>

    body {
          font-family: 'Times New Roman';
          background-image: url({{asset ('img/a.jpg') }});
          background-repeat: no-repeat;
          background-size: cover;
          background-attachment: fixed;

         }
    .panel-heading-custom {
          color: black;
          background: rgba(225,225,225,0.5);
          background: rgba(225,225,225,0.0);
          border-top-left-radius:15px ;  
          border-top-right-radius:15px ; 
         }
    .panel-custom {
          background: rgba(225,225,225,0.5);
          border-radius: 15px; 
         }
    .panel-title-custom {
          color: orange;
          font-family: 'Times New Roman';
         }
    table{
          border-radius: 15px; 
          background: rgb(255,255,255); 
         }
    .navbar-custom{
          color: white;
          background: rgba(8,8,8,0.5); 
          border-bottom-left-radius:20px ;  
          border-bottom-right-radius:20px ;
          
         }
    h1{
       font-family: 'Times New Roman';
    }
    hr{
      border-color: rgba(30,30,30,0.5);
    }

    </style>
    <!-- Scripts -->

    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                       <img src="assets/img/ui-sam.png" class="img-circle" width="60"></a></p> Motor
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                     @if (Auth::check())
                     <li><a href = "{{url('/home')}}">Dashboard</a></li>
                     @endif
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        <!-- @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Daftar</a></li> -->
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>

    <!-- Scripts -->
    <script src='/js/app.js'></script>
    <script src='/js/jquery.dataTables.min.js'></script>
    <script src='/js/dataTables.bootstrap.min.js'></script>
    <script src='/js/custom.js'></script>

    <script src='/js/jquery.js'></script>

</body>
</html>
