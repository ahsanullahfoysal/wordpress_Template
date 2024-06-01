<?php

get_header();
?>

<!-- nav_start -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <?php the_custom_logo() ?>
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php wp_nav_menu(
      array(
        'theme_location'=>'primary_menu',
        'menu_class' => "navbar-nav me-auto mb-2 mb-lg-0",
        "container_class" => "collapse navbar-collapse",
        "container_id" => "navbarSupportedContent",
        "walker" => new AWP_Menu_Walker()
      )
      );
      ?>
  
    
  </div>
</nav>

   
    <div class="row">
       
 <?php
if(have_posts()){
while(have_posts()): the_post();
?>
<div class="col-6">
    <h1>
  <a href="<?php the_permalink() ?>"><?php the_title()?></a>
  </h1>
  <?php  
    the_post_thumbnail(array(700,700));
      ?>
     <p><?php the_excerpt() ?></p>
     </div>
<?php

endwhile;
}else{
    echo "no post found";
}
?>
    </div>
</div>
<?php
get_footer();