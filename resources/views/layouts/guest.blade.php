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
	<!--nav-->

	<!--slider main-->
	
		@if ( $route_name == 'index' )
			@include('partials.guest.slider')
		@endif

	<!--slider main-->
	
	<!-- major categories -->
	@include('partials.guest.sub-nav')
	<!-- end major cat-->

	<!--featured products-->
	@include('partials.guest.featured-product')
	<!--featured products-->

	{{-- footer --}}
	@include('partials.guest.footer')

  </body>
</html>