<?php
class auto_child_page_menu {
	function __construct($args = array()){
		add_filter('wp_nav_menu_objects',array($this,'on_the_fly'));
	}
	function on_the_fly($items) {
		global $post;
		$tmp = array();
		foreach ($items as $key => $i) {
			$tmp[] = $i;
			//if not page move on
			if ($i->object != 'page'){
				continue;
			}
			$page = get_post($i->object_id);
			//if not parent page move on
			if (!isset($page->post_parent) || $page->post_parent != 0) {
				continue;
			}
			$children = get_pages( array(
				'parent' => $i->object_id,
				'sort_column' => 'menu_order',
				'meta_key' => 'exclude_page_from_navigation',
				'meta_value' => 'no'
			) );
			foreach ((array)$children as $c) {
				//set parent menu
				$alternative_menu_label = get_field( "alternative_menu_label", $c->ID );
				if($alternative_menu_label) {
					$c->post_title = $alternative_menu_label;
				}
				
				$c->menu_item_parent      = $i->ID;
				$c->object_id             = $c->ID;
				$c->object                = 'page';
				$c->type                  = 'post_type';
				$c->type_label            = 'Page';
				$c->url                   = get_permalink( $c->ID);
				$c->title                 = $c->post_title;
				$c->target                = '';
				$c->attr_title            = '';
				$c->description           = '';
				$c->classes               = array('','menu-item','menu-item-type-post_type','menu-item-object-page');
				$c->xfn                   = '';
				$c->current               = ($post->ID == $c->ID)? true: false;
				$c->current_item_ancestor = ($post->ID == $c->post_parent)? true: false; //probbably not right
				$c->current_item_parent   = ($post->ID == $c->post_parent)? true: false;
				$tmp[] = $c;
			}
		}
		return $tmp;
	}
}
new auto_child_page_menu();