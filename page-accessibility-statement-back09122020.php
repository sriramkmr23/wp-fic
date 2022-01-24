<?php
/**
 * The template for displaying disclaimer page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 *@package ECUColombo
 */

get_header(); ?>
<main id="main">
	<section class="py-5 disclaimer">
		<div class="container">
			<div class="row">
				<div class="col p-5 content">
					<h1><?php echo get_the_title(); ?></h1>

                    <p>Griffith College is committed to making its website accessible to all, including people with disabilities.</p>
                    <h2>Accessibility Features</h2>
                    <p>This site includes the following accessibility features:</p>
                    <ul>
                    <li>Skip to content</li>
                    <li>Alternative text detail for images</li>
                    <li>Captioned videos</li>
                    </ul>
                    <h2>Testing</h2>
                    <p>Griffith College Navitas’s Web Team uses the tool Siteimprove to ensure new and existing pages on the <a href="#">www.griffithcollege.edu.au</a> website comply with best practices and standards as defined by the <a href="https://www.w3.org/TR/WCAG21/" target="_blank" rel="noopener">Web Content Accessibility Guidelines (WCAG) 2.1 AA.</a></p>
                    <p>The tool checks for, among other things, missing headings, and images without alternative text.</p>
                    <p>The Web Team will continue to test the site to make sure that all content on the site is accessible to all visitors.</p>
                    <h2>Having trouble reading this page?</h2>
                    <p>If you are using a PC, press and hold down the Control key while also pressing the plus symbol (+). To further enlarge the text, keep the Control key depressed while you press the plus key again. Each repetition will enlarge the text.</p>
                    <p>If you are using a Mac, holding down the Command (⌘) key while hitting the plus sign key (+) will enlarge the size of the font.</p>
                    <h2>Feedback</h2>
                    <p>If you find something that does not meet your needs, let us know so we can address your concerns. Email <a href="mailto:webteam@navitas.com">webteam@navitas.com</a>.</p>

				</div>
			</div>
		</div>
    </section>
</main>
<?php
get_footer();
