<?php 

function custom_excerpt( $field, $limit, $ellipsis = '' ) {

	$excerpt = substr(strip_tags( $field ), 0, $limit);
	$lenght = strlen( $field );

	if( $lenght < $limit ){
		echo $excerpt;
	}
	else{
		echo $excerpt . $ellipsis;
	}

}