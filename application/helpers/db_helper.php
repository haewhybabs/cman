<?php

function get_categories_h(){

	$CI=get_instance();
	$categories=$CI->product_model->get_categories();
	return $categories;
}

?>