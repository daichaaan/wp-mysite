<?php
/*
Template Name: PROFILE
*/
get_header(); ?>
<?php get_template_part('nav'); ?>

<!-- main -->
<main>
    <div class="profile_box">
        <div class="profile_title">
            <h2>PROFILE</h2>
            <p>クラブ紹介</p>
        </div>
        <div class="profile_wrap">
            <div class="summary">
                <h2>クラブ概要</h2>
                <table class="summary_box">
                    <tr>
                        <th>クラブ名</th>
                        <td>潮崎会</td>
                    </tr>
                    <tr>
                        <th>設立</th>
                        <td>××××年 △△月 □□日</td>
                    </tr>
                    <tr>
                        <th>代表者名</th>
                        <td>XXX YYYY</td>
                    </tr>
                    <tr>
                        <th>所属人数</th>
                        <td>●人(男性 ○人・女性 ●人)</td>
                    </tr>
                    <tr>
                        <th>活動内容</th>
                        <td>神奈川県社会人バドミントンリーグ</td>
                    </tr>
                    <tr>
                        <th>活動理念</th>
                        <td>チームの団結力、個々の技術・能力を向上させ、社会人リーグで上位を目指します。</td>
                    </tr>
                </table>
            </div>
            <div class="history">
                <h2>クラブ年表</h2>
                <table class="history_box">
                    <?php
                            $args = [
                                'post_type' => 'clubprofile', // 取得する投稿タイプをpostにする
                                'posts_per_page' => -1, // 取得する数を5つにする
                                'order' => 'desc', // 降順で取得する
                                'orderby' => 'post_date', // どのパラメータで並べ替えるのかを指定する
                            ];
                            $profile_query = new WP_Query($args); // WP_Queryオブジェクトを生成
                        ?>
                    <?php while ($profile_query->have_posts()) : $profile_query->the_post(); ?>

                    <tr class="history_content">
                        <th class="history_time"><a>2021年<br>(令和3年)</a><br>
                            <!-- <p class="day"><?php echo get_the_date(); ?></p> -->
                        </th>
                        <td class="history_title">
                            <h3><a href="<?php the_permalink(); ?>" class="news__link"><?php the_title(); ?>
                                    <!-- <span>PDF</span> -->
                                </a></h3>
                        </td>
                    </tr>
                    <?php endwhile; ?>
                </table>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>