<?php
include 'data.php';
include 'teamsection_function.php';
?>

<section class="team_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>Our <span>Doctors</span></h2>
        </div>
        <div class="carousel-wrap">
            <div class="owl-carousel team_carousel">
                <?php foreach ($teamData as $member) : ?>
                    <div class="item">
                        <div class="box">
                            <div class="img-box">
                                <img src="<?php echo $member['image']; ?>" alt="" />
                            </div>
                            <div class="detail-box">
                                <h5><?php echo $member['name']; ?></h5>
                                <h6><?php echo $member['qualification']; ?></h6>
                                <div class="social_box">
                                    <?php foreach ($member['social_links'] as $platform => $link) : ?>
                                        <a href="<?php echo $link; ?>">
                                            <i class="fa fa-<?php echo $platform; ?>" aria-hidden="true"></i>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>