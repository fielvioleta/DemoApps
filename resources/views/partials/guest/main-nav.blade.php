<nav role="navigation" class="top-nav">
	<ul class="nav justify-content-end">
	  <li class="nav-item dropdown">
	    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Hello, User!</a>
	    <div class="dropdown-menu">
	      <a class="dropdown-item" href="#">Track Order</a>
	      <a class="dropdown-item" href="#">Account Settings</a>
	      <div class="dropdown-divider"></div>
	      <a class="dropdown-item" href="#">Logout</a>
	    </div>
	  </li>
	  <li class="nav-item dropdown">
	    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">EN</a>
	    <div class="dropdown-menu">
	      <a class="dropdown-item" href="#">DE</a>
	      <a class="dropdown-item" href="#">FR</a>
	    </div>
	  </li>
	  <li class="nav-item dropdown">
	    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">USD</a>
	    <div class="dropdown-menu">
	      <a class="dropdown-item" href="#">PHP</a>
	      <a class="dropdown-item" href="#">SGD</a>
	    </div>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="#"><i class="fa fa-heart"></i> <span>3</span></a>
	  </li>
	  <li class="nav-item">
		<a class="nav-link" href="{{ route('cart') }}"><i class="fa fa-shopping-cart"></i> <span id="cart-count"></span></a>
	  </li>
	</ul>
</nav>
<nav class="main-nav navbar navbar-expand-lg" role="navigation">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{route('index')}}">
  	<img src="{{ asset('main/images/ERNI_logo_color-03.png') }}" alt="ERNI Logo">
  </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Contact Us</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
		<div class="input-group">
		  <input type="text" class="form-control" id="search-keywords" aria-describedby="searchbtn" placeholder="Search the Site">
		  <div class="input-group-append">
		    <button class="btn btn-outline-secondary" type="button" id="searchbtn">
				<i class="fa fa-search"></i>
		    </button>
		  </div>
		</div>
    </form>
  </div>
</nav>