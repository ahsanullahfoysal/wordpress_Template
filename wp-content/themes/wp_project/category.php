<?php
get_header();

?>
<main>
<div class="container marketing">
    <div class="row">
        <?php
            while (have_posts()): the_post();
                ?>
                <div class="col-md-6 ">
                    <a href="<?php the_permalink() ?>">
                        <div class="box ">
                           <h1>  <?php single_term_title() ?></h1>
                            <div class="img-box">
                                <!-- <img src="images/s1.png" alt=""> -->
                                <?php the_post_thumbnail([300,300]) ?>
                            </div>
                            <div class="detail-box">
                                <h5>
                                    <?php the_title() ?>
                                </h5>
                                <p>
                                    <?php the_content() ?>
                                </p>
                            
                            </div>
                        </div>
                    </a>
                </div>
            <?php
            endwhile;
      
        ?>

    </div>
</div>

    <?php
    get_footer();