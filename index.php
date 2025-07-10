<?php

/**
 * Contains the Footer. 
 * 
 * @package herobiz
 * 
 */

get_header();

if(have_posts()):
    while (have_post()):
        the_post();
        //do our stuff
    endwhile;
endif;

get_footer()