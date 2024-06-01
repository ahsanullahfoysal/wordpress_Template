<?php 
get_header()
?>
<main>
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
  
            <?php the_post_thumbnail([500,800]) ?>
        
        </div>
      </div>
    </div>
  </div>
</section>