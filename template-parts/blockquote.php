<?php if( get_sub_field( 'blockquote-include' ) == 'yes' ) :?>

<!-- Start Blockquote -->
<section class="blockquote_section content stmb-3 stmt-3">
	<div class="container">
		<div class="row">
			<div class="col">
				<blockquote class="blockquote_text_left blockquote text-left">

					<?php if( !empty( get_sub_field( 'blockquote-text' ) ) ): ?>
						<?php echo get_sub_field( 'blockquote-text' ); ?>
					<?php endif; ?>

					<?php if( !empty( get_sub_field( 'blockquote-author' ) ) ): ?>
						<footer class="blockquote-footer"><cite title="Source Title"><?php echo get_sub_field( 'blockquote-author' ); ?></cite></footer>
					<?php endif; ?>

				</blockquote>
			</div>
		</div>
	</div>
</section>
<!-- End Blockquote -->

<?php endif; ?>