<?php
/**
 * The template for displaying the footer
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 *@package ECUColombo
 *
 */
?>

<footer class="footer mb-6">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img class="footer-logo desktop" alt="Fraser International College" src = "<?php echo get_theme_file_uri('images/fic_logo_footer.svg')?>" />
				<img class="footer-logo mobile" alt="Fraser International College" src = "<?php echo get_theme_file_uri('images/fic_logo_footer_mobile.svg')?>" />

				<div class="territory-acknowledgement-footer">
					<p class="lead">Territory Acknowledgement</p>
					<p>Fraser International College respectfully acknowledges the unceded Traditional Coast Salish Lands including the Tsleil-Waututh (səl̓ilw̓ətaʔɬ), Kwikwetlem (kʷikʷəƛ̓əm), Squamish (Sḵwx̱wú7mesh Úxwumixw), Semiahmoo, Katzie, Kwantlen, Qayqayt, Tsawwassen and Musqueam (xʷməθkʷəy̓əm) Nations.</p>
				</div>
			</div>
			<div class="col-md-2">
				<p class="lead">Get in Touch</p>
				<?php if( have_rows( 'contact-1', 'option' ) ):

					while( have_rows( 'contact-1', 'option' ) ): the_row(); ?>
						<!-- Phone -->
						<?php if(get_sub_field('contact-1-footer-phone')) : ?>

							<div class="">
								<a href="tel:<?php echo clean_phone_format( get_sub_field('contact-1-footer-phone') ); ?>">
									<span class="fas fa-phone-square mr-1"></span> <?php echo get_sub_field('contact-1-footer-phone'); ?>
								</a>
							</div>

						<?php endif; ?>

						<?php if(get_sub_field('contact-1-footer-phone-2')) : ?>

							<div class="">
								<a href="tel:<?php echo clean_phone_format( get_sub_field('contact-1-footer-phone') ); ?>">
									or <?php echo get_sub_field('contact-1-footer-phone'); ?>
								</a>
							</div>

						<?php endif; ?>


						<!-- Email -->
						<?php if(get_sub_field('contact-1-footer-email')) : ?>

							<div class="contact-1-footer-email">
								<a href="mailto:<?php echo get_sub_field('contact-1-footer-email'); ?>">
									<span class="fas fa-envelope mr-1"></span> <?php echo get_sub_field('contact-1-footer-email'); ?>
								</a>
							</div>

						<?php endif; ?>

						<!-- Whatsapp -->
						<?php if(get_sub_field('contact-1-footer-whatsapp')) : ?>

							<div class="">
								<a href="">
									<span class="fas fa-comment mr-1"></span> <?php echo get_sub_field('contact-1-footer-whatsapp'); ?>
								</a>
							</div>

						<?php endif;
					endwhile;
				endif;?>

				<div class="d-flex flex-column">

					<?php if( have_rows( 'contact-1', 'option' ) ):

						while( have_rows( 'contact-1', 'option' ) ): the_row(); ?>

							<!-- Address -->
							<?php if(get_sub_field('contact-1-footer-address')) : ?>

								<?php if(get_sub_field('contact-1-footer-map-link')) : ?>
									<a class="address" title="Opens in Google Maps" target="_blank" href="<?php echo get_sub_field('contact-1-footer-map-link')?>">
										<span class="fas fa-map-marker mr-1"></span> <?php echo nl2br(get_sub_field('contact-1-footer-address')); ?>
									</a>
								<?php else : ?>
									<address class="address">
										<?php echo nl2br(get_sub_field('contact-1-footer-address')); ?>
									</address>
								<?php endif; ?>

							<?php endif; ?>

							<?php

						endwhile;

					endif; ?>

				</div>
			</div>
			<div class="col-md-2">
				<?php if( have_rows( 'quick-links', 'option' ) ): ?>
					<div class="quick-links">

						<?php if( have_rows( 'quick-links', 'option' ) ):
							while( have_rows( 'quick-links', 'option' ) ): the_row();
								if( have_rows( 'quick-link-items', 'option' ) ):
									echo '<ul aria-label="Footer Items" class="list-inline mb-2 mx-auto footer-items">';
									while( have_rows( 'quick-link-items', 'option' ) ): the_row();
										if(get_sub_field('link')) : ?>
											<li><a href="<?php echo get_sub_field('link')['url']; ?>"><?php echo get_sub_field('link')['title']; ?></a></li>
										<?php endif;
									endwhile;
									echo '</ul>';
								endif;
							endwhile;
						endif; ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="col-md-2">
				<!-- Start Privacy Links -->
				<ul class="list-inline mx-auto footer-links">
					<li class="list-inline-item mb-2 mb-lg-0 util-links"><a href="https://www.navitas.com/who-we-are" target="_blank">About Navitas</a></li>
					<li class="list-inline-item mb-2 mb-lg-0 util-links"><a href="https://www.agents.navitas.com/" target="_blank">Agents Information</a></li>
					<!--<li class="list-inline-item mb-2 mb-lg-0 util-links"><a href="/accessibility-statement/">Accessibility Statement</a></li>-->
					<li class="list-inline-item mb-2 mb-lg-0 util-links"><a href="/privacy-policy/">Privacy Policy</a></li>
					<li class="list-inline-item mb-2 mb-lg-0 util-links"><a href="/cookie-policy/">Cookie Policy</a></li>
					<li class="list-inline-item mb-2 mb-lg-0 util-links"><a href="#ot-sdk-btn" class="ot-sdk-show-settings">Cookie Preference</a></li>
					<li class="list-inline-item mb-2 mb-lg-0 util-links"><a href="/disclaimer/">Disclaimer</a></li>
				</ul>
				<!-- End Privacy Links -->
			</div>

		</div>

		<div class="row">
			<div class="col-md-6">
				Fraser International College (FIC) is a Designated<br />
				Learning Institution and our DLI number is: O19239078442
				<div class="copyright">© <?=date('Y')?> Fraser International College</div>
			</div>

			<div class="col-md-6">
				<div class="row follow-us justify-content-end">
					<ul class="list-inline social-links">
						<li class="list-inline-item">
							<a class="text-hide flexbox flexbox--center open-wechatqr">
								<span class="fab fa-weixin flexbox flexbox--center"></span>WeChat
							</a>
							<div class="wechatqr-popup-overlay">
								<!--Creates the popup content-->
								<div class="wechatqr-popup-content">

									<div class="d-none d-md-block">
										<h3>FIC WeChat Code</h3>
										<img src="<?php echo get_stylesheet_directory_uri();?>/images/wechat-qr-code.png" />
										<span class="close-wechatqr">X</span>
									</div>
									<div class="d-md-none">
										<h3>FIC WeChat Link</h3>
										<br />
										<a class="wechat-link" href="https://weixin.qq.com/r/S0R_ZuDEtr3JraQF9xFZ">https://weixin.qq.com/r/S0R_ZuDEtr3JraQF9xFZ</a>
										<span class="close-wechatqr">X</span>
									</div>

								</div>

							</div>
						</li>
						<?php if( have_rows( 'social-links', 'option' ) ): ?>

							<?php while( have_rows( 'social-links', 'option' ) ): the_row(); ?>

								<!-- Facebook -->
								<?php if(get_sub_field('facebook-footer-link')) : ?>

									<li class="list-inline-item"><a href="<?php echo get_sub_field('facebook-footer-link', 'option'); ?>" class="text-hide flexbox flexbox--center" target="_blank"><span class="fab fa-facebook-f fb-icon flexbox flexbox--center"></span>Facebook</a></li>

								<?php endif; ?>

								<!-- Twitter -->
								<?php if(get_sub_field('twitter-footer-link')) : ?>

									<li class="list-inline-item"><a href="<?php echo get_sub_field('twitter-footer-link', 'option'); ?>" class="text-hide" target="_blank"><span class="fab fa-twitter flexbox flexbox--center"></span>Twitter</a></li>

								<?php endif; ?>

								<!-- Instagram -->
								<?php if(get_sub_field('instagram-footer-link')) : ?>

									<li class="list-inline-item"><a href="<?php echo get_sub_field('instagram-footer-link', 'option'); ?>" class="text-hide" target="_blank"><span class="fab fa-instagram flexbox flexbox--center"></span>Instagram</a></li>

								<?php endif; ?>

								<!-- Youtube -->
								<?php if(get_sub_field('youtube-footer-link')) : ?>

									<li class="list-inline-item"><a href="<?php echo get_sub_field('youtube-footer-link', 'option'); ?>" class="text-hide" target="_blank"><span class="fab fa-youtube flexbox flexbox--center"></span>YouTube</a></li>

								<?php endif; ?>

								<!-- Pinterest -->
								<?php if(get_sub_field('pinterest-footer-link')) : ?>

									<li class="list-inline-item"><a href="<?php echo get_sub_field('pinterest-footer-link', 'option'); ?>" class="text-hide flexbox flexbox--center" target="_blank"><span class="fab fa-pinterest flexbox flexbox--center"></span>Pinterest</a></li>

								<?php endif; ?>

								<!-- Linkedin -->
								<?php if(get_sub_field('linkedin-footer-link')) : ?>

									<li class="list-inline-item"><a href="<?php echo get_sub_field('linkedin-footer-link', 'option'); ?>" class="text-hide" target="_blank"><span class="fab fa-linkedin-in flexbox flexbox--center"></span>LinkedIn</a></li>

								<?php endif; ?>

							<?php endwhile; ?>

						<?php endif; ?>
					</ul>
				</div>
			</div>
		</div>



		<div class="row py-2">
			<div class="col text-center">
				<?php
				/***
				<p class="mb-2 footer-text">
					CRICOS Provider: 01737F
					<br /><br />
				</p>
				**/
				?>
			</div>
		</div>
	</div>
</footer>

<!-- Start mobile search overlay -->
<div class="mobile-search-overlay"></div>
<!-- End mobile search overlay -->

<!-- Start scroll to top -->
<a href='#' class="scroll-top btn btn-primary-backtop rounded-circle" title='Back to Top' role='button' >
	<span class="fas fa-arrow-up"></span>
	<span class="visuallyhidden">Back to Top</span>
</a>
<!-- End scroll to top -->

<?php if( !empty( get_field( 'sitewide-footer', 'option' ) ) ): ?>
	<?php echo get_field( 'sitewide-footer', 'option' ); ?>
<?php endif; ?>






<?php wp_footer(); ?>
</body>
</html>