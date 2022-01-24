<?php
class mobile_navwalker extends Walker_Page {

	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( isset( $args['item_spacing'] ) && 'preserve' === $args['item_spacing'] ) {
			$t = "\t";
			$n = "\n";
		} else {
			$t = '';
			$n = '';
		}
		$indent  = str_repeat( $t, $depth );
		$output .= "{$n}{$indent}<ul class='dropdown-menu py-0 my-0 level-".$depth."'>{$n}";
	}

	function start_el( &$output, $page, $depth = 0, $args = Array(), $current_page = 0 ) {
		if ( $depth )
			$indent = str_repeat("\t", $depth);
		else
			$indent = '';
		extract($args, EXTR_SKIP);
		$css_class = array('page_item', 'page-item-'.$page->ID, 'nav-item');
		if ( !empty($current_page) ) {
			$_current_page = get_post( $current_page );
			if ( in_array( $page->ID, $_current_page->ancestors ) )
				$css_class[] = 'current_page_ancestor';
			if ( $page->ID == $current_page )
				$css_class[] = 'current_page_item';
			elseif ( $_current_page && $page->ID == $_current_page->post_parent )
				$css_class[] = 'current_page_parent';
		} elseif ( $page->ID == get_option('page_for_posts') ) {
			$css_class[] = 'current_page_parent';
		}
		$css_class = implode( ' ', apply_filters( 'page_css_class', $css_class, $page, $depth, $args, $current_page ) );
		$output .= $indent . '<li class="' . $css_class . ' dropdown">';
		$link_extra_classes = '';
		if($depth == 0) {
			if($args['has_children'] == 1) {
				$link_extra_classes = 'nav-link d-inline-block pl-lx-3 pr-xl-1 has_children level-'.$depth;
			} else {
				$link_extra_classes = 'nav-link px-xl-3 level-'.$depth;
			}
		} elseif ($depth == 1) {
			if($args['has_children'] == 1) {
				$link_extra_classes = 'dropdown-item nav-link d-inline-block border-0 has_children level-'.$depth;
			} else {
				$link_extra_classes = 'dropdown-item level-'.$depth;
			}
		} elseif ($depth == 2) {
			if($args['has_children'] == 1) {
				$link_extra_classes = 'dropdown-item nav-link d-inline-block border-0 has_children level-'.$depth;
			} else {
				$link_extra_classes = 'dropdown-item level-'.$depth;
			}
		} elseif ($depth == 3) {
			if($args['has_children'] == 1) {
				$link_extra_classes = 'dropdown-item nav-link d-inline-block border-0 has_children level-'.$depth;
			} else {
				$link_extra_classes = 'dropdown-item level-'.$depth;
			}
		}
		$output .= '<a href="' . get_permalink($page->ID) . '" class="'.$link_extra_classes.'">';
		$alternative_menu_label = get_field('alternative_menu_label', $page->ID);
		if($alternative_menu_label) {
			$page->post_title = $alternative_menu_label;
		}
		$output .= apply_filters( 'the_title', $page->post_title, $page->ID );
		$output .= '</a>';
		if($depth == 0) {
			if($args['has_children'] == 1) {
				$output .= '<div class="mobile_nav_item_toggler d-inline-block float-right mx-xl-0 text-center p-2 pl-xl-0 pr-xl-3 py-xl-3 level-0 dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-chevron-down mobile_nav_item_toggler_icon level-0"></span></div>';
			}
		} elseif ($depth == 1) {
			if($args['has_children'] == 1) {
				$output .= '<div class="mobile_nav_item_toggler d-inline-block float-right mx-xl-0 text-center p-2 pl-xl-0 pr-xl-3 py-xl-3 level-1 dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-chevron-down mobile_nav_item_toggler_icon level-1"></span></div>';
			}
		} elseif ($depth == 2) {
			if($args['has_children'] == 1) {
				$output .= '<div class="mobile_nav_item_toggler d-inline-block float-right mx-xl-0 text-center p-2 pl-xl-0 pr-xl-3 py-xl-3 level-2 dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fas fa-chevron-down mobile_nav_item_toggler_icon level-2"></span></div>';
			}
		}
	}
}