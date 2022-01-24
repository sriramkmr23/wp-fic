<?php if( get_sub_field( 'table-include' ) == 'yes' ) :?>

<!-- Start Table Component -->
<section class="table stmb-3 stmt-3">
	<div class="container">
		<div class="row">
			<div class="col">

                <?php if( !empty( get_sub_field( 'table_select' ) ) ):

                    echo supsystic_tables_get(get_sub_field('table_select'));

                endif; ?>

			</div>
		</div>
	</div>
</section>
<!-- Start Table Component -->

<?php endif; ?>