<?php

/**
 * しいのみ日和一覧取得
 */

if (file_exists($base . '/wp/wp-load.php')) {
    require_once($base . '/wp/wp-load.php');

    $current_url = $_SERVER['REQUEST_URI'];

    if(strstr($current_url,'facilities')) {
        $postType = 'blog';

        $split_url = explode('/', trim($current_url, '/'));
        $facilities_index = array_search('facilities', $split_url);
        $facility_slug = $split_url[$facilities_index + 1] ?? '';
        
        $blog_query = new WP_Query([
            'post_type' => $postType,
            'category_name' => 'blog-' . $facility_slug,
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);
    }else {
        $postType = 'blog';
        $blog_query = new WP_Query([
            'post_type' => $postType,
            'category_name' => 'blog',
            'post_status' => 'publish',
            'posts_per_page' => 3,
            'orderby' => 'date',
            'order' => 'DESC',
        ]);
    }
}
