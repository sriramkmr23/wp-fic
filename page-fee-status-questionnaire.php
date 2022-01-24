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
                                <p>The purpose of this questionnaire is to assist the University to determine your fee classification. The information you provide will be used solely for this purpose. Please take care to answer each question fully and accurately and to provide documentary evidence where requested. If you fail to provide this information, the University may charge your tuition fees at the overseas rates. If you have any questions please email <a href="mailto:admissions@arucollege.com">admissions@arucollege.com</a>.</p>
                                <p>Please include a copy of your passport and/or relevant immigration status documentation with this form.</p>
                                <p>All fields are required.</p>
							</div>
						</div>
					</div>
                </section>

                <section class="application-form content">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-layout.css?v=2993209a0c4a63eeaae5cfa9fecbe00e33a1a4af" rel="stylesheet" type="text/css" />
                                <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-jsonly.css?v=2993209a0c4a63eeaae5cfa9fecbe00e33a1a4af" rel="alternate stylesheet" title="This stylesheet activated by javascript" type="text/css" />
                                <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/wforms.js?v=2993209a0c4a63eeaae5cfa9fecbe00e33a1a4af"></script>
                                <script type="text/javascript">
                                    wFORMS.behaviors.prefill.skip = false;
                                </script>
                                <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/localization-en_GB.js?v=2993209a0c4a63eeaae5cfa9fecbe00e33a1a4af"></script>
                                
                                <!-- FORM: BODY SECTION -->
                                <div class="wFormContainer">
                                    <div class="">
                                        <div id="tfa_0-WRPR" class="wForm" dir="ltr">
                                            <div id="code-tfa_0" class="codesection">
                                            <style> #tfa_5406-D, #tfa_74-D { display: none; } </style>
                                            <script src="https://85f1249248e2cd649389-8dc6c11e1e3524ca11dc4a23c44196ab.ssl.cf6.rackcdn.com/fa-online_application_init.js"></script>
                                            </div>
                                            <form method="post" action="https://www.tfaforms.com/responses/processor" class="hintsBelow labelsAbove" id="4827955" role="form" enctype="multipart/form-data">
                                                <div class="wfPage" id="wfPgIndex-1">
                                                    <div class="section pageSection" id="tfa_5319">
                                                        <fieldset id="tfa_5317" class="section">
                                                            <legend id="tfa_5317-L"><b>Personal Details</b>&nbsp; &nbsp;</legend>
                                                            <div class="oneField field-container-D    " id="tfa_63-D">
                                                                <label id="tfa_63-L" class="label preField " for="tfa_63">ARU College Student ID:&nbsp;</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_63" name="tfa_63" value="" title="ARU College Student ID:  " class="">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_65-D">
                                                                <label id="tfa_65-L" class="label preField reqMark" for="tfa_65">First Name:</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_65" name="tfa_65" value="" aria-required="true" title="First Name:" class="required">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_64-D">
                                                                <label id="tfa_64-L" class="label preField reqMark" for="tfa_64">Last Name:</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_64" name="tfa_64" value="" aria-required="true" title="Last Name:" class="required">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_67-D">
                                                                <label id="tfa_67-L" class="label preField reqMark" for="tfa_67">Email Address:</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_67" name="tfa_67" value="" aria-required="true" title="Email Address:" class="validate-email calc-agentEmail required">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_62-D">
                                                                <label id="tfa_62-L" class="label preField reqMark" for="tfa_62">Date of Birth:</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_62" name="tfa_62" value="" aria-required="true" aria-describedby="tfa_62-HH" title="Date of Birth:" class="required"><span class="field-hint-inactive" id="tfa_62-H"><span id="tfa_62-HH" class="hint"><p class="p1"><br></p></span></span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_10-D">
                                                                <label id="tfa_10-L" class="label preField reqMark" for="tfa_10">Country of Birth:&nbsp;</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <select id="tfa_10" name="tfa_10" title="Country of Birth: " aria-required="true" class="required">
                                                                        <option value="">Please select...</option>
                                                                        <option value="tfa_646" id="tfa_646" class="">Afghanistan</option>
                                                                        <option value="tfa_647" id="tfa_647" class="">Aland Islands</option>
                                                                        <option value="tfa_648" id="tfa_648" class="">Albania</option>
                                                                        <option value="tfa_649" id="tfa_649" class="">Algeria</option>
                                                                        <option value="tfa_650" id="tfa_650" class="">American Samoa</option>
                                                                        <option value="tfa_651" id="tfa_651" class="">Andorra</option>
                                                                        <option value="tfa_652" id="tfa_652" class="">Angola</option>
                                                                        <option value="tfa_653" id="tfa_653" class="">Anguilla</option>
                                                                        <option value="tfa_654" id="tfa_654" class="">Antigua and Barbuda</option>
                                                                        <option value="tfa_655" id="tfa_655" class="">Argentina</option>
                                                                        <option value="tfa_656" id="tfa_656" class="">Armenia</option>
                                                                        <option value="tfa_657" id="tfa_657" class="">Aruba</option>
                                                                        <option value="tfa_658" id="tfa_658" class="">Australia</option>
                                                                        <option value="tfa_659" id="tfa_659" data-conditionals="#tfa_81" class="">Austria</option>
                                                                        <option value="tfa_660" id="tfa_660" class="">Azerbaijan</option>
                                                                        <option value="tfa_661" id="tfa_661" class="">Bahamas</option>
                                                                        <option value="tfa_662" id="tfa_662" class="">Bahrain</option>
                                                                        <option value="tfa_663" id="tfa_663" class="">Bangladesh</option>
                                                                        <option value="tfa_664" id="tfa_664" class="">Barbados</option>
                                                                        <option value="tfa_665" id="tfa_665" class="">Belarus</option>
                                                                        <option value="tfa_666" id="tfa_666" data-conditionals="#tfa_81" class="">Belgium</option>
                                                                        <option value="tfa_667" id="tfa_667" class="">Belize</option>
                                                                        <option value="tfa_668" id="tfa_668" class="">Benin</option>
                                                                        <option value="tfa_669" id="tfa_669" class="">Bermuda</option>
                                                                        <option value="tfa_670" id="tfa_670" class="">Bhutan</option>
                                                                        <option value="tfa_671" id="tfa_671" class="">Bolivia</option>
                                                                        <option value="tfa_672" id="tfa_672" class="">Bosnia &amp; Herzegovina</option>
                                                                        <option value="tfa_673" id="tfa_673" class="">Botswana</option>
                                                                        <option value="tfa_674" id="tfa_674" class="">Brazil</option>
                                                                        <option value="tfa_675" id="tfa_675" class="">British Virgin Isle</option>
                                                                        <option value="tfa_676" id="tfa_676" class="">Brunei</option>
                                                                        <option value="tfa_677" id="tfa_677" data-conditionals="#tfa_81" class="">Bulgaria</option>
                                                                        <option value="tfa_678" id="tfa_678" class="">Burkina Faso</option>
                                                                        <option value="tfa_679" id="tfa_679" class="">Burundi</option>
                                                                        <option value="tfa_680" id="tfa_680" class="">Cambodia</option>
                                                                        <option value="tfa_681" id="tfa_681" class="">Cameroon</option>
                                                                        <option value="tfa_682" id="tfa_682" class="">Canada</option>
                                                                        <option value="tfa_683" id="tfa_683" class="">Cape Verde</option>
                                                                        <option value="tfa_684" id="tfa_684" class="">Cayman Islands</option>
                                                                        <option value="tfa_685" id="tfa_685" class="">Central African Rep</option>
                                                                        <option value="tfa_686" id="tfa_686" class="">Chad</option>
                                                                        <option value="tfa_687" id="tfa_687" class="">Chile</option>
                                                                        <option value="tfa_688" id="tfa_688" class="">China</option>
                                                                        <option value="tfa_689" id="tfa_689" class="">Colombia</option>
                                                                        <option value="tfa_690" id="tfa_690" class="">Comoros</option>
                                                                        <option value="tfa_691" id="tfa_691" class="">Congo</option>
                                                                        <option value="tfa_692" id="tfa_692" class="">Cook Islands</option>
                                                                        <option value="tfa_693" id="tfa_693" class="">Costa Rica</option>
                                                                        <option value="tfa_694" id="tfa_694" data-conditionals="#tfa_81" class="">Croatia</option>
                                                                        <option value="tfa_695" id="tfa_695" class="">Cuba</option>
                                                                        <option value="tfa_696" id="tfa_696" data-conditionals="#tfa_81" class="">Cyprus</option>
                                                                        <option value="tfa_697" id="tfa_697" data-conditionals="#tfa_81" class="">Czech Republic</option>
                                                                        <option value="tfa_698" id="tfa_698" class="">Dem Rep of the Congo</option>
                                                                        <option value="tfa_699" id="tfa_699" data-conditionals="#tfa_81" class="">Denmark</option>
                                                                        <option value="tfa_700" id="tfa_700" class="">Djibouti</option>
                                                                        <option value="tfa_701" id="tfa_701" class="">Dominica</option>
                                                                        <option value="tfa_702" id="tfa_702" class="">Dominican Republic</option>
                                                                        <option value="tfa_703" id="tfa_703" class="">East Timor</option>
                                                                        <option value="tfa_704" id="tfa_704" class="">Ecuador</option>
                                                                        <option value="tfa_705" id="tfa_705" class="">Egypt</option>
                                                                        <option value="tfa_706" id="tfa_706" class="">El Salvador</option>
                                                                        <option value="tfa_707" id="tfa_707" class="">Equatorial Guinea</option>
                                                                        <option value="tfa_708" id="tfa_708" class="">Eritrea</option>
                                                                        <option value="tfa_709" id="tfa_709" data-conditionals="#tfa_81" class="">Estonia</option>
                                                                        <option value="tfa_710" id="tfa_710" class="">Ethiopia</option>
                                                                        <option value="tfa_711" id="tfa_711" class="">Faeroe Islands</option>
                                                                        <option value="tfa_712" id="tfa_712" class="">Falkland Islands</option>
                                                                        <option value="tfa_713" id="tfa_713" class="">Fiji</option>
                                                                        <option value="tfa_714" id="tfa_714" data-conditionals="#tfa_81" class="">Finland</option>
                                                                        <option value="tfa_715" id="tfa_715" data-conditionals="#tfa_81" class="">France</option>
                                                                        <option value="tfa_716" id="tfa_716" class="">French Guiana</option>
                                                                        <option value="tfa_717" id="tfa_717" class="">French Polynesia</option>
                                                                        <option value="tfa_718" id="tfa_718" class="">Gabon</option>
                                                                        <option value="tfa_719" id="tfa_719" class="">Gambia</option>
                                                                        <option value="tfa_720" id="tfa_720" class="">Georgia</option>
                                                                        <option value="tfa_721" id="tfa_721" data-conditionals="#tfa_81" class="">Germany</option>
                                                                        <option value="tfa_722" id="tfa_722" class="">Ghana</option>
                                                                        <option value="tfa_723" id="tfa_723" class="">Gibraltar</option>
                                                                        <option value="tfa_724" id="tfa_724" data-conditionals="#tfa_81" class="">Greece</option>
                                                                        <option value="tfa_725" id="tfa_725" class="">Greenland</option>
                                                                        <option value="tfa_726" id="tfa_726" class="">Grenada</option>
                                                                        <option value="tfa_727" id="tfa_727" class="">Guadeloupe</option>
                                                                        <option value="tfa_728" id="tfa_728" class="">Guam</option>
                                                                        <option value="tfa_729" id="tfa_729" class="">Guatemala</option>
                                                                        <option value="tfa_730" id="tfa_730" class="">Guernsey</option>
                                                                        <option value="tfa_731" id="tfa_731" class="">Guinea</option>
                                                                        <option value="tfa_732" id="tfa_732" class="">Guinea-Bissau</option>
                                                                        <option value="tfa_733" id="tfa_733" class="">Guyana</option>
                                                                        <option value="tfa_734" id="tfa_734" class="">Haiti</option>
                                                                        <option value="tfa_735" id="tfa_735" class="">Holy See</option>
                                                                        <option value="tfa_736" id="tfa_736" class="">Honduras</option>
                                                                        <option value="tfa_737" id="tfa_737" class="">Hong Kong</option>
                                                                        <option value="tfa_738" id="tfa_738" data-conditionals="#tfa_81" class="">Hungary</option>
                                                                        <option value="tfa_739" id="tfa_739" class="">Iceland</option>
                                                                        <option value="tfa_740" id="tfa_740" class="">India</option>
                                                                        <option value="tfa_741" id="tfa_741" class="">Indonesia</option>
                                                                        <option value="tfa_742" id="tfa_742" class="">Iran</option>
                                                                        <option value="tfa_743" id="tfa_743" class="">Iraq</option>
                                                                        <option value="tfa_744" id="tfa_744" data-conditionals="#tfa_81" class="">Ireland</option>
                                                                        <option value="tfa_745" id="tfa_745" class="">Isle of Man</option>
                                                                        <option value="tfa_746" id="tfa_746" class="">Israel</option>
                                                                        <option value="tfa_747" id="tfa_747" data-conditionals="#tfa_81" class="">Italy</option>
                                                                        <option value="tfa_748" id="tfa_748" class="">Ivory Coast</option>
                                                                        <option value="tfa_749" id="tfa_749" class="">Jamaica</option>
                                                                        <option value="tfa_750" id="tfa_750" class="">Japan</option>
                                                                        <option value="tfa_751" id="tfa_751" class="">Jersey</option>
                                                                        <option value="tfa_752" id="tfa_752" class="">Jordan</option>
                                                                        <option value="tfa_753" id="tfa_753" class="">Kazakhstan</option>
                                                                        <option value="tfa_754" id="tfa_754" class="">Kenya</option>
                                                                        <option value="tfa_755" id="tfa_755" class="">Kiribati</option>
                                                                        <option value="tfa_756" id="tfa_756" class="">Kuwait</option>
                                                                        <option value="tfa_757" id="tfa_757" class="">Kyrgyzstan</option>
                                                                        <option value="tfa_758" id="tfa_758" class="">Laos</option>
                                                                        <option value="tfa_759" id="tfa_759" data-conditionals="#tfa_81" class="">Latvia</option>
                                                                        <option value="tfa_760" id="tfa_760" class="">Lebanon</option>
                                                                        <option value="tfa_761" id="tfa_761" class="">Lesotho</option>
                                                                        <option value="tfa_762" id="tfa_762" class="">Liberia</option>
                                                                        <option value="tfa_763" id="tfa_763" class="">Libya</option>
                                                                        <option value="tfa_764" id="tfa_764" class="">Liechtenstein</option>
                                                                        <option value="tfa_765" id="tfa_765" data-conditionals="#tfa_81" class="">Lithuania</option>
                                                                        <option value="tfa_766" id="tfa_766" data-conditionals="#tfa_81" class="">Luxembourg</option>
                                                                        <option value="tfa_767" id="tfa_767" class="">Macao</option>
                                                                        <option value="tfa_768" id="tfa_768" class="">Macedonia</option>
                                                                        <option value="tfa_769" id="tfa_769" class="">Madagascar</option>
                                                                        <option value="tfa_770" id="tfa_770" class="">Malawi</option>
                                                                        <option value="tfa_771" id="tfa_771" class="">Malaysia</option>
                                                                        <option value="tfa_772" id="tfa_772" class="">Maldives</option>
                                                                        <option value="tfa_773" id="tfa_773" class="">Mali</option>
                                                                        <option value="tfa_774" id="tfa_774" data-conditionals="#tfa_81" class="">Malta</option>
                                                                        <option value="tfa_775" id="tfa_775" class="">Marshall Islands</option>
                                                                        <option value="tfa_776" id="tfa_776" class="">Martinique</option>
                                                                        <option value="tfa_777" id="tfa_777" class="">Mauritania</option>
                                                                        <option value="tfa_778" id="tfa_778" class="">Mauritius</option>
                                                                        <option value="tfa_779" id="tfa_779" class="">Mayotte</option>
                                                                        <option value="tfa_780" id="tfa_780" class="">Mexico</option>
                                                                        <option value="tfa_781" id="tfa_781" class="">Micronesia</option>
                                                                        <option value="tfa_782" id="tfa_782" class="">Monaco</option>
                                                                        <option value="tfa_783" id="tfa_783" class="">Mongolia</option>
                                                                        <option value="tfa_784" id="tfa_784" class="">Montenegro</option>
                                                                        <option value="tfa_785" id="tfa_785" class="">Montserrat</option>
                                                                        <option value="tfa_786" id="tfa_786" class="">Morocco</option>
                                                                        <option value="tfa_787" id="tfa_787" class="">Mozambique</option>
                                                                        <option value="tfa_788" id="tfa_788" class="">Myanmar</option>
                                                                        <option value="tfa_789" id="tfa_789" class="">Namibia</option>
                                                                        <option value="tfa_790" id="tfa_790" class="">Nauru</option>
                                                                        <option value="tfa_791" id="tfa_791" class="">Nepal</option>
                                                                        <option value="tfa_792" id="tfa_792" data-conditionals="#tfa_81" class="">Netherlands</option>
                                                                        <option value="tfa_793" id="tfa_793" class="">Netherlands Antilles</option>
                                                                        <option value="tfa_794" id="tfa_794" class="">New Caledonia</option>
                                                                        <option value="tfa_795" id="tfa_795" class="">New Zealand</option>
                                                                        <option value="tfa_796" id="tfa_796" class="">Nicaragua</option>
                                                                        <option value="tfa_797" id="tfa_797" class="">Niger</option>
                                                                        <option value="tfa_798" id="tfa_798" class="">Nigeria</option>
                                                                        <option value="tfa_799" id="tfa_799" class="">Niue</option>
                                                                        <option value="tfa_800" id="tfa_800" class="">Norfolk Island</option>
                                                                        <option value="tfa_801" id="tfa_801" class="">North Korea</option>
                                                                        <option value="tfa_802" id="tfa_802" class="">Norway</option>
                                                                        <option value="tfa_803" id="tfa_803" class="">Nth Mariana Islands</option>
                                                                        <option value="tfa_804" id="tfa_804" class="">Oman</option>
                                                                        <option value="tfa_805" id="tfa_805" class="">Pakistan</option>
                                                                        <option value="tfa_806" id="tfa_806" class="">Palau</option>
                                                                        <option value="tfa_807" id="tfa_807" class="">Palestine</option>
                                                                        <option value="tfa_808" id="tfa_808" class="">Panama</option>
                                                                        <option value="tfa_809" id="tfa_809" class="">Papua New Guinea</option>
                                                                        <option value="tfa_810" id="tfa_810" class="">Paraguay</option>
                                                                        <option value="tfa_811" id="tfa_811" class="">Peru</option>
                                                                        <option value="tfa_812" id="tfa_812" class="">Philippines</option>
                                                                        <option value="tfa_813" id="tfa_813" class="">Pitcairn</option>
                                                                        <option value="tfa_814" id="tfa_814" data-conditionals="#tfa_81" class="">Poland</option>
                                                                        <option value="tfa_815" id="tfa_815" data-conditionals="#tfa_81" class="">Portugal</option>
                                                                        <option value="tfa_816" id="tfa_816" class="">Puerto Rico</option>
                                                                        <option value="tfa_817" id="tfa_817" class="">Qatar</option>
                                                                        <option value="tfa_818" id="tfa_818" class="">Republic of Moldova</option>
                                                                        <option value="tfa_819" id="tfa_819" class="">Reunion</option>
                                                                        <option value="tfa_820" id="tfa_820" data-conditionals="#tfa_81" class="">Romania</option>
                                                                        <option value="tfa_821" id="tfa_821" class="">Russian Federation</option>
                                                                        <option value="tfa_822" id="tfa_822" class="">Rwanda</option>
                                                                        <option value="tfa_823" id="tfa_823" class="">Saint Helena</option>
                                                                        <option value="tfa_824" id="tfa_824" class="">Saint Kitts &amp; Nevis</option>
                                                                        <option value="tfa_825" id="tfa_825" class="">Saint Lucia</option>
                                                                        <option value="tfa_826" id="tfa_826" class="">Saint-Barthelemy</option>
                                                                        <option value="tfa_827" id="tfa_827" class="">Saint-Martin(French)</option>
                                                                        <option value="tfa_828" id="tfa_828" class="">Samoa</option>
                                                                        <option value="tfa_829" id="tfa_829" class="">San Marino</option>
                                                                        <option value="tfa_830" id="tfa_830" class="">Sao Tome &amp; Principe</option>
                                                                        <option value="tfa_831" id="tfa_831" class="">Saudi Arabia</option>
                                                                        <option value="tfa_832" id="tfa_832" class="">Senegal</option>
                                                                        <option value="tfa_833" id="tfa_833" class="">Serbia</option>
                                                                        <option value="tfa_834" id="tfa_834" class="">Seychelles</option>
                                                                        <option value="tfa_835" id="tfa_835" class="">Sierra Leone</option>
                                                                        <option value="tfa_836" id="tfa_836" class="">Singapore</option>
                                                                        <option value="tfa_837" id="tfa_837" data-conditionals="#tfa_81" class="">Slovakia</option>
                                                                        <option value="tfa_838" id="tfa_838" data-conditionals="#tfa_81" class="">Slovenia</option>
                                                                        <option value="tfa_839" id="tfa_839" class="">Solomon Islands</option>
                                                                        <option value="tfa_840" id="tfa_840" class="">Somalia</option>
                                                                        <option value="tfa_841" id="tfa_841" class="">South Africa</option>
                                                                        <option value="tfa_842" id="tfa_842" class="">South Korea</option>
                                                                        <option value="tfa_843" id="tfa_843" class="">South Sudan</option>
                                                                        <option value="tfa_844" id="tfa_844" data-conditionals="#tfa_81" class="">Spain</option>
                                                                        <option value="tfa_845" id="tfa_845" class="">Sri Lanka</option>
                                                                        <option value="tfa_846" id="tfa_846" class="">St Pierre &amp; Miquelon</option>
                                                                        <option value="tfa_847" id="tfa_847" class="">St Vinc &amp; Grenadine</option>
                                                                        <option value="tfa_848" id="tfa_848" class="">Sudan</option>
                                                                        <option value="tfa_849" id="tfa_849" class="">Suriname</option>
                                                                        <option value="tfa_850" id="tfa_850" class="">Svalbard &amp; Jan Mayen</option>
                                                                        <option value="tfa_851" id="tfa_851" class="">Swaziland</option>
                                                                        <option value="tfa_852" id="tfa_852" data-conditionals="#tfa_81" class="">Sweden</option>
                                                                        <option value="tfa_853" id="tfa_853" class="">Switzerland</option>
                                                                        <option value="tfa_854" id="tfa_854" class="">Syria</option>
                                                                        <option value="tfa_855" id="tfa_855" class="">Taiwan</option>
                                                                        <option value="tfa_856" id="tfa_856" class="">Tajikistan</option>
                                                                        <option value="tfa_857" id="tfa_857" class="">Tanzania</option>
                                                                        <option value="tfa_858" id="tfa_858" class="">Thailand</option>
                                                                        <option value="tfa_859" id="tfa_859" class="">Togo</option>
                                                                        <option value="tfa_860" id="tfa_860" class="">Tokelau</option>
                                                                        <option value="tfa_861" id="tfa_861" class="">Tonga</option>
                                                                        <option value="tfa_862" id="tfa_862" class="">Trinidad and Tobago</option>
                                                                        <option value="tfa_863" id="tfa_863" class="">Tunisia</option>
                                                                        <option value="tfa_864" id="tfa_864" class="">Turkey</option>
                                                                        <option value="tfa_865" id="tfa_865" class="">Turkmenistan</option>
                                                                        <option value="tfa_866" id="tfa_866" class="">Turks &amp; Caicos Isle</option>
                                                                        <option value="tfa_867" id="tfa_867" class="">Tuvalu</option>
                                                                        <option value="tfa_868" id="tfa_868" class="">Uganda</option>
                                                                        <option value="tfa_869" id="tfa_869" class="">Ukraine</option>
                                                                        <option value="tfa_870" id="tfa_870" class="">United Arab Emirates</option>
                                                                        <option value="tfa_871" id="tfa_871" data-conditionals="#tfa_81" class="">United Kingdom</option>
                                                                        <option value="tfa_872" id="tfa_872" class="">Uruguay</option>
                                                                        <option value="tfa_873" id="tfa_873" class="">US Virgin Islands</option>
                                                                        <option value="tfa_874" id="tfa_874" class="">USA</option>
                                                                        <option value="tfa_875" id="tfa_875" class="">Uzbekistan</option>
                                                                        <option value="tfa_876" id="tfa_876" class="">Vanuatu</option>
                                                                        <option value="tfa_877" id="tfa_877" class="">Venezuela</option>
                                                                        <option value="tfa_878" id="tfa_878" class="">Viet Nam</option>
                                                                        <option value="tfa_879" id="tfa_879" class="">Wallis &amp; Futuna Isle</option>
                                                                        <option value="tfa_880" id="tfa_880" class="">Western Sahara</option>
                                                                        <option value="tfa_881" id="tfa_881" class="">Yemen</option>
                                                                        <option value="tfa_883" id="tfa_883" class="">Zambia</option>
                                                                        <option value="tfa_884" id="tfa_884" class="">Zimbabwe</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_80-D" role="radiogroup" aria-labelledby="tfa_80-L" data-tfa-labelledby="-L tfa_80-L">
                                                                <label id="tfa_80-L" class="label preField reqMark">Were you born in the UK/EEA?</label>
                                                                <br>
                                                                <div class="inputWrapper"><span id="tfa_80" class="choices  required"><span class="oneChoice"><input type="radio" value="tfa_2827" class="" id="tfa_2827" name="tfa_80" aria-required="true" aria-labelledby="tfa_2827-L" data-tfa-labelledby="tfa_80-L tfa_2827-L"><label class="label postField" id="tfa_2827-L" for="tfa_2827"><span class="input-radio-faux"></span>Yes</label>
                                                                    </span><span class="oneChoice"><input type="radio" value="tfa_2828" class="" id="tfa_2828" name="tfa_80" aria-required="true" data-conditionals="#tfa_81,#tfa_5610" aria-labelledby="tfa_2828-L" data-tfa-labelledby="tfa_80-L tfa_2828-L"><label class="label postField" id="tfa_2828-L" for="tfa_2828"><span class="input-radio-faux"></span>No</label>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_5610-D">
                                                                <label id="tfa_5610-L" class="label preField reqMark" for="tfa_5610">Date of first entry to live in the UK/EEA:</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_5610" name="tfa_5610" value="" aria-required="true" aria-describedby="tfa_5610-HH" data-condition="`#tfa_2828`" title="Date of first entry to live in the UK/EEA:" class="required"><span class="field-hint-inactive" id="tfa_5610-H"><span id="tfa_5610-HH" class="hint"><p class="p1"><br></p></span></span>
                                                                </div>
                                                            </div>
                                                            <fieldset id="tfa_5611" class="section">
                                                                <legend id="tfa_5611-L">Nationality:</legend>
                                                                <div class="oneField field-container-D    " id="tfa_5612-D">
                                                                    <label id="tfa_5612-L" class="label preField reqMark" for="tfa_5612">Yourself:</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <input type="text" id="tfa_5612" name="tfa_5612" value="" aria-required="true" title="Yourself:" class="required">
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5613-D">
                                                                    <label id="tfa_5613-L" class="label preField " for="tfa_5613">Your spouse (if applicable):</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <input type="text" id="tfa_5613" name="tfa_5613" value="" title=" Your spouse (if applicable):" class="">
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5614-D">
                                                                    <label id="tfa_5614-L" class="label preField " for="tfa_5614">Your Mother:</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <input type="text" id="tfa_5614" name="tfa_5614" value="" title=" Your Mother:" class="">
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5615-D">
                                                                    <label id="tfa_5615-L" class="label preField " for="tfa_5615">Your Father:</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <input type="text" id="tfa_5615" name="tfa_5615" value="" title="Your Father:" class="">
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_81-D" role="radiogroup" aria-labelledby="tfa_81-L" data-tfa-labelledby="-L tfa_81-L">
                                                                    <label id="tfa_81-L" class="label preField reqMark">Do any of your family live in the UK/European Economic Area or Switzerland?&nbsp;</label>
                                                                    <br>
                                                                    <div class="inputWrapper"><span id="tfa_81" class="choices  required" data-condition="`#tfa_2828` OR `#tfa_659` OR `#tfa_666` OR `#tfa_677` OR `#tfa_694` OR `#tfa_696` OR `#tfa_697` OR `#tfa_699` OR `#tfa_709` OR `#tfa_714` OR `#tfa_715` OR `#tfa_721` OR `#tfa_724` OR `#tfa_738` OR `#tfa_744` OR `#tfa_747` OR `#tfa_759` OR `#tfa_765` OR `#tfa_766` OR `#tfa_774` OR `#tfa_792` OR `#tfa_814` OR `#tfa_815` OR `#tfa_820` OR `#tfa_837` OR `#tfa_838` OR `#tfa_844` OR `#tfa_852` OR `#tfa_871`"><span class="oneChoice"><input type="radio" value="tfa_2829" class="" id="tfa_2829" name="tfa_81" aria-required="true" aria-labelledby="tfa_2829-L" data-tfa-labelledby="tfa_81-L tfa_2829-L"><label class="label postField" id="tfa_2829-L" for="tfa_2829"><span class="input-radio-faux"></span>Yes</label>
                                                                        </span><span class="oneChoice"><input type="radio" value="tfa_2830" class="" id="tfa_2830" name="tfa_81" aria-required="true" aria-labelledby="tfa_2830-L" data-tfa-labelledby="tfa_81-L tfa_2830-L"><label class="label postField" id="tfa_2830-L" for="tfa_2830"><span class="input-radio-faux"></span>No</label>
                                                                        </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5622-D" role="radiogroup" aria-labelledby="tfa_5622-L" data-tfa-labelledby="-L tfa_5622-L">
                                                                    <label id="tfa_5622-L" class="label preField reqMark">Are you financially dependent on this family member?</label>
                                                                    <br>
                                                                    <div class="inputWrapper"><span id="tfa_5622" class="choices  required"><span class="oneChoice"><input type="radio" value="tfa_5623" class="" id="tfa_5623" name="tfa_5622" aria-required="true" data-conditionals="#tfa_5618,#tfa_5616" aria-labelledby="tfa_5623-L" data-tfa-labelledby="tfa_5622-L tfa_5623-L"><label class="label postField" id="tfa_5623-L" for="tfa_5623"><span class="input-radio-faux"></span>Yes</label>
                                                                        </span><span class="oneChoice"><input type="radio" value="tfa_5624" class="" id="tfa_5624" name="tfa_5622" aria-required="true" aria-labelledby="tfa_5624-L" data-tfa-labelledby="tfa_5622-L tfa_5624-L"><label class="label postField" id="tfa_5624-L" for="tfa_5624"><span class="input-radio-faux"></span>No</label>
                                                                        </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5618-D">
                                                                    <label id="tfa_5618-L" class="label preField " for="tfa_5618">Which family member and which country to they live?</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <input type="text" id="tfa_5618" name="tfa_5618" value="" data-condition="`#tfa_5623`" title="Which family member and which country to they live?" class="">
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5616-D">
                                                                    <label id="tfa_5616-L" class="label preField " for="tfa_5616">What is their immigration status within that country?&nbsp;</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <input type="text" id="tfa_5616" name="tfa_5616" value="" data-condition="`#tfa_5623`" title="What is their immigration status within that country?  " class="">
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="wfPage" id="wfPgIndex-2">
                                                    <div class="section pageSection" id="tfa_5324">
                                                        <h4 id="tfa_5324-T">Current Residence</h4>
                                                        <fieldset id="tfa_5325" class="section">
                                                            <legend id="tfa_5325-L"><b>Current Residence</b>
                                                            </legend>
                                                            <div class="oneField field-container-D    " id="tfa_5625-D">
                                                                <label id="tfa_5625-L" class="label preField reqMark" for="tfa_5625">Current Address:&nbsp;</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <textarea aria-required="true" id="tfa_5625" name="tfa_5625" title="Current Address: " class="required"></textarea>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_5626-D">
                                                                <label id="tfa_5626-L" class="label preField reqMark" for="tfa_5626">Date you moved to this address:&nbsp;</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_5626" name="tfa_5626" value="" aria-required="true" title="Date you moved to this address: " class="required">
                                                                </div>
                                                            </div>
                                                            <fieldset id="tfa_5427" class="section">
                                                                <legend id="tfa_5427-L"><b>Please give details of the country or countries in which you have been resident during the past ten years</b>
                                                                </legend>
                                                                <div class="oneField field-container-D    " id="tfa_5627-D">
                                                                    <label id="tfa_5627-L" class="label preField reqMark" for="tfa_5627">Country or Countries:</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <textarea aria-required="true" id="tfa_5627" name="tfa_5627" title="Country or Countries:" class="required"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5628-D">
                                                                    <label id="tfa_5628-L" class="label preField reqMark" for="tfa_5628">Please provide the dates that you resided in each country over this time. If you do not know the exact dates, please try to provide a month and year for each residency.</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <textarea aria-required="true" id="tfa_5628" name="tfa_5628" title="Please provide the dates that you resided in each country over this time. If you do not know the exact dates, please try to provide a month and year for each residency." class="required"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5629-D">
                                                                    <label id="tfa_5629-L" class="label preField reqMark" for="tfa_5629">Please tell us what the main reason for you being in each of those countries was.</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <textarea aria-required="true" aria-describedby="tfa_5629-HH" id="tfa_5629" name="tfa_5629" title="Please tell us what the main reason for you being in each of those countries was." class="required"></textarea><span class="field-hint-inactive" id="tfa_5629-H"><span id="tfa_5629-HH" class="hint">Reasons might include that you were living with your parents or a spouse, that you moved there in order to study, or that you moved there for work.</span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5630-D">
                                                                    <label id="tfa_5630-L" class="label preField " for="tfa_5630">If you would have been ordinarily resident in the UK and Islands or EEA/Switzerland during the last three years but for the fact that you, your spouse or your parent was temporarily working abroad, please give details (including length of times spent abroad and the nature of the work).</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <textarea id="tfa_5630" name="tfa_5630" title="If you would have been ordinarily resident in the UK and Islands or EEA/Switzerland during the last three years but for the fact that you, your spouse or your parent was temporarily working abroad, please give details (including length of times spent abroad and the nature of the work)." class=""></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5691-D">
                                                                    <label id="tfa_5691-L" class="label preField reqMark" for="tfa_5691">If you have not been resident in the UK and Islands or EEA/Switzerland but travelled to these countries during the last five years, perhaps for a holiday or to visit friends or family, please give details of your visits (including date of arrival, length of times spent and purpose of your visits)</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <textarea aria-required="true" id="tfa_5691" name="tfa_5691" title="If you have not been resident in the UK and Islands or EEA/Switzerland but travelled to these countries during the last five years, perhaps for a holiday or to visit friends or family, please give details of your visits (including date of arrival, length of times spent and purpose of your visits)" class="required"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5679-D">
                                                                    <label id="tfa_5679-L" class="label preField " for="tfa_5679">Please provide us with any documentation that demonstrates why you were only temporarily outside of the UK/EEA. This might include employment contracts for instance.</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <input type="file" id="tfa_5679" name="tfa_5679" size="" title="Please provide us with any documentation that demonstrates why you were only temporarily outside of the UK/EEA. This might include employment contracts for instance." class="">
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </fieldset>
                                                        <fieldset id="tfa_5631" class="section">
                                                            <legend id="tfa_5631-L"><b>Immigration Status (Please tick any that apply and give dates as requested)&nbsp;</b> &nbsp;&nbsp;</legend>
                                                            <div class="oneField field-container-D    " id="tfa_5680-D" role="group" aria-labelledby="tfa_5680-L" data-tfa-labelledby="-L tfa_5680-L">
                                                                <div class="inputWrapper"><span id="tfa_5680" class="choices vertical "><span class="oneChoice"><input type="checkbox" value="tfa_5681" class="" id="tfa_5681" name="tfa_5681" aria-labelledby="tfa_5681-L" data-tfa-labelledby="tfa_5680-L tfa_5681-L"><label class="label postField" id="tfa_5681-L" for="tfa_5681"><span class="input-checkbox-faux"></span><b>British Citizen or commonwealth national with rights to Abode</b> Please provide copy of relevant page(s) of passport (including page(s) confirming name and nationality)</label>
                                                                    </span><span class="oneChoice"><input type="checkbox" value="tfa_5682" class="" id="tfa_5682" name="tfa_5682" aria-labelledby="tfa_5682-L" data-tfa-labelledby="tfa_5680-L tfa_5682-L"><label class="label postField" id="tfa_5682-L" for="tfa_5682"><span class="input-checkbox-faux"></span><b>Indefinite leave to Enter/Remain</b> Please provide copy of relevant page(s) of passport (including page(s) confirming name and nationality and/or home Office Letter)</label>
                                                                    </span><span class="oneChoice"><input type="checkbox" value="tfa_5683" class="" id="tfa_5683" name="tfa_5683" aria-labelledby="tfa_5683-L" data-tfa-labelledby="tfa_5680-L tfa_5683-L"><label class="label postField" id="tfa_5683-L" for="tfa_5683"><span class="input-checkbox-faux"></span><b>Refugee status OR are you the child or spouse of someone granted refugee status</b> Please provide Home Office Letter (and any relevant enclosure) or refugee travel document</label>
                                                                    </span><span class="oneChoice"><input type="checkbox" value="tfa_5684" class="" id="tfa_5684" name="tfa_5684" aria-labelledby="tfa_5684-L" data-tfa-labelledby="tfa_5680-L tfa_5684-L"><label class="label postField" id="tfa_5684-L" for="tfa_5684"><span class="input-checkbox-faux"></span><b>Have you been granted discretionary leave to remain in the UK?</b>
                                                                    </label>
                                                                    </span><span class="oneChoice"><input type="checkbox" value="tfa_5685" class="" id="tfa_5685" name="tfa_5685" aria-labelledby="tfa_5685-L" data-tfa-labelledby="tfa_5680-L tfa_5685-L"><label class="label postField" id="tfa_5685-L" for="tfa_5685"><span class="input-checkbox-faux"></span><b>EU/EEA National, other than UK or Swiss national</b>&nbsp;Please provide copy of page(s) of passport confirming name and nationality. If none of above categories cover you, or if your status is likely to change before the start of the course please give details and provide supporting evidence</label>
                                                                    </span><span class="oneChoice"><input type="checkbox" value="tfa_5686" class="" id="tfa_5686" name="tfa_5686" aria-labelledby="tfa_5686-L" data-tfa-labelledby="tfa_5680-L tfa_5686-L"><label class="label postField" id="tfa_5686-L" for="tfa_5686"><span class="input-checkbox-faux"></span><b>Temporary employment of a parent/spouse overseas</b> Please provide details in section E along with evidence of return trips and links with the UK during this period. This may include studies or employment as well as holidays.</label>
                                                                    </span><span class="oneChoice"><input type="checkbox" value="tfa_5687" class="" id="tfa_5687" name="tfa_5687" aria-labelledby="tfa_5687-L" data-tfa-labelledby="tfa_5680-L tfa_5687-L"><label class="label postField" id="tfa_5687-L" for="tfa_5687"><span class="input-checkbox-faux"></span><b>Child of a EEA employed person/EEA/Swiss worker and family/child of a Swiss National</b> Please provide details in section E</label>
                                                                    </span><span class="oneChoice"><input type="checkbox" value="tfa_5688" class="" id="tfa_5688" name="tfa_5688" aria-labelledby="tfa_5688-L" data-tfa-labelledby="tfa_5680-L tfa_5688-L"><label class="label postField" id="tfa_5688-L" for="tfa_5688"><span class="input-checkbox-faux"></span><b>Dual residency in UK and another country</b> Please provide details in section E and include evidence to support this such as passport stamps to show return visits to UK. Details of property kept in the UK, etc.</label>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_5641-D">
                                                                <label id="tfa_5641-L" class="label preField " for="tfa_5641">Other:</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_5641" name="tfa_5641" value="" title="Other:" class="">
                                                                </div>
                                                            </div>
                                                            <fieldset id="tfa_5642" class="section">
                                                                <legend id="tfa_5642-L"><b>If you have been refused Refugee Status but have successfully been granted other leave, please confirm which of the below you were granted.</b>
                                                                </legend>
                                                                <div class="oneField field-container-D    " id="tfa_5644-D" role="radiogroup" aria-labelledby="tfa_5644-L" data-tfa-labelledby="-L tfa_5644-L">
                                                                    <label id="tfa_5644-L" class="label preField ">Refused Refugee status but granted one of the following:</label>
                                                                    <br>
                                                                    <div class="inputWrapper"><span id="tfa_5644" class="choices vertical "><span class="oneChoice"><input type="radio" value="tfa_5645" class="" id="tfa_5645" name="tfa_5644" aria-labelledby="tfa_5645-L" data-tfa-labelledby="tfa_5644-L tfa_5645-L"><label class="label postField" id="tfa_5645-L" for="tfa_5645"><span class="input-radio-faux"></span><span lang="EN-GB">Exceptional leave to remain/enter</span>
                                                                        </label>
                                                                        </span><span class="oneChoice"><input type="radio" value="tfa_5646" class="" id="tfa_5646" name="tfa_5644" aria-labelledby="tfa_5646-L" data-tfa-labelledby="tfa_5644-L tfa_5646-L"><label class="label postField" id="tfa_5646-L" for="tfa_5646"><span class="input-radio-faux"></span><span lang="EN-GB">Humanitarian protections</span>
                                                                        </label>
                                                                        </span><span class="oneChoice"><input type="radio" value="tfa_5647" class="" id="tfa_5647" name="tfa_5644" aria-labelledby="tfa_5647-L" data-tfa-labelledby="tfa_5644-L tfa_5647-L"><label class="label postField" id="tfa_5647-L" for="tfa_5647"><span class="input-radio-faux"></span><span lang="EN-GB">Discretionary leave</span>
                                                                        </label>
                                                                        </span><span class="oneChoice"><input type="radio" value="tfa_5648" class="" id="tfa_5648" name="tfa_5644" aria-labelledby="tfa_5648-L" data-tfa-labelledby="tfa_5644-L tfa_5648-L"><label class="label postField" id="tfa_5648-L" for="tfa_5648"><span class="input-radio-faux"></span><span lang="EN-GB">OR are you the child or spouse of someone refused refugee status but granted one of the above. Please provide Home Office letter and any relevant enclosure</span>
                                                                        </label>
                                                                        </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                            <fieldset id="tfa_5643" class="section">
                                                                <legend id="tfa_5643-L"><b>Time Limit on Stay</b>
                                                                </legend>
                                                                <div class="oneField field-container-D    " id="tfa_5690-D">
                                                                    <label id="tfa_5690-L" class="label preField " for="tfa_5690">If you only have temporary leave to remain in the UK, please provide us with the dates of your current leave.</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <input type="text" id="tfa_5690" name="tfa_5690" value="" title="If you only have temporary leave to remain in the UK, please provide us with the dates of your current leave." class="">
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5649-D">
                                                                    <label id="tfa_5649-L" class="label preField " for="tfa_5649">Date of last passport stamp/visa was issued&nbsp;</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <input type="text" id="tfa_5649" name="tfa_5649" value="" title="Date of last passport stamp/visa was issued " class="">
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5650-D">
                                                                    <label id="tfa_5650-L" class="label preField " for="tfa_5650">Date of expiry of most recent permission to stay</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <input type="text" id="tfa_5650" name="tfa_5650" value="" title="Date of expiry of most recent permission to stay " class="">
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5651-D">
                                                                    <label id="tfa_5651-L" class="label preField " for="tfa_5651">Please provide a copy of the relevant page(s) of your passport (if available), evidence of your nationality and any relevant immigration documentation.</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <input type="file" id="tfa_5651" name="tfa_5651" size="" title="Please provide a copy of the relevant page(s) of your passport (if available), evidence of your nationality and any relevant immigration documentation. " class="">
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </fieldset>
                                                        <fieldset id="tfa_5328" class="section">
                                                            <legend id="tfa_5328-L"><b>Employment in the UK/EEA</b>&nbsp; &nbsp;&nbsp;</legend>
                                                            <div class="oneField field-container-D    " id="tfa_8-D" role="radiogroup" aria-labelledby="tfa_8-L" data-tfa-labelledby="-L tfa_8-L">
                                                                <label id="tfa_8-L" class="label preField reqMark">Are you currently resident in the UK/EEA?&nbsp;</label>
                                                                <br>
                                                                <div class="inputWrapper"><span id="tfa_8" class="choices  required"><span class="oneChoice"><input type="radio" value="tfa_399" class="" id="tfa_399" name="tfa_8" aria-required="true" aria-labelledby="tfa_399-L" data-tfa-labelledby="tfa_8-L tfa_399-L"><label class="label postField" id="tfa_399-L" for="tfa_399"><span class="input-radio-faux"></span>Yes</label>
                                                                    </span><span class="oneChoice"><input type="radio" value="tfa_400" class="" id="tfa_400" name="tfa_8" aria-required="true" aria-labelledby="tfa_400-L" data-tfa-labelledby="tfa_8-L tfa_400-L"><label class="label postField" id="tfa_400-L" for="tfa_400"><span class="input-radio-faux"></span>No</label>
                                                                    </span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <fieldset id="tfa_5330" class="section">
                                                                <legend id="tfa_5330-L"><b>Have you, your spouse or your parents worked in the UK</b>
                                                                </legend>
                                                                <div class="oneField field-container-D    " id="tfa_5653-D" role="radiogroup" aria-labelledby="tfa_5653-L" data-tfa-labelledby="-L tfa_5653-L">
                                                                    <label id="tfa_5653-L" class="label preField reqMark">Self:&nbsp;&nbsp;</label>
                                                                    <br>
                                                                    <div class="inputWrapper"><span id="tfa_5653" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_5654" class="" id="tfa_5654" name="tfa_5653" aria-required="true" data-conditionals="#tfa_5652" aria-labelledby="tfa_5654-L" data-tfa-labelledby="tfa_5653-L tfa_5654-L"><label class="label postField" id="tfa_5654-L" for="tfa_5654"><span class="input-radio-faux"></span>Yes</label>
                                                                        </span><span class="oneChoice"><input type="radio" value="tfa_5655" class="" id="tfa_5655" name="tfa_5653" aria-required="true" aria-labelledby="tfa_5655-L" data-tfa-labelledby="tfa_5653-L tfa_5655-L"><label class="label postField" id="tfa_5655-L" for="tfa_5655"><span class="input-radio-faux"></span>No</label>
                                                                        </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5652-D">
                                                                    <label id="tfa_5652-L" class="label preField reqMark" for="tfa_5652">Please supply details (dates, name of employer etc)&nbsp;</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <textarea aria-required="true" id="tfa_5652" name="tfa_5652" data-condition="`#tfa_5654`" title="Please supply details (dates, name of employer etc) " class="required"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5659-D" role="radiogroup" aria-labelledby="tfa_5659-L" data-tfa-labelledby="-L tfa_5659-L">
                                                                    <label id="tfa_5659-L" class="label preField reqMark">Spouse:&nbsp; &nbsp;</label>
                                                                    <br>
                                                                    <div class="inputWrapper"><span id="tfa_5659" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_5660" class="" id="tfa_5660" name="tfa_5659" aria-required="true" data-conditionals="#tfa_5669" aria-labelledby="tfa_5660-L" data-tfa-labelledby="tfa_5659-L tfa_5660-L"><label class="label postField" id="tfa_5660-L" for="tfa_5660"><span class="input-radio-faux"></span>Yes</label>
                                                                        </span><span class="oneChoice"><input type="radio" value="tfa_5661" class="" id="tfa_5661" name="tfa_5659" aria-required="true" aria-labelledby="tfa_5661-L" data-tfa-labelledby="tfa_5659-L tfa_5661-L"><label class="label postField" id="tfa_5661-L" for="tfa_5661"><span class="input-radio-faux"></span>No</label>
                                                                        </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5669-D">
                                                                    <label id="tfa_5669-L" class="label preField reqMark" for="tfa_5669">Please supply details (dates, name of employer etc)&nbsp;</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <textarea aria-required="true" id="tfa_5669" name="tfa_5669" data-condition="`#tfa_5660`" title="Please supply details (dates, name of employer etc) " class="required"></textarea>
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5665-D" role="radiogroup" aria-labelledby="tfa_5665-L" data-tfa-labelledby="-L tfa_5665-L">
                                                                    <label id="tfa_5665-L" class="label preField reqMark">Parent:&nbsp; &nbsp;</label>
                                                                    <br>
                                                                    <div class="inputWrapper"><span id="tfa_5665" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_5666" class="" id="tfa_5666" name="tfa_5665" aria-required="true" data-conditionals="#tfa_5671" aria-labelledby="tfa_5666-L" data-tfa-labelledby="tfa_5665-L tfa_5666-L"><label class="label postField" id="tfa_5666-L" for="tfa_5666"><span class="input-radio-faux"></span>Yes</label>
                                                                        </span><span class="oneChoice"><input type="radio" value="tfa_5667" class="" id="tfa_5667" name="tfa_5665" aria-required="true" aria-labelledby="tfa_5667-L" data-tfa-labelledby="tfa_5665-L tfa_5667-L"><label class="label postField" id="tfa_5667-L" for="tfa_5667"><span class="input-radio-faux"></span>No</label>
                                                                        </span>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                                <div class="oneField field-container-D    " id="tfa_5671-D">
                                                                    <label id="tfa_5671-L" class="label preField reqMark" for="tfa_5671">Please supply details (dates, name of employer etc)&nbsp;</label>
                                                                    <br>
                                                                    <div class="inputWrapper">
                                                                        <textarea aria-required="true" id="tfa_5671" name="tfa_5671" data-condition="`#tfa_5666`" title="Please supply details (dates, name of employer etc) " class="required"></textarea>
                                                                    </div>
                                                                </div>
                                                            </fieldset>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="wfPage" id="wfPgIndex-3">
                                                    <div class="section pageSection" id="tfa_5327">
                                                        <fieldset id="tfa_5672" class="section">
                                                            <legend id="tfa_5672-L"><b>Additional Information </b>
                                                            </legend>
                                                            <div class="oneField field-container-D    " id="tfa_5673-D">
                                                                <label id="tfa_5673-L" class="label preField " for="tfa_5673">Give below any additional information about yourself, your family or your circumstances which you believe to be relevant but is not covered by your answers to questions elsewhere on this questionnaire</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <textarea id="tfa_5673" name="tfa_5673" title="Give below any additional information about yourself, your family or your circumstances which you believe to be relevant but is not covered by your answers to questions elsewhere on this questionnaire" class=""></textarea>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                        <fieldset id="tfa_5674" class="section">
                                                            <legend id="tfa_5674-L"><b>I certify that, to the best of my belief, the information I have provided is complete and true.</b> &nbsp; &nbsp;&nbsp;</legend>
                                                            <div class="oneField field-container-D    " id="tfa_5676-D">
                                                                <label id="tfa_5676-L" class="label preField reqMark" for="tfa_5676">Signed:</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_5676" name="tfa_5676" value="" aria-required="true" title="Signed:" class="required">
                                                                </div>
                                                            </div>
                                                            <div class="oneField field-container-D    " id="tfa_5675-D">
                                                                <label id="tfa_5675-L" class="label preField reqMark" for="tfa_5675">Date:</label>
                                                                <br>
                                                                <div class="inputWrapper">
                                                                    <input type="text" id="tfa_5675" name="tfa_5675" value="" aria-required="true" title="Date:" class="required">
                                                                </div>
                                                            </div>
                                                            <div class="htmlSection" id="tfa_5677">
                                                                <div class="htmlContent" id="tfa_5677-HTML">
                                                                    <p><b>Data Protection Act 2018:</b> I agree to the University processing personal data contained in this form or other data which the University may obtain from me or other people. I agree to the processing of such data for any purposes connected with my studies or my health and safety whilst on the premises or for any other legitimate reason including communication with me following the completion of my studies. In addition, I agree to the University processing personal data described as Sensitive Data within the meaning of the Data Protection Act 2018 such processing to be undertaken for any purposes indicated in the Declaration.</p>
                                                                    <p>If you require any assistance with this questionnaire please contact your Admissions Officer. The completed questionnaire and supporting documents should be returned to your Admissions Officer</p>
                                                                    <p>If any information supplied by you is found to be incorrect we reserve the right to reassess your fee status at any time.&nbsp; Fees will be amended accordingly.</p>
                                                                </div>
                                                            </div>
                                                        </fieldset>
                                                    </div>
                                                </div>
                                                <div class="actions" id="4827955-A">
                                                    <input type="submit" data-label="Submit" class="primaryAction" id="submit_button" value="Submit">
                                                </div>
                                                <div style="clear:both"></div>
                                                <input type="hidden" value="4827955" name="tfa_dbFormId" id="tfa_dbFormId">
                                                <input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId">
                                                <input type="hidden" value="d912aa44e1c548e7034c38ac1dc19db6" name="tfa_dbControl" id="tfa_dbControl">
                                                <input type="hidden" value="11" name="tfa_dbVersionId" id="tfa_dbVersionId">
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

<!--Form script -->
<script>
	$(function () {
		$("#tfa_62").attr('readonly', 'readonly');
		$("#tfa_62").datepicker(
		{
			changeMonth: true,
			changeYear: true,
			dateFormat: 'dd/mm/yy',
			yearRange: "-65:+40"

        });
        
        $("#tfa_5610").attr('readonly', 'readonly');
        $("#tfa_5610").datepicker(
        {
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: "-40:+40"

        });

        $("#tfa_5626").attr('readonly', 'readonly');
        $("#tfa_5626").datepicker(
        {
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: "-90:+90"

        });

        $("#tfa_5649").attr('readonly', 'readonly');
        $("#tfa_5649").datepicker(
        {
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: "-40:+40"

        });

        $("#tfa_5650").attr('readonly', 'readonly');
        $("#tfa_5650").datepicker(
        {
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: "-40:+40"

        });

        $("#tfa_5675").attr('readonly', 'readonly');
        $("#tfa_5675").datepicker(
        {
            changeMonth: true,
            changeYear: true,
            dateFormat: 'dd/mm/yy',
            yearRange: "-40:+40"

        });
	});


	$(document).ready(function () {
        var bound_inputs = new Array();
        var isOver = false;
        $("#Online-Application").on('click', function () {
            $('input:file').each(function () {
                if (-1 === $.inArray(this, bound_inputs)) {
                    bound_inputs.push(this);
                    $(this).bind('change', function () {
                        totalsize();
                    });
                }
            });
        });
        
        $('.primaryAction').on('click', function () {
            totalsize();
            if (isOver === true) {
                return false;
            }
        });


        function totalsize() {
            var total = 0;
            isOver = false;
            $('input[type="file"]').each(function () {
                if (this.files[0]) {
                    if (this.files[0].size == 0 || this.files[0].size < 50) {
                        $(this).val('');
                        $(this).replaceWith($(this).clone());
                        alert('The attachments that you are trying to submit is invalid');
                    }
                    else {
                        total += this.files[0].size;
                        if (total > 25000000) {
                            alert('Your attachments have exceeded the 25MB file size limit. Please reduce the file size of your attachments.');
                            isOver = true;
                        }
                    }
                }
            });
        }
    });
</script>