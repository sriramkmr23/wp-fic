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
                                <p>As part of your application to study at ARU College and ARU, you are required to submit a personal statement.</p>
                                <h2>What is a personal statement?</h2>
                                <p>A personal statement is a short testimonial, written by you, which tells us more about your skills and experience and most importantly why you want to study at ARU College and ARU.</p>
                                <p>Writing a personal statement does not need to be a difficult task, and to make it easier, you can now complete your personal statement using the online form below.</p>
                                <p>Before you complete the form think about your answers to the questions below carefully and make sure you check it, before clicking submit. Please make sure that this is your own work, as all statements will be checked for plagiarism.</p>
                                <p><a href="http://www.arucollege.com/wp-content/uploads/2020/06/aru-college-personal-statement-questionnaire-may-2020.pdf" target="_blank">Download - Personal Statement Questionnaire (PDF, 633KB)</a></p>
                                <p>All fields are required.</p>
							</div>
						</div>
					</div>
                </section>

                <section class="application-form content">
                    <div class="container">
                        <div class="row">
                            <div class="col">
	                            <!-- FORM: HEAD SECTION -->
                                <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-layout.css?v=ab60f49faaab22c3ff56d6b698fea13230a0a8e9" rel="stylesheet" type="text/css" />
                                <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-jsonly.css?v=ab60f49faaab22c3ff56d6b698fea13230a0a8e9" rel="alternate stylesheet" title="This stylesheet activated by javascript" type="text/css" />
                                <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/wforms.js?v=ab60f49faaab22c3ff56d6b698fea13230a0a8e9"></script>
                                <script type="text/javascript">
                                    wFORMS.behaviors.prefill.skip = false;
                                </script>
                                <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/localization-en_US.js?v=ab60f49faaab22c3ff56d6b698fea13230a0a8e9"></script>
                                <!-- FORM: BODY SECTION -->
                                <div class="wFormContainer">
                                    <div class="">
                                        <div id="tfa_0-WRPR" class="wForm" dir="ltr">
                                            <div id="code-tfa_0" class="codesection">
                                                <script src="https://85f1249248e2cd649389-8dc6c11e1e3524ca11dc4a23c44196ab.ssl.cf6.rackcdn.com/fa-online_application_init.js"></script>
                                            </div>
                                            <form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="4827954" role="form">
                                                <div class="oneField field-container-D    " id="tfa_4-D">
                                                    <label id="tfa_4-L" class="label preField reqMark" for="tfa_4">Name:</label>
                                                    
                                                    <div class="inputWrapper">
                                                        <input type="text" id="tfa_4" name="tfa_4" value="" aria-required="true" title="Name:" class="required">
                                                    </div>
                                                </div>
                                                <div class="oneField field-container-D    " id="tfa_18-D">
                                                    <label id="tfa_18-L" class="label preField reqMark" for="tfa_18">Email Address:</label>
                                                    
                                                    <div class="inputWrapper">
                                                        <input type="text" id="tfa_18" name="tfa_18" value="" aria-required="true" title="Email Address:" class="validate-email required">
                                                    </div>
                                                </div>
                                                <div class="oneField field-container-D    " id="tfa_8-D">
                                                    <label id="tfa_8-L" class="label preField reqMark" for="tfa_8">ARU College Student ID:</label>
                                                    
                                                    <div class="inputWrapper">
                                                        <input type="text" id="tfa_8" name="tfa_8" value="" aria-required="true" title="ARU College Student ID:" class="required">
                                                    </div>
                                                </div>
                                                <div class="oneField field-container-D    " id="tfa_15-D">
                                                    <label id="tfa_15-L" class="label preField reqMark" for="tfa_15">Please explain why you have decided to study at ARU College and ARU.</label>
                                                    
                                                    <div class="inputWrapper">
                                                        <textarea aria-required="true" id="tfa_15" name="tfa_15" title="Please explain why you have decided to study at ARU College and ARU." class="required"></textarea>
                                                    </div>
                                                </div>
                                                <div class="oneField field-container-D    " id="tfa_9-D">
                                                    <label id="tfa_9-L" class="label preField reqMark" for="tfa_9">Please describe briefly why you have decided to study this course.</label>
                                                    
                                                    <div class="inputWrapper">
                                                        <textarea aria-required="true" id="tfa_9" name="tfa_9" title="Please describe briefly why you have decided to study this course." class="required"></textarea>
                                                    </div>
                                                </div>
                                                <div class="oneField field-container-D    " id="tfa_10-D">
                                                    <label id="tfa_10-L" class="label preField reqMark" for="tfa_10">Describe how you think this course will support your future career aspirations.</label>
                                                    
                                                    <div class="inputWrapper">
                                                        <textarea aria-required="true" id="tfa_10" name="tfa_10" title="Describe how you think this course will support your future career aspirations." class="required"></textarea>
                                                    </div>
                                                </div>
                                                <div class="oneField field-container-D    " id="tfa_11-D">
                                                    <label id="tfa_11-L" class="label preField reqMark" for="tfa_11">Briefly tell us how your previous studies and experience relate to your course choice.</label>
                                                    
                                                    <div class="inputWrapper">
                                                        <textarea aria-required="true" id="tfa_11" name="tfa_11" title="Briefly tell us how your previous studies and experience relate to your course choice." class="required"></textarea>
                                                    </div>
                                                </div>
                                                <div class="oneField field-container-D    " id="tfa_17-D">
                                                    <label id="tfa_17-L" class="label preField " for="tfa_17">Additional information you may wish to include to support your application.</label>
                                                    
                                                    <div class="inputWrapper">
                                                        <textarea id="tfa_17" name="tfa_17" title="Additional information you may wish to include to support your application." class=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="actions" id="4827954-A">
                                                    <input type="submit" data-label="Submit" class="primaryAction" id="submit_button" value="Submit">
                                                </div>
                                                <div style="clear:both"></div>
                                                <input type="hidden" value="4827954" name="tfa_dbFormId" id="tfa_dbFormId">
                                                <input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId">
                                                <input type="hidden" value="352c8bc63cc9bb4dae70f1d989d32efe" name="tfa_dbControl" id="tfa_dbControl">
                                                <input type="hidden" value="5" name="tfa_dbVersionId" id="tfa_dbVersionId">
                                                <input type="hidden" value="" name="tfa_switchedoff" id="tfa_switchedoff">
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- End of Online Application -->
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