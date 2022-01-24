<!-- Start Interstitial Feature -->
<section class="jumbotron jumbotron-fluid interstitial" style="background-image: url('<?php echo get_sub_field('background-image'); ?>')">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12 pl-sm-4 pr-sm-4 py-5 text-white text-center">
			
			<?php if(get_sub_field('heading')): ?>
				<h2><?php echo get_sub_field('heading'); ?></h2>
			<?php endif; ?>

			<?php if(get_sub_field('text')): ?>
				<div class="py-4"><?php echo get_sub_field('text'); ?></div>
			<?php endif; ?>
				
			<?php if(get_sub_field('button')): ?>
				<a href="<?php echo get_sub_field('button')['url']; ?>" target="<?php echo get_sub_field('button')['target']; ?>" class="btn btn-lg btn-outline-light px-5"><?php echo get_sub_field('button')['title']; ?></a>
			<?php endif; ?>

			</div>
		</div>
	</div>
</section>
<!-- End Interstitial Feature -->