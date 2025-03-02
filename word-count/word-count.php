<?php
/*
 plugin Name: Word Count.

*/

function post_word_count( $content ){
    $stirpped_content = strip_tags( $content );
    $wordn = str_word_count( $stirpped_content );
    $labels = 'Total number of word';
    $content .=sprintf( '<h2>%s: %s</h2>',$labels, $wordn);
    return $content;
}

add_filter( 'the_content', 'post_word_count' );