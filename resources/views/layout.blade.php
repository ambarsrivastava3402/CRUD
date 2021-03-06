<!DOCTYPE html>
<html>
<head>
	<title>Restaurant App</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"  crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"  crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"  crossorigin="anonymous"></script>
    <link rel="stylesheet"  href="{{asset('css/custom.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
  <header>
  	<nav class="navbar navbar-expand-sm navbar-light bg-light">
  <a class="navbar-brand" href="/">Restro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/list">List</a>
      <a class="nav-item nav-link" href="/add">Add</a>
     
      @if(Session::get('muser'))
      <a class="nav-item nav-link" href="register"><h5>Welcome {{Session::get('muser')}}</h5> </a>
      @else
      <a class="nav-item nav-link" href="/login">Login</a>
      <a class="nav-item nav-link" href="register">Register</a>
      @endif
      
    </div>
  </div>
</nav>
  </header>

  <div class="container">  
@yield('content')

</div>
<div class="footer">
  	@section('footer')
    	copyrights by Resto App 
    @show
</div>
</body>
</html>