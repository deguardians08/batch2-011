<!DOCTYPE html>
<html>
<head>
	<title>Document</title>
	<link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Faisal Yahya</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Galeri</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
    </ul>
  </div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-sm">
			@yield('content')
		</div>
	</div>
</div>
	<script type="{{ url('js/jquery-3.3.1.min.js') }}"></script>
	<script type="{{ url('js/pooper.min.js') }}"></script>
	<script type="{{ url('js/bootstrap.min.js') }}"></script>
	<script type="{{ url('js/fontawsome_all.min.js') }}"></script>
</body>
</html>