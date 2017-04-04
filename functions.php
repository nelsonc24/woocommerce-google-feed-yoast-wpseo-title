/**
* Modify the product title into woocommerce gpf feed google with the title from yoast wpseo plugin.
*
* @param  object $feed_item The information about the item
* @return object            The object with the title modified.
*/
function lw_add_yoast_wpseo_title($item) {
    
	$titleYoast = get_post_meta(get_the_ID(), '_yoast_wpseo_title', true); 
    if(strlen($titleYoast)>0)
	    $item->title = $titleYoast;
    return $item;
}

add_filter( 'woocommerce_gpf_feed_item', 'lw_add_yoast_wpseo_title' );
