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
                    <?php
						//Set stream options
						$context = stream_context_create(array('http' => array('ignore_errors' => true)));
						if(!isset($_GET['tfa_next'])) {
							$qs = ' ';
							if(isset($_SERVER['QUERY_STRING']) && !empty($_SERVER['QUERY_STRING'])){
								$qs='?'.$_SERVER['QUERY_STRING'];
							};
							echo file_get_contents('https://navitas.tfaforms.net/rest/forms/view/436801'.$qs);
						} else {
							echo file_get_contents('https://app.formassembly.com/rest'.$_GET['tfa_next'],false,$context);
						}
					?>
                    
                     
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
<?php
   get_footer();
   
   ?>