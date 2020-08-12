<?php

if ( post_password_required() )
    return;
?>
 
<div id="comments" class="comments-area">
 
    <?php if ( have_comments() ) : ?>
        <h2 class="comments-title">
            <?php
                printf( _nx( 'One thought on "%2$s"', '%1$s thoughts on "%2$s"', get_comments_number(), 'comments title', 'twentythirteen' ),
                    number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
            ?>
        </h2>
 
        <ol class="comment-list">
            <?php
                wp_list_comments( array(
                    'style'       => 'ol',
                    'short_ping'  => true,
                    'avatar_size' => 74,
                ) );
            ?>
        </ol><!-- .comment-list -->
 
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" role="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&amp;larr; Older Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &amp;rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>
 
        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>
 
    <?php endif; // have_comments() ?>
 
    <?php comment_form(); ?>
 
</div><!-- #comments -->


<style>
.comments-title{
    display:none;
}

.comment-list {
   list-style: none;
   background-color:#75737314;
   border-radius: 10px;
   padding:10px
  
}
.children{
    list-style: none;
}
.comment-list img{

   border-radius: 50%;
   padding:10px
  
}
.comment-meta a{
    font-size:12px;
    float:left;
}
.comment-reply-link{
  
    padding:5px 10px 5px 10px;
    border-radius: 5px;
    color:white!important;
    background-color:#EA0B1F;
    
}
.comment-reply-link:hover{
    text-decoration:none;
}

#respond label{
	font-size:16px;
	font-weight:700;
	float:left;
	margin-right:10px;
    
}
   #respond textarea{
    border: 1px solid black;
    height:80px;
    border-radius: 10px;
   }
   
   #respond input[type="text"]{
	   border: 1px solid black;
	   border-radius: 10px;
	   height:40px;
	   box-shadow:none;
	   
   }
   
   #respond input[type="text"]:focus { 
    outline: none !important;
    border-color: #719ECE;
    box-shadow: 0 0 10px #719ECE;
    padding:10px
}
   
   
   #respond textarea:focus { 
    outline: none !important;
    border-color: #719ECE;
    box-shadow: 0 0 10px #719ECE;
    padding:10px
}
   #respond input[type="submit"]{
    padding:5px 10px 5px 10px;
    border-radius: 5px;
    color:white!important;
    background-color:#EA0B1F;
    border:none;
   

   }


</style>