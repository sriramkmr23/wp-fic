<?php
add_filter( 'acf/fields/wysiwyg/toolbars' , 'custom_toolbars'  );
function custom_toolbars($toolbars) {
//	echo '<pre>';
//	print_r($toolbars);
//	echo '</pre>';
	$toolbars['Very Basic' ] = array();
	$toolbars['Very Basic' ][1] = array('bold', 'link', 'undo', 'redo');
	$toolbars['Intermediate'] = array();
	$toolbars['Intermediate'][1] = array('formatselect', 'bold', 'italic', 'bullist', 'numlist', 'alignleft', 'link', 'indent', 'outdent', 'fullscreen', 'wp_adv');
	$toolbars['Intermediate'][2] = array('hr', 'pastetext', 'removeformat', 'charmap', 'undo', 'redo');
	$toolbars['University Pathway' ] = array();
	$toolbars['University Pathway' ][1] = array('bullist');
	return $toolbars;
}