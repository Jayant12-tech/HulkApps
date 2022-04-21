<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>The Lehkaks</title>
  <!-- google fonts -->
  <link href="//fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,400&display=swap"
    rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Big+Shoulders+Inline+Text:wght@700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- google fonts -->
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <!-- Template CSS -->
</head>

<body>
  <!--header-->
  <header id="site-header" class="fixed-top">
    <div class="container">
      <nav class="navbar navbar-expand-lg stroke">
 
      <a class="navbar-brand mr-lg-5" href="{{route('index')}}">
          <h1 class="head1">The Lehkaks</h1>
      </a>
      
        <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
          data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
          <span class="navbar-toggler-icon fa icon-close fa-times"></span>
          </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav mr-auto">
           
            <li class="nav-item {{ Route::is('index') ? 'active' : '' }}">
              <a class="nav-link" href="{{route('index')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown dropdown1">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Blogs<span class="fa fa-angle-down"></span>
              </a>
              <div class="dropdown-menu dropdown-menu1" aria-labelledby="navbarDropdown1">
                <a class="dropdown-item" href="{{url('blog-category')}}/Happy">Happy</a>
                <a class="dropdown-item" href="{{url('blog-category')}}/Life">Life</a>
                <a class="dropdown-item" href="{{url('blog-category')}}/Motivation">Motivational</a>
              
              </div>
            </li>
            @auth
            <li class="nav-item dropdown dropdown2 {{ Route::is('profile') ? 'active' : '' }}">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown1" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Dashboard<span class="fa fa-angle-down"></span>
              </a>
              <div class="dropdown-menu dropdown-menu2" aria-labelledby="navbarDropdown1">
                <a class="dropdown-item {{ Route::is('user-profile') ? 'active' : '' }}" href="{{route('profile')}}">My Profile</a>
                <a class="dropdown-item {{ Route::is('all-blogs') ? 'active' : '' }}" href="{{route('allBlogs')}}">My Blogs</a>
                <a class="dropdown-item" href="{{route('newBlog')}}">Add Blogs</a>
                <a class="dropdown-item" href="{{url('/logout')}}">Logout</a>
              </div>
            </li>
            @endauth

          </ul>
        </div>
        <div class="d-lg-block d-none">
          @auth
              <a href="/" class="btn btn-style btn-secondary" >hello, <span id="user_name"> {{ Auth::user()->name; }} </span> </a>
          @else
            @if (Route::has('register') || Route::has('login') )
              <a href="{{ route('login') }}" class="btn btn-style btn-secondary">SignUp/SingIn</a>
            @endif
          @endauth


        </div>
       
      </nav>
    </div>
  </header>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script type="text/javascript">
  
      $(".dropdown1").hover(function(){
    $('.dropdown-menu1').show();
},function(){
    $('.dropdown-menu1').hide();
});

 $(".dropdown2").hover(function(){
    $('.dropdown-menu2').show();
},function(){
    $('.dropdown-menu2').hide();
});
  </script>
 

