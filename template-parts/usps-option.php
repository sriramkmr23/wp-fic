<!-- Start USPs -->
<section class="bg-light mb-6 usp">
	<div class="container">
		<div class="row">



  <?php $count = count(get_sub_field('usp-items')); ?>

		<?php if(!empty(get_sub_field('heading'))): ?>
			<div class="col-12">
				<h2><?php echo get_sub_field('heading'); ?></h2>
			</div>
		<?php endif; ?>

		</div>


		<?php
			$x = 1;
			$z = 1;
			$grid = 12;
			$g = 3;
			// Total items in the repeater field
			$repeater = get_sub_field('usp-items');
			$total_items = count($repeater);

			$a = 3 % 3;
			$b = 12 / $a;

			if( $b != INF ) {
				echo $b;
			} else {
				echo $b = 4;
			}



			foreach($repeater as $item):

				//print_r($item);

				// Check if $x is bigger than 3 then we set it back to 1
				if($x > 3) {
					$x = 1;
				} else {
					$x = $x;
				}
				// if $x = 1 then we start a new row
				if($x == 1) {
					echo '<div class="row">';
				} else {
					echo "";
				}

				?>

				<?php

				?>
					<div class="col-md-<?php echo $b; ?> px-lg-4 mb-md-4 text-center">
						<div class="text-center p-3">
							<?php echo $item['icon']; ?>
						</div>
						<h3><?php echo $item['heading']; ?></h3>
						<div class="text-center p-3">
							<?php echo $item['text']; ?>
						</div>
					</div>




				<?php
				// Check if $x is equal to 3 or if $z equal to the total of the items in the repeater
				// then its true we close the row
				if(($x == 3) || ($z == $total_items)) {
					echo "</div>";
				} else {
					echo "";
				}
				$x++;
				$z++;

			endforeach;
		?>


		</div>


	</div>
</section>
<!-- End USPs -->