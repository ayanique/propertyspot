<?php
	
	$typeofheader = get_option("skudo_header_style_type");
	if (is_array($typeofheader) || $typeofheader == null || $typeofheader == "") $typeofheader = "style1";
	get_template_part( 'inc/headers/header', $typeofheader );
	

?>