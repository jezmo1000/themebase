<?php
//  Remove h1 from the WordPress editor.
function modify_editor_buttons( $init ) {
    $init['block_formats'] = 'Paragraph=p;Heading 2=h2;Heading 3=h3;Heading 4=h4;Heading 5=h5;Heading 6=h6;';
    return $init;
}
add_filter( 'tiny_mce_before_init', 'modify_editor_buttons' );
