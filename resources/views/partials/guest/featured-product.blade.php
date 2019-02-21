<div class="container">
	<div class="spacer">
		<h2 class="text-center">Featured Products</h2>
	</div>
	<div id="featureProducts" class="carousel slide" data-ride="carousel">
	  
	  <ol class="carousel-indicators">
	    <li data-target="#featureProducts" data-slide-to="0" class="active"></li>
	    <li data-target="#featureProducts" data-slide-to="1"></li>
	  </ol>

	  <div class="carousel-inner">
		<div class="carousel-item active">
			<div class="card-deck">
			  	@foreach( $products as $product )
					<div class="card text-center">
						<img class="card-img-top" src="/storage/products/{{$product->image_path}}" alt="Card image cap">
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
					</div>
				@endforeach
			</div>
		</div>
		<div class="carousel-item">
			<div class="card-deck">
			  
			  @foreach( $products as $product )
				  <div class="card text-center">
				    <img class="card-img-top" src="/storage/products/{{$product->image_path}}" alt="Card image cap">
				    <div class="card-body">
				      <h5 class="card-title">{{$product->name}}</h5>
				      <p class="card-text">{{$product->category->name}}</p>
				      <p class="card-text">USD {{$product->price}}</p>
				    </div>
				    <div class="card-footer">
				      <button type="button" class="btn btn-primary btn-lg btn-block">Add to cart</button>
				    </div>
				  </div>
			  @endforeach
			  
			 </div>
		</div>
	  </div>
	  
	  <a class="carousel-control-prev" href="#featureProducts" role="button" data-slide="prev">
	    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	  </a>

	  <a class="carousel-control-next" href="#featureProducts" role="button" data-slide="next">
	    <span class="carousel-control-next-icon" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	  </a>

	</div>

	<div class="spacer text-center">
		<a class="btn btn-primary btn-lg" href="{{route('categories')}}" role="button">See More</a>
	</div>
</div>