<?php 
get_header()
?>
<main>
    <div class="container marketing">
        <h1></h1>
        <hr>
        <?php 
            $i=1;
            while(have_posts()) :the_post()
        ?>
         <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">
              <?php the_title() ?>
            </h2>
            <p class="lead"><?php the_content() ?></p>
          </div>
          <div class="col-md-5">
            <?php the_post_thumbnail([500,800]) ?>
          </div>
        </div>
      </a>

    <?php endwhile; ?>

    </div>