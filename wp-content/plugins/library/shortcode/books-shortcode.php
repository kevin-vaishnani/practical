<?php


function booksearchform( $form ) {
 
    $form = '
    <input type="text" id="booksearch" placeholer="search-book">
    <input type="text" id="authorsearch" placeholer="search-author">
    <input type="text" id="publishersearch" placeholer="search-publisher">
    <button type="button" id="search-btn">Show Value</button>';
    return $form;
}
 
add_shortcode('booksearchshortcode', 'booksearchform');