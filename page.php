<?php
get_header();


?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">


      <!-- Blog singlepost Column -->
      

      <?php 
        while ( have_posts() ) :
          the_post();

         
      

     
        
        
        ?>

      <div class="col-lg-12 postsection">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><?php echo $post->post_name ?></li>
          </ol>
        </nav>


        <!-- Title -->
        <h2 class="mt-4 text-center "><?php the_title(); ?></h2>


        <hr>


        <div>
        <?php 
        
        the_content();
        
        
        ?>

           </div>

       

            <?php
             endwhile;
		?>


      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <?php
get_footer();


?>