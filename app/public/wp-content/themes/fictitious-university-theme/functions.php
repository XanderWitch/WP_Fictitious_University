<?php

function university_files() {
    wp_enqueue_style('university_main_files', get_stylesheet_uri()); //2 arguments - name of stylesheet, funciton to get style get_stylesheet_uri to get style.css. For JS, use "script" not "style"
}

add_action('wp_enqueue_scripts','university_files'); //2 arguments - what type of instructions (load some css or js - 'wp_enqueue_scripts') and name of function we want to run
?>