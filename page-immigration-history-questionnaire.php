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
                                <p>In order for us to proceed with your application, we need to ask you a few questions about your Immigration history. If you are unsure as to any of your answers or would like help answering any of these questions, then please contact the Admission Team at <a href="mailto:admissions@arucollege.com">admissions@arucollege.com</a>.</p>
                                <p><a href="http://www.arucollege.com/wp-content/uploads/2020/06/aru-college-immigration-history-questionnaire-may-2020.pdf" target="_blank">Download - Immigration History Questionnaire (PDF, 81KB)</a></p>
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
                                            <style>#tfa_221-D{display:none;}</style>
                                            <script src="https://85f1249248e2cd649389-8dc6c11e1e3524ca11dc4a23c44196ab.ssl.cf6.rackcdn.com/fa-online_application_init.js"></script>
                                            </div>
                                            <form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="4827952" role="form" enctype="multipart/form-data">
                                                <div class="wfPage" id="wfPgIndex-1">
                                                    <div class="section pageSection" id="tfa_43">
                                                        <div class="oneField field-container-D    " id="tfa_3-D">
                                                            <label id="tfa_3-L" class="label preField " for="tfa_3">ARU College Student ID:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="text" id="tfa_3" name="tfa_3" value="" title="ARU College Student ID:" class="">
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_1-D">
                                                            <label id="tfa_1-L" class="label preField reqMark" for="tfa_1">First Name:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="text" id="tfa_1" name="tfa_1" value="" aria-required="true" title="First Name:" class="required">
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_2-D">
                                                            <label id="tfa_2-L" class="label preField reqMark" for="tfa_2">Last Name:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="text" id="tfa_2" name="tfa_2" value="" aria-required="true" title="Last Name:" class="required">
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_4-D">
                                                            <label id="tfa_4-L" class="label preField reqMark" for="tfa_4">Date of Birth:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="text" id="tfa_4" name="tfa_4" value="" aria-required="true" title="Date of Birth:" class="required">
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_5-D" role="radiogroup" aria-labelledby="tfa_5-L" data-tfa-labelledby="-L tfa_5-L">
                                                            <label id="tfa_5-L" class="label preField reqMark">Have you, or somebody on your behalf, ever applied to enter the UK?</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <span id="tfa_5" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_6" class="" id="tfa_6" name="tfa_5" aria-required="true" data-conditionals="#tfa_8,#tfa_13" aria-labelledby="tfa_6-L" data-tfa-labelledby="tfa_5-L tfa_6-L" aria-describedby="tfa_5-HH"><label class="label postField" id="tfa_6-L" for="tfa_6"><span class="input-radio-faux"></span>Yes</label>
                                                                </span><span class="oneChoice"><input type="radio" value="tfa_7" class="" id="tfa_7" name="tfa_5" aria-required="true" aria-labelledby="tfa_7-L" data-tfa-labelledby="tfa_5-L tfa_7-L" aria-describedby="tfa_5-HH"><label class="label postField" id="tfa_7-L" for="tfa_7"><span class="input-radio-faux"></span>No</label>
                                                                </span>
                                                                </span><span class="field-hint-inactive" id="tfa_5-H"><span id="tfa_5-HH" class="hint">Examples: an application for a study visa, a dependent visa based upon a parent's immigration status, or an application for asylum.</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_8-D">
                                                            <label id="tfa_8-L" class="label preField reqMark" for="tfa_8">Please choose the most an option from below that most closely matches the purpose of your most recent application to enter the UK</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <select id="tfa_8" name="tfa_8" data-condition="`#tfa_6`" title="Please choose the most an option from below that most closely matches the purpose of your most recent application to enter the UK" aria-required="true" class="required">
                                                                    <option value="">Please select...</option>
                                                                    <option value="tfa_9" id="tfa_9" data-conditionals="#tfa_17" class="">Study</option>
                                                                    <option value="tfa_10" id="tfa_10" data-conditionals="#tfa_391,#tfa_392" class="">Work</option>
                                                                    <option value="tfa_11" id="tfa_11" data-conditionals="#tfa_391,#tfa_392" class="">Visit</option>
                                                                    <option value="tfa_398" id="tfa_398" class="">Asylum</option>
                                                                    <option value="tfa_399" id="tfa_399" class="">Indefinite Leave</option>
                                                                    <option value="tfa_400" id="tfa_400" class="">British Citizenship</option>
                                                                    <option value="tfa_401" id="tfa_401" class="">Dependent</option>
                                                                    <option value="tfa_12" id="tfa_12" data-conditionals="#tfa_391,#tfa_392" class="">Other</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_391-D">
                                                            <label id="tfa_391-L" class="label preField " for="tfa_391">Please briefly describe your reason for the visa application:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <textarea id="tfa_391" name="tfa_391" data-condition="`#tfa_10` OR `#tfa_11` OR `#tfa_12`" title="Please briefly describe your reason for the visa application:" class=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_13-D" role="radiogroup" aria-labelledby="tfa_13-L" data-tfa-labelledby="-L tfa_13-L">
                                                            <label id="tfa_13-L" class="label preField reqMark">Have you ever had a visa refusal for entry to the UK</label>
                                                            
                                                            <div class="inputWrapper"><span id="tfa_13" class="choices horizontal required" data-condition="`#tfa_6`"><span class="oneChoice"><input type="radio" value="tfa_14" class="" id="tfa_14" name="tfa_13" aria-required="true" data-conditionals="#tfa_16,#tfa_222,#tfa_396" aria-labelledby="tfa_14-L" data-tfa-labelledby="tfa_13-L tfa_14-L"><label class="label postField" id="tfa_14-L" for="tfa_14"><span class="input-radio-faux"></span>Yes</label>
                                                                </span><span class="oneChoice"><input type="radio" value="tfa_15" class="" id="tfa_15" name="tfa_13" aria-required="true" aria-labelledby="tfa_15-L" data-tfa-labelledby="tfa_13-L tfa_15-L"><label class="label postField" id="tfa_15-L" for="tfa_15"><span class="input-radio-faux"></span>No</label>
                                                                </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_396-D">
                                                            <label id="tfa_396-L" class="label preField reqMark" for="tfa_396">Please confirm the date of your visa refusal.</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="text" id="tfa_396" name="tfa_396" value="" aria-required="true" data-condition="`#tfa_14`" title="Please confirm the date of your visa refusal." class="required">
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_16-D">
                                                            <label id="tfa_16-L" class="label preField " for="tfa_16">Please attach a copy of any refusal evidence that you have.</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="file" id="tfa_16" name="tfa_16" size="" data-condition="`#tfa_14`" title="Please attach a copy of any refusal evidence that you have." class="">
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_222-D">
                                                            <label id="tfa_222-L" class="label preField " for="tfa_222">Please provide as much explanation for this as possible including the date of refusal and reason for it</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <textarea id="tfa_222" name="tfa_222" data-condition="`#tfa_14`" title="Please provide as much explanation for this as possible including the date of refusal and reason for it" class=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="htmlSection" id="tfa_414">
                                                            <div class="htmlContent" id="tfa_414-HTML">Please ensure that you answer all relevant questions and upload all documentation requested. This should include documents such as your previous CAS, visas, BRPs, visa refusals (from the UK or any other countries), stamps from your passport showing the dates that you entered or exited the UK, and any Home Office documentation that you may have.</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="wfPage" id="wfPgIndex-2">
                                                    <div class="section pageSection" id="tfa_44">
                                                        <fieldset id="tfa_17" class="section" data-condition="`#tfa_9`">
                                                            <legend id="tfa_17-L"><b>Please enter your most recent course studied</b>
                                                            </legend>
                                                            <div class="oneField field-container-D    " id="tfa_18-D">
                                                                <label id="tfa_18-L" class="label preField " for="tfa_18">Institution:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_18" name="tfa_18" value="" aria-describedby="tfa_18-HH" title="Institution:" class=""><span class="field-hint-inactive" id="tfa_18-H"><span id="tfa_18-HH" class="hint">Please confirm the University, School or College that you studied at</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_19-D">
                                                                <label id="tfa_19-L" class="label preField " for="tfa_19">Course Studied:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_19" name="tfa_19" value="" aria-describedby="tfa_19-HH" title="Course Studied:" class=""><span class="field-hint-inactive" id="tfa_19-H"><span id="tfa_19-HH" class="hint">Please confirm the full title of the course i.e. A-Levels or Undergraduate Foundation Course</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_20-D">
                                                                <label id="tfa_20-L" class="label preField " for="tfa_20">Level of Course:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <select id="tfa_20" name="tfa_20" title="Level of Course:" class="">
                                                                        <option value="">Please select...</option>
                                                                        <option value="tfa_21" id="tfa_21" class="">English</option>
                                                                        <option value="tfa_22" id="tfa_22" class="">Foundation</option>
                                                                        <option value="tfa_23" id="tfa_23" class="">First Year</option>
                                                                        <option value="tfa_24" id="tfa_24" class="">Undergraduate Degree</option>
                                                                        <option value="tfa_25" id="tfa_25" class="">Postgraduate Degree</option>
                                                                        <option value="tfa_26" id="tfa_26" data-conditionals="#tfa_404" class="">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_404-D">
                                                                <label id="tfa_404-L" class="label preField " for="tfa_404">Please provide information regarding the level of your previous study</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_404" name="tfa_404" value="" data-condition="`#tfa_26`" title="Please provide information regarding the level of your previous study" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_27-D">
                                                                <label id="tfa_27-L" class="label preField " for="tfa_27">Type of visa held:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <select id="tfa_27" name="tfa_27" title="Type of visa held:" class="">
                                                                        <option value="">Please select...</option>
                                                                        <option value="tfa_28" id="tfa_28" class="">Short Term Student Visit</option>
                                                                        <option value="tfa_29" id="tfa_29" class="">Tier 4 (General) Student</option>
                                                                        <option value="tfa_30" id="tfa_30" class="">Tier 4 (Child) Student</option>
                                                                        <option value="tfa_31" id="tfa_31" class="">Dependent</option>
                                                                        <option value="tfa_32" id="tfa_32" data-conditionals="#tfa_33" class="">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_33-D">
                                                                <label id="tfa_33-L" class="label preField " for="tfa_33">Please state visa type:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_33" name="tfa_33" value="" data-condition="`#tfa_32`" title="Please state visa type:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_34-D">
                                                                <label id="tfa_34-L" class="label preField " for="tfa_34">Course Start Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_34" name="tfa_34" value="" title="Course Start Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_35-D">
                                                                <label id="tfa_35-L" class="label preField " for="tfa_35">Visa Start Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_35" name="tfa_35" value="" title="Visa Start Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_36-D">
                                                                <label id="tfa_36-L" class="label preField " for="tfa_36">Course End Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_36" name="tfa_36" value="" title="Course End Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_37-D">
                                                                <label id="tfa_37-L" class="label preField " for="tfa_37">Visa End Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_37" name="tfa_37" value="" title="Visa End Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_38-D" role="radiogroup" aria-labelledby="tfa_38-L" data-tfa-labelledby="-L tfa_38-L">
                                                                <label id="tfa_38-L" class="label preField ">Did you successfully complete this course?</label>
                                                                
                                                                <div class="inputWrapper"><span id="tfa_38" class="choices horizontal "><span class="oneChoice"><input type="radio" value="tfa_39" class="" id="tfa_39" name="tfa_38" aria-labelledby="tfa_39-L" data-tfa-labelledby="tfa_38-L tfa_39-L"><label class="label postField" id="tfa_39-L" for="tfa_39"><span class="input-radio-faux"></span>Yes</label>
                                                                    </span><span class="oneChoice"><input type="radio" value="tfa_40" class="" id="tfa_40" name="tfa_38" data-conditionals="#tfa_41" aria-labelledby="tfa_40-L" data-tfa-labelledby="tfa_38-L tfa_40-L"><label class="label postField" id="tfa_40-L" for="tfa_40"><span class="input-radio-faux"></span>No</label>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_41-D">
                                                                <label id="tfa_41-L" class="label preField " for="tfa_41">Please tell us about why you believe that you were not as successful within this course as you had hoped.</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_41" name="tfa_41" value="" data-condition="`#tfa_40`" title="Please tell us about why you believe that you were not as successful within this course as you had hoped." class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_42-D">
                                                                <label id="tfa_42-L" class="label preField " for="tfa_42">Please provide any visa, CAS or other documents in relation to this study.</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="file" id="tfa_42" name="tfa_42" size="" title="Please provide any visa, CAS or other documents in relation to this study." class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_62-D" role="radiogroup" aria-labelledby="tfa_62-L" data-tfa-labelledby="-L tfa_62-L">
                                                                <label id="tfa_62-L" class="label preField reqMark">Did you study another course in the UK previous to this course?</label>
                                                                
                                                                <div class="inputWrapper"><span id="tfa_62" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_63" class="" id="tfa_63" name="tfa_62" aria-required="true" data-conditionals="#tfa_91" aria-labelledby="tfa_63-L" data-tfa-labelledby="tfa_62-L tfa_63-L"><label class="label postField" id="tfa_63-L" for="tfa_63"><span class="input-radio-faux"></span>Yes</label>
                                                                    </span><span class="oneChoice"><input type="radio" value="tfa_64" class="" id="tfa_64" name="tfa_62" aria-required="true" aria-labelledby="tfa_64-L" data-tfa-labelledby="tfa_62-L tfa_64-L"><label class="label postField" id="tfa_64-L" for="tfa_64"><span class="input-radio-faux"></span>No</label>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset id="tfa_91" class="section" data-condition="`#tfa_63`">
                                                            <legend id="tfa_91-L"><b>Please enter the details relating to this course of study</b>
                                                            </legend>
                                                            <div class="oneField field-container-D    " id="tfa_92-D">
                                                                <label id="tfa_92-L" class="label preField " for="tfa_92">Institution:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_92" name="tfa_92" value="" aria-describedby="tfa_92-HH" title="Institution:" class=""><span class="field-hint-inactive" id="tfa_92-H"><span id="tfa_92-HH" class="hint">Please confirm the University, School or College that you studied at</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_93-D">
                                                                <label id="tfa_93-L" class="label preField " for="tfa_93">Course Studied:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_93" name="tfa_93" value="" aria-describedby="tfa_93-HH" title="Course Studied:" class=""><span class="field-hint-inactive" id="tfa_93-H"><span id="tfa_93-HH" class="hint">Please confirm the full title of the course i.e. A-Levels or Undergraduate Foundation Course</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_94-D">
                                                                <label id="tfa_94-L" class="label preField " for="tfa_94">Level of Course:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <select id="tfa_94" name="tfa_94" title="Level of Course:" class="">
                                                                        <option value="">Please select...</option>
                                                                        <option value="tfa_95" id="tfa_95" class="">English</option>
                                                                        <option value="tfa_96" id="tfa_96" class="">Foundation</option>
                                                                        <option value="tfa_97" id="tfa_97" class="">First Year</option>
                                                                        <option value="tfa_98" id="tfa_98" class="">Undergraduate Degree</option>
                                                                        <option value="tfa_99" id="tfa_99" class="">Postgraduate Degree</option>
                                                                        <option value="tfa_100" id="tfa_100" data-conditionals="#tfa_406" class="">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_406-D">
                                                                <label id="tfa_406-L" class="label preField " for="tfa_406">Please provide information regarding the level of your previous study.</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_406" name="tfa_406" value="" data-condition="`#tfa_100`" title="Please provide information regarding the level of your previous study." class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_101-D">
                                                                <label id="tfa_101-L" class="label preField " for="tfa_101">Type of visa held:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <select id="tfa_101" name="tfa_101" title="Type of visa held:" class="">
                                                                        <option value="">Please select...</option>
                                                                        <option value="tfa_102" id="tfa_102" class="">Short Term Student Visit</option>
                                                                        <option value="tfa_103" id="tfa_103" class="">Tier 4 (General) Student</option>
                                                                        <option value="tfa_104" id="tfa_104" class="">Tier 4 (Child) Student</option>
                                                                        <option value="tfa_105" id="tfa_105" class="">Dependent</option>
                                                                        <option value="tfa_106" id="tfa_106" data-conditionals="#tfa_107" class="">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_107-D">
                                                                <label id="tfa_107-L" class="label preField " for="tfa_107">Please state visa type:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_107" name="tfa_107" value="" data-condition="`#tfa_106`" title="Please state visa type:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_108-D">
                                                                <label id="tfa_108-L" class="label preField " for="tfa_108">Course Start Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_108" name="tfa_108" value="" title="Course Start Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_109-D">
                                                                <label id="tfa_109-L" class="label preField " for="tfa_109">Visa Start Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_109" name="tfa_109" value="" title="Visa Start Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_110-D">
                                                                <label id="tfa_110-L" class="label preField " for="tfa_110">Course End Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_110" name="tfa_110" value="" title="Course End Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_111-D">
                                                                <label id="tfa_111-L" class="label preField " for="tfa_111">Visa End Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_111" name="tfa_111" value="" title="Visa End Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_112-D" role="radiogroup" aria-labelledby="tfa_112-L" data-tfa-labelledby="-L tfa_112-L">
                                                                <label id="tfa_112-L" class="label preField ">Did you successfully complete this course?</label>
                                                                
                                                                <div class="inputWrapper"><span id="tfa_112" class="choices horizontal "><span class="oneChoice"><input type="radio" value="tfa_113" class="" id="tfa_113" name="tfa_112" aria-labelledby="tfa_113-L" data-tfa-labelledby="tfa_112-L tfa_113-L"><label class="label postField" id="tfa_113-L" for="tfa_113"><span class="input-radio-faux"></span>Yes</label>
                                                                    </span><span class="oneChoice"><input type="radio" value="tfa_114" class="" id="tfa_114" name="tfa_112" data-conditionals="#tfa_115" aria-labelledby="tfa_114-L" data-tfa-labelledby="tfa_112-L tfa_114-L"><label class="label postField" id="tfa_114-L" for="tfa_114"><span class="input-radio-faux"></span>No</label>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_115-D">
                                                                <label id="tfa_115-L" class="label preField " for="tfa_115">Please tell us about why you believe that you were not as successful within this course as you had hoped.</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_115" name="tfa_115" value="" data-condition="`#tfa_114`" title="Please tell us about why you believe that you were not as successful within this course as you had hoped." class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_116-D">
                                                                <label id="tfa_116-L" class="label preField " for="tfa_116">Please provide any visa, CAS or other documents in relation to this study.</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="file" id="tfa_116" name="tfa_116" size="" title="Please provide any visa, CAS or other documents in relation to this study." class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_226-D" role="radiogroup" aria-labelledby="tfa_226-L" data-tfa-labelledby="-L tfa_226-L">
                                                                <label id="tfa_226-L" class="label preField reqMark">Did you study another course in the UK previous to this course?</label>
                                                                
                                                                <div class="inputWrapper"><span id="tfa_226" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_227" class="" id="tfa_227" name="tfa_226" aria-required="true" data-conditionals="#tfa_143" aria-labelledby="tfa_227-L" data-tfa-labelledby="tfa_226-L tfa_227-L"><label class="label postField" id="tfa_227-L" for="tfa_227"><span class="input-radio-faux"></span>Yes</label>
                                                                    </span><span class="oneChoice"><input type="radio" value="tfa_228" class="" id="tfa_228" name="tfa_226" aria-required="true" aria-labelledby="tfa_228-L" data-tfa-labelledby="tfa_226-L tfa_228-L"><label class="label postField" id="tfa_228-L" for="tfa_228"><span class="input-radio-faux"></span>No</label>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset id="tfa_143" class="section" data-condition="`#tfa_227`">
                                                            <legend id="tfa_143-L"><b>Please enter the details relating to this course of study</b>
                                                            </legend>
                                                            <div class="oneField field-container-D    " id="tfa_144-D">
                                                                <label id="tfa_144-L" class="label preField " for="tfa_144">Institution:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_144" name="tfa_144" value="" aria-describedby="tfa_144-HH" title="Institution:" class=""><span class="field-hint-inactive" id="tfa_144-H"><span id="tfa_144-HH" class="hint">Please confirm the University, School or College that you studied at</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_145-D">
                                                                <label id="tfa_145-L" class="label preField " for="tfa_145">Course Studied:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_145" name="tfa_145" value="" aria-describedby="tfa_145-HH" title="Course Studied:" class=""><span class="field-hint-inactive" id="tfa_145-H"><span id="tfa_145-HH" class="hint">Please confirm the full title of the course i.e. A-Levels or Undergraduate Foundation Course</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_146-D">
                                                                <label id="tfa_146-L" class="label preField " for="tfa_146">Level of Course:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <select id="tfa_146" name="tfa_146" title="Level of Course:" class="">
                                                                        <option value="">Please select...</option>
                                                                        <option value="tfa_147" id="tfa_147" class="">English</option>
                                                                        <option value="tfa_148" id="tfa_148" class="">Foundation</option>
                                                                        <option value="tfa_149" id="tfa_149" class="">First Year</option>
                                                                        <option value="tfa_150" id="tfa_150" class="">Undergraduate Degree</option>
                                                                        <option value="tfa_151" id="tfa_151" class="">Postgraduate Degree</option>
                                                                        <option value="tfa_152" id="tfa_152" data-conditionals="#tfa_408" class="">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_408-D">
                                                                <label id="tfa_408-L" class="label preField " for="tfa_408">Please provide information regarding the level of your previous study.</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_408" name="tfa_408" value="" data-condition="`#tfa_152`" title="Please provide information regarding the level of your previous study." class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_153-D">
                                                                <label id="tfa_153-L" class="label preField " for="tfa_153">Type of visa held:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <select id="tfa_153" name="tfa_153" title="Type of visa held:" class="">
                                                                        <option value="">Please select...</option>
                                                                        <option value="tfa_154" id="tfa_154" class="">Short Term Student Visit</option>
                                                                        <option value="tfa_155" id="tfa_155" class="">Tier 4 (General) Student</option>
                                                                        <option value="tfa_156" id="tfa_156" class="">Tier 4 (Child) Student</option>
                                                                        <option value="tfa_157" id="tfa_157" class="">Dependent</option>
                                                                        <option value="tfa_158" id="tfa_158" data-conditionals="#tfa_159" class="">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_159-D">
                                                                <label id="tfa_159-L" class="label preField " for="tfa_159">Please state visa type:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_159" name="tfa_159" value="" data-condition="`#tfa_158`" title="Please state visa type:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_160-D">
                                                                <label id="tfa_160-L" class="label preField " for="tfa_160">Course Start Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_160" name="tfa_160" value="" title="Course Start Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_161-D">
                                                                <label id="tfa_161-L" class="label preField " for="tfa_161">Visa Start Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_161" name="tfa_161" value="" title="Visa Start Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_162-D">
                                                                <label id="tfa_162-L" class="label preField " for="tfa_162">Course End Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_162" name="tfa_162" value="" title="Course End Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_163-D">
                                                                <label id="tfa_163-L" class="label preField " for="tfa_163">Visa End Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_163" name="tfa_163" value="" title="Visa End Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_164-D" role="radiogroup" aria-labelledby="tfa_164-L" data-tfa-labelledby="-L tfa_164-L">
                                                                <label id="tfa_164-L" class="label preField ">Did you successfully complete this course?</label>
                                                                
                                                                <div class="inputWrapper"><span id="tfa_164" class="choices horizontal "><span class="oneChoice"><input type="radio" value="tfa_165" class="" id="tfa_165" name="tfa_164" aria-labelledby="tfa_165-L" data-tfa-labelledby="tfa_164-L tfa_165-L"><label class="label postField" id="tfa_165-L" for="tfa_165"><span class="input-radio-faux"></span>Yes</label>
                                                                    </span><span class="oneChoice"><input type="radio" value="tfa_166" class="" id="tfa_166" name="tfa_164" data-conditionals="#tfa_167" aria-labelledby="tfa_166-L" data-tfa-labelledby="tfa_164-L tfa_166-L"><label class="label postField" id="tfa_166-L" for="tfa_166"><span class="input-radio-faux"></span>No</label>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_167-D">
                                                                <label id="tfa_167-L" class="label preField " for="tfa_167">Please tell us about why you believe that you were not as successful within this course as you had hoped.</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_167" name="tfa_167" value="" data-condition="`#tfa_166`" title="Please tell us about why you believe that you were not as successful within this course as you had hoped." class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_168-D">
                                                                <label id="tfa_168-L" class="label preField " for="tfa_168">Please provide any visa, CAS or other documents in relation to this study.</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="file" id="tfa_168" name="tfa_168" size="" title="Please provide any visa, CAS or other documents in relation to this study." class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_388-D" role="radiogroup" aria-labelledby="tfa_388-L" data-tfa-labelledby="-L tfa_388-L">
                                                                <label id="tfa_388-L" class="label preField reqMark">Did you study another course in the UK previous to this course?</label>
                                                                
                                                                <div class="inputWrapper"><span id="tfa_388" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_389" class="" id="tfa_389" name="tfa_388" aria-required="true" data-conditionals="#tfa_195" aria-labelledby="tfa_389-L" data-tfa-labelledby="tfa_388-L tfa_389-L"><label class="label postField" id="tfa_389-L" for="tfa_389"><span class="input-radio-faux"></span>Yes</label>
                                                                    </span><span class="oneChoice"><input type="radio" value="tfa_390" class="" id="tfa_390" name="tfa_388" aria-required="true" aria-labelledby="tfa_390-L" data-tfa-labelledby="tfa_388-L tfa_390-L"><label class="label postField" id="tfa_390-L" for="tfa_390"><span class="input-radio-faux"></span>No</label>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset id="tfa_195" class="section" data-condition="`#tfa_389`">
                                                            <legend id="tfa_195-L"><b>Please enter the details relating to this course of study</b>
                                                            </legend>
                                                            <div class="oneField field-container-D    " id="tfa_196-D">
                                                                <label id="tfa_196-L" class="label preField " for="tfa_196">Institution:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_196" name="tfa_196" value="" aria-describedby="tfa_196-HH" title="Institution:" class=""><span class="field-hint-inactive" id="tfa_196-H"><span id="tfa_196-HH" class="hint">Please confirm the University, School or College that you studied at</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_197-D">
                                                                <label id="tfa_197-L" class="label preField " for="tfa_197">Course Studied:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_197" name="tfa_197" value="" aria-describedby="tfa_197-HH" title="Course Studied:" class=""><span class="field-hint-inactive" id="tfa_197-H"><span id="tfa_197-HH" class="hint">Please confirm the full title of the course i.e. A-Levels or Undergraduate Foundation Course</span></span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_198-D">
                                                                <label id="tfa_198-L" class="label preField " for="tfa_198">Level of Course:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <select id="tfa_198" name="tfa_198" title="Level of Course:" class="">
                                                                        <option value="">Please select...</option>
                                                                        <option value="tfa_199" id="tfa_199" class="">English</option>
                                                                        <option value="tfa_200" id="tfa_200" class="">Foundation</option>
                                                                        <option value="tfa_201" id="tfa_201" class="">First Year</option>
                                                                        <option value="tfa_202" id="tfa_202" class="">Undergraduate Degree</option>
                                                                        <option value="tfa_203" id="tfa_203" class="">Postgraduate Degree</option>
                                                                        <option value="tfa_204" id="tfa_204" data-conditionals="#tfa_410" class="">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_410-D">
                                                                <label id="tfa_410-L" class="label preField " for="tfa_410">Please provide information regarding the level of your previous study.</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_410" name="tfa_410" value="" data-condition="`#tfa_204`" title="Please provide information regarding the level of your previous study." class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_205-D">
                                                                <label id="tfa_205-L" class="label preField " for="tfa_205">Type of visa held:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <select id="tfa_205" name="tfa_205" title="Type of visa held:" class="">
                                                                        <option value="">Please select...</option>
                                                                        <option value="tfa_206" id="tfa_206" class="">Short Term Student Visit</option>
                                                                        <option value="tfa_207" id="tfa_207" class="">Tier 4 (General) Student</option>
                                                                        <option value="tfa_208" id="tfa_208" class="">Tier 4 (Child) Student</option>
                                                                        <option value="tfa_209" id="tfa_209" class="">Dependent</option>
                                                                        <option value="tfa_210" id="tfa_210" data-conditionals="#tfa_211" class="">Other</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_211-D">
                                                                <label id="tfa_211-L" class="label preField " for="tfa_211">Please state visa type:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_211" name="tfa_211" value="" data-condition="`#tfa_210`" title="Please state visa type:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_212-D">
                                                                <label id="tfa_212-L" class="label preField " for="tfa_212">Course Start Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_212" name="tfa_212" value="" title="Course Start Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_213-D">
                                                                <label id="tfa_213-L" class="label preField " for="tfa_213">Visa Start Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_213" name="tfa_213" value="" title="Visa Start Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_214-D">
                                                                <label id="tfa_214-L" class="label preField " for="tfa_214">Course End Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_214" name="tfa_214" value="" title="Course End Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_215-D">
                                                                <label id="tfa_215-L" class="label preField " for="tfa_215">Visa End Date:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_215" name="tfa_215" value="" title="Visa End Date:" class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_216-D" role="radiogroup" aria-labelledby="tfa_216-L" data-tfa-labelledby="-L tfa_216-L">
                                                                <label id="tfa_216-L" class="label preField ">Did you successfully complete this course?</label>
                                                                
                                                                <div class="inputWrapper"><span id="tfa_216" class="choices horizontal "><span class="oneChoice"><input type="radio" value="tfa_217" class="" id="tfa_217" name="tfa_216" aria-labelledby="tfa_217-L" data-tfa-labelledby="tfa_216-L tfa_217-L"><label class="label postField" id="tfa_217-L" for="tfa_217"><span class="input-radio-faux"></span>Yes</label>
                                                                    </span><span class="oneChoice"><input type="radio" value="tfa_218" class="" id="tfa_218" name="tfa_216" data-conditionals="#tfa_219" aria-labelledby="tfa_218-L" data-tfa-labelledby="tfa_216-L tfa_218-L"><label class="label postField" id="tfa_218-L" for="tfa_218"><span class="input-radio-faux"></span>No</label>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_219-D">
                                                                <label id="tfa_219-L" class="label preField " for="tfa_219">Please tell us about why you believe that you were not as successful within this course as you had hoped.</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_219" name="tfa_219" value="" data-condition="`#tfa_218`" title="Please tell us about why you believe that you were not as successful within this course as you had hoped." class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_220-D">
                                                                <label id="tfa_220-L" class="label preField " for="tfa_220">Please provide any visa, CAS or other documents in relation to this study.</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="file" id="tfa_220" name="tfa_220" size="" title="Please provide any visa, CAS or other documents in relation to this study." class="">
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset id="tfa_392" class="section" data-condition="`#tfa_11` OR `#tfa_10` OR `#tfa_12`">
                                                            <legend id="tfa_392-L"><b>Please confirm the start and end dates of your most recent visa or leave to remain</b>
                                                            </legend>
                                                            <div class="oneField field-container-D    " id="tfa_393-D">
                                                                <label id="tfa_393-L" class="label preField reqMark" for="tfa_393">Please confirm the start date of this visa:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_393" name="tfa_393" value="" aria-required="true" title="Please confirm the start date of this visa:" class="required">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_394-D">
                                                                <label id="tfa_394-L" class="label preField reqMark" for="tfa_394">Please confirm the end date of this visa:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_394" name="tfa_394" value="" aria-required="true" title="Please confirm the end date of this visa:" class="required">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_395-D">
                                                                <label id="tfa_395-L" class="label preField reqMark" for="tfa_395">Please provide us with a copy of any relevant visa documentation in regards to this:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <input type="file" id="tfa_395" name="tfa_395" size="" title="Please provide us with a copy of any relevant visa documentation in regards to this:" class="required">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_402-D">
                                                                <label id="tfa_402-L" class="label preField " for="tfa_402">If you had any other visas prior to this, or other information regarding previous time spent in the UK, please provide information in regards to this:</label>
                                                                
                                                                <div class="inputWrapper">
                                                                    <textarea id="tfa_402" name="tfa_402" title="If you had any other visas prior to this, or other information regarding previous time spent in the UK, please provide information in regards to this:" class=""></textarea>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="oneField field-container-D    " id="tfa_418-D" role="radiogroup" aria-labelledby="tfa_418-L" data-tfa-labelledby="-L tfa_418-L">
                                                            <label id="tfa_418-L" class="label preField reqMark">Will your new course with us be at a higher level to your previous studies?</label>
                                                            
                                                            <div class="inputWrapper"><span id="tfa_418" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_419" class="" id="tfa_419" name="tfa_418" aria-required="true" aria-labelledby="tfa_419-L" data-tfa-labelledby="tfa_418-L tfa_419-L"><label class="label postField" id="tfa_419-L" for="tfa_419"><span class="input-radio-faux"></span>Yes</label>
                                                                </span><span class="oneChoice"><input type="radio" value="tfa_420" class="" id="tfa_420" name="tfa_418" aria-required="true" data-conditionals="#tfa_422,#tfa_424" aria-labelledby="tfa_420-L" data-tfa-labelledby="tfa_418-L tfa_420-L"><label class="label postField" id="tfa_420-L" for="tfa_420"><span class="input-radio-faux"></span>No</label>
                                                                </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_422-D">
                                                            <label id="tfa_422-L" class="label preField reqMark" for="tfa_422">Please can you explain why you would like to study at the same level again?</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <textarea aria-required="true" aria-describedby="tfa_422-HH" id="tfa_422" name="tfa_422" data-condition="`#tfa_420`" title="Please can you explain why you would like to study at the same level again?" class="required"></textarea><span class="field-hint-inactive" id="tfa_422-H"><span id="tfa_422-HH" class="hint">Will the course aid your future career aspirations, or will it enable you to get on to a higher level course such as a postgraduate or professional course?</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_424-D">
                                                            <label id="tfa_424-L" class="label preField reqMark" for="tfa_424">Please can you explain what you have put in place, or plan to put in place, to ensure that you have a better experience studying with us?</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <textarea aria-required="true" aria-describedby="tfa_424-HH" id="tfa_424" name="tfa_424" data-condition="`#tfa_420`" title="Please can you explain what you have put in place, or plan to put in place, to ensure that you have a better experience studying with us?" class="required"></textarea><span class="field-hint-inactive" id="tfa_424-H"><span id="tfa_424-HH" class="hint">For example, will you be closer to family for support, have a better understanding of how Universities work in the UK, or have more of an understanding about how to live in the UK</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_45-D" role="radiogroup" aria-labelledby="tfa_45-L" data-tfa-labelledby="-L tfa_45-L">
                                                            <label id="tfa_45-L" class="label preField reqMark">Do you have any pending UK visa applications or appeals?</label>
                                                            
                                                            <div class="inputWrapper"><span id="tfa_45" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_46" class="" id="tfa_46" name="tfa_45" aria-required="true" data-conditionals="#tfa_49,#tfa_48" aria-labelledby="tfa_46-L" data-tfa-labelledby="tfa_45-L tfa_46-L"><label class="label postField" id="tfa_46-L" for="tfa_46"><span class="input-radio-faux"></span>Yes</label>
                                                                </span><span class="oneChoice"><input type="radio" value="tfa_47" class="" id="tfa_47" name="tfa_45" aria-required="true" aria-labelledby="tfa_47-L" data-tfa-labelledby="tfa_45-L tfa_47-L"><label class="label postField" id="tfa_47-L" for="tfa_47"><span class="input-radio-faux"></span>No</label>
                                                                </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_48-D">
                                                            <label id="tfa_48-L" class="label preField " for="tfa_48">Please provide information in regards to this:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="text" id="tfa_48" name="tfa_48" value="" data-condition="`#tfa_46`" title="Please provide information in regards to this:" class="">
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_49-D">
                                                            <label id="tfa_49-L" class="label preField " for="tfa_49">Please provide any relevant documentation in regards to this:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="file" id="tfa_49" name="tfa_49" size="" data-condition="`#tfa_46`" title="Please provide any relevant documentation in regards to this:" class="">
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_50-D" role="radiogroup" aria-labelledby="tfa_50-L" data-tfa-labelledby="-L tfa_50-L">
                                                            <label id="tfa_50-L" class="label preField reqMark">Have you ever had a visa refusal for entry to another country or been removed from another country?</label>
                                                            
                                                            <div class="inputWrapper"><span id="tfa_50" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_51" class="" id="tfa_51" name="tfa_50" aria-required="true" data-conditionals="#tfa_53,#tfa_54" aria-labelledby="tfa_51-L" data-tfa-labelledby="tfa_50-L tfa_51-L"><label class="label postField" id="tfa_51-L" for="tfa_51"><span class="input-radio-faux"></span>Yes</label>
                                                                </span><span class="oneChoice"><input type="radio" value="tfa_52" class="" id="tfa_52" name="tfa_50" aria-required="true" aria-labelledby="tfa_52-L" data-tfa-labelledby="tfa_50-L tfa_52-L"><label class="label postField" id="tfa_52-L" for="tfa_52"><span class="input-radio-faux"></span>No</label>
                                                                </span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_53-D">
                                                            <label id="tfa_53-L" class="label preField " for="tfa_53">Please state the category of visa that was refused and explain the reason for the refusal:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="text" id="tfa_53" name="tfa_53" value="" data-condition="`#tfa_51`" title="Please state the category of visa that was refused and explain the reason for the refusal:" class="">
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_54-D">
                                                            <label id="tfa_54-L" class="label preField " for="tfa_54">Please attach a copy of any refusal evidence that you have:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="file" id="tfa_54" name="tfa_54" size="" data-condition="`#tfa_51`" title="Please attach a copy of any refusal evidence that you have:" class="">
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_411-D">
                                                            <label id="tfa_411-L" class="label preField " for="tfa_411">If you have any further information regarding your immigration history then please provide us with details of this:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <textarea id="tfa_411" name="tfa_411" title="If you have any further information regarding your immigration history then please provide us with details of this:" class=""></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_413-D">
                                                            <label id="tfa_413-L" class="label preField " for="tfa_413">Please provide us with any other relevant documentation that we may require:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="file" id="tfa_413" name="tfa_413" size="" title="Please provide us with any other relevant documentation that we may require:" class="">
                                                            </div>
                                                        </div>
                                                        <fieldset id="tfa_55" class="section">
                                                            <legend id="tfa_55-L"><b>Student Declaration</b>
                                                            </legend>
                                                            <div class="htmlSection" id="tfa_56">
                                                                <div class="htmlContent" id="tfa_56-HTML">I confirm that the information provided within this questionnaire is correct and that knowingly providing false or misleading information may result in the withdrawal of any offer or CAS issued. I also grant permission to the ARU College and ARU to make enquiries with UK Visas and Immigration (UKVI) and the Home Office which will enable them to confirm my immigration history or to determine if I have valid leave to remain within the UK.</div>
                                                            </div>
                                                        </fieldset>
                                                        <div class="oneField field-container-D    " id="tfa_57-D">
                                                            <label id="tfa_57-L" class="label preField reqMark" for="tfa_57">Signature:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="text" id="tfa_57" name="tfa_57" value="" aria-required="true" aria-describedby="tfa_57-HH" title="Signature:" class="required"><span class="field-hint-inactive" id="tfa_57-H"><span id="tfa_57-HH" class="hint">Please state your full name in agreement to the above</span></span>
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_221-D">
                                                            <label id="tfa_221-L" class="label preField " for="tfa_221">honeypot</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="text" id="tfa_221" name="tfa_221" value="" title="honeypot" class="">
                                                            </div>
                                                        </div>
                                                        <div class="oneField field-container-D    " id="tfa_397-D">
                                                            <label id="tfa_397-L" class="label preField reqMark" for="tfa_397">Email:</label>
                                                            
                                                            <div class="inputWrapper">
                                                                <input type="text" id="tfa_397" name="tfa_397" value="" aria-required="true" title="Email:" class="validate-email required">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="actions" id="4827952-A">
                                                    <input type="submit" data-label="Submit" class="primaryAction" id="submit_button" value="Submit">
                                                </div>
                                                <div style="clear:both"></div>
                                                <input type="hidden" value="4827952" name="tfa_dbFormId" id="tfa_dbFormId">
                                                <input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId">
                                                <input type="hidden" value="7b54e3a17351cca3b9edab9e2447ea99" name="tfa_dbControl" id="tfa_dbControl">
                                                <input type="hidden" value="3" name="tfa_dbVersionId" id="tfa_dbVersionId">
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


<script>
    $(function() {
        $("#tfa_396").attr('readonly', 'readonly');
        $( "#tfa_396" ).datepicker({
          changeMonth: true,
          changeYear: true,
          dateFormat: 'dd/mm/yy',
          yearRange: "-20:+20"
    
        });
    });
    
    $(function() {
        $("#tfa_393").attr('readonly', 'readonly');
        $( "#tfa_393" ).datepicker({
          changeMonth: true,
          changeYear: true,
          dateFormat: 'dd/mm/yy',
          yearRange: "-20:+20"
    
        });
    });
    
    $(function() {
        $("#tfa_394").attr('readonly', 'readonly');
        $( "#tfa_394" ).datepicker({
          changeMonth: true,
          changeYear: true,
          dateFormat: 'dd/mm/yy',
          yearRange: "-20:+20"
    
        });
    });
    
    $(function() {
        $("#tfa_4").attr('readonly', 'readonly');
        $( "#tfa_4" ).datepicker({
          changeMonth: true,
          changeYear: true,
          dateFormat: 'dd/mm/yy',
          yearRange: "-50:+0"
    
        });
    });
    
    $(function() {
        $("#tfa_34").attr('readonly', 'readonly');
        $( "#tfa_34" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd/mm/yy',
        yearRange: "-40:+0"
        });
    });

    $(function() {
        $("#tfa_35").attr('readonly', 'readonly');
        $( "#tfa_35" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: "-40:+0"
        });
    });

    $(function() {
        $("#tfa_36").attr('readonly', 'readonly');
        $( "#tfa_36" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_37").attr('readonly', 'readonly');
        $( "#tfa_37" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_58").attr('readonly', 'readonly');
        $( "#tfa_58" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_108").attr('readonly', 'readonly');
        $( "#tfa_108" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: "-40:+0"
        });
    });

    $(function() {
        $("#tfa_109").attr('readonly', 'readonly');
        $( "#tfa_109" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_110").attr('readonly', 'readonly');
        $( "#tfa_110" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_111").attr('readonly', 'readonly');
        $( "#tfa_111" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_160").attr('readonly', 'readonly');
        $( "#tfa_160" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: "-40:+0"
        });
    });
    $(function() {
        $("#tfa_161").attr('readonly', 'readonly');
        $( "#tfa_161" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });
    $(function() {
        $("#tfa_162").attr('readonly', 'readonly');
        $( "#tfa_162" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_163").attr('readonly', 'readonly');
        $( "#tfa_163" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_212").attr('readonly', 'readonly');
        $( "#tfa_212" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: "-40:+0"
        });
    });

    $(function() {
        $("#tfa_213").attr('readonly', 'readonly');
        $( "#tfa_213" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_214").attr('readonly', 'readonly');
        $( "#tfa_214" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_215").attr('readonly', 'readonly');
        $( "#tfa_215" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_272").attr('readonly', 'readonly');
        $( "#tfa_272" ).datepicker({
                    changeMonth: true,
                    changeYear: true,
                    dateFormat: 'dd/mm/yy',
                    yearRange: "-40:+0"
        });
    });

    $(function() {
        $("#tfa_273").attr('readonly', 'readonly');
        $( "#tfa_273" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_274").attr('readonly', 'readonly');
        $( "#tfa_274" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_275").attr('readonly', 'readonly');
        $( "#tfa_275" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_324").attr('readonly', 'readonly');
        $( "#tfa_324" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: "-40:+0"
        });
    });

    $(function() {
        $("#tfa_325").attr('readonly', 'readonly');
        $( "#tfa_325" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_326").attr('readonly', 'readonly');
        $( "#tfa_326" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_327").attr('readonly', 'readonly');
        $( "#tfa_327" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_376").attr('readonly', 'readonly');
        $( "#tfa_376" ).datepicker({
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: "-40:+0"
        });
    });

    $(function() {
        $("#tfa_377").attr('readonly', 'readonly');
        $( "#tfa_377" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_378").attr('readonly', 'readonly');
        $( "#tfa_378" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });

    $(function() {
        $("#tfa_379").attr('readonly', 'readonly');
        $( "#tfa_379" ).datepicker({
            changeMonth: true,
            changeYear: true,
            yearRange: "-20:+20",
            dateFormat: 'dd/mm/yy'
        });
    });
    
    $(document).ready(function() {
        var bound_inputs = new Array();
        var isOver = false;
        $("#Online-Application").on('click',function() {
            $('input:file').each(function() {
                if (-1 === $.inArray(this, bound_inputs)) {
                    bound_inputs.push(this);
                    $(this).bind('change', function() {
                        totalsize();
                    });
                }
            });
        });

        $('.primaryAction').on('click', function(){
            totalsize();
            if(isOver === true){
                return false;
            }

        });

        function totalsize(){
            var total = 0;
            isOver = false;
            $('input[type="file"]').each(function() {
                if (this.files[0]) {
                    if(this.files[0].size == 0 || this.files[0].size < 50){
                      $(this).val('');
                        $(this).replaceWith($(this).clone());
                        alert('The attachments that you are trying to submit is invalid');
                    } else {
                        total += this.files[0].size;
                        if(total > 25000000){
                            alert('Your attachments have exceeded the 25MB file size limit. Please reduce the file size of your attachments.');
                            isOver = true;
                        }
                    }
                }
            });
        }
    });

</script>