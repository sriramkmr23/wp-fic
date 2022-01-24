<!-- Start Breadcrumb Component-->
<?php $ancestors = array_reverse(get_post_ancestors(get_the_ID())); global $post; ?>
<nav aria-label="Breadcrumb">
	<ol class="breadcrumb bg-transparent pt-0">

		<li class="breadcrumb-item"><a href="<?php echo site_url(); ?>">Home</a></li>

		<?php
			foreach($ancestors as $ancestor) :
				$alternate_menu_label = get_field('alternative_menu_label', $ancestor);
				if($alternate_menu_label) {
					$ancestor_title = $alternate_menu_label;
				} else {
					$ancestor_title = get_the_title($ancestor);
				}
		?>
			<li class="breadcrumb-item"><a href="<?php echo get_the_permalink($ancestor); ?>"><?php echo $ancestor_title; ?></a></li>
		<?php endforeach; ?>

		<?php
			$curr_page_alt_label = get_field('alternative_menu_label', $post->ID);
			if($curr_page_alt_label) {
				$curr_page_title = $curr_page_alt_label;
			} else {
				$curr_page_title = $post->post_title;
			}
		?>
		<li class="breadcrumb-item active" aria-current="page"><?php echo $curr_page_title; ?></li>
		
	</ol>
</nav>
<!-- End Breadcrumb Component-->