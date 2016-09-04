<?php
//4.缩略图分辨率；5.html模版

//2.ini可写visit；3.性能优化;1.同一商品多个图片自动识别;6.图片闽清等logo去除；

    // Include the UberGallery class
    include('resources/UberGallery.php');

    $navId='pro';

    // Initialize the UberGallery object
    $gallery = new UberGallery();


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
    $themeIndex = $gallery->getThemePath(true) . '/product.htm';

    // Initialize the theme
    if (file_exists($themeIndex)) {
        include($themeIndex);
    } else {
        die('ERROR: Failed to initialize theme');
    }
