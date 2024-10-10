<?php
// header.php

include('header-data.php');  // Include the data file
include('header-function.php');  // Include the functions file
?>


<header class="header_section">
    <div class="header_top">
        <div class="container">
            <div class="contact_nav">
                <?php displayContacts($header['contacts']); ?>
            </div>
        </div>
    </div>

    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.php">
                    <img src="images/logo.png" alt="Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent">
                    <span></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div class="d-flex mr-auto flex-column flex-lg-row align-items-center"> <!-- Added this div -->
                        <ul class="navbar-nav">
                            <!-- <li class="nav-item"> -->
                                <?php displayNavigation($header['navItems']); ?>
                            <!-- </li> -->
                        </ul>
                    </div>
                    <div class="quote_btn-container">
                        <?php displayAuthButtons($header['authButtons']); ?>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</header>


