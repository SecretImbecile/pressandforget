<?php

function show_tag_list ($id, $separator, $before) {
    $tags = wp_get_post_tags($id);

    if (!empty($tags)) {

        $tags_html = array();
        foreach ($tags as $tag) {
            $tags_html[] = "<a href='/tag/{$tag->slug}/'>{$tag->name}</a>";
        }

        echo $before . join($separator, $tags_html);
    }
}

function meta_description() {
    if (is_single()) {
        the_excerpt();
    }
    else {
        echo "A Minimal WordPress theme";
    }
}

$headerargs = array(
        'flex-width'    => true,
	'width'         => 128,
	'height'        => 128,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
);

add_theme_support( 'custom-header', $headerargs );
register_nav_menu('primary', 'Nav Bar');

?>
