<?php
    
    // Helper method to get submenu items
    function get_submenu_items($parent_id, $menu_items) {
        $submenu_items = array();

        foreach ($menu_items as $menu_item) {
            if ($menu_item->menu_item_parent == $parent_id) {
                $submenu_items[] = $menu_item;
            }
        }

        return $submenu_items;
    }