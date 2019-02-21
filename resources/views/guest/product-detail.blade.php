@extends('layouts.guest')

@section('content')
<div class="container inner-page">
		<div class="contents">
			<div class="product spacer">
				<div class="row">
					<div class="col-md-4 product-image">
						<img src="/storage/products/{{$product->image_path}}" alt="product">
					</div>

					<div class="col-md-8 product-details">
						<h2>{{ $product->name }}</h2>
						<h5><a href="#">Brand Name</a></h5>
						<div class="rating">
					      	<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star checked"></span>
							<span class="fa fa-star"></span>
							<span class="fa fa-star"></span>
					    </div>
						<div class="product-description">
							<p>lorem ipsum dolor sit amet consecteteur lorem ipsum dolor sit amet consecteteur lorem ipsum dolor sit amet consecteteur lorem ipsum dolor sit amet consecteteur </p>
						</div>

						<div class="row">
							<div class="form-group col-md-2">
								<label class="col-form-label">Quantity</label>
								<select name="" id="" class="form-control">
									<option>1</option>
									<option>2</option>
									<option>3</option>
								</select>
							</div>
						</div>

						<button type="button" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
						<button type="button" class="btn btn-secondary"><i class="fa fa-heart"></i> Wishlist</button>
					</div>
				</div>

				<div class="spacer"></div>
				<div class="product-info">
					<ul class="nav nav-tabs" id="myTab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="info-tab" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="true">Information</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="false">About the Brand</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
					  </li>
					</ul>
					<div class="tab-content" id="myTabContent">
					  <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab">
					  	Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					  </div>
					  <div class="tab-pane fade" id="about" role="tabpanel" aria-labelledby="about-tab">
						Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?
					  </div>
					  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
					  	At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.
					  </div>
					</div>
				</div>
				
				<div class="spacer"></div>
				<div class="product-reviews">
					<div class="card">
					  <div class="card-header">
					    <h5>Product Reviews</h5>
					  </div>
					  <div class="card-body">
					  	<ul class="list-unstyled">
						  	<li class="d-flex justify-content-between p-4">
							    <blockquote class="blockquote mb-0">
							      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante. </p>
							      <footer class="blockquote-footer">Gengen L., <cite title="Source Title">Web Developer</cite></footer>
							    </blockquote>
							    <div class="rating">
							      	<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
							    </div>
							</li>
						  	<li class="d-flex justify-content-between p-4">
							    <blockquote class="blockquote mb-0">
							      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							      <footer class="blockquote-footer">Gengen L., <cite title="Source Title">Web Developer</cite></footer>
							    </blockquote>
							    <div class="rating">
							      	<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
							    </div>
							</li>
						  	<li class="d-flex justify-content-between p-4">
							    <blockquote class="blockquote mb-0">
							      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
							      <footer class="blockquote-footer">Gengen L., <cite title="Source Title">Web Developer</cite></footer>
							    </blockquote>
							    <div class="rating">
							      	<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
							    </div>
							</li>
						</ul>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection