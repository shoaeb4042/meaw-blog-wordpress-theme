<div class="col-md-4">



<!-- Search Widget -->
<div class="card my-4">
        <div class="title-outer">
          <h3 class=" title">Search</h3>
        </div>
        <div class="card-body">

          <form action="<?php echo get_site_url('/'); ?>">
          <div class="input-group">
            <input type="text" class="form-control" name="s" placeholder="Search for..">
            <span class="input-group-append">
              <button class="btn btn-secondary" type="submit">Go!</button>
            </span>
          </div>
          </form>
        </div>
      </div>



      <?php dynamic_sidebar( 'sidebar1' ); ?>

  
      <!-- Side Widget -->
        <div class="card my-4">
        <div class="title-outer">
          <h3 class="title"> Popular Posts</h3>
        </div>


        <div class="tab-post-list">


          <?php 
          
          $args = array( 
        
            'post_status' => 'publish',		
            'orderby' => 'comment_count',		
            'posts_per_page' => 5,
          );
          $popular_posts = new WP_Query( $args );

          while ( $popular_posts->have_posts() ) : $popular_posts->the_post();

          
          
          
          ?>

          <div class="tab-post-list-wrap clearfix">
            <div class="tab-post-thumb pull-left">
              <figure>
                <a href="<?php the_permalink() ;?>">
                  <img   src="<?php the_post_thumbnail_url('thumbnail') ;?>" alt="Post thumb">
                </a>
              </figure>
            </div>
            <div class="tab-post-title">
              <h6><a href="<?php the_permalink() ;?>"><?php the_title() ;?></a>
              </h6>
              <span><?php echo get_the_date(); ?></span>
            </div>
          </div>


          <?php 

        endwhile;
          
          ?>
          
         
        </div>





      </div>

    </div>