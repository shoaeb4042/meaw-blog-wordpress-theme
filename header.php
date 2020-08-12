<!DOCTYPE html>
<html lang="en">

<head>
<title>
    <?php if(is_front_page() || is_home()){
        echo get_bloginfo('name').' | '.get_bloginfo('description');
    } else{?>
       <?php wp_title('|',true,'right'); ?> <?php bloginfo('name'); ?>
    <?php }?>
</title>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  

<style>

#wpadminbar{
    display:none;
}
</style>

  <?php 
     wp_head();
  ?>
  

</head>

<body>


  

  <!-- breaking news Bar -->

  <header class="bg-white">
    
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg shadow fixed-top   menubar">
      <div class="container">
        <a class="navbar-brand" href="<?php echo get_site_url(); ?>"> 
            
                         <?php

                         if ( function_exists( 'the_custom_logo' ) ) {
                            the_custom_logo();
                          }
                          else{
                             echo "logo";

                          }
						?>
        
       </a>


        <button class="navbar-toggler bg-light" type="button" data-toggle="collapse" data-target="#navbarResponsive"
          aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars" aria-hidden="true"></i>
        </button>


                        <?php

                wp_nav_menu( array(
                    'theme_location'  => 'topmenu',
                    'depth'           => 2, // 1 = no dropdowns, 2 = with dropdowns.
                    'container'       => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id'    => 'navbarResponsive',
                    'menu_class'      => 'navbar-nav ml-auto',
                    'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'          => new WP_Bootstrap_Navwalker(),
                ) );



                ?>
       
      </div>
    </nav>

  </header>