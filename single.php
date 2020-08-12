<?php
get_header();


?>
  <!-- Page Content -->
  <div class="container">

    <div class="row">


                      <?php
                    $categories = get_the_category();
 
                    if ( ! empty( $categories ) ) {
                     $catname=esc_html( $categories[0]->name );
                     $category_id = get_cat_ID($catname);
                     $category_link = get_category_link( $category_id );
                    }
                    
                    
                    ?>


      <!-- Blog singlepost Column -->

      <div class="col-lg-8 postsection">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php echo $catname; ?></li>
          </ol>
        </nav>


        <?php 
        while ( have_posts() ) :
          the_post();

         // the_content();
         
      
      
          
     
        
        
        ?>

        <!-- Title -->
        <h2 class="mt-4"><?php the_title(); ?></h2>



        <!-- Author -->
        <p class="lead">
          by
          <a href="<?php echo get_the_author_url(); ?>"><?php echo get_the_author_nickname(); ?></a>
        </p>

        <hr>

        <!-- Date/Time -->
        <div class="row d-flex"> 
        <p>&nbsp;&nbsp;&nbsp;&nbsp;<?php echo get_the_date(); ?>&nbsp;&nbsp;&nbsp;</p>

        <div  class="fb-share-button" data-href="<?php the_permalink( ); ?>" data-layout="button_count" data-size="large"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink( ); ?>" class="fb-xfbml-parse-ignore">Share</a></div>
        </div>

        <hr>


        <div>
        <?php 
        
        the_content();
        
        
        ?>

           </div>

        <hr>
        <div class="tag">
          <strong>Tags: </strong>
        <?php
       $posttags = get_the_tags();
      if ($posttags) {
  foreach($posttags as $tag) {

    ?>

   
      <div class="cat-item">
        <a href="<?php  echo get_term_link( $tag);  ?>"> <?php  echo $tag->name;  ?> </a>
      </div>

   
    

   
    <?php
  }
}
?>
 </div>
<br>
    <br>

            <?php
             endwhile;
						
              if ( comments_open() || get_comments_number() ) :
              comments_template();
                endif;
						
						?>

           <?php
						
            get_template_part( 'relatedpost', 'rpost' );
            
            //get_template_part( slug, name )
						
						?>


      </div>


      <!-- Sidebar Widgets Column -->
            <?php
						
						get_template_part( 'sidebar', 'sidebar' );
						
						?>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->
  <?php
get_footer();


?>