<?php
//4.缩略图分辨率，ini，图片cache／index和性能；5.html模版；

//2.ini可写visit；3.性能优化;

//可选
//1.同一商品多个图片自动识别;6.图片闽清等logo去除；

/*
1.性能；
2.-1后筛选有问题
3.筛选后，选页码有问题、id、size为空时优化
4.git cache目录
5.single页保留测边栏
6.wechat图标等弹出二维码http://overtrue.me/share.js/
7.nav增加电话和email
8.nav增加message和blog？
9.手机版本web、手机app、微信营销帐号


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
        include($themeIndex);
    } else {
        die('ERROR: Failed to initialize theme');
    }
