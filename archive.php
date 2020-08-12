<?php
get_header(); ?>



    <div class="container">

    <div class="row">
    <div class="col-lg-8 postsection">

    <?php 
    $term = get_queried_object();


    if ( is_category( ) ){
        ?>


        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><?php echo $title = single_cat_title( '', false ); ?></li>
          </ol>
        </nav>
        <br>
        <div class="row">

        <?php 

            $args = array(
                'post_type' => array('post'),
                'category_name' => $term->slug,
                'orderby' => 'date',
                'order'   => 'DESC',
                'posts_per_page' => 20,

            );

            $my_query = new WP_Query($args);
            
                while ($my_query->have_posts()) : $my_query->the_post();
        
        ?>
        
                <div class="col-md-6  col-sm-12 blog">

                <a href="<?php the_permalink() ?>">

                <img src="<?php the_post_thumbnail_url('medium') ?>" alt="">
                <span class="tag-top">
                    <i class="fa fa-tag" aria-hidden="true"></i><?php echo $term->name; ?></span>
                <p><?php the_title() ?></p>
                </a>
                </div>











        <?php
        endwhile;
        echo '</div>';
    }
    
    if ( is_tag() )
   {
       ?>


  
    
   <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo get_site_url(); ?>">Home</a></li>
            <li class="breadcrumb-item"><?php echo $title = single_tag_title( '', false ); ?></li>
          </ol>
        </nav>
        <br>
        <div class="row">

        <?php 

            $args = array(
                'post_type' => array('post'),
                'tag' => $term->slug,
                'orderby' => 'date',
                'order'   => 'DESC',
                'posts_per_page' => 20,

            );

            $my_query = new WP_Query($args);
            
                while ($my_query->have_posts()) : $my_query->the_post();
        
        ?>
        
                <div class="col-md-6  col-sm-12 blog">

                <a href="<?php the_permalink() ?>">

                <img src="<?php the_post_thumbnail_url('medium') ?>" alt="">
                <span class="tag-top">
                    <i class="fa fa-tag" aria-hidden="true"></i><?php echo $term->name; ?></span>
                <p><?php the_title() ?></p>
                </a>
                </div>











        <?php
        endwhile;

        echo '</div>';
    }
    ?>




    </div>




                        <?php
						
						get_template_part( 'sidebar', 'sidebar' );
						
						?>

    </div>
    <!-- /.row -->

  </div>
<?php get_footer(); ?>