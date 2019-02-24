    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
    	$(document).ready(function(){
			var cartData = sessionStorage.getItem('cart') ? JSON.parse(sessionStorage.getItem('cart')) : [];
            $('#cart-count').text( cartData != null ? cartData.length : 0 );

            if ( '{{$route_name}}' == 'cart' ) {
                
                $.each(cartData, function (index, value){
                    
                    $("#cart-table tbody").append(`
                        <tr>
                            <td>
                                <a href="/product/`+value.product_id+`"><img src="`+value.image+`" alt="placeholder+image"></a>
                            </td>
                            <td>
                                <h4>`+value.name+`</h4>
                                <a href="#"><h6>Supplier</a></h6>
                                <strong>P `+value.price+`</strong>
                            </td>
                            <td>
                                <input type='number' value='`+value.quantity+`' min='1'/>
                            </td>
                            <td><strong>P `+(value.price * value.quantity)+`</strong></td>
                            <td>
                                <button class="btn btn-light"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    `);

                });

            }

            $( '.btn-add-cart' ).click(function(){
                addToCart(JSON.parse($(this).attr('productValue')));
            });

            function addToCart(productDetail) {
                                    
                if (cartData.length == 0) {

                    cartData.push(
                        {
                            "product_id": productDetail.id,
                            "name": productDetail.name,
                            "image": '/storage/products/' + productDetail.image_path,
                            "price": productDetail.price,
                            "quantity": 1
                        }
                    )
                    
                    sessionStorage.setItem('cart', JSON.stringify(cartData));

                } else {
                    
                    var checkProduct = false;
                    var checkIndex;
                    $.map(cartData, function( value, index ) {
                        if( value.product_id == productDetail.id ) {
                            checkProduct = true;
                            checkIndex = index;
                        }
                    });

                    if ( checkProduct == true) {
                        cartData[checkIndex].quantity++;
                    } else {

                        cartData.push(
                            {
                                "product_id": productDetail.id,
                                "name": productDetail.name,
                                "image": '/storage/products/' + productDetail.image_path,
                                "price": productDetail.price,
                                "quantity": 1
                            }
                        );

                    }
                    
                    sessionStorage.setItem('cart', JSON.stringify(cartData));

                }

    		}
    	});
    </script>