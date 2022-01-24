<!-- Start Campaign Image + Intro Text -->
<section class="campaign-image-text">

		<div class="campaign-hero campaign__header cover"
         	style="background-image: url(<?php echo get_field( 'campaign-image' )[ 'url' ]; ?>);
                background-repeat: no-repeat;
                background-size: cover;">

	        <div class="campaign-image">
	            <img src="<?php echo get_field( 'campaign-image' )[ 'url' ]; ?>" alt="#">
	        </div>

			<div class="container">
				<div class="campaign-body col-xl-6 col-md-12 campaign__text-left">
					<div class="campaign__card campaign__text">
						<div class="campaign__text_background">
							<?php if( !empty( get_the_title() ) ): ?>
								<h1 class=""><?php echo get_the_title(); ?></h1>
							<?php endif; ?>

							<?php if( !empty( get_field( 'campaign-text' ) ) ): ?>
								<p class="lead font-weight-normal"><?php echo get_field( 'campaign-text' ); ?></p>
							<?php endif; ?>
						</div>

						<?php if( !empty( get_field( 'campaign-button' ) ) ): ?>
							<a <?php if(get_field( 'campaign-form-include' ) == 'yes'){ echo 'data-toggle="modal" data-target="#FormModalCenter"'; } ?> href="<?php echo get_field( 'campaign-button' )[ 'url' ];?>" target="<?php echo get_field( 'campaign-button' )[ 'target' ];?>" class="btn btn-lg btn-primary"><?php echo get_field( 'campaign-button' )[ 'title' ]; ?></a>
						<?php endif; ?>

					</div>
				</div>
			</div>
		</div>

        <!-- Start Form Modal-->
        <div class="modal fade" id="FormModalCenter" tabindex="-1" role="dialog" aria-labelledby="FormModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="FormModalLongTitle">Enquire now</h2>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                    <?php if( !empty( get_field( 'campaign-form-id' ) ) ): ?>
                        <form id="mktoForm_<?php echo get_field( 'campaign-form-id' ) ?>" class="form2"></form>
                    <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Form Modal -->
</section>
<!-- Start campaign Image + Intro Text -->


<script src="//au-sn01.marketo.com/js/forms2/js/forms2.js"></script>
<script>
var form_id = <?php echo get_field( 'campaign-form-id' ) ?>;
var element_id = "#mktoForm_"+form_id;
MktoForms2.loadForm("//au-sn01.marketo.com", "837-CGY-335", form_id, function(form) {
	$('select').change(function() {
		$(element_id).find("*").attr("style", "");
		$(element_id).attr("style", "");
		$('link[id=mktoForms2BaseStyle]')[0].disabled = true;
		$('link[id=mktoForms2ThemeStyle]')[0].disabled = true;
		$('.mktoAsterix, .mktoCheckboxList label').empty(); //remove marketo form default asterix
	}).change();
	//$('.mktoFormRow').addClass('row');
	//$('.mktoFormCol').addClass('col');
	$("label[for='Privacy_Policy_Consent__c_lead'],label[for='Mail_Contact_Consent__c'],label[for='Email_Contact_Consent__c'],label[for='Phone_Contact_Consent__c']").next().addClass('d-none');
	$("label[for='Privacy_Policy_Consent__c_lead'],label[for='Mail_Contact_Consent__c'],label[for='Email_Contact_Consent__c'],label[for='Phone_Contact_Consent__c']").next().next().addClass('d-inline-block float-left');
	$('.mktoButton').addClass('btn btn-primary');
	$('.btn-primary').removeClass('mktoButton');
	form.onSuccess(function(values, followUpUrl) {
		//Hide modal
		$('#FormModalCenter').modal('hide');
		//return false;
	});
});
</script>