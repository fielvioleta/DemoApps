@extends('layouts.guest')

@section('content')
<div class="container inner-page">
	<div class="row">
		@include('partials.guest.category-sidebar')

		@include('partials.guest.category-products')
	</div>
</div>
@endsection