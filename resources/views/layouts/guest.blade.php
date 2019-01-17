<!DOCTYPE html>
<html lang="en">
<head>
<title>DemoApps By Fiel</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Colo Shop Template">
<meta name="viewport" content="width=device-width, initial-scale=1">

@include('partials.guest.css') 
@include('partials.guest.js') 

</head>

<body>

<div class="super_container">

	<header class="header trans_300">
		@include('partials.guest.topnav')
		@include('partials.guest.mainnav')
	</header>

	@include('partials.guest.hamburger')
	@include('partials.guest.slider')
	@include('partials.guest.banner')
	@include('partials.guest.newarrival')
	@include('partials.guest.dealofweek')
	@include('partials.guest.bestseller')
	@include('partials.guest.benefit')
	@include('partials.guest.blogs')
	@include('partials.guest.newsletter')
	@include('partials.guest.footer')

</div>
	
	
</body>

</html>
