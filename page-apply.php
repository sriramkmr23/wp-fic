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
            <section class="page-title">
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <h1><?php the_title(); ?></h1>
                     </div>
                  </div>
               </div>
            </section>
            <?php // Get Standard Components
               if( have_rows('standard-content') ):
               
                while ( have_rows('standard-content') ) : the_row();
               
                    $section_path = 'template-parts/'.get_row_layout();
               
                    get_template_part($section_path);
               
                endwhile;
               
               endif; ?>
            <section class="application-form">
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <!-- FORM: HEAD SECTION -->
                        <script type="text/javascript">
                           document.addEventListener("DOMContentLoaded", function(){
                               const FORM_TIME_START = Math.floor((new Date).getTime()/1000);
                               let formElement = document.getElementById("tfa_0");
                               if (null === formElement) {
                                   formElement = document.getElementById("0");
                               }
                               let appendJsTimerElement = function(){
                                   let formTimeDiff = Math.floor((new Date).getTime()/1000) - FORM_TIME_START;
                                   let cumulatedTimeElement = document.getElementById("tfa_dbCumulatedTime");
                                   if (null !== cumulatedTimeElement) {
                                       let cumulatedTime = parseInt(cumulatedTimeElement.value);
                                       if (null !== cumulatedTime && cumulatedTime > 0) {
                                           formTimeDiff += cumulatedTime;
                                       }
                                   }
                                   let jsTimeInput = document.createElement("input");
                                   jsTimeInput.setAttribute("type", "hidden");
                                   jsTimeInput.setAttribute("value", formTimeDiff.toString());
                                   jsTimeInput.setAttribute("name", "tfa_dbElapsedJsTime");
                                   jsTimeInput.setAttribute("id", "tfa_dbElapsedJsTime");
                                   jsTimeInput.setAttribute("autocomplete", "off");
                                   if (null !== formElement) {
                                       formElement.appendChild(jsTimeInput);
                                   }
                               };
                               if (null !== formElement) {
                                   if(formElement.addEventListener){
                                       formElement.addEventListener('submit', appendJsTimerElement, false);
                                   } else if(formElement.attachEvent){
                                       formElement.attachEvent('onsubmit', appendJsTimerElement);
                                   }
                               }
                           });
                        </script>
                        <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-layout.css?v=b9d863f1a63c801b754c933121026f1ba3afb96b" rel="stylesheet" type="text/css" />
                        <link href="https://www.tfaforms.com/dist/form-builder/5.0.0/wforms-jsonly.css?v=b9d863f1a63c801b754c933121026f1ba3afb96b" rel="alternate stylesheet" title="This stylesheet activated by javascript" type="text/css" />
                        <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/wforms.js?v=b9d863f1a63c801b754c933121026f1ba3afb96b"></script>
                        <script type="text/javascript">
                           wFORMS.behaviors.prefill.skip = false;
                        </script>
                        <link rel="stylesheet" type="text/css" href="https://www.tfaforms.com/css/kalendae.css" />
                        <script type="text/javascript" src="https://www.tfaforms.com/js/kalendae/kalendae.standalone.min.js" ></script>
                        <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/wforms_calendar.js"></script>
                        <script type="text/javascript" src="https://www.tfaforms.com/wForms/3.11/js/localization-en_GB.js?v=b9d863f1a63c801b754c933121026f1ba3afb96b"></script>
                        <style type="text/css">
                           #tfa_5489,*[id^="tfa_5489["] { width: 195px !important;}
                           #tfa_5489-D,*[id^="tfa_5489["][class~="field-container-D"] { width: auto !important; }
                           #tfa_8357-L,label[id^="tfa_8357["] { width: 204px !important; min-width: 0px; }
                           #tfa_8363-L,label[id^="tfa_8363["] { width: 204px !important; min-width: 0px;}
                           #tfa_72,*[id^="tfa_72["] { width: 150px !important; }
                           #tfa_72-D,*[id^="tfa_72["][class~="field-container-D"] { width: auto !important; }
                           #tfa_163-L,label[id^="tfa_163["] { width: 585px !important; min-width: 0px; }
                           #tfa_177-D, #tfa_74-D { display: none; }
                           .wForm select {padding: .375rem .75rem;}
                           div#tfa_61-D {margin-top: 0px;}
                           fieldset#tfa_5320{margin-top: 0px;}
                           }
                        </style>
                        <!-- Start of Online Application -->
                        <!-- FORM: BODY SECTION -->
                        <div class="wFormContainer">
                           <div class="">
                              <div class="wForm" id="4879136-WRPR" dir="ltr">
                                 <div class="codesection" id="code-4879136">
                                    <script src="https://85f1249248e2cd649389-8dc6c11e1e3524ca11dc4a23c44196ab.ssl.cf6.rackcdn.com/fa-online_application_init.js"></script>
                                 </div>
                                 <div class="codesection" id="code-tfa_0"></div>
                                 <form method="post" action="https://navitas.tfaforms.net/responses/processor" class="hintsBelow labelsAbove" id="335853" role="form" enctype="multipart/form-data">
                                    <div class="wfPage" id="wfPgIndex-1"><div class="section pageSection" id="tfa_5319">
                                    <h4 id="tfa_5319-T">Applicant Type</h4>
                                    <fieldset id="tfa_5317" class="section">
                                    <legend id="tfa_5317-L"><b>Citizenship and Eligibility</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_10-D">
                                    <label id="tfa_10-L" class="label preField reqMark" for="tfa_10">Country of Citizenship</label><br><div class="inputWrapper"><select id="tfa_10" name="tfa_10" title="Country of Citizenship" aria-required="true" class="required"><option value="">Please select...</option>
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
                                    <option value="tfa_659" id="tfa_659" class="">Austria</option>
                                    <option value="tfa_660" id="tfa_660" class="">Azerbaijan</option>
                                    <option value="tfa_661" id="tfa_661" class="">Bahamas</option>
                                    <option value="tfa_662" id="tfa_662" class="">Bahrain</option>
                                    <option value="tfa_663" id="tfa_663" class="">Bangladesh</option>
                                    <option value="tfa_664" id="tfa_664" class="">Barbados</option>
                                    <option value="tfa_665" id="tfa_665" class="">Belarus</option>
                                    <option value="tfa_666" id="tfa_666" class="">Belgium</option>
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
                                    <option value="tfa_677" id="tfa_677" class="">Bulgaria</option>
                                    <option value="tfa_678" id="tfa_678" class="">Burkina Faso</option>
                                    <option value="tfa_679" id="tfa_679" class="">Burundi</option>
                                    <option value="tfa_680" id="tfa_680" class="">Cambodia</option>
                                    <option value="tfa_681" id="tfa_681" class="">Cameroon</option>
                                    <option value="tfa_682" id="tfa_682" data-conditionals="#tfa_80" class="">Canada</option>
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
                                    <option value="tfa_694" id="tfa_694" class="">Croatia</option>
                                    <option value="tfa_695" id="tfa_695" class="">Cuba</option>
                                    <option value="tfa_696" id="tfa_696" class="">Cyprus</option>
                                    <option value="tfa_697" id="tfa_697" class="">Czech Republic</option>
                                    <option value="tfa_698" id="tfa_698" class="">Dem Rep of the Congo</option>
                                    <option value="tfa_699" id="tfa_699" class="">Denmark</option>
                                    <option value="tfa_700" id="tfa_700" class="">Djibouti</option>
                                    <option value="tfa_701" id="tfa_701" class="">Dominica</option>
                                    <option value="tfa_702" id="tfa_702" class="">Dominican Republic</option>
                                    <option value="tfa_703" id="tfa_703" class="">East Timor</option>
                                    <option value="tfa_704" id="tfa_704" class="">Ecuador</option>
                                    <option value="tfa_705" id="tfa_705" class="">Egypt</option>
                                    <option value="tfa_706" id="tfa_706" class="">El Salvador</option>
                                    <option value="tfa_707" id="tfa_707" class="">Equatorial Guinea</option>
                                    <option value="tfa_708" id="tfa_708" class="">Eritrea</option>
                                    <option value="tfa_709" id="tfa_709" class="">Estonia</option>
                                    <option value="tfa_710" id="tfa_710" class="">Ethiopia</option>
                                    <option value="tfa_711" id="tfa_711" class="">Faeroe Islands</option>
                                    <option value="tfa_712" id="tfa_712" class="">Falkland Islands</option>
                                    <option value="tfa_713" id="tfa_713" class="">Fiji</option>
                                    <option value="tfa_714" id="tfa_714" class="">Finland</option>
                                    <option value="tfa_715" id="tfa_715" class="">France</option>
                                    <option value="tfa_716" id="tfa_716" class="">French Guiana</option>
                                    <option value="tfa_717" id="tfa_717" class="">French Polynesia</option>
                                    <option value="tfa_718" id="tfa_718" class="">Gabon</option>
                                    <option value="tfa_719" id="tfa_719" class="">Gambia</option>
                                    <option value="tfa_720" id="tfa_720" class="">Georgia</option>
                                    <option value="tfa_721" id="tfa_721" class="">Germany</option>
                                    <option value="tfa_722" id="tfa_722" class="">Ghana</option>
                                    <option value="tfa_723" id="tfa_723" class="">Gibraltar</option>
                                    <option value="tfa_724" id="tfa_724" class="">Greece</option>
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
                                    <option value="tfa_738" id="tfa_738" class="">Hungary</option>
                                    <option value="tfa_739" id="tfa_739" class="">Iceland</option>
                                    <option value="tfa_740" id="tfa_740" class="">India</option>
                                    <option value="tfa_741" id="tfa_741" class="">Indonesia</option>
                                    <option value="tfa_742" id="tfa_742" class="">Iran</option>
                                    <option value="tfa_743" id="tfa_743" class="">Iraq</option>
                                    <option value="tfa_744" id="tfa_744" class="">Ireland</option>
                                    <option value="tfa_745" id="tfa_745" class="">Isle of Man</option>
                                    <option value="tfa_746" id="tfa_746" class="">Israel</option>
                                    <option value="tfa_747" id="tfa_747" class="">Italy</option>
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
                                    <option value="tfa_759" id="tfa_759" class="">Latvia</option>
                                    <option value="tfa_760" id="tfa_760" class="">Lebanon</option>
                                    <option value="tfa_761" id="tfa_761" class="">Lesotho</option>
                                    <option value="tfa_762" id="tfa_762" class="">Liberia</option>
                                    <option value="tfa_763" id="tfa_763" class="">Libya</option>
                                    <option value="tfa_764" id="tfa_764" class="">Liechtenstein</option>
                                    <option value="tfa_765" id="tfa_765" class="">Lithuania</option>
                                    <option value="tfa_766" id="tfa_766" class="">Luxembourg</option>
                                    <option value="tfa_767" id="tfa_767" class="">Macao</option>
                                    <option value="tfa_768" id="tfa_768" class="">Macedonia</option>
                                    <option value="tfa_769" id="tfa_769" class="">Madagascar</option>
                                    <option value="tfa_770" id="tfa_770" class="">Malawi</option>
                                    <option value="tfa_771" id="tfa_771" class="">Malaysia</option>
                                    <option value="tfa_772" id="tfa_772" class="">Maldives</option>
                                    <option value="tfa_773" id="tfa_773" class="">Mali</option>
                                    <option value="tfa_774" id="tfa_774" class="">Malta</option>
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
                                    <option value="tfa_792" id="tfa_792" class="">Netherlands</option>
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
                                    <option value="tfa_814" id="tfa_814" class="">Poland</option>
                                    <option value="tfa_815" id="tfa_815" class="">Portugal</option>
                                    <option value="tfa_816" id="tfa_816" class="">Puerto Rico</option>
                                    <option value="tfa_817" id="tfa_817" class="">Qatar</option>
                                    <option value="tfa_818" id="tfa_818" class="">Republic of Moldova</option>
                                    <option value="tfa_819" id="tfa_819" class="">Reunion</option>
                                    <option value="tfa_820" id="tfa_820" class="">Romania</option>
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
                                    <option value="tfa_837" id="tfa_837" class="">Slovakia</option>
                                    <option value="tfa_838" id="tfa_838" class="">Slovenia</option>
                                    <option value="tfa_839" id="tfa_839" class="">Solomon Islands</option>
                                    <option value="tfa_840" id="tfa_840" class="">Somalia</option>
                                    <option value="tfa_841" id="tfa_841" class="">South Africa</option>
                                    <option value="tfa_842" id="tfa_842" class="">South Korea</option>
                                    <option value="tfa_843" id="tfa_843" class="">South Sudan</option>
                                    <option value="tfa_844" id="tfa_844" class="">Spain</option>
                                    <option value="tfa_845" id="tfa_845" class="">Sri Lanka</option>
                                    <option value="tfa_846" id="tfa_846" class="">St Pierre &amp; Miquelon</option>
                                    <option value="tfa_847" id="tfa_847" class="">St Vinc &amp; Grenadine</option>
                                    <option value="tfa_848" id="tfa_848" class="">Sudan</option>
                                    <option value="tfa_849" id="tfa_849" class="">Suriname</option>
                                    <option value="tfa_850" id="tfa_850" class="">Svalbard &amp; Jan Mayen</option>
                                    <option value="tfa_851" id="tfa_851" class="">Swaziland</option>
                                    <option value="tfa_852" id="tfa_852" class="">Sweden</option>
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
                                    <option value="tfa_871" id="tfa_871" class="">United Kingdom</option>
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
                                    <option value="tfa_884" id="tfa_884" class="">Zimbabwe</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_7042-D">
                                    <label id="tfa_7042-L" class="label preField reqMark" for="tfa_7042">Country of Residence</label><br><div class="inputWrapper"><select id="tfa_7042" name="tfa_7042" title="Country of Residence" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_7043" id="tfa_7043" class="">Afghanistan</option>
                                    <option value="tfa_7044" id="tfa_7044" class="">Aland Islands</option>
                                    <option value="tfa_7045" id="tfa_7045" class="">Albania</option>
                                    <option value="tfa_7046" id="tfa_7046" class="">Algeria</option>
                                    <option value="tfa_7047" id="tfa_7047" class="">American Samoa</option>
                                    <option value="tfa_7048" id="tfa_7048" class="">Andorra</option>
                                    <option value="tfa_7049" id="tfa_7049" class="">Angola</option>
                                    <option value="tfa_7050" id="tfa_7050" class="">Anguilla</option>
                                    <option value="tfa_7051" id="tfa_7051" class="">Antigua and Barbuda</option>
                                    <option value="tfa_7052" id="tfa_7052" class="">Argentina</option>
                                    <option value="tfa_7053" id="tfa_7053" class="">Armenia</option>
                                    <option value="tfa_7054" id="tfa_7054" class="">Aruba</option>
                                    <option value="tfa_7055" id="tfa_7055" class="">Australia</option>
                                    <option value="tfa_7056" id="tfa_7056" class="">Austria</option>
                                    <option value="tfa_7057" id="tfa_7057" class="">Azerbaijan</option>
                                    <option value="tfa_7058" id="tfa_7058" class="">Bahamas</option>
                                    <option value="tfa_7059" id="tfa_7059" class="">Bahrain</option>
                                    <option value="tfa_7060" id="tfa_7060" class="">Bangladesh</option>
                                    <option value="tfa_7061" id="tfa_7061" class="">Barbados</option>
                                    <option value="tfa_7062" id="tfa_7062" class="">Belarus</option>
                                    <option value="tfa_7063" id="tfa_7063" class="">Belgium</option>
                                    <option value="tfa_7064" id="tfa_7064" class="">Belize</option>
                                    <option value="tfa_7065" id="tfa_7065" class="">Benin</option>
                                    <option value="tfa_7066" id="tfa_7066" class="">Bermuda</option>
                                    <option value="tfa_7067" id="tfa_7067" class="">Bhutan</option>
                                    <option value="tfa_7068" id="tfa_7068" class="">Bolivia</option>
                                    <option value="tfa_7069" id="tfa_7069" class="">Bosnia &amp; Herzegovina</option>
                                    <option value="tfa_7070" id="tfa_7070" class="">Botswana</option>
                                    <option value="tfa_7071" id="tfa_7071" class="">Brazil</option>
                                    <option value="tfa_7072" id="tfa_7072" class="">British Virgin Isle</option>
                                    <option value="tfa_7073" id="tfa_7073" class="">Brunei</option>
                                    <option value="tfa_7074" id="tfa_7074" class="">Bulgaria</option>
                                    <option value="tfa_7075" id="tfa_7075" class="">Burkina Faso</option>
                                    <option value="tfa_7076" id="tfa_7076" class="">Burundi</option>
                                    <option value="tfa_7077" id="tfa_7077" class="">Cambodia</option>
                                    <option value="tfa_7078" id="tfa_7078" class="">Cameroon</option>
                                    <option value="tfa_7079" id="tfa_7079" class="">Canada</option>
                                    <option value="tfa_7080" id="tfa_7080" class="">Cape Verde</option>
                                    <option value="tfa_7081" id="tfa_7081" class="">Cayman Islands</option>
                                    <option value="tfa_7082" id="tfa_7082" class="">Central African Rep</option>
                                    <option value="tfa_7083" id="tfa_7083" class="">Chad</option>
                                    <option value="tfa_7084" id="tfa_7084" class="">Chile</option>
                                    <option value="tfa_7085" id="tfa_7085" class="">China</option>
                                    <option value="tfa_7086" id="tfa_7086" class="">Colombia</option>
                                    <option value="tfa_7087" id="tfa_7087" class="">Comoros</option>
                                    <option value="tfa_7088" id="tfa_7088" class="">Congo</option>
                                    <option value="tfa_7089" id="tfa_7089" class="">Cook Islands</option>
                                    <option value="tfa_7090" id="tfa_7090" class="">Costa Rica</option>
                                    <option value="tfa_7091" id="tfa_7091" class="">Croatia</option>
                                    <option value="tfa_7092" id="tfa_7092" class="">Cuba</option>
                                    <option value="tfa_7093" id="tfa_7093" class="">Cyprus</option>
                                    <option value="tfa_7094" id="tfa_7094" class="">Czech Republic</option>
                                    <option value="tfa_7095" id="tfa_7095" class="">Dem Rep of the Congo</option>
                                    <option value="tfa_7096" id="tfa_7096" class="">Denmark</option>
                                    <option value="tfa_7097" id="tfa_7097" class="">Djibouti</option>
                                    <option value="tfa_7098" id="tfa_7098" class="">Dominica</option>
                                    <option value="tfa_7099" id="tfa_7099" class="">Dominican Republic</option>
                                    <option value="tfa_7100" id="tfa_7100" class="">East Timor</option>
                                    <option value="tfa_7101" id="tfa_7101" class="">Ecuador</option>
                                    <option value="tfa_7102" id="tfa_7102" class="">Egypt</option>
                                    <option value="tfa_7103" id="tfa_7103" class="">El Salvador</option>
                                    <option value="tfa_7104" id="tfa_7104" class="">Equatorial Guinea</option>
                                    <option value="tfa_7105" id="tfa_7105" class="">Eritrea</option>
                                    <option value="tfa_7106" id="tfa_7106" class="">Estonia</option>
                                    <option value="tfa_7107" id="tfa_7107" class="">Ethiopia</option>
                                    <option value="tfa_7108" id="tfa_7108" class="">Faeroe Islands</option>
                                    <option value="tfa_7109" id="tfa_7109" class="">Falkland Islands</option>
                                    <option value="tfa_7110" id="tfa_7110" class="">Fiji</option>
                                    <option value="tfa_7111" id="tfa_7111" class="">Finland</option>
                                    <option value="tfa_7112" id="tfa_7112" class="">France</option>
                                    <option value="tfa_7113" id="tfa_7113" class="">French Guiana</option>
                                    <option value="tfa_7114" id="tfa_7114" class="">French Polynesia</option>
                                    <option value="tfa_7115" id="tfa_7115" class="">Gabon</option>
                                    <option value="tfa_7116" id="tfa_7116" class="">Gambia</option>
                                    <option value="tfa_7117" id="tfa_7117" class="">Georgia</option>
                                    <option value="tfa_7118" id="tfa_7118" class="">Germany</option>
                                    <option value="tfa_7119" id="tfa_7119" class="">Ghana</option>
                                    <option value="tfa_7120" id="tfa_7120" class="">Gibraltar</option>
                                    <option value="tfa_7121" id="tfa_7121" class="">Greece</option>
                                    <option value="tfa_7122" id="tfa_7122" class="">Greenland</option>
                                    <option value="tfa_7123" id="tfa_7123" class="">Grenada</option>
                                    <option value="tfa_7124" id="tfa_7124" class="">Guadeloupe</option>
                                    <option value="tfa_7125" id="tfa_7125" class="">Guam</option>
                                    <option value="tfa_7126" id="tfa_7126" class="">Guatemala</option>
                                    <option value="tfa_7127" id="tfa_7127" class="">Guernsey</option>
                                    <option value="tfa_7128" id="tfa_7128" class="">Guinea</option>
                                    <option value="tfa_7129" id="tfa_7129" class="">Guinea-Bissau</option>
                                    <option value="tfa_7130" id="tfa_7130" class="">Guyana</option>
                                    <option value="tfa_7131" id="tfa_7131" class="">Haiti</option>
                                    <option value="tfa_7132" id="tfa_7132" class="">Holy See</option>
                                    <option value="tfa_7133" id="tfa_7133" class="">Honduras</option>
                                    <option value="tfa_7134" id="tfa_7134" class="">Hong Kong</option>
                                    <option value="tfa_7135" id="tfa_7135" class="">Hungary</option>
                                    <option value="tfa_7136" id="tfa_7136" class="">Iceland</option>
                                    <option value="tfa_7137" id="tfa_7137" class="">India</option>
                                    <option value="tfa_7138" id="tfa_7138" class="">Indonesia</option>
                                    <option value="tfa_7139" id="tfa_7139" class="">Iran</option>
                                    <option value="tfa_7140" id="tfa_7140" class="">Iraq</option>
                                    <option value="tfa_7141" id="tfa_7141" class="">Ireland</option>
                                    <option value="tfa_7142" id="tfa_7142" class="">Isle of Man</option>
                                    <option value="tfa_7143" id="tfa_7143" class="">Israel</option>
                                    <option value="tfa_7144" id="tfa_7144" class="">Italy</option>
                                    <option value="tfa_7145" id="tfa_7145" class="">Ivory Coast</option>
                                    <option value="tfa_7146" id="tfa_7146" class="">Jamaica</option>
                                    <option value="tfa_7147" id="tfa_7147" class="">Japan</option>
                                    <option value="tfa_7148" id="tfa_7148" class="">Jersey</option>
                                    <option value="tfa_7149" id="tfa_7149" class="">Jordan</option>
                                    <option value="tfa_7150" id="tfa_7150" class="">Kazakhstan</option>
                                    <option value="tfa_7151" id="tfa_7151" class="">Kenya</option>
                                    <option value="tfa_7152" id="tfa_7152" class="">Kiribati</option>
                                    <option value="tfa_7153" id="tfa_7153" class="">Kuwait</option>
                                    <option value="tfa_7154" id="tfa_7154" class="">Kyrgyzstan</option>
                                    <option value="tfa_7155" id="tfa_7155" class="">Laos</option>
                                    <option value="tfa_7156" id="tfa_7156" class="">Latvia</option>
                                    <option value="tfa_7157" id="tfa_7157" class="">Lebanon</option>
                                    <option value="tfa_7158" id="tfa_7158" class="">Lesotho</option>
                                    <option value="tfa_7159" id="tfa_7159" class="">Liberia</option>
                                    <option value="tfa_7160" id="tfa_7160" class="">Libya</option>
                                    <option value="tfa_7161" id="tfa_7161" class="">Liechtenstein</option>
                                    <option value="tfa_7162" id="tfa_7162" class="">Lithuania</option>
                                    <option value="tfa_7163" id="tfa_7163" class="">Luxembourg</option>
                                    <option value="tfa_7164" id="tfa_7164" class="">Macao</option>
                                    <option value="tfa_7165" id="tfa_7165" class="">Macedonia</option>
                                    <option value="tfa_7166" id="tfa_7166" class="">Madagascar</option>
                                    <option value="tfa_7167" id="tfa_7167" class="">Malawi</option>
                                    <option value="tfa_7168" id="tfa_7168" class="">Malaysia</option>
                                    <option value="tfa_7169" id="tfa_7169" class="">Maldives</option>
                                    <option value="tfa_7170" id="tfa_7170" class="">Mali</option>
                                    <option value="tfa_7171" id="tfa_7171" class="">Malta</option>
                                    <option value="tfa_7172" id="tfa_7172" class="">Marshall Islands</option>
                                    <option value="tfa_7173" id="tfa_7173" class="">Martinique</option>
                                    <option value="tfa_7174" id="tfa_7174" class="">Mauritania</option>
                                    <option value="tfa_7175" id="tfa_7175" class="">Mauritius</option>
                                    <option value="tfa_7176" id="tfa_7176" class="">Mayotte</option>
                                    <option value="tfa_7177" id="tfa_7177" class="">Mexico</option>
                                    <option value="tfa_7178" id="tfa_7178" class="">Micronesia</option>
                                    <option value="tfa_7179" id="tfa_7179" class="">Monaco</option>
                                    <option value="tfa_7180" id="tfa_7180" class="">Mongolia</option>
                                    <option value="tfa_7181" id="tfa_7181" class="">Montenegro</option>
                                    <option value="tfa_7182" id="tfa_7182" class="">Montserrat</option>
                                    <option value="tfa_7183" id="tfa_7183" class="">Morocco</option>
                                    <option value="tfa_7184" id="tfa_7184" class="">Mozambique</option>
                                    <option value="tfa_7185" id="tfa_7185" class="">Myanmar</option>
                                    <option value="tfa_7186" id="tfa_7186" class="">Namibia</option>
                                    <option value="tfa_7187" id="tfa_7187" class="">Nauru</option>
                                    <option value="tfa_7188" id="tfa_7188" class="">Nepal</option>
                                    <option value="tfa_7189" id="tfa_7189" class="">Netherlands</option>
                                    <option value="tfa_7190" id="tfa_7190" class="">Netherlands Antilles</option>
                                    <option value="tfa_7191" id="tfa_7191" class="">New Caledonia</option>
                                    <option value="tfa_7192" id="tfa_7192" class="">New Zealand</option>
                                    <option value="tfa_7193" id="tfa_7193" class="">Nicaragua</option>
                                    <option value="tfa_7194" id="tfa_7194" class="">Niger</option>
                                    <option value="tfa_7195" id="tfa_7195" class="">Nigeria</option>
                                    <option value="tfa_7196" id="tfa_7196" class="">Niue</option>
                                    <option value="tfa_7197" id="tfa_7197" class="">Norfolk Island</option>
                                    <option value="tfa_7198" id="tfa_7198" class="">North Korea</option>
                                    <option value="tfa_7199" id="tfa_7199" class="">Norway</option>
                                    <option value="tfa_7200" id="tfa_7200" class="">Nth Mariana Islands</option>
                                    <option value="tfa_7201" id="tfa_7201" class="">Oman</option>
                                    <option value="tfa_7202" id="tfa_7202" class="">Pakistan</option>
                                    <option value="tfa_7203" id="tfa_7203" class="">Palau</option>
                                    <option value="tfa_7204" id="tfa_7204" class="">Palestine</option>
                                    <option value="tfa_7205" id="tfa_7205" class="">Panama</option>
                                    <option value="tfa_7206" id="tfa_7206" class="">Papua New Guinea</option>
                                    <option value="tfa_7207" id="tfa_7207" class="">Paraguay</option>
                                    <option value="tfa_7208" id="tfa_7208" class="">Peru</option>
                                    <option value="tfa_7209" id="tfa_7209" class="">Philippines</option>
                                    <option value="tfa_7210" id="tfa_7210" class="">Pitcairn</option>
                                    <option value="tfa_7211" id="tfa_7211" class="">Poland</option>
                                    <option value="tfa_7212" id="tfa_7212" class="">Portugal</option>
                                    <option value="tfa_7213" id="tfa_7213" class="">Puerto Rico</option>
                                    <option value="tfa_7214" id="tfa_7214" class="">Qatar</option>
                                    <option value="tfa_7215" id="tfa_7215" class="">Republic of Moldova</option>
                                    <option value="tfa_7216" id="tfa_7216" class="">Reunion</option>
                                    <option value="tfa_7217" id="tfa_7217" class="">Romania</option>
                                    <option value="tfa_7218" id="tfa_7218" class="">Russian Federation</option>
                                    <option value="tfa_7219" id="tfa_7219" class="">Rwanda</option>
                                    <option value="tfa_7220" id="tfa_7220" class="">Saint Helena</option>
                                    <option value="tfa_7221" id="tfa_7221" class="">Saint Kitts &amp; Nevis</option>
                                    <option value="tfa_7222" id="tfa_7222" class="">Saint Lucia</option>
                                    <option value="tfa_7223" id="tfa_7223" class="">Saint-Barthelemy</option>
                                    <option value="tfa_7224" id="tfa_7224" class="">Saint-Martin(French)</option>
                                    <option value="tfa_7225" id="tfa_7225" class="">Samoa</option>
                                    <option value="tfa_7226" id="tfa_7226" class="">San Marino</option>
                                    <option value="tfa_7227" id="tfa_7227" class="">Sao Tome &amp; Principe</option>
                                    <option value="tfa_7228" id="tfa_7228" class="">Saudi Arabia</option>
                                    <option value="tfa_7229" id="tfa_7229" class="">Senegal</option>
                                    <option value="tfa_7230" id="tfa_7230" class="">Serbia</option>
                                    <option value="tfa_7231" id="tfa_7231" class="">Seychelles</option>
                                    <option value="tfa_7232" id="tfa_7232" class="">Sierra Leone</option>
                                    <option value="tfa_7233" id="tfa_7233" class="">Singapore</option>
                                    <option value="tfa_7234" id="tfa_7234" class="">Slovakia</option>
                                    <option value="tfa_7235" id="tfa_7235" class="">Slovenia</option>
                                    <option value="tfa_7236" id="tfa_7236" class="">Solomon Islands</option>
                                    <option value="tfa_7237" id="tfa_7237" class="">Somalia</option>
                                    <option value="tfa_7238" id="tfa_7238" class="">South Africa</option>
                                    <option value="tfa_7239" id="tfa_7239" class="">South Korea</option>
                                    <option value="tfa_7240" id="tfa_7240" class="">South Sudan</option>
                                    <option value="tfa_7241" id="tfa_7241" class="">Spain</option>
                                    <option value="tfa_7242" id="tfa_7242" class="">Sri Lanka</option>
                                    <option value="tfa_7243" id="tfa_7243" class="">St Pierre &amp; Miquelon</option>
                                    <option value="tfa_7244" id="tfa_7244" class="">St Vinc &amp; Grenadine</option>
                                    <option value="tfa_7245" id="tfa_7245" class="">Sudan</option>
                                    <option value="tfa_7246" id="tfa_7246" class="">Suriname</option>
                                    <option value="tfa_7247" id="tfa_7247" class="">Svalbard &amp; Jan Mayen</option>
                                    <option value="tfa_7248" id="tfa_7248" class="">Swaziland</option>
                                    <option value="tfa_7249" id="tfa_7249" class="">Sweden</option>
                                    <option value="tfa_7250" id="tfa_7250" class="">Switzerland</option>
                                    <option value="tfa_7251" id="tfa_7251" class="">Syria</option>
                                    <option value="tfa_7252" id="tfa_7252" class="">Taiwan</option>
                                    <option value="tfa_7253" id="tfa_7253" class="">Tajikistan</option>
                                    <option value="tfa_7254" id="tfa_7254" class="">Tanzania</option>
                                    <option value="tfa_7255" id="tfa_7255" class="">Thailand</option>
                                    <option value="tfa_7256" id="tfa_7256" class="">Togo</option>
                                    <option value="tfa_7257" id="tfa_7257" class="">Tokelau</option>
                                    <option value="tfa_7258" id="tfa_7258" class="">Tonga</option>
                                    <option value="tfa_7259" id="tfa_7259" class="">Trinidad and Tobago</option>
                                    <option value="tfa_7260" id="tfa_7260" class="">Tunisia</option>
                                    <option value="tfa_7261" id="tfa_7261" class="">Turkey</option>
                                    <option value="tfa_7262" id="tfa_7262" class="">Turkmenistan</option>
                                    <option value="tfa_7263" id="tfa_7263" class="">Turks &amp; Caicos Isle</option>
                                    <option value="tfa_7264" id="tfa_7264" class="">Tuvalu</option>
                                    <option value="tfa_7265" id="tfa_7265" class="">Uganda</option>
                                    <option value="tfa_7266" id="tfa_7266" class="">Ukraine</option>
                                    <option value="tfa_7267" id="tfa_7267" class="">United Arab Emirates</option>
                                    <option value="tfa_7268" id="tfa_7268" class="">United Kingdom</option>
                                    <option value="tfa_7269" id="tfa_7269" class="">Uruguay</option>
                                    <option value="tfa_7270" id="tfa_7270" class="">US Virgin Islands</option>
                                    <option value="tfa_7271" id="tfa_7271" class="">USA</option>
                                    <option value="tfa_7272" id="tfa_7272" class="">Uzbekistan</option>
                                    <option value="tfa_7273" id="tfa_7273" class="">Vanuatu</option>
                                    <option value="tfa_7274" id="tfa_7274" class="">Venezuela</option>
                                    <option value="tfa_7275" id="tfa_7275" class="">Viet Nam</option>
                                    <option value="tfa_7276" id="tfa_7276" class="">Wallis &amp; Futuna Isle</option>
                                    <option value="tfa_7277" id="tfa_7277" class="">Western Sahara</option>
                                    <option value="tfa_7278" id="tfa_7278" class="">Yemen</option>
                                    <option value="tfa_7279" id="tfa_7279" class="">Zambia</option>
                                    <option value="tfa_7280" id="tfa_7280" class="">Zimbabwe</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_80-D" role="radiogroup" aria-labelledby="tfa_80-L" data-tfa-labelledby="-L tfa_80-L">
                                    <label id="tfa_80-L" class="label preField reqMark">Are you a Permanent Resident of Canada?</label><br><div class="inputWrapper"><span id="tfa_80" class="choices  required" data-condition="NOT (`#tfa_682`)"><span class="oneChoice"><input type="radio" value="tfa_2827" class="" id="tfa_2827" name="tfa_80" aria-required="true" data-conditionals="#tfa_5390" aria-labelledby="tfa_2827-L" data-tfa-labelledby="tfa_80-L tfa_2827-L"><label class="label postField" id="tfa_2827-L" for="tfa_2827"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_2828" class="" id="tfa_2828" name="tfa_80" aria-required="true" aria-labelledby="tfa_2828-L" data-tfa-labelledby="tfa_80-L tfa_2828-L"><label class="label postField" id="tfa_2828-L" for="tfa_2828"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <fieldset id="tfa_5390" class="section" data-condition="`#tfa_2827`">
                                    <legend id="tfa_5390-L"><b>Important Note for Permanent Residents of Canada</b></legend>
                                    <div class="htmlSection" id="tfa_5391"><div class="htmlContent" id="tfa_5391-HTML"><p>We regret to inform you that we do not accept applicants who are permanent residents of Canada.</p></div></div>
                                    </fieldset>
                                    <div class="oneField field-container-D    " id="tfa_8271-D" role="radiogroup" aria-labelledby="tfa_8271-L" data-tfa-labelledby="-L tfa_8271-L">
                                    <label id="tfa_8271-L" class="label preField reqMark">Are you a Dual Citizen of Canada?</label><br><div class="inputWrapper"><span id="tfa_8271" class="choices horizontal required"><span class="oneChoice"><input type="radio" value="tfa_8272" class="" id="tfa_8272" name="tfa_8271" aria-required="true" aria-labelledby="tfa_8272-L" data-tfa-labelledby="tfa_8271-L tfa_8272-L"><label class="label postField" id="tfa_8272-L" for="tfa_8272"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_8273" class="" id="tfa_8273" name="tfa_8271" aria-required="true" aria-labelledby="tfa_8273-L" data-tfa-labelledby="tfa_8271-L tfa_8273-L"><label class="label postField" id="tfa_8273-L" for="tfa_8273"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_5320" class="section">
                                    <legend id="tfa_5320-L"><b></b></legend>
                                    <div class="oneField field-container-D    " id="tfa_61-D" role="radiogroup" aria-labelledby="tfa_61-L" data-tfa-labelledby="-L tfa_61-L">
                                    <label id="tfa_61-L" class="label preField reqMark">Are you using an agent/recruiter to assist you with your application?</label><br><div class="inputWrapper"><span id="tfa_61" class="choices  required"><span class="oneChoice"><input type="radio" value="tfa_2567" class="" id="tfa_2567" name="tfa_61" aria-required="true" data-conditionals="#tfa_5321,#tfa_5493" aria-labelledby="tfa_2567-L" data-tfa-labelledby="tfa_61-L tfa_2567-L"><label class="label postField" id="tfa_2567-L" for="tfa_2567"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_2568" class="" id="tfa_2568" name="tfa_61" aria-required="true" aria-labelledby="tfa_2568-L" data-tfa-labelledby="tfa_61-L tfa_2568-L"><label class="label postField" id="tfa_2568-L" for="tfa_2568"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <fieldset id="tfa_5321" class="section" data-condition="`#tfa_2567`">
                                    <legend id="tfa_5321-L"><b>Agent/Recruiter Details</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_63-D">
                                    <label id="tfa_63-L" class="label preField reqMark" for="tfa_63">Agency Name</label><br><div class="inputWrapper"><input type="text" id="tfa_63" name="tfa_63" value="" maxlength="100" aria-required="true" title="Agency Name" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_64-D">
                                    <label id="tfa_64-L" class="label preField " for="tfa_64">City of Agency</label><br><div class="inputWrapper"><input type="text" id="tfa_64" name="tfa_64" value="" maxlength="30" title="City of Agency" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_65-D">
                                    <label id="tfa_65-L" class="label preField reqMark" for="tfa_65">Counsellor Last Name</label><br><div class="inputWrapper">
                                    <input type="text" id="tfa_65" name="tfa_65" value="" aria-required="true" aria-describedby="tfa_65-HH" title="Counsellor Last Name" class="required"><span class="field-hint-inactive" id="tfa_65-H"><span id="tfa_65-HH" class="hint">Last Name of counsellor submitting this application</span></span>
                                    </div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_66-D">
                                    <label id="tfa_66-L" class="label preField reqMark" for="tfa_66">Counsellor First Name</label><br><div class="inputWrapper">
                                    <input type="text" id="tfa_66" name="tfa_66" value="" aria-required="true" aria-describedby="tfa_66-HH" title="Counsellor First Name" class="required"><span class="field-hint-inactive" id="tfa_66-H"><span id="tfa_66-HH" class="hint">First Name of counsellor submitting this application</span></span>
                                    </div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_67-D">
                                    <label id="tfa_67-L" class="label preField reqMark" for="tfa_67">Counsellor Email Address</label><br><div class="inputWrapper">
                                    <input type="text" id="tfa_67" name="tfa_67" value="" aria-required="true" aria-describedby="tfa_67-HH" title="Counsellor Email Address" class="validate-email calc-agentEmail required"><span class="field-hint-inactive" id="tfa_67-H"><span id="tfa_67-HH" class="hint">Email address of counsellor submitting this application</span></span>
                                    </div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_68-D">
                                    <label id="tfa_68-L" class="label preField reqMark" for="tfa_68">Counsellor Phone Number</label><br><div class="inputWrapper">
                                    <input type="text" id="tfa_68" name="tfa_68" value="" placeholder="+XX-XXXX-XXXX" maxlength="15" aria-required="true" aria-describedby="tfa_68-HH" title="Counsellor Phone Number" class="validate-custom /^[0-9()+. \t-]+$/ required"><span class="field-hint-inactive" id="tfa_68-H"><span id="tfa_68-HH" class="hint">Include +Country Code and Area Code</span></span>
                                    </div>
                                    <script type="text/javascript">
                                                            if(typeof wFORMS != 'undefined') {
                                                                if(wFORMS.behaviors.validation) {
                                                                    wFORMS.behaviors.validation.rules['customtfa_68'] =  { selector: '*[id="tfa_68"]', check: 'validateCustom'};
                                                                    wFORMS.behaviors.validation.messages['customtfa_68'] = "Invalid Phone Number";
                                                                }
                                                            }</script>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_5734-D">
                                    <label id="tfa_5734-L" class="label preField reqMark" for="tfa_5734">Counsellor Mobile Number</label><br><div class="inputWrapper">
                                    <input type="text" id="tfa_5734" name="tfa_5734" value="" placeholder="+XX-XXX-XXXX-XXX" maxlength="15" aria-required="true" aria-describedby="tfa_5734-HH" title="Counsellor Mobile Number" class="validate-custom /^[0-9()+. \t-]+$/ required"><span class="field-hint-inactive" id="tfa_5734-H"><span id="tfa_5734-HH" class="hint">Include +Country Code and Area Code</span></span>
                                    </div>
                                    <script type="text/javascript">
                                                            if(typeof wFORMS != 'undefined') {
                                                                if(wFORMS.behaviors.validation) {
                                                                    wFORMS.behaviors.validation.rules['customtfa_5734'] =  { selector: '*[id="tfa_5734"]', check: 'validateCustom'};
                                                                    wFORMS.behaviors.validation.messages['customtfa_5734'] = "Invalid Phone Number";
                                                                }
                                                            }</script>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_5491-D">
                                    <label id="tfa_5491-L" class="label preField " for="tfa_5491">Counsellor WhatsApp ID (If have one)</label><br><div class="inputWrapper"><input type="text" id="tfa_5491" name="tfa_5491" value="" title="Counsellor WhatsApp ID (If have one)" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_5492-D">
                                    <label id="tfa_5492-L" class="label preField " for="tfa_5492">Counsellor WeChat ID (If have one)</label><br><div class="inputWrapper"><input type="text" id="tfa_5492" name="tfa_5492" value="" title="Counsellor WeChat ID (If have one)" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_62-D">
                                    <label id="tfa_62-L" class="label preField " for="tfa_62">Agent Code</label><br><div class="inputWrapper">
                                    <input type="text" id="tfa_62" name="tfa_62" value="" maxlength="10" aria-describedby="tfa_62-HH" title="Agent Code" class=""><span class="field-hint-inactive" id="tfa_62-H"><span id="tfa_62-HH" class="hint"><span style="color: rgb(0, 0, 0); font-family: Verdana; font-size: 13px; font-variant: normal; font-weight: normal; letter-spacing: normal; line-height: normal; orphans: auto; text-align: start; text-indent: 0px; text-transform: none; white-space: normal; widows: 1; word-spacing: 0px; -webkit-text-stroke-width: 0px; background-color: rgb(255, 255, 255);">Leave this field blank if you are a student, or if you are an agent and do not know your agency’s code</span>.</span></span>
                                    </div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_5493-D">
                                    <label id="tfa_5493-L" class="label preField " for="tfa_5493"><span style="font-size: 14px; white-space: pre-wrap; background-color: rgb(255, 255, 255);">Where did you first meet this agent/recruiter in?</span></label><br><div class="inputWrapper"><select id="tfa_5493" name="tfa_5493" data-condition="`#tfa_2567`" title="Where did you first meet this agent/recruiter in?" class=""><option value="">Please select...</option>
                                    <option value="tfa_5494" id="tfa_5494" class="">Afghanistan</option>
                                    <option value="tfa_5495" id="tfa_5495" class="">Aland Islands</option>
                                    <option value="tfa_5496" id="tfa_5496" class="">Albania</option>
                                    <option value="tfa_5497" id="tfa_5497" class="">Algeria</option>
                                    <option value="tfa_5498" id="tfa_5498" class="">American Samoa</option>
                                    <option value="tfa_5499" id="tfa_5499" class="">Andorra</option>
                                    <option value="tfa_5500" id="tfa_5500" class="">Angola</option>
                                    <option value="tfa_5501" id="tfa_5501" class="">Anguilla</option>
                                    <option value="tfa_5502" id="tfa_5502" class="">Antigua and Barbuda</option>
                                    <option value="tfa_5503" id="tfa_5503" class="">Argentina</option>
                                    <option value="tfa_5504" id="tfa_5504" class="">Armenia</option>
                                    <option value="tfa_5505" id="tfa_5505" class="">Aruba</option>
                                    <option value="tfa_5506" id="tfa_5506" class="">Australia</option>
                                    <option value="tfa_5507" id="tfa_5507" class="">Austria</option>
                                    <option value="tfa_5508" id="tfa_5508" class="">Azerbaijan</option>
                                    <option value="tfa_5509" id="tfa_5509" class="">Bahamas</option>
                                    <option value="tfa_5510" id="tfa_5510" class="">Bahrain</option>
                                    <option value="tfa_5511" id="tfa_5511" class="">Bangladesh</option>
                                    <option value="tfa_5512" id="tfa_5512" class="">Barbados</option>
                                    <option value="tfa_5513" id="tfa_5513" class="">Belarus</option>
                                    <option value="tfa_5514" id="tfa_5514" class="">Belgium</option>
                                    <option value="tfa_5515" id="tfa_5515" class="">Belize</option>
                                    <option value="tfa_5516" id="tfa_5516" class="">Benin</option>
                                    <option value="tfa_5517" id="tfa_5517" class="">Bermuda</option>
                                    <option value="tfa_5518" id="tfa_5518" class="">Bhutan</option>
                                    <option value="tfa_5519" id="tfa_5519" class="">Bolivia</option>
                                    <option value="tfa_5520" id="tfa_5520" class="">Bosnia &amp; Herzegovina</option>
                                    <option value="tfa_5521" id="tfa_5521" class="">Botswana</option>
                                    <option value="tfa_5522" id="tfa_5522" class="">Brazil</option>
                                    <option value="tfa_5523" id="tfa_5523" class="">British Virgin Isle</option>
                                    <option value="tfa_5524" id="tfa_5524" class="">Brunei</option>
                                    <option value="tfa_5525" id="tfa_5525" class="">Bulgaria</option>
                                    <option value="tfa_5526" id="tfa_5526" class="">Burkina Faso</option>
                                    <option value="tfa_5527" id="tfa_5527" class="">Burundi</option>
                                    <option value="tfa_5528" id="tfa_5528" class="">Cambodia</option>
                                    <option value="tfa_5529" id="tfa_5529" class="">Cameroon</option>
                                    <option value="tfa_5530" id="tfa_5530" class="">Canada</option>
                                    <option value="tfa_5531" id="tfa_5531" class="">Cape Verde</option>
                                    <option value="tfa_5532" id="tfa_5532" class="">Cayman Islands</option>
                                    <option value="tfa_5533" id="tfa_5533" class="">Central African Rep</option>
                                    <option value="tfa_5534" id="tfa_5534" class="">Chad</option>
                                    <option value="tfa_5535" id="tfa_5535" class="">Chile</option>
                                    <option value="tfa_5536" id="tfa_5536" class="">China</option>
                                    <option value="tfa_5537" id="tfa_5537" class="">Colombia</option>
                                    <option value="tfa_5538" id="tfa_5538" class="">Comoros</option>
                                    <option value="tfa_5539" id="tfa_5539" class="">Congo</option>
                                    <option value="tfa_5540" id="tfa_5540" class="">Cook Islands</option>
                                    <option value="tfa_5541" id="tfa_5541" class="">Costa Rica</option>
                                    <option value="tfa_5542" id="tfa_5542" class="">Croatia</option>
                                    <option value="tfa_5543" id="tfa_5543" class="">Cuba</option>
                                    <option value="tfa_5544" id="tfa_5544" class="">Cyprus</option>
                                    <option value="tfa_5545" id="tfa_5545" class="">Czech Republic</option>
                                    <option value="tfa_5546" id="tfa_5546" class="">Dem Rep of the Congo</option>
                                    <option value="tfa_5547" id="tfa_5547" class="">Denmark</option>
                                    <option value="tfa_5548" id="tfa_5548" class="">Djibouti</option>
                                    <option value="tfa_5549" id="tfa_5549" class="">Dominica</option>
                                    <option value="tfa_5550" id="tfa_5550" class="">Dominican Republic</option>
                                    <option value="tfa_5551" id="tfa_5551" class="">East Timor</option>
                                    <option value="tfa_5552" id="tfa_5552" class="">Ecuador</option>
                                    <option value="tfa_5553" id="tfa_5553" class="">Egypt</option>
                                    <option value="tfa_5554" id="tfa_5554" class="">El Salvador</option>
                                    <option value="tfa_5555" id="tfa_5555" class="">Equatorial Guinea</option>
                                    <option value="tfa_5556" id="tfa_5556" class="">Eritrea</option>
                                    <option value="tfa_5557" id="tfa_5557" class="">Estonia</option>
                                    <option value="tfa_5558" id="tfa_5558" class="">Ethiopia</option>
                                    <option value="tfa_5559" id="tfa_5559" class="">Faeroe Islands</option>
                                    <option value="tfa_5560" id="tfa_5560" class="">Falkland Islands</option>
                                    <option value="tfa_5561" id="tfa_5561" class="">Fiji</option>
                                    <option value="tfa_5562" id="tfa_5562" class="">Finland</option>
                                    <option value="tfa_5563" id="tfa_5563" class="">France</option>
                                    <option value="tfa_5564" id="tfa_5564" class="">French Guiana</option>
                                    <option value="tfa_5565" id="tfa_5565" class="">French Polynesia</option>
                                    <option value="tfa_5566" id="tfa_5566" class="">Gabon</option>
                                    <option value="tfa_5567" id="tfa_5567" class="">Gambia</option>
                                    <option value="tfa_5568" id="tfa_5568" class="">Georgia</option>
                                    <option value="tfa_5569" id="tfa_5569" class="">Germany</option>
                                    <option value="tfa_5570" id="tfa_5570" class="">Ghana</option>
                                    <option value="tfa_5571" id="tfa_5571" class="">Gibraltar</option>
                                    <option value="tfa_5572" id="tfa_5572" class="">Greece</option>
                                    <option value="tfa_5573" id="tfa_5573" class="">Greenland</option>
                                    <option value="tfa_5574" id="tfa_5574" class="">Grenada</option>
                                    <option value="tfa_5575" id="tfa_5575" class="">Guadeloupe</option>
                                    <option value="tfa_5576" id="tfa_5576" class="">Guam</option>
                                    <option value="tfa_5577" id="tfa_5577" class="">Guatemala</option>
                                    <option value="tfa_5578" id="tfa_5578" class="">Guernsey</option>
                                    <option value="tfa_5579" id="tfa_5579" class="">Guinea</option>
                                    <option value="tfa_5580" id="tfa_5580" class="">Guinea-Bissau</option>
                                    <option value="tfa_5581" id="tfa_5581" class="">Guyana</option>
                                    <option value="tfa_5582" id="tfa_5582" class="">Haiti</option>
                                    <option value="tfa_5583" id="tfa_5583" class="">Holy See</option>
                                    <option value="tfa_5584" id="tfa_5584" class="">Honduras</option>
                                    <option value="tfa_5585" id="tfa_5585" class="">Hong Kong</option>
                                    <option value="tfa_5586" id="tfa_5586" class="">Hungary</option>
                                    <option value="tfa_5587" id="tfa_5587" class="">Iceland</option>
                                    <option value="tfa_5588" id="tfa_5588" class="">India</option>
                                    <option value="tfa_5589" id="tfa_5589" class="">Indonesia</option>
                                    <option value="tfa_5590" id="tfa_5590" class="">Iran</option>
                                    <option value="tfa_5591" id="tfa_5591" class="">Iraq</option>
                                    <option value="tfa_5592" id="tfa_5592" class="">Ireland</option>
                                    <option value="tfa_5593" id="tfa_5593" class="">Isle of Man</option>
                                    <option value="tfa_5594" id="tfa_5594" class="">Israel</option>
                                    <option value="tfa_5595" id="tfa_5595" class="">Italy</option>
                                    <option value="tfa_5596" id="tfa_5596" class="">Ivory Coast</option>
                                    <option value="tfa_5597" id="tfa_5597" class="">Jamaica</option>
                                    <option value="tfa_5598" id="tfa_5598" class="">Japan</option>
                                    <option value="tfa_5599" id="tfa_5599" class="">Jersey</option>
                                    <option value="tfa_5600" id="tfa_5600" class="">Jordan</option>
                                    <option value="tfa_5601" id="tfa_5601" class="">Kazakhstan</option>
                                    <option value="tfa_5602" id="tfa_5602" class="">Kenya</option>
                                    <option value="tfa_5603" id="tfa_5603" class="">Kiribati</option>
                                    <option value="tfa_5604" id="tfa_5604" class="">Kuwait</option>
                                    <option value="tfa_5605" id="tfa_5605" class="">Kyrgyzstan</option>
                                    <option value="tfa_5606" id="tfa_5606" class="">Laos</option>
                                    <option value="tfa_5607" id="tfa_5607" class="">Latvia</option>
                                    <option value="tfa_5608" id="tfa_5608" class="">Lebanon</option>
                                    <option value="tfa_5609" id="tfa_5609" class="">Lesotho</option>
                                    <option value="tfa_5610" id="tfa_5610" class="">Liberia</option>
                                    <option value="tfa_5611" id="tfa_5611" class="">Libya</option>
                                    <option value="tfa_5612" id="tfa_5612" class="">Liechtenstein</option>
                                    <option value="tfa_5613" id="tfa_5613" class="">Lithuania</option>
                                    <option value="tfa_5614" id="tfa_5614" class="">Luxembourg</option>
                                    <option value="tfa_5615" id="tfa_5615" class="">Macao</option>
                                    <option value="tfa_5616" id="tfa_5616" class="">Macedonia</option>
                                    <option value="tfa_5617" id="tfa_5617" class="">Madagascar</option>
                                    <option value="tfa_5618" id="tfa_5618" class="">Malawi</option>
                                    <option value="tfa_5619" id="tfa_5619" class="">Malaysia</option>
                                    <option value="tfa_5620" id="tfa_5620" class="">Maldives</option>
                                    <option value="tfa_5621" id="tfa_5621" class="">Mali</option>
                                    <option value="tfa_5622" id="tfa_5622" class="">Malta</option>
                                    <option value="tfa_5623" id="tfa_5623" class="">Marshall Islands</option>
                                    <option value="tfa_5624" id="tfa_5624" class="">Martinique</option>
                                    <option value="tfa_5625" id="tfa_5625" class="">Mauritania</option>
                                    <option value="tfa_5626" id="tfa_5626" class="">Mauritius</option>
                                    <option value="tfa_5627" id="tfa_5627" class="">Mayotte</option>
                                    <option value="tfa_5628" id="tfa_5628" class="">Mexico</option>
                                    <option value="tfa_5629" id="tfa_5629" class="">Micronesia</option>
                                    <option value="tfa_5630" id="tfa_5630" class="">Monaco</option>
                                    <option value="tfa_5631" id="tfa_5631" class="">Mongolia</option>
                                    <option value="tfa_5632" id="tfa_5632" class="">Montenegro</option>
                                    <option value="tfa_5633" id="tfa_5633" class="">Montserrat</option>
                                    <option value="tfa_5634" id="tfa_5634" class="">Morocco</option>
                                    <option value="tfa_5635" id="tfa_5635" class="">Mozambique</option>
                                    <option value="tfa_5636" id="tfa_5636" class="">Myanmar</option>
                                    <option value="tfa_5637" id="tfa_5637" class="">Namibia</option>
                                    <option value="tfa_5638" id="tfa_5638" class="">Nauru</option>
                                    <option value="tfa_5639" id="tfa_5639" class="">Nepal</option>
                                    <option value="tfa_5640" id="tfa_5640" class="">Netherlands</option>
                                    <option value="tfa_5641" id="tfa_5641" class="">Netherlands Antilles</option>
                                    <option value="tfa_5642" id="tfa_5642" class="">New Caledonia</option>
                                    <option value="tfa_5643" id="tfa_5643" class="">New Zealand</option>
                                    <option value="tfa_5644" id="tfa_5644" class="">Nicaragua</option>
                                    <option value="tfa_5645" id="tfa_5645" class="">Niger</option>
                                    <option value="tfa_5646" id="tfa_5646" class="">Nigeria</option>
                                    <option value="tfa_5647" id="tfa_5647" class="">Niue</option>
                                    <option value="tfa_5648" id="tfa_5648" class="">Norfolk Island</option>
                                    <option value="tfa_5649" id="tfa_5649" class="">North Korea</option>
                                    <option value="tfa_5650" id="tfa_5650" class="">Norway</option>
                                    <option value="tfa_5651" id="tfa_5651" class="">Nth Mariana Islands</option>
                                    <option value="tfa_5652" id="tfa_5652" class="">Oman</option>
                                    <option value="tfa_5653" id="tfa_5653" class="">Pakistan</option>
                                    <option value="tfa_5654" id="tfa_5654" class="">Palau</option>
                                    <option value="tfa_5655" id="tfa_5655" class="">Palestine</option>
                                    <option value="tfa_5656" id="tfa_5656" class="">Panama</option>
                                    <option value="tfa_5657" id="tfa_5657" class="">Papua New Guinea</option>
                                    <option value="tfa_5658" id="tfa_5658" class="">Paraguay</option>
                                    <option value="tfa_5659" id="tfa_5659" class="">Peru</option>
                                    <option value="tfa_5660" id="tfa_5660" class="">Philippines</option>
                                    <option value="tfa_5661" id="tfa_5661" class="">Pitcairn</option>
                                    <option value="tfa_5662" id="tfa_5662" class="">Poland</option>
                                    <option value="tfa_5663" id="tfa_5663" class="">Portugal</option>
                                    <option value="tfa_5664" id="tfa_5664" class="">Puerto Rico</option>
                                    <option value="tfa_5665" id="tfa_5665" class="">Qatar</option>
                                    <option value="tfa_5666" id="tfa_5666" class="">Republic of Moldova</option>
                                    <option value="tfa_5667" id="tfa_5667" class="">Reunion</option>
                                    <option value="tfa_5668" id="tfa_5668" class="">Romania</option>
                                    <option value="tfa_5669" id="tfa_5669" class="">Russian Federation</option>
                                    <option value="tfa_5670" id="tfa_5670" class="">Rwanda</option>
                                    <option value="tfa_5671" id="tfa_5671" class="">Saint Helena</option>
                                    <option value="tfa_5672" id="tfa_5672" class="">Saint Kitts &amp; Nevis</option>
                                    <option value="tfa_5673" id="tfa_5673" class="">Saint Lucia</option>
                                    <option value="tfa_5674" id="tfa_5674" class="">Saint-Barthelemy</option>
                                    <option value="tfa_5675" id="tfa_5675" class="">Saint-Martin(French)</option>
                                    <option value="tfa_5676" id="tfa_5676" class="">Samoa</option>
                                    <option value="tfa_5677" id="tfa_5677" class="">San Marino</option>
                                    <option value="tfa_5678" id="tfa_5678" class="">Sao Tome &amp; Principe</option>
                                    <option value="tfa_5679" id="tfa_5679" class="">Saudi Arabia</option>
                                    <option value="tfa_5680" id="tfa_5680" class="">Senegal</option>
                                    <option value="tfa_5681" id="tfa_5681" class="">Serbia</option>
                                    <option value="tfa_5682" id="tfa_5682" class="">Seychelles</option>
                                    <option value="tfa_5683" id="tfa_5683" class="">Sierra Leone</option>
                                    <option value="tfa_5684" id="tfa_5684" class="">Singapore</option>
                                    <option value="tfa_5685" id="tfa_5685" class="">Slovakia</option>
                                    <option value="tfa_5686" id="tfa_5686" class="">Slovenia</option>
                                    <option value="tfa_5687" id="tfa_5687" class="">Solomon Islands</option>
                                    <option value="tfa_5688" id="tfa_5688" class="">Somalia</option>
                                    <option value="tfa_5689" id="tfa_5689" class="">South Africa</option>
                                    <option value="tfa_5690" id="tfa_5690" class="">South Korea</option>
                                    <option value="tfa_5691" id="tfa_5691" class="">South Sudan</option>
                                    <option value="tfa_5692" id="tfa_5692" class="">Spain</option>
                                    <option value="tfa_5693" id="tfa_5693" class="">Sri Lanka</option>
                                    <option value="tfa_5694" id="tfa_5694" class="">St Pierre &amp; Miquelon</option>
                                    <option value="tfa_5695" id="tfa_5695" class="">St Vinc &amp; Grenadine</option>
                                    <option value="tfa_5696" id="tfa_5696" class="">Sudan</option>
                                    <option value="tfa_5697" id="tfa_5697" class="">Suriname</option>
                                    <option value="tfa_5698" id="tfa_5698" class="">Svalbard &amp; Jan Mayen</option>
                                    <option value="tfa_5699" id="tfa_5699" class="">Swaziland</option>
                                    <option value="tfa_5700" id="tfa_5700" class="">Sweden</option>
                                    <option value="tfa_5701" id="tfa_5701" class="">Switzerland</option>
                                    <option value="tfa_5702" id="tfa_5702" class="">Syria</option>
                                    <option value="tfa_5703" id="tfa_5703" class="">Taiwan</option>
                                    <option value="tfa_5704" id="tfa_5704" class="">Tajikistan</option>
                                    <option value="tfa_5705" id="tfa_5705" class="">Tanzania</option>
                                    <option value="tfa_5706" id="tfa_5706" class="">Thailand</option>
                                    <option value="tfa_5707" id="tfa_5707" class="">Togo</option>
                                    <option value="tfa_5708" id="tfa_5708" class="">Tokelau</option>
                                    <option value="tfa_5709" id="tfa_5709" class="">Tonga</option>
                                    <option value="tfa_5710" id="tfa_5710" class="">Trinidad and Tobago</option>
                                    <option value="tfa_5711" id="tfa_5711" class="">Tunisia</option>
                                    <option value="tfa_5712" id="tfa_5712" class="">Turkey</option>
                                    <option value="tfa_5713" id="tfa_5713" class="">Turkmenistan</option>
                                    <option value="tfa_5714" id="tfa_5714" class="">Turks &amp; Caicos Isle</option>
                                    <option value="tfa_5715" id="tfa_5715" class="">Tuvalu</option>
                                    <option value="tfa_5716" id="tfa_5716" class="">Uganda</option>
                                    <option value="tfa_5717" id="tfa_5717" class="">Ukraine</option>
                                    <option value="tfa_5718" id="tfa_5718" class="">United Arab Emirates</option>
                                    <option value="tfa_5719" id="tfa_5719" class="">United Kingdom</option>
                                    <option value="tfa_5720" id="tfa_5720" class="">Uruguay</option>
                                    <option value="tfa_5721" id="tfa_5721" class="">US Virgin Islands</option>
                                    <option value="tfa_5722" id="tfa_5722" class="">USA</option>
                                    <option value="tfa_5723" id="tfa_5723" class="">Uzbekistan</option>
                                    <option value="tfa_5724" id="tfa_5724" class="">Vanuatu</option>
                                    <option value="tfa_5725" id="tfa_5725" class="">Venezuela</option>
                                    <option value="tfa_5726" id="tfa_5726" class="">Viet Nam</option>
                                    <option value="tfa_5727" id="tfa_5727" class="">Wallis &amp; Futuna Isle</option>
                                    <option value="tfa_5728" id="tfa_5728" class="">Western Sahara</option>
                                    <option value="tfa_5729" id="tfa_5729" class="">Yemen</option>
                                    <option value="tfa_5730" id="tfa_5730" class="">Yugoslavia</option>
                                    <option value="tfa_5731" id="tfa_5731" class="">Zambia</option>
                                    <option value="tfa_5732" id="tfa_5732" class="">Zimbabwe</option></select></div>
                                    </div>
                                    </fieldset>
                                    </fieldset>
                                    <div id="tfa_5488" class="section group">
                                    <input type="hidden" id="tfa_5489" name="tfa_5489" value="UA-4342019-1" class="calc-GOOGLEACCOUNTID"><div class="htmlSection" id="tfa_5490"><div class="htmlContent" id="tfa_5490-HTML"><script type="text/javascript">
                                    /* Google Tracking Code   */

                                    (function(){ 
                                        if(!document.querySelector && base2) {
                                          document.querySelector = base2.DOM.Element.querySelector
                                        }
                                        var gaId = document.querySelector('input.calc-GOOGLEACCOUNTID');
                                        if(gaId) gaId = gaId.value;
                                        
                                        if(gaId && !window._gaq) {        
                                            window._gaq = window._gaq || [];
                                            window._gaq.push(['_setAccount', gaId]);
                                            window._gaq.push(['_setAllowLinker', true]);
                                            window._gaq.push(['_trackPageview']);
                                          
                                            (function() {
                                              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                                              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                                              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                                            })();
                                        }
                                    })();
                                     
                                    </script></div></div>
                                    </div>
                                    </div></div>
                                    <div class="wfPage" id="wfPgIndex-2"><div class="section pageSection" id="tfa_5324">
                                    <h4 id="tfa_5324-T">Program Selection</h4>
                                    <fieldset id="tfa_5325" class="section">
                                    <legend id="tfa_5325-L"><b>Fraser International College (FIC)</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_70-D">
                                    <label id="tfa_70-L" class="label preField reqMark" for="tfa_70">Program</label><br><div class="inputWrapper"><select id="tfa_70" name="tfa_70" title="Program" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_5392" id="tfa_5392" data-conditionals="#tfa_6409,#tfa_72,#tfa_71" class="">UTP Stage I</option>
                                    <option value="tfa_5393" id="tfa_5393" data-conditionals="#tfa_6640,#tfa_72,#tfa_71" class="">UTP Stage II</option>
                                    <option value="tfa_5394" id="tfa_5394" data-conditionals="#tfa_72,#tfa_71" class="">FIC Associate of Arts Degree</option></select></div>
                                    </div>
                                    <fieldset id="tfa_6409" class="section" data-condition="`#tfa_5392`">
                                    <div class="oneField field-container-D    " id="tfa_6410-D">
                                    <label id="tfa_6410-L" class="label preField reqMark" for="tfa_6410">UTP Stage I Pathway</label><br><div class="inputWrapper"><select id="tfa_6410" name="tfa_6410" title="UTP Stage I Pathway" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6411" id="tfa_6411" data-conditionals="#tfa_6418" class="">Arts and Social Sciences</option>
                                    <option value="tfa_6431" id="tfa_6431" data-conditionals="#tfa_6631" class="">Bachelor of Environment</option>
                                    <option value="tfa_6412" id="tfa_6412" data-conditionals="#tfa_6531" class="">Business Administration</option>
                                    <option value="tfa_6413" id="tfa_6413" data-conditionals="#tfa_6553" class="">Communication, Interactive Art and Technology</option>
                                    <option value="tfa_6455" id="tfa_6455" class="">Communications and Business (Double Minor)</option>
                                    <option value="tfa_6457" id="tfa_6457" data-conditionals="#tfa_6577" class="">Computing Science</option>
                                    <option value="tfa_6446" id="tfa_6446" data-conditionals="#tfa_6597" class="">Engineering Science</option>
                                    <option value="tfa_6440" id="tfa_6440" data-conditionals="#tfa_6613" class="">Environment (Arts)</option>
                                    <option value="tfa_6435" id="tfa_6435" data-conditionals="#tfa_6623" class="">Environment (Science)</option>
                                    <option value="tfa_6427" id="tfa_6427" data-conditionals="#tfa_6637" class="">Health Science (Science)</option>
                                    <option value="tfa_6425" id="tfa_6425" class="">Health Sciences (Arts) </option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6418-D">
                                    <label id="tfa_6418-L" class="label preField reqMark" for="tfa_6418">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6418" name="tfa_6418" data-condition="`#tfa_6411`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6491" id="tfa_6491" class="">Anthropology</option>
                                    <option value="tfa_6490" id="tfa_6490" class="">Behavioural Neuroscience</option>
                                    <option value="tfa_6492" id="tfa_6492" class="">Cognitive Science</option>
                                    <option value="tfa_6493" id="tfa_6493" class="">Criminology</option>
                                    <option value="tfa_6494" id="tfa_6494" class="">Economics</option>
                                    <option value="tfa_6495" id="tfa_6495" class="">English</option>
                                    <option value="tfa_6496" id="tfa_6496" class="">First Nations studies</option>
                                    <option value="tfa_6497" id="tfa_6497" class="">French</option>
                                    <option value="tfa_6498" id="tfa_6498" class="">Gender, Sexuality Women's Studies</option>
                                    <option value="tfa_6499" id="tfa_6499" class="">History</option>
                                    <option value="tfa_6500" id="tfa_6500" class="">Humanities</option>
                                    <option value="tfa_6501" id="tfa_6501" class="">International Studies</option>
                                    <option value="tfa_6502" id="tfa_6502" class="">Labour Studies</option>
                                    <option value="tfa_6503" id="tfa_6503" class="">Linguistics</option>
                                    <option value="tfa_6504" id="tfa_6504" class="">Philosophy</option>
                                    <option value="tfa_6505" id="tfa_6505" class="">Political Science</option>
                                    <option value="tfa_6506" id="tfa_6506" class="">Psychology</option>
                                    <option value="tfa_6507" id="tfa_6507" class="">Sociology</option>
                                    <option value="tfa_6509" id="tfa_6509" class="">Undecided</option>
                                    <option value="tfa_6508" id="tfa_6508" class="">World Literature</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6531-D">
                                    <label id="tfa_6531-L" class="label preField reqMark" for="tfa_6531">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6531" name="tfa_6531" data-condition="`#tfa_6412`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6532" id="tfa_6532" class="">Accounting</option>
                                    <option value="tfa_6533" id="tfa_6533" class="">Entrepreneurship &amp; Innovation</option>
                                    <option value="tfa_6534" id="tfa_6534" class="">Finance</option>
                                    <option value="tfa_6535" id="tfa_6535" class="">Human Resource Management</option>
                                    <option value="tfa_6536" id="tfa_6536" class="">International Business</option>
                                    <option value="tfa_6537" id="tfa_6537" class="">Management Information Systems</option>
                                    <option value="tfa_6538" id="tfa_6538" class="">Marketing</option>
                                    <option value="tfa_6539" id="tfa_6539" class="">Operations Management</option>
                                    <option value="tfa_6540" id="tfa_6540" class="">Strategic Analysis</option>
                                    <option value="tfa_6541" id="tfa_6541" class="">Undecided</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6553-D">
                                    <label id="tfa_6553-L" class="label preField reqMark" for="tfa_6553">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6553" name="tfa_6553" data-condition="`#tfa_6413`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6554" id="tfa_6554" class="">Communications- Media and Culture</option>
                                    <option value="tfa_6556" id="tfa_6556" class="">Communications- Political Economy and Policy</option>
                                    <option value="tfa_6555" id="tfa_6555" class="">Communications- Technology and Society</option>
                                    <option value="tfa_6560" id="tfa_6560" class="">Contemporary Arts- Dance</option>
                                    <option value="tfa_6561" id="tfa_6561" class="">Contemporary Arts- Flim</option>
                                    <option value="tfa_6562" id="tfa_6562" class="">Contemporary Arts- Music Composition (Acoustic &amp; Electroacoustic)</option>
                                    <option value="tfa_6563" id="tfa_6563" class="">Contemporary Arts- Theatre</option>
                                    <option value="tfa_6564" id="tfa_6564" class="">Contemporary Arts- Visual Art</option>
                                    <option value="tfa_6558" id="tfa_6558" class="">Interactive Arts and Technology- Design</option>
                                    <option value="tfa_6557" id="tfa_6557" class="">Interactive Arts and Technology- Interactive Systems</option>
                                    <option value="tfa_6559" id="tfa_6559" class="">Interactive Arts and Technology- Media Arts</option>
                                    <option value="tfa_6565" id="tfa_6565" class="">Undecided</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6577-D">
                                    <label id="tfa_6577-L" class="label preField reqMark" for="tfa_6577">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6577" name="tfa_6577" data-condition="`#tfa_6457`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6578" id="tfa_6578" class="">Artificial Intelligence</option>
                                    <option value="tfa_6579" id="tfa_6579" class="">Computer Graphics and Multimedia</option>
                                    <option value="tfa_6580" id="tfa_6580" class="">Computing Science dual degree (with Zhejiang University, China)</option>
                                    <option value="tfa_6581" id="tfa_6581" class="">Computing Systems</option>
                                    <option value="tfa_6582" id="tfa_6582" class="">Information Systems</option>
                                    <option value="tfa_6583" id="tfa_6583" class="">Programming Languages and Software</option>
                                    <option value="tfa_6584" id="tfa_6584" class="">Software Systems (Major)</option>
                                    <option value="tfa_6585" id="tfa_6585" class="">Theoretical Computer Science</option>
                                    <option value="tfa_6586" id="tfa_6586" class="">Undecided</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6597-D">
                                    <label id="tfa_6597-L" class="label preField reqMark" for="tfa_6597">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6597" name="tfa_6597" data-condition="`#tfa_6446`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6598" id="tfa_6598" class="">Biomedical Engineering</option>
                                    <option value="tfa_6599" id="tfa_6599" class="">Computer Engineering</option>
                                    <option value="tfa_6600" id="tfa_6600" class="">Electronics Engineering</option>
                                    <option value="tfa_6601" id="tfa_6601" class="">Engineering Physics</option>
                                    <option value="tfa_6602" id="tfa_6602" class="">Mechatronic Systems Engineering</option>
                                    <option value="tfa_6603" id="tfa_6603" class="">Systems Engineering</option>
                                    <option value="tfa_6604" id="tfa_6604" class="">Undecided</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6613-D">
                                    <label id="tfa_6613-L" class="label preField reqMark" for="tfa_6613">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6613" name="tfa_6613" data-condition="`#tfa_6440`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6614" id="tfa_6614" class="">Archaeology</option>
                                    <option value="tfa_6616" id="tfa_6616" class="">Archaeology and Anthropology (Joint Major) </option>
                                    <option value="tfa_6617" id="tfa_6617" class="">Archaeology and First Nations Studies (Joint Major)</option>
                                    <option value="tfa_6615" id="tfa_6615" class="">Human Geography</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6623-D">
                                    <label id="tfa_6623-L" class="label preField reqMark" for="tfa_6623">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6623" name="tfa_6623" data-condition="`#tfa_6435`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6624" id="tfa_6624" class="">Environmental Science</option>
                                    <option value="tfa_6625" id="tfa_6625" class="">Geographic Information Systems (Entry through Applied Sciences)</option>
                                    <option value="tfa_6626" id="tfa_6626" class="">Physical Geography</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6631-D">
                                    <label id="tfa_6631-L" class="label preField reqMark" for="tfa_6631">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6631" name="tfa_6631" data-condition="`#tfa_6431`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6632" id="tfa_6632" class="">Global Environment Systems</option>
                                    <option value="tfa_6633" id="tfa_6633" class="">Resource and Environmental Management</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6637-D">
                                    <label id="tfa_6637-L" class="label preField reqMark" for="tfa_6637">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6637" name="tfa_6637" data-condition="`#tfa_6427`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6638" id="tfa_6638" class="">Life Sciences</option>
                                    <option value="tfa_6639" id="tfa_6639" class="">Population and Quantitative Health Sciences</option></select></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_6640" class="section" data-condition="`#tfa_5393`">
                                    <div class="oneField field-container-D    " id="tfa_6641-D">
                                    <label id="tfa_6641-L" class="label preField reqMark" for="tfa_6641"><span style="color: rgb(62, 62, 60); font-family: Roboto, Arial, Helvetica, sans-serif; font-size: 12.992px;">UTP Stage II Pathway</span></label><br><div class="inputWrapper"><select id="tfa_6641" name="tfa_6641" title="UTP Stage II Pathway" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6642" id="tfa_6642" data-conditionals="#tfa_6655" class="">Arts and Social Sciences</option>
                                    <option value="tfa_6650" id="tfa_6650" data-conditionals="#tfa_6685" class="">Bachelor of Environment</option>
                                    <option value="tfa_6643" id="tfa_6643" data-conditionals="#tfa_6661" class="">Business Administration</option>
                                    <option value="tfa_6644" id="tfa_6644" data-conditionals="#tfa_6665" class="">Communication, Interactive Art and Technology</option>
                                    <option value="tfa_6645" id="tfa_6645" class="">Communications and Business (Double Minor)</option>
                                    <option value="tfa_6646" id="tfa_6646" data-conditionals="#tfa_6669" class="">Computing Science</option>
                                    <option value="tfa_6647" id="tfa_6647" data-conditionals="#tfa_6673" class="">Engineering Science</option>
                                    <option value="tfa_6648" id="tfa_6648" data-conditionals="#tfa_6677" class="">Environment (Arts)</option>
                                    <option value="tfa_6649" id="tfa_6649" data-conditionals="#tfa_6681" class="">Environment (Science)</option>
                                    <option value="tfa_6652" id="tfa_6652" data-conditionals="#tfa_6689" class="">Health Science (Science)</option>
                                    <option value="tfa_6651" id="tfa_6651" class="">Health Sciences (Arts)</option>
                                    <option value="tfa_6653" id="tfa_6653" data-conditionals="#tfa_6693" class="">Science</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6655-D">
                                    <label id="tfa_6655-L" class="label preField reqMark" for="tfa_6655">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6655" name="tfa_6655" data-condition="`#tfa_6642`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6707" id="tfa_6707" class="">Anthropology</option>
                                    <option value="tfa_6708" id="tfa_6708" class="">Behavioural Neuroscience</option>
                                    <option value="tfa_6709" id="tfa_6709" class="">Cognitive Science</option>
                                    <option value="tfa_6710" id="tfa_6710" class="">Criminology</option>
                                    <option value="tfa_6711" id="tfa_6711" class="">Economics</option>
                                    <option value="tfa_6712" id="tfa_6712" class="">English</option>
                                    <option value="tfa_6713" id="tfa_6713" class="">First Nations studies</option>
                                    <option value="tfa_6714" id="tfa_6714" class="">French</option>
                                    <option value="tfa_6715" id="tfa_6715" class="">Gender, Sexuality Women's Studies</option>
                                    <option value="tfa_6716" id="tfa_6716" class="">History</option>
                                    <option value="tfa_6717" id="tfa_6717" class="">Humanities</option>
                                    <option value="tfa_6718" id="tfa_6718" class="">International Studies</option>
                                    <option value="tfa_6719" id="tfa_6719" class="">Labour Studies</option>
                                    <option value="tfa_6720" id="tfa_6720" class="">Linguistics</option>
                                    <option value="tfa_6721" id="tfa_6721" class="">Philosophy</option>
                                    <option value="tfa_6722" id="tfa_6722" class="">Political Science</option>
                                    <option value="tfa_6723" id="tfa_6723" class="">Psychology</option>
                                    <option value="tfa_6724" id="tfa_6724" class="">Sociology</option>
                                    <option value="tfa_6726" id="tfa_6726" class="">Undecided</option>
                                    <option value="tfa_6725" id="tfa_6725" class="">World Literature</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6661-D">
                                    <label id="tfa_6661-L" class="label preField reqMark" for="tfa_6661">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6661" name="tfa_6661" data-condition="`#tfa_6643`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6727" id="tfa_6727" class="">Accounting</option>
                                    <option value="tfa_6728" id="tfa_6728" class="">Entrepreneurship &amp; Innovation</option>
                                    <option value="tfa_6729" id="tfa_6729" class="">Finance</option>
                                    <option value="tfa_6730" id="tfa_6730" class="">Human Resource Management</option>
                                    <option value="tfa_6731" id="tfa_6731" class="">International Business</option>
                                    <option value="tfa_6732" id="tfa_6732" class="">Management Information Systems</option>
                                    <option value="tfa_6733" id="tfa_6733" class="">Marketing</option>
                                    <option value="tfa_6734" id="tfa_6734" class="">Operations Management</option>
                                    <option value="tfa_6735" id="tfa_6735" class="">Strategic Analysis</option>
                                    <option value="tfa_6736" id="tfa_6736" class="">Undecided</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6665-D">
                                    <label id="tfa_6665-L" class="label preField reqMark" for="tfa_6665">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6665" name="tfa_6665" data-condition="`#tfa_6644`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6737" id="tfa_6737" class="">Communications- Media and Culture</option>
                                    <option value="tfa_6739" id="tfa_6739" class="">Communications- Political Economy and Policy</option>
                                    <option value="tfa_6738" id="tfa_6738" class="">Communications- Technology and Society</option>
                                    <option value="tfa_6743" id="tfa_6743" class="">Contemporary Arts- Dance</option>
                                    <option value="tfa_6744" id="tfa_6744" class="">Contemporary Arts- Flim</option>
                                    <option value="tfa_6745" id="tfa_6745" class="">Contemporary Arts- Music Composition (Acoustic &amp; Electroacoustic)</option>
                                    <option value="tfa_6746" id="tfa_6746" class="">Contemporary Arts- Theatre</option>
                                    <option value="tfa_6747" id="tfa_6747" class="">Contemporary Arts- Visual Art</option>
                                    <option value="tfa_6741" id="tfa_6741" class="">Interactive Arts and Technology- Design</option>
                                    <option value="tfa_6740" id="tfa_6740" class="">Interactive Arts and Technology- Interactive Systems</option>
                                    <option value="tfa_6742" id="tfa_6742" class="">Interactive Arts and Technology- Media Arts</option>
                                    <option value="tfa_6748" id="tfa_6748" class="">Undecided</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6669-D">
                                    <label id="tfa_6669-L" class="label preField reqMark" for="tfa_6669">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6669" name="tfa_6669" data-condition="`#tfa_6646`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6749" id="tfa_6749" class="">Artificial Intelligence</option>
                                    <option value="tfa_6750" id="tfa_6750" class="">Computer Graphics and Multimedia</option>
                                    <option value="tfa_6751" id="tfa_6751" class="">Computing Science dual degree (with Zhejiang University, China)</option>
                                    <option value="tfa_6752" id="tfa_6752" class="">Computing Systems</option>
                                    <option value="tfa_6753" id="tfa_6753" class="">Information Systems</option>
                                    <option value="tfa_6754" id="tfa_6754" class="">Programming Languages and Software</option>
                                    <option value="tfa_6755" id="tfa_6755" class="">Software Systems (Major)</option>
                                    <option value="tfa_6756" id="tfa_6756" class="">Theoretical Computer Science</option>
                                    <option value="tfa_6757" id="tfa_6757" class="">Undecided</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6673-D">
                                    <label id="tfa_6673-L" class="label preField reqMark" for="tfa_6673">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6673" name="tfa_6673" data-condition="`#tfa_6647`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6758" id="tfa_6758" class="">Biomedical Engineering</option>
                                    <option value="tfa_6759" id="tfa_6759" class="">Computer Engineering</option>
                                    <option value="tfa_6760" id="tfa_6760" class="">Electronics Engineering</option>
                                    <option value="tfa_6761" id="tfa_6761" class="">Engineering Physics</option>
                                    <option value="tfa_6762" id="tfa_6762" class="">Mechatronic Systems Engineering</option>
                                    <option value="tfa_6763" id="tfa_6763" class="">Systems Engineering</option>
                                    <option value="tfa_6764" id="tfa_6764" class="">Undecided</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6677-D">
                                    <label id="tfa_6677-L" class="label preField reqMark" for="tfa_6677">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6677" name="tfa_6677" data-condition="`#tfa_6648`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6765" id="tfa_6765" class="">Archaeology</option>
                                    <option value="tfa_6767" id="tfa_6767" class="">Archaeology and Anthropology (Joint Major) </option>
                                    <option value="tfa_6768" id="tfa_6768" class="">Archaeology and First Nations Studies (Joint Major)</option>
                                    <option value="tfa_6766" id="tfa_6766" class="">Human Geography</option>
                                    <option value="tfa_6769" id="tfa_6769" class="">Undecided</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6681-D">
                                    <label id="tfa_6681-L" class="label preField reqMark" for="tfa_6681">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6681" name="tfa_6681" data-condition="`#tfa_6649`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6770" id="tfa_6770" class="">Environmental Science</option>
                                    <option value="tfa_6771" id="tfa_6771" class="">Geographic Information Systems (Entry through Applied Sciences)</option>
                                    <option value="tfa_6772" id="tfa_6772" class="">Physical Geography</option>
                                    <option value="tfa_6773" id="tfa_6773" class="">Undecided</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6685-D">
                                    <label id="tfa_6685-L" class="label preField reqMark" for="tfa_6685">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6685" name="tfa_6685" data-condition="`#tfa_6650`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6774" id="tfa_6774" class="">Global Environment Systems</option>
                                    <option value="tfa_6775" id="tfa_6775" class="">Resource and Environmental Management</option>
                                    <option value="tfa_6776" id="tfa_6776" class="">Undecided</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6689-D">
                                    <label id="tfa_6689-L" class="label preField reqMark" for="tfa_6689">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6689" name="tfa_6689" data-condition="`#tfa_6652`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6777" id="tfa_6777" class="">Life Sciences</option>
                                    <option value="tfa_6778" id="tfa_6778" class="">Population and Quantitative Health Sciences</option>
                                    <option value="tfa_6779" id="tfa_6779" class="">Undecided</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_6693-D">
                                    <label id="tfa_6693-L" class="label preField reqMark" for="tfa_6693">Area of Study</label><br><div class="inputWrapper"><select id="tfa_6693" name="tfa_6693" data-condition="`#tfa_6653`" title="Area of Study" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6785" id="tfa_6785" class="">Experimental Science Pathway- Chemistry</option>
                                    <option value="tfa_6787" id="tfa_6787" class="">Experimental Science Pathway- Earth Science</option>
                                    <option value="tfa_6786" id="tfa_6786" class="">Experimental Science Pathway- Physics</option>
                                    <option value="tfa_6792" id="tfa_6792" class="">General Science</option>
                                    <option value="tfa_6791" id="tfa_6791" class="">Life Science Pathway- Biological Sciences</option>
                                    <option value="tfa_6788" id="tfa_6788" class="">Life Science Pathway- Biomedical Physiology Intended*</option>
                                    <option value="tfa_6789" id="tfa_6789" class="">Life Science Pathway- Kinesiology General Intended*</option>
                                    <option value="tfa_6790" id="tfa_6790" class="">Life Science Pathway- Molecular Biology &amp; Biochemistry</option>
                                    <option value="tfa_6783" id="tfa_6783" class="">Mathematics Pathway- Actuarial Science Intended*</option>
                                    <option value="tfa_6782" id="tfa_6782" class="">Mathematics Pathway- Applied Math</option>
                                    <option value="tfa_6784" id="tfa_6784" class="">Mathematics Pathway- Data Science</option>
                                    <option value="tfa_6780" id="tfa_6780" class="">Mathematics Pathway- Mathematics</option>
                                    <option value="tfa_6781" id="tfa_6781" class="">Mathematics Pathway- Statistics</option></select></div>
                                    </div>
                                    </fieldset>
                                    <div class="oneField field-container-D    " id="tfa_72-D">
                                    <label id="tfa_72-L" class="label preField reqMark" for="tfa_72">Year of Entry</label><br><div class="inputWrapper"><select id="tfa_72" name="tfa_72" data-condition="`#tfa_5392` OR `#tfa_5393` OR `#tfa_5394`" title="Year of Entry" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6407" id="tfa_6407" class="">2021</option>
                                    <option value="tfa_5736" id="tfa_5736" class="">2022</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_71-D">
                                    <label id="tfa_71-L" class="label preField reqMark" for="tfa_71">Month of Entry</label><br><div class="inputWrapper">
                                    <select id="tfa_71" name="tfa_71" data-condition="`#tfa_5392` OR `#tfa_5393` OR `#tfa_5394`" title="Month of Entry" aria-required="true" aria-describedby="tfa_71-HH" class="required"><option value="">Please select...</option>
                                    <option value="tfa_5395" id="tfa_5395" class="">January</option>
                                    <option value="tfa_5396" id="tfa_5396" class="">May</option>
                                    <option value="tfa_5397" id="tfa_5397" class="">September</option></select><span class="field-hint-inactive" id="tfa_71-H"><span id="tfa_71-HH" class="hint">Refer to this website's program pages or brochure to find intake months for your selected program</span></span>
                                    </div>
                                    </div>
                                    </fieldset>
                                    </div></div>
                                    <div class="wfPage" id="wfPgIndex-3"><div class="section pageSection" id="tfa_5327">
                                    <h4 id="tfa_5327-T">Personal and Contact Details</h4>
                                    <fieldset id="tfa_5328" class="section">
                                    <legend id="tfa_5328-L"><b>Student Personal Details</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_1-D">
                                    <label id="tfa_1-L" class="label preField reqMark" for="tfa_1">Title</label><br><div class="inputWrapper"><select id="tfa_1" name="tfa_1" title="Title" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_231" id="tfa_231" class="">Mr</option>
                                    <option value="tfa_232" id="tfa_232" class="">Miss</option>
                                    <option value="tfa_233" id="tfa_233" class="">Mrs</option>
                                    <option value="tfa_234" id="tfa_234" class="">Ms</option>
                                    <option value="tfa_235" id="tfa_235" data-conditionals="#tfa_2" class="">Other</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_2-D">
                                    <label id="tfa_2-L" class="label preField reqMark" for="tfa_2">Other Title</label><br><div class="inputWrapper"><input type="text" id="tfa_2" name="tfa_2" value="" aria-required="true" data-condition="`#tfa_235`" title="Other Title" class="validate-custom /^[a-zA-Z\s]+$/ required"></div>
                                    <script type="text/javascript">
                                                            if(typeof wFORMS != 'undefined') {
                                                                if(wFORMS.behaviors.validation) {
                                                                    wFORMS.behaviors.validation.rules['customtfa_2'] =  { selector: '*[id="tfa_2"]', check: 'validateCustom'};
                                                                    wFORMS.behaviors.validation.messages['customtfa_2'] = "Remove digits and punctuation (e.g. / , ' . !)";
                                                                }
                                                            }</script>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_3-D">
                                    <label id="tfa_3-L" class="label preField reqMark" for="tfa_3">Last Name</label><br><div class="inputWrapper"><input type="text" id="tfa_3" name="tfa_3" value="" maxlength="35" aria-required="true" title="Last Name" class="validate-custom /^[a-zA-Z\s]+$/ required"></div>
                                    <script type="text/javascript">
                                                            if(typeof wFORMS != 'undefined') {
                                                                if(wFORMS.behaviors.validation) {
                                                                    wFORMS.behaviors.validation.rules['customtfa_3'] =  { selector: '*[id="tfa_3"]', check: 'validateCustom'};
                                                                    wFORMS.behaviors.validation.messages['customtfa_3'] = "Remove digits and punctuation (e.g. / , ' . !)";
                                                                }
                                                            }</script>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_4-D">
                                    <label id="tfa_4-L" class="label preField reqMark" for="tfa_4">First Name(s)</label><br><div class="inputWrapper"><input type="text" id="tfa_4" name="tfa_4" value="" maxlength="25" aria-required="true" title="First Name(s)" class="validate-custom /^[a-zA-Z\s]+$/ required"></div>
                                    <script type="text/javascript">
                                                            if(typeof wFORMS != 'undefined') {
                                                                if(wFORMS.behaviors.validation) {
                                                                    wFORMS.behaviors.validation.rules['customtfa_4'] =  { selector: '*[id="tfa_4"]', check: 'validateCustom'};
                                                                    wFORMS.behaviors.validation.messages['customtfa_4'] = "Remove digits and punctuation (e.g. / , ' . !)";
                                                                }
                                                            }</script>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_79-D">
                                    <label id="tfa_79-L" class="label preField " for="tfa_79">Preferred Name</label><br><div class="inputWrapper"><input type="text" id="tfa_79" name="tfa_79" value="" maxlength="20" title="Preferred Name" class="validate-custom /^[a-zA-Z\s]+$/"></div>
                                    <script type="text/javascript">
                                                            if(typeof wFORMS != 'undefined') {
                                                                if(wFORMS.behaviors.validation) {
                                                                    wFORMS.behaviors.validation.rules['customtfa_79'] =  { selector: '*[id="tfa_79"]', check: 'validateCustom'};
                                                                    wFORMS.behaviors.validation.messages['customtfa_79'] = "Remove digits and punctuation (e.g. / , ' . !)";
                                                                }
                                                            }</script>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8282-D">
                                    <label id="tfa_8282-L" class="label preField reqMark" for="tfa_8282">Date of Birth</label><br><div class="inputWrapper"><input type="text" id="tfa_8282" name="tfa_8282" value="" autocomplete="off" aria-required="true" title="Date of Birth" class="validate-datecal required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8-D" role="radiogroup" aria-labelledby="tfa_8-L" data-tfa-labelledby="-L tfa_8-L">
                                    <label id="tfa_8-L" class="label preField reqMark">Gender</label><br><div class="inputWrapper"><span id="tfa_8" class="choices  required"><span class="oneChoice"><input type="radio" value="tfa_399" class="" id="tfa_399" name="tfa_8" aria-required="true" aria-labelledby="tfa_399-L" data-tfa-labelledby="tfa_8-L tfa_399-L"><label class="label postField" id="tfa_399-L" for="tfa_399"><span class="input-radio-faux"></span>Male</label></span><span class="oneChoice"><input type="radio" value="tfa_400" class="" id="tfa_400" name="tfa_8" aria-required="true" aria-labelledby="tfa_400-L" data-tfa-labelledby="tfa_8-L tfa_400-L"><label class="label postField" id="tfa_400-L" for="tfa_400"><span class="input-radio-faux"></span>Female</label></span></span></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_9-D">
                                    <label id="tfa_9-L" class="label preField reqMark" for="tfa_9">Country of Birth</label><br><div class="inputWrapper"><select id="tfa_9" name="tfa_9" title="Country of Birth" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_404" id="tfa_404" class="">Afghanistan</option>
                                    <option value="tfa_405" id="tfa_405" class="">Aland Islands</option>
                                    <option value="tfa_406" id="tfa_406" class="">Albania</option>
                                    <option value="tfa_407" id="tfa_407" class="">Algeria</option>
                                    <option value="tfa_408" id="tfa_408" class="">American Samoa</option>
                                    <option value="tfa_409" id="tfa_409" class="">Andorra</option>
                                    <option value="tfa_410" id="tfa_410" class="">Angola</option>
                                    <option value="tfa_411" id="tfa_411" class="">Anguilla</option>
                                    <option value="tfa_412" id="tfa_412" class="">Antigua and Barbuda</option>
                                    <option value="tfa_413" id="tfa_413" class="">Argentina</option>
                                    <option value="tfa_414" id="tfa_414" class="">Armenia</option>
                                    <option value="tfa_415" id="tfa_415" class="">Aruba</option>
                                    <option value="tfa_416" id="tfa_416" class="">Australia</option>
                                    <option value="tfa_417" id="tfa_417" class="">Austria</option>
                                    <option value="tfa_418" id="tfa_418" class="">Azerbaijan</option>
                                    <option value="tfa_419" id="tfa_419" class="">Bahamas</option>
                                    <option value="tfa_420" id="tfa_420" class="">Bahrain</option>
                                    <option value="tfa_421" id="tfa_421" class="">Bangladesh</option>
                                    <option value="tfa_422" id="tfa_422" class="">Barbados</option>
                                    <option value="tfa_423" id="tfa_423" class="">Belarus</option>
                                    <option value="tfa_424" id="tfa_424" class="">Belgium</option>
                                    <option value="tfa_425" id="tfa_425" class="">Belize</option>
                                    <option value="tfa_426" id="tfa_426" class="">Benin</option>
                                    <option value="tfa_427" id="tfa_427" class="">Bermuda</option>
                                    <option value="tfa_428" id="tfa_428" class="">Bhutan</option>
                                    <option value="tfa_429" id="tfa_429" class="">Bolivia</option>
                                    <option value="tfa_430" id="tfa_430" class="">Bosnia &amp; Herzegovina</option>
                                    <option value="tfa_431" id="tfa_431" class="">Botswana</option>
                                    <option value="tfa_432" id="tfa_432" class="">Brazil</option>
                                    <option value="tfa_433" id="tfa_433" class="">British Virgin Isle</option>
                                    <option value="tfa_434" id="tfa_434" class="">Brunei</option>
                                    <option value="tfa_435" id="tfa_435" class="">Bulgaria</option>
                                    <option value="tfa_436" id="tfa_436" class="">Burkina Faso</option>
                                    <option value="tfa_437" id="tfa_437" class="">Burundi</option>
                                    <option value="tfa_438" id="tfa_438" class="">Cambodia</option>
                                    <option value="tfa_439" id="tfa_439" class="">Cameroon</option>
                                    <option value="tfa_440" id="tfa_440" class="">Canada</option>
                                    <option value="tfa_441" id="tfa_441" class="">Cape Verde</option>
                                    <option value="tfa_442" id="tfa_442" class="">Cayman Islands</option>
                                    <option value="tfa_443" id="tfa_443" class="">Central African Rep</option>
                                    <option value="tfa_444" id="tfa_444" class="">Chad</option>
                                    <option value="tfa_445" id="tfa_445" class="">Chile</option>
                                    <option value="tfa_446" id="tfa_446" class="">China</option>
                                    <option value="tfa_447" id="tfa_447" class="">Colombia</option>
                                    <option value="tfa_448" id="tfa_448" class="">Comoros</option>
                                    <option value="tfa_449" id="tfa_449" class="">Congo</option>
                                    <option value="tfa_450" id="tfa_450" class="">Cook Islands</option>
                                    <option value="tfa_451" id="tfa_451" class="">Costa Rica</option>
                                    <option value="tfa_452" id="tfa_452" class="">Croatia</option>
                                    <option value="tfa_453" id="tfa_453" class="">Cuba</option>
                                    <option value="tfa_454" id="tfa_454" class="">Cyprus</option>
                                    <option value="tfa_455" id="tfa_455" class="">Czech Republic</option>
                                    <option value="tfa_456" id="tfa_456" class="">Dem Rep of the Congo</option>
                                    <option value="tfa_457" id="tfa_457" class="">Denmark</option>
                                    <option value="tfa_458" id="tfa_458" class="">Djibouti</option>
                                    <option value="tfa_459" id="tfa_459" class="">Dominica</option>
                                    <option value="tfa_460" id="tfa_460" class="">Dominican Republic</option>
                                    <option value="tfa_461" id="tfa_461" class="">East Timor</option>
                                    <option value="tfa_462" id="tfa_462" class="">Ecuador</option>
                                    <option value="tfa_463" id="tfa_463" class="">Egypt</option>
                                    <option value="tfa_464" id="tfa_464" class="">El Salvador</option>
                                    <option value="tfa_465" id="tfa_465" class="">Equatorial Guinea</option>
                                    <option value="tfa_466" id="tfa_466" class="">Eritrea</option>
                                    <option value="tfa_467" id="tfa_467" class="">Estonia</option>
                                    <option value="tfa_468" id="tfa_468" class="">Ethiopia</option>
                                    <option value="tfa_469" id="tfa_469" class="">Faeroe Islands</option>
                                    <option value="tfa_470" id="tfa_470" class="">Falkland Islands</option>
                                    <option value="tfa_471" id="tfa_471" class="">Fiji</option>
                                    <option value="tfa_472" id="tfa_472" class="">Finland</option>
                                    <option value="tfa_473" id="tfa_473" class="">France</option>
                                    <option value="tfa_474" id="tfa_474" class="">French Guiana</option>
                                    <option value="tfa_475" id="tfa_475" class="">French Polynesia</option>
                                    <option value="tfa_476" id="tfa_476" class="">Gabon</option>
                                    <option value="tfa_477" id="tfa_477" class="">Gambia</option>
                                    <option value="tfa_478" id="tfa_478" class="">Georgia</option>
                                    <option value="tfa_479" id="tfa_479" class="">Germany</option>
                                    <option value="tfa_480" id="tfa_480" class="">Ghana</option>
                                    <option value="tfa_481" id="tfa_481" class="">Gibraltar</option>
                                    <option value="tfa_482" id="tfa_482" class="">Greece</option>
                                    <option value="tfa_483" id="tfa_483" class="">Greenland</option>
                                    <option value="tfa_484" id="tfa_484" class="">Grenada</option>
                                    <option value="tfa_485" id="tfa_485" class="">Guadeloupe</option>
                                    <option value="tfa_486" id="tfa_486" class="">Guam</option>
                                    <option value="tfa_487" id="tfa_487" class="">Guatemala</option>
                                    <option value="tfa_488" id="tfa_488" class="">Guernsey</option>
                                    <option value="tfa_489" id="tfa_489" class="">Guinea</option>
                                    <option value="tfa_490" id="tfa_490" class="">Guinea-Bissau</option>
                                    <option value="tfa_491" id="tfa_491" class="">Guyana</option>
                                    <option value="tfa_492" id="tfa_492" class="">Haiti</option>
                                    <option value="tfa_493" id="tfa_493" class="">Holy See</option>
                                    <option value="tfa_494" id="tfa_494" class="">Honduras</option>
                                    <option value="tfa_495" id="tfa_495" class="">Hong Kong</option>
                                    <option value="tfa_496" id="tfa_496" class="">Hungary</option>
                                    <option value="tfa_497" id="tfa_497" class="">Iceland</option>
                                    <option value="tfa_498" id="tfa_498" class="">India</option>
                                    <option value="tfa_499" id="tfa_499" class="">Indonesia</option>
                                    <option value="tfa_500" id="tfa_500" class="">Iran</option>
                                    <option value="tfa_501" id="tfa_501" class="">Iraq</option>
                                    <option value="tfa_502" id="tfa_502" class="">Ireland</option>
                                    <option value="tfa_503" id="tfa_503" class="">Isle of Man</option>
                                    <option value="tfa_504" id="tfa_504" class="">Israel</option>
                                    <option value="tfa_505" id="tfa_505" class="">Italy</option>
                                    <option value="tfa_506" id="tfa_506" class="">Ivory Coast</option>
                                    <option value="tfa_507" id="tfa_507" class="">Jamaica</option>
                                    <option value="tfa_508" id="tfa_508" class="">Japan</option>
                                    <option value="tfa_509" id="tfa_509" class="">Jersey</option>
                                    <option value="tfa_510" id="tfa_510" class="">Jordan</option>
                                    <option value="tfa_511" id="tfa_511" class="">Kazakhstan</option>
                                    <option value="tfa_512" id="tfa_512" class="">Kenya</option>
                                    <option value="tfa_513" id="tfa_513" class="">Kiribati</option>
                                    <option value="tfa_514" id="tfa_514" class="">Kuwait</option>
                                    <option value="tfa_515" id="tfa_515" class="">Kyrgyzstan</option>
                                    <option value="tfa_516" id="tfa_516" class="">Laos</option>
                                    <option value="tfa_517" id="tfa_517" class="">Latvia</option>
                                    <option value="tfa_518" id="tfa_518" class="">Lebanon</option>
                                    <option value="tfa_519" id="tfa_519" class="">Lesotho</option>
                                    <option value="tfa_520" id="tfa_520" class="">Liberia</option>
                                    <option value="tfa_521" id="tfa_521" class="">Libya</option>
                                    <option value="tfa_522" id="tfa_522" class="">Liechtenstein</option>
                                    <option value="tfa_523" id="tfa_523" class="">Lithuania</option>
                                    <option value="tfa_524" id="tfa_524" class="">Luxembourg</option>
                                    <option value="tfa_525" id="tfa_525" class="">Macao</option>
                                    <option value="tfa_526" id="tfa_526" class="">Macedonia</option>
                                    <option value="tfa_527" id="tfa_527" class="">Madagascar</option>
                                    <option value="tfa_528" id="tfa_528" class="">Malawi</option>
                                    <option value="tfa_529" id="tfa_529" class="">Malaysia</option>
                                    <option value="tfa_530" id="tfa_530" class="">Maldives</option>
                                    <option value="tfa_531" id="tfa_531" class="">Mali</option>
                                    <option value="tfa_532" id="tfa_532" class="">Malta</option>
                                    <option value="tfa_533" id="tfa_533" class="">Marshall Islands</option>
                                    <option value="tfa_534" id="tfa_534" class="">Martinique</option>
                                    <option value="tfa_535" id="tfa_535" class="">Mauritania</option>
                                    <option value="tfa_536" id="tfa_536" class="">Mauritius</option>
                                    <option value="tfa_537" id="tfa_537" class="">Mayotte</option>
                                    <option value="tfa_538" id="tfa_538" class="">Mexico</option>
                                    <option value="tfa_539" id="tfa_539" class="">Micronesia</option>
                                    <option value="tfa_540" id="tfa_540" class="">Monaco</option>
                                    <option value="tfa_541" id="tfa_541" class="">Mongolia</option>
                                    <option value="tfa_542" id="tfa_542" class="">Montenegro</option>
                                    <option value="tfa_543" id="tfa_543" class="">Montserrat</option>
                                    <option value="tfa_544" id="tfa_544" class="">Morocco</option>
                                    <option value="tfa_545" id="tfa_545" class="">Mozambique</option>
                                    <option value="tfa_546" id="tfa_546" class="">Myanmar</option>
                                    <option value="tfa_547" id="tfa_547" class="">Namibia</option>
                                    <option value="tfa_548" id="tfa_548" class="">Nauru</option>
                                    <option value="tfa_549" id="tfa_549" class="">Nepal</option>
                                    <option value="tfa_550" id="tfa_550" class="">Netherlands</option>
                                    <option value="tfa_551" id="tfa_551" class="">Netherlands Antilles</option>
                                    <option value="tfa_552" id="tfa_552" class="">New Caledonia</option>
                                    <option value="tfa_553" id="tfa_553" class="">New Zealand</option>
                                    <option value="tfa_554" id="tfa_554" class="">Nicaragua</option>
                                    <option value="tfa_555" id="tfa_555" class="">Niger</option>
                                    <option value="tfa_556" id="tfa_556" class="">Nigeria</option>
                                    <option value="tfa_557" id="tfa_557" class="">Niue</option>
                                    <option value="tfa_558" id="tfa_558" class="">Norfolk Island</option>
                                    <option value="tfa_559" id="tfa_559" class="">North Korea</option>
                                    <option value="tfa_560" id="tfa_560" class="">Norway</option>
                                    <option value="tfa_561" id="tfa_561" class="">Nth Mariana Islands</option>
                                    <option value="tfa_562" id="tfa_562" class="">Oman</option>
                                    <option value="tfa_563" id="tfa_563" class="">Pakistan</option>
                                    <option value="tfa_564" id="tfa_564" class="">Palau</option>
                                    <option value="tfa_565" id="tfa_565" class="">Palestine</option>
                                    <option value="tfa_566" id="tfa_566" class="">Panama</option>
                                    <option value="tfa_567" id="tfa_567" class="">Papua New Guinea</option>
                                    <option value="tfa_568" id="tfa_568" class="">Paraguay</option>
                                    <option value="tfa_569" id="tfa_569" class="">Peru</option>
                                    <option value="tfa_570" id="tfa_570" class="">Philippines</option>
                                    <option value="tfa_571" id="tfa_571" class="">Pitcairn</option>
                                    <option value="tfa_572" id="tfa_572" class="">Poland</option>
                                    <option value="tfa_573" id="tfa_573" class="">Portugal</option>
                                    <option value="tfa_574" id="tfa_574" class="">Puerto Rico</option>
                                    <option value="tfa_575" id="tfa_575" class="">Qatar</option>
                                    <option value="tfa_576" id="tfa_576" class="">Republic of Moldova</option>
                                    <option value="tfa_577" id="tfa_577" class="">Reunion</option>
                                    <option value="tfa_578" id="tfa_578" class="">Romania</option>
                                    <option value="tfa_579" id="tfa_579" class="">Russian Federation</option>
                                    <option value="tfa_580" id="tfa_580" class="">Rwanda</option>
                                    <option value="tfa_581" id="tfa_581" class="">Saint Helena</option>
                                    <option value="tfa_582" id="tfa_582" class="">Saint Kitts &amp; Nevis</option>
                                    <option value="tfa_583" id="tfa_583" class="">Saint Lucia</option>
                                    <option value="tfa_584" id="tfa_584" class="">Saint-Barthelemy</option>
                                    <option value="tfa_585" id="tfa_585" class="">Saint-Martin(French)</option>
                                    <option value="tfa_586" id="tfa_586" class="">Samoa</option>
                                    <option value="tfa_587" id="tfa_587" class="">San Marino</option>
                                    <option value="tfa_588" id="tfa_588" class="">Sao Tome &amp; Principe</option>
                                    <option value="tfa_589" id="tfa_589" class="">Saudi Arabia</option>
                                    <option value="tfa_590" id="tfa_590" class="">Senegal</option>
                                    <option value="tfa_591" id="tfa_591" class="">Serbia</option>
                                    <option value="tfa_592" id="tfa_592" class="">Seychelles</option>
                                    <option value="tfa_593" id="tfa_593" class="">Sierra Leone</option>
                                    <option value="tfa_594" id="tfa_594" class="">Singapore</option>
                                    <option value="tfa_595" id="tfa_595" class="">Slovakia</option>
                                    <option value="tfa_596" id="tfa_596" class="">Slovenia</option>
                                    <option value="tfa_597" id="tfa_597" class="">Solomon Islands</option>
                                    <option value="tfa_598" id="tfa_598" class="">Somalia</option>
                                    <option value="tfa_599" id="tfa_599" class="">South Africa</option>
                                    <option value="tfa_600" id="tfa_600" class="">South Korea</option>
                                    <option value="tfa_601" id="tfa_601" class="">South Sudan</option>
                                    <option value="tfa_602" id="tfa_602" class="">Spain</option>
                                    <option value="tfa_603" id="tfa_603" class="">Sri Lanka</option>
                                    <option value="tfa_604" id="tfa_604" class="">St Pierre &amp; Miquelon</option>
                                    <option value="tfa_605" id="tfa_605" class="">St Vinc &amp; Grenadine</option>
                                    <option value="tfa_606" id="tfa_606" class="">Sudan</option>
                                    <option value="tfa_607" id="tfa_607" class="">Suriname</option>
                                    <option value="tfa_608" id="tfa_608" class="">Svalbard &amp; Jan Mayen</option>
                                    <option value="tfa_609" id="tfa_609" class="">Swaziland</option>
                                    <option value="tfa_610" id="tfa_610" class="">Sweden</option>
                                    <option value="tfa_611" id="tfa_611" class="">Switzerland</option>
                                    <option value="tfa_612" id="tfa_612" class="">Syria</option>
                                    <option value="tfa_613" id="tfa_613" class="">Taiwan</option>
                                    <option value="tfa_614" id="tfa_614" class="">Tajikistan</option>
                                    <option value="tfa_615" id="tfa_615" class="">Tanzania</option>
                                    <option value="tfa_616" id="tfa_616" class="">Thailand</option>
                                    <option value="tfa_617" id="tfa_617" class="">Togo</option>
                                    <option value="tfa_618" id="tfa_618" class="">Tokelau</option>
                                    <option value="tfa_619" id="tfa_619" class="">Tonga</option>
                                    <option value="tfa_620" id="tfa_620" class="">Trinidad and Tobago</option>
                                    <option value="tfa_621" id="tfa_621" class="">Tunisia</option>
                                    <option value="tfa_622" id="tfa_622" class="">Turkey</option>
                                    <option value="tfa_623" id="tfa_623" class="">Turkmenistan</option>
                                    <option value="tfa_624" id="tfa_624" class="">Turks &amp; Caicos Isle</option>
                                    <option value="tfa_625" id="tfa_625" class="">Tuvalu</option>
                                    <option value="tfa_626" id="tfa_626" class="">Uganda</option>
                                    <option value="tfa_627" id="tfa_627" class="">Ukraine</option>
                                    <option value="tfa_628" id="tfa_628" class="">United Arab Emirates</option>
                                    <option value="tfa_629" id="tfa_629" class="">United Kingdom</option>
                                    <option value="tfa_630" id="tfa_630" class="">Uruguay</option>
                                    <option value="tfa_631" id="tfa_631" class="">US Virgin Islands</option>
                                    <option value="tfa_632" id="tfa_632" class="">USA</option>
                                    <option value="tfa_633" id="tfa_633" class="">Uzbekistan</option>
                                    <option value="tfa_634" id="tfa_634" class="">Vanuatu</option>
                                    <option value="tfa_635" id="tfa_635" class="">Venezuela</option>
                                    <option value="tfa_636" id="tfa_636" class="">Viet Nam</option>
                                    <option value="tfa_637" id="tfa_637" class="">Wallis &amp; Futuna Isle</option>
                                    <option value="tfa_638" id="tfa_638" class="">Western Sahara</option>
                                    <option value="tfa_639" id="tfa_639" class="">Yemen</option>
                                    <option value="tfa_641" id="tfa_641" class="">Zambia</option>
                                    <option value="tfa_642" id="tfa_642" class="">Zimbabwe</option></select></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_5330" class="section">
                                    <legend id="tfa_5330-L"><b>Proof of Citizenship</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_11-D">
                                    <label id="tfa_11-L" class="label preField " for="tfa_11">Passport Number</label><br><div class="inputWrapper"><input type="text" id="tfa_11" name="tfa_11" value="" maxlength="20" title="Passport Number" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_12-D">
                                    <label id="tfa_12-L" class="label preField " for="tfa_12">Please&nbsp; Upload Scanned Copy of Your Passport</label><br><div class="inputWrapper"><input type="file" id="tfa_12" name="tfa_12" size="" title="Please  Upload Scanned Copy of Your Passport" class=""></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_5331" class="section">
                                    <legend id="tfa_5331-L"><b>Student</b> <b>Contact Details</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_13-D">
                                    <label id="tfa_13-L" class="label preField reqMark" for="tfa_13">Email Address</label><br><div class="inputWrapper"><input type="text" id="tfa_13" name="tfa_13" value="" maxlength="50" aria-required="true" title="Email Address" class="validate-email calc-applicantEmail required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_5485-D">
                                    <label id="tfa_5485-L" class="label preField " for="tfa_5485">Skype ID (if you have one)</label><br><div class="inputWrapper"><input type="text" id="tfa_5485" name="tfa_5485" value="" title="Skype ID (if you have one)" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_5486-D">
                                    <label id="tfa_5486-L" class="label preField " for="tfa_5486">WeChat ID (if you have one)</label><br><div class="inputWrapper"><input type="text" id="tfa_5486" name="tfa_5486" value="" title="WeChat ID (if you have one)" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_5487-D">
                                    <label id="tfa_5487-L" class="label preField " for="tfa_5487">Whatsapp ID (if you have one)</label><br><div class="inputWrapper"><input type="text" id="tfa_5487" name="tfa_5487" value="" title="Whatsapp ID (if you have one)" class=""></div>
                                    </div>
                                    <fieldset id="tfa_6173" class="section">
                                    <div class="oneField field-container-D    " id="tfa_6174-D">
                                    <label id="tfa_6174-L" class="label preField reqMark" for="tfa_6174">Country Code</label><br><div class="inputWrapper"><select id="tfa_6174" name="tfa_6174" title="Country Code" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_6175" id="tfa_6175" class="">+1</option>
                                    <option value="tfa_6176" id="tfa_6176" class="">+1-242</option>
                                    <option value="tfa_6177" id="tfa_6177" class="">+1-246</option>
                                    <option value="tfa_6178" id="tfa_6178" class="">+1-264</option>
                                    <option value="tfa_6179" id="tfa_6179" class="">+1-268</option>
                                    <option value="tfa_6180" id="tfa_6180" class="">+1-284</option>
                                    <option value="tfa_6181" id="tfa_6181" class="">+1-340</option>
                                    <option value="tfa_6182" id="tfa_6182" class="">+1-345</option>
                                    <option value="tfa_6183" id="tfa_6183" class="">+1-441</option>
                                    <option value="tfa_6184" id="tfa_6184" class="">+1-473</option>
                                    <option value="tfa_6185" id="tfa_6185" class="">+1-649</option>
                                    <option value="tfa_6186" id="tfa_6186" class="">+1-664</option>
                                    <option value="tfa_6187" id="tfa_6187" class="">+1-670</option>
                                    <option value="tfa_6188" id="tfa_6188" class="">+1-671</option>
                                    <option value="tfa_6189" id="tfa_6189" class="">+1-684</option>
                                    <option value="tfa_6190" id="tfa_6190" class="">+1-721</option>
                                    <option value="tfa_6191" id="tfa_6191" class="">+1-758</option>
                                    <option value="tfa_6192" id="tfa_6192" class="">+1-767</option>
                                    <option value="tfa_6193" id="tfa_6193" class="">+1-784</option>
                                    <option value="tfa_6194" id="tfa_6194" class="">+1-787</option>
                                    <option value="tfa_6196" id="tfa_6196" class="">+1-809</option>
                                    <option value="tfa_6197" id="tfa_6197" class="">+1-829</option>
                                    <option value="tfa_6198" id="tfa_6198" class="">+1-849</option>
                                    <option value="tfa_6199" id="tfa_6199" class="">+1-868</option>
                                    <option value="tfa_6200" id="tfa_6200" class="">+1-869</option>
                                    <option value="tfa_6201" id="tfa_6201" class="">+1-876</option>
                                    <option value="tfa_6195" id="tfa_6195" class="">+1-939</option>
                                    <option value="tfa_6202" id="tfa_6202" class="">+20</option>
                                    <option value="tfa_6203" id="tfa_6203" class="">+211</option>
                                    <option value="tfa_6204" id="tfa_6204" class="">+212</option>
                                    <option value="tfa_6205" id="tfa_6205" class="">+213</option>
                                    <option value="tfa_6206" id="tfa_6206" class="">+216</option>
                                    <option value="tfa_6207" id="tfa_6207" class="">+218</option>
                                    <option value="tfa_6208" id="tfa_6208" class="">+220</option>
                                    <option value="tfa_6209" id="tfa_6209" class="">+221</option>
                                    <option value="tfa_6210" id="tfa_6210" class="">+222</option>
                                    <option value="tfa_6211" id="tfa_6211" class="">+223</option>
                                    <option value="tfa_6212" id="tfa_6212" class="">+224</option>
                                    <option value="tfa_6213" id="tfa_6213" class="">+225</option>
                                    <option value="tfa_6214" id="tfa_6214" class="">+226</option>
                                    <option value="tfa_6215" id="tfa_6215" class="">+227</option>
                                    <option value="tfa_6216" id="tfa_6216" class="">+228</option>
                                    <option value="tfa_6217" id="tfa_6217" class="">+229</option>
                                    <option value="tfa_6218" id="tfa_6218" class="">+230</option>
                                    <option value="tfa_6219" id="tfa_6219" class="">+231</option>
                                    <option value="tfa_6220" id="tfa_6220" class="">+232</option>
                                    <option value="tfa_6221" id="tfa_6221" class="">+233</option>
                                    <option value="tfa_6222" id="tfa_6222" class="">+234</option>
                                    <option value="tfa_6223" id="tfa_6223" class="">+235</option>
                                    <option value="tfa_6224" id="tfa_6224" class="">+236</option>
                                    <option value="tfa_6225" id="tfa_6225" class="">+237</option>
                                    <option value="tfa_6226" id="tfa_6226" class="">+238</option>
                                    <option value="tfa_6227" id="tfa_6227" class="">+239</option>
                                    <option value="tfa_6228" id="tfa_6228" class="">+240</option>
                                    <option value="tfa_6229" id="tfa_6229" class="">+241</option>
                                    <option value="tfa_6230" id="tfa_6230" class="">+242</option>
                                    <option value="tfa_6231" id="tfa_6231" class="">+243</option>
                                    <option value="tfa_6232" id="tfa_6232" class="">+244</option>
                                    <option value="tfa_6233" id="tfa_6233" class="">+245</option>
                                    <option value="tfa_6234" id="tfa_6234" class="">+246</option>
                                    <option value="tfa_6235" id="tfa_6235" class="">+248</option>
                                    <option value="tfa_6236" id="tfa_6236" class="">+249</option>
                                    <option value="tfa_6237" id="tfa_6237" class="">+250</option>
                                    <option value="tfa_6238" id="tfa_6238" class="">+251</option>
                                    <option value="tfa_6239" id="tfa_6239" class="">+252</option>
                                    <option value="tfa_6240" id="tfa_6240" class="">+253</option>
                                    <option value="tfa_6241" id="tfa_6241" class="">+254</option>
                                    <option value="tfa_6242" id="tfa_6242" class="">+255</option>
                                    <option value="tfa_6243" id="tfa_6243" class="">+256</option>
                                    <option value="tfa_6244" id="tfa_6244" class="">+257</option>
                                    <option value="tfa_6245" id="tfa_6245" class="">+258</option>
                                    <option value="tfa_6246" id="tfa_6246" class="">+260</option>
                                    <option value="tfa_6247" id="tfa_6247" class="">+261</option>
                                    <option value="tfa_6248" id="tfa_6248" class="">+262</option>
                                    <option value="tfa_6249" id="tfa_6249" class="">+263</option>
                                    <option value="tfa_6250" id="tfa_6250" class="">+264</option>
                                    <option value="tfa_6251" id="tfa_6251" class="">+265</option>
                                    <option value="tfa_6252" id="tfa_6252" class="">+266</option>
                                    <option value="tfa_6253" id="tfa_6253" class="">+267</option>
                                    <option value="tfa_6254" id="tfa_6254" class="">+268</option>
                                    <option value="tfa_6255" id="tfa_6255" class="">+269</option>
                                    <option value="tfa_6256" id="tfa_6256" class="">+27</option>
                                    <option value="tfa_6257" id="tfa_6257" class="">+290</option>
                                    <option value="tfa_6258" id="tfa_6258" class="">+291</option>
                                    <option value="tfa_6259" id="tfa_6259" class="">+297</option>
                                    <option value="tfa_6260" id="tfa_6260" class="">+298</option>
                                    <option value="tfa_6261" id="tfa_6261" class="">+299</option>
                                    <option value="tfa_6262" id="tfa_6262" class="">+30</option>
                                    <option value="tfa_6263" id="tfa_6263" class="">+31</option>
                                    <option value="tfa_6264" id="tfa_6264" class="">+32</option>
                                    <option value="tfa_6265" id="tfa_6265" class="">+33</option>
                                    <option value="tfa_6266" id="tfa_6266" class="">+34</option>
                                    <option value="tfa_6267" id="tfa_6267" class="">+350</option>
                                    <option value="tfa_6268" id="tfa_6268" class="">+351</option>
                                    <option value="tfa_6269" id="tfa_6269" class="">+352</option>
                                    <option value="tfa_6270" id="tfa_6270" class="">+353</option>
                                    <option value="tfa_6271" id="tfa_6271" class="">+354</option>
                                    <option value="tfa_6272" id="tfa_6272" class="">+355</option>
                                    <option value="tfa_6273" id="tfa_6273" class="">+356</option>
                                    <option value="tfa_6274" id="tfa_6274" class="">+357</option>
                                    <option value="tfa_6275" id="tfa_6275" class="">+358</option>
                                    <option value="tfa_6276" id="tfa_6276" class="">+359</option>
                                    <option value="tfa_6277" id="tfa_6277" class="">+36</option>
                                    <option value="tfa_6278" id="tfa_6278" class="">+370</option>
                                    <option value="tfa_6279" id="tfa_6279" class="">+371</option>
                                    <option value="tfa_6280" id="tfa_6280" class="">+372</option>
                                    <option value="tfa_6281" id="tfa_6281" class="">+373</option>
                                    <option value="tfa_6282" id="tfa_6282" class="">+374</option>
                                    <option value="tfa_6283" id="tfa_6283" class="">+375</option>
                                    <option value="tfa_6284" id="tfa_6284" class="">+376</option>
                                    <option value="tfa_6285" id="tfa_6285" class="">+377</option>
                                    <option value="tfa_6286" id="tfa_6286" class="">+378</option>
                                    <option value="tfa_6287" id="tfa_6287" class="">+379</option>
                                    <option value="tfa_6288" id="tfa_6288" class="">+380</option>
                                    <option value="tfa_6289" id="tfa_6289" class="">+381</option>
                                    <option value="tfa_6290" id="tfa_6290" class="">+382</option>
                                    <option value="tfa_6291" id="tfa_6291" class="">+383</option>
                                    <option value="tfa_6292" id="tfa_6292" class="">+385</option>
                                    <option value="tfa_6293" id="tfa_6293" class="">+386</option>
                                    <option value="tfa_6294" id="tfa_6294" class="">+387</option>
                                    <option value="tfa_6295" id="tfa_6295" class="">+389</option>
                                    <option value="tfa_6296" id="tfa_6296" class="">+39</option>
                                    <option value="tfa_6297" id="tfa_6297" class="">+40</option>
                                    <option value="tfa_6298" id="tfa_6298" class="">+41</option>
                                    <option value="tfa_6299" id="tfa_6299" class="">+420</option>
                                    <option value="tfa_6300" id="tfa_6300" class="">+421</option>
                                    <option value="tfa_6301" id="tfa_6301" class="">+423</option>
                                    <option value="tfa_6302" id="tfa_6302" class="">+43</option>
                                    <option value="tfa_6303" id="tfa_6303" class="">+44</option>
                                    <option value="tfa_6304" id="tfa_6304" class="">+44-1481</option>
                                    <option value="tfa_6305" id="tfa_6305" class="">+44-1534</option>
                                    <option value="tfa_6306" id="tfa_6306" class="">+44-1624</option>
                                    <option value="tfa_6307" id="tfa_6307" class="">+45</option>
                                    <option value="tfa_6308" id="tfa_6308" class="">+46</option>
                                    <option value="tfa_6309" id="tfa_6309" class="">+47</option>
                                    <option value="tfa_6310" id="tfa_6310" class="">+48</option>
                                    <option value="tfa_6311" id="tfa_6311" class="">+49</option>
                                    <option value="tfa_6312" id="tfa_6312" class="">+500</option>
                                    <option value="tfa_6313" id="tfa_6313" class="">+501</option>
                                    <option value="tfa_6314" id="tfa_6314" class="">+502</option>
                                    <option value="tfa_6315" id="tfa_6315" class="">+503</option>
                                    <option value="tfa_6316" id="tfa_6316" class="">+504</option>
                                    <option value="tfa_6317" id="tfa_6317" class="">+505</option>
                                    <option value="tfa_6318" id="tfa_6318" class="">+506</option>
                                    <option value="tfa_6319" id="tfa_6319" class="">+507</option>
                                    <option value="tfa_6320" id="tfa_6320" class="">+508</option>
                                    <option value="tfa_6321" id="tfa_6321" class="">+509</option>
                                    <option value="tfa_6322" id="tfa_6322" class="">+51</option>
                                    <option value="tfa_6406" id="tfa_6406" class="">+52</option>
                                    <option value="tfa_6323" id="tfa_6323" class="">+53</option>
                                    <option value="tfa_6324" id="tfa_6324" class="">+55</option>
                                    <option value="tfa_6325" id="tfa_6325" class="">+56</option>
                                    <option value="tfa_6326" id="tfa_6326" class="">+57</option>
                                    <option value="tfa_6327" id="tfa_6327" class="">+58</option>
                                    <option value="tfa_6328" id="tfa_6328" class="">+590</option>
                                    <option value="tfa_6329" id="tfa_6329" class="">+591</option>
                                    <option value="tfa_6330" id="tfa_6330" class="">+592</option>
                                    <option value="tfa_6331" id="tfa_6331" class="">+593</option>
                                    <option value="tfa_6332" id="tfa_6332" class="">+595</option>
                                    <option value="tfa_6333" id="tfa_6333" class="">+597</option>
                                    <option value="tfa_6334" id="tfa_6334" class="">+598</option>
                                    <option value="tfa_6335" id="tfa_6335" class="">+599</option>
                                    <option value="tfa_6336" id="tfa_6336" class="">+60</option>
                                    <option value="tfa_6337" id="tfa_6337" class="">+61</option>
                                    <option value="tfa_6338" id="tfa_6338" class="">+62</option>
                                    <option value="tfa_6339" id="tfa_6339" class="">+63</option>
                                    <option value="tfa_6340" id="tfa_6340" class="">+64</option>
                                    <option value="tfa_6341" id="tfa_6341" class="">+65</option>
                                    <option value="tfa_6342" id="tfa_6342" class="">+66</option>
                                    <option value="tfa_6343" id="tfa_6343" class="">+670</option>
                                    <option value="tfa_6344" id="tfa_6344" class="">+672</option>
                                    <option value="tfa_6345" id="tfa_6345" class="">+673</option>
                                    <option value="tfa_6346" id="tfa_6346" class="">+674</option>
                                    <option value="tfa_6347" id="tfa_6347" class="">+675</option>
                                    <option value="tfa_6348" id="tfa_6348" class="">+676</option>
                                    <option value="tfa_6349" id="tfa_6349" class="">+677</option>
                                    <option value="tfa_6350" id="tfa_6350" class="">+678</option>
                                    <option value="tfa_6351" id="tfa_6351" class="">+679</option>
                                    <option value="tfa_6352" id="tfa_6352" class="">+680</option>
                                    <option value="tfa_6353" id="tfa_6353" class="">+681</option>
                                    <option value="tfa_6354" id="tfa_6354" class="">+682</option>
                                    <option value="tfa_6355" id="tfa_6355" class="">+683</option>
                                    <option value="tfa_6356" id="tfa_6356" class="">+685</option>
                                    <option value="tfa_6357" id="tfa_6357" class="">+686</option>
                                    <option value="tfa_6358" id="tfa_6358" class="">+687</option>
                                    <option value="tfa_6359" id="tfa_6359" class="">+688</option>
                                    <option value="tfa_6360" id="tfa_6360" class="">+689</option>
                                    <option value="tfa_6361" id="tfa_6361" class="">+690</option>
                                    <option value="tfa_6362" id="tfa_6362" class="">+691</option>
                                    <option value="tfa_6363" id="tfa_6363" class="">+692</option>
                                    <option value="tfa_6364" id="tfa_6364" class="">+7</option>
                                    <option value="tfa_6365" id="tfa_6365" class="">+81</option>
                                    <option value="tfa_6366" id="tfa_6366" class="">+82</option>
                                    <option value="tfa_6367" id="tfa_6367" class="">+84</option>
                                    <option value="tfa_6368" id="tfa_6368" class="">+850</option>
                                    <option value="tfa_6369" id="tfa_6369" class="">+852</option>
                                    <option value="tfa_6370" id="tfa_6370" class="">+853</option>
                                    <option value="tfa_6371" id="tfa_6371" class="">+855</option>
                                    <option value="tfa_6372" id="tfa_6372" class="">+856</option>
                                    <option value="tfa_6373" id="tfa_6373" class="">+86</option>
                                    <option value="tfa_6374" id="tfa_6374" class="">+880</option>
                                    <option value="tfa_6375" id="tfa_6375" class="">+886</option>
                                    <option value="tfa_6376" id="tfa_6376" class="">+90</option>
                                    <option value="tfa_6377" id="tfa_6377" class="">+91</option>
                                    <option value="tfa_6378" id="tfa_6378" class="">+92</option>
                                    <option value="tfa_6379" id="tfa_6379" class="">+93</option>
                                    <option value="tfa_6380" id="tfa_6380" class="">+94</option>
                                    <option value="tfa_6381" id="tfa_6381" class="">+95</option>
                                    <option value="tfa_6382" id="tfa_6382" class="">+960</option>
                                    <option value="tfa_6383" id="tfa_6383" class="">+961</option>
                                    <option value="tfa_6384" id="tfa_6384" class="">+962</option>
                                    <option value="tfa_6385" id="tfa_6385" class="">+963</option>
                                    <option value="tfa_6386" id="tfa_6386" class="">+964</option>
                                    <option value="tfa_6387" id="tfa_6387" class="">+965</option>
                                    <option value="tfa_6388" id="tfa_6388" class="">+966</option>
                                    <option value="tfa_6389" id="tfa_6389" class="">+967</option>
                                    <option value="tfa_6390" id="tfa_6390" class="">+968</option>
                                    <option value="tfa_6391" id="tfa_6391" class="">+970</option>
                                    <option value="tfa_6392" id="tfa_6392" class="">+971</option>
                                    <option value="tfa_6393" id="tfa_6393" class="">+972</option>
                                    <option value="tfa_6394" id="tfa_6394" class="">+973</option>
                                    <option value="tfa_6395" id="tfa_6395" class="">+974</option>
                                    <option value="tfa_6396" id="tfa_6396" class="">+975</option>
                                    <option value="tfa_6397" id="tfa_6397" class="">+976</option>
                                    <option value="tfa_6398" id="tfa_6398" class="">+977</option>
                                    <option value="tfa_6399" id="tfa_6399" class="">+98</option>
                                    <option value="tfa_6400" id="tfa_6400" class="">+992</option>
                                    <option value="tfa_6401" id="tfa_6401" class="">+993</option>
                                    <option value="tfa_6402" id="tfa_6402" class="">+994</option>
                                    <option value="tfa_6403" id="tfa_6403" class="">+995</option>
                                    <option value="tfa_6404" id="tfa_6404" class="">+996</option>
                                    <option value="tfa_6405" id="tfa_6405" class="">+998</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_14-D">
                                    <label id="tfa_14-L" class="label preField reqMark" for="tfa_14">Mobile Phone Number</label><br><div class="inputWrapper"><input type="text" id="tfa_14" name="tfa_14" value="" maxlength="11" aria-required="true" title="Mobile Phone Number" class="validate-integer required"></div>
                                    </div>
                                    </fieldset>
                                    <div class="oneField field-container-D    " id="tfa_15-D">
                                    <label id="tfa_15-L" class="label preField " for="tfa_15">Home Phone Number</label><br><div class="inputWrapper">
                                    <input type="text" id="tfa_15" name="tfa_15" value="" placeholder="+XX-XXXX-XXXX" maxlength="14" aria-describedby="tfa_15-HH" title="Home Phone Number" class="validate-custom /^[0-9()+. \t-]+$/"><span class="field-hint-inactive" id="tfa_15-H"><span id="tfa_15-HH" class="hint">Include +Country Code and Area Code</span></span>
                                    </div>
                                    <script type="text/javascript">
                                                            if(typeof wFORMS != 'undefined') {
                                                                if(wFORMS.behaviors.validation) {
                                                                    wFORMS.behaviors.validation.rules['customtfa_15'] =  { selector: '*[id="tfa_15"]', check: 'validateCustom'};
                                                                    wFORMS.behaviors.validation.messages['customtfa_15'] = "Invalid Phone Number";
                                                                }
                                                            }</script>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_16-D">
                                    <label id="tfa_16-L" class="label preField reqMark" for="tfa_16">Address Line 1</label><br><div class="inputWrapper"><input type="text" id="tfa_16" name="tfa_16" value="" maxlength="30" aria-required="true" title="Address Line 1" class="validate-custom /^[a-zA-Z0-9\s]+$/ required"></div>
                                    <script type="text/javascript">
                                                            if(typeof wFORMS != 'undefined') {
                                                                if(wFORMS.behaviors.validation) {
                                                                    wFORMS.behaviors.validation.rules['customtfa_16'] =  { selector: '*[id="tfa_16"]', check: 'validateCustom'};
                                                                    wFORMS.behaviors.validation.messages['customtfa_16'] = "Remove punctuation (e.g. / , ' . !)";
                                                                }
                                                            }</script>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_17-D">
                                    <label id="tfa_17-L" class="label preField " for="tfa_17">Address Line 2</label><br><div class="inputWrapper"><input type="text" id="tfa_17" name="tfa_17" value="" maxlength="30" title="Address Line 2" class="validate-custom /^[a-zA-Z0-9\s]+$/"></div>
                                    <script type="text/javascript">
                                                            if(typeof wFORMS != 'undefined') {
                                                                if(wFORMS.behaviors.validation) {
                                                                    wFORMS.behaviors.validation.rules['customtfa_17'] =  { selector: '*[id="tfa_17"]', check: 'validateCustom'};
                                                                    wFORMS.behaviors.validation.messages['customtfa_17'] = "Remove punctuation (e.g. / , ' . !)";
                                                                }
                                                            }</script>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_18-D">
                                    <label id="tfa_18-L" class="label preField " for="tfa_18">City/Town</label><br><div class="inputWrapper"><input type="text" id="tfa_18" name="tfa_18" value="" maxlength="30" title="City/Town" class="validate-custom /^[a-zA-Z0-9\s]+$/"></div>
                                    <script type="text/javascript">
                                                            if(typeof wFORMS != 'undefined') {
                                                                if(wFORMS.behaviors.validation) {
                                                                    wFORMS.behaviors.validation.rules['customtfa_18'] =  { selector: '*[id="tfa_18"]', check: 'validateCustom'};
                                                                    wFORMS.behaviors.validation.messages['customtfa_18'] = "Remove punctuation (e.g. / , ' . !)";
                                                                }
                                                            }</script>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_19-D">
                                    <label id="tfa_19-L" class="label preField reqMark" for="tfa_19">State</label><br><div class="inputWrapper"><input type="text" id="tfa_19" name="tfa_19" value="" maxlength="30" aria-required="true" title="State" class="validate-custom /^[a-zA-Z0-9\s]+$/ required"></div>
                                    <script type="text/javascript">
                                                            if(typeof wFORMS != 'undefined') {
                                                                if(wFORMS.behaviors.validation) {
                                                                    wFORMS.behaviors.validation.rules['customtfa_19'] =  { selector: '*[id="tfa_19"]', check: 'validateCustom'};
                                                                    wFORMS.behaviors.validation.messages['customtfa_19'] = "Remove punctuation (e.g. / , ' . !)";
                                                                }
                                                            }</script>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_20-D">
                                    <label id="tfa_20-L" class="label preField " for="tfa_20">Post/Zip Code</label><br><div class="inputWrapper"><input type="text" id="tfa_20" name="tfa_20" value="" maxlength="10" title="Post/Zip Code" class="validate-custom /^[a-zA-Z0-9\s]+$/"></div>
                                    <script type="text/javascript">
                                                            if(typeof wFORMS != 'undefined') {
                                                                if(wFORMS.behaviors.validation) {
                                                                    wFORMS.behaviors.validation.rules['customtfa_20'] =  { selector: '*[id="tfa_20"]', check: 'validateCustom'};
                                                                    wFORMS.behaviors.validation.messages['customtfa_20'] = "Remove punctuation (e.g. / , ' . !)";
                                                                }
                                                            }</script>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_21-D">
                                    <label id="tfa_21-L" class="label preField reqMark" for="tfa_21">Country</label><br><div class="inputWrapper"><select id="tfa_21" name="tfa_21" title="Country" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_888" id="tfa_888" class="">Afghanistan</option>
                                    <option value="tfa_889" id="tfa_889" class="">Aland Islands</option>
                                    <option value="tfa_890" id="tfa_890" class="">Albania</option>
                                    <option value="tfa_891" id="tfa_891" class="">Algeria</option>
                                    <option value="tfa_892" id="tfa_892" class="">American Samoa</option>
                                    <option value="tfa_893" id="tfa_893" class="">Andorra</option>
                                    <option value="tfa_894" id="tfa_894" class="">Angola</option>
                                    <option value="tfa_895" id="tfa_895" class="">Anguilla</option>
                                    <option value="tfa_896" id="tfa_896" class="">Antigua and Barbuda</option>
                                    <option value="tfa_897" id="tfa_897" class="">Argentina</option>
                                    <option value="tfa_898" id="tfa_898" class="">Armenia</option>
                                    <option value="tfa_899" id="tfa_899" class="">Aruba</option>
                                    <option value="tfa_900" id="tfa_900" class="">Australia</option>
                                    <option value="tfa_901" id="tfa_901" class="">Austria</option>
                                    <option value="tfa_902" id="tfa_902" class="">Azerbaijan</option>
                                    <option value="tfa_903" id="tfa_903" class="">Bahamas</option>
                                    <option value="tfa_904" id="tfa_904" class="">Bahrain</option>
                                    <option value="tfa_905" id="tfa_905" class="">Bangladesh</option>
                                    <option value="tfa_906" id="tfa_906" class="">Barbados</option>
                                    <option value="tfa_907" id="tfa_907" class="">Belarus</option>
                                    <option value="tfa_908" id="tfa_908" class="">Belgium</option>
                                    <option value="tfa_909" id="tfa_909" class="">Belize</option>
                                    <option value="tfa_910" id="tfa_910" class="">Benin</option>
                                    <option value="tfa_911" id="tfa_911" class="">Bermuda</option>
                                    <option value="tfa_912" id="tfa_912" class="">Bhutan</option>
                                    <option value="tfa_913" id="tfa_913" class="">Bolivia</option>
                                    <option value="tfa_914" id="tfa_914" class="">Bosnia &amp; Herzegovina</option>
                                    <option value="tfa_915" id="tfa_915" class="">Botswana</option>
                                    <option value="tfa_916" id="tfa_916" class="">Brazil</option>
                                    <option value="tfa_917" id="tfa_917" class="">British Virgin Isle</option>
                                    <option value="tfa_918" id="tfa_918" class="">Brunei</option>
                                    <option value="tfa_919" id="tfa_919" class="">Bulgaria</option>
                                    <option value="tfa_920" id="tfa_920" class="">Burkina Faso</option>
                                    <option value="tfa_921" id="tfa_921" class="">Burundi</option>
                                    <option value="tfa_922" id="tfa_922" class="">Cambodia</option>
                                    <option value="tfa_923" id="tfa_923" class="">Cameroon</option>
                                    <option value="tfa_924" id="tfa_924" class="">Canada</option>
                                    <option value="tfa_925" id="tfa_925" class="">Cape Verde</option>
                                    <option value="tfa_926" id="tfa_926" class="">Cayman Islands</option>
                                    <option value="tfa_927" id="tfa_927" class="">Central African Rep</option>
                                    <option value="tfa_928" id="tfa_928" class="">Chad</option>
                                    <option value="tfa_929" id="tfa_929" class="">Chile</option>
                                    <option value="tfa_930" id="tfa_930" class="">China</option>
                                    <option value="tfa_931" id="tfa_931" class="">Colombia</option>
                                    <option value="tfa_932" id="tfa_932" class="">Comoros</option>
                                    <option value="tfa_933" id="tfa_933" class="">Congo</option>
                                    <option value="tfa_934" id="tfa_934" class="">Cook Islands</option>
                                    <option value="tfa_935" id="tfa_935" class="">Costa Rica</option>
                                    <option value="tfa_936" id="tfa_936" class="">Croatia</option>
                                    <option value="tfa_937" id="tfa_937" class="">Cuba</option>
                                    <option value="tfa_938" id="tfa_938" class="">Cyprus</option>
                                    <option value="tfa_939" id="tfa_939" class="">Czech Republic</option>
                                    <option value="tfa_940" id="tfa_940" class="">Dem Rep of the Congo</option>
                                    <option value="tfa_941" id="tfa_941" class="">Denmark</option>
                                    <option value="tfa_942" id="tfa_942" class="">Djibouti</option>
                                    <option value="tfa_943" id="tfa_943" class="">Dominica</option>
                                    <option value="tfa_944" id="tfa_944" class="">Dominican Republic</option>
                                    <option value="tfa_945" id="tfa_945" class="">East Timor</option>
                                    <option value="tfa_946" id="tfa_946" class="">Ecuador</option>
                                    <option value="tfa_947" id="tfa_947" class="">Egypt</option>
                                    <option value="tfa_948" id="tfa_948" class="">El Salvador</option>
                                    <option value="tfa_949" id="tfa_949" class="">Equatorial Guinea</option>
                                    <option value="tfa_950" id="tfa_950" class="">Eritrea</option>
                                    <option value="tfa_951" id="tfa_951" class="">Estonia</option>
                                    <option value="tfa_952" id="tfa_952" class="">Ethiopia</option>
                                    <option value="tfa_953" id="tfa_953" class="">Faeroe Islands</option>
                                    <option value="tfa_954" id="tfa_954" class="">Falkland Islands</option>
                                    <option value="tfa_955" id="tfa_955" class="">Fiji</option>
                                    <option value="tfa_956" id="tfa_956" class="">Finland</option>
                                    <option value="tfa_957" id="tfa_957" class="">France</option>
                                    <option value="tfa_958" id="tfa_958" class="">French Guiana</option>
                                    <option value="tfa_959" id="tfa_959" class="">French Polynesia</option>
                                    <option value="tfa_960" id="tfa_960" class="">Gabon</option>
                                    <option value="tfa_961" id="tfa_961" class="">Gambia</option>
                                    <option value="tfa_962" id="tfa_962" class="">Georgia</option>
                                    <option value="tfa_963" id="tfa_963" class="">Germany</option>
                                    <option value="tfa_964" id="tfa_964" class="">Ghana</option>
                                    <option value="tfa_965" id="tfa_965" class="">Gibraltar</option>
                                    <option value="tfa_966" id="tfa_966" class="">Greece</option>
                                    <option value="tfa_967" id="tfa_967" class="">Greenland</option>
                                    <option value="tfa_968" id="tfa_968" class="">Grenada</option>
                                    <option value="tfa_969" id="tfa_969" class="">Guadeloupe</option>
                                    <option value="tfa_970" id="tfa_970" class="">Guam</option>
                                    <option value="tfa_971" id="tfa_971" class="">Guatemala</option>
                                    <option value="tfa_972" id="tfa_972" class="">Guernsey</option>
                                    <option value="tfa_973" id="tfa_973" class="">Guinea</option>
                                    <option value="tfa_974" id="tfa_974" class="">Guinea-Bissau</option>
                                    <option value="tfa_975" id="tfa_975" class="">Guyana</option>
                                    <option value="tfa_976" id="tfa_976" class="">Haiti</option>
                                    <option value="tfa_977" id="tfa_977" class="">Holy See</option>
                                    <option value="tfa_978" id="tfa_978" class="">Honduras</option>
                                    <option value="tfa_979" id="tfa_979" class="">Hong Kong</option>
                                    <option value="tfa_980" id="tfa_980" class="">Hungary</option>
                                    <option value="tfa_981" id="tfa_981" class="">Iceland</option>
                                    <option value="tfa_982" id="tfa_982" class="">India</option>
                                    <option value="tfa_983" id="tfa_983" class="">Indonesia</option>
                                    <option value="tfa_984" id="tfa_984" class="">Iran</option>
                                    <option value="tfa_985" id="tfa_985" class="">Iraq</option>
                                    <option value="tfa_986" id="tfa_986" class="">Ireland</option>
                                    <option value="tfa_987" id="tfa_987" class="">Isle of Man</option>
                                    <option value="tfa_988" id="tfa_988" class="">Israel</option>
                                    <option value="tfa_989" id="tfa_989" class="">Italy</option>
                                    <option value="tfa_990" id="tfa_990" class="">Ivory Coast</option>
                                    <option value="tfa_991" id="tfa_991" class="">Jamaica</option>
                                    <option value="tfa_992" id="tfa_992" class="">Japan</option>
                                    <option value="tfa_993" id="tfa_993" class="">Jersey</option>
                                    <option value="tfa_994" id="tfa_994" class="">Jordan</option>
                                    <option value="tfa_995" id="tfa_995" class="">Kazakhstan</option>
                                    <option value="tfa_996" id="tfa_996" class="">Kenya</option>
                                    <option value="tfa_997" id="tfa_997" class="">Kiribati</option>
                                    <option value="tfa_998" id="tfa_998" class="">Kuwait</option>
                                    <option value="tfa_999" id="tfa_999" class="">Kyrgyzstan</option>
                                    <option value="tfa_1000" id="tfa_1000" class="">Laos</option>
                                    <option value="tfa_1001" id="tfa_1001" class="">Latvia</option>
                                    <option value="tfa_1002" id="tfa_1002" class="">Lebanon</option>
                                    <option value="tfa_1003" id="tfa_1003" class="">Lesotho</option>
                                    <option value="tfa_1004" id="tfa_1004" class="">Liberia</option>
                                    <option value="tfa_1005" id="tfa_1005" class="">Libya</option>
                                    <option value="tfa_1006" id="tfa_1006" class="">Liechtenstein</option>
                                    <option value="tfa_1007" id="tfa_1007" class="">Lithuania</option>
                                    <option value="tfa_1008" id="tfa_1008" class="">Luxembourg</option>
                                    <option value="tfa_1009" id="tfa_1009" class="">Macao</option>
                                    <option value="tfa_1010" id="tfa_1010" class="">Macedonia</option>
                                    <option value="tfa_1011" id="tfa_1011" class="">Madagascar</option>
                                    <option value="tfa_1012" id="tfa_1012" class="">Malawi</option>
                                    <option value="tfa_1013" id="tfa_1013" class="">Malaysia</option>
                                    <option value="tfa_1014" id="tfa_1014" class="">Maldives</option>
                                    <option value="tfa_1015" id="tfa_1015" class="">Mali</option>
                                    <option value="tfa_1016" id="tfa_1016" class="">Malta</option>
                                    <option value="tfa_1017" id="tfa_1017" class="">Marshall Islands</option>
                                    <option value="tfa_1018" id="tfa_1018" class="">Martinique</option>
                                    <option value="tfa_1019" id="tfa_1019" class="">Mauritania</option>
                                    <option value="tfa_1020" id="tfa_1020" class="">Mauritius</option>
                                    <option value="tfa_1021" id="tfa_1021" class="">Mayotte</option>
                                    <option value="tfa_1022" id="tfa_1022" class="">Mexico</option>
                                    <option value="tfa_1023" id="tfa_1023" class="">Micronesia</option>
                                    <option value="tfa_1024" id="tfa_1024" class="">Monaco</option>
                                    <option value="tfa_1025" id="tfa_1025" class="">Mongolia</option>
                                    <option value="tfa_1026" id="tfa_1026" class="">Montenegro</option>
                                    <option value="tfa_1027" id="tfa_1027" class="">Montserrat</option>
                                    <option value="tfa_1028" id="tfa_1028" class="">Morocco</option>
                                    <option value="tfa_1029" id="tfa_1029" class="">Mozambique</option>
                                    <option value="tfa_1030" id="tfa_1030" class="">Myanmar</option>
                                    <option value="tfa_1031" id="tfa_1031" class="">Namibia</option>
                                    <option value="tfa_1032" id="tfa_1032" class="">Nauru</option>
                                    <option value="tfa_1033" id="tfa_1033" class="">Nepal</option>
                                    <option value="tfa_1034" id="tfa_1034" class="">Netherlands</option>
                                    <option value="tfa_1035" id="tfa_1035" class="">Netherlands Antilles</option>
                                    <option value="tfa_1036" id="tfa_1036" class="">New Caledonia</option>
                                    <option value="tfa_1037" id="tfa_1037" class="">New Zealand</option>
                                    <option value="tfa_1038" id="tfa_1038" class="">Nicaragua</option>
                                    <option value="tfa_1039" id="tfa_1039" class="">Niger</option>
                                    <option value="tfa_1040" id="tfa_1040" class="">Nigeria</option>
                                    <option value="tfa_1041" id="tfa_1041" class="">Niue</option>
                                    <option value="tfa_1042" id="tfa_1042" class="">Norfolk Island</option>
                                    <option value="tfa_1043" id="tfa_1043" class="">North Korea</option>
                                    <option value="tfa_1044" id="tfa_1044" class="">Norway</option>
                                    <option value="tfa_1045" id="tfa_1045" class="">Nth Mariana Islands</option>
                                    <option value="tfa_1046" id="tfa_1046" class="">Oman</option>
                                    <option value="tfa_1047" id="tfa_1047" class="">Pakistan</option>
                                    <option value="tfa_1048" id="tfa_1048" class="">Palau</option>
                                    <option value="tfa_1049" id="tfa_1049" class="">Palestine</option>
                                    <option value="tfa_1050" id="tfa_1050" class="">Panama</option>
                                    <option value="tfa_1051" id="tfa_1051" class="">Papua New Guinea</option>
                                    <option value="tfa_1052" id="tfa_1052" class="">Paraguay</option>
                                    <option value="tfa_1053" id="tfa_1053" class="">Peru</option>
                                    <option value="tfa_1054" id="tfa_1054" class="">Philippines</option>
                                    <option value="tfa_1055" id="tfa_1055" class="">Pitcairn</option>
                                    <option value="tfa_1056" id="tfa_1056" class="">Poland</option>
                                    <option value="tfa_1057" id="tfa_1057" class="">Portugal</option>
                                    <option value="tfa_1058" id="tfa_1058" class="">Puerto Rico</option>
                                    <option value="tfa_1059" id="tfa_1059" class="">Qatar</option>
                                    <option value="tfa_1060" id="tfa_1060" class="">Republic of Moldova</option>
                                    <option value="tfa_1061" id="tfa_1061" class="">Reunion</option>
                                    <option value="tfa_1062" id="tfa_1062" class="">Romania</option>
                                    <option value="tfa_1063" id="tfa_1063" class="">Russian Federation</option>
                                    <option value="tfa_1064" id="tfa_1064" class="">Rwanda</option>
                                    <option value="tfa_1065" id="tfa_1065" class="">Saint Helena</option>
                                    <option value="tfa_1066" id="tfa_1066" class="">Saint Kitts &amp; Nevis</option>
                                    <option value="tfa_1067" id="tfa_1067" class="">Saint Lucia</option>
                                    <option value="tfa_1068" id="tfa_1068" class="">Saint-Barthelemy</option>
                                    <option value="tfa_1069" id="tfa_1069" class="">Saint-Martin(French)</option>
                                    <option value="tfa_1070" id="tfa_1070" class="">Samoa</option>
                                    <option value="tfa_1071" id="tfa_1071" class="">San Marino</option>
                                    <option value="tfa_1072" id="tfa_1072" class="">Sao Tome &amp; Principe</option>
                                    <option value="tfa_1073" id="tfa_1073" class="">Saudi Arabia</option>
                                    <option value="tfa_1074" id="tfa_1074" class="">Senegal</option>
                                    <option value="tfa_1075" id="tfa_1075" class="">Serbia</option>
                                    <option value="tfa_1076" id="tfa_1076" class="">Seychelles</option>
                                    <option value="tfa_1077" id="tfa_1077" class="">Sierra Leone</option>
                                    <option value="tfa_1078" id="tfa_1078" class="">Singapore</option>
                                    <option value="tfa_1079" id="tfa_1079" class="">Slovakia</option>
                                    <option value="tfa_1080" id="tfa_1080" class="">Slovenia</option>
                                    <option value="tfa_1081" id="tfa_1081" class="">Solomon Islands</option>
                                    <option value="tfa_1082" id="tfa_1082" class="">Somalia</option>
                                    <option value="tfa_1083" id="tfa_1083" class="">South Africa</option>
                                    <option value="tfa_1084" id="tfa_1084" class="">South Korea</option>
                                    <option value="tfa_1085" id="tfa_1085" class="">South Sudan</option>
                                    <option value="tfa_1086" id="tfa_1086" class="">Spain</option>
                                    <option value="tfa_1087" id="tfa_1087" class="">Sri Lanka</option>
                                    <option value="tfa_1088" id="tfa_1088" class="">St Pierre &amp; Miquelon</option>
                                    <option value="tfa_1089" id="tfa_1089" class="">St Vinc &amp; Grenadine</option>
                                    <option value="tfa_1090" id="tfa_1090" class="">Sudan</option>
                                    <option value="tfa_1091" id="tfa_1091" class="">Suriname</option>
                                    <option value="tfa_1092" id="tfa_1092" class="">Svalbard &amp; Jan Mayen</option>
                                    <option value="tfa_1093" id="tfa_1093" class="">Swaziland</option>
                                    <option value="tfa_1094" id="tfa_1094" class="">Sweden</option>
                                    <option value="tfa_1095" id="tfa_1095" class="">Switzerland</option>
                                    <option value="tfa_1096" id="tfa_1096" class="">Syria</option>
                                    <option value="tfa_1097" id="tfa_1097" class="">Taiwan</option>
                                    <option value="tfa_1098" id="tfa_1098" class="">Tajikistan</option>
                                    <option value="tfa_1099" id="tfa_1099" class="">Tanzania</option>
                                    <option value="tfa_1100" id="tfa_1100" class="">Thailand</option>
                                    <option value="tfa_1101" id="tfa_1101" class="">Togo</option>
                                    <option value="tfa_1102" id="tfa_1102" class="">Tokelau</option>
                                    <option value="tfa_1103" id="tfa_1103" class="">Tonga</option>
                                    <option value="tfa_1104" id="tfa_1104" class="">Trinidad and Tobago</option>
                                    <option value="tfa_1105" id="tfa_1105" class="">Tunisia</option>
                                    <option value="tfa_1106" id="tfa_1106" class="">Turkey</option>
                                    <option value="tfa_1107" id="tfa_1107" class="">Turkmenistan</option>
                                    <option value="tfa_1108" id="tfa_1108" class="">Turks &amp; Caicos Isle</option>
                                    <option value="tfa_1109" id="tfa_1109" class="">Tuvalu</option>
                                    <option value="tfa_1110" id="tfa_1110" class="">Uganda</option>
                                    <option value="tfa_1111" id="tfa_1111" class="">Ukraine</option>
                                    <option value="tfa_1112" id="tfa_1112" class="">United Arab Emirates</option>
                                    <option value="tfa_1113" id="tfa_1113" class="">United Kingdom</option>
                                    <option value="tfa_1114" id="tfa_1114" class="">Uruguay</option>
                                    <option value="tfa_1115" id="tfa_1115" class="">US Virgin Islands</option>
                                    <option value="tfa_1116" id="tfa_1116" class="">USA</option>
                                    <option value="tfa_1117" id="tfa_1117" class="">Uzbekistan</option>
                                    <option value="tfa_1118" id="tfa_1118" class="">Vanuatu</option>
                                    <option value="tfa_1119" id="tfa_1119" class="">Venezuela</option>
                                    <option value="tfa_1120" id="tfa_1120" class="">Viet Nam</option>
                                    <option value="tfa_1121" id="tfa_1121" class="">Wallis &amp; Futuna Isle</option>
                                    <option value="tfa_1122" id="tfa_1122" class="">Western Sahara</option>
                                    <option value="tfa_1123" id="tfa_1123" class="">Yemen</option>
                                    <option value="tfa_1125" id="tfa_1125" class="">Zambia</option>
                                    <option value="tfa_1126" id="tfa_1126" class="">Zimbabwe</option></select></div>
                                    </div>
                                    </fieldset>
                                    </div></div>
                                    <div class="wfPage" id="wfPgIndex-4"><div class="section pageSection" id="tfa_5332">
                                    <h4 id="tfa_5332-T">Education Background</h4>
                                    <fieldset id="tfa_5333" class="section">
                                    <legend id="tfa_5333-L"><b>Secondary Education</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_22-D">
                                    <label id="tfa_22-L" class="label preField reqMark" for="tfa_22">Name of Qualification</label><br><div class="inputWrapper"><input type="text" id="tfa_22" name="tfa_22" value="" aria-required="true" title="Name of Qualification" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_23-D">
                                    <label id="tfa_23-L" class="label preField reqMark" for="tfa_23">School Attended</label><br><div class="inputWrapper"><input type="text" id="tfa_23" name="tfa_23" value="" aria-required="true" title="School Attended" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_24-D">
                                    <label id="tfa_24-L" class="label preField reqMark" for="tfa_24">Country</label><br><div class="inputWrapper"><select id="tfa_24" name="tfa_24" title="Country" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_1130" id="tfa_1130" class="">Afghanistan</option>
                                    <option value="tfa_1131" id="tfa_1131" class="">Aland Islands</option>
                                    <option value="tfa_1132" id="tfa_1132" class="">Albania</option>
                                    <option value="tfa_1133" id="tfa_1133" class="">Algeria</option>
                                    <option value="tfa_1134" id="tfa_1134" class="">American Samoa</option>
                                    <option value="tfa_1135" id="tfa_1135" class="">Andorra</option>
                                    <option value="tfa_1136" id="tfa_1136" class="">Angola</option>
                                    <option value="tfa_1137" id="tfa_1137" class="">Anguilla</option>
                                    <option value="tfa_1138" id="tfa_1138" class="">Antigua and Barbuda</option>
                                    <option value="tfa_1139" id="tfa_1139" class="">Argentina</option>
                                    <option value="tfa_1140" id="tfa_1140" class="">Armenia</option>
                                    <option value="tfa_1141" id="tfa_1141" class="">Aruba</option>
                                    <option value="tfa_1142" id="tfa_1142" class="">Australia</option>
                                    <option value="tfa_1143" id="tfa_1143" class="">Austria</option>
                                    <option value="tfa_1144" id="tfa_1144" class="">Azerbaijan</option>
                                    <option value="tfa_1145" id="tfa_1145" class="">Bahamas</option>
                                    <option value="tfa_1146" id="tfa_1146" class="">Bahrain</option>
                                    <option value="tfa_1147" id="tfa_1147" class="">Bangladesh</option>
                                    <option value="tfa_1148" id="tfa_1148" class="">Barbados</option>
                                    <option value="tfa_1149" id="tfa_1149" class="">Belarus</option>
                                    <option value="tfa_1150" id="tfa_1150" class="">Belgium</option>
                                    <option value="tfa_1151" id="tfa_1151" class="">Belize</option>
                                    <option value="tfa_1152" id="tfa_1152" class="">Benin</option>
                                    <option value="tfa_1153" id="tfa_1153" class="">Bermuda</option>
                                    <option value="tfa_1154" id="tfa_1154" class="">Bhutan</option>
                                    <option value="tfa_1155" id="tfa_1155" class="">Bolivia</option>
                                    <option value="tfa_1156" id="tfa_1156" class="">Bosnia &amp; Herzegovina</option>
                                    <option value="tfa_1157" id="tfa_1157" class="">Botswana</option>
                                    <option value="tfa_1158" id="tfa_1158" class="">Brazil</option>
                                    <option value="tfa_1159" id="tfa_1159" class="">British Virgin Isle</option>
                                    <option value="tfa_1160" id="tfa_1160" class="">Brunei</option>
                                    <option value="tfa_1161" id="tfa_1161" class="">Bulgaria</option>
                                    <option value="tfa_1162" id="tfa_1162" class="">Burkina Faso</option>
                                    <option value="tfa_1163" id="tfa_1163" class="">Burundi</option>
                                    <option value="tfa_1164" id="tfa_1164" class="">Cambodia</option>
                                    <option value="tfa_1165" id="tfa_1165" class="">Cameroon</option>
                                    <option value="tfa_1166" id="tfa_1166" class="">Canada</option>
                                    <option value="tfa_1167" id="tfa_1167" class="">Cape Verde</option>
                                    <option value="tfa_1168" id="tfa_1168" class="">Cayman Islands</option>
                                    <option value="tfa_1169" id="tfa_1169" class="">Central African Rep</option>
                                    <option value="tfa_1170" id="tfa_1170" class="">Chad</option>
                                    <option value="tfa_1171" id="tfa_1171" class="">Chile</option>
                                    <option value="tfa_1172" id="tfa_1172" class="">China</option>
                                    <option value="tfa_1173" id="tfa_1173" class="">Colombia</option>
                                    <option value="tfa_1174" id="tfa_1174" class="">Comoros</option>
                                    <option value="tfa_1175" id="tfa_1175" class="">Congo</option>
                                    <option value="tfa_1176" id="tfa_1176" class="">Cook Islands</option>
                                    <option value="tfa_1177" id="tfa_1177" class="">Costa Rica</option>
                                    <option value="tfa_1178" id="tfa_1178" class="">Croatia</option>
                                    <option value="tfa_1179" id="tfa_1179" class="">Cuba</option>
                                    <option value="tfa_1180" id="tfa_1180" class="">Cyprus</option>
                                    <option value="tfa_1181" id="tfa_1181" class="">Czech Republic</option>
                                    <option value="tfa_1182" id="tfa_1182" class="">Dem Rep of the Congo</option>
                                    <option value="tfa_1183" id="tfa_1183" class="">Denmark</option>
                                    <option value="tfa_1184" id="tfa_1184" class="">Djibouti</option>
                                    <option value="tfa_1185" id="tfa_1185" class="">Dominica</option>
                                    <option value="tfa_1186" id="tfa_1186" class="">Dominican Republic</option>
                                    <option value="tfa_1187" id="tfa_1187" class="">East Timor</option>
                                    <option value="tfa_1188" id="tfa_1188" class="">Ecuador</option>
                                    <option value="tfa_1189" id="tfa_1189" class="">Egypt</option>
                                    <option value="tfa_1190" id="tfa_1190" class="">El Salvador</option>
                                    <option value="tfa_1191" id="tfa_1191" class="">Equatorial Guinea</option>
                                    <option value="tfa_1192" id="tfa_1192" class="">Eritrea</option>
                                    <option value="tfa_1193" id="tfa_1193" class="">Estonia</option>
                                    <option value="tfa_1194" id="tfa_1194" class="">Ethiopia</option>
                                    <option value="tfa_1195" id="tfa_1195" class="">Faeroe Islands</option>
                                    <option value="tfa_1196" id="tfa_1196" class="">Falkland Islands</option>
                                    <option value="tfa_1197" id="tfa_1197" class="">Fiji</option>
                                    <option value="tfa_1198" id="tfa_1198" class="">Finland</option>
                                    <option value="tfa_1199" id="tfa_1199" class="">France</option>
                                    <option value="tfa_1200" id="tfa_1200" class="">French Guiana</option>
                                    <option value="tfa_1201" id="tfa_1201" class="">French Polynesia</option>
                                    <option value="tfa_1202" id="tfa_1202" class="">Gabon</option>
                                    <option value="tfa_1203" id="tfa_1203" class="">Gambia</option>
                                    <option value="tfa_1204" id="tfa_1204" class="">Georgia</option>
                                    <option value="tfa_1205" id="tfa_1205" class="">Germany</option>
                                    <option value="tfa_1206" id="tfa_1206" class="">Ghana</option>
                                    <option value="tfa_1207" id="tfa_1207" class="">Gibraltar</option>
                                    <option value="tfa_1208" id="tfa_1208" class="">Greece</option>
                                    <option value="tfa_1209" id="tfa_1209" class="">Greenland</option>
                                    <option value="tfa_1210" id="tfa_1210" class="">Grenada</option>
                                    <option value="tfa_1211" id="tfa_1211" class="">Guadeloupe</option>
                                    <option value="tfa_1212" id="tfa_1212" class="">Guam</option>
                                    <option value="tfa_1213" id="tfa_1213" class="">Guatemala</option>
                                    <option value="tfa_1214" id="tfa_1214" class="">Guernsey</option>
                                    <option value="tfa_1215" id="tfa_1215" class="">Guinea</option>
                                    <option value="tfa_1216" id="tfa_1216" class="">Guinea-Bissau</option>
                                    <option value="tfa_1217" id="tfa_1217" class="">Guyana</option>
                                    <option value="tfa_1218" id="tfa_1218" class="">Haiti</option>
                                    <option value="tfa_1219" id="tfa_1219" class="">Holy See</option>
                                    <option value="tfa_1220" id="tfa_1220" class="">Honduras</option>
                                    <option value="tfa_1221" id="tfa_1221" class="">Hong Kong</option>
                                    <option value="tfa_1222" id="tfa_1222" class="">Hungary</option>
                                    <option value="tfa_1223" id="tfa_1223" class="">Iceland</option>
                                    <option value="tfa_1224" id="tfa_1224" class="">India</option>
                                    <option value="tfa_1225" id="tfa_1225" class="">Indonesia</option>
                                    <option value="tfa_1226" id="tfa_1226" class="">Iran</option>
                                    <option value="tfa_1227" id="tfa_1227" class="">Iraq</option>
                                    <option value="tfa_1228" id="tfa_1228" class="">Ireland</option>
                                    <option value="tfa_1229" id="tfa_1229" class="">Isle of Man</option>
                                    <option value="tfa_1230" id="tfa_1230" class="">Israel</option>
                                    <option value="tfa_1231" id="tfa_1231" class="">Italy</option>
                                    <option value="tfa_1232" id="tfa_1232" class="">Ivory Coast</option>
                                    <option value="tfa_1233" id="tfa_1233" class="">Jamaica</option>
                                    <option value="tfa_1234" id="tfa_1234" class="">Japan</option>
                                    <option value="tfa_1235" id="tfa_1235" class="">Jersey</option>
                                    <option value="tfa_1236" id="tfa_1236" class="">Jordan</option>
                                    <option value="tfa_1237" id="tfa_1237" class="">Kazakhstan</option>
                                    <option value="tfa_1238" id="tfa_1238" class="">Kenya</option>
                                    <option value="tfa_1239" id="tfa_1239" class="">Kiribati</option>
                                    <option value="tfa_1240" id="tfa_1240" class="">Kuwait</option>
                                    <option value="tfa_1241" id="tfa_1241" class="">Kyrgyzstan</option>
                                    <option value="tfa_1242" id="tfa_1242" class="">Laos</option>
                                    <option value="tfa_1243" id="tfa_1243" class="">Latvia</option>
                                    <option value="tfa_1244" id="tfa_1244" class="">Lebanon</option>
                                    <option value="tfa_1245" id="tfa_1245" class="">Lesotho</option>
                                    <option value="tfa_1246" id="tfa_1246" class="">Liberia</option>
                                    <option value="tfa_1247" id="tfa_1247" class="">Libya</option>
                                    <option value="tfa_1248" id="tfa_1248" class="">Liechtenstein</option>
                                    <option value="tfa_1249" id="tfa_1249" class="">Lithuania</option>
                                    <option value="tfa_1250" id="tfa_1250" class="">Luxembourg</option>
                                    <option value="tfa_1251" id="tfa_1251" class="">Macao</option>
                                    <option value="tfa_1252" id="tfa_1252" class="">Macedonia</option>
                                    <option value="tfa_1253" id="tfa_1253" class="">Madagascar</option>
                                    <option value="tfa_1254" id="tfa_1254" class="">Malawi</option>
                                    <option value="tfa_1255" id="tfa_1255" class="">Malaysia</option>
                                    <option value="tfa_1256" id="tfa_1256" class="">Maldives</option>
                                    <option value="tfa_1257" id="tfa_1257" class="">Mali</option>
                                    <option value="tfa_1258" id="tfa_1258" class="">Malta</option>
                                    <option value="tfa_1259" id="tfa_1259" class="">Marshall Islands</option>
                                    <option value="tfa_1260" id="tfa_1260" class="">Martinique</option>
                                    <option value="tfa_1261" id="tfa_1261" class="">Mauritania</option>
                                    <option value="tfa_1262" id="tfa_1262" class="">Mauritius</option>
                                    <option value="tfa_1263" id="tfa_1263" class="">Mayotte</option>
                                    <option value="tfa_1264" id="tfa_1264" class="">Mexico</option>
                                    <option value="tfa_1265" id="tfa_1265" class="">Micronesia</option>
                                    <option value="tfa_1266" id="tfa_1266" class="">Monaco</option>
                                    <option value="tfa_1267" id="tfa_1267" class="">Mongolia</option>
                                    <option value="tfa_1268" id="tfa_1268" class="">Montenegro</option>
                                    <option value="tfa_1269" id="tfa_1269" class="">Montserrat</option>
                                    <option value="tfa_1270" id="tfa_1270" class="">Morocco</option>
                                    <option value="tfa_1271" id="tfa_1271" class="">Mozambique</option>
                                    <option value="tfa_1272" id="tfa_1272" class="">Myanmar</option>
                                    <option value="tfa_1273" id="tfa_1273" class="">Namibia</option>
                                    <option value="tfa_1274" id="tfa_1274" class="">Nauru</option>
                                    <option value="tfa_1275" id="tfa_1275" class="">Nepal</option>
                                    <option value="tfa_1276" id="tfa_1276" class="">Netherlands</option>
                                    <option value="tfa_1277" id="tfa_1277" class="">Netherlands Antilles</option>
                                    <option value="tfa_1278" id="tfa_1278" class="">New Caledonia</option>
                                    <option value="tfa_1279" id="tfa_1279" class="">New Zealand</option>
                                    <option value="tfa_1280" id="tfa_1280" class="">Nicaragua</option>
                                    <option value="tfa_1281" id="tfa_1281" class="">Niger</option>
                                    <option value="tfa_1282" id="tfa_1282" class="">Nigeria</option>
                                    <option value="tfa_1283" id="tfa_1283" class="">Niue</option>
                                    <option value="tfa_1284" id="tfa_1284" class="">Norfolk Island</option>
                                    <option value="tfa_1285" id="tfa_1285" class="">North Korea</option>
                                    <option value="tfa_1286" id="tfa_1286" class="">Norway</option>
                                    <option value="tfa_1287" id="tfa_1287" class="">Nth Mariana Islands</option>
                                    <option value="tfa_1288" id="tfa_1288" class="">Oman</option>
                                    <option value="tfa_1289" id="tfa_1289" class="">Pakistan</option>
                                    <option value="tfa_1290" id="tfa_1290" class="">Palau</option>
                                    <option value="tfa_1291" id="tfa_1291" class="">Palestine</option>
                                    <option value="tfa_1292" id="tfa_1292" class="">Panama</option>
                                    <option value="tfa_1293" id="tfa_1293" class="">Papua New Guinea</option>
                                    <option value="tfa_1294" id="tfa_1294" class="">Paraguay</option>
                                    <option value="tfa_1295" id="tfa_1295" class="">Peru</option>
                                    <option value="tfa_1296" id="tfa_1296" class="">Philippines</option>
                                    <option value="tfa_1297" id="tfa_1297" class="">Pitcairn</option>
                                    <option value="tfa_1298" id="tfa_1298" class="">Poland</option>
                                    <option value="tfa_1299" id="tfa_1299" class="">Portugal</option>
                                    <option value="tfa_1300" id="tfa_1300" class="">Puerto Rico</option>
                                    <option value="tfa_1301" id="tfa_1301" class="">Qatar</option>
                                    <option value="tfa_1302" id="tfa_1302" class="">Republic of Moldova</option>
                                    <option value="tfa_1303" id="tfa_1303" class="">Reunion</option>
                                    <option value="tfa_1304" id="tfa_1304" class="">Romania</option>
                                    <option value="tfa_1305" id="tfa_1305" class="">Russian Federation</option>
                                    <option value="tfa_1306" id="tfa_1306" class="">Rwanda</option>
                                    <option value="tfa_1307" id="tfa_1307" class="">Saint Helena</option>
                                    <option value="tfa_1308" id="tfa_1308" class="">Saint Kitts &amp; Nevis</option>
                                    <option value="tfa_1309" id="tfa_1309" class="">Saint Lucia</option>
                                    <option value="tfa_1310" id="tfa_1310" class="">Saint-Barthelemy</option>
                                    <option value="tfa_1311" id="tfa_1311" class="">Saint-Martin(French)</option>
                                    <option value="tfa_1312" id="tfa_1312" class="">Samoa</option>
                                    <option value="tfa_1313" id="tfa_1313" class="">San Marino</option>
                                    <option value="tfa_1314" id="tfa_1314" class="">Sao Tome &amp; Principe</option>
                                    <option value="tfa_1315" id="tfa_1315" class="">Saudi Arabia</option>
                                    <option value="tfa_1316" id="tfa_1316" class="">Senegal</option>
                                    <option value="tfa_1317" id="tfa_1317" class="">Serbia</option>
                                    <option value="tfa_1318" id="tfa_1318" class="">Seychelles</option>
                                    <option value="tfa_1319" id="tfa_1319" class="">Sierra Leone</option>
                                    <option value="tfa_1320" id="tfa_1320" class="">Singapore</option>
                                    <option value="tfa_1321" id="tfa_1321" class="">Slovakia</option>
                                    <option value="tfa_1322" id="tfa_1322" class="">Slovenia</option>
                                    <option value="tfa_1323" id="tfa_1323" class="">Solomon Islands</option>
                                    <option value="tfa_1324" id="tfa_1324" class="">Somalia</option>
                                    <option value="tfa_1325" id="tfa_1325" class="">South Africa</option>
                                    <option value="tfa_1326" id="tfa_1326" class="">South Korea</option>
                                    <option value="tfa_1327" id="tfa_1327" class="">South Sudan</option>
                                    <option value="tfa_1328" id="tfa_1328" class="">Spain</option>
                                    <option value="tfa_1329" id="tfa_1329" class="">Sri Lanka</option>
                                    <option value="tfa_1330" id="tfa_1330" class="">St Pierre &amp; Miquelon</option>
                                    <option value="tfa_1331" id="tfa_1331" class="">St Vinc &amp; Grenadine</option>
                                    <option value="tfa_1332" id="tfa_1332" class="">Sudan</option>
                                    <option value="tfa_1333" id="tfa_1333" class="">Suriname</option>
                                    <option value="tfa_1334" id="tfa_1334" class="">Svalbard &amp; Jan Mayen</option>
                                    <option value="tfa_1335" id="tfa_1335" class="">Swaziland</option>
                                    <option value="tfa_1336" id="tfa_1336" class="">Sweden</option>
                                    <option value="tfa_1337" id="tfa_1337" class="">Switzerland</option>
                                    <option value="tfa_1338" id="tfa_1338" class="">Syria</option>
                                    <option value="tfa_1339" id="tfa_1339" class="">Taiwan</option>
                                    <option value="tfa_1340" id="tfa_1340" class="">Tajikistan</option>
                                    <option value="tfa_1341" id="tfa_1341" class="">Tanzania</option>
                                    <option value="tfa_1342" id="tfa_1342" class="">Thailand</option>
                                    <option value="tfa_1343" id="tfa_1343" class="">Togo</option>
                                    <option value="tfa_1344" id="tfa_1344" class="">Tokelau</option>
                                    <option value="tfa_1345" id="tfa_1345" class="">Tonga</option>
                                    <option value="tfa_1346" id="tfa_1346" class="">Trinidad and Tobago</option>
                                    <option value="tfa_1347" id="tfa_1347" class="">Tunisia</option>
                                    <option value="tfa_1348" id="tfa_1348" class="">Turkey</option>
                                    <option value="tfa_1349" id="tfa_1349" class="">Turkmenistan</option>
                                    <option value="tfa_1350" id="tfa_1350" class="">Turks &amp; Caicos Isle</option>
                                    <option value="tfa_1351" id="tfa_1351" class="">Tuvalu</option>
                                    <option value="tfa_1352" id="tfa_1352" class="">Uganda</option>
                                    <option value="tfa_1353" id="tfa_1353" class="">Ukraine</option>
                                    <option value="tfa_1354" id="tfa_1354" class="">United Arab Emirates</option>
                                    <option value="tfa_1355" id="tfa_1355" class="">United Kingdom</option>
                                    <option value="tfa_1356" id="tfa_1356" class="">Uruguay</option>
                                    <option value="tfa_1357" id="tfa_1357" class="">US Virgin Islands</option>
                                    <option value="tfa_1358" id="tfa_1358" class="">USA</option>
                                    <option value="tfa_1359" id="tfa_1359" class="">Uzbekistan</option>
                                    <option value="tfa_1360" id="tfa_1360" class="">Vanuatu</option>
                                    <option value="tfa_1361" id="tfa_1361" class="">Venezuela</option>
                                    <option value="tfa_1362" id="tfa_1362" class="">Viet Nam</option>
                                    <option value="tfa_1363" id="tfa_1363" class="">Wallis &amp; Futuna Isle</option>
                                    <option value="tfa_1364" id="tfa_1364" class="">Western Sahara</option>
                                    <option value="tfa_1365" id="tfa_1365" class="">Yemen</option>
                                    <option value="tfa_1367" id="tfa_1367" class="">Zambia</option>
                                    <option value="tfa_1368" id="tfa_1368" class="">Zimbabwe</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_25-D">
                                    <label id="tfa_25-L" class="label preField reqMark" for="tfa_25">Language of Instruction</label><br><div class="inputWrapper"><input type="text" id="tfa_25" name="tfa_25" value="" aria-required="true" title="Language of Instruction" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_26-D" role="radiogroup" aria-labelledby="tfa_26-L" data-tfa-labelledby="-L tfa_26-L">
                                    <label id="tfa_26-L" class="label preField reqMark">Completed?</label><br><div class="inputWrapper"><span id="tfa_26" class="choices  required"><span class="oneChoice"><input type="radio" value="tfa_1369" class="" id="tfa_1369" name="tfa_26" aria-required="true" data-conditionals="#tfa_8274" aria-labelledby="tfa_1369-L" data-tfa-labelledby="tfa_26-L tfa_1369-L"><label class="label postField" id="tfa_1369-L" for="tfa_1369"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_1370" class="" id="tfa_1370" name="tfa_26" aria-required="true" data-conditionals="#tfa_8275" aria-labelledby="tfa_1370-L" data-tfa-labelledby="tfa_26-L tfa_1370-L"><label class="label postField" id="tfa_1370-L" for="tfa_1370"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8275-D">
                                    <label id="tfa_8275-L" class="label preField reqMark" for="tfa_8275">Due to Completion Date</label><br><div class="inputWrapper"><input type="text" id="tfa_8275" name="tfa_8275" value="" autocomplete="off" aria-required="true" data-condition="`#tfa_1370`" title="Due to Completion Date" class="validate-datecal required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8274-D">
                                    <label id="tfa_8274-L" class="label preField reqMark" for="tfa_8274">Completion Date</label><br><div class="inputWrapper"><input type="text" id="tfa_8274" name="tfa_8274" value="" autocomplete="off" aria-required="true" data-condition="`#tfa_1369`" title="Completion Date" class="validate-datecal required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_33-D">
                                    <label id="tfa_33-L" class="label preField reqMark" for="tfa_33">Please Upload Scanned Copy of Your Secondary Education Transcript/Results</label><br><div class="inputWrapper"><input type="file" id="tfa_33" name="tfa_33" size="" title="Please Upload Scanned Copy of Your Secondary Education Transcript/Results" class="required"></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_5334" class="section">
                                    <legend id="tfa_5334-L"><b>Post-secondary and Further Education</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_34-D" role="radiogroup" aria-labelledby="tfa_34-L" data-tfa-labelledby="-L tfa_34-L">
                                    <label id="tfa_34-L" class="label preField reqMark">Have you undertaken Post-Secondary and Further Education since high school graduation?”</label><br><div class="inputWrapper"><span id="tfa_34" class="choices  required"><span class="oneChoice"><input type="radio" value="tfa_1711" class="" id="tfa_1711" name="tfa_34" aria-required="true" data-conditionals="#tfa_35,#tfa_36,#tfa_37,#tfa_38,#tfa_39,#tfa_46" aria-labelledby="tfa_1711-L" data-tfa-labelledby="tfa_34-L tfa_1711-L"><label class="label postField" id="tfa_1711-L" for="tfa_1711"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_1712" class="" id="tfa_1712" name="tfa_34" aria-required="true" aria-labelledby="tfa_1712-L" data-tfa-labelledby="tfa_34-L tfa_1712-L"><label class="label postField" id="tfa_1712-L" for="tfa_1712"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_35-D">
                                    <label id="tfa_35-L" class="label preField reqMark" for="tfa_35">Name of Qualification</label><br><div class="inputWrapper"><input type="text" id="tfa_35" name="tfa_35" value="" aria-required="true" data-condition="`#tfa_1711`" title="Name of Qualification" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_36-D">
                                    <label id="tfa_36-L" class="label preField reqMark" for="tfa_36">Institution Attended</label><br><div class="inputWrapper"><input type="text" id="tfa_36" name="tfa_36" value="" aria-required="true" data-condition="`#tfa_1711`" title="Institution Attended" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_37-D">
                                    <label id="tfa_37-L" class="label preField reqMark" for="tfa_37">Country</label><br><div class="inputWrapper"><select id="tfa_37" name="tfa_37" data-condition="`#tfa_1711`" title="Country" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_1716" id="tfa_1716" class="">Afghanistan</option>
                                    <option value="tfa_1717" id="tfa_1717" class="">Aland Islands</option>
                                    <option value="tfa_1718" id="tfa_1718" class="">Albania</option>
                                    <option value="tfa_1719" id="tfa_1719" class="">Algeria</option>
                                    <option value="tfa_1720" id="tfa_1720" class="">American Samoa</option>
                                    <option value="tfa_1721" id="tfa_1721" class="">Andorra</option>
                                    <option value="tfa_1722" id="tfa_1722" class="">Angola</option>
                                    <option value="tfa_1723" id="tfa_1723" class="">Anguilla</option>
                                    <option value="tfa_1724" id="tfa_1724" class="">Antigua and Barbuda</option>
                                    <option value="tfa_1725" id="tfa_1725" class="">Argentina</option>
                                    <option value="tfa_1726" id="tfa_1726" class="">Armenia</option>
                                    <option value="tfa_1727" id="tfa_1727" class="">Aruba</option>
                                    <option value="tfa_1728" id="tfa_1728" class="">Australia</option>
                                    <option value="tfa_1729" id="tfa_1729" class="">Austria</option>
                                    <option value="tfa_1730" id="tfa_1730" class="">Azerbaijan</option>
                                    <option value="tfa_1731" id="tfa_1731" class="">Bahamas</option>
                                    <option value="tfa_1732" id="tfa_1732" class="">Bahrain</option>
                                    <option value="tfa_1733" id="tfa_1733" class="">Bangladesh</option>
                                    <option value="tfa_1734" id="tfa_1734" class="">Barbados</option>
                                    <option value="tfa_1735" id="tfa_1735" class="">Belarus</option>
                                    <option value="tfa_1736" id="tfa_1736" class="">Belgium</option>
                                    <option value="tfa_1737" id="tfa_1737" class="">Belize</option>
                                    <option value="tfa_1738" id="tfa_1738" class="">Benin</option>
                                    <option value="tfa_1739" id="tfa_1739" class="">Bermuda</option>
                                    <option value="tfa_1740" id="tfa_1740" class="">Bhutan</option>
                                    <option value="tfa_1741" id="tfa_1741" class="">Bolivia</option>
                                    <option value="tfa_1742" id="tfa_1742" class="">Bosnia &amp; Herzegovina</option>
                                    <option value="tfa_1743" id="tfa_1743" class="">Botswana</option>
                                    <option value="tfa_1744" id="tfa_1744" class="">Brazil</option>
                                    <option value="tfa_1745" id="tfa_1745" class="">British Virgin Isle</option>
                                    <option value="tfa_1746" id="tfa_1746" class="">Brunei</option>
                                    <option value="tfa_1747" id="tfa_1747" class="">Bulgaria</option>
                                    <option value="tfa_1748" id="tfa_1748" class="">Burkina Faso</option>
                                    <option value="tfa_1749" id="tfa_1749" class="">Burundi</option>
                                    <option value="tfa_1750" id="tfa_1750" class="">Cambodia</option>
                                    <option value="tfa_1751" id="tfa_1751" class="">Cameroon</option>
                                    <option value="tfa_1752" id="tfa_1752" class="">Canada</option>
                                    <option value="tfa_1753" id="tfa_1753" class="">Cape Verde</option>
                                    <option value="tfa_1754" id="tfa_1754" class="">Cayman Islands</option>
                                    <option value="tfa_1755" id="tfa_1755" class="">Central African Rep</option>
                                    <option value="tfa_1756" id="tfa_1756" class="">Chad</option>
                                    <option value="tfa_1757" id="tfa_1757" class="">Chile</option>
                                    <option value="tfa_1758" id="tfa_1758" class="">China</option>
                                    <option value="tfa_1759" id="tfa_1759" class="">Colombia</option>
                                    <option value="tfa_1760" id="tfa_1760" class="">Comoros</option>
                                    <option value="tfa_1761" id="tfa_1761" class="">Congo</option>
                                    <option value="tfa_1762" id="tfa_1762" class="">Cook Islands</option>
                                    <option value="tfa_1763" id="tfa_1763" class="">Costa Rica</option>
                                    <option value="tfa_1764" id="tfa_1764" class="">Croatia</option>
                                    <option value="tfa_1765" id="tfa_1765" class="">Cuba</option>
                                    <option value="tfa_1766" id="tfa_1766" class="">Cyprus</option>
                                    <option value="tfa_1767" id="tfa_1767" class="">Czech Republic</option>
                                    <option value="tfa_1768" id="tfa_1768" class="">Dem Rep of the Congo</option>
                                    <option value="tfa_1769" id="tfa_1769" class="">Denmark</option>
                                    <option value="tfa_1770" id="tfa_1770" class="">Djibouti</option>
                                    <option value="tfa_1771" id="tfa_1771" class="">Dominica</option>
                                    <option value="tfa_1772" id="tfa_1772" class="">Dominican Republic</option>
                                    <option value="tfa_1773" id="tfa_1773" class="">East Timor</option>
                                    <option value="tfa_1774" id="tfa_1774" class="">Ecuador</option>
                                    <option value="tfa_1775" id="tfa_1775" class="">Egypt</option>
                                    <option value="tfa_1776" id="tfa_1776" class="">El Salvador</option>
                                    <option value="tfa_1777" id="tfa_1777" class="">Equatorial Guinea</option>
                                    <option value="tfa_1778" id="tfa_1778" class="">Eritrea</option>
                                    <option value="tfa_1779" id="tfa_1779" class="">Estonia</option>
                                    <option value="tfa_1780" id="tfa_1780" class="">Ethiopia</option>
                                    <option value="tfa_1781" id="tfa_1781" class="">Faeroe Islands</option>
                                    <option value="tfa_1782" id="tfa_1782" class="">Falkland Islands</option>
                                    <option value="tfa_1783" id="tfa_1783" class="">Fiji</option>
                                    <option value="tfa_1784" id="tfa_1784" class="">Finland</option>
                                    <option value="tfa_1785" id="tfa_1785" class="">France</option>
                                    <option value="tfa_1786" id="tfa_1786" class="">French Guiana</option>
                                    <option value="tfa_1787" id="tfa_1787" class="">French Polynesia</option>
                                    <option value="tfa_1788" id="tfa_1788" class="">Gabon</option>
                                    <option value="tfa_1789" id="tfa_1789" class="">Gambia</option>
                                    <option value="tfa_1790" id="tfa_1790" class="">Georgia</option>
                                    <option value="tfa_1791" id="tfa_1791" class="">Germany</option>
                                    <option value="tfa_1792" id="tfa_1792" class="">Ghana</option>
                                    <option value="tfa_1793" id="tfa_1793" class="">Gibraltar</option>
                                    <option value="tfa_1794" id="tfa_1794" class="">Greece</option>
                                    <option value="tfa_1795" id="tfa_1795" class="">Greenland</option>
                                    <option value="tfa_1796" id="tfa_1796" class="">Grenada</option>
                                    <option value="tfa_1797" id="tfa_1797" class="">Guadeloupe</option>
                                    <option value="tfa_1798" id="tfa_1798" class="">Guam</option>
                                    <option value="tfa_1799" id="tfa_1799" class="">Guatemala</option>
                                    <option value="tfa_1800" id="tfa_1800" class="">Guernsey</option>
                                    <option value="tfa_1801" id="tfa_1801" class="">Guinea</option>
                                    <option value="tfa_1802" id="tfa_1802" class="">Guinea-Bissau</option>
                                    <option value="tfa_1803" id="tfa_1803" class="">Guyana</option>
                                    <option value="tfa_1804" id="tfa_1804" class="">Haiti</option>
                                    <option value="tfa_1805" id="tfa_1805" class="">Holy See</option>
                                    <option value="tfa_1806" id="tfa_1806" class="">Honduras</option>
                                    <option value="tfa_1807" id="tfa_1807" class="">Hong Kong</option>
                                    <option value="tfa_1808" id="tfa_1808" class="">Hungary</option>
                                    <option value="tfa_1809" id="tfa_1809" class="">Iceland</option>
                                    <option value="tfa_1810" id="tfa_1810" class="">India</option>
                                    <option value="tfa_1811" id="tfa_1811" class="">Indonesia</option>
                                    <option value="tfa_1812" id="tfa_1812" class="">Iran</option>
                                    <option value="tfa_1813" id="tfa_1813" class="">Iraq</option>
                                    <option value="tfa_1814" id="tfa_1814" class="">Ireland</option>
                                    <option value="tfa_1815" id="tfa_1815" class="">Isle of Man</option>
                                    <option value="tfa_1816" id="tfa_1816" class="">Israel</option>
                                    <option value="tfa_1817" id="tfa_1817" class="">Italy</option>
                                    <option value="tfa_1818" id="tfa_1818" class="">Ivory Coast</option>
                                    <option value="tfa_1819" id="tfa_1819" class="">Jamaica</option>
                                    <option value="tfa_1820" id="tfa_1820" class="">Japan</option>
                                    <option value="tfa_1821" id="tfa_1821" class="">Jersey</option>
                                    <option value="tfa_1822" id="tfa_1822" class="">Jordan</option>
                                    <option value="tfa_1823" id="tfa_1823" class="">Kazakhstan</option>
                                    <option value="tfa_1824" id="tfa_1824" class="">Kenya</option>
                                    <option value="tfa_1825" id="tfa_1825" class="">Kiribati</option>
                                    <option value="tfa_1826" id="tfa_1826" class="">Kuwait</option>
                                    <option value="tfa_1827" id="tfa_1827" class="">Kyrgyzstan</option>
                                    <option value="tfa_1828" id="tfa_1828" class="">Laos</option>
                                    <option value="tfa_1829" id="tfa_1829" class="">Latvia</option>
                                    <option value="tfa_1830" id="tfa_1830" class="">Lebanon</option>
                                    <option value="tfa_1831" id="tfa_1831" class="">Lesotho</option>
                                    <option value="tfa_1832" id="tfa_1832" class="">Liberia</option>
                                    <option value="tfa_1833" id="tfa_1833" class="">Libya</option>
                                    <option value="tfa_1834" id="tfa_1834" class="">Liechtenstein</option>
                                    <option value="tfa_1835" id="tfa_1835" class="">Lithuania</option>
                                    <option value="tfa_1836" id="tfa_1836" class="">Luxembourg</option>
                                    <option value="tfa_1837" id="tfa_1837" class="">Macao</option>
                                    <option value="tfa_1838" id="tfa_1838" class="">Macedonia</option>
                                    <option value="tfa_1839" id="tfa_1839" class="">Madagascar</option>
                                    <option value="tfa_1840" id="tfa_1840" class="">Malawi</option>
                                    <option value="tfa_1841" id="tfa_1841" class="">Malaysia</option>
                                    <option value="tfa_1842" id="tfa_1842" class="">Maldives</option>
                                    <option value="tfa_1843" id="tfa_1843" class="">Mali</option>
                                    <option value="tfa_1844" id="tfa_1844" class="">Malta</option>
                                    <option value="tfa_1845" id="tfa_1845" class="">Marshall Islands</option>
                                    <option value="tfa_1846" id="tfa_1846" class="">Martinique</option>
                                    <option value="tfa_1847" id="tfa_1847" class="">Mauritania</option>
                                    <option value="tfa_1848" id="tfa_1848" class="">Mauritius</option>
                                    <option value="tfa_1849" id="tfa_1849" class="">Mayotte</option>
                                    <option value="tfa_1850" id="tfa_1850" class="">Mexico</option>
                                    <option value="tfa_1851" id="tfa_1851" class="">Micronesia</option>
                                    <option value="tfa_1852" id="tfa_1852" class="">Monaco</option>
                                    <option value="tfa_1853" id="tfa_1853" class="">Mongolia</option>
                                    <option value="tfa_1854" id="tfa_1854" class="">Montenegro</option>
                                    <option value="tfa_1855" id="tfa_1855" class="">Montserrat</option>
                                    <option value="tfa_1856" id="tfa_1856" class="">Morocco</option>
                                    <option value="tfa_1857" id="tfa_1857" class="">Mozambique</option>
                                    <option value="tfa_1858" id="tfa_1858" class="">Myanmar</option>
                                    <option value="tfa_1859" id="tfa_1859" class="">Namibia</option>
                                    <option value="tfa_1860" id="tfa_1860" class="">Nauru</option>
                                    <option value="tfa_1861" id="tfa_1861" class="">Nepal</option>
                                    <option value="tfa_1862" id="tfa_1862" class="">Netherlands</option>
                                    <option value="tfa_1863" id="tfa_1863" class="">Netherlands Antilles</option>
                                    <option value="tfa_1864" id="tfa_1864" class="">New Caledonia</option>
                                    <option value="tfa_1865" id="tfa_1865" class="">New Zealand</option>
                                    <option value="tfa_1866" id="tfa_1866" class="">Nicaragua</option>
                                    <option value="tfa_1867" id="tfa_1867" class="">Niger</option>
                                    <option value="tfa_1868" id="tfa_1868" class="">Nigeria</option>
                                    <option value="tfa_1869" id="tfa_1869" class="">Niue</option>
                                    <option value="tfa_1870" id="tfa_1870" class="">Norfolk Island</option>
                                    <option value="tfa_1871" id="tfa_1871" class="">North Korea</option>
                                    <option value="tfa_1872" id="tfa_1872" class="">Norway</option>
                                    <option value="tfa_1873" id="tfa_1873" class="">Nth Mariana Islands</option>
                                    <option value="tfa_1874" id="tfa_1874" class="">Oman</option>
                                    <option value="tfa_1875" id="tfa_1875" class="">Pakistan</option>
                                    <option value="tfa_1876" id="tfa_1876" class="">Palau</option>
                                    <option value="tfa_1877" id="tfa_1877" class="">Palestine</option>
                                    <option value="tfa_1878" id="tfa_1878" class="">Panama</option>
                                    <option value="tfa_1879" id="tfa_1879" class="">Papua New Guinea</option>
                                    <option value="tfa_1880" id="tfa_1880" class="">Paraguay</option>
                                    <option value="tfa_1881" id="tfa_1881" class="">Peru</option>
                                    <option value="tfa_1882" id="tfa_1882" class="">Philippines</option>
                                    <option value="tfa_1883" id="tfa_1883" class="">Pitcairn</option>
                                    <option value="tfa_1884" id="tfa_1884" class="">Poland</option>
                                    <option value="tfa_1885" id="tfa_1885" class="">Portugal</option>
                                    <option value="tfa_1886" id="tfa_1886" class="">Puerto Rico</option>
                                    <option value="tfa_1887" id="tfa_1887" class="">Qatar</option>
                                    <option value="tfa_1888" id="tfa_1888" class="">Republic of Moldova</option>
                                    <option value="tfa_1889" id="tfa_1889" class="">Reunion</option>
                                    <option value="tfa_1890" id="tfa_1890" class="">Romania</option>
                                    <option value="tfa_1891" id="tfa_1891" class="">Russian Federation</option>
                                    <option value="tfa_1892" id="tfa_1892" class="">Rwanda</option>
                                    <option value="tfa_1893" id="tfa_1893" class="">Saint Helena</option>
                                    <option value="tfa_1894" id="tfa_1894" class="">Saint Kitts &amp; Nevis</option>
                                    <option value="tfa_1895" id="tfa_1895" class="">Saint Lucia</option>
                                    <option value="tfa_1896" id="tfa_1896" class="">Saint-Barthelemy</option>
                                    <option value="tfa_1897" id="tfa_1897" class="">Saint-Martin(French)</option>
                                    <option value="tfa_1898" id="tfa_1898" class="">Samoa</option>
                                    <option value="tfa_1899" id="tfa_1899" class="">San Marino</option>
                                    <option value="tfa_1900" id="tfa_1900" class="">Sao Tome &amp; Principe</option>
                                    <option value="tfa_1901" id="tfa_1901" class="">Saudi Arabia</option>
                                    <option value="tfa_1902" id="tfa_1902" class="">Senegal</option>
                                    <option value="tfa_1903" id="tfa_1903" class="">Serbia</option>
                                    <option value="tfa_1904" id="tfa_1904" class="">Seychelles</option>
                                    <option value="tfa_1905" id="tfa_1905" class="">Sierra Leone</option>
                                    <option value="tfa_1906" id="tfa_1906" class="">Singapore</option>
                                    <option value="tfa_1907" id="tfa_1907" class="">Slovakia</option>
                                    <option value="tfa_1908" id="tfa_1908" class="">Slovenia</option>
                                    <option value="tfa_1909" id="tfa_1909" class="">Solomon Islands</option>
                                    <option value="tfa_1910" id="tfa_1910" class="">Somalia</option>
                                    <option value="tfa_1911" id="tfa_1911" class="">South Africa</option>
                                    <option value="tfa_1912" id="tfa_1912" class="">South Korea</option>
                                    <option value="tfa_1913" id="tfa_1913" class="">South Sudan</option>
                                    <option value="tfa_1914" id="tfa_1914" class="">Spain</option>
                                    <option value="tfa_1915" id="tfa_1915" class="">Sri Lanka</option>
                                    <option value="tfa_1916" id="tfa_1916" class="">St Pierre &amp; Miquelon</option>
                                    <option value="tfa_1917" id="tfa_1917" class="">St Vinc &amp; Grenadine</option>
                                    <option value="tfa_1918" id="tfa_1918" class="">Sudan</option>
                                    <option value="tfa_1919" id="tfa_1919" class="">Suriname</option>
                                    <option value="tfa_1920" id="tfa_1920" class="">Svalbard &amp; Jan Mayen</option>
                                    <option value="tfa_1921" id="tfa_1921" class="">Swaziland</option>
                                    <option value="tfa_1922" id="tfa_1922" class="">Sweden</option>
                                    <option value="tfa_1923" id="tfa_1923" class="">Switzerland</option>
                                    <option value="tfa_1924" id="tfa_1924" class="">Syria</option>
                                    <option value="tfa_1925" id="tfa_1925" class="">Taiwan</option>
                                    <option value="tfa_1926" id="tfa_1926" class="">Tajikistan</option>
                                    <option value="tfa_1927" id="tfa_1927" class="">Tanzania</option>
                                    <option value="tfa_1928" id="tfa_1928" class="">Thailand</option>
                                    <option value="tfa_1929" id="tfa_1929" class="">Togo</option>
                                    <option value="tfa_1930" id="tfa_1930" class="">Tokelau</option>
                                    <option value="tfa_1931" id="tfa_1931" class="">Tonga</option>
                                    <option value="tfa_1932" id="tfa_1932" class="">Trinidad and Tobago</option>
                                    <option value="tfa_1933" id="tfa_1933" class="">Tunisia</option>
                                    <option value="tfa_1934" id="tfa_1934" class="">Turkey</option>
                                    <option value="tfa_1935" id="tfa_1935" class="">Turkmenistan</option>
                                    <option value="tfa_1936" id="tfa_1936" class="">Turks &amp; Caicos Isle</option>
                                    <option value="tfa_1937" id="tfa_1937" class="">Tuvalu</option>
                                    <option value="tfa_1938" id="tfa_1938" class="">Uganda</option>
                                    <option value="tfa_1939" id="tfa_1939" class="">Ukraine</option>
                                    <option value="tfa_1940" id="tfa_1940" class="">United Arab Emirates</option>
                                    <option value="tfa_1941" id="tfa_1941" class="">United Kingdom</option>
                                    <option value="tfa_1942" id="tfa_1942" class="">Uruguay</option>
                                    <option value="tfa_1943" id="tfa_1943" class="">US Virgin Islands</option>
                                    <option value="tfa_1944" id="tfa_1944" class="">USA</option>
                                    <option value="tfa_1945" id="tfa_1945" class="">Uzbekistan</option>
                                    <option value="tfa_1946" id="tfa_1946" class="">Vanuatu</option>
                                    <option value="tfa_1947" id="tfa_1947" class="">Venezuela</option>
                                    <option value="tfa_1948" id="tfa_1948" class="">Viet Nam</option>
                                    <option value="tfa_1949" id="tfa_1949" class="">Wallis &amp; Futuna Isle</option>
                                    <option value="tfa_1950" id="tfa_1950" class="">Western Sahara</option>
                                    <option value="tfa_1951" id="tfa_1951" class="">Yemen</option>
                                    <option value="tfa_1953" id="tfa_1953" class="">Zambia</option>
                                    <option value="tfa_1954" id="tfa_1954" class="">Zimbabwe</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_38-D">
                                    <label id="tfa_38-L" class="label preField reqMark" for="tfa_38">Language of Instruction</label><br><div class="inputWrapper"><input type="text" id="tfa_38" name="tfa_38" value="" aria-required="true" data-condition="`#tfa_1711`" title="Language of Instruction" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_39-D" role="radiogroup" aria-labelledby="tfa_39-L" data-tfa-labelledby="-L tfa_39-L">
                                    <label id="tfa_39-L" class="label preField reqMark">Completed?</label><br><div class="inputWrapper"><span id="tfa_39" class="choices  required" data-condition="`#tfa_1711`"><span class="oneChoice"><input type="radio" value="tfa_1955" class="" id="tfa_1955" name="tfa_39" aria-required="true" data-conditionals="#tfa_8278,#tfa_8277" aria-labelledby="tfa_1955-L" data-tfa-labelledby="tfa_39-L tfa_1955-L"><label class="label postField" id="tfa_1955-L" for="tfa_1955"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_1956" class="" id="tfa_1956" name="tfa_39" aria-required="true" data-conditionals="#tfa_8276" aria-labelledby="tfa_1956-L" data-tfa-labelledby="tfa_39-L tfa_1956-L"><label class="label postField" id="tfa_1956-L" for="tfa_1956"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8276-D">
                                    <label id="tfa_8276-L" class="label preField reqMark" for="tfa_8276">Due to Completion Date</label><br><div class="inputWrapper"><input type="text" id="tfa_8276" name="tfa_8276" value="" autocomplete="off" aria-required="true" data-condition="`#tfa_1956`" title="Due to Completion Date" class="validate-datecal required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8277-D">
                                    <label id="tfa_8277-L" class="label preField reqMark" for="tfa_8277">Start Date</label><br><div class="inputWrapper"><input type="text" id="tfa_8277" name="tfa_8277" value="" autocomplete="off" aria-required="true" data-condition="`#tfa_1955`" title="Start Date" class="validate-datecal required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8278-D">
                                    <label id="tfa_8278-L" class="label preField reqMark" for="tfa_8278">Completion Date</label><br><div class="inputWrapper"><input type="text" id="tfa_8278" name="tfa_8278" value="" autocomplete="off" aria-required="true" data-condition="`#tfa_1955`" title="Completion Date" class="validate-datecal required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_46-D">
                                    <label id="tfa_46-L" class="label preField reqMark" for="tfa_46">Please Upload Scanned Copy of Your Post-Secondary Education Transcript/Results</label><br><div class="inputWrapper"><input type="file" id="tfa_46" name="tfa_46" size="" data-condition="`#tfa_1711`" title="Please Upload Scanned Copy of Your Post-Secondary Education Transcript/Results" class="required"></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_5339" class="section">
                                    <legend id="tfa_5339-L"><b>English Test</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_223-D" role="radiogroup" aria-labelledby="tfa_223-L" data-tfa-labelledby="-L tfa_223-L">
                                    <label id="tfa_223-L" class="label preField reqMark">Have you taken an English Test?</label><br><div class="inputWrapper">
                                    <span id="tfa_223" class="choices  required"><span class="oneChoice"><input type="radio" value="tfa_5388" class="" id="tfa_5388" name="tfa_223" aria-required="true" data-conditionals="#tfa_47,#tfa_48,#tfa_49,#tfa_8279" aria-labelledby="tfa_5388-L" data-tfa-labelledby="tfa_223-L tfa_5388-L" aria-describedby="tfa_223-HH"><label class="label postField" id="tfa_5388-L" for="tfa_5388"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_5389" class="" id="tfa_5389" name="tfa_223" aria-required="true" aria-labelledby="tfa_5389-L" data-tfa-labelledby="tfa_223-L tfa_5389-L" aria-describedby="tfa_223-HH"><label class="label postField" id="tfa_5389-L" for="tfa_5389"><span class="input-radio-faux"></span>No</label></span></span><span class="field-hint-inactive" id="tfa_223-H"><span id="tfa_223-HH" class="hint">e.g. IELTS, TOEFL, Pearson, Navitas, University</span></span>
                                    </div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_47-D">
                                    <label id="tfa_47-L" class="label preField reqMark" for="tfa_47">English Test Name</label><br><div class="inputWrapper"><input type="text" id="tfa_47" name="tfa_47" value="" aria-required="true" data-condition="`#tfa_5388`" title="English Test Name" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_48-D">
                                    <label id="tfa_48-L" class="label preField " for="tfa_48">English Test Score/Result</label><br><div class="inputWrapper"><input type="text" id="tfa_48" name="tfa_48" value="" maxlength="50" data-condition="`#tfa_5388`" title="English Test Score/Result" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8279-D">
                                    <label id="tfa_8279-L" class="label preField reqMark" for="tfa_8279">Test Date</label><br><div class="inputWrapper"><input type="text" id="tfa_8279" name="tfa_8279" value="" autocomplete="off" aria-required="true" data-condition="`#tfa_5388`" title="Test Date" class="validate-datecal required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_49-D">
                                    <label id="tfa_49-L" class="label preField " for="tfa_49">Scan of English Test Transcript/Result</label><br><div class="inputWrapper"><input type="file" id="tfa_49" name="tfa_49" size="" data-condition="`#tfa_5388`" title="Scan of English Test Transcript/Result" class=""></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_5380" class="section">
                                    <legend id="tfa_5380-L"><b>Current English School</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_163-D" role="radiogroup" aria-labelledby="tfa_163-L" data-tfa-labelledby="-L tfa_163-L">
                                    <label id="tfa_163-L" class="label preField ">Are you currently enrolled in an English language specialist school?</label><br><div class="inputWrapper"><span id="tfa_163" class="choices  "><span class="oneChoice"><input type="radio" value="tfa_4727" class="" id="tfa_4727" name="tfa_163" data-conditionals="#tfa_164,#tfa_166" aria-labelledby="tfa_4727-L" data-tfa-labelledby="tfa_163-L tfa_4727-L"><label class="label postField" id="tfa_4727-L" for="tfa_4727"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_4728" class="" id="tfa_4728" name="tfa_163" aria-labelledby="tfa_4728-L" data-tfa-labelledby="tfa_163-L tfa_4728-L"><label class="label postField" id="tfa_4728-L" for="tfa_4728"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_164-D">
                                    <label id="tfa_164-L" class="label preField " for="tfa_164">Name of School</label><br><div class="inputWrapper"><input type="text" id="tfa_164" name="tfa_164" value="" data-condition="`#tfa_4727`" title="Name of School" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_166-D">
                                    <label id="tfa_166-L" class="label preField " for="tfa_166">Current level of English</label><br><div class="inputWrapper"><input type="text" id="tfa_166" name="tfa_166" value="" data-condition="`#tfa_4727`" title="Current level of English" class=""></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_5377" class="section">
                                    <legend id="tfa_5377-L"><b>Studying English in Canada</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_140-D" role="radiogroup" aria-labelledby="tfa_140-L" data-tfa-labelledby="-L tfa_140-L">
                                    <label id="tfa_140-L" class="label preField ">Will you be studying English in Canada before starting with us?</label><br><div class="inputWrapper"><span id="tfa_140" class="choices  "><span class="oneChoice"><input type="radio" value="tfa_4258" class="" id="tfa_4258" name="tfa_140" data-conditionals="#tfa_141,#tfa_8280,#tfa_8281" aria-labelledby="tfa_4258-L" data-tfa-labelledby="tfa_140-L tfa_4258-L"><label class="label postField" id="tfa_4258-L" for="tfa_4258"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_4259" class="" id="tfa_4259" name="tfa_140" aria-labelledby="tfa_4259-L" data-tfa-labelledby="tfa_140-L tfa_4259-L"><label class="label postField" id="tfa_4259-L" for="tfa_4259"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_141-D">
                                    <label id="tfa_141-L" class="label preField " for="tfa_141">Name of School</label><br><div class="inputWrapper"><input type="text" id="tfa_141" name="tfa_141" value="" data-condition="`#tfa_4258`" title="Name of School" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8280-D">
                                    <label id="tfa_8280-L" class="label preField reqMark" for="tfa_8280">Start Date</label><br><div class="inputWrapper"><input type="text" id="tfa_8280" name="tfa_8280" value="" autocomplete="off" aria-required="true" data-condition="`#tfa_4258`" title="Start Date" class="validate-datecal required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8281-D">
                                    <label id="tfa_8281-L" class="label preField reqMark" for="tfa_8281">Expected Completion Date</label><br><div class="inputWrapper"><input type="text" id="tfa_8281" name="tfa_8281" value="" autocomplete="off" aria-required="true" data-condition="`#tfa_4258`" title="Expected Completion Date" class="validate-datecal required"></div>
                                    </div>
                                    </fieldset>
                                    </div></div>
                                    <div class="wfPage" id="wfPgIndex-5"><div class="section pageSection" id="tfa_5340">
                                    <h4 id="tfa_5340-T">Extra Information</h4>
                                    <fieldset id="tfa_5351" class="section">
                                    <legend id="tfa_5351-L"><b>Employment History</b></legend>
                                    <div class="htmlSection" id="tfa_5352"><div class="htmlContent" id="tfa_5352-HTML"><p>If you believe you have employment experience that is relevant to the program you are applying for, please attach documents related to your employment history.</p></div></div>
                                    <div class="oneField field-container-D    " id="tfa_176-D" role="radiogroup" aria-labelledby="tfa_176-L" data-tfa-labelledby="-L tfa_176-L">
                                    <label id="tfa_176-L" class="label preField ">Do you have employment experience that is relevant to the program...</label><br><div class="inputWrapper"><span id="tfa_176" class="choices  "><span class="oneChoice"><input type="radio" value="tfa_4796" class="" id="tfa_4796" name="tfa_176" data-conditionals="#tfa_178,#tfa_179" aria-labelledby="tfa_4796-L" data-tfa-labelledby="tfa_176-L tfa_4796-L"><label class="label postField" id="tfa_4796-L" for="tfa_4796"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_4797" class="" id="tfa_4797" name="tfa_176" aria-labelledby="tfa_4797-L" data-tfa-labelledby="tfa_176-L tfa_4797-L"><label class="label postField" id="tfa_4797-L" for="tfa_4797"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_178-D">
                                    <label id="tfa_178-L" class="label preField " for="tfa_178">Scan of Resume/CV</label><br><div class="inputWrapper"><input type="file" id="tfa_178" name="tfa_178" size="" data-condition="`#tfa_4796`" title="Scan of Resume/CV" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_179-D">
                                    <label id="tfa_179-L" class="label preField " for="tfa_179">Scan of Statement from Employer</label><br><div class="inputWrapper"><input type="file" id="tfa_179" name="tfa_179" size="" data-condition="`#tfa_4796`" title="Scan of Statement from Employer" class=""></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_7288" class="section">
                                    <legend id="tfa_7288-L"><b>Information of Persons Who May Pay Fees on Your Behalf</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_7290-D" role="radiogroup" aria-labelledby="tfa_7290-L" data-tfa-labelledby="-L tfa_7290-L">
                                    <label id="tfa_7290-L" class="label preField ">Will any person make payment of tuition or fees on your behalf (for example, a family member)?</label><br><div class="inputWrapper"><span id="tfa_7290" class="choices  "><span class="oneChoice"><input type="radio" value="tfa_7291" class="" id="tfa_7291" name="tfa_7290" data-conditionals="#tfa_7293" aria-labelledby="tfa_7291-L" data-tfa-labelledby="tfa_7290-L tfa_7291-L"><label class="label postField" id="tfa_7291-L" for="tfa_7291"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_7292" class="" id="tfa_7292" name="tfa_7290" aria-labelledby="tfa_7292-L" data-tfa-labelledby="tfa_7290-L tfa_7292-L"><label class="label postField" id="tfa_7292-L" for="tfa_7292"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <div id="tfa_7293" class="section group" data-condition="`#tfa_7291`">
                                    <label class="label preField" id="tfa_7293-L"><b>Provide the following details of that person(s):</b></label><br><div class="oneField field-container-D    " id="tfa_7294-D">
                                    <label id="tfa_7294-L" class="label preField reqMark" for="tfa_7294">Their Surname</label><br><div class="inputWrapper"><input type="text" id="tfa_7294" name="tfa_7294" value="" aria-required="true" title="Their Surname" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_7295-D">
                                    <label id="tfa_7295-L" class="label preField reqMark" for="tfa_7295">Their First name(s)&nbsp;</label><br><div class="inputWrapper"><input type="text" id="tfa_7295" name="tfa_7295" value="" aria-required="true" title="Their First name(s) " class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_7296-D">
                                    <label id="tfa_7296-L" class="label preField reqMark" for="tfa_7296">Their citizenship (List all that apply)</label><br><div class="inputWrapper"><input type="text" id="tfa_7296" name="tfa_7296" value="" aria-required="true" title="Their citizenship (List all that apply)" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_7536-D">
                                    <label id="tfa_7536-L" class="label preField reqMark" for="tfa_7536">Their ordinary country of residence</label><br><div class="inputWrapper"><select id="tfa_7536" name="tfa_7536" title="Their ordinary country of residence" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_7537" id="tfa_7537" class="">Afghanistan</option>
                                    <option value="tfa_7538" id="tfa_7538" class="">Aland Islands</option>
                                    <option value="tfa_7539" id="tfa_7539" class="">Albania</option>
                                    <option value="tfa_7540" id="tfa_7540" class="">Algeria</option>
                                    <option value="tfa_7541" id="tfa_7541" class="">American Samoa</option>
                                    <option value="tfa_7542" id="tfa_7542" class="">Andorra</option>
                                    <option value="tfa_7543" id="tfa_7543" class="">Angola</option>
                                    <option value="tfa_7544" id="tfa_7544" class="">Anguilla</option>
                                    <option value="tfa_7545" id="tfa_7545" class="">Antigua and Barbuda</option>
                                    <option value="tfa_7546" id="tfa_7546" class="">Argentina</option>
                                    <option value="tfa_7547" id="tfa_7547" class="">Armenia</option>
                                    <option value="tfa_7548" id="tfa_7548" class="">Aruba</option>
                                    <option value="tfa_7549" id="tfa_7549" class="">Australia</option>
                                    <option value="tfa_7550" id="tfa_7550" class="">Austria</option>
                                    <option value="tfa_7551" id="tfa_7551" class="">Azerbaijan</option>
                                    <option value="tfa_7552" id="tfa_7552" class="">Bahamas</option>
                                    <option value="tfa_7553" id="tfa_7553" class="">Bahrain</option>
                                    <option value="tfa_7554" id="tfa_7554" class="">Bangladesh</option>
                                    <option value="tfa_7555" id="tfa_7555" class="">Barbados</option>
                                    <option value="tfa_7556" id="tfa_7556" class="">Belarus</option>
                                    <option value="tfa_7557" id="tfa_7557" class="">Belgium</option>
                                    <option value="tfa_7558" id="tfa_7558" class="">Belize</option>
                                    <option value="tfa_7559" id="tfa_7559" class="">Benin</option>
                                    <option value="tfa_7560" id="tfa_7560" class="">Bermuda</option>
                                    <option value="tfa_7561" id="tfa_7561" class="">Bhutan</option>
                                    <option value="tfa_7562" id="tfa_7562" class="">Bolivia</option>
                                    <option value="tfa_7563" id="tfa_7563" class="">Bosnia &amp; Herzegovina</option>
                                    <option value="tfa_7564" id="tfa_7564" class="">Botswana</option>
                                    <option value="tfa_7565" id="tfa_7565" class="">Brazil</option>
                                    <option value="tfa_7566" id="tfa_7566" class="">British Virgin Isle</option>
                                    <option value="tfa_7567" id="tfa_7567" class="">Brunei</option>
                                    <option value="tfa_7568" id="tfa_7568" class="">Bulgaria</option>
                                    <option value="tfa_7569" id="tfa_7569" class="">Burkina Faso</option>
                                    <option value="tfa_7570" id="tfa_7570" class="">Burundi</option>
                                    <option value="tfa_7571" id="tfa_7571" class="">Cambodia</option>
                                    <option value="tfa_7572" id="tfa_7572" class="">Cameroon</option>
                                    <option value="tfa_7573" id="tfa_7573" class="">Canada</option>
                                    <option value="tfa_7574" id="tfa_7574" class="">Cape Verde</option>
                                    <option value="tfa_7575" id="tfa_7575" class="">Cayman Islands</option>
                                    <option value="tfa_7576" id="tfa_7576" class="">Central African Rep</option>
                                    <option value="tfa_7577" id="tfa_7577" class="">Chad</option>
                                    <option value="tfa_7578" id="tfa_7578" class="">Chile</option>
                                    <option value="tfa_7579" id="tfa_7579" class="">China</option>
                                    <option value="tfa_7580" id="tfa_7580" class="">Colombia</option>
                                    <option value="tfa_7581" id="tfa_7581" class="">Comoros</option>
                                    <option value="tfa_7582" id="tfa_7582" class="">Congo</option>
                                    <option value="tfa_7583" id="tfa_7583" class="">Cook Islands</option>
                                    <option value="tfa_7584" id="tfa_7584" class="">Costa Rica</option>
                                    <option value="tfa_7585" id="tfa_7585" class="">Croatia</option>
                                    <option value="tfa_7586" id="tfa_7586" class="">Cuba</option>
                                    <option value="tfa_7587" id="tfa_7587" class="">Cyprus</option>
                                    <option value="tfa_7588" id="tfa_7588" class="">Czech Republic</option>
                                    <option value="tfa_7589" id="tfa_7589" class="">Dem Rep of the Congo</option>
                                    <option value="tfa_7590" id="tfa_7590" class="">Denmark</option>
                                    <option value="tfa_7591" id="tfa_7591" class="">Djibouti</option>
                                    <option value="tfa_7592" id="tfa_7592" class="">Dominica</option>
                                    <option value="tfa_7593" id="tfa_7593" class="">Dominican Republic</option>
                                    <option value="tfa_7594" id="tfa_7594" class="">East Timor</option>
                                    <option value="tfa_7595" id="tfa_7595" class="">Ecuador</option>
                                    <option value="tfa_7596" id="tfa_7596" class="">Egypt</option>
                                    <option value="tfa_7597" id="tfa_7597" class="">El Salvador</option>
                                    <option value="tfa_7598" id="tfa_7598" class="">Equatorial Guinea</option>
                                    <option value="tfa_7599" id="tfa_7599" class="">Eritrea</option>
                                    <option value="tfa_7600" id="tfa_7600" class="">Estonia</option>
                                    <option value="tfa_7601" id="tfa_7601" class="">Ethiopia</option>
                                    <option value="tfa_7602" id="tfa_7602" class="">Faeroe Islands</option>
                                    <option value="tfa_7603" id="tfa_7603" class="">Falkland Islands</option>
                                    <option value="tfa_7604" id="tfa_7604" class="">Fiji</option>
                                    <option value="tfa_7605" id="tfa_7605" class="">Finland</option>
                                    <option value="tfa_7606" id="tfa_7606" class="">France</option>
                                    <option value="tfa_7607" id="tfa_7607" class="">French Guiana</option>
                                    <option value="tfa_7608" id="tfa_7608" class="">French Polynesia</option>
                                    <option value="tfa_7609" id="tfa_7609" class="">Gabon</option>
                                    <option value="tfa_7610" id="tfa_7610" class="">Gambia</option>
                                    <option value="tfa_7611" id="tfa_7611" class="">Georgia</option>
                                    <option value="tfa_7612" id="tfa_7612" class="">Germany</option>
                                    <option value="tfa_7613" id="tfa_7613" class="">Ghana</option>
                                    <option value="tfa_7614" id="tfa_7614" class="">Gibraltar</option>
                                    <option value="tfa_7615" id="tfa_7615" class="">Greece</option>
                                    <option value="tfa_7616" id="tfa_7616" class="">Greenland</option>
                                    <option value="tfa_7617" id="tfa_7617" class="">Grenada</option>
                                    <option value="tfa_7618" id="tfa_7618" class="">Guadeloupe</option>
                                    <option value="tfa_7619" id="tfa_7619" class="">Guam</option>
                                    <option value="tfa_7620" id="tfa_7620" class="">Guatemala</option>
                                    <option value="tfa_7621" id="tfa_7621" class="">Guernsey</option>
                                    <option value="tfa_7622" id="tfa_7622" class="">Guinea</option>
                                    <option value="tfa_7623" id="tfa_7623" class="">Guinea-Bissau</option>
                                    <option value="tfa_7624" id="tfa_7624" class="">Guyana</option>
                                    <option value="tfa_7625" id="tfa_7625" class="">Haiti</option>
                                    <option value="tfa_7626" id="tfa_7626" class="">Holy See</option>
                                    <option value="tfa_7627" id="tfa_7627" class="">Honduras</option>
                                    <option value="tfa_7628" id="tfa_7628" class="">Hong Kong</option>
                                    <option value="tfa_7629" id="tfa_7629" class="">Hungary</option>
                                    <option value="tfa_7630" id="tfa_7630" class="">Iceland</option>
                                    <option value="tfa_7631" id="tfa_7631" class="">India</option>
                                    <option value="tfa_7632" id="tfa_7632" class="">Indonesia</option>
                                    <option value="tfa_7633" id="tfa_7633" class="">Iran</option>
                                    <option value="tfa_7634" id="tfa_7634" class="">Iraq</option>
                                    <option value="tfa_7635" id="tfa_7635" class="">Ireland</option>
                                    <option value="tfa_7636" id="tfa_7636" class="">Isle of Man</option>
                                    <option value="tfa_7637" id="tfa_7637" class="">Israel</option>
                                    <option value="tfa_7638" id="tfa_7638" class="">Italy</option>
                                    <option value="tfa_7639" id="tfa_7639" class="">Ivory Coast</option>
                                    <option value="tfa_7640" id="tfa_7640" class="">Jamaica</option>
                                    <option value="tfa_7641" id="tfa_7641" class="">Japan</option>
                                    <option value="tfa_7642" id="tfa_7642" class="">Jersey</option>
                                    <option value="tfa_7643" id="tfa_7643" class="">Jordan</option>
                                    <option value="tfa_7644" id="tfa_7644" class="">Kazakhstan</option>
                                    <option value="tfa_7645" id="tfa_7645" class="">Kenya</option>
                                    <option value="tfa_7646" id="tfa_7646" class="">Kiribati</option>
                                    <option value="tfa_7647" id="tfa_7647" class="">Kuwait</option>
                                    <option value="tfa_7648" id="tfa_7648" class="">Kyrgyzstan</option>
                                    <option value="tfa_7649" id="tfa_7649" class="">Laos</option>
                                    <option value="tfa_7650" id="tfa_7650" class="">Latvia</option>
                                    <option value="tfa_7651" id="tfa_7651" class="">Lebanon</option>
                                    <option value="tfa_7652" id="tfa_7652" class="">Lesotho</option>
                                    <option value="tfa_7653" id="tfa_7653" class="">Liberia</option>
                                    <option value="tfa_7654" id="tfa_7654" class="">Libya</option>
                                    <option value="tfa_7655" id="tfa_7655" class="">Liechtenstein</option>
                                    <option value="tfa_7656" id="tfa_7656" class="">Lithuania</option>
                                    <option value="tfa_7657" id="tfa_7657" class="">Luxembourg</option>
                                    <option value="tfa_7658" id="tfa_7658" class="">Macao</option>
                                    <option value="tfa_7659" id="tfa_7659" class="">Macedonia</option>
                                    <option value="tfa_7660" id="tfa_7660" class="">Madagascar</option>
                                    <option value="tfa_7661" id="tfa_7661" class="">Malawi</option>
                                    <option value="tfa_7662" id="tfa_7662" class="">Malaysia</option>
                                    <option value="tfa_7663" id="tfa_7663" class="">Maldives</option>
                                    <option value="tfa_7664" id="tfa_7664" class="">Mali</option>
                                    <option value="tfa_7665" id="tfa_7665" class="">Malta</option>
                                    <option value="tfa_7666" id="tfa_7666" class="">Marshall Islands</option>
                                    <option value="tfa_7667" id="tfa_7667" class="">Martinique</option>
                                    <option value="tfa_7668" id="tfa_7668" class="">Mauritania</option>
                                    <option value="tfa_7669" id="tfa_7669" class="">Mauritius</option>
                                    <option value="tfa_7670" id="tfa_7670" class="">Mayotte</option>
                                    <option value="tfa_7671" id="tfa_7671" class="">Mexico</option>
                                    <option value="tfa_7672" id="tfa_7672" class="">Micronesia</option>
                                    <option value="tfa_7673" id="tfa_7673" class="">Monaco</option>
                                    <option value="tfa_7674" id="tfa_7674" class="">Mongolia</option>
                                    <option value="tfa_7675" id="tfa_7675" class="">Montenegro</option>
                                    <option value="tfa_7676" id="tfa_7676" class="">Montserrat</option>
                                    <option value="tfa_7677" id="tfa_7677" class="">Morocco</option>
                                    <option value="tfa_7678" id="tfa_7678" class="">Mozambique</option>
                                    <option value="tfa_7679" id="tfa_7679" class="">Myanmar</option>
                                    <option value="tfa_7680" id="tfa_7680" class="">Namibia</option>
                                    <option value="tfa_7681" id="tfa_7681" class="">Nauru</option>
                                    <option value="tfa_7682" id="tfa_7682" class="">Nepal</option>
                                    <option value="tfa_7683" id="tfa_7683" class="">Netherlands</option>
                                    <option value="tfa_7684" id="tfa_7684" class="">Netherlands Antilles</option>
                                    <option value="tfa_7685" id="tfa_7685" class="">New Caledonia</option>
                                    <option value="tfa_7686" id="tfa_7686" class="">New Zealand</option>
                                    <option value="tfa_7687" id="tfa_7687" class="">Nicaragua</option>
                                    <option value="tfa_7688" id="tfa_7688" class="">Niger</option>
                                    <option value="tfa_7689" id="tfa_7689" class="">Nigeria</option>
                                    <option value="tfa_7690" id="tfa_7690" class="">Niue</option>
                                    <option value="tfa_7691" id="tfa_7691" class="">Norfolk Island</option>
                                    <option value="tfa_7692" id="tfa_7692" class="">North Korea</option>
                                    <option value="tfa_7693" id="tfa_7693" class="">Norway</option>
                                    <option value="tfa_7694" id="tfa_7694" class="">Nth Mariana Islands</option>
                                    <option value="tfa_7695" id="tfa_7695" class="">Oman</option>
                                    <option value="tfa_7696" id="tfa_7696" class="">Pakistan</option>
                                    <option value="tfa_7697" id="tfa_7697" class="">Palau</option>
                                    <option value="tfa_7698" id="tfa_7698" class="">Palestine</option>
                                    <option value="tfa_7699" id="tfa_7699" class="">Panama</option>
                                    <option value="tfa_7700" id="tfa_7700" class="">Papua New Guinea</option>
                                    <option value="tfa_7701" id="tfa_7701" class="">Paraguay</option>
                                    <option value="tfa_7702" id="tfa_7702" class="">Peru</option>
                                    <option value="tfa_7703" id="tfa_7703" class="">Philippines</option>
                                    <option value="tfa_7704" id="tfa_7704" class="">Pitcairn</option>
                                    <option value="tfa_7705" id="tfa_7705" class="">Poland</option>
                                    <option value="tfa_7706" id="tfa_7706" class="">Portugal</option>
                                    <option value="tfa_7707" id="tfa_7707" class="">Puerto Rico</option>
                                    <option value="tfa_7708" id="tfa_7708" class="">Qatar</option>
                                    <option value="tfa_7709" id="tfa_7709" class="">Republic of Moldova</option>
                                    <option value="tfa_7710" id="tfa_7710" class="">Reunion</option>
                                    <option value="tfa_7711" id="tfa_7711" class="">Romania</option>
                                    <option value="tfa_7712" id="tfa_7712" class="">Russian Federation</option>
                                    <option value="tfa_7713" id="tfa_7713" class="">Rwanda</option>
                                    <option value="tfa_7714" id="tfa_7714" class="">Saint Helena</option>
                                    <option value="tfa_7715" id="tfa_7715" class="">Saint Kitts &amp; Nevis</option>
                                    <option value="tfa_7716" id="tfa_7716" class="">Saint Lucia</option>
                                    <option value="tfa_7717" id="tfa_7717" class="">Saint-Barthelemy</option>
                                    <option value="tfa_7718" id="tfa_7718" class="">Saint-Martin(French)</option>
                                    <option value="tfa_7719" id="tfa_7719" class="">Samoa</option>
                                    <option value="tfa_7720" id="tfa_7720" class="">San Marino</option>
                                    <option value="tfa_7721" id="tfa_7721" class="">Sao Tome &amp; Principe</option>
                                    <option value="tfa_7722" id="tfa_7722" class="">Saudi Arabia</option>
                                    <option value="tfa_7723" id="tfa_7723" class="">Senegal</option>
                                    <option value="tfa_7724" id="tfa_7724" class="">Serbia</option>
                                    <option value="tfa_7725" id="tfa_7725" class="">Seychelles</option>
                                    <option value="tfa_7726" id="tfa_7726" class="">Sierra Leone</option>
                                    <option value="tfa_7727" id="tfa_7727" class="">Singapore</option>
                                    <option value="tfa_7728" id="tfa_7728" class="">Slovakia</option>
                                    <option value="tfa_7729" id="tfa_7729" class="">Slovenia</option>
                                    <option value="tfa_7730" id="tfa_7730" class="">Solomon Islands</option>
                                    <option value="tfa_7731" id="tfa_7731" class="">Somalia</option>
                                    <option value="tfa_7732" id="tfa_7732" class="">South Africa</option>
                                    <option value="tfa_7733" id="tfa_7733" class="">South Korea</option>
                                    <option value="tfa_7734" id="tfa_7734" class="">South Sudan</option>
                                    <option value="tfa_7735" id="tfa_7735" class="">Spain</option>
                                    <option value="tfa_7736" id="tfa_7736" class="">Sri Lanka</option>
                                    <option value="tfa_7737" id="tfa_7737" class="">St Pierre &amp; Miquelon</option>
                                    <option value="tfa_7738" id="tfa_7738" class="">St Vinc &amp; Grenadine</option>
                                    <option value="tfa_7739" id="tfa_7739" class="">Sudan</option>
                                    <option value="tfa_7740" id="tfa_7740" class="">Suriname</option>
                                    <option value="tfa_7741" id="tfa_7741" class="">Svalbard &amp; Jan Mayen</option>
                                    <option value="tfa_7742" id="tfa_7742" class="">Swaziland</option>
                                    <option value="tfa_7743" id="tfa_7743" class="">Sweden</option>
                                    <option value="tfa_7744" id="tfa_7744" class="">Switzerland</option>
                                    <option value="tfa_7745" id="tfa_7745" class="">Syria</option>
                                    <option value="tfa_7746" id="tfa_7746" class="">Taiwan</option>
                                    <option value="tfa_7747" id="tfa_7747" class="">Tajikistan</option>
                                    <option value="tfa_7748" id="tfa_7748" class="">Tanzania</option>
                                    <option value="tfa_7749" id="tfa_7749" class="">Thailand</option>
                                    <option value="tfa_7750" id="tfa_7750" class="">Togo</option>
                                    <option value="tfa_7751" id="tfa_7751" class="">Tokelau</option>
                                    <option value="tfa_7752" id="tfa_7752" class="">Tonga</option>
                                    <option value="tfa_7753" id="tfa_7753" class="">Trinidad and Tobago</option>
                                    <option value="tfa_7754" id="tfa_7754" class="">Tunisia</option>
                                    <option value="tfa_7755" id="tfa_7755" class="">Turkey</option>
                                    <option value="tfa_7756" id="tfa_7756" class="">Turkmenistan</option>
                                    <option value="tfa_7757" id="tfa_7757" class="">Turks &amp; Caicos Isle</option>
                                    <option value="tfa_7758" id="tfa_7758" class="">Tuvalu</option>
                                    <option value="tfa_7759" id="tfa_7759" class="">Uganda</option>
                                    <option value="tfa_7760" id="tfa_7760" class="">Ukraine</option>
                                    <option value="tfa_7761" id="tfa_7761" class="">United Arab Emirates</option>
                                    <option value="tfa_7762" id="tfa_7762" class="">United Kingdom</option>
                                    <option value="tfa_7763" id="tfa_7763" class="">Uruguay</option>
                                    <option value="tfa_7764" id="tfa_7764" class="">US Virgin Islands</option>
                                    <option value="tfa_7765" id="tfa_7765" class="">USA</option>
                                    <option value="tfa_7766" id="tfa_7766" class="">Uzbekistan</option>
                                    <option value="tfa_7767" id="tfa_7767" class="">Vanuatu</option>
                                    <option value="tfa_7768" id="tfa_7768" class="">Venezuela</option>
                                    <option value="tfa_7769" id="tfa_7769" class="">Viet Nam</option>
                                    <option value="tfa_7770" id="tfa_7770" class="">Wallis &amp; Futuna Isle</option>
                                    <option value="tfa_7771" id="tfa_7771" class="">Western Sahara</option>
                                    <option value="tfa_7772" id="tfa_7772" class="">Yemen</option>
                                    <option value="tfa_7773" id="tfa_7773" class="">Zambia</option>
                                    <option value="tfa_7774" id="tfa_7774" class="">Zimbabwe</option></select></div>
                                    </div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8264-D" role="radiogroup" aria-labelledby="tfa_8264-L" data-tfa-labelledby="-L tfa_8264-L">
                                    <label id="tfa_8264-L" class="label preField ">Will any company or other entity make payment of tuition or fees on your behalf (for example, a sponsor organization)?</label><br><div class="inputWrapper"><span id="tfa_8264" class="choices  "><span class="oneChoice"><input type="radio" value="tfa_8265" class="" id="tfa_8265" name="tfa_8264" data-conditionals="#tfa_8018" aria-labelledby="tfa_8265-L" data-tfa-labelledby="tfa_8264-L tfa_8265-L"><label class="label postField" id="tfa_8265-L" for="tfa_8265"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_8266" class="" id="tfa_8266" name="tfa_8264" aria-labelledby="tfa_8266-L" data-tfa-labelledby="tfa_8264-L tfa_8266-L"><label class="label postField" id="tfa_8266-L" for="tfa_8266"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <div id="tfa_8018" class="section group" data-condition="`#tfa_8265`">
                                    <label class="label preField" id="tfa_8018-L"><b>Provide the following details of that company or entity:</b></label><br><div class="oneField field-container-D    " id="tfa_8019-D">
                                    <label id="tfa_8019-L" class="label preField reqMark" for="tfa_8019">Its name</label><br><div class="inputWrapper"><input type="text" id="tfa_8019" name="tfa_8019" value="" aria-required="true" title="Its name" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8020-D">
                                    <label id="tfa_8020-L" class="label preField reqMark" for="tfa_8020">Its place of incorporation&nbsp;</label><br><div class="inputWrapper"><input type="text" id="tfa_8020" name="tfa_8020" value="" aria-required="true" title="Its place of incorporation " class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8021-D">
                                    <label id="tfa_8021-L" class="label preField " for="tfa_8021">The name of any person (if any) who ultimately controls or owns 50% or more of that company or entity</label><br><div class="inputWrapper"><input type="text" id="tfa_8021" name="tfa_8021" value="" title="The name of any person (if any) who ultimately controls or owns 50% or more of that company or entity" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8268-D">
                                    <label id="tfa_8268-L" class="label preField " for="tfa_8268">That person's citizenship (List all that apply)</label><br><div class="inputWrapper"><input type="text" id="tfa_8268" name="tfa_8268" value="" title="That person's citizenship (List all that apply)" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_8022-D">
                                    <label id="tfa_8022-L" class="label preField " for="tfa_8022">That person's ordinary country of residence</label><br><div class="inputWrapper"><select id="tfa_8022" name="tfa_8022" title="That person's ordinary country of residence" class=""><option value="">Please select...</option>
                                    <option value="tfa_8023" id="tfa_8023" class="">Afghanistan</option>
                                    <option value="tfa_8024" id="tfa_8024" class="">Aland Islands</option>
                                    <option value="tfa_8025" id="tfa_8025" class="">Albania</option>
                                    <option value="tfa_8026" id="tfa_8026" class="">Algeria</option>
                                    <option value="tfa_8027" id="tfa_8027" class="">American Samoa</option>
                                    <option value="tfa_8028" id="tfa_8028" class="">Andorra</option>
                                    <option value="tfa_8029" id="tfa_8029" class="">Angola</option>
                                    <option value="tfa_8030" id="tfa_8030" class="">Anguilla</option>
                                    <option value="tfa_8031" id="tfa_8031" class="">Antigua and Barbuda</option>
                                    <option value="tfa_8032" id="tfa_8032" class="">Argentina</option>
                                    <option value="tfa_8033" id="tfa_8033" class="">Armenia</option>
                                    <option value="tfa_8034" id="tfa_8034" class="">Aruba</option>
                                    <option value="tfa_8035" id="tfa_8035" class="">Australia</option>
                                    <option value="tfa_8036" id="tfa_8036" class="">Austria</option>
                                    <option value="tfa_8037" id="tfa_8037" class="">Azerbaijan</option>
                                    <option value="tfa_8038" id="tfa_8038" class="">Bahamas</option>
                                    <option value="tfa_8039" id="tfa_8039" class="">Bahrain</option>
                                    <option value="tfa_8040" id="tfa_8040" class="">Bangladesh</option>
                                    <option value="tfa_8041" id="tfa_8041" class="">Barbados</option>
                                    <option value="tfa_8042" id="tfa_8042" class="">Belarus</option>
                                    <option value="tfa_8043" id="tfa_8043" class="">Belgium</option>
                                    <option value="tfa_8044" id="tfa_8044" class="">Belize</option>
                                    <option value="tfa_8045" id="tfa_8045" class="">Benin</option>
                                    <option value="tfa_8046" id="tfa_8046" class="">Bermuda</option>
                                    <option value="tfa_8047" id="tfa_8047" class="">Bhutan</option>
                                    <option value="tfa_8048" id="tfa_8048" class="">Bolivia</option>
                                    <option value="tfa_8049" id="tfa_8049" class="">Bosnia &amp; Herzegovina</option>
                                    <option value="tfa_8050" id="tfa_8050" class="">Botswana</option>
                                    <option value="tfa_8051" id="tfa_8051" class="">Brazil</option>
                                    <option value="tfa_8052" id="tfa_8052" class="">British Virgin Isle</option>
                                    <option value="tfa_8053" id="tfa_8053" class="">Brunei</option>
                                    <option value="tfa_8054" id="tfa_8054" class="">Bulgaria</option>
                                    <option value="tfa_8055" id="tfa_8055" class="">Burkina Faso</option>
                                    <option value="tfa_8056" id="tfa_8056" class="">Burundi</option>
                                    <option value="tfa_8057" id="tfa_8057" class="">Cambodia</option>
                                    <option value="tfa_8058" id="tfa_8058" class="">Cameroon</option>
                                    <option value="tfa_8059" id="tfa_8059" class="">Canada</option>
                                    <option value="tfa_8060" id="tfa_8060" class="">Cape Verde</option>
                                    <option value="tfa_8061" id="tfa_8061" class="">Cayman Islands</option>
                                    <option value="tfa_8062" id="tfa_8062" class="">Central African Rep</option>
                                    <option value="tfa_8063" id="tfa_8063" class="">Chad</option>
                                    <option value="tfa_8064" id="tfa_8064" class="">Chile</option>
                                    <option value="tfa_8065" id="tfa_8065" class="">China</option>
                                    <option value="tfa_8066" id="tfa_8066" class="">Colombia</option>
                                    <option value="tfa_8067" id="tfa_8067" class="">Comoros</option>
                                    <option value="tfa_8068" id="tfa_8068" class="">Congo</option>
                                    <option value="tfa_8069" id="tfa_8069" class="">Cook Islands</option>
                                    <option value="tfa_8070" id="tfa_8070" class="">Costa Rica</option>
                                    <option value="tfa_8071" id="tfa_8071" class="">Croatia</option>
                                    <option value="tfa_8072" id="tfa_8072" class="">Cuba</option>
                                    <option value="tfa_8073" id="tfa_8073" class="">Cyprus</option>
                                    <option value="tfa_8074" id="tfa_8074" class="">Czech Republic</option>
                                    <option value="tfa_8075" id="tfa_8075" class="">Dem Rep of the Congo</option>
                                    <option value="tfa_8076" id="tfa_8076" class="">Denmark</option>
                                    <option value="tfa_8077" id="tfa_8077" class="">Djibouti</option>
                                    <option value="tfa_8078" id="tfa_8078" class="">Dominica</option>
                                    <option value="tfa_8079" id="tfa_8079" class="">Dominican Republic</option>
                                    <option value="tfa_8080" id="tfa_8080" class="">East Timor</option>
                                    <option value="tfa_8081" id="tfa_8081" class="">Ecuador</option>
                                    <option value="tfa_8082" id="tfa_8082" class="">Egypt</option>
                                    <option value="tfa_8083" id="tfa_8083" class="">El Salvador</option>
                                    <option value="tfa_8084" id="tfa_8084" class="">Equatorial Guinea</option>
                                    <option value="tfa_8085" id="tfa_8085" class="">Eritrea</option>
                                    <option value="tfa_8086" id="tfa_8086" class="">Estonia</option>
                                    <option value="tfa_8087" id="tfa_8087" class="">Ethiopia</option>
                                    <option value="tfa_8088" id="tfa_8088" class="">Faeroe Islands</option>
                                    <option value="tfa_8089" id="tfa_8089" class="">Falkland Islands</option>
                                    <option value="tfa_8090" id="tfa_8090" class="">Fiji</option>
                                    <option value="tfa_8091" id="tfa_8091" class="">Finland</option>
                                    <option value="tfa_8092" id="tfa_8092" class="">France</option>
                                    <option value="tfa_8093" id="tfa_8093" class="">French Guiana</option>
                                    <option value="tfa_8094" id="tfa_8094" class="">French Polynesia</option>
                                    <option value="tfa_8095" id="tfa_8095" class="">Gabon</option>
                                    <option value="tfa_8096" id="tfa_8096" class="">Gambia</option>
                                    <option value="tfa_8097" id="tfa_8097" class="">Georgia</option>
                                    <option value="tfa_8098" id="tfa_8098" class="">Germany</option>
                                    <option value="tfa_8099" id="tfa_8099" class="">Ghana</option>
                                    <option value="tfa_8100" id="tfa_8100" class="">Gibraltar</option>
                                    <option value="tfa_8101" id="tfa_8101" class="">Greece</option>
                                    <option value="tfa_8102" id="tfa_8102" class="">Greenland</option>
                                    <option value="tfa_8103" id="tfa_8103" class="">Grenada</option>
                                    <option value="tfa_8104" id="tfa_8104" class="">Guadeloupe</option>
                                    <option value="tfa_8105" id="tfa_8105" class="">Guam</option>
                                    <option value="tfa_8106" id="tfa_8106" class="">Guatemala</option>
                                    <option value="tfa_8107" id="tfa_8107" class="">Guernsey</option>
                                    <option value="tfa_8108" id="tfa_8108" class="">Guinea</option>
                                    <option value="tfa_8109" id="tfa_8109" class="">Guinea-Bissau</option>
                                    <option value="tfa_8110" id="tfa_8110" class="">Guyana</option>
                                    <option value="tfa_8111" id="tfa_8111" class="">Haiti</option>
                                    <option value="tfa_8112" id="tfa_8112" class="">Holy See</option>
                                    <option value="tfa_8113" id="tfa_8113" class="">Honduras</option>
                                    <option value="tfa_8114" id="tfa_8114" class="">Hong Kong</option>
                                    <option value="tfa_8115" id="tfa_8115" class="">Hungary</option>
                                    <option value="tfa_8116" id="tfa_8116" class="">Iceland</option>
                                    <option value="tfa_8117" id="tfa_8117" class="">India</option>
                                    <option value="tfa_8118" id="tfa_8118" class="">Indonesia</option>
                                    <option value="tfa_8119" id="tfa_8119" class="">Iran</option>
                                    <option value="tfa_8120" id="tfa_8120" class="">Iraq</option>
                                    <option value="tfa_8121" id="tfa_8121" class="">Ireland</option>
                                    <option value="tfa_8122" id="tfa_8122" class="">Isle of Man</option>
                                    <option value="tfa_8123" id="tfa_8123" class="">Israel</option>
                                    <option value="tfa_8124" id="tfa_8124" class="">Italy</option>
                                    <option value="tfa_8125" id="tfa_8125" class="">Ivory Coast</option>
                                    <option value="tfa_8126" id="tfa_8126" class="">Jamaica</option>
                                    <option value="tfa_8127" id="tfa_8127" class="">Japan</option>
                                    <option value="tfa_8128" id="tfa_8128" class="">Jersey</option>
                                    <option value="tfa_8129" id="tfa_8129" class="">Jordan</option>
                                    <option value="tfa_8130" id="tfa_8130" class="">Kazakhstan</option>
                                    <option value="tfa_8131" id="tfa_8131" class="">Kenya</option>
                                    <option value="tfa_8132" id="tfa_8132" class="">Kiribati</option>
                                    <option value="tfa_8133" id="tfa_8133" class="">Kuwait</option>
                                    <option value="tfa_8134" id="tfa_8134" class="">Kyrgyzstan</option>
                                    <option value="tfa_8135" id="tfa_8135" class="">Laos</option>
                                    <option value="tfa_8136" id="tfa_8136" class="">Latvia</option>
                                    <option value="tfa_8137" id="tfa_8137" class="">Lebanon</option>
                                    <option value="tfa_8138" id="tfa_8138" class="">Lesotho</option>
                                    <option value="tfa_8139" id="tfa_8139" class="">Liberia</option>
                                    <option value="tfa_8140" id="tfa_8140" class="">Libya</option>
                                    <option value="tfa_8141" id="tfa_8141" class="">Liechtenstein</option>
                                    <option value="tfa_8142" id="tfa_8142" class="">Lithuania</option>
                                    <option value="tfa_8143" id="tfa_8143" class="">Luxembourg</option>
                                    <option value="tfa_8144" id="tfa_8144" class="">Macao</option>
                                    <option value="tfa_8145" id="tfa_8145" class="">Macedonia</option>
                                    <option value="tfa_8146" id="tfa_8146" class="">Madagascar</option>
                                    <option value="tfa_8147" id="tfa_8147" class="">Malawi</option>
                                    <option value="tfa_8148" id="tfa_8148" class="">Malaysia</option>
                                    <option value="tfa_8149" id="tfa_8149" class="">Maldives</option>
                                    <option value="tfa_8150" id="tfa_8150" class="">Mali</option>
                                    <option value="tfa_8151" id="tfa_8151" class="">Malta</option>
                                    <option value="tfa_8152" id="tfa_8152" class="">Marshall Islands</option>
                                    <option value="tfa_8153" id="tfa_8153" class="">Martinique</option>
                                    <option value="tfa_8154" id="tfa_8154" class="">Mauritania</option>
                                    <option value="tfa_8155" id="tfa_8155" class="">Mauritius</option>
                                    <option value="tfa_8156" id="tfa_8156" class="">Mayotte</option>
                                    <option value="tfa_8157" id="tfa_8157" class="">Mexico</option>
                                    <option value="tfa_8158" id="tfa_8158" class="">Micronesia</option>
                                    <option value="tfa_8159" id="tfa_8159" class="">Monaco</option>
                                    <option value="tfa_8160" id="tfa_8160" class="">Mongolia</option>
                                    <option value="tfa_8161" id="tfa_8161" class="">Montenegro</option>
                                    <option value="tfa_8162" id="tfa_8162" class="">Montserrat</option>
                                    <option value="tfa_8163" id="tfa_8163" class="">Morocco</option>
                                    <option value="tfa_8164" id="tfa_8164" class="">Mozambique</option>
                                    <option value="tfa_8165" id="tfa_8165" class="">Myanmar</option>
                                    <option value="tfa_8166" id="tfa_8166" class="">Namibia</option>
                                    <option value="tfa_8167" id="tfa_8167" class="">Nauru</option>
                                    <option value="tfa_8168" id="tfa_8168" class="">Nepal</option>
                                    <option value="tfa_8169" id="tfa_8169" class="">Netherlands</option>
                                    <option value="tfa_8170" id="tfa_8170" class="">Netherlands Antilles</option>
                                    <option value="tfa_8171" id="tfa_8171" class="">New Caledonia</option>
                                    <option value="tfa_8172" id="tfa_8172" class="">New Zealand</option>
                                    <option value="tfa_8173" id="tfa_8173" class="">Nicaragua</option>
                                    <option value="tfa_8174" id="tfa_8174" class="">Niger</option>
                                    <option value="tfa_8175" id="tfa_8175" class="">Nigeria</option>
                                    <option value="tfa_8176" id="tfa_8176" class="">Niue</option>
                                    <option value="tfa_8177" id="tfa_8177" class="">Norfolk Island</option>
                                    <option value="tfa_8178" id="tfa_8178" class="">North Korea</option>
                                    <option value="tfa_8179" id="tfa_8179" class="">Norway</option>
                                    <option value="tfa_8180" id="tfa_8180" class="">Nth Mariana Islands</option>
                                    <option value="tfa_8181" id="tfa_8181" class="">Oman</option>
                                    <option value="tfa_8182" id="tfa_8182" class="">Pakistan</option>
                                    <option value="tfa_8183" id="tfa_8183" class="">Palau</option>
                                    <option value="tfa_8184" id="tfa_8184" class="">Palestine</option>
                                    <option value="tfa_8185" id="tfa_8185" class="">Panama</option>
                                    <option value="tfa_8186" id="tfa_8186" class="">Papua New Guinea</option>
                                    <option value="tfa_8187" id="tfa_8187" class="">Paraguay</option>
                                    <option value="tfa_8188" id="tfa_8188" class="">Peru</option>
                                    <option value="tfa_8189" id="tfa_8189" class="">Philippines</option>
                                    <option value="tfa_8190" id="tfa_8190" class="">Pitcairn</option>
                                    <option value="tfa_8191" id="tfa_8191" class="">Poland</option>
                                    <option value="tfa_8192" id="tfa_8192" class="">Portugal</option>
                                    <option value="tfa_8193" id="tfa_8193" class="">Puerto Rico</option>
                                    <option value="tfa_8194" id="tfa_8194" class="">Qatar</option>
                                    <option value="tfa_8195" id="tfa_8195" class="">Republic of Moldova</option>
                                    <option value="tfa_8196" id="tfa_8196" class="">Reunion</option>
                                    <option value="tfa_8197" id="tfa_8197" class="">Romania</option>
                                    <option value="tfa_8198" id="tfa_8198" class="">Russian Federation</option>
                                    <option value="tfa_8199" id="tfa_8199" class="">Rwanda</option>
                                    <option value="tfa_8200" id="tfa_8200" class="">Saint Helena</option>
                                    <option value="tfa_8201" id="tfa_8201" class="">Saint Kitts &amp; Nevis</option>
                                    <option value="tfa_8202" id="tfa_8202" class="">Saint Lucia</option>
                                    <option value="tfa_8203" id="tfa_8203" class="">Saint-Barthelemy</option>
                                    <option value="tfa_8204" id="tfa_8204" class="">Saint-Martin(French)</option>
                                    <option value="tfa_8205" id="tfa_8205" class="">Samoa</option>
                                    <option value="tfa_8206" id="tfa_8206" class="">San Marino</option>
                                    <option value="tfa_8207" id="tfa_8207" class="">Sao Tome &amp; Principe</option>
                                    <option value="tfa_8208" id="tfa_8208" class="">Saudi Arabia</option>
                                    <option value="tfa_8209" id="tfa_8209" class="">Senegal</option>
                                    <option value="tfa_8210" id="tfa_8210" class="">Serbia</option>
                                    <option value="tfa_8211" id="tfa_8211" class="">Seychelles</option>
                                    <option value="tfa_8212" id="tfa_8212" class="">Sierra Leone</option>
                                    <option value="tfa_8213" id="tfa_8213" class="">Singapore</option>
                                    <option value="tfa_8214" id="tfa_8214" class="">Slovakia</option>
                                    <option value="tfa_8215" id="tfa_8215" class="">Slovenia</option>
                                    <option value="tfa_8216" id="tfa_8216" class="">Solomon Islands</option>
                                    <option value="tfa_8217" id="tfa_8217" class="">Somalia</option>
                                    <option value="tfa_8218" id="tfa_8218" class="">South Africa</option>
                                    <option value="tfa_8219" id="tfa_8219" class="">South Korea</option>
                                    <option value="tfa_8220" id="tfa_8220" class="">South Sudan</option>
                                    <option value="tfa_8221" id="tfa_8221" class="">Spain</option>
                                    <option value="tfa_8222" id="tfa_8222" class="">Sri Lanka</option>
                                    <option value="tfa_8223" id="tfa_8223" class="">St Pierre &amp; Miquelon</option>
                                    <option value="tfa_8224" id="tfa_8224" class="">St Vinc &amp; Grenadine</option>
                                    <option value="tfa_8225" id="tfa_8225" class="">Sudan</option>
                                    <option value="tfa_8226" id="tfa_8226" class="">Suriname</option>
                                    <option value="tfa_8227" id="tfa_8227" class="">Svalbard &amp; Jan Mayen</option>
                                    <option value="tfa_8228" id="tfa_8228" class="">Swaziland</option>
                                    <option value="tfa_8229" id="tfa_8229" class="">Sweden</option>
                                    <option value="tfa_8230" id="tfa_8230" class="">Switzerland</option>
                                    <option value="tfa_8231" id="tfa_8231" class="">Syria</option>
                                    <option value="tfa_8232" id="tfa_8232" class="">Taiwan</option>
                                    <option value="tfa_8233" id="tfa_8233" class="">Tajikistan</option>
                                    <option value="tfa_8234" id="tfa_8234" class="">Tanzania</option>
                                    <option value="tfa_8235" id="tfa_8235" class="">Thailand</option>
                                    <option value="tfa_8236" id="tfa_8236" class="">Togo</option>
                                    <option value="tfa_8237" id="tfa_8237" class="">Tokelau</option>
                                    <option value="tfa_8238" id="tfa_8238" class="">Tonga</option>
                                    <option value="tfa_8239" id="tfa_8239" class="">Trinidad and Tobago</option>
                                    <option value="tfa_8240" id="tfa_8240" class="">Tunisia</option>
                                    <option value="tfa_8241" id="tfa_8241" class="">Turkey</option>
                                    <option value="tfa_8242" id="tfa_8242" class="">Turkmenistan</option>
                                    <option value="tfa_8243" id="tfa_8243" class="">Turks &amp; Caicos Isle</option>
                                    <option value="tfa_8244" id="tfa_8244" class="">Tuvalu</option>
                                    <option value="tfa_8245" id="tfa_8245" class="">Uganda</option>
                                    <option value="tfa_8246" id="tfa_8246" class="">Ukraine</option>
                                    <option value="tfa_8247" id="tfa_8247" class="">United Arab Emirates</option>
                                    <option value="tfa_8248" id="tfa_8248" class="">United Kingdom</option>
                                    <option value="tfa_8249" id="tfa_8249" class="">Uruguay</option>
                                    <option value="tfa_8250" id="tfa_8250" class="">US Virgin Islands</option>
                                    <option value="tfa_8251" id="tfa_8251" class="">USA</option>
                                    <option value="tfa_8252" id="tfa_8252" class="">Uzbekistan</option>
                                    <option value="tfa_8253" id="tfa_8253" class="">Vanuatu</option>
                                    <option value="tfa_8254" id="tfa_8254" class="">Venezuela</option>
                                    <option value="tfa_8255" id="tfa_8255" class="">Viet Nam</option>
                                    <option value="tfa_8256" id="tfa_8256" class="">Wallis &amp; Futuna Isle</option>
                                    <option value="tfa_8257" id="tfa_8257" class="">Western Sahara</option>
                                    <option value="tfa_8258" id="tfa_8258" class="">Yemen</option>
                                    <option value="tfa_8259" id="tfa_8259" class="">Zambia</option>
                                    <option value="tfa_8260" id="tfa_8260" class="">Zimbabwe</option></select></div>
                                    </div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_5341" class="section">
                                    <legend id="tfa_5341-L"><b>Request for Disability Support</b></legend>
                                    <div class="htmlSection" id="tfa_5342"><div class="htmlContent" id="tfa_5342-HTML"><p>FIC provides academic accommodation to students with disabilities (for example, mobility, sight and hearing impairments and reading, writing or other impairments that adversely affect learning, such as attention-deficit hyperactivity disorder). Upon acceptance to the program, we encourage you to advise us of any impairments that may affect your full participation in the FIC curriculum so that we may accommodate your needs. For more information, please contact us by email at <a href="mailto: info@fraseric.ca">info@fraseric.ca</a> or by telephone on +1 778 782 5011.</p></div></div>
                                    <div class="oneField field-container-D    " id="tfa_50-D" role="radiogroup" aria-labelledby="tfa_50-L" data-tfa-labelledby="-L tfa_50-L">
                                    <label id="tfa_50-L" class="label preField reqMark">Do you have a learning/physical disability or special needs which may affect your study?</label><br><div class="inputWrapper"><span id="tfa_50" class="choices  required"><span class="oneChoice"><input type="radio" value="tfa_2297" class="" id="tfa_2297" name="tfa_50" aria-required="true" data-conditionals="#tfa_51" aria-labelledby="tfa_2297-L" data-tfa-labelledby="tfa_50-L tfa_2297-L"><label class="label postField" id="tfa_2297-L" for="tfa_2297"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_2298" class="" id="tfa_2298" name="tfa_50" aria-required="true" aria-labelledby="tfa_2298-L" data-tfa-labelledby="tfa_50-L tfa_2298-L"><label class="label postField" id="tfa_2298-L" for="tfa_2298"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_51-D">
                                    <label id="tfa_51-L" class="label preField reqMark" for="tfa_51">Please describe your disability which may affect your learning and needs you require</label><br><div class="inputWrapper"><textarea aria-required="true" id="tfa_51" name="tfa_51" data-condition="`#tfa_2297`" title="Please describe your disability which may affect your learning and needs you require" class="required"></textarea></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_5363" class="section">
                                    <legend id="tfa_5363-L"><b>Medical Coverage Requirements</b></legend>
                                    <div class="htmlSection" id="tfa_5475"><div class="htmlContent" id="tfa_5475-HTML"><p>I understand FIC will provide mandatory 12 months of medical coverage upon arrival in Canada. At the end of the 12 months I will have the option to extend the initial coverage or apply for the British Columbia Medical Services Plan.</p></div></div>
                                    <div class="oneField field-container-D    " id="tfa_191-D" role="group" aria-labelledby="tfa_191-L" data-tfa-labelledby="-L tfa_191-L">
                                    <label id="tfa_191-L" class="label preField ">Agree to the Medical Coverage Agreement?</label><br><div class="inputWrapper"><span id="tfa_191" class="choices  "><span class="oneChoice"><input type="checkbox" value="tfa_4817" class="" id="tfa_4817" name="tfa_4817" aria-labelledby="tfa_4817-L" data-tfa-labelledby="tfa_191-L tfa_4817-L"><label class="label postField" id="tfa_4817-L" for="tfa_4817"><span class="input-checkbox-faux"></span><span style="color: rgb(69, 69, 69);">I agree to the above medical coverage agreement</span></label></span></span></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_5348" class="section">
                                    <legend id="tfa_5348-L"><b>Extra Attachments</b></legend>
                                    <div class="htmlSection" id="tfa_5476"><div class="htmlContent" id="tfa_5476-HTML"><p>If you have other documents that you would like us to consider in your online application (e.g. transcripts/qualifications/awards), please attach them below.</p></div></div>
                                    <div class="oneField field-container-D    " id="tfa_76-D">
                                    <label id="tfa_76-L" class="label preField " for="tfa_76">Extra Attachment 1</label><br><div class="inputWrapper"><input type="file" id="tfa_76" name="tfa_76" size="" title="Extra Attachment 1" class=""></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_77-D">
                                    <label id="tfa_77-L" class="label preField " for="tfa_77">Extra Attachment 2</label><br><div class="inputWrapper"><input type="file" id="tfa_77" name="tfa_77" size="" title="Extra Attachment 2" class=""></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_5343" class="section">
                                    <legend id="tfa_5343-L"><b>Other Information</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_52-D">
                                    <label id="tfa_52-L" class="label preField reqMark" for="tfa_52">How did you first hear about us?</label><br><div class="inputWrapper"><select id="tfa_52" name="tfa_52" title="How did you first hear about us?" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_2302" id="tfa_2302" class="">Agent/Recruiter</option>
                                    <option value="tfa_5481" id="tfa_5481" class="">FIC Website</option>
                                    <option value="tfa_2303" id="tfa_2303" class="">Billboard</option>
                                    <option value="tfa_2315" id="tfa_2315" class="">Online Ad Banner</option>
                                    <option value="tfa_2316" id="tfa_2316" class="">Online Ad Video</option>
                                    <option value="tfa_2305" id="tfa_2305" class="">Careers Counsellor</option>
                                    <option value="tfa_2306" id="tfa_2306" class="">Exhibition Seminar</option>
                                    <option value="tfa_2307" id="tfa_2307" class="">Facebook</option>
                                    <option value="tfa_2308" id="tfa_2308" data-conditionals="#tfa_53" class="">Friend/Relative</option>
                                    <option value="tfa_2309" id="tfa_2309" class="">Google</option>
                                    <option value="tfa_2310" id="tfa_2310" class="">Newspaper/Magazine</option>
                                    <option value="tfa_2311" id="tfa_2311" class="">Radio</option>
                                    <option value="tfa_2312" id="tfa_2312" class="">Referral by a University</option>
                                    <option value="tfa_2313" id="tfa_2313" class="">Television</option>
                                    <option value="tfa_2314" id="tfa_2314" data-conditionals="#tfa_54" class="">Other</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_53-D" role="radiogroup" aria-labelledby="tfa_53-L" data-tfa-labelledby="-L tfa_53-L">
                                    <label id="tfa_53-L" class="label preField reqMark">Is your friend/relative a student of our institution?</label><br><div class="inputWrapper"><span id="tfa_53" class="choices  required" data-condition="`#tfa_2308`"><span class="oneChoice"><input type="radio" value="tfa_2317" class="" id="tfa_2317" name="tfa_53" aria-required="true" aria-labelledby="tfa_2317-L" data-tfa-labelledby="tfa_53-L tfa_2317-L"><label class="label postField" id="tfa_2317-L" for="tfa_2317"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_2318" class="" id="tfa_2318" name="tfa_53" aria-required="true" aria-labelledby="tfa_2318-L" data-tfa-labelledby="tfa_53-L tfa_2318-L"><label class="label postField" id="tfa_2318-L" for="tfa_2318"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_54-D">
                                    <label id="tfa_54-L" class="label preField reqMark" for="tfa_54">Other Source</label><br><div class="inputWrapper"><input type="text" id="tfa_54" name="tfa_54" value="" aria-required="true" data-condition="`#tfa_2314`" title="Other Source" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_55-D">
                                    <label id="tfa_55-L" class="label preField reqMark" for="tfa_55">Which country are you submitting this online application from?</label><br><div class="inputWrapper"><select id="tfa_55" name="tfa_55" title="Which country are you submitting this online application from?" aria-required="true" class="required"><option value="">Please select...</option>
                                    <option value="tfa_2322" id="tfa_2322" class="">Afghanistan</option>
                                    <option value="tfa_2323" id="tfa_2323" class="">Aland Islands</option>
                                    <option value="tfa_2324" id="tfa_2324" class="">Albania</option>
                                    <option value="tfa_2325" id="tfa_2325" class="">Algeria</option>
                                    <option value="tfa_2326" id="tfa_2326" class="">American Samoa</option>
                                    <option value="tfa_2327" id="tfa_2327" class="">Andorra</option>
                                    <option value="tfa_2328" id="tfa_2328" class="">Angola</option>
                                    <option value="tfa_2329" id="tfa_2329" class="">Anguilla</option>
                                    <option value="tfa_2330" id="tfa_2330" class="">Antigua and Barbuda</option>
                                    <option value="tfa_2331" id="tfa_2331" class="">Argentina</option>
                                    <option value="tfa_2332" id="tfa_2332" class="">Armenia</option>
                                    <option value="tfa_2333" id="tfa_2333" class="">Aruba</option>
                                    <option value="tfa_2334" id="tfa_2334" class="">Australia</option>
                                    <option value="tfa_2335" id="tfa_2335" class="">Austria</option>
                                    <option value="tfa_2336" id="tfa_2336" class="">Azerbaijan</option>
                                    <option value="tfa_2337" id="tfa_2337" class="">Bahamas</option>
                                    <option value="tfa_2338" id="tfa_2338" class="">Bahrain</option>
                                    <option value="tfa_2339" id="tfa_2339" class="">Bangladesh</option>
                                    <option value="tfa_2340" id="tfa_2340" class="">Barbados</option>
                                    <option value="tfa_2341" id="tfa_2341" class="">Belarus</option>
                                    <option value="tfa_2342" id="tfa_2342" class="">Belgium</option>
                                    <option value="tfa_2343" id="tfa_2343" class="">Belize</option>
                                    <option value="tfa_2344" id="tfa_2344" class="">Benin</option>
                                    <option value="tfa_2345" id="tfa_2345" class="">Bermuda</option>
                                    <option value="tfa_2346" id="tfa_2346" class="">Bhutan</option>
                                    <option value="tfa_2347" id="tfa_2347" class="">Bolivia</option>
                                    <option value="tfa_2348" id="tfa_2348" class="">Bosnia &amp; Herzegovina</option>
                                    <option value="tfa_2349" id="tfa_2349" class="">Botswana</option>
                                    <option value="tfa_2350" id="tfa_2350" class="">Brazil</option>
                                    <option value="tfa_2351" id="tfa_2351" class="">British Virgin Isle</option>
                                    <option value="tfa_2352" id="tfa_2352" class="">Brunei</option>
                                    <option value="tfa_2353" id="tfa_2353" class="">Bulgaria</option>
                                    <option value="tfa_2354" id="tfa_2354" class="">Burkina Faso</option>
                                    <option value="tfa_2355" id="tfa_2355" class="">Burundi</option>
                                    <option value="tfa_2356" id="tfa_2356" class="">Cambodia</option>
                                    <option value="tfa_2357" id="tfa_2357" class="">Cameroon</option>
                                    <option value="tfa_2358" id="tfa_2358" class="">Canada</option>
                                    <option value="tfa_2359" id="tfa_2359" class="">Cape Verde</option>
                                    <option value="tfa_2360" id="tfa_2360" class="">Cayman Islands</option>
                                    <option value="tfa_2361" id="tfa_2361" class="">Central African Rep</option>
                                    <option value="tfa_2362" id="tfa_2362" class="">Chad</option>
                                    <option value="tfa_2363" id="tfa_2363" class="">Chile</option>
                                    <option value="tfa_2364" id="tfa_2364" class="">China</option>
                                    <option value="tfa_2365" id="tfa_2365" class="">Colombia</option>
                                    <option value="tfa_2366" id="tfa_2366" class="">Comoros</option>
                                    <option value="tfa_2367" id="tfa_2367" class="">Congo</option>
                                    <option value="tfa_2368" id="tfa_2368" class="">Cook Islands</option>
                                    <option value="tfa_2369" id="tfa_2369" class="">Costa Rica</option>
                                    <option value="tfa_2370" id="tfa_2370" class="">Croatia</option>
                                    <option value="tfa_2371" id="tfa_2371" class="">Cuba</option>
                                    <option value="tfa_2372" id="tfa_2372" class="">Cyprus</option>
                                    <option value="tfa_2373" id="tfa_2373" class="">Czech Republic</option>
                                    <option value="tfa_2374" id="tfa_2374" class="">Dem Rep of the Congo</option>
                                    <option value="tfa_2375" id="tfa_2375" class="">Denmark</option>
                                    <option value="tfa_2376" id="tfa_2376" class="">Djibouti</option>
                                    <option value="tfa_2377" id="tfa_2377" class="">Dominica</option>
                                    <option value="tfa_2378" id="tfa_2378" class="">Dominican Republic</option>
                                    <option value="tfa_2379" id="tfa_2379" class="">East Timor</option>
                                    <option value="tfa_2380" id="tfa_2380" class="">Ecuador</option>
                                    <option value="tfa_2381" id="tfa_2381" class="">Egypt</option>
                                    <option value="tfa_2382" id="tfa_2382" class="">El Salvador</option>
                                    <option value="tfa_2383" id="tfa_2383" class="">Equatorial Guinea</option>
                                    <option value="tfa_2384" id="tfa_2384" class="">Eritrea</option>
                                    <option value="tfa_2385" id="tfa_2385" class="">Estonia</option>
                                    <option value="tfa_2386" id="tfa_2386" class="">Ethiopia</option>
                                    <option value="tfa_2387" id="tfa_2387" class="">Faeroe Islands</option>
                                    <option value="tfa_2388" id="tfa_2388" class="">Falkland Islands</option>
                                    <option value="tfa_2389" id="tfa_2389" class="">Fiji</option>
                                    <option value="tfa_2390" id="tfa_2390" class="">Finland</option>
                                    <option value="tfa_2391" id="tfa_2391" class="">France</option>
                                    <option value="tfa_2392" id="tfa_2392" class="">French Guiana</option>
                                    <option value="tfa_2393" id="tfa_2393" class="">French Polynesia</option>
                                    <option value="tfa_2394" id="tfa_2394" class="">Gabon</option>
                                    <option value="tfa_2395" id="tfa_2395" class="">Gambia</option>
                                    <option value="tfa_2396" id="tfa_2396" class="">Georgia</option>
                                    <option value="tfa_2397" id="tfa_2397" class="">Germany</option>
                                    <option value="tfa_2398" id="tfa_2398" class="">Ghana</option>
                                    <option value="tfa_2399" id="tfa_2399" class="">Gibraltar</option>
                                    <option value="tfa_2400" id="tfa_2400" class="">Greece</option>
                                    <option value="tfa_2401" id="tfa_2401" class="">Greenland</option>
                                    <option value="tfa_2402" id="tfa_2402" class="">Grenada</option>
                                    <option value="tfa_2403" id="tfa_2403" class="">Guadeloupe</option>
                                    <option value="tfa_2404" id="tfa_2404" class="">Guam</option>
                                    <option value="tfa_2405" id="tfa_2405" class="">Guatemala</option>
                                    <option value="tfa_2406" id="tfa_2406" class="">Guernsey</option>
                                    <option value="tfa_2407" id="tfa_2407" class="">Guinea</option>
                                    <option value="tfa_2408" id="tfa_2408" class="">Guinea-Bissau</option>
                                    <option value="tfa_2409" id="tfa_2409" class="">Guyana</option>
                                    <option value="tfa_2410" id="tfa_2410" class="">Haiti</option>
                                    <option value="tfa_2411" id="tfa_2411" class="">Holy See</option>
                                    <option value="tfa_2412" id="tfa_2412" class="">Honduras</option>
                                    <option value="tfa_2413" id="tfa_2413" class="">Hong Kong</option>
                                    <option value="tfa_2414" id="tfa_2414" class="">Hungary</option>
                                    <option value="tfa_2415" id="tfa_2415" class="">Iceland</option>
                                    <option value="tfa_2416" id="tfa_2416" class="">India</option>
                                    <option value="tfa_2417" id="tfa_2417" class="">Indonesia</option>
                                    <option value="tfa_2418" id="tfa_2418" class="">Iran</option>
                                    <option value="tfa_2419" id="tfa_2419" class="">Iraq</option>
                                    <option value="tfa_2420" id="tfa_2420" class="">Ireland</option>
                                    <option value="tfa_2421" id="tfa_2421" class="">Isle of Man</option>
                                    <option value="tfa_2422" id="tfa_2422" class="">Israel</option>
                                    <option value="tfa_2423" id="tfa_2423" class="">Italy</option>
                                    <option value="tfa_2424" id="tfa_2424" class="">Ivory Coast</option>
                                    <option value="tfa_2425" id="tfa_2425" class="">Jamaica</option>
                                    <option value="tfa_2426" id="tfa_2426" class="">Japan</option>
                                    <option value="tfa_2427" id="tfa_2427" class="">Jersey</option>
                                    <option value="tfa_2428" id="tfa_2428" class="">Jordan</option>
                                    <option value="tfa_2429" id="tfa_2429" class="">Kazakhstan</option>
                                    <option value="tfa_2430" id="tfa_2430" class="">Kenya</option>
                                    <option value="tfa_2431" id="tfa_2431" class="">Kiribati</option>
                                    <option value="tfa_2432" id="tfa_2432" class="">Kuwait</option>
                                    <option value="tfa_2433" id="tfa_2433" class="">Kyrgyzstan</option>
                                    <option value="tfa_2434" id="tfa_2434" class="">Laos</option>
                                    <option value="tfa_2435" id="tfa_2435" class="">Latvia</option>
                                    <option value="tfa_2436" id="tfa_2436" class="">Lebanon</option>
                                    <option value="tfa_2437" id="tfa_2437" class="">Lesotho</option>
                                    <option value="tfa_2438" id="tfa_2438" class="">Liberia</option>
                                    <option value="tfa_2439" id="tfa_2439" class="">Libya</option>
                                    <option value="tfa_2440" id="tfa_2440" class="">Liechtenstein</option>
                                    <option value="tfa_2441" id="tfa_2441" class="">Lithuania</option>
                                    <option value="tfa_2442" id="tfa_2442" class="">Luxembourg</option>
                                    <option value="tfa_2443" id="tfa_2443" class="">Macao</option>
                                    <option value="tfa_2444" id="tfa_2444" class="">Macedonia</option>
                                    <option value="tfa_2445" id="tfa_2445" class="">Madagascar</option>
                                    <option value="tfa_2446" id="tfa_2446" class="">Malawi</option>
                                    <option value="tfa_2447" id="tfa_2447" class="">Malaysia</option>
                                    <option value="tfa_2448" id="tfa_2448" class="">Maldives</option>
                                    <option value="tfa_2449" id="tfa_2449" class="">Mali</option>
                                    <option value="tfa_2450" id="tfa_2450" class="">Malta</option>
                                    <option value="tfa_2451" id="tfa_2451" class="">Marshall Islands</option>
                                    <option value="tfa_2452" id="tfa_2452" class="">Martinique</option>
                                    <option value="tfa_2453" id="tfa_2453" class="">Mauritania</option>
                                    <option value="tfa_2454" id="tfa_2454" class="">Mauritius</option>
                                    <option value="tfa_2455" id="tfa_2455" class="">Mayotte</option>
                                    <option value="tfa_2456" id="tfa_2456" class="">Mexico</option>
                                    <option value="tfa_2457" id="tfa_2457" class="">Micronesia</option>
                                    <option value="tfa_2458" id="tfa_2458" class="">Monaco</option>
                                    <option value="tfa_2459" id="tfa_2459" class="">Mongolia</option>
                                    <option value="tfa_2460" id="tfa_2460" class="">Montenegro</option>
                                    <option value="tfa_2461" id="tfa_2461" class="">Montserrat</option>
                                    <option value="tfa_2462" id="tfa_2462" class="">Morocco</option>
                                    <option value="tfa_2463" id="tfa_2463" class="">Mozambique</option>
                                    <option value="tfa_2464" id="tfa_2464" class="">Myanmar</option>
                                    <option value="tfa_2465" id="tfa_2465" class="">Namibia</option>
                                    <option value="tfa_2466" id="tfa_2466" class="">Nauru</option>
                                    <option value="tfa_2467" id="tfa_2467" class="">Nepal</option>
                                    <option value="tfa_2468" id="tfa_2468" class="">Netherlands</option>
                                    <option value="tfa_2469" id="tfa_2469" class="">Netherlands Antilles</option>
                                    <option value="tfa_2470" id="tfa_2470" class="">New Caledonia</option>
                                    <option value="tfa_2471" id="tfa_2471" class="">New Zealand</option>
                                    <option value="tfa_2472" id="tfa_2472" class="">Nicaragua</option>
                                    <option value="tfa_2473" id="tfa_2473" class="">Niger</option>
                                    <option value="tfa_2474" id="tfa_2474" class="">Nigeria</option>
                                    <option value="tfa_2475" id="tfa_2475" class="">Niue</option>
                                    <option value="tfa_2476" id="tfa_2476" class="">Norfolk Island</option>
                                    <option value="tfa_2477" id="tfa_2477" class="">North Korea</option>
                                    <option value="tfa_2478" id="tfa_2478" class="">Norway</option>
                                    <option value="tfa_2479" id="tfa_2479" class="">Nth Mariana Islands</option>
                                    <option value="tfa_2480" id="tfa_2480" class="">Oman</option>
                                    <option value="tfa_2481" id="tfa_2481" class="">Pakistan</option>
                                    <option value="tfa_2482" id="tfa_2482" class="">Palau</option>
                                    <option value="tfa_2483" id="tfa_2483" class="">Palestine</option>
                                    <option value="tfa_2484" id="tfa_2484" class="">Panama</option>
                                    <option value="tfa_2485" id="tfa_2485" class="">Papua New Guinea</option>
                                    <option value="tfa_2486" id="tfa_2486" class="">Paraguay</option>
                                    <option value="tfa_2487" id="tfa_2487" class="">Peru</option>
                                    <option value="tfa_2488" id="tfa_2488" class="">Philippines</option>
                                    <option value="tfa_2489" id="tfa_2489" class="">Pitcairn</option>
                                    <option value="tfa_2490" id="tfa_2490" class="">Poland</option>
                                    <option value="tfa_2491" id="tfa_2491" class="">Portugal</option>
                                    <option value="tfa_2492" id="tfa_2492" class="">Puerto Rico</option>
                                    <option value="tfa_2493" id="tfa_2493" class="">Qatar</option>
                                    <option value="tfa_2494" id="tfa_2494" class="">Republic of Moldova</option>
                                    <option value="tfa_2495" id="tfa_2495" class="">Reunion</option>
                                    <option value="tfa_2496" id="tfa_2496" class="">Romania</option>
                                    <option value="tfa_2497" id="tfa_2497" class="">Russian Federation</option>
                                    <option value="tfa_2498" id="tfa_2498" class="">Rwanda</option>
                                    <option value="tfa_2499" id="tfa_2499" class="">Saint Helena</option>
                                    <option value="tfa_2500" id="tfa_2500" class="">Saint Kitts &amp; Nevis</option>
                                    <option value="tfa_2501" id="tfa_2501" class="">Saint Lucia</option>
                                    <option value="tfa_2502" id="tfa_2502" class="">Saint-Barthelemy</option>
                                    <option value="tfa_2503" id="tfa_2503" class="">Saint-Martin(French)</option>
                                    <option value="tfa_2504" id="tfa_2504" class="">Samoa</option>
                                    <option value="tfa_2505" id="tfa_2505" class="">San Marino</option>
                                    <option value="tfa_2506" id="tfa_2506" class="">Sao Tome &amp; Principe</option>
                                    <option value="tfa_2507" id="tfa_2507" class="">Saudi Arabia</option>
                                    <option value="tfa_2508" id="tfa_2508" class="">Senegal</option>
                                    <option value="tfa_2509" id="tfa_2509" class="">Serbia</option>
                                    <option value="tfa_2510" id="tfa_2510" class="">Seychelles</option>
                                    <option value="tfa_2511" id="tfa_2511" class="">Sierra Leone</option>
                                    <option value="tfa_2512" id="tfa_2512" class="">Singapore</option>
                                    <option value="tfa_2513" id="tfa_2513" class="">Slovakia</option>
                                    <option value="tfa_2514" id="tfa_2514" class="">Slovenia</option>
                                    <option value="tfa_2515" id="tfa_2515" class="">Solomon Islands</option>
                                    <option value="tfa_2516" id="tfa_2516" class="">Somalia</option>
                                    <option value="tfa_2517" id="tfa_2517" class="">South Africa</option>
                                    <option value="tfa_2518" id="tfa_2518" class="">South Korea</option>
                                    <option value="tfa_2519" id="tfa_2519" class="">South Sudan</option>
                                    <option value="tfa_2520" id="tfa_2520" class="">Spain</option>
                                    <option value="tfa_2521" id="tfa_2521" class="">Sri Lanka</option>
                                    <option value="tfa_2522" id="tfa_2522" class="">St Pierre &amp; Miquelon</option>
                                    <option value="tfa_2523" id="tfa_2523" class="">St Vinc &amp; Grenadine</option>
                                    <option value="tfa_2524" id="tfa_2524" class="">Sudan</option>
                                    <option value="tfa_2525" id="tfa_2525" class="">Suriname</option>
                                    <option value="tfa_2526" id="tfa_2526" class="">Svalbard &amp; Jan Mayen</option>
                                    <option value="tfa_2527" id="tfa_2527" class="">Swaziland</option>
                                    <option value="tfa_2528" id="tfa_2528" class="">Sweden</option>
                                    <option value="tfa_2529" id="tfa_2529" class="">Switzerland</option>
                                    <option value="tfa_2530" id="tfa_2530" class="">Syria</option>
                                    <option value="tfa_2531" id="tfa_2531" class="">Taiwan</option>
                                    <option value="tfa_2532" id="tfa_2532" class="">Tajikistan</option>
                                    <option value="tfa_2533" id="tfa_2533" class="">Tanzania</option>
                                    <option value="tfa_2534" id="tfa_2534" class="">Thailand</option>
                                    <option value="tfa_2535" id="tfa_2535" class="">Togo</option>
                                    <option value="tfa_2536" id="tfa_2536" class="">Tokelau</option>
                                    <option value="tfa_2537" id="tfa_2537" class="">Tonga</option>
                                    <option value="tfa_2538" id="tfa_2538" class="">Trinidad and Tobago</option>
                                    <option value="tfa_2539" id="tfa_2539" class="">Tunisia</option>
                                    <option value="tfa_2540" id="tfa_2540" class="">Turkey</option>
                                    <option value="tfa_2541" id="tfa_2541" class="">Turkmenistan</option>
                                    <option value="tfa_2542" id="tfa_2542" class="">Turks &amp; Caicos Isle</option>
                                    <option value="tfa_2543" id="tfa_2543" class="">Tuvalu</option>
                                    <option value="tfa_2544" id="tfa_2544" class="">Uganda</option>
                                    <option value="tfa_2545" id="tfa_2545" class="">Ukraine</option>
                                    <option value="tfa_2546" id="tfa_2546" class="">United Arab Emirates</option>
                                    <option value="tfa_2547" id="tfa_2547" class="">United Kingdom</option>
                                    <option value="tfa_2548" id="tfa_2548" class="">Uruguay</option>
                                    <option value="tfa_2549" id="tfa_2549" class="">US Virgin Islands</option>
                                    <option value="tfa_2550" id="tfa_2550" class="">USA</option>
                                    <option value="tfa_2551" id="tfa_2551" class="">Uzbekistan</option>
                                    <option value="tfa_2552" id="tfa_2552" class="">Vanuatu</option>
                                    <option value="tfa_2553" id="tfa_2553" class="">Venezuela</option>
                                    <option value="tfa_2554" id="tfa_2554" class="">Viet Nam</option>
                                    <option value="tfa_2555" id="tfa_2555" class="">Wallis &amp; Futuna Isle</option>
                                    <option value="tfa_2556" id="tfa_2556" class="">Western Sahara</option>
                                    <option value="tfa_2557" id="tfa_2557" class="">Yemen</option>
                                    <option value="tfa_2559" id="tfa_2559" class="">Zambia</option>
                                    <option value="tfa_2560" id="tfa_2560" class="">Zimbabwe</option></select></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_56-D">
                                    <label id="tfa_56-L" class="label preField reqMark" for="tfa_56">Which city are you submitting this online application from?</label><br><div class="inputWrapper"><input type="text" id="tfa_56" name="tfa_56" value="" aria-required="true" title="Which city are you submitting this online application from?" class="required"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_5482-D" role="group" aria-labelledby="tfa_5482-L" data-tfa-labelledby="-L tfa_5482-L">
                                    <label id="tfa_5482-L" class="label preField reqMark" aria-label="Receiving Information   required">Receiving Information</label><br><div class="inputWrapper"><span id="tfa_5482" class="choices vertical required"><span class="oneChoice"><input type="checkbox" value="tfa_5483" class="" id="tfa_5483" name="tfa_5483" aria-labelledby="tfa_5483-L" data-tfa-labelledby="tfa_5482-L tfa_5483-L"><label class="label postField" id="tfa_5483-L" for="tfa_5483"><span class="input-checkbox-faux"></span>I agree to receiving emails and SMS from FIC regarding information, updates and news about the FIC program and SFU. I can withdraw my consent at any time</label></span></span></div>
                                    </div>
                                    </fieldset>
                                    </div></div>
                                    <div class="wfPage" id="wfPgIndex-6"><div class="section pageSection" id="tfa_5345">
                                    <h4 id="tfa_5345-T">Conditions, Disclaimer and Declaration</h4>
                                    <fieldset id="tfa_5344" class="section">
                                    <legend id="tfa_5344-L"><b>Conditions of Enrolment</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_73-D" role="group" aria-labelledby="tfa_73-L" data-tfa-labelledby="-L tfa_73-L">
                                    <label id="tfa_73-L" class="label preField reqMark" aria-label="Check that you have   required">Check that you have</label><br><div class="inputWrapper"><span id="tfa_73" class="choices vertical required"><span class="oneChoice"><input type="checkbox" value="tfa_2822" class="" id="tfa_2822" name="tfa_2822" aria-labelledby="tfa_2822-L" data-tfa-labelledby="tfa_73-L tfa_2822-L"><label class="label postField" id="tfa_2822-L" for="tfa_2822"><span class="input-checkbox-faux"></span><span style="color: rgb(69, 69, 69);">Read and understood the Conditions of Enrolment including the Fee Refund Policy, within the brochure or on the website at https://www.fraseric.ca/conditions-of-enrolment</span></label></span></span></div>
                                    </div>
                                    </fieldset>
                                    <fieldset id="tfa_5346" class="section">
                                    <legend id="tfa_5346-L"><b style="color: rgb(69, 69, 69);">For Applicants 18 Years Old or Younger</b></legend>
                                    <div class="oneField field-container-D    " id="tfa_57-D" role="radiogroup" aria-labelledby="tfa_57-L" data-tfa-labelledby="-L tfa_57-L">
                                    <label id="tfa_57-L" class="label preField reqMark">Are you currently 18 years or younger?</label><br><div class="inputWrapper"><span id="tfa_57" class="choices  required"><span class="oneChoice"><input type="radio" value="tfa_2561" class="" id="tfa_2561" name="tfa_57" aria-required="true" data-conditionals="#tfa_5478" aria-labelledby="tfa_2561-L" data-tfa-labelledby="tfa_57-L tfa_2561-L"><label class="label postField" id="tfa_2561-L" for="tfa_2561"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_2562" class="" id="tfa_2562" name="tfa_57" aria-required="true" aria-labelledby="tfa_2562-L" data-tfa-labelledby="tfa_57-L tfa_2562-L"><label class="label postField" id="tfa_2562-L" for="tfa_2562"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    <fieldset id="tfa_5478" class="section" data-condition="`#tfa_2561`">
                                    <legend id="tfa_5478-L"><b>Agreement and Permission</b></legend>
                                    <div class="htmlSection" id="tfa_5479"><div class="htmlContent" id="tfa_5479-HTML">(For the parent/guardian) As the parent/guardian of the applicant, do you declare that the applicant's submitted details, to the best of your ability, are correct?</div></div>
                                    <div class="oneField field-container-D    " id="tfa_58-D" role="group" aria-labelledby="tfa_58-L" data-tfa-labelledby="-L tfa_58-L">
                                    <label id="tfa_58-L" class="label preField reqMark" aria-label="Agree to the parent/guardian declaration?   required">Agree to the parent/guardian declaration?</label><br><div class="inputWrapper"><span id="tfa_58" class="choices  required"><span class="oneChoice"><input type="checkbox" value="tfa_2563" class="" id="tfa_2563" name="tfa_2563" aria-labelledby="tfa_2563-L" data-tfa-labelledby="tfa_58-L tfa_2563-L"><label class="label postField" id="tfa_2563-L" for="tfa_2563"><span class="input-checkbox-faux"></span>As the parent/guardian of the applicant, I agree to the above declaration</label></span></span></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_59-D" role="radiogroup" aria-labelledby="tfa_59-L" data-tfa-labelledby="-L tfa_59-L">
                                    <label id="tfa_59-L" class="label preField reqMark">Do you grant us permission to provide your parent(s) or guardian(s), when requested, with any information pertaining to your application to study, ongoing academic progress, results and attendance?</label><br><div class="inputWrapper"><span id="tfa_59" class="choices  required"><span class="oneChoice"><input type="radio" value="tfa_2564" class="" id="tfa_2564" name="tfa_59" aria-required="true" aria-labelledby="tfa_2564-L" data-tfa-labelledby="tfa_59-L tfa_2564-L"><label class="label postField" id="tfa_2564-L" for="tfa_2564"><span class="input-radio-faux"></span>Yes</label></span><span class="oneChoice"><input type="radio" value="tfa_2565" class="" id="tfa_2565" name="tfa_59" aria-required="true" aria-labelledby="tfa_2565-L" data-tfa-labelledby="tfa_59-L tfa_2565-L"><label class="label postField" id="tfa_2565-L" for="tfa_2565"><span class="input-radio-faux"></span>No</label></span></span></div>
                                    </div>
                                    </fieldset>
                                    </fieldset>
                                    <fieldset id="tfa_5347" class="section">
                                    <legend id="tfa_5347-L"><b>Applicant Declaration</b></legend>
                                    <div class="htmlSection" id="tfa_5480"><div class="htmlContent" id="tfa_5480-HTML"><p>I consent to FIC collecting, storing, and using my personal information in the manner and for the purposes set out in FIC’s Privacy Policy, which includes admission, registration, graduation and other activities related to FIC’s programs, and communication with me regarding my program, courses, campus and student activities and opportunities and the programs and services offered by FIC.</p>

                                    <p>I hereby consent to FIC disclosing my personal information to third parties in the manner set  out in FIC’s Privacy Policy, which includes:</p>

                                    <ul>
                                        <li>disclosure to enrolment agents acting on my behalf</li>
                                        <li>disclosure to SFU to process my application(s) to transfer from FIC to SFU</li>
                                        <li>disclosure to the SFU Residence and Housing Department in support of my application for student housing at SFU</li>
                                        <li>disclosure to Navitas Pty Ltd and its affiliates for the purpose of communication regarding programs and services offered by Navitas Pty Ltd and/or its affiliates</li>
                                    </ul>

                                    <p>I acknowledge that if I do not consent to the collection, storage, use and/or disclosure of my personal information, I may withdraw my consent by written notice to FIC (see the FIC Privacy Policy for contact information), provided that despite such notice, FIC will be permitted to collect, use and disclose personal information in accordance with the  applicable legislation.</p>

                                    <p>I authorize FIC and SFU Residence and Housing Department to share any information pertaining to my application, welfare or status while I am a student with FIC.</p>

                                    <p>I authorize FIC to obtain official records from any other educational institution attended I have attended.</p><p>I consent to FIC and its affiliates screening me and any persons whose details I have disclosed in this application through the Refinitiv World-Check service. Refinitiv is a third party service provider to FIC. You can read <a target="_blank" href="https://www.refinitiv.com/en/products/world-check-kyc-screening/privacy-statement/">privacy statement</a> in relation to this service.</p>

                                    <p>I declare that the information I have supplied on this form is, to the best of my understanding and belief, complete and correct. I understand that giving of false or incomplete information may lead to the refusal of my application or cancellation of enrolment.</p>

                                    <p>I have read and understood the published course information in this brochure or on the FIC website and I have sufficient information about FIC to enrol.</p>

                                    <p>I understand that fees may increase. I accept liability for payment of all fees as explained in this brochure or on the FIC website, and I agree to abide by the Fee Refund Policy and Withdrawal Policy which is current at the time of my studies at FIC. I have also read the section in this brochure or website relating to costs of living and I understand that living expenses in Canada may be higher than in my own country and I confirm that I am able to meet these costs.</p>

                                    <p>I understand that after I commence my FIC program, I must complete a  minimum of 30 units before I am eligible to transfer for SFU.</p>

                                    <p>I agree to receiving emails and SMS from FIC regarding information, updates and news about the FIC program and SFU. I can withdraw my consent at any time.</p></div></div>
                                    <div class="oneField field-container-D    " id="tfa_60-D" role="group" aria-labelledby="tfa_60-L" data-tfa-labelledby="-L tfa_60-L">
                                    <label id="tfa_60-L" class="label preField reqMark" aria-label="Agree to the applicant declaration?   required">Agree to the applicant declaration?</label><br><div class="inputWrapper"><span id="tfa_60" class="choices  required"><span class="oneChoice"><input type="checkbox" value="tfa_2566" class="" id="tfa_2566" name="tfa_2566" aria-labelledby="tfa_2566-L" data-tfa-labelledby="tfa_60-L tfa_2566-L"><label class="label postField" id="tfa_2566-L" for="tfa_2566"><span class="input-checkbox-faux"></span>As the applicant of this online application, I agree to the applicant declaration</label></span></span></div>
                                    </div>
                                    </fieldset>
                                    <div class="oneField field-container-D    " id="tfa_74-D">
                                    <label id="tfa_74-L" class="label preField " for="tfa_74">Respondent Email</label><br><div class="inputWrapper"><input type="text" id="tfa_74" name="tfa_74" value="" readonly title="Respondent Email" class="validate-email formula=if(agentEmail){agentEmail}else{applicantEmail} readonly"></div>
                                    </div>
                                    <div class="oneField field-container-D    " id="tfa_177-D">
                                    <label id="tfa_177-L" class="label preField " for="tfa_177">Leave this Field Blank</label><br><div class="inputWrapper"><input type="text" id="tfa_177" name="tfa_177" value="" title="Leave this Field Blank" class=""></div>
                                    </div>
                                    </div></div>
                                    <div class="actions" id="335853-A"><input type="submit" data-label="Submit" class="primaryAction" id="submit_button" value="Submit"></div>
                                    <div style="clear:both"></div>
                                    <input type="hidden" value="335853" name="tfa_dbFormId" id="tfa_dbFormId"><input type="hidden" value="" name="tfa_dbResponseId" id="tfa_dbResponseId"><input type="hidden" value="5656b4c6b39d09db4fec87bac367a5f2" name="tfa_dbControl" id="tfa_dbControl"><input type="hidden" value="" name="tfa_dbWorkflowSessionUuid" id="tfa_dbWorkflowSessionUuid"><input type="hidden" value="113" name="tfa_dbVersionId" id="tfa_dbVersionId"><input type="hidden" value="" name="tfa_switchedoff" id="tfa_switchedoff">
                                    </form>
                              </div>
                           </div>
                        </div>
                        <!-- End of Online Application -->
                        <div style="clear: both;">&nbsp;</div>
                     </div>
                  </div>
                  <div style="clear: both;">&nbsp;</div>
               </div>
            </section>
         </div>
      </div>
   </div>
   <?php endwhile; ?>
</main>
<!-- End Main -->
<p>
   <script type="text/javascript" src="https://www.umd.navitas.com/js/jquery.min.js"></script>
   <script>// <![CDATA[
      var bound_inputs = new Array();
      var isOver = false;
      $("#Online-Application").on('click', function() {
          $('input:file').each(function() {
              if (-1 === $.inArray(this, bound_inputs)) {
                  bound_inputs.push(this);
                  $(this).bind('change', function() {
                      totalsize();
                  });
              }
          });
      });
      
      $(document).ready(function() {
          $('.primaryAction').on('click', function() {
              totalsize();
              if (isOver === true) {
                  return false;
              }
      
          });
      });
      
      function totalsize() {
          var total = 0;
          isOver = false;
          $('input[type="file"]').each(function() {
              if (this.files[0]) {
                  if (this.files[0].size == 0 || this.files[0].size < 50) {
                      $(this).val('');
                      $(this).replaceWith($(this).clone());
                      alert('The attachments that you are trying to submit is invalid');
                  } else {
                      total += this.files[0].size;
                      if (total > 25000000) {
                          alert('Your attachments have exceeded the 25MB file size limit. Please reduce the file size of your attachments.');
                          isOver = true;
                      }
                  }
              }
          });
      }
      
      // validation agent and student email should not be same
      $(document).on("change", "#tfa_13", function(e) {
          var agentemail = $('#tfa_67').val();
          var studentemail = $('#tfa_13').val();
          if (agentemail == studentemail) {
              alert('Agent and Student email id should not be same.');
          }
      });
      
      // remove passed intake month
      $('#tfa_72').on('change', function() {
          var selectedyear = $("#tfa_72 option:selected").text();
          $('#tfa_71').val('').prop('selected', true);
          var m = new Date().getMonth() + 1;
          if (min1 == selectedyear) {
              if (m > 1) {
                  $("#tfa_5395").attr('disabled', 'disabled').hide();
              } else {}
              
              if (m > 5) {
                  $("#tfa_5396").attr('disabled', 'disabled').hide();
              } else {}
      
              if (m > 9) {
      
                  $("#tfa_5397").attr('disabled', 'disabled').hide();
              } else {}
      
          } else {
      
              $("#tfa_5395").removeAttr('disabled').show();
              $("#tfa_5396").removeAttr('disabled').show();
              $("#tfa_5397").removeAttr('disabled').show();
      
          }
      
      });
      // ]]>
   </script>
</p>
<?php
   get_footer();
   
   ?>