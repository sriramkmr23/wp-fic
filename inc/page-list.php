<?php
    $standard_pages = get_pages( array (
        'meta_key'   => '_wp_page_template',
        'meta_value' => 'default'
    ));

    foreach ( $standard_pages as $standard_page ) :
        if ( $standard_page->post_parent == 0 ) :
            $extra_class = 'font-weight-bold';
        else:
            $extra_class = 'pl-5';
        endif; ?>

	    <a href="<?php echo $standard_page->guid; ?>" class="list-group-item list-group-item-action border-0 rounded-0 <?php echo $extra_class; ?>"><span class="fas fa-chevron-right fa-sm mr-1"></span><?php echo $standard_page->post_title; ?></a>
    
    <?php endforeach; ?>