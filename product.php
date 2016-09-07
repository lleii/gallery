<?php



/*

时间和visit显示；
时间留着，高优先级处理？
txt模板去掉visit；
10.pop:图片点击量；ini可写visit；区分cookie、session!php 访问量统计；.index原理；_
11.new；Release自动计算？服务器时区？

2.服务器about截断问题；filezilla传输不完整，完整重传；

xxxxx.ini后缀改为txt

网站icon，header头，seo！

多余css／图片／js清理;版本整理



//确定方案后完成部署，再具体调整
12.手机版本／平板版本，bs 4种布局，响应式布局调整:产品信息sidebar等；
11.百度地图白名单设置

//可选
1.性能；cache_expiration＝-1后筛选有问题;isFileCached
    －1问题：1.新增文件能否刷新？如果不行，是否定时刷新？；2.分类筛选;
2.同一商品多个图片自动识别;
3.手机app、微信公众号
4.SIDEBAR隐藏：https://blackrockdigital.github.io/startbootstrap-simple-sidebar/
5.LOGO:https://startbootstrap.com/template-overviews/small-business/




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
