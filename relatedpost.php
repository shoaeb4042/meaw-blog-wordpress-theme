<h5 class="card-header">Related Post</h5>
        <div class="row">


                <?php

        $related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
        if( $related ) foreach( $related as $post ) {
        setup_postdata($post); ?>
        
          <div class="col-md-4  col-sm-12 blog">

            <a href="<?php the_permalink() ?>">

              <img src="<?php the_post_thumbnail_url( 'medium' ) ?>" alt="">
              <span class="tag-top">
                <i class="fa fa-tag" aria-hidden="true"></i> <?php echo get_the_category(get_the_ID() )[0]->name ?></span>
              <p><?php the_title(); ?></p>
            </a>
          </div>


          <?php }
        wp_reset_postdata(); ?>
         
          

        </div>