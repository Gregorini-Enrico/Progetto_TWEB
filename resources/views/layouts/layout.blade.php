<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}>
    <head>
        <title>Layout Pagine</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{asset('css/styleBase.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/styleNavBar.css')}}">
        @yield('stylesheets')
        <title>TWEB | @yield('title', 'Home')</title>
    </head>
    
    <body>
        
        <!-- Title -->
        <div> 
		<a href="{{ route('Homepage') }}">  <img alt="" class="logoClass" src="{{asset('/images/logo_univpm.png')}}"> </a> 
                <h1 class = "logoTitle"> DGGG Events </h1>
        </div>
        
        <!-- Navbar 
        <div class="topnav">
            <a  href="#home">Home</a>
            <a href="#news">News</a>
            <a href="#contact">Contact</a>
            <a href="#about">About</a>
            <div class="topnav-right">
                <a href="#search">Login</a>
                <a href="#about">Registrati</a>
            </div>
	</div> -->
        @include('layouts\PublicNavbar')
        
        @yield('content')
        <!-- Footer -->
        <hr>
        <footer id="myFooter">
            <div>
                <h2> <b>Contattaci: </b></h2>
                <a href="https://www.facebook.com"> <img alt="" class="stileLogo" src="{{asset('/images/fb.png')}}"> </a>
                <a href="https://www.instagram.com"> <img alt="" class="stileLogo" src="{{asset('/images/ig.png')}}"> </a>
                <a href="https://www.twitter.com"> <img alt="" class="stileLogo" src="{{asset('/images/tw.png')}}"> </a>
            </div>
        </footer>
        
    </body>
</html>

