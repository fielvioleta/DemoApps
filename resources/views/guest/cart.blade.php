@extends('layouts.guest')

@section('content')
<div class="container inner-page">
	<div class="contents">
		<div class="spacer">
			<h2>Your Shopping Cart</h2>
		</div>

		<div class="contents">
			<table class="table-striped w-100">
				<thead>
					<tr>
						<th></th>
						<th class="w-50">Product</th>
						<th>Quantity</th>
						<th>Price</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							<a href="product.php"><img src="http://dummyimage.com/100x100/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image"></a>
						</td>
						<td>
							<h4>Product Name</h4>
							<a href="#"><h6>Supplier</a></h6>
							<strong>P 100.00</strong>
						</td>
						<td>
							<select class="form-control">
								<option>1</option>
								<option>2</option>
								<option selected="selected">3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</td>
						<td><strong>P 300.00</strong></td>
						<td>
							<button class="btn btn-light"><i class="fa fa-trash"></i></button>
						</td>
					</tr>
					<tr>
						<td>
							<a href="product.php"><img src="http://dummyimage.com/100x100/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image"></a>
						</td>
						<td>
							<h4>Product Name</h4>
							<a href="#"><h6>Supplier</a></h6>
							<strong>P 100.00</strong>
						</td>
						<td>
							<select class="form-control">
								<option>1</option>
								<option>2</option>
								<option selected="selected">3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</td>
						<td><strong>P 300.00</strong></td>
						<td>
							<button class="btn btn-light"><i class="fa fa-trash"></i></button>
						</td>
					</tr>
					<tr>
						<td>
							<a href="product.php"><img src="http://dummyimage.com/100x100/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image"></a>
						</td>
						<td>
							<h4>Product Name</h4>
							<a href="#"><h6>Supplier</a></h6>
							<strong>P 100.00</strong>
						</td>
						<td>
							<select class="form-control">
								<option>1</option>
								<option>2</option>
								<option selected="selected">3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</td>
						<td><strong>P 300.00</strong></td>
						<td>
							<button class="btn btn-light"><i class="fa fa-trash"></i></button>
						</td>
					</tr>
					<tr>
						<td>
							<a href="product.php"><img src="http://dummyimage.com/100x100/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image"></a>
						</td>
						<td>
							<h4>Product Name</h4>
							<a href="#"><h6>Supplier</a></h6>
							<strong>P 100.00</strong>
						</td>
						<td>
							<select class="form-control">
								<option>1</option>
								<option>2</option>
								<option selected="selected">3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</td>
						<td><strong>P 300.00</strong></td>
						<td>
							<button class="btn btn-light"><i class="fa fa-trash"></i></button>
						</td>
					</tr>
					<tr>
						<td>
							<a href="product.php"><img src="http://dummyimage.com/100x100/4d494d/686a82.gif&text=placeholder+image" alt="placeholder+image"></a>
						</td>
						<td>
							<h4>Product Name</h4>
							<a href="#"><h6>Supplier</a></h6>
							<strong>P 100.00</strong>
						</td>
						<td>
							<select class="form-control">
								<option>1</option>
								<option>2</option>
								<option selected="selected">3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</td>
						<td><strong>P 300.00</strong></td>
						<td>
							<button class="btn btn-light"><i class="fa fa-trash"></i></button>
						</td>
					</tr>
				</tbody>
			</table>

			<div class="spacer text-center">
				<a class="btn btn-primary btn-lg" href="checkout.php" role="button">Proceed to Checkout</a>
			</div>
		</div>
	</div>
</div>
@endsection