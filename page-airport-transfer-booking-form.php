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
                                <p>To book your airport transfer, please complete this form</p>
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
                                                <div id="code-tfa_0" class="codesection">
                                                <style>#tfa_5406-D, #tfa_74-D { display: none; }</style>
                                                <script src="https://85f1249248e2cd649389-8dc6c11e1e3524ca11dc4a23c44196ab.ssl.cf6.rackcdn.com/fa-online_application_init.js"></script>
                                                </div>
                                            </div>
                                            <form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="4827958" role="form">
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
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_514-D">
                                                        <label id="tfa_514-L" class="label preField reqMark" for="tfa_514">Date of Birth:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_514" name="tfa_514" value="" aria-required="true" title="Date of Birth:" class="required">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_18-D">
                                                        <label id="tfa_18-L" class="label preField " for="tfa_18">Agent's Email Address:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_18" name="tfa_18" value="" title="Agent's Email Address:" class="">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_20-D">
                                                        <label id="tfa_20-L" class="label preField " for="tfa_20">Agent's Telephone Number:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_20" name="tfa_20" value="" title="Agent's Telephone Number:" class="">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset id="tfa_131" class="section">
                                                    <legend id="tfa_131-L">Flight Details</legend>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_137-D">
                                                        <label id="tfa_137-L" class="label preField " for="tfa_137"><span style="color: rgb(69, 69, 69);">For an additional fee would you like to be met at the airport and transferred to your accommodation?</span>
                                                        </label>
                                                        <div class="inputWrapper">
                                                            <select id="tfa_137" name="tfa_137" title="For an additional fee would you like to be met at the airport and transferred to your accommodation?" class="">
                                                                <option value="">Please select...</option>
                                                                <option value="tfa_138" id="tfa_138" class="">Select</option>
                                                                <option value="tfa_139" id="tfa_139" class="">Heathrow to Cambridge: £125</option>
                                                                <option value="tfa_140" id="tfa_140" class="">Gatwick to Cambridge: £155</option>
                                                                <option value="tfa_141" id="tfa_141" class="">Stansted to Cambridge: £75</option>
                                                                <option value="tfa_511" id="tfa_511" class="">Luton to Cambridge: £80</option>
                                                                <option value="tfa_142" id="tfa_142" class="">Heathrow to Chelmsford: £125</option>
                                                                <option value="tfa_143" id="tfa_143" class="">Gatwick to Chelmsford: £125</option>
                                                                <option value="tfa_385" id="tfa_385" class="">Stansted to Chelmsford: £80</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="htmlSection" id="tfa_145">
                                                        <div class="htmlContent" id="tfa_145-HTML">If you have not confirmed your flights yet, please put 'To be confirmed' for now and send your flight details to us as soon as possible. It is crucial we have your travel details at least 72 hours before your arrival.</div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_147-D">
                                                        <label id="tfa_147-L" class="label preField " for="tfa_147">Airport:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_147" name="tfa_147" value="" title="Airport:" class="">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_149-D">
                                                        <label id="tfa_149-L" class="label preField " for="tfa_149">Terminal Number:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_149" name="tfa_149" value="" title="Terminal Number:" class="">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_151-D">
                                                        <label id="tfa_151-L" class="label preField " for="tfa_151">Airline:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_151" name="tfa_151" value="" title="Airline:" class="">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_153-D">
                                                        <label id="tfa_153-L" class="label preField " for="tfa_153">Flight Number:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_153" name="tfa_153" value="" title="Flight Number:" class="">
                                                        </div>
                                                    </div>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_516-D">
                                                        <label id="tfa_516-L" class="label preField " for="tfa_516">Arrival Date:</label>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_516" name="tfa_516" value="" title="Arrival Date:" class="">
                                                        </div>
                                                    </div>
                                                    <fieldset id="tfa_417" class="section column">
                                                        <legend id="tfa_417-L">Arrival Time:</legend>
                                                        <table class="columnLayout">
                                                            <tr>
                                                                <td>
                                                                    <div class="oneField field-container-D  labelsRemoved  " id="tfa_157-D">
                                                                        <div class="inputWrapper">
                                                                            <select id="tfa_157" name="tfa_157" title="Arrival Time" class="">
                                                                                <option value="">Please select...</option>
                                                                                <option value="tfa_418" id="tfa_418" class="" selected data-default-value="true">Hr</option>
                                                                                <option value="tfa_391" id="tfa_391" class="">00</option>
                                                                                <option value="tfa_392" id="tfa_392" class="">01</option>
                                                                                <option value="tfa_393" id="tfa_393" class="">02</option>
                                                                                <option value="tfa_394" id="tfa_394" class="">03</option>
                                                                                <option value="tfa_395" id="tfa_395" class="">04</option>
                                                                                <option value="tfa_396" id="tfa_396" class="">05</option>
                                                                                <option value="tfa_397" id="tfa_397" class="">06</option>
                                                                                <option value="tfa_398" id="tfa_398" class="">07</option>
                                                                                <option value="tfa_399" id="tfa_399" class="">08</option>
                                                                                <option value="tfa_400" id="tfa_400" class="">09</option>
                                                                                <option value="tfa_401" id="tfa_401" class="">10</option>
                                                                                <option value="tfa_402" id="tfa_402" class="">11</option>
                                                                                <option value="tfa_403" id="tfa_403" class="">12</option>
                                                                                <option value="tfa_404" id="tfa_404" class="">13</option>
                                                                                <option value="tfa_405" id="tfa_405" class="">14</option>
                                                                                <option value="tfa_406" id="tfa_406" class="">15</option>
                                                                                <option value="tfa_407" id="tfa_407" class="">16</option>
                                                                                <option value="tfa_408" id="tfa_408" class="">17</option>
                                                                                <option value="tfa_409" id="tfa_409" class="">18</option>
                                                                                <option value="tfa_410" id="tfa_410" class="">19</option>
                                                                                <option value="tfa_411" id="tfa_411" class="">20</option>
                                                                                <option value="tfa_412" id="tfa_412" class="">21</option>
                                                                                <option value="tfa_413" id="tfa_413" class="">22</option>
                                                                                <option value="tfa_414" id="tfa_414" class="">23</option>
                                                                                <option value="tfa_415" id="tfa_415" class="">24</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="oneField field-container-D  labelsRemoved  " id="tfa_446-D">
                                                                        <div class="inputWrapper">
                                                                            <select id="tfa_446" name="tfa_446" title="Arrival Time" class="">
                                                                                <option value="">Please select...</option>
                                                                                <option value="tfa_447" id="tfa_447" class="" selected data-default-value="true">Min</option>
                                                                                <option value="tfa_448" id="tfa_448" class="">00</option>
                                                                                <option value="tfa_508" id="tfa_508" class="">10</option>
                                                                                <option value="tfa_449" id="tfa_449" class="">20</option>
                                                                                <option value="tfa_450" id="tfa_450" class="">30</option>
                                                                                <option value="tfa_509" id="tfa_509" class="">40</option>
                                                                                <option value="tfa_510" id="tfa_510" class="">50</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="oneField field-container-D  labelsRemoved  " id="tfa_500-D">
                                                                        <div class="inputWrapper">
                                                                            <select id="tfa_500" name="tfa_500" title="Arrival Time" class="">
                                                                                <option value="">Please select...</option>
                                                                                <option value="tfa_501" id="tfa_501" class="" selected data-default-value="true">AM</option>
                                                                                <option value="tfa_507" id="tfa_507" class="">PM</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </fieldset>
                                                    <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_512-D">
                                                        <label id="tfa_512-L" class="label preField " for="tfa_512">Destination Address:</label>
                                                        <div class="inputWrapper">
                                                            <textarea id="tfa_512" name="tfa_512" title="Destination Address:" class=""></textarea>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <fieldset id="tfa_158" class="section">
                                                    <legend id="tfa_158-L">Payment and Refund Policy</legend>
                                                    <div class="htmlSection" id="tfa_159">
                                                        <div class="htmlContent" id="tfa_159-HTML">
                                                            <ul>
                                                                <li>Heathrow to Cambridge: £125</li>
                                                                <li>Gatwick to Cambridge: £155</li>
                                                                <li>Stansted to Cambridge: £75</li>
                                                                <li>Luton to Cambridge: £80</li>
                                                                <li>Heathrow to Chelmsford: £125</li>
                                                                <li>Gatwick to Chelmsford: £125</li>
                                                                <li>Stansted to Chelmsford: £80</li>
                                                            </ul>
                                                            <p>&nbsp;
                                                                <br>
                                                                <br>
                                                            </p>
                                                            <p>All fees will need to be paid <a href="https://student.globalpay.wu.com/geo-buyer/cric#!/" target="_blank">online</a> or by bank transfer to the below ARU College bank account before flying.</p>
                                                            <p>Reference:_________ (Student ARU College ID –Airport pickup fee)
                                                                <br>Account name: CAMBRIDGE RUSKIN INT COLLEGE LTD.
                                                                <br>Bank Name: Citibank London
                                                                <br>Account Number:11972472
                                                                <br>Sorting Code:185008
                                                                <br>IBAN:GB79CITI18500811972472
                                                                <br>SWIFT:CITIGB2L (Citibank London)
                                                                <br>Bank Address: Citigroup Centre, Canada Square, Canary Wharf, LONDON, E14 5LB, UK
                                                                <br>
                                                                <br>
                                                            </p>
                                                            <p>To view a copy of our <a target="_blank" href="/admission/enrolment-conditions/">Payment and Refund Policy</a>.</p>
                                                        </div>
                                                    </div>
                                                    <fieldset id="tfa_160" class="section">
                                                        <legend id="tfa_160-L">Declaration</legend>
                                                        <div class="htmlSection" id="tfa_387">
                                                            <div class="htmlContent" id="tfa_387-HTML">
                                                                <p>These prices are based on a single person travelling with no more than 2 cases of luggage. If you are travelling with any family members or extra luggage please contact ARU College at <a href="mailto:accommodation@arucollege.com">accommodation@arucollege.com</a> for a quote</p>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_367-D" role="group" aria-labelledby="tfa_367-L" data-tfa-labelledby="-L tfa_367-L">
                                                            <div class="inputWrapper"><span id="tfa_367" class="choices vertical required"><span class="oneChoice"><input type="checkbox" value="tfa_372" class="" id="tfa_372" name="tfa_372" aria-labelledby="tfa_372-L" data-tfa-labelledby="tfa_367-L tfa_372-L"><label class="label postField" id="tfa_372-L" for="tfa_372"><span class="input-checkbox-faux"></span>By submitting my details through this form, I agree to this website's <a href="/admission/terms-and-conditions/" target="_blank">Terms &amp; Conditions</a> and <a href="/privacy-policy/" target="_blank">Privacy Policy</a>
                                                                </label>
                                                                </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="oneField field-container-D     wf-acl-hidden" id="tfa_384-D">
                                                        <label id="tfa_384-L" class="label preField " for="tfa_384">honeypot</label>
                                                        <br>
                                                        <div class="inputWrapper">
                                                            <input type="text" id="tfa_384" name="tfa_384" value="" title="honeypot" class="">
                                                        </div>
                                                    </div>
                                                </fieldset>
                                                <div class="actions" id="4827958-A">
                                                    <input type="submit" data-label="Submit" class="primaryAction" id="submit_button" value="Submit">
                                                </div>
                                                <div style="clear:both"></div>
                                                <input type="hidden" value="4827958" name="tfa_dbFormId" id="tfa_dbFormId">
                                                <input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId">
                                                <input type="hidden" value="712e2f34a57554da426be15a032d98c3" name="tfa_dbControl" id="tfa_dbControl">
                                                <input type="hidden" value="14" name="tfa_dbVersionId" id="tfa_dbVersionId">
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
    $("#tfa_514").attr('readonly', 'readonly');
    
        $( "#tfa_514" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd/mm/yy',
        yearRange: "-50:+50"
    
        });
    
});
        
$(function() {
    $("#tfa_516").attr('readonly', 'readonly');

        $( "#tfa_516" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd/mm/yy',
        yearRange: "-40:+40"

        });

});
</script>