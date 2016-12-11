<?php

include("cmp.php");

function normalize_menu() {
    
    $menu_pages = array();

    foreach(get_pages() as $page) {
        if($page->post_parent == 0) {
            $menu_pages[] = $page;
        }
    }

    usort($menu_pages, "cmp");
    
    return $menu_pages;
}


?>