<?php 
/* Also we need plugin AddToAny and Edit Snippet for correct display */
function addtoany_add_share_services( $services ) {
    $services['inst_share_service'] = array(
        'name'        => 'Instagram',
        'icon_url'    => '/wp-content/plugins/add-to-any/icons/instagram.svg',
        'icon_width'  => 32,
        'icon_height' => 32,
        'href'        => '#',
    );
	$services['youtub_share_service'] = array(
        'name'        => 'YouTube',
        'icon_url'    => '/wp-content/plugins/add-to-any/icons/youtube.svg',
        'icon_width'  => 32,
        'icon_height' => 32,
        'href'        => '#',
    );
    return $services;
}
add_filter( 'A2A_SHARE_SAVE_services', 'addtoany_add_share_services', 10, 1 );

?>