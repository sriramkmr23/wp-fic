<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 *@package ECUColombo
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.png" />
	<?php wp_head(); ?>



	<?php if( !empty( get_field( 'sitewide-header', 'option') ) ): ?>
		<?php echo get_field( 'sitewide-header', 'option' ); ?>
	<?php endif; ?>
</head>
<body <?php body_class(); ?>>
<?php
// Snippet to filter out bots
$botRegexPattern = "(googlebot\/|Googlebot-Mobile|Googlebot-Image|Google favicon|Mediapartners-Google|bingbot|slurp|java|wget|curl|Commons-HttpClient|Python-urllib|libwww|httpunit|nutch|phpcrawl|msnbot|jyxobot|FAST-WebCrawler|FAST Enterprise Crawler|biglotron|teoma|convera|seekbot|gigablast|exabot|ngbot|ia_archiver|GingerCrawler|webmon |httrack|webcrawler|grub.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|bibnum.bnf|findlink|msrbot|panscient|yacybot|AISearchBot|IOI|ips-agent|tagoobot|MJ12bot|dotbot|woriobot|yanga|buzzbot|mlbot|yandexbot|purebot|Linguee Bot|Voyager|CyberPatrol|voilabot|baiduspider|citeseerxbot|spbot|twengabot|postrank|turnitinbot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|blekkobot|ezooms|dotbot|Mail.RU_Bot|discobot|heritrix|findthatfile|europarchive.org|NerdByNature.Bot|sistrix crawler|ahrefsbot|Aboundex|domaincrawler|wbsearchbot|summify|ccbot|edisterbot|seznambot|ec2linkfinder|gslfbot|aihitbot|intelium_bot|facebookexternalhit|yeti|RetrevoPageAnalyzer|lb-spider|sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web-archive-net.com.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|seokicks-robot|it2media-domain-crawler|ip-web-crawler.com|siteexplorer.info|elisabot|proximic|changedetection|blexbot|arabot|WeSEE:Search|niki-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|Lipperhey SEO Service|CC Metadata Scaper|g00g1e.net|GrapeshotCrawler|urlappendbot|brainobot|fr-crawler|binlar|SimpleCrawler|Livelapbot|Twitterbot|cXensebot|smtbot|bnf.fr_bot|A6-Indexer|ADmantX|Facebot|Twitterbot|OrangeBot|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|SemrushBot|yoozBot|lipperhey|y!j-asr|Domain Re-Animator Bot|AddThis|YisouSpider|BLEXBot|YandexBot|SurdotlyBot|AwarioRssBot|FeedlyBot|Barkrowler|Gluten Free Crawler|Cliqzbot)";
function is_bot($user_agent) {
	$botRegexPattern = "(googlebot\/|Googlebot\-Mobile|Googlebot\-Image|Google favicon|Mediapartners\-Google|bingbot|slurp|java|wget|curl|Commons\-HttpClient|Python\-urllib|libwww|httpunit|nutch|phpcrawl|msnbot|jyxobot|FAST\-WebCrawler|FAST Enterprise Crawler|biglotron|teoma|convera|seekbot|gigablast|exabot|ngbot|ia_archiver|GingerCrawler|webmon |httrack|webcrawler|grub\.org|UsineNouvelleCrawler|antibot|netresearchserver|speedy|fluffy|bibnum\.bnf|findlink|msrbot|panscient|yacybot|AISearchBot|IOI|ips\-agent|tagoobot|MJ12bot|dotbot|woriobot|yanga|buzzbot|mlbot|yandexbot|purebot|Linguee Bot|Voyager|CyberPatrol|voilabot|baiduspider|citeseerxbot|spbot|twengabot|postrank|turnitinbot|scribdbot|page2rss|sitebot|linkdex|Adidxbot|blekkobot|ezooms|dotbot|Mail\.RU_Bot|discobot|heritrix|findthatfile|europarchive\.org|NerdByNature\.Bot|sistrix crawler|ahrefsbot|Aboundex|domaincrawler|wbsearchbot|summify|ccbot|edisterbot|seznambot|ec2linkfinder|gslfbot|aihitbot|intelium_bot|facebookexternalhit|yeti|RetrevoPageAnalyzer|lb\-spider|sogou|lssbot|careerbot|wotbox|wocbot|ichiro|DuckDuckBot|lssrocketcrawler|drupact|webcompanycrawler|acoonbot|openindexspider|gnam gnam spider|web\-archive\-net\.com\.bot|backlinkcrawler|coccoc|integromedb|content crawler spider|toplistbot|seokicks\-robot|it2media\-domain\-crawler|ip\-web\-crawler\.com|siteexplorer\.info|elisabot|proximic|changedetection|blexbot|arabot|WeSEE:Search|niki\-bot|CrystalSemanticsBot|rogerbot|360Spider|psbot|InterfaxScanBot|Lipperhey SEO Service|CC Metadata Scaper|g00g1e\.net|GrapeshotCrawler|urlappendbot|brainobot|fr\-crawler|binlar|SimpleCrawler|Livelapbot|Twitterbot|cXensebot|smtbot|bnf\.fr_bot|A6\-Indexer|ADmantX|Facebot|Twitterbot|OrangeBot|memorybot|AdvBot|MegaIndex|SemanticScholarBot|ltx71|nerdybot|xovibot|BUbiNG|Qwantify|archive\.org_bot|Applebot|TweetmemeBot|crawler4j|findxbot|SemrushBot|yoozBot|lipperhey|y!j\-asr|Domain Re\-Animator Bot|AddThis|YisouSpider|BLEXBot|YandexBot|SurdotlyBot|AwarioRssBot|FeedlyBot|Barkrowler|Gluten Free Crawler|Cliqzbot)";
	return preg_match("/{$botRegexPattern}/", $user_agent);
}
?>

<?php if( !empty( get_field( 'sitewide-body', 'option' ) ) ): ?>
	<?php echo get_field( 'sitewide-body', 'option' ); ?>
<?php endif; ?>


<!-- Start Skip to content -->
<div id="skip-navigation">
	<a class="sr-only sr-only-focusable" href="#main" title="Skip to Main Content">Skip to Main Content</a>
</div>
<!-- End Skip to content -->

<header class="header shadow-sm clearfix fixed-top">

	<div class="container">

		<nav class="navbar navbar-expand-xl navbar-light navbar-dropdown py-0 px-3 header__navbar" aria-label="Main Navigation">

			<div class="header__main navbar-brand flex-column flex-md-row py-2">
				<a class="header__logo desktop" href="<?php echo get_option("siteurl"); ?>" title="Fraser International College">
					<img src="<?php echo get_theme_file_uri('images/fic_logo.svg'); ?>" class="image-fluid" alt="Fraser International College">
				</a>
				<a class="header__logo mobile" href="<?php echo get_option("siteurl"); ?>" title="Fraser International College">
					<img src="<?php echo get_theme_file_uri('images/fic_logo_mobile.svg'); ?>" class="image-fluid" alt="Fraser International College">
				</a>
			</div>

			<div id="mobile_site_search_container" class="dropdown d-xl-none ml-auto mr-2 header__menu-global-search">
	                <!--div class="">
	                    <a href="/about/contact/" class="btn btn-primary">Contact</a>
	                </div-->
	                <button class="btn dropdown-toggle border-0 hide-text" type="button" id="mobile_site_search_button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<span class="fas fa-search"></span>
					<span class="visuallyhidden">Search</span>
				</button>
				<div class="dropdown-menu dropdown-menu-right px-4 py-3 mt-sm-4 shadow mobile_site_search" aria-labelledby="mobile_site_search_button">
					<form class="site-search-form-nav-mobile" action="/" method="get" role="search">
						<div class="input-group">
							<input type="text" name="s" class="form-control rounded-0 site-search-input-nav-mobile" aria-labelledby="global-search-mobile">
							<div class="input-group-append">
								<button id="global-search-mobile" class="btn btn-primary" type="submit">Search</button>
							</div>
						</div>
						<div class="form-group mb-0 d-none site-search-err-nav-mobile">
							<small class="form-text text-danger">Please enter a keyword.</small>
						</div>
					</form>
				</div>
			</div>
			<button id="ChangeToggle" class="navbar-toggler border-primary header__nav-toggler" type="button" data-toggle="collapse" data-target="#main_navigation_toggle" aria-controls="main_navigation_toggle" aria-expanded="false">
				<span id="navbar-hamburger">
					<span class="navbar-toggler-icon"></span>
				</span>
				<span id="navbar-close" class="d-none">
					<span class="close">X</span>
				</span>
			</button>


            <div class="header-contact-socials">
				<div class="row follow-us justify-content-end">
					<ul class="list-inline social-links">
						<li class="list-inline-item">
							<a class="text-hide flexbox flexbox--center open-wechatqr">
								<span class="fab fa-weixin flexbox flexbox--center"></span>
							</a>
						</li>
						<?php if( have_rows( 'social-links', 'option' ) ): ?>

							<?php while( have_rows( 'social-links', 'option' ) ): the_row(); ?>
								<!-- Facebook -->
								<?php if(get_sub_field('facebook-footer-link')) : ?>
									<li class="list-inline-item"><a href="<?php echo get_sub_field('facebook-footer-link', 'option'); ?>" class="text-hidex flexbox flexbox--center" target="_blank" title="Facebook"><span class="fab fa-facebook-f fb-icon flexbox flexbox--center"></span></a></li>
								<?php endif; ?>

								<!-- Twitter -->
								<?php if(get_sub_field('twitter-footer-link')) : ?>
									<li class="list-inline-item"><a href="<?php echo get_sub_field('twitter-footer-link', 'option'); ?>" class="text-hidex" target="_blank" title="Twitter"><span class="fab fa-twitter flexbox flexbox--center"></span></a></li>
								<?php endif; ?>

								<!-- Instagram -->
								<?php if(get_sub_field('instagram-footer-link')) : ?>
									<li class="list-inline-item"><a href="<?php echo get_sub_field('instagram-footer-link', 'option'); ?>" class="text-hidex" target="_blank" title="Instagram"><span class="fab fa-instagram flexbox flexbox--center"></span></a></li>
								<?php endif; ?>

								<!-- Youtube -->
								<?php if(get_sub_field('youtube-footer-link')) : ?>
									<li class="list-inline-item"><a href="<?php echo get_sub_field('youtube-footer-link', 'option'); ?>" class="text-hidex" target="_blank" title="YouTube"><span class="fab fa-youtube flexbox flexbox--center"></span></a></li>
								<?php endif; ?>

								<!-- Pinterest -->
								<?php if(get_sub_field('pinterest-footer-link')) : ?>
									<li class="list-inline-item"><a href="<?php echo get_sub_field('pinterest-footer-link', 'option'); ?>" class="text-hidex flexbox flexbox--center" target="_blank" title="Pinterest"><span class="fab fa-pinterest flexbox flexbox--center"></span></a></li>
								<?php endif; ?>

								<!-- Linkedin -->
								<?php if(get_sub_field('linkedin-footer-link')) : ?>
									<li class="list-inline-item"><a href="<?php echo get_sub_field('linkedin-footer-link', 'option'); ?>" class="text-hidex" target="_blank" title="LinkedIn"><span class="fab fa-linkedin-in flexbox flexbox--center"></span></a></li>
								<?php endif; ?>

							<?php endwhile; ?>

						<?php endif; ?>
					</ul>
				</div>
			</div>
			<div class="header-contact">
				<a id="header-contact-us" href="/about/contact-us/" class="btn btn-info contact-item">Contact Us</a>
				<a id="header-student-portal" href="https://learning.fraseric.ca/user/login" target="_blank" class="btn btn-info contact-item">Student Portal</a>
				<a id="header-apply-now" href="/admission-and-fees/apply/" class="btn btn-info contact-item">Apply Now</a>
			</div>

			<?php

				wp_nav_menu( array(
					'menu_class'      => 'navbar-nav header__menu mb-3 mb-lg-0',
					'container'       => 'div',
					'container_class' => 'header__navwrap collapse navbar-collapse',
					'container_id'    => 'main_navigation_toggle_desktop',
					'depth'	          => 2,
					'walker'          => new WP_Bootstrap_Navwalker(),
					'theme_location'  => 'primary'
				) );

			?>


            <div id="main_navigation_toggle" class="header__navwrap collapse navbar-collapse d-xl-none">

				<ul class="navbar-nav header__menu mb-3 mb-xl-0 d-xl-none">
					<?php
						global $excluded_page_ids;

						// Build dynamic navigation menu for mobile
						$mobile_nav_pages = wp_list_pages(array(
							'sort_column' => 'menu_order',
							'title_li' => null,
							'exclude' => $excluded_page_ids,
							'walker' => new mobile_navwalker()
						));
						echo $mobile_nav_pages;
					?>
				</ul>

				<!--Listing CTA on Mobile -->
				<div class="row d-xl-none">
					<div class="mob-cta">
						<a href="/about/contact-us/" class="btn btn-info px-xl-3 level-0 mob-cta-btn-3">Contact Us</a>
					</div>
					<div class="mob-cta">
						<a href="https://learning.fraseric.ca/user/login" target="_blank" class="btn btn-info px-xl-3 level-0 mob-cta-btn-3">Student Portal</a>
					</div>
					<div class="mob-cta">
						<a href="/admission-and-fees/apply/" class="btn btn-info px-xl-3 level-0 mob-cta-btn-3">Apply Now</a>
					</div>

				</div>
			</div>


			<!-- Global Search -->
			<?php /***<div class="navbar-nav flex-row ml-md-auto d-none d-xl-flex header__menu-global-search-desktop">***/?>
			<div class="navbar-nav ml-md-auto header__menu-global-search-desktop">

					<button type="button" class="btn dropdown-toggle float-right" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						<span class="fas fa-search"></span>
						<span class="visuallyhidden">Search</span>
					</button>

				<div class="dropdown-menu dropdown-menu-right px-4 py-3 shadow">

					<form class="site-search-form-nav" action="/" method="get" role="search">
						<div class="input-group">
							<input type="text" name="s" id="s" class="form-control rounded-0 site-search-input-nav" aria-labelledby="global-search-desktop">
							<div class="input-group-append">
								<button id="global-search-desktop" class="btn btn-primary" type="submit">Search</button>
							</div>
						</div>
						<div class="form-group mb-0 d-none site-search-err-nav">
							<small class="form-text text-danger">Please enter a keyword.</small>
						</div>
					</form>

				</div>
			</div>

		</nav>

	</div>
</header>


<?php
/***
<section class="site-header" >
	<div class="container">
		<div class="row">
			<div class="col-md-12 col-md-1 align-items-center site-header-content" >
				WELCOME To LAURIER - Students Information
			</div>
		</div>
	</div>
</section>
***/
?>