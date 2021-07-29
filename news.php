<?php
/*
Template Name: NEWS
*/
get_header(); ?>
<?php get_template_part('nav'); ?>
<main>
    <div class="main_box">
        <div class="news">
            <div class="news_box">
                <div class="news_title_list">
                    <div class="news_title">
                        <h2>NEWS</h2>
                        <p>お知らせ</p>
                    </div>
                    <!-- ------------------------------------------------ -->
                    <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                    $args = [
                    'post_type' => 'post',      // 取得する投稿タイプをpostにする
                    'posts_per_page' => '10',
                    'order' => 'desc',
                    'orderby' => 'post_date',
                    'paged' => $paged,
                    ];
                    $the_query = new WP_Query($args);  // WP_Queryオブジェクトを生成
                    ?>

                </div>
                <div class="news_main_list">
                    <?php if ($the_query->have_posts()): ?>
                    <!-- 記事ごとにループ -->
                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="news_contents">
                        <p><?php the_time('Y年m月d日'); ?></p>
                        <?php
                        // 記事のカテゴリー情報を取得する
                        $cat = get_the_category();
                        $cat_name = $cat[0]->cat_name;
                        $cat_slug = $cat[0]->category_nicename;
                        ?>
                        <div class="category">
                            <span class="<?php echo $cat_slug; ?>">
                                <?php echo $cat_name; // スラックで色分け css?>
                            </span>
                        </div>
                        <h3><?php the_title(); ?></h3>
                        <?php
                        // 新着記事に New マークを表示
                        $post_time = get_the_time('U'); // 現在の投稿の時刻を取得
                        $days = 14; //New!を表示させる日数
                        $last = time() - ($days * 24 * 60 * 60);
                        if ($post_time > $last) {
                            echo '<span class="new-txt">NEW!</span>';
                        }
                        ?>
                    </a>
                    <?php endwhile; ?>
                    <?php
                     if (function_exists('wp_pagenavi')) {
                         wp_pagenavi(['query' => $the_query]);
                     }
                    ?>
                    <?php endif; ?>
                </div>

            </div>
            <!-- ------------------------------------------------ -->
            <div class="news_sub">
                <?php get_sidebar('right'); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>