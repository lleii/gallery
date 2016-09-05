<?php



/*


10.图片点击量；ini可写visit；php 访问量统计；index原理
4.ftp独立帐号限制gallery目录


//确定方案后完成部署，再具体调整
12.手机版本／平板版本，bs 4种布局，响应式布局调整:产品信息sidebar等；
11.百度地图白名单设置

//可选
1.性能；cache_expiration＝-1后筛选有问题
2.同一商品多个图片自动识别;
3.手机app、微信公众号


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
