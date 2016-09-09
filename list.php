<?php

ini_set('display_errors', false);

    // Include the UberGallery class
    include('resources/UberGallery.php');

    $navId='';

    // Initialize the UberGallery object
    $gallery = new UberGallery();

    $gallery->setImagesPerPage(0);

        // Sanitize input and set current page
        if (isset($_GET['dir'])) {
            $galleryArray = $gallery->readImageDirectory($_GET['dir']);
        } else {
            $galleryArray = $gallery->readImageDirectory('gallery');
        }

    // Define theme path
    if (!defined('THEMEPATH')) {
        define('THEMEPATH', $gallery->getThemePath());
    }

    // Set path to theme index
    $themeIndex = $gallery->getThemePath(true) . '/list.htm';

    // Initialize the theme
    if (file_exists($themeIndex)) {
        include 'resources/themes/uber-light/header.htm';
        include($themeIndex);
        include 'resources/themes/uber-light/footer.htm';
    } else {
        die('ERROR: Failed to initialize theme');
    }
