@extends('layouts.guest')

@section('content')
	<div class="container inner-page">
		<div class="contents">
			<div class="spacer">
				<h2>Checkout</h2>
			</div>

			<div class="row">
				<div class="col-7">
					<ul class="nav nav-tabs" id="checkoutTab" role="tablist">
					  <li class="nav-item">
					    <a class="nav-link active" id="shipping-tab" data-toggle="tab" href="#shipping" role="tab" aria-controls="shipping" aria-selected="true">Shipment</a>
					  </li>
					  <li class="nav-item">
					    <a class="nav-link" id="payment-tab" data-toggle="tab" href="#payment" role="tab" aria-controls="payment" aria-selected="false">Payment</a>
					  </li>
					</ul>

					<div class="tab-content" id="checkoutContent">
					  <div class="tab-pane fade show active" id="shipping" role="tabpanel" aria-labelledby="shipping-tab">
					  	<ul class="shipping-address list-unstyled">
					  		<li class="d-flex justify-content-between p-2">
						  		<input type="radio" name="address"/>
					  			<div>
									<label>Gengen Madrazo</label>
									<em>gengen@email.com</em>
									<p>#123 ABC Street, Somewhere down the road</p>
								</div>
								<a href="#"><i class="fa fa-pencil"></i></a>
					  		</li>
					  		<li class="d-flex justify-content-between p-2">
						  		<input type="radio" name="address"/>
					  			<div>
									<label>Gengen Madrazo</label>
									<em>gengen@email.com</em>
									<p>#45 XYZ Street, Somewhere over the rainbow</p>
								</div>
								<a href="#"><i class="fa fa-pencil"></i></a>
					  		</li>
					  	</ul>

					  	<button class="btn btn-primary">Continue</button>
					  </div>

					  <div class="tab-pane fade" id="payment" role="tabpanel" aria-labelledby="payment-tab">
					  	<ul class="payment-type list-unstyled">
					  		<li class="d-flex justify-content-between p-2">
						  		<input type="radio" name="paymentType"/>
					  			<div>
									<label>Credit Card</label>
								</div>
								<img src="http://dummyimage.com/200x50/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
					  		</li>
					  		<li class="d-flex justify-content-between p-2">
						  		<input type="radio" name="paymentType"/>
					  			<div>
									<label>Paypal</label>
								</div>
								<img src="http://dummyimage.com/200x50/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
					  		</li>
					  		<li class="d-flex justify-content-between p-2">
						  		<input type="radio" name="paymentType"/>
					  			<div>
									<label>Bank Deposit</label>
								</div>
								<img src="http://dummyimage.com/200x50/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
					  		</li>
					  	</ul>

					  	<button class="btn btn-primary">Proceed</button>
					  </div>
					</div>
				</div>

				<div class="col-5">
					<div id="cartSummary">
						<h5>Cart Summary</h5>
						<ul class="list-unstyled">
							<li class="d-flex justify-content-between">
								<img src="http://dummyimage.com/100x100/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image">
								<div>
									<label>Product Name</label>
									<em>Supplier Name</em>
									<p>P 100.00 x 2</p>
								</div>
								<strong>P 200.00</strong>
							</li>
						</ul>
						<hr>
						<div class="d-flex justify-content-between">
							<strong>Total</strong>
							<strong>P 200.00</strong>
						</div>
						<hr>
						<h5>Delivery Address (Selected)</h5>
						<label>Gengen Madrazo</label>
						<span>gengen@email.com</span>
						<p>#123 ABC Street, Somewhere down the road</p>
					</div>
				</div>
			</div>

			<div class="spacer"></div>
		</div>
	</div>
@endsection