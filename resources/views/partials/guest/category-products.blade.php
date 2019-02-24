<div class="contents col-md-9">
	<div class="spacer">
		<h2>Products</h2>
	</div>
	<div class="card-deck spacer">
		<div class="row products-list masonry">
			
			@foreach( $products as $index => $product )
				<div class="card text-center">
				    <a href="product.php">
				    	<img class="card-img-top" @if( $index ==0 ) height="300" @endif src="/storage/products/{{$product->image_path}}" alt="Card image cap"></a>
				    <div class="card-body">
				      <h5 class="card-title">{{$product->name}}</h5>
				      <p class="card-text">{{$product->category->name}}</p>
				      <p class="card-text">USD {{$product->price}}</p>
				      <div class="rating">
				      	<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star checked"></span>
						<span class="fa fa-star"></span>
						<span class="fa fa-star"></span>
				      </div>		
				    </div>
				    <div class="card-footer">
				      <button type="button" class="btn"><i class="fa-heart fa"></i></button>
				      <button type="button" class="btn btn-primary btn-add-cart" productValue="{{ $product }}"><i class="fa-shopping-cart fa"></i></button>
				    </div>
			  	</div>
			@endforeach

		</div>
	</div>
</div>