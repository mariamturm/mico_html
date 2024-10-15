<?php
// functions.php

function displayContacts($contacts) {
    foreach ($contacts as $contact) {
        echo '<a href="' . $contact['link'] . '">
                <i class="' . $contact['icon'] . '"></i>
                <span>' . $contact['text'] . '</span>
              </a>';
    }
}

function displayNavigation($navItems) {
    foreach ($navItems as $navItem) {
        echo '<li class="nav-item">
                <a class="nav-link" href="' . $navItem['link'] . '">' . $navItem['title'] . '</a>
              </li>';
    }
}

function displayAuthButtons($authButtons) {
    foreach ($authButtons as $button) {
        echo '<a href="' . $button['link'] . '">
                <i class="' . $button['icon'] . '"></i>
                <span>' . $button['text'] . '</span>
              </a>';
    }
}
?>
