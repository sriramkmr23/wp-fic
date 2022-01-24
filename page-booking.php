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
                                <p>To book your accommodation in one of our Student Residences, please complete this form.</p>
                                <p>To learn more about the <a href="/student-life/accommodation/">Student Residences</a> ARU College has on offer.</p>
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
                                <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/localization-en_GB.js?v=ab60f49faaab22c3ff56d6b698fea13230a0a8e9"></script>
                                <!-- FORM: BODY SECTION -->
                                <div class="wFormContainer">
                                    <div class="">
                                        <div id="tfa_0-WRPR" class="wForm" dir="ltr">
                                            <div id="code-tfa_0" class="codesection">
                                            <style>#tfa_5406-D, #tfa_74-D, #tfa_428-D { display: none; }</style>
                                            <script src="https://85f1249248e2cd649389-8dc6c11e1e3524ca11dc4a23c44196ab.ssl.cf6.rackcdn.com/fa-online_application_init.js"></script>
                                            </div>
                                            <form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="4827956" role="form">
                                                <div class="oneField field-container-D  labelsRemoved  " id="tfa_704-D" role="group" aria-labelledby="tfa_704-L" data-tfa-labelledby="-L tfa_704-L">
                                                    <div class="inputWrapper"><span id="tfa_704" class="choices vertical required"><span class="oneChoice"><input type="checkbox" value="tfa_705" class="" id="tfa_705" name="tfa_705" aria-labelledby="tfa_705-L" data-tfa-labelledby="tfa_704-L tfa_705-L"><label class="label postField" id="tfa_705-L" for="tfa_705"><span class="input-checkbox-faux"></span>I intend to firmly accept my offer of study and would like to apply for accommodation.</label>
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <fieldset id="tfa_1" class="section">
                                                    <legend id="tfa_1-L">Personal and Agent Details</legend>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_2-D">
                                                        <label id="tfa_2-L" class="label preField reqMark" for="tfa_2">First Name:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_2" name="tfa_2" value="" aria-required="true" title="First Name:" class="required">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_4-D">
                                                        <label id="tfa_4-L" class="label preField reqMark" for="tfa_4">Last Name:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_4" name="tfa_4" value="" aria-required="true" title="Last Name:" class="required">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_6-D">
                                                        <label id="tfa_6-L" class="label preField reqMark" for="tfa_6">ARU College Student ID:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_6" name="tfa_6" value="" aria-required="true" title="ARU College Student ID:" class="required">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_507-D">
                                                        <label id="tfa_507-L" class="label preField " for="tfa_507">Intake:</label>
                                                        <div class="inputWrapper">
                                                            <select id="tfa_507" name="tfa_507" title="Intake:" class="">
                                                                <option value="">Please select...</option>
                                                                <option value="tfa_510" id="tfa_510" class="">September</option>
                                                                <option value="tfa_511" id="tfa_511" class="">January</option>
                                                                <option value="tfa_512" id="tfa_512" class="">May/June</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_8-D">
                                                        <label id="tfa_8-L" class="label preField reqMark" for="tfa_8">Email Address:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_8" name="tfa_8" value="" aria-required="true" title="Email Address:" class="validate-email required">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_10-D">
                                                        <label id="tfa_10-L" class="label preField reqMark" for="tfa_10">Phone Number:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_10" name="tfa_10" value="" aria-required="true" title="Phone Number:" class="required">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_716-D">
                                                        <label id="tfa_716-L" class="label preField reqMark" for="tfa_716">Date of Birth</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_716" name="tfa_716" value="" aria-required="true" title="Date of Birth" class="required">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_18-D">
                                                        <label id="tfa_18-L" class="label preField " for="tfa_18">Agent's Email:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_18" name="tfa_18" value="" title="Agent's Email:" class="">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_20-D">
                                                        <label id="tfa_20-L" class="label preField " for="tfa_20">Agent's Telephone Number:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_20" name="tfa_20" value="" title="Agent's Telephone Number:" class="">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset id="tfa_126" class="section">
                                                    <legend id="tfa_126-L">Accommodation Options</legend>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_127-D">
                                                        <label id="tfa_127-L" class="label preField " for="tfa_127">Which campus are you studying in:</label>
                                                        <div class="inputWrapper">
                                                            <select id="tfa_127" name="tfa_127" title="Which campus are you studying in:" class="">
                                                                <option value="">Please select...</option>
                                                                <option value="tfa_129" id="tfa_129" data-conditionals="#tfa_440" class="">Cambridge Campus</option>
                                                                <option value="tfa_130" id="tfa_130" data-conditionals="#tfa_407" class="">Chelmsford Campus</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <fieldset id="tfa_440" class="section" data-condition="`#tfa_129`">
                                                        <legend id="tfa_440-L">Please select your room choice below in Cambridge campus:</legend>
                                                        <div class="oneField field-container-D    " id="tfa_441-D">
                                                            <label id="tfa_441-L" class="label preField reqMark" for="tfa_441">First Choice:</label>
                                                            <br>
                                                            <div class="inputWrapper">
                                                                <select id="tfa_441" name="tfa_441" title="First Choice:" aria-required="true" class="required">
                                                                    <option value="">Please select...</option>
                                                                    <option value="tfa_513" id="tfa_513" class="">ARU Accommodation</option>
                                                                    <option value="tfa_514" id="tfa_514" class="">Private Sector Accommodation</option>
                                                                    <option value="tfa_695" id="tfa_695" class="">Further Options</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_577-D">
                                                            <label id="tfa_577-L" class="label preField reqMark" for="tfa_577">Second Choice:</label>
                                                            <br>
                                                            <div class="inputWrapper">
                                                                <select id="tfa_577" name="tfa_577" title="Second Choice:" aria-required="true" class="required">
                                                                    <option value="">Please select...</option>
                                                                    <option value="tfa_706" id="tfa_706" class="">ARU Accommodation</option>
                                                                    <option value="tfa_707" id="tfa_707" class="">Private Sector Accommodation</option>
                                                                    <option value="tfa_708" id="tfa_708" class="">Further Options</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_670-D">
                                                            <label id="tfa_670-L" class="label preField reqMark" for="tfa_670">Third Choice:</label>
                                                            <br>
                                                            <div class="inputWrapper">
                                                                <select id="tfa_670" name="tfa_670" title="Third Choice:" aria-required="true" class="required">
                                                                    <option value="">Please select...</option>
                                                                    <option value="tfa_709" id="tfa_709" class="">ARU Accommodation</option>
                                                                    <option value="tfa_710" id="tfa_710" class="">Private Sector Accommodation</option>
                                                                    <option value="tfa_711" id="tfa_711" class="">Further Options</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <fieldset id="tfa_407" class="section" data-condition="`#tfa_130`">
                                                        <legend id="tfa_407-L">Please select your room choice below in Chelmsford campus:</legend>
                                                        <div class="oneField field-container-D    " id="tfa_408-D">
                                                            <label id="tfa_408-L" class="label preField reqMark" for="tfa_408">First Choice:</label>
                                                            <br>
                                                            <div class="inputWrapper">
                                                                <select id="tfa_408" name="tfa_408" title="First Choice:" aria-required="true" class="required">
                                                                    <option value="">Please select...</option>
                                                                    <option value="tfa_531" id="tfa_531" class="">ARU Accommodation</option>
                                                                    <option value="tfa_532" id="tfa_532" class="">Private Sector Accommodation</option>
                                                                    <option value="tfa_696" id="tfa_696" class="">Further options</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_461-D">
                                                            <label id="tfa_461-L" class="label preField reqMark" for="tfa_461">Second Choice:</label>
                                                            <br>
                                                            <div class="inputWrapper">
                                                                <select id="tfa_461" name="tfa_461" title="Second Choice:" aria-required="true" class="required">
                                                                    <option value="">Please select...</option>
                                                                    <option value="tfa_712" id="tfa_712" class="">ARU Accommodation</option>
                                                                    <option value="tfa_713" id="tfa_713" class="">Private Sector Accommodation</option>
                                                                    <option value="tfa_714" id="tfa_714" class="">Further options</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </fieldset>
                                                <div class="oneField field-container-D  labelsRemoved  " id="tfa_367-D" role="group" aria-labelledby="tfa_367-L" data-tfa-labelledby="-L tfa_367-L">
                                                    <div class="inputWrapper"><span id="tfa_367" class="choices vertical required"><span class="oneChoice"><input type="checkbox" value="tfa_372" class="" id="tfa_372" name="tfa_372" aria-labelledby="tfa_372-L" data-tfa-labelledby="tfa_367-L tfa_372-L"><label class="label postField" id="tfa_372-L" for="tfa_372"><span class="input-checkbox-faux"></span>By submitting my details through this form, I agree to this website's <a href="/admission/terms-and-conditions/" target="_blank">Terms &amp; Conditions</a> and <a href="/privacy-policy/" target="_blank">Privacy Policy</a>
                                                        <a href="/../privacy-policy"></a>
                                                        </label>
                                                        </span>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="actions" id="4827956-A">
                                                    <input type="submit" data-label="Submit" class="primaryAction" id="submit_button" value="Submit">
                                                </div>
                                                <div style="clear:both"></div>
                                                <input type="hidden" value="4827956" name="tfa_dbFormId" id="tfa_dbFormId">
                                                <input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId">
                                                <input type="hidden" value="f7557469e5232a7dc1494a46959e1dc2" name="tfa_dbControl" id="tfa_dbControl">
                                                <input type="hidden" value="9" name="tfa_dbVersionId" id="tfa_dbVersionId">
                                                <input type="hidden" value="" name="tfa_switchedoff" id="tfa_switchedoff">
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

<script>
$(function() {

    $("#tfa_716").attr('readonly', 'readonly');

    $( "#tfa_716" ).datepicker({
    changeMonth: true,
    changeYear: true,
    dateFormat: 'dd/mm/yy',
    yearRange: "-50:+50"

    });

});
</script>