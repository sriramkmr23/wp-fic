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
                                <p>You have the legal right to change your mind and cancel the contract without giving a reason within 14 days starting from the day after a binding contract has been formed in line with the terms and conditions provided in your Offer Letter.</p>
                                <p>Any refund payable under the terms and conditions provided to you will be paid within 14 days of this form being received by the College.</p>
                                <p>If you have enrolled on to your Programme during the Cancellation Period, you will be required to pay for the part of the Programme that has been provided by the College until the time that the College is informed of your decision to cancel the contract.</p>
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
                                <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-layout.css?v=7cb6e30f1262b7a23eed8cc88f68cd0b3a9cd286" rel="stylesheet" type="text/css" />
                                <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-jsonly.css?v=7cb6e30f1262b7a23eed8cc88f68cd0b3a9cd286" rel="alternate stylesheet" title="This stylesheet activated by javascript" type="text/css" />
                                <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/wforms.js?v=7cb6e30f1262b7a23eed8cc88f68cd0b3a9cd286"></script>
                                <script type="text/javascript">
                                    wFORMS.behaviors.prefill.skip = false;
                                </script>
                                <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/localization-en_US.js?v=7cb6e30f1262b7a23eed8cc88f68cd0b3a9cd286"></script>
                                <!-- FORM: BODY SECTION -->
                                <div class="wFormContainer">
                                    <div class="">
                                        <div id="tfa_0-WRPR" class="wForm" dir="ltr">
                                            <div id="code-tfa_0" class="codesection"></div>
                                            <form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="4669105" role="form">
                                                <fieldset id="tfa_2" class="section">
                                                    <legend id="tfa_2-L"><b>Declaration</b>
                                                    </legend>
                                                    <div class="oneField field-container-D    " id="tfa_3-D">
                                                        <label id="tfa_3-L" class="label preField " for="tfa_3">I hereby give notice that I would like to cancel my place on the following course:</label>
                                                        <br>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_3" name="tfa_3" value="" title="I hereby give notice that I would like to cancel my place on the following course:" class="">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D    " id="tfa_4-D">
                                                        <label id="tfa_4-L" class="label preField " for="tfa_4">Start date of the course:</label>
                                                        <br>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_4" name="tfa_4" value="" title="Start date of the course:" class="">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset id="tfa_5" class="section">
                                                    <legend id="tfa_5-L"><b>Personal Details</b>
                                                    </legend>
                                                    <div class="oneField field-container-D    " id="tfa_6-D">
                                                        <label id="tfa_6-L" class="label preField " for="tfa_6">Student ID:</label>
                                                        <br>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_6" name="tfa_6" value="" title="Student ID:" class="">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D    " id="tfa_7-D">
                                                        <label id="tfa_7-L" class="label preField reqMark" for="tfa_7">First Name:</label>
                                                        <br>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_7" name="tfa_7" value="" aria-required="true" title="First Name:" class="required">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D    " id="tfa_8-D">
                                                        <label id="tfa_8-L" class="label preField reqMark" for="tfa_8">Last Name:</label>
                                                        <br>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_8" name="tfa_8" value="" aria-required="true" title="Last Name:" class="required">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D    " id="tfa_9-D">
                                                        <label id="tfa_9-L" class="label preField reqMark" for="tfa_9">Email Address:</label>
                                                        <br>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_9" name="tfa_9" value="" aria-required="true" title="Email Address:" class="validate-email required">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <input type="hidden" id="tfa_10" name="tfa_10" value="ARUC" class="">
                                                <div class="actions" id="4669105-A">
                                                    <input type="submit" data-label="Submit" class="primaryAction" id="submit_button" value="Submit">
                                                </div>
                                                <div style="clear:both"></div>
                                                <input type="hidden" value="4669105" name="tfa_dbFormId" id="tfa_dbFormId">
                                                <input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId">
                                                <input type="hidden" value="28b6c050dd82a1bfdac91cb34e5dfebb" name="tfa_dbControl" id="tfa_dbControl">
                                                <input type="hidden" value="8" name="tfa_dbVersionId" id="tfa_dbVersionId">
                                                <input type="hidden" value="ARUC" name="tfa_switchedoff" id="tfa_switchedoff">
                                            </form>
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