<?php
get_header();

?>
<section class="slider_section ">

  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php $slider = new WP_Query(
        [
          'post_type' => 'slider',
          'orderby' => 'title',
          'order' => 'ASC',
          'per_pa'
        ]
      );
      $i = 0;
      while ($slider->have_posts()):
        $slider->the_post();
        ?>
        <div class="carousel-item <?php if ($i == 0) {
          echo 'active';
        }
        $i += 1; ?>">
          <div class="slider_bg_box">
            <img src="images/slider-bg.jpg" alt="">
            <?php the_post_thumbnail('full') ?>
            <?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>
          </div>
          <div class="container ">
            <div class="row">
              <div class="col-md-7 ">

                <div class="detail-box">
                  <h1>
                    <?php the_title() ?>
                  </h1>
                  <p>
                    <?php the_content() ?>
                  </p>
                  <div class="btn-box">
                    <a href="" class="btn1">
                      Get A Quote
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>

    </div>
    <ol class="carousel-indicators">
      <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#customCarousel1" data-slide-to="1"></li>
      <li data-target="#customCarousel1" data-slide-to="2"></li>
    </ol>
  </div>

</section>

<!-- third Div -->
<section class="service_section layout_padding">
  <div class="service_container">
    <div class="container ">
      <div class="heading_container">
        <h2>
          Our <span>Services</span>
        </h2>
        <p>
          There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
        </p>
      </div>
      <div class="row">
        <?php
        if (have_posts()) {
          while (have_posts()):
            the_post();
            ?>
            <div class="col-md-6 ">
              <a href="<?php the_permalink() ?>">
                <div class="box ">
                  <div class="img-box">
                    <!-- <img src="images/s1.png" alt=""> -->
                    <?php the_post_thumbnail() ?>
                  </div>
                  <div class="detail-box">
                    <h5>
                      <?php the_title() ?>
                    </h5>
                    <p>
                      <?php the_excerpt() ?>
                    </p>
                    <a href="">
                      Read More
                    </a>
                  </div>
                </div>
              </a>
            </div>
            <?php
          endwhile;
        } else {
          echo "no post found";
        }
        ?>

      </div>
    </div>
  </div>
</section>

<!--end service section -->


<!-- about section -->

<section class="about_section layout_padding-bottom">
  <div class="container  ">
    <div class="row">
      <?php $about = new WP_Query(
        [
          'post_type' => 'about',
          'orderby' => 'title',
          'order' => 'ASC',
          'per_pa'
        ]
      );
      ?>
      <?php while ($about->have_posts()):
        $about->the_post(); ?>

        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                <?php the_title(); ?>
              </h2>
            </div>
            <p>
              <?php the_content(); ?>
            </p>
            <a href="">
              Read More
            </a>
          </div>
        </div>
        <div class="col-md-6 ">
          <div class="img-box">
            <?php the_post_thumbnail([300, 700]) ?>
          </div>
        </div>

      </div>
    <?php endwhile;
      wp_reset_postdata(); ?>

  </div>
</section>

<!-- carsal2 -->

<section class="slider_section ">

  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php $gallery = new WP_Query(
        [
          'post_type' => 'gallery',
          'orderby' => 'title',
          'order' => 'ASC',
          'per_pa'
        ]
      );
      $i = 0;
      while ($gallery->have_posts()):
        $gallery->the_post();
        ?>
        <div class="carousel-item <?php if ($i == 0) {
          echo 'active';
        }
        $i += 1; ?>">
          <div class="slider_bg_box">
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTMyQbYk2NuBFqBb9P9hkVBj1wzw7fXfgtBg&usqp=CAU"
              alt="">
          </div>
          <div class="container ">
            <div class="row">
              <div class="col-md-8">
                <div class="img-box">
                  <?php the_post_thumbnail([400, 400]) ?>
                </div>
              </div>
              <div class="col-md-4">
                <div class="img-box">
                  <h1>
                    <?php the_title(); ?>
                  </h1>
                  <hr>
                  <p>
                    <?php the_content(); ?>
                  </p>
                </div>
              </div>
            </div>
          </div>


        </div>
      <?php endwhile;
      wp_reset_postdata(); ?>

    </div>
    <ol class="carousel-indicators">
      <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
      <li data-target="#customCarousel1" data-slide-to="1"></li>
      <li data-target="#customCarousel1" data-slide-to="2"></li>
    </ol>
  </div>

</section>
<!--carsal2_end -->

<!-- track -->

<section class="track_section layout_padding">
  <div class="track_bg_box img-fluid">
    <img src="<?php echo esc_url(get_theme_mod('logo')) ?>" alt="" height="100px">
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="heading_container">
          <h2>
            Track Your Shipment
          </h2>
        </div>
        <p>
          <?php
          echo get_theme_mod(
            'my_copyright_text',
            __('All Rights Reserved', 'my_theme')
          );
          ?>
        </p>
        <form action="">
          <input type="text" placeholder="Enter Your Tracking Number" />
          <button type="submit">
            Track
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

<!-- carosal -->
<!-- says -->
<section class="client_section layout_padding">
  <div class="container">
    <div class="heading_container">
      <h2>
        What Says Our <span>Client</span>
      </h2>
    </div>
    <section class="slider_section ">

      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php $say = new WP_Query(
            [
              'post_type' => 'say',
              'orderby' => 'title',
              'order' => 'ASC',
              'per_pa'
            ]
          );
          $i = 0;
          while ($say->have_posts()):
            $say->the_post();
            ?>
            <div class="carousel-item <?php if ($i == 0) {
              echo 'active';
            }
            $i += 1; ?>">
              <div class="slider_bg_box">
                <img
                  src="https://www.kindpng.com/picc/m/575-5759767_client-meeting-png-transparent-png.png"
                  alt="">
              </div>
              <div class="container ">
                <div class="row">
                  <div class="col-md-8">
                    <div class="img-box">
                      <?php the_post_thumbnail([400, 400]) ?>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="img-box">
                      <h1>
                        <?php the_title(); ?>
                      </h1>
                      <hr>
                      <p>
                        <?php the_content(); ?>
                      </p>
                    </div>
                  </div>
                </div>
              </div>


            </div>
          <?php endwhile;
          wp_reset_postdata(); ?>

        </div>
        <ol class="carousel-indicators">
          <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
          <li data-target="#customCarousel1" data-slide-to="1"></li>
          <li data-target="#customCarousel1" data-slide-to="2"></li>
        </ol>
      </div>

    </section>
  </div>
</section>

<!-- contact -->

<section class="contact_section">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-4 col-md-5 offset-md-1">
        <div class="heading_container">
          <h2>
            Contact Us
          </h2>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-5 offset-md-1">
        <div class="form_container contact-form">
          <?php echo do_shortcode('[contact_form]') ?>

          <!-- <form action="">
              <div>
                <input type="text" placeholder="Your Name" />
              </div>
              <div>
                <input type="text" placeholder="Phone Number" />
              </div>
              <div>
                <input type="email" placeholder="Email" />
              </div>
              <div>
                <input type="text" class="message-box" placeholder="Message" />
              </div>
              <div class="btn_box">
                <button>
                  SEND
                </button>
              </div>
            </form> -->
        </div>
      </div>
      <div class="col-lg-7 col-md-6 px-0">
            <?php the_post_thumbnail([600,800]) ?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();