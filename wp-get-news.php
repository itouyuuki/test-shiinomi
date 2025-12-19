<?php

/**
 * しいのみ通信の一覧取得
 */

if (file_exists($base . '/wp/wp-load.php')) {
    require_once($base . '/wp/wp-load.php');

    $current_url = $_SERVER['REQUEST_URI'];

    if(strstr($current_url,'facilities')) {
        $postType = 'post';

        $split_url = explode('/', trim($current_url, '/'));
        $facilities_index = array_search('facilities', $split_url);
        $facility_slug = $split_url[$facilities_index + 1] ?? '';
        
        $query = new WP_Query([
            'post_type' => $postType,
            'category_name' => 'news-' . $facility_slug,
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);
    }else {
        $postType = 'post';
        $query = new WP_Query([
            'post_type' => $postType,
            'category_name' => 'news',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);
    }
}
