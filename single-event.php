<?php
/*
Template Name: Calender Event
*/
get_header(); ?>
<?php get_template_part('nav'); ?>
<main>
    <div class="schedule_wrap">
        <div class="schedule_title">
            <h2>SCHEDULE</h2>
            <p>スケジュール</p>
        </div>
        <div class="single">
            <?php if (have_posts()) : the_post(); ?>
            <div class="single__tags">
                <p>
                    <i class="fas fa-table"></i> <?php the_date(); ?>
                </p>
                <?php echo '<p>' . the_category(). '</p>'; ?>

                <?php
                    $args = array(
                        'taxonomy' => 'event-category'
                    );
                        $categories = get_categories( $args );
                        foreach ( $categories as $category ) {
                        echo '<p>' . $category->name . '</p>';
                    }
                // ?>
            </div>

            <?php
	$cat = get_the_category();
	// カテゴリー名の取得
	$cat_name = $cat[0]->name;
	// カテゴリーidの取得
	$cat_id = $cat[0]->cat_ID;
	// カテゴリースラッグの取得
	$cat_slug = $cat[0]->slug;
	// カテゴリーの説明の取得
	$cat_description = $cat[0]->category_description;
	// 親カテゴリーのIDを取得
	$cat_parent_id = $cat[0]->category_parent;
	// 親カテゴリーのIDから情報を取得
	$cat_parent = get_category($cat[0]->category_parent);
	// 親カテゴリー名を取得
	$cat_parent_catname = $parent->cat_name;
?>
            <!--出力したい要素を出力したい場所にコピペしてください。-->
            <!-- // カテゴリー名の出力 -->
            <?php echo $cat_name; ?>

            <!-- // カテゴリーidの出力 -->
            <?php echo $cat_id; ?>

            <!-- // カテゴリースラッグの出力 -->
            <?php echo $cat_slug; ?>

            <!-- // カテゴリーの説明を出力 -->
            <?php echo $cat_description; ?>

            <!-- // 親カテゴリーのIDを出力 -->
            <p> <?php echo $cat_parent_id; ?></p>

            <!-- // 親カテゴリー名を出力 -->
            <?php echo $cat_parent_catname; ?>

            <h1 class="single__ttl"><?php the_title(); ?></h1>
        </div>
        <article class="event_content">
            <div class="event_main_content"><?php the_content(); ?></div>
        </article>
    </div>
    <!-- ------------------------------------------------ -->
    <div class="news_sub">
        <!-- サイドにカレンダーを表示 -->
    </div>
    </div>
</main>
<?php endif; ?>

<?php get_footer(); ?>