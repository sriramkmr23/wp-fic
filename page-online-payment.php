<?php
/**
 * The template for displaying arrival confirmation form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 *@package ECUColombo
 */

get_header(); ?>
<script src="https://www.google.com/recaptcha/api.js"></script>
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
                            <form id="formmoneris" action="https://www3.moneris.com/HPPDP/index.php" method="POST" name="form1"><input name="note" type="HIDDEN" value="Please forward a copy of your receipt along with your Name and Date of Birth to Fraser International College" />
                            <div class="formfieldsjp"><label for="preamount">Amount($CAD):</label> <input id="preamount" name="preamount" type="text" />
                            <div id="preamount1" class="errors">This is required Field!</div>
                            <p><small>(Please include 2 decimal places e.g. 1400.00 and do NOT include the $ sign)</small></p>
                            </div>
                            <div class="formfieldsjp"><label for="charge_total">Amount($CAD) + convenience fee (2%):</label> <input id="charge_total" name="charge_total" readonly="readonly" type="text" />
                            <div id="charge_total1" class="errors">This is required Field!</div>
                            </div>
                            <div class="formfieldsjp"><label for="cust_id">FIC Student ID:</label> <input id="cust_id" name="cust_id" type="text" />
                            <div id="cust_id1" class="errors">This is required Field!</div>
                            </div>
                            <div class="formfieldsjp"><label for="email">Email Address:</label> <input id="email" name="email" type="text" />
                            <div id="email1" class="errors">This is required Field and should be email id!</div>
                            </div>
                            <div class="formfieldsjp"><label for="email">Please perform the security check below before clicking on the SECURE PAGE button:</label>
                            <div class="g-recaptcha" data-sitekey="6Lcj_0EUAAAAAMFP9vOP3G9kHzrNOWzM_5ji5z42"></div>
                            <div id="captcha1" class="errors">Please re-check Captcha</div>
                            </div>
                            <div class="formfieldsjp"><!-- <div class="formfieldsjp-captcha"> --> <input id="Submitpayment" class="Secure-Page" name="SUBMIT" type="button" value="Secure Page" /></div>
                            <!-- </div> --></form></div>
                            <div class="pageSection">&nbsp;</div>
                            <div class="pageSection">&nbsp;</div>
                            <form id="preloadmoneris" action="https://www3.moneris.com/HPPDP/index.php" method="POST"><input id="preload_hpp_id" name="hpp_id" type="HIDDEN" value="Kc78400787" /> <input name="hpp_preload" type="hidden" /> <input id="preload_hpp_ticket" name="ticket" type="hidden" value="" /></form>
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
<script>// <![CDATA[
$(document).ready(function() {
        function postProcessing(data) {
            var json_data = data;
            if (typeof json_data.min_amount_success == 'undefined') {
                alert('Verification Error');
            } else {
                if (json_data.min_amount_success == false) {
                    $("#preamount1").css("display", "block");
                }
                if (json_data.captcha_success == false) {
                    $("#captcha1").css("display", "block");
                }
                if ((json_data.moneris_success == true) && (json_data.min_amount_success == true) && (json_data.captcha_success == true)) {
                    $("#preload_hpp_ticket").val(json_data.ticket);
                    $("#preloadmoneris").submit();
                } else {
                    grecaptcha.reset();
                }
            }
        }
        $('#preamount').keyup(function() {
            $('#charge_total').val(parseFloat($('#preamount').val() * 1.02).toFixed(2));
        });
        $("#Submitpayment").on('click', function() {
            var preamount = $.trim($("#preamount").val());
            var charge_total = $.trim($("#charge_total").val());
            var cust_id = $.trim($("#cust_id").val());
            var email = $.trim($("#email").val());
            var filter = /^[\w\-\.\+]+\@[a-zA-Z0-9\.\-]+\.[a-zA-z0-9]{2,4}$/;
            if (preamount == '' || preamount.length == '0') {
                $("#preamount1").css("display", "block");
                $("#preamount").focus();
            } else if (cust_id == '' || cust_id.length == '0') {
                $("#cust_id1").css("display", "block");
                $("#preamount1").css("display", "none");
                $("#cust_id").focus();
            } else if (email == '' || !filter.test(email)) {
                $("#email1").css("display", "block");
                $("#cust_id1").css("display", "none");
                $("#email").focus();
            } else if (grecaptcha.getResponse() == '') {        
                $("#captcha1").css("display", "block");
            } else {
                $(".errors").css("display", "none");
                var data = $('#formmoneris').serialize();
                $.ajax({
                    url: 'https://moneris.navitasnorthamerica.com/fic/verify.php',
                    type: 'POST',
                    dataType: 'JSON',
                    cache: false,
                    success: postProcessing,
                    data: data,
                    async: true,
                });
            }
        });
    });
// ]]></script>
<script>// <![CDATA[
document.head.innerHTML = document.head.innerHTML + '<style>.formfieldsjp-captcha{background:#eee; border:1px #999 solid; width:235px; border-radius:5px; padding:0 10px 10px 10px;}</style>'; document.head.innerHTML = document.head.innerHTML + '<style>.refresh{width:30px; float:right; margin:-29px 0 0 0;}</style>'; document.head.innerHTML = document.head.innerHTML + '<style>.refreshImg{width:22px; opacity: 0.5; cursor: pointer; float:left; margin:0;}</style>'; document.head.innerHTML = document.head.innerHTML + '<style>.formfieldsjp{width: 90%; padding: 10px 15px;}</style>'; document.head.innerHTML = document.head.innerHTML + '<style>.errors{color: red; display: none;}</style>'; document.head.innerHTML = document.head.innerHTML + '<style>.Secure-Page:hover{background: #b44d49 !important;}</style>'; document.head.innerHTML = document.head.innerHTML + '<style>.Reset:hover{background: #b44d49 !important;}</style>'; document.head.innerHTML = document.head.innerHTML + '<style>.Secure-Page{float: left; padding: 5px; height: 45px!important; width: 135px!important; background: #A6192E !important;font-family: "Alte Haas Grotesk", Arial, Helvetica, sans-serif; font-size: 0.85em!important; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; text-transform: uppercase; -webkit-appearance: none; color: #fff;cursor: pointer;font-weight: 700;}</style>'; document.head.innerHTML = document.head.innerHTML + '<style>.Reset{float: left; height: 45px!important; padding: 5px; width: 110px!important; background: #575A5D !important; font-family: "Alte Haas Grotesk", Arial, Helvetica, sans-serif; font-size: 0.85em!important; border:none; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; text-transform: uppercase; -webkit-appearance: none; color: #fff; cursor: pointer; font-weight: 700; margin-left:10px;}</style>'; document.head.innerHTML = document.head.innerHTML + '<style>.captchastring{color:#666; margin: 2px auto; width:80px; text-align:center; font-family:"Verveine",Arial,Helvetica,sans-serif; font-size:24px; padding:2px 0 4px 0; background-image: -webkit-repeating-radial-gradient(center center, rgba(0,0,0,.2), rgba(0,0,0,.2) 1px, transparent 1px, transparent 100%); background-image: -moz-repeating-radial-gradient(center center, rgba(0,0,0,.2), rgba(0,0,0,.2) 1px, transparent 1px, transparent 100%); background-image: -ms-repeating-radial-gradient(center center, rgba(0,0,0,.2), rgba(0,0,0,.2) 1px, transparent 1px, transparent 100%); background-image: repeating-radial-gradient(center center, rgba(0,0,0,.2), rgba(0,0,0,.2) 1px, transparent 1px, transparent 100%); -webkit-background-size: 3px 3px; -moz-background-size: 3px 3px; background-size: 3px 3px;}</style>';
// ]]></script>
