<?php
/*
Template Name: REPORT
*/
get_header(); ?>
<?php get_template_part('nav'); ?>

<!-- main -->
<main>
    <div class="report_box">
        <div class="report_title">
            <h2>REPORT</h2>
            <p>活動報告</p>
        </div>
        <div class="report_wrap">
            <div class="report_main">
                <ul class="report_contents">
                    <?php
                    $args = [
                        'post_type' => 'clubreport', // 取得する投稿タイプを設定する
                        'posts_per_page' => -1, // 取得する数を選択する
                        'order' => 'desc', // 降順で取得する
                        'orderby' => 'post_date', // どのパラメータで並べ替えるのかを指定する
                        ];
                        $report_query = new WP_Query($args); // WP_Queryオブジェクトを生成
                        ?>
                    <?php while ($report_query->have_posts()) : $report_query->the_post(); ?>
                    <li class="report_content">
                        <a href="<?php the_permalink(); ?>">
                            <?php
                    // サムネイル画像があるかどうかを判断
                                if (get_the_post_thumbnail_url()) {
                                    echo '<img src="'.esc_url(get_the_post_thumbnail_url()).'">';
                                } else { // サムネイル画像がなければデフォルトの画像を出す
                                    echo '<img src="'.esc_url(get_template_directory_uri()).'/img/logo.jpeg" />';
                                }
                                ?>
                            <p><?php echo get_the_date(); ?></p>
                            <h3><?php the_title(); ?></h3>
                        </a>
                    </li>
                    <?php endwhile; ?>
                </ul>

            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>