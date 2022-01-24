<?php
/**
 * The template for displaying arrival confirmation form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *@package ECUColombo
 */

get_header(); ?>

<!-- Start Main -->
<main id="main">

<?php
while (have_posts()):
	the_post(); ?>
	<div class="container">
		<div class="row py-5">
			<div class="col-md-3 d-none d-md-block">
				<?php // Get In This Section Component
				get_template_part('template-parts/section-navigation');
				?>
			</div>
			<div class="col-md-9">
				<?php // Get BreadCrumb Component
				get_template_part('template-parts/breadcrumb');
                ?>

                <section class="page-title content">
					<div class="container">
						<div class="row">
							<div class="col">
								<h1><?php the_title(); ?></h1>
                                <p>We have provided this calculator to help establish the entry level for a student based on their current English Certificate.</p>
                                <p>It asks for the title and date of the test and uses that information to show the available entry levels for UK study.</p>
							</div>
						</div>
					</div>
                </section>

                <section class="application-form content">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <!-- -->
                                <script>
                                    //document.head.innerHTML = document.head.innerHTML + '<link rel="stylesheet" href="/css/UP-stylesheet-FA.css">'; 	document.head.innerHTML = document.head.innerHTML + '<link type="text/css" href="/css/navelc.css" rel="stylesheet">';
                                </script>
                                <!-- <script type="text/javascript" src="/wp-content/themes/aruc/js/englishTest.js"></script> -->
                                <script>
                                    // $(document).ready(function(){ NavitasSELTCalculator('Calculator'); });                                 
                                </script>
                                <div class="calculatorPanel">
                                    <div id="calculator-icon"></div>
                                    <div id="Calculator">
                                        <div id="dqb">
                                            <table>
                                                <tbody>
                                                    <tr class="calc">
                                                        <td colspan="2" class="st">What English Certificate do you have?</td>
                                                    </tr>
                                                    <tr class="calc">
                                                        <td>Test</td>
                                                        <td colspan="2">
                                                            <select class="calcSelect" id="nelcyp8ntwmjxln">
                                                                <option value="0">TOEIC</option>
                                                                <option value="1">TOEIC iBT Test</option>
                                                                <option value="2">BULATS Online (certificated)</option>
                                                                <option value="3">Integrated Skills in English</option>
                                                                <option value="4">Level 1 Certificate in ESOL Skills for Life</option>
                                                                <option value="5">Level 2 Certificate in ESOL Skills for Life</option>
                                                                <option value="6">Cambridge IGCSE - English as First Language</option>
                                                                <option value="7">Cambridge IGCSE - English as Second Language</option>
                                                                <option value="8">IELTS</option>
                                                                <option value="9">IELTS for UKVI</option>
                                                                <option value="10">Non SELT</option>
                                                            </select>
                                                        </td>
                                                    </tr>
                                                    <tr class="calc">
                                                        <td>Provider</td>
                                                        <td colspan="2">
                                                            <select class="calcSelect" id="nelcozg0oaqc9ed"></select>
                                                        </td>
                                                    </tr>
                                                    <tr class="calc">
                                                        <td>Date of Exam</td>
                                                        <td>
                                                            <input type="text" class="calcInputText hasDatepicker" id="nelc3glvtfxml5b" maxlength="10">
                                                        </td>
                                                        <td>Format:dd/mm/yyyy</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div id="nelc7u19kz4hyda" style="display:none;">
                                                <hr>
                                                <div class="st">Your Results:</div>
                                                <div id="nelceh2lx9l1ht5" class="re"></div>
                                                <div id="nelchap38vz493m" class="re"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div style="clear: both;">&nbsp;</div>
                            </div>
                        </div>
                    </div>
                </section>
			</div>
		</div>
	</div>
<?php endwhile; ?>

</main>
<!-- End Main -->

<?php
get_footer();

?>

<script>
    $(document).ready(function(){ NavitasSELTCalculator('Calculator'); });                                 
</script>