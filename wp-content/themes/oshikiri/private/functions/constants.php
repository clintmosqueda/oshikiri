<?php

$load_release_hash = function () {
    $map = get_template_directory().'/anticache.json';
    if (!file_exists($map)) {
        return '';
    }
    $content = json_decode(file_get_contents($map));
    if (!is_object($content) || !isset($content->anticache)) {
        return '';
    }

    return $content->anticache;
};

define('ANTICACHE_HASH', $load_release_hash());

define('PRODUCT_POST_TYPE', 'product');
define('PRODUCT_CATEGORY', 'product-category');
define('PRODUCT_LINE_CATEGORY', 'product-line-category');
define('PRODUCT_BREAD_CATEGORY', 'product-bread-category');

define('CASE_POST_TYPE', 'case');

define('EMPLOYEE_POST_TYPE', 'employee');
define('EMPLOYEE_POST_TYPE_CATEGORY', 'employee-category');

define('NEWS_POST_TYPE', 'news');
define('NEWS_POST_TYPE_CATEGORY', 'news-category');
define('NEWS_POST_TYPE_TAG', 'news-tag');

define('CATALOG_POST_TYPE', 'catalog');
define('CATALOG_POST_TYPE_CATEGORY', 'catalog-category');


