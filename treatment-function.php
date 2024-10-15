<?php
// Function to display a single treatment box
function displayTreatment($treatment) {
    ?>
    <div class="col-md-6 col-lg-3">
        <div class="box ">
            <div class="img-box">
                <img src="<?php echo $treatment['image']; ?>" alt="">
            </div>
            <div class="detail-box">
                <h4>
                    <?php echo $treatment['title']; ?>
                </h4>
                <p>
                    <?php echo $treatment['description']; ?>
                </p>
                <a href="<?php echo $treatment['link']; ?>">
                    Read More
                </a>
            </div>
        </div>
    </div>
    <?php
}
?>
