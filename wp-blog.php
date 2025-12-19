<?php if ($blog_query->have_posts()) { ?>
    <ul class="wp-contents-list">
        <?php while ($blog_query->have_posts()) { ?>
            <?php $blog_query->the_post() ?>
            <li onclick="location.href='<?= get_the_permalink() ?>'">
                <a href="<?= get_the_permalink(); ?>" class="item">
                    <img src="<?= get_thumbnail_or_default() ?>" alt="" class="thum-img">
                    <div class="inner">
                        <div class="wp-meta-wr">
                            <?php 
                            $terms = get_the_terms(get_the_ID(), 'category');
                            if (!empty($terms) && !is_wp_error($terms)) {
                                foreach ($terms as $term) { 
                                    $slug_name = preg_replace('/^blog-/', '', $term->slug);?>
                                    <p class="<?= esc_attr($slug_name) ?> category-name">
                                        <?= esc_html($term->name) ?>
                                    </p>
                                <?php }
                            } ?>
                            <p class="date">
                                <?php the_time('Y/n/j'); ?>
                            </p>
                        </div>
                        <h3 class="title">
                            <?php
                            $title = get_the_title();
                            if(mb_strlen($title, 'UTF-8')>30){
                                $title = mb_substr($title, 0, 30, 'UTF-8');
                                echo "{$title}…";
                            }else{
                                echo $title;
                            }?>
                        </h3>
                    </div>
                </a>
            </li>
        <?php } ?>
    </ul>
<?php wp_reset_postdata() ?>
<?php } else { ?>
    <p class="attention">
        現在、しいのみ日和はございません。
    </p>
<?php } ?>