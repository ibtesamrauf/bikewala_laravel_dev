<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('images/favicon.png') }}" />
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <script language="javascript" type="text/javascript">
            function getXMLHTTP() { //fuction to return the xml http object
                var xmlhttp=false;
                try{
                    xmlhttp=new XMLHttpRequest();
                }
                catch(e)    {
                    try{
                        xmlhttp= new ActiveXObject("Microsoft.XMLHTTP");
                    }
                    catch(e){
                        try{
                            xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
                        }
                        catch(e1){
                            xmlhttp=false;
                        }
                    }
                }

                return xmlhttp;
            }

            function getmodel(make_id) {

                var strURL="findmodel.php?make_id="+make_id;
                var req = getXMLHTTP();

                if (req) {

                    req.onreadystatechange = function() {
                        if (req.readyState == 4) {
                            // only if "OK"
                            if (req.status == 200) {
                                document.getElementById('modeldiv').innerHTML=req.responseText;
                            } else {
                                alert("There was a problem while using XMLHTTP:\n" + req.statusText);
                            }
                        }
                    }
                    req.open("GET", strURL, true);
                    req.send(null);
                }
            }
        </script>

    <!-- Styles -->
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<body class="m-index" data-scrolling-animations="false" data-equal-height=".b-auto__main-item">
    <div id="page-preloader">
            <span class="spinner"></span>
    </div>
    
   <!--  <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                 
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    
                    <ul class="nav navbar-nav navbar-right">
                        
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
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
 -->
        @yield('content')
    <!-- </div> -->


    @include('layouts.inc_footer')
    @include('layouts.inc_main')

</body>
</html>
