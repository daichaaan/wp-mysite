<?php get_header(); ?>
<!-- top画像 以下-->
<div class="top_img_container">
    <a class="top_img" href="#">
        <img src="<?php echo get_template_directory_uri(); ?>/img/top_img.jpeg" alt="main_img">
    </a>
</div>
<!-- top画像　以上-->
<?php get_template_part('nav'); ?>
<!-- main------------------------------------------------>
<main>
    <div class="container">
        <div class="container_left">
            <!-- 結果報告　 -->
            <div class="title">
                <h2>試合結果</h2>
            </div>
            <div class="game_result">
                <dl class="flex">
                    <dt class="result">
                        <div class="result_inner">
                            <div class="sex">
                                <p><span>男子</span></a></p>
                            </div>
                            <p>神奈川県社会人リーグ</p>
                        </div>
                        <div class="ranking">
                            <p>第<span>７</span>位</p>
                        </div>
                    </dt>
                    <dd class="result">
                        <div class="result_inner">
                            <div class="sex">
                                <p><span>女子</span></p>
                            </div>
                            <p>神奈川県レディース大会2018</p>
                        </div>
                        <div class="ranking">
                            <p>第<span>２</span>位</p>
                        </div>
                    </dd>
                </dl>
                <div class="flex result_btn">
                    <a href="https://daichaaan.github.io/MySite/matchs" class="">試合結果ページヘ<span>></span></a>
                </div>
            </div> <!-- class="game_result" -->
            <div class="tab_bar">
                <ul class="flex">
                    <li><span>最新情報</span></li>
                    <li><span>トップチーム</span></li>
                    <li><span>クラブ</span></li>
                    <li><span>イベント</span></li>
                    <li><span>その他</span></li>
                </ul>
            </div>
            <div class="top_contets">
                <?php
                $args = [
                'post_type' => 'post',      // 取得する投稿タイプをpostにする
                'posts_per_page' => 5,
                'order' => 'desc',
                'orderby' => 'post_date',
                ];
                $post_query = new WP_Query($args);  // WP_Queryオブジェクトを生成
                ?>
                <?php while ($post_query->have_posts()) : $post_query->the_post(); ?>
                <div class="top_content">
                    <p><?php the_time('Y年m月d日'); ?></p>
                    <a href="<?php the_permalink() ?>"><span><?php $tags = get_the_tags(); ?></span></a>
                    <p><?php echo mb_substr($post->post_title, 0, 20).'...'; ?></p>
                    <!-- タイトルを表示 -->
                </div>
                <?php endwhile; ?>

                <div class="contents_more">
                    <a href="https://daichaaan.github.io/MySite/news">もっと見る<span>></span></a>
                </div>
            </div>
            <!-- class="news" -->
            <!-- 活動報告 記事内はwordpress? -->
            <div class="report">
                <div class="title">
                    <h2>活動報告</h2>
                    <p>練習風景をのぞき見！</p>
                    <a href="https://daichaaan.github.io/MySite/report">もっと見る<span>></span></a>
                </div>
                <div class="report_container">
                    <?php
                    $args = array(
                        'post_type' =>
                        'post', // 取得する投稿タイプをpostにする
                        "posts_per_page" => 4, //取得する数を3つにする
                        "order" => "desc", // 降順で取得する
                        "orderby" => "post_date" // どのパラメータで並べ替えるのかを指定する
                        );
                        $post_query = new WP_Query($args); // WP_Queryオブジェクトを生成
                    ?>
                    <ul>

                        <div class="report_text">
                            <h3>2021年5月10日更新！</h3>
                            <p>社会人リーグでの活躍！</p>
                        </div>
                        </li>
                        <li class="report_list">
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/images-2.jpg"
                                    alt="写真２"></a>
                            <div class="report_text">
                                <h3>2020年5月4日更新！</h3>
                                <p>バドミントン合宿 in CHIBA</p>
                            </div>
                        </li>
                        <li class="report_list">
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/images-3.jpg"
                                    alt="写真３"></a>
                            <div class="report_text">
                                <h3>2019年12月30日更新！</h3>
                                <p>●●での練習会</p>
                            </div>
                        </li>
                        <li class="report_list">
                            <a href=""><img src="<?php echo get_template_directory_uri(); ?>/img/images-4.jpg"
                                    alt="写真４"></a>
                            <div class="report_text">
                                <h3>2019年6月6日更新！</h3>
                                <p>親睦バドミントン大会</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container_right">
            <div class="banner_link">
                <!-- リンク画像 -->
                <a class="bannner_one" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_link_banner01.jpg"
                        alt="世界バドミントン連盟（BWF)公認球">
                </a>
                <a class="bannner_two" href="#">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/top_link_banner02.jpg"
                        alt="CPCシャトルコックDIRECT">
                </a>
            </div>
            <!-- ランキング -->
            <div class="league_ranking">
                <div class="leagur_title">
                    <h2>神奈川県社会人春季リーグ順位</h2>
                </div>
                <ul class="man">
                    <li class="man_result">
                        <a>結果：<span>３</span>位</a>
                    </li>
                </ul>
                <div class="ranking_table">
                    <table>
                        <tbody>
                            <tr>
                                <th>１</th>
                                <td>●●</td>
                            </tr>
                            <tr>
                                <th>２</th>
                                <td>■■</td>
                            </tr>
                            <tr>
                                <th>３</th>
                                <td>潮崎会</td>
                            </tr>
                            <tr>
                                <th>４</th>
                                <td>XX</td>
                            </tr>
                            <tr>
                                <th>５</th>
                                <td>▼▼</td>
                            </tr>
                            <tr>
                                <th>６</th>
                                <td>＊＊</td>
                            </tr>
                            <tr>
                                <th>７</th>
                                <td>＠＠＠＠</td>
                            </tr>
                            <tr>
                                <th>８</th>
                                <td>￥￥￥￥</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <p>20xx.mm.dd</p>
            </div>
            <div class="link_bar_wrap">
                <ul>
                    <li><a class="link_bar" href="#"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/top_banner_facebook.jpg"
                                alt="公式Facebook"></a>
                    </li>
                    <li><a class="link_bar" href="#"><img
                                src="<?php echo get_template_directory_uri(); ?>/img/top_banner_movie.jpg"
                                alt="バドミントンMovieギャラリー"></a></li>
                </ul>
            </div>
        </div>
        <div class="gallery">
            <div class="title">
                <h2>ギャラリー</h2>
                <a href="#">もっと見る<span>></span></a>
            </div>
            <div class="gallery_container">
                <div class="gallery_img"></div>
            </div>

        </div>
        <div>
            <!-- 画像　スクロール -->
            <a href="#"></a>
            <a href="#"></a>
            <a href="#"></a>
        </div>
    </div>
</main>
<!-- footer.php 読み込む -->
<?php get_footer(); ?>
</body>

</html>