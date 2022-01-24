<?php
global $post;
global $excluded_page_ids;
$page_id = get_the_ID();
$post_parent = $post->post_parent;
$current_page_slug = $post->post_name;
$current_page_title = $post->post_title;
$main_ancestor = end(get_post_ancestors($page_id));
$sub_ancestors = get_post_ancestors($page_id);
array_pop($sub_ancestors);
$number_of_sub_ancestors = count($sub_ancestors);
$main_ancestor_child_pages = get_pages(array(
	'child_of' => $main_ancestor,
	'sort_column' => 'menu_order',
	'post_status' => 'publish',
	'exclude' => $excluded_page_ids
));
foreach($main_ancestor_child_pages as $main_anc_child_page) {
	$alternate_menu_label = get_field('alternative_menu_label', $main_anc_child_page->ID);
	if($alternate_menu_label) {
		$main_anc_child_page->post_title = $alternate_menu_label;
	}
}
$current_page_child_pages = get_pages(array(
	'parent' => $page_id,
	'sort_column' => 'menu_order',
	'post_status' => 'publish',
	'exclude' => $excluded_page_ids
));
foreach($current_page_child_pages as $curr_page_child_page) {
	$alternate_menu_label = get_field('alternative_menu_label', $curr_page_child_page->ID);
	if($alternate_menu_label) {
		$curr_page_child_page->post_title = $alternate_menu_label;
	}
}
if($main_ancestor) {
	if($main_ancestor_child_pages) {
		echo '<ul>';
		foreach ($main_ancestor_child_pages as $main_ancestor_child_page) {
			if($main_ancestor_child_page->post_parent == $main_ancestor) {
				echo '<li>'; ?>
				<a href="<?php echo get_permalink($main_ancestor_child_page->ID); ?>" class="list-group-item list-group-item-action <?php if($main_ancestor_child_page->post_name == $current_page_slug) { echo 'active'; } ?>"><?php echo $main_ancestor_child_page->post_title; ?></a>
				<?php
				if($main_ancestor_child_page->ID == $page_id) {
					if($current_page_child_pages) {
						echo '<ul>';
						foreach($current_page_child_pages as $current_page_child_page) { ?>
							<li><a href="<?php echo get_permalink($current_page_child_page->ID); ?>" class="list-group-item list-group-item-action"><?php echo $current_page_child_page->post_title; ?></a></li>
							<?php
						}
						echo '</ul>';
					}
				}
				if($number_of_sub_ancestors == 1) {
					if($main_ancestor_child_page->ID == $post_parent) {
						echo '<ul>';
						foreach($main_ancestor_child_pages as $main_ancestor_child_page1) {
							if($main_ancestor_child_page1->post_parent == $post_parent) {
								echo '<li>'; ?>
								<a href="<?php echo get_permalink($main_ancestor_child_page1->ID); ?>" class="list-group-item list-group-item-action <?php if($main_ancestor_child_page1->post_name == $current_page_slug) { echo 'active'; } ?>"><?php echo $main_ancestor_child_page1->post_title; ?></a>
								<?php
								if($current_page_child_pages && $main_ancestor_child_page1->ID == $page_id) {
									echo '<ul>';
									foreach($current_page_child_pages as $current_page_child_page) { ?>
										<li><a href="<?php echo get_permalink($current_page_child_page->ID); ?>" class="list-group-item list-group-item-action"><?php echo $current_page_child_page->post_title; ?></a></li>
										<?php
									}
									echo '</ul>';
								}
								echo '</li>';
							}
						}
						echo '</ul>';
					}
				}
				if($number_of_sub_ancestors == 2) {
					if($main_ancestor_child_page->ID == $sub_ancestors[1]) {
						echo '<ul>';
						foreach($main_ancestor_child_pages as $main_ancestor_child_page2) {
							if($main_ancestor_child_page2->post_parent == $sub_ancestors[1]) {
								echo '<li>'; ?>
								<a href="<?php echo get_permalink($main_ancestor_child_page2->ID); ?>" class="list-group-item list-group-item-action text"><?php echo $main_ancestor_child_page2->post_title; ?></a>
								<?php
								if($main_ancestor_child_page2->ID == $sub_ancestors[0]) {
									echo '<ul>';
									foreach($main_ancestor_child_pages as $main_ancestor_child_page3) {
										if($main_ancestor_child_page3->post_parent == $post_parent) {
											echo '<li>'; ?>
											<a href="<?php echo get_permalink($main_ancestor_child_page3->ID); ?>" class="list-group-item list-group-item-action <?php if($main_ancestor_child_page3->post_name == $current_page_slug) { echo 'active'; } ?>"><?php echo $main_ancestor_child_page3->post_title; ?></a>
											<?php
											if($current_page_child_pages && $main_ancestor_child_page3->ID == $page_id) {
												echo '<ul>';
												foreach($current_page_child_pages as $current_page_child_page) { ?>
													<li><a href="<?php echo get_permalink($current_page_child_page->ID); ?>" class="list-group-item list-group-item-action"><?php echo $current_page_child_page->post_title; ?></a></li>
													<?php
												}
												echo '</ul>';
											}
											echo '</li>';
										}
									}
									echo '</ul>';
								}
								echo '</li>';
							}
						}
						echo '</ul>';
					}
				}
				if($number_of_sub_ancestors == 3) {
					if($main_ancestor_child_page->ID == $sub_ancestors[2]) {
						echo '<ul>';
						foreach($main_ancestor_child_pages as $main_ancestor_child_page2) {
							if($main_ancestor_child_page2->post_parent == $sub_ancestors[2]) {
								echo '<li>'; ?>
								<a href="<?php echo get_permalink($main_ancestor_child_page2->ID); ?>" class="list-group-item list-group-item-action border-0 rounded-0"><?php echo $main_ancestor_child_page2->post_title; ?></a>
								<?php
								if($main_ancestor_child_page2->ID == $sub_ancestors[1]) {
									echo '<ul>';
									foreach($main_ancestor_child_pages as $main_ancestor_child_page33) {
										if($main_ancestor_child_page33->post_parent == $sub_ancestors[1]) {
											echo '<li>'; ?>
											<a href="<?php echo get_permalink($main_ancestor_child_page33->ID); ?>" class="list-group-item list-group-item-action border-0 rounded-0"><?php echo $main_ancestor_child_page33->post_title; ?></a>
											<?php
											if($main_ancestor_child_page33->ID == $sub_ancestors[0]) {
												echo '<ul>';
												foreach ($main_ancestor_child_pages as $main_ancestor_child_page4) {
													if($main_ancestor_child_page4->post_parent == $post_parent) {
														echo '<li>'; ?>
														<a href="<?php echo get_permalink($main_ancestor_child_page4->ID); ?>" class="list-group-item list-group-item-action border-0 rounded-0 <?php if($main_ancestor_child_page4->post_name == $current_page_slug) { echo 'active'; } ?>"><?php echo $main_ancestor_child_page4->post_title; ?></a>
														<?php
														if($current_page_child_pages && $main_ancestor_child_page4->ID == $page_id) {
															echo '<ul>';
															foreach($current_page_child_pages as $current_page_child_page) { ?>
																<li><a href="<?php echo get_permalink($current_page_child_page->ID); ?>" class="list-group-item list-group-item-action border-0 rounded-0"><?php echo $current_page_child_page->post_title; ?></a></li>
																<?php
															}
															echo '</ul>';
														}
														echo '</li>';
													}
												}
												echo '</ul>';
											}
											echo '</li>';
										}
									}
									echo '</ul>';
								}
								echo '</li>';
							}
						}
						echo '</ul>';
					}
				}
				echo '</li>';
			}
		}
		echo '</ul>';
	}
} elseif(!$main_ancestor) {
	echo '<ul>';
	echo '<li>'; ?>
	<a href="<?php echo $current_page_slug; ?>" class="list-group-item list-group-item-action border-0 rounded-0 active"><?php echo $current_page_title; ?></a>
	<?php
	if($current_page_child_pages) {
		echo '<ul>';
		foreach($current_page_child_pages as $current_page_child_page) {
			echo '<li>'; ?>
			<a href="<?php echo get_permalink($current_page_child_page->ID); ?>" class="list-group-item list-group-item-action border-0 rounded-0"><?php echo $current_page_child_page->post_title; ?></a>
			<?php
			echo '</li>';
		}
		echo '</ul>';
	}
	echo '</li>';
	echo '</ul>';
} ?>