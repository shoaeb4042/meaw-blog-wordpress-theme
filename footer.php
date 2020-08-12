<a href="#" ><i class="fa fa-arrow-up" id="btop" aria-hidden="true"></i></a>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">

      <div class='text-center'>

      <div class="btn-group footermenu" style="border: none;">

      <?php 
      $menuLocations = get_nav_menu_locations();
      $menuID = $menuLocations['bottommenu']; // Get the *primary* menu ID

      $primaryNav = wp_get_nav_menu_items($menuID); 

      foreach ( $primaryNav as $navItem ) {

       echo '<a  class="btn  text-white" href="'.$navItem->url.'" title="'.$navItem->title.'">'.$navItem->title.'</a>';
    
    }
      
      
      ?>
      </div>


                            
      </div>

      <br>

      <p class="m-0 text-center text-white">Copyright &copy; <?php echo $blog_title = get_bloginfo( 'name' ).' '.date("Y");;  ?> </p>
    </div>
    <!-- /.container -->
  </footer>

  
  <?php 
     wp_footer();
  ?>

  <script>
  jQuery(document).ready(function(){
			
      jQuery('#newsTicker5').breakingNews({
        effect: 'typography'
      });
    
    });


  </script>
  <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0&autoLogAppEvents=1" nonce="ywwET2I6"></script>



</body>

</html>