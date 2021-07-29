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

                </div>
                <div class="single">
                    <?php if (have_posts()) : the_post(); ?>
                    <div class="single__tags">
                        <p>
                            <i class="fas fa-table"></i> <?php the_date(); ?>
                        </p>
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
                    </div>

                    <h1 class="single__ttl"><?php the_title(); ?></h1>
                </div>
                <article class="single__content">
                    <div class="single_main_content"><?php the_content(); ?></div>
                </article>
                <div class="single_content_menu">
                    <div class="previous">
                        <?php if (get_previous_post()):?>
                        <p>
                            <?php previous_post_link('%link','<i class="fa fa-chevron-circle-left"></i><span>前の記事へ<span>'); ?>
                        </p>
                        <p><?php previous_post_link('%link', '%title'); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="single_home flex">
                        <a href="<?php echo home_url('/news'); ?>">一覧に戻る</a>
                    </div>
                    <div class="next"><?php if (get_next_post()):?>
                        <p>
                            <?php next_post_link('%link','<span>次の記事へ<span><i class="fa fa-chevron-circle-right"></i>'); ?>
                        </p>
                        <p><?php next_post_link('%link', '%title'); ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            <!-- ------------------------------------------------ -->
            <div class="news_sub">
                <?php get_sidebar('right'); ?>
            </div>
        </div>
</main>
<?php endif; ?>

<?php get_footer(); ?>