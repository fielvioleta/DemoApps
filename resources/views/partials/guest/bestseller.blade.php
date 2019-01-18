<div class="best_sellers">
	<div class="container">
		<div class="row">
			<div class="col text-center">
				<div class="section_title new_arrivals_title">
					<h2>Best Sellers</h2>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="product_slider_container">
					<div class="owl-carousel owl-theme product_slider">

						@foreach($products as $product)
							<div class="owl-item product_slider_item">
								<div class="product-item">
									<div class="product discount">
										<div class="product_image">
											<img src="{{ asset('/storage/products/'.$product->image_path) }}" alt="">
										</div>
										<div class="product_info">
											<h6 class="product_name"><a href="single.html">{{$product->name}}</a></h6>
											<div class="product_price">${{$product->price}}</div>
										</div>
									</div>
								</div>
							</div>
						@endforeach
					
					</div>

					<!-- Slider Navigation -->

					<div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
						<i class="fa fa-chevron-left" aria-hidden="true"></i>
					</div>
					<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
						<i class="fa fa-chevron-right" aria-hidden="true"></i>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>