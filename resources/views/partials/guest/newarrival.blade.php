<div class="new_arrivals">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<div class="section_title new_arrivals_title">
					<h2>New Arrivals</h2>
				</div>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col text-center">
				<div class="new_arrivals_sorting">
					<ul class="arrivals_grid_sorting clearfix button-group filters-button-group">
						<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center active is-checked" data-filter="*">all</li>

						@foreach($categories as $category)
							<li class="grid_sorting_button button d-flex flex-column justify-content-center align-items-center" data-filter=".{{$category->id}}">{{$category->name}}</li>
			            @endforeach

					</ul>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="product-grid" data-isotope='{ "itemSelector": ".product-item", "layoutMode": "fitRows" }'>

					@foreach($products as $product)
						<div class="product-item {{$product->category->id}}">
							<div class="product discount product_filter">
								<div class="product_image">

									<img src="{{ asset('/storage/products/'.$product->image_path) }}" alt="">
								</div>
								<div class="favorite favorite_left"></div>
								<div class="product_info">
									<h6 class="product_name"><a href="single.html">{{$product->name}}</a></h6>
									<div class="product_price">{{$product->price}}</div>
								</div>
							</div>
							<div class="red_button add_to_cart_button"><a href="#">add to cart</a></div>
						</div>
					@endforeach
					
				</div>
			</div>
		</div>
	</div>
</div>