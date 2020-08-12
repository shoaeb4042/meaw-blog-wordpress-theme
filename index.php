<?php
get_header();


?>



<div style=" border-bottom: 1px solid rgb(221, 211, 211);" class="container mt-2">
  <div class="row">
    <div class="col-md-12">


      <div class="bn-breaking-news" id="newsTicker5">
        <div class="bn-label"><i class="fa fa-flash"></i> ব্রেকিং নিউজ</div>
        <div class="bn-news">
          <ul>
            <?php
            if (have_posts()) :
              while (have_posts()) : the_post(); ?>

                <li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>

            <?php
              endwhile;
            endif;
            ?>


          </ul>
        </div>
        <div class="bn-controls">
          <button><span class="bn-arrow bn-prev"></span></button>
          <button><span class="bn-action"></span></button>
          <button><span class="bn-arrow bn-next"></span></button>
        </div>
      </div>

    </div>
  </div>
</div>



<!-- Page Content -->
<div class="container">

  <div class="row">


    <!-- Blog Entries Column -->
    <div class="col-md-8">

      <div id="carouselExampleControls" class="col-md-12 carousel slide" data-ride="carousel">
        <div class="carousel-inner slider">


        <?php
            $i=0;
						$loop = new WP_Query(array(
              'post_type' => 'post', 
              'orderby' => 'date',
              'category_name' => 'বিনোদন',
              'order'   => 'DESC', 
              'posts_per_page' => 3
						));

            while ($loop->have_posts()) : $loop->the_post(); 
            

            ?>

          <div class="carousel-item <?php   if($i==0) echo 'active';?>" onclick="location.href = '<?php echo get_permalink() ?>';">

            <div class="card bg-dark text-white border-0">
              <img class="card-img crop" src="<?php the_post_thumbnail_url('medium') ?>" alt="Card image">
              <div class="card-img-overlay slidercontent">
                <h5 class="card-title"><?php the_title() ?></h5>

                <p class="card-text btn  btn-sm btn-success">বিনোদন</p>
              </div>
            </div>
          </div>

          <?php $i++; endwhile; ?>

          

        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>









      <!-- type1 -->



      <div class="title-outer">
        <h3 class="title"> লাইফ-স্টাইল</h3>
      </div>


      <div class="row sections">


          <?php
						$loop = new WP_Query(array(
              'post_type' => 'post', 
              'orderby' => 'date',
              'category_name' => 'life-style',
              'order'   => 'DESC', 
              'posts_per_page' => 2
						));

            while ($loop->have_posts()) : $loop->the_post(); 
            

            ?>


        

        <div class="col-md-6  col-sm-12 blog">

          <a href="<?php the_permalink() ?>">

            <img src="<?php the_post_thumbnail_url('medium') ?>" alt="">
            <span class="tag-top">
              <i class="fa fa-tag" aria-hidden="true"></i> লাইফ-স্টাইল<?php  //echo get_the_category(get_the_ID() )[0]->name ?></span>
            <p><?php the_title() ?></p>
          </a>
        </div>
        
        

       
        <?php endwhile; ?>



      </div>


      <div class="title-outer">
        <h3 class=" title"> Latest Blogs</h3>
      </div>


      <div class="row sections">

        <?php
        if (have_posts()) :
          while (have_posts()) : the_post(); ?>


            <div class="col-sm-12 col-md-6">
              <div class="blog-grid">
                <div class="blog-img">
                  <div class="date " > <span><?php echo get_the_date('d'); ?></span> <label><?php echo strtoupper(get_the_date('F')); ?></label></div> 
                  <a href="<?php the_permalink(); ?>"> <img src="<?php the_post_thumbnail_url( 'medium' ) ?>" title="" alt=""> </a>
                </div>
                <div class="blog-info">
                  <h5><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h5>

                  <div class="btn-bar"> <a href="<?php the_permalink() ?>" class="px-btn-arrow btn btn-outline-primary"> <span>Read More</span>
                      <i class="fa fa-arrow-right" aria-hidden="true"></i>
                    </a></div>
                </div>
              </div>
            </div>

        <?php
          endwhile;
        endif;
        ?>




      </div>

      <style>

        .page-item a{
         
         margin: 10px;
         padding: 8px;
         border-radius: 5px;
         color: white!important;
         background-color: #EA0B1F;
         font-weight:600;
        }
        .page-item a:hover{
         
        text-decoration: none;
        }

      </style>
       <br>
      <!-- Pagination -->
      <ul class="pagination justify-content-center mb-4">
        <li class="page-item">
         <?php previous_posts_link( '<< Previous',0 ); ?>
        </li>
        <li class="page-item">
        <?php next_posts_link( 'Next >>',0 ); 
        ?>


        </li>
      </ul>

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