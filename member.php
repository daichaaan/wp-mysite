<?php
/*
Template Name: MEMBER
*/
get_header(); ?>
<?php get_template_part('nav'); ?>

<!-- main -->
<main>
    <div class="main_box">
        <div class="member_box">
            <div class="member_title">
                <h2>MEMBER</h2>
                <p>選手</p>
            </div>
            <div class="member_man">
                <h3>男子選手</h3>
            </div>
            <div class="mens">
                <?php
                    $args = [
                        'post_type' => 'member_men', // 取得する投稿タイプを設定する
                        'posts_per_page' => -1, // 取得する数を選択する
                        'order' => 'asc', // 古い順で取得する
                        'orderby' => 'post_date', // どのパラメータで並べ替えるのかを指定する
                        ];
                        $mens_query = new WP_Query($args); // WP_Queryオブジェクトを生成
                        ?>
                <?php while ($mens_query->have_posts()) : $mens_query->the_post(); ?>
                <div class="member">
                    <div class="member_photo">
                        <a class="photo" href="<?php the_permalink(); ?>">
                            <?php
                    // サムネイル画像があるかどうかを判断
                                if (get_the_post_thumbnail_url()) {
                                    echo '<img src="'.esc_url(get_the_post_thumbnail_url()).'">';
                                } else { // サムネイル画像がなければデフォルトの画像を出す
                                    echo '<img src="'.esc_url(get_template_directory_uri()).'/img/human.png" />';
                                }?>
                        </a>
                    </div>
                    <div class="member_name">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
            <div class="member_woman">
                <h3>女子選手</h3>
            </div>
            <div class="woman">
                <?php
                    $args = [
                        'post_type' => 'member_female', // 取得する投稿タイプを設定する
                        'posts_per_page' => -1, // 取得する数を選択する
                        'order' => 'asc', // 古い順で取得する
                        'orderby' => 'post_date', // どのパラメータで並べ替えるのかを指定する
                        ];
                        $female_query = new WP_Query($args); // WP_Queryオブジェクトを生成
                        ?>
                <?php while ($female_query->have_posts()) : $female_query->the_post(); ?>
                <div class="member rady">
                    <div class="member_photo">
                        <a class="photo" href="<?php the_permalink(); ?>">
                            <?php
                    // サムネイル画像があるかどうかを判断
                                if (get_the_post_thumbnail_url()) {
                                    echo '<img src="'.esc_url(get_the_post_thumbnail_url()).'">';
                                } else { // サムネイル画像がなければデフォルトの画像を出す
                                    echo '<img src="'.esc_url(get_template_directory_uri()).'/img/human.png" />';
                                }?>
                        </a>
                    </div>
                    <div class="member_name">
                        <h3><?php the_title(); ?></h3>
                    </div>
                </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>