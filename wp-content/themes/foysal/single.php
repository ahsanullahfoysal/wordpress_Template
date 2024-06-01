<?php

get_header();
?>
<div class="container">
    <div class="row">
       
 <?php
if(have_posts()){
while(have_posts()): the_post();
?>
<div class="col-12">
  <a href="<?php the_permalink() ?>"><h1><?php the_title()?></h1></a>
  <em><?php the_date('F j, Y') ?>at<?php the_time('g:i a') ?></em><br>
  <?php  
    the_post_thumbnail('full');
      ?>
     <p><?php the_content() ?></p>
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