<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('partials.guest.css')
    @include('partials.guest.js')
    
    <title>Laravel DemoApps</title>
  </head>
  <body>
	<!--nav-->
	<div class="bg-light navbar-light sticky-top">
	<div class="container">
		@include('partials.guest.main-nav')
	</div>
	</div>


	<div class="alert alert-warning alert-dismissible fade" role="alert" id="cart-wishlist-flash-message">
	  <span class="text-wrapper">test</span>
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	    <span aria-hidden="true">&times;</span>
	  </button>
	</div>
	<!--nav-->

	<!--slider main-->
	
	@if ( $route_name == 'index' )
		@include('partials.guest.slider')
	@endif


	<!--slider main-->
	
	<!-- major categories -->
	@include('partials.guest.sub-nav')
	<!-- end major cat-->

	@yield('content')

	<!--featured products-->
	@if ( $route_name == 'index' )
		@include('partials.guest.featured-product')
	@endif
	<!--featured products-->

	{{-- footer --}}
	@include('partials.guest.footer')

  </body>
</html>