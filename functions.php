add_action( 'woocommerce_before_add_to_cart_quantity', 'codeithub_echo_qty_front_add_cart' );
 
function codeithub_echo_qty_front_add_cart() {
 echo '<div class="qty">Quantity: </div>'; 
}
