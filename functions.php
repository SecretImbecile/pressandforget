<?php

function meta_description() {
    if (is_single()) {
        the_excerpt();
    }
    else {
        echo "Manchester Raspberry Pi user group based at The Shed";
    }
}

$headerargs = array(
        'flex-width'    => true,
	'width'         => 128,
	'height'        => 128,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
);
add_theme_support( 'custom-header', $headerargs );

?>
