<?php
// Footer data stored in multidimensional arrays with titles

$footer_sections = [
    'address' => [
        'title' => 'Address',
        'content' => [
            ['icon' => 'fa-map-marker', 'text' => 'Location', 'url' => '#'],
            ['icon' => 'fa-phone', 'text' => 'Call +01 1234567890', 'url' => '#'],
            ['icon' => 'fa-envelope', 'text' => 'demo@gmail.com', 'url' => '#'],
        ],
    ],
    'social' => [
        'title' => 'Social Links',
        'content' => [
            ['icon' => 'fa-facebook', 'url' => '#'],
            ['icon' => 'fa-twitter', 'url' => '#'],
            ['icon' => 'fa-linkedin', 'url' => '#'],
            ['icon' => 'fa-instagram', 'url' => '#'],
        ],
    ],
    'useful_links' => [
        'title' => 'Useful Links',
        'content' => [
            ['label' => 'Home', 'url' => 'index.php', 'active' => true],
            ['label' => 'About', 'url' => 'about.php'],
            ['label' => 'Treatment', 'url' => 'treatment.php'],
            ['label' => 'Doctors', 'url' => 'doctor.php'],
            ['label' => 'Testimonial', 'url' => 'testimonial.php'],
            ['label' => 'Contact us', 'url' => 'contact.php'],
        ],
    ],
    'latest_posts' => [
        'title' => 'Latest Posts',
        'content' => [
            ['img' => 'images/post1.jpg', 'text' => 'Normal distribution'],
            ['img' => 'images/post2.jpg', 'text' => 'Normal distribution'],
        ],
    ],
    'news' => [
        'title' => 'News',
        'content' => [
            ['img' => 'images/post3.jpg', 'text' => 'Normal distribution'],
            ['img' => 'images/post4.png', 'text' => 'Normal distribution'],
        ],
    ],
];
