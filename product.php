<?php



/*

7.nav增加电话和email
11.b目录demo页面评估加入，如404
8.message原理和发送，php邮件问题
9.web内容裁剪修改

10.图片点击量；ini可写visit；php 访问量统计


//可选
1.性能；cache_expiration＝-1后筛选有问题
2.同一商品多个图片自动识别;
3.手机版本web、手机app、微信公众号


*/


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
        include 'resources/themes/uber-light/header.htm';
        include 'resources/themes/uber-light/sidebar.htm';
        include($themeIndex);
        include 'resources/themes/uber-light/footer.htm';
    } else {
        die('ERROR: Failed to initialize theme');
    }
