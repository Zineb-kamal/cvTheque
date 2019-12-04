<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link rel="stylesheet"  href="{{ asset('assets/css/bootstrap.min.css') }}">
  <style  > .body{margin-top:30px; }</style>
  <script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</head>

<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <a class="navbar-brand" href="{{url('acceuil')}}">Accueil</a>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href=""> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">CV</a>
      </li>
      <li class="nav-item">
        <a class="nav-link " href="#" tabindex="-1" aria-disabled="true">Contact</a>
      </li>
    </ul>
   
  </div>
</nav>
<div class="body">
@yield('content')
@yield('vuejs')
</div>

</body>
</html>