<?php
function display_testimonials($testimonials) {
    foreach ($testimonials as $index => $testimonial) {
        $active_class = ($index === 0) ? 'active' : ''; // Make the first item active
        echo '
        <div class="carousel-item ' . $active_class . '">
            <div class="box">
                <div class="client_info">
                    <div class="client_name">
                        <h5>' . htmlspecialchars($testimonial['name']) . '</h5>
                        <h6>' . htmlspecialchars($testimonial['position']) . '</h6>
                    </div>
                    <i class="fa fa-quote-left" aria-hidden="true"></i>
                </div>
                <p>' . htmlspecialchars($testimonial['message']) . '</p>
            </div>
        </div>';
    }
}
?>
