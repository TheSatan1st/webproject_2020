<?php
$post = $wp_query->post;
if ( in_category( array( 'vacancy-ru', 'vacancy-en' ) ) ) { //слаг категории
    include( TEMPLATEPATH.'/single-vacancy.php' );
} else {
    include( TEMPLATEPATH.'/single-cases.php' );
}
?>