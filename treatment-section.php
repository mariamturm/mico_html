<?php
// Include the data and functions
include 'treatment-data.php';
include 'treatment-function.php';
?>

<section class="treatment_section layout_padding">
    <div class="side_img">
        <img src="images/treatment-side-img.jpg" alt="">
    </div>
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
                Hospital <span>Treatment</span>
            </h2>
        </div>
        <div class="row">
            <?php
            // Loop through the treatment data and render each item
            foreach ($treatment_data as $treatment) {
                displayTreatment($treatment);
            }
            ?>
        </div>
    </div>
</section>
