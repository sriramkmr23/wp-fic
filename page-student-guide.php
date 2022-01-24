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
                                <p>Download your copy of the ARU College student guide to find out why studying with ARU College at ARU is the right study choice for you.</p>
                                <p>All fields are required.</p>
							</div>
						</div>
					</div>
                </section>

                <section class="application-form content">
                    <div class="container">
                        <div class="row">
                            <div class="col">
	                            <script src="//app-sn01.marketo.com/js/forms2/js/forms2.js"></script>
	                            <form id="mktoForm_37724" class="form2"></form>
                                <script>// <![CDATA[
                                MktoForms2.loadForm("//app-sn01.marketo.com", "837-CGY-335", 37724, function(form) {
                                    $('select').change(function (){
                                        $("#mktoForm_37724").find("*").attr("style", "");
                                        $("#mktoForm_37724").attr("style","");
                                        $('link[id=mktoForms2BaseStyle]')[0].disabled=true;
                                        $('link[id=mktoForms2ThemeStyle]')[0].disabled=true;
                                        $('.mktoAsterix, .mktoCheckboxList label').empty(); //remove marketo form default asterix
                                    }).change();
                                    $('.mktoFormRow').addClass('row');
                                    $('.mktoFormCol').addClass('col');
                                    $( "label[for='Privacy_Policy_Consent__c_lead'],label[for='Mail_Contact_Consent__c'],label[for='Email_Contact_Consent__c'],label[for='Phone_Contact_Consent__c']" ).next().addClass('d-none');
                                    $( "label[for='Privacy_Policy_Consent__c_lead'],label[for='Mail_Contact_Consent__c'],label[for='Email_Contact_Consent__c'],label[for='Phone_Contact_Consent__c']" ).next().next().addClass('d-inline-block float-left');
                                    $('.mktoButton').addClass('btn btn-primary');
                                    form.onSuccess(function(values, followUpUrl){
                                        //Take the lead to a different page on successful submit, ignoring the form's configured followUpUrl.
                                        location.href = "/about/student-guide-download/";
                                        //return false to prevent the submission handler continuing with its own processing
                                        return false;
                                    });
                                });
                                // ]]></script>
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