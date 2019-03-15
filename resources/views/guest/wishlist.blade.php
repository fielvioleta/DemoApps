@extends('layouts.guest')

@section('content')
<div class="container inner-page">
	<div class="contents">
		<div class="spacer">
			<h2>Your Wishlist</h2>
		</div>

		<div class="contents">
			<table class="table-striped w-100" id="cart-table">
				<thead>
					<tr>
						<th></th>
						<th class="w-50">Product</th>
						<th></th>
					</tr>
				</thead>
				<tbody>
					

					
				</tbody>
			</table>

			<div class="spacer text-center">
				<a class="btn btn-primary btn-lg" href="checkout.php" role="button">Proceed to Checkout</a>
			</div>
		</div>
	</div>
</div>
@endsection