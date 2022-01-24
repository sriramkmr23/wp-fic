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
                <!-- FORM: HEAD SECTION -->
                <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-layout.css?v=88d2338a3b7d98705a2271fea6a51efa46fffee6" rel="stylesheet" type="text/css" />
                <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-jsonly.css?v=88d2338a3b7d98705a2271fea6a51efa46fffee6" rel="alternate stylesheet" title="This stylesheet activated by javascript" type="text/css" />
                <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/wforms.js?v=88d2338a3b7d98705a2271fea6a51efa46fffee6"></script>
                <script type="text/javascript">
                wFORMS.behaviors.prefill.skip = false;
                </script>
                <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/localization-en_GB.js?v=88d2338a3b7d98705a2271fea6a51efa46fffee6"></script>

                <!-- FORM: BODY SECTION -->
                <div class="wFormContainer" >
                    <div class="wFormHeader"></div>
                    <style type="text/css">
                                #tfa_97-L,
                                label[id^="tfa_97["] {
                                    width: 273px !important;
                                    min-width: 0px;
                                }
                            
                                #tfa_57-L,
                                label[id^="tfa_57["] {
                                    width: 273px !important;
                                    min-width: 0px;
                                }
                            </style><div class=""><div class="wForm" id="4837438-WRPR" dir="ltr">
                <div class="codesection" id="code-4837438"></div>

                <section class="page-title content">
					<div class="container">
						<div class="row">
							<div class="col">
								<h1><?php the_title(); ?></h1>
                                <p>Refunds over &pound;250<strong> will always be refunded to the source account</strong>. If this is not possible due to the source bank account being closed or other exceptional circumstances, please contact <a href="mailto:info@arucollege.com">info@arucollege.com</a> before completing this form.</p>
					            <p>Upon completion and submission of this form, if all information is accurate, refunds are usually processed within 14 working days.</p>
							</div>
						</div>
					</div>
                </section>

                <section class="application-form content">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                            <form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="4837438" role="form" enctype="multipart/form-data">
                                <fieldset id="tfa_1" class="section">
                                <legend id="tfa_1-L">Student information</legend>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_2-D">
                                <label id="tfa_2-L" class="label preField reqMark" for="tfa_2">Student Full Name</label><div class="inputWrapper"><input type="text" id="tfa_2" name="tfa_2" value="" aria-required="true" title="Student Full Name" class="required"></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_3-D">
                                <label id="tfa_3-L" class="label preField reqMark" for="tfa_3">Student ID:</label><div class="inputWrapper"><input type="text" id="tfa_3" name="tfa_3" value="" aria-required="true" title="Student ID:" class="required"></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_61-D">
                                <label id="tfa_61-L" class="label preField reqMark" for="tfa_61">Student Email:</label><div class="inputWrapper"><input type="text" id="tfa_61" name="tfa_61" value="" aria-required="true" title="Student Email:" class="validate-email required"></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_63-D">
                                <label id="tfa_63-L" class="label preField reqMark" for="tfa_63">Student Telephone:</label><div class="inputWrapper"><input type="text" id="tfa_63" name="tfa_63" value="" aria-required="true" title="Student Telephone:" class="required"></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_4-D">
                                <label id="tfa_4-L" class="label preField reqMark" for="tfa_4">College:</label><div class="inputWrapper"><select id="tfa_4" name="tfa_4" title="College:" aria-required="true" class="required"><option value="">Please select...</option>
                                <option value="tfa_103" id="tfa_103" class="">ARU College</option></select></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_5-D" role="radiogroup" aria-labelledby="tfa_5-L" data-tfa-labelledby="-L tfa_5-L">
                                <label id="tfa_5-L" class="label preField reqMark">Type of request:</label><div class="inputWrapper"><span id="tfa_5" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_6" class="" id="tfa_6" name="tfa_5" aria-required="true" data-conditionals="#tfa_21" aria-labelledby="tfa_6-L" data-tfa-labelledby="tfa_5-L tfa_6-L"><label class="label postField" id="tfa_6-L" for="tfa_6"><span class="input-radio-faux"></span>Transfer</label></span><span class="oneChoice"><input type="radio" value="tfa_7" class="" id="tfa_7" name="tfa_5" aria-required="true" data-conditionals="#tfa_12" aria-labelledby="tfa_7-L" data-tfa-labelledby="tfa_5-L tfa_7-L"><label class="label postField" id="tfa_7-L" for="tfa_7"><span class="input-radio-faux"></span>Refund</label></span></span></div>
                                </div>
                                <fieldset id="tfa_21" class="section" data-condition="`#tfa_6`">
                                <legend id="tfa_21-L">ARUC Transfer Request</legend>
                                <div class="oneField field-container-D    " id="tfa_53-D" role="radiogroup" aria-labelledby="tfa_53-L" data-tfa-labelledby="-L tfa_53-L">
                                <label id="tfa_53-L" class="label preField reqMark">Organisation type for transfer</label><br><div class="inputWrapper"><span id="tfa_53" class="choices vertical required"><span class="oneChoice"><input type="radio" value="tfa_55" class="" id="tfa_55" name="tfa_53" aria-required="true" data-conditionals="#tfa_65" aria-labelledby="tfa_55-L" data-tfa-labelledby="tfa_53-L tfa_55-L"><label class="label postField" id="tfa_55-L" for="tfa_55"><span class="input-radio-faux"></span>Anglia Ruskin University</label></span><span class="oneChoice"><input type="radio" value="tfa_56" class="" id="tfa_56" name="tfa_53" aria-required="true" data-conditionals="#tfa_90" aria-labelledby="tfa_56-L" data-tfa-labelledby="tfa_53-L tfa_56-L"><label class="label postField" id="tfa_56-L" for="tfa_56"><span class="input-radio-faux"></span>Personal Account (if under &pound;250)</label></span><span class="oneChoice"><input type="radio" value="tfa_67" class="" id="tfa_67" name="tfa_53" aria-required="true" data-conditionals="#tfa_68" aria-labelledby="tfa_67-L" data-tfa-labelledby="tfa_53-L tfa_67-L"><label class="label postField" id="tfa_67-L" for="tfa_67"><span class="input-radio-faux"></span>Navitas College</label></span></span></div>
                                </div>
                                <fieldset id="tfa_65" class="section" data-condition="`#tfa_55`"><div class="htmlSection" id="tfa_66"><div class="htmlContent" id="tfa_66-HTML"><div><span style="font-size: 14.4px;"><b>Bank: Barclays 40/41 High Street, Chelmsford, Essex, CM1 1BE</b></span></div> <div><span style="font-size: 14.4px;"><b>Sort code: 20-20-35</b></span></div><div><span style="font-size: 14.4px;"><b>Account number: 40116890</b></span></div><div><span style="font-size: 14.4px;"><b>Swift code: BARCGB22</b></span></div><div><span style="font-size: 14.4px;"><b>IBAN number: GB66 BARC 202035 401168 90</b></span></div></div></div></fieldset>
                                <div class="oneField field-container-D    " id="tfa_68-D">
                                <label id="tfa_68-L" class="label preField " for="tfa_68">Navitas College</label><br><div class="inputWrapper"><select id="tfa_68" name="tfa_68" data-condition="`#tfa_67`" title="Navitas College" class=""><option value="">Please select...</option>
                                <option value="tfa_104" id="tfa_104" class="">ARU College</option>
                                <option value="tfa_105" id="tfa_105" class="">Birmingham City University International College</option>
                                <option value="tfa_106" id="tfa_106" class="">Hertfordshire International College</option>
                                <option value="tfa_107" id="tfa_107" class="">International College at Robert Gordon University</option>
                                <option value="tfa_108" id="tfa_108" class="">International College Portsmouth</option>
                                <option value="tfa_109" id="tfa_109" class="">Leicester Global Study Centre</option>
                                <option value="tfa_110" id="tfa_110" class="">London Brunel International College</option>
                                <option value="tfa_115" id="tfa_115" class="">The College Swansea University</option>
                                <option value="tfa_111" id="tfa_111" class="">The Hague Pathway College</option>
                                <option value="tfa_112" id="tfa_112" class="">Twente Pathway College</option>
                                <option value="tfa_113" id="tfa_113" class="">University of Northampton International College</option>
                                <option value="tfa_114" id="tfa_114" class="">University of Plymouth International College</option></select></div>
                                </div>
                                <fieldset id="tfa_90" class="section" data-condition="`#tfa_56`">
                                <legend id="tfa_90-L">Account details for transfer/refund</legend>
                                <div class="htmlSection" id="tfa_91"><div class="htmlContent" id="tfa_91-HTML">Transfers over &pound;250 can only be processed to the original account the payment was made from</div></div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_92-D">
                                <label id="tfa_92-L" class="label preField reqMark" for="tfa_92">Amount requested for transfer:</label><div class="inputWrapper"><input type="text" id="tfa_92" name="tfa_92" value="" aria-required="true" title="Amount requested for transfer:" class="required"></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_94-D">
                                <label id="tfa_94-L" class="label preField reqMark" for="tfa_94">Name on Account:&nbsp;</label><div class="inputWrapper"><input type="text" id="tfa_94" name="tfa_94" value="" aria-required="true" title="Name on Account: " class="required"></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_95-D">
                                <label id="tfa_95-L" class="label preField reqMark" for="tfa_95">Account Number:</label><div class="inputWrapper"><input type="text" id="tfa_95" name="tfa_95" value="" aria-required="true" title="Account Number:" class="required"></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_96-D">
                                <label id="tfa_96-L" class="label preField reqMark" for="tfa_96">Sort Code:</label><div class="inputWrapper"><input type="text" id="tfa_96" name="tfa_96" value="" aria-required="true" title="Sort Code:" class="required"></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_97-D" role="radiogroup" aria-labelledby="tfa_97-L" data-tfa-labelledby="-L tfa_97-L">
                                <label id="tfa_97-L" class="label preField reqMark">Is the account overseas/ EU?&nbsp;</label><div class="inputWrapper"><span id="tfa_97" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_98" class="" id="tfa_98" name="tfa_97" aria-required="true" data-conditionals="#tfa_100,#tfa_101" aria-labelledby="tfa_98-L" data-tfa-labelledby="tfa_97-L tfa_98-L"><label class="label postField" id="tfa_98-L" for="tfa_98"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_99" class="" id="tfa_99" name="tfa_97" aria-required="true" aria-labelledby="tfa_99-L" data-tfa-labelledby="tfa_97-L tfa_99-L"><label class="label postField" id="tfa_99-L" for="tfa_99"><span class="input-radio-faux"></span>No</label></span></span></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_100-D">
                                <label id="tfa_100-L" class="label preField reqMark" for="tfa_100">Swift Code:</label><div class="inputWrapper">
                                <input type="text" id="tfa_100" name="tfa_100" value="" aria-required="true" aria-describedby="tfa_100-HH" data-condition="`#tfa_98`" title="Swift Code:" class="required"><span class="field-hint-inactive" id="tfa_100-H"><span id="tfa_100-HH" class="hint">SWIFT (BIC) code is a unique identification code for a particular bank and it is a standard format or bank identifier used for transferring money and messages between banks.</span></span>
                                </div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_101-D">
                                <label id="tfa_101-L" class="label preField reqMark" for="tfa_101">IBAN:</label><div class="inputWrapper">
                                <input type="text" id="tfa_101" name="tfa_101" value="" aria-required="true" aria-describedby="tfa_101-HH" data-condition="`#tfa_98`" title="IBAN:" class="required"><span class="field-hint-inactive" id="tfa_101-H"><span id="tfa_101-HH" class="hint">IBAN is International Bank Account Number and is used by customers to send money abroad and allows for easier and faster money transfers worldwide</span></span>
                                </div>
                                </div>
                                </fieldset>
                                </fieldset>
                                <fieldset id="tfa_12" class="section" data-condition="`#tfa_7`">
                                <legend id="tfa_12-L">Refund Request</legend>
                                <div class="htmlSection" id="tfa_10"><div class="htmlContent" id="tfa_10-HTML">Please note that refunds can only be processed to the original account the payment was made from</div></div>
                                <div id="tfa_24" class="section inline group"><div class="oneField field-container-D  labelsLeftAligned  " id="tfa_14-D">
                                <label id="tfa_14-L" class="label preField reqMark" for="tfa_14">Reason for refund request:</label><div class="inputWrapper"><input type="text" id="tfa_14" name="tfa_14" value="" aria-required="true" title="Reason for refund request:" class="required"></div>
                                </div></div>
                                <div class="oneField field-container-D    " id="tfa_64-D">
                                <label id="tfa_64-L" class="label preField " for="tfa_64">If available, please upload a copy of original confirmation of payment</label><br><div class="inputWrapper"><input type="file" id="tfa_64" name="tfa_64" size="" title="If available, please upload a copy of original confirmation of payment" class=""></div>
                                </div>
                                <fieldset id="tfa_22" class="section">
                                <legend id="tfa_22-L">Account details for transfer/refund</legend>
                                <div class="htmlSection" id="tfa_23"><div class="htmlContent" id="tfa_23-HTML">Refunds over &pound;250 can only be processed to the original account the payment was made from</div></div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_25-D">
                                <label id="tfa_25-L" class="label preField reqMark" for="tfa_25">Amount requested for refund (&pound;GBP)</label><div class="inputWrapper"><input type="text" id="tfa_25" name="tfa_25" value="" aria-required="true" title="Amount requested for refund (&pound;GBP)" class="required"></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_27-D">
                                <label id="tfa_27-L" class="label preField reqMark" for="tfa_27">Name on Account:&nbsp;</label><div class="inputWrapper"><input type="text" id="tfa_27" name="tfa_27" value="" aria-required="true" title="Name on Account: " class="required"></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_28-D">
                                <label id="tfa_28-L" class="label preField reqMark" for="tfa_28">Account Number:</label><div class="inputWrapper"><input type="text" id="tfa_28" name="tfa_28" value="" aria-required="true" title="Account Number:" class="required"></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_29-D">
                                <label id="tfa_29-L" class="label preField reqMark" for="tfa_29">Sort Code:</label><div class="inputWrapper"><input type="text" id="tfa_29" name="tfa_29" value="" aria-required="true" title="Sort Code:" class="required"></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_57-D" role="radiogroup" aria-labelledby="tfa_57-L" data-tfa-labelledby="-L tfa_57-L">
                                <label id="tfa_57-L" class="label preField reqMark">Is the account overseas/ EU?&nbsp;</label><div class="inputWrapper"><span id="tfa_57" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_58" class="" id="tfa_58" name="tfa_57" aria-required="true" data-conditionals="#tfa_51,#tfa_52" aria-labelledby="tfa_58-L" data-tfa-labelledby="tfa_57-L tfa_58-L"><label class="label postField" id="tfa_58-L" for="tfa_58"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_59" class="" id="tfa_59" name="tfa_57" aria-required="true" aria-labelledby="tfa_59-L" data-tfa-labelledby="tfa_57-L tfa_59-L"><label class="label postField" id="tfa_59-L" for="tfa_59"><span class="input-radio-faux"></span>No</label></span></span></div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_51-D">
                                <label id="tfa_51-L" class="label preField reqMark" for="tfa_51">Swift Code:</label><div class="inputWrapper">
                                <input type="text" id="tfa_51" name="tfa_51" value="" aria-required="true" aria-describedby="tfa_51-HH" data-condition="`#tfa_58`" title="Swift Code:" class="required"><span class="field-hint-inactive" id="tfa_51-H"><span id="tfa_51-HH" class="hint">SWIFT (BIC) code is a unique identification code for a particular bank and it is a standard format or bank identifier used for transferring money and messages between banks.</span></span>
                                </div>
                                </div>
                                <div class="oneField field-container-D  labelsLeftAligned  " id="tfa_52-D">
                                <label id="tfa_52-L" class="label preField reqMark" for="tfa_52">IBAN:</label><div class="inputWrapper">
                                <input type="text" id="tfa_52" name="tfa_52" value="" aria-required="true" aria-describedby="tfa_52-HH" data-condition="`#tfa_58`" title="IBAN:" class="required"><span class="field-hint-inactive" id="tfa_52-H"><span id="tfa_52-HH" class="hint">IBAN is International Bank Account Number and is used by customers to send money abroad and allows for easier and faster money transfers worldwide</span></span>
                                </div>
                                </div>
                                </fieldset>
                                </fieldset>
                                </fieldset>
                                <fieldset id="tfa_37" class="section">
                                <legend id="tfa_37-L">Declaration</legend>
                                <div id="tfa_42" class="section inline group">
                                <div class="oneField field-container-D  labelsRemoved  " id="tfa_38-D" role="group" aria-labelledby="tfa_38-L" data-tfa-labelledby="-L tfa_38-L"><div class="inputWrapper"><span id="tfa_38" class="choices horizontal required"><span class="oneChoice"><input type="checkbox" value="tfa_39" class="" id="tfa_39" name="tfa_39" aria-labelledby="tfa_39-L" data-tfa-labelledby="tfa_38-L tfa_39-L"><label class="label postField" id="tfa_39-L" for="tfa_39"><span class="input-checkbox-faux"></span>I declare that I understand that the sum of &pound;150 or less can be deducted towards administration charges*</label></span></span></div></div>
                                <div class="oneField field-container-D  labelsRemoved  " id="tfa_40-D" role="group" aria-labelledby="tfa_40-L" data-tfa-labelledby="-L tfa_40-L"><div class="inputWrapper"><span id="tfa_40" class="choices vertical required"><span class="oneChoice"><input type="checkbox" value="tfa_41" class="" id="tfa_41" name="tfa_41" aria-labelledby="tfa_41-L" data-tfa-labelledby="tfa_40-L tfa_41-L"><label class="label postField" id="tfa_41-L" for="tfa_41"><span class="input-checkbox-faux"></span>I declare that I understand that refunds can only be processed to the original account the payment was made from*</label></span></span></div></div>
                                <div class="oneField field-container-D  labelsRemoved  " id="tfa_43-D" role="group" aria-labelledby="tfa_43-L" data-tfa-labelledby="-L tfa_43-L"><div class="inputWrapper"><span id="tfa_43" class="choices vertical required"><span class="oneChoice"><input type="checkbox" value="tfa_44" class="" id="tfa_44" name="tfa_44" aria-labelledby="tfa_44-L" data-tfa-labelledby="tfa_43-L tfa_44-L"><label class="label postField" id="tfa_44-L" for="tfa_44"><span class="input-checkbox-faux"></span>I declare that I understand that the sum of &pound;250 or less can be refunded to a UK bank account but any amount over this threshold must be refunded to the person who made the original payment in the source country from where the payment originated in line with UK Anti Money Laundering regulations*.</label></span></span></div></div>
                                </div>
                                <div id="tfa_49" class="section inline group"><div class="oneField field-container-D  labelsRemoved  " id="tfa_45-D" role="group" aria-labelledby="tfa_45-L" data-tfa-labelledby="-L tfa_45-L"><div class="inputWrapper"><span id="tfa_45" class="choices vertical required"><span class="oneChoice"><input type="checkbox" value="tfa_46" class="" id="tfa_46" name="tfa_46" aria-labelledby="tfa_46-L" data-tfa-labelledby="tfa_45-L tfa_46-L"><label class="label postField" id="tfa_46-L" for="tfa_46"><span class="input-checkbox-faux"></span>I understand that if I supply incorrect or incomplete information that does not match the College’s records I will be contacted via email to confirm this and it may cause delay to receiving my refund*</label></span></span></div></div></div>
                                </fieldset>
                                <div class="actions" id="4837438-A"><input type="submit" data-label="Submit" class="primaryAction" id="submit_button" value="Submit"></div>
                                <div style="clear:both"></div>
                                <input type="hidden" value="4837438" name="tfa_dbFormId" id="tfa_dbFormId"><input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId"><input type="hidden" value="24164cc0bfd1fe318ab2bd7284beaefc" name="tfa_dbControl" id="tfa_dbControl"><input type="hidden" value="12" name="tfa_dbVersionId" id="tfa_dbVersionId"><input type="hidden" value="" name="tfa_switchedoff" id="tfa_switchedoff">
                            </form>
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