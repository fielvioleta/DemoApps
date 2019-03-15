    <!-- JavaScript -->
    {{-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script> --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.2.1/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <script>
    	$(document).ready(function(){
            var cartData = sessionStorage.getItem('cart') ? JSON.parse(sessionStorage.getItem('cart')) : [];
			var wishlistData = sessionStorage.getItem('wishlist') ? JSON.parse(sessionStorage.getItem('wishlist')) : [];
            $('#cart-count').text( cartData != null ? cartData.length : 0 );
            $('#wishlist-count').text( wishlistData != null ? wishlistData.length : 0 );

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
                                <input class='cart-quantity' type='number' value='`+value.quantity+`' min='1'/>
                            </td>
                            <td><strong>P <span class='cart-price'>`+(value.price * value.quantity)+`</span></strong></td>
                            <td>
                                <button class="btn btn-light cart-item-delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    `);

                });

            } else if (  '{{$route_name}}' == 'wishlist' ) {

                $.each(wishlistData, function (index, value){
                    
                    $("#cart-table tbody").append(`
                        <tr>
                            <td>
                                <a href="/product/`+value.product_id+`"><img src="`+value.image+`" alt="placeholder+image"></a>
                            </td>
                            <td>
                                <h4>`+value.name+`</h4>
                                <a href="#"><h6>Supplier</a></h6>
                            </td>
                            <td>
                                <button class="btn btn-light cart-item-delete"><i class="fa fa-trash"></i></button>
                            </td>
                        </tr>
                    `);

                });

            }

            $( '.btn-wishlist' ).click(function(){
                addToWishlist(JSON.parse($(this).attr('productValue')));
            });

            $( '.btn-add-cart' ).click(function(){
                addToCart(JSON.parse($(this).attr('productValue')));
            });

            $( '.cart-item-delete' ).click(function(){
                
                var index = $(this).parent().parent().index();
                $(this).parent().parent().remove();
                cartData.splice(index,1);
                updateCount( 'cart' );
                updateSession( 'cart' );

            });

            $( '.cart-quantity' ).change(function(){
                var index = $(this).parent().parent().index();
                cartData[index]['quantity'] = $(this).val();
                updateSession( 'cart' );
            });

            function addToWishlist(productDetail) {
                
                var message = '';

                if (wishlistData.length == 0) {

                    wishlistData.push(
                        {
                            "product_id": productDetail.id,
                            "name": productDetail.name,
                            "image": '/storage/products/' + productDetail.image_path,
                        }
                    )

                    message = productDetail.name + ' has been added to your wishlist.';

                } else {
                    
                    var checkProduct = false;
                    var checkIndex;
                    $.map(wishlistData, function( value, index ) {
                        if( value.product_id == productDetail.id ) {
                            checkProduct = true;
                            checkIndex = index;
                        }
                    });

                    if ( checkProduct == true) {
                        
                        message = productDetail.name + ' is already in your wishlist.';

                    } else {

                        wishlistData.push(
                            {
                                "product_id": productDetail.id,
                                "name": productDetail.name,
                                "image": '/storage/products/' + productDetail.image_path,
                            }
                        );

                        message = productDetail.name + ' has been added to your wishlist.';
                    }

                }

                updateSession( 'wishlist' );

                showCarWishlistMessage( message );

                updateCount( 'wishlist' );
            }

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

                }

                updateSession( 'cart' );

                showCarWishlistMessage( productDetail.name + ' has been added to your cart.' );

                updateCount( 'cart' );
    		}

            function updateCount ( type ) {
                $( '#' + type + '-count' ).text( type == 'cart' ? cartData.length : wishlistData.length );
            }

            function updateSession( type ) {
                sessionStorage.setItem(type, JSON.stringify( type == 'cart' ? cartData : wishlistData ));
            }

            function showCarWishlistMessage( message ) {
                $('#cart-wishlist-flash-message .text-wrapper').text( message );
                $('#cart-wishlist-flash-message').addClass('show');
                
                setTimeout(function() {
                    $('#cart-wishlist-flash-message').fadeOut("slow", function() {
                        $(this).removeClass("show");
                        $(this).removeAttr( 'style' );
                    });
                }, 500);
            }

    	});
    </script>