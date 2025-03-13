<?php
// Render address info
function render_address($address_info) {
    foreach ($address_info as $item) {
        echo '<a href="' . $item['url'] . '">
                <i class="fa ' . $item['icon'] . '" aria-hidden="true"></i>
                <span>' . $item['text'] . '</span>
              </a>';
    }
}

// Render social links
function render_social_links($social_links) {
    foreach ($social_links as $link) {
        echo '<a href="' . $link['url'] . '">
                <i class="fa ' . $link['icon'] . '" aria-hidden="true"></i>
              </a>';
    }
}

// Render useful links
function render_useful_links($useful_links) {
    foreach ($useful_links as $link) {
        $active_class = isset($link['active']) && $link['active'] ? 'class="active"' : '';
        echo '<a ' . $active_class . ' href="' . $link['url'] . '">
                ' . $link['label'] . '
              </a>';
    }
}

// Render posts
function render_posts($posts) {
    foreach ($posts as $post) {
        echo '<div class="post_box">
                <div class="img-box">
                    <img src="' . $post['img'] . '" alt="">
                </div>
                <p>' . $post['text'] . '</p>
              </div>';
    }
}
