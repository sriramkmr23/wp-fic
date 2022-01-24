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
            <section class="application-form content">
               <div class="container">
                  <div class="row">
                     <div class="col">
                        <form id="mktoForm_12467" class="form2"></form>
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
<script src="//au-sn01.marketo.com/js/forms2/js/forms2.js"></script>
<script>
   MktoForms2.loadForm("//au-sn01.marketo.com", "837-CGY-335", 12467, function(form) {
   	$('select').change(function() {
   		$("#mktoForm_12467").find("*").attr("style", "");
   		$("#mktoForm_12467").attr("style", "");
   		$('link[id=mktoForms2BaseStyle]')[0].disabled = true;
   		$('link[id=mktoForms2ThemeStyle]')[0].disabled = true;
   		$('.mktoAsterix, .mktoCheckboxList label').empty(); //remove marketo form default asterix
   	}).change();
   	$('.mktoFormRow').addClass('row');
   	$('.mktoFormCol').addClass('col');
   	$("label[for='Privacy_Policy_Consent__c_lead'],label[for='Mail_Contact_Consent__c'],label[for='Email_Contact_Consent__c'],label[for='Phone_Contact_Consent__c']").next().addClass('d-none');
   	$("label[for='Privacy_Policy_Consent__c_lead'],label[for='Mail_Contact_Consent__c'],label[for='Email_Contact_Consent__c'],label[for='Phone_Contact_Consent__c']").next().next().addClass('d-inline-block float-left');
   	$('.mktoButton').addClass('btn btn-primary');
   	form.onSuccess(function(values, followUpUrl) {
   		//Take the lead to a different page on successful submit, ignoring the form's configured followUpUrl.
   		location.href = "/future-students/download-student-guide-chinese-thank-you/";
   		//return false to prevent the submission handler continuing with its own processing
   		return false;
   	});
   });
</script>
<?php
   get_footer();
?>