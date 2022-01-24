<?php
   /**
    * The template for displaying chat with the FIC family page.
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
          the_post(); 
      ?>
   <div class="container">
   <div class="row py-5">
      <div class="col-md-12">
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
         <section class="chat-container">
            <div class="container">
               <div class="row">
                  <div class="col">
                     <!-- TAP Widget Code Start -->
                     <iframe id='tap-iframe-widget' src='' style='border:none' width='100%' height='700' scrolling='no' data-type='full-widget' data-university-id='506'></iframe>
                     <script src='https://cdn.theaccessplatform.com/widget.js'></script>
                     <!-- TAP Widget Code End -->
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