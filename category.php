<?php get_header(); ?>
<?php get_template_part('nav'); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main ">
        <div class="breadcrumbs-box container">
            <div class="breadcrumbs">
                <?php if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
            </div>
        </div>
        <!-- .breadcrumbs-box -->
        <div class="main_box">
            <div class="news">
                <div class="news_box">
                    <div class="news_title_list">
                        <div class="news_title">
                            <h2>NEWS</h2>
                            <p>お知らせ</p>
                        </div>
                    </div>
                    <article class="news_main_list"> <?php if(have_posts()):
                        while(have_posts()): the_post(); ?>
                        <a href=" <?php the_permalink(); ?>" class="news_contents">
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
                            $post_time = get_the_time('U');// 現在の投稿の時刻を取得
                            $days = 10; //New!を表示させる日数
                            $last = time() - ($days * 24 * 60 * 60);
                            if ($post_time > $last) {
                            echo '<span class="new-txt">NEW!</span>';
                            }
                            ?>
                        </a>
                        <?php endwhile; ?>
                        <?php else: ?>
                        <p>準備中です。</p>
                        <?php endif; ?>
                        <?php if (function_exists("pagination")) {
                        pagination($additional_loop->max_num_pages);
                        } ?>
                        <?php wp_pagenavi(); ?>
                    </article>

                    <!-- post-list-box -->
                </div> <!-- 検索以下　カテゴリーまでの表示　 -->
                <div class="news_sub">
                    <?php get_sidebar('right'); ?>
                </div>
            </div>
        </div>
    </main><!-- #main -->
</div><!-- #primary -->
<?php get_footer();