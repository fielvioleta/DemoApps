@extends('layouts.guest')

@section('content')
<div class="container inner-page">
	<div class="row">
		<aside class="sidebar spacer col-3">
			<nav role="navigation">
				<ul class="nav flex-column">
					@foreach($categories as $category)
						<li class="nav-item">
							<a class="nav-link" href="category.html">{{ $category->name }}</a>
						</li>
					@endforeach
				</ul>
			</nav>
		</aside>

		<div class="contents col-9">
			<div class="spacer">
				<h2>Products</h2>
			</div>
			<div class="card-deck spacer">
				<div class="row">
					<div class="card text-center">
					    <a href="product.html"><img class="card-img-top" src="art-artistic-business-335257.jpg" alt="Card image cap"></a>
					    <div class="card-body">
					      <h5 class="card-title">Card title</h5>
					      <p class="card-text">Category</p>
					      <p class="card-text">USD 5</p>
					      <div class="rating">
					      	<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
					      </div>		
					    </div>
					    <div class="card-footer">
					      <button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>
					    </div>
					</div>
					<div class="card text-center">
					    <img class="card-img-top" src="art-artistic-business-335257.jpg" alt="Card image cap">
					    <div class="card-body">
					      <h5 class="card-title">Card title</h5>
					      <p class="card-text">Category</p>
					      <p class="card-text">USD 5</p>
					      <div class="rating">
					      	<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
					      </div>		
					    </div>
					    <div class="card-footer">
					      <button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>
					    </div>
					</div>
					<div class="card text-center">
					    <img class="card-img-top" src="art-artistic-business-335257.jpg" alt="Card image cap">
					    <div class="card-body">
					      <h5 class="card-title">Card title</h5>
					      <p class="card-text">Category</p>
					      <p class="card-text">USD 5</p>
					      <div class="rating">
					      	<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
					      </div>		
					    </div>
					    <div class="card-footer">
					      <button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>
					    </div>
					</div>
				</div>

				@foreach( $products as $index => $product )
					@if( ++$index % 3 === 0 )
						
					@endif 
					{{-- <div class="card text-center">
						<img class="card-img-top" src="{{ asset('main/art-artistic-business-335257.jpg') }}" alt="Card image cap">
						<div class="card-body">
						  <h5 class="card-title">{{ $product->name }}</h5>
						  <p class="card-text">{{ $product->category->name }}</p>
						  <p class="card-text">USD {{ $product->price }}</p>
						  <div class="rating">
						  	<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
						  </div>		
						</div>
						<div class="card-footer">
						  <button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>
						</div>
					</div> --}}
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection