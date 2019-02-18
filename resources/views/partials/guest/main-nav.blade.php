<nav role="navigation">
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
	  <li class="nav-item">
	    <a class="nav-link" href="#">My Wishlist</a>
	  </li>
	  <li class="nav-item">
	    <a class="nav-link" href="shopping.html">My Cart</a>
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
		<button type="button" class="btn btn-light">Checkout</button>
	  </li>
	</ul>
</nav>
<nav class="navbar navbar-expand-lg" role="navigation">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="index.html">
  	<img src="{{ asset('main/ERNI_logo_color-03.png') }}" alt="ERNI Logo">
  </a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>