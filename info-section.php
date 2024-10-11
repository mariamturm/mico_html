

<?php
// Include the data and functions files
include ('info-section-data.php');
include ('info-section-function.php');
?>


<section class="info_section ">
    <div class="container">
      <div class="info_top">
        <div class="info_logo">
          <a href="">
            <img src="images/logo.png" alt="">
          </a>
        </div>
        <div class="info_form">
          <form action="">
            <input type="email" placeholder="Your email">
            <button>
              Subscribe
            </button>
          </form>
        </div>
      </div>
      <footer>
    <div class="info_bottom layout_padding2">
        <div class="row info_main_row">
            <!-- Address Section -->
            <div class="col-md-6 col-lg-3">
                <h5><?php echo $footer_sections['address']['title']; ?></h5>
                <div class="info_contact">
                    <?php render_address($footer_sections['address']['content']); ?>
                </div>
                <div class="social_box">
                    <?php render_social_links($footer_sections['social']['content']); ?>
                </div>
            </div>

            <!-- Useful Links Section -->
            <div class="col-md-6 col-lg-3">
                <div class="info_links">
                    <h5><?php echo $footer_sections['useful_links']['title']; ?></h5>
                    <div class="info_links_menu">
                        <?php render_useful_links($footer_sections['useful_links']['content']); ?>
                    </div>
                </div>
            </div>

            <!-- Latest Posts Section -->
            <div class="col-md-6 col-lg-3">
                <div class="info_post">
                    <h5><?php echo $footer_sections['latest_posts']['title']; ?></h5>
                    <?php render_posts($footer_sections['latest_posts']['content']); ?>
                </div>
            </div>

            <!-- News Section -->
            <div class="col-md-6 col-lg-3">
                <div class="info_post">
                    <h5><?php echo $footer_sections['news']['title']; ?></h5>
                    <?php render_posts($footer_sections['news']['content']); ?>
                </div>
            </div>
        </div>
    </div>
</footer>
</div>
  </section>
