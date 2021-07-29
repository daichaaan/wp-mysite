<?php
        // 親カテゴリーのものだけを一覧で取得
        $args = [
            'parent' => 0,
            'orderby' => 'term_order',
            'order' => 'ASC',
                ];
        $categories = get_categories($args);
    ?>
<div class="sub_title">
    <h3>NEWS CATEGORY</h3>
    <p>カテゴリー</p>
</div>
<ul class="sub_list">
    <li class="list_contents">
        <a href="<?php echo home_url('/news'); ?>" style="color:white">
            <span class="cat_space">> </span>すべてのニュース
        </a>
    </li>
    <?php foreach ($categories as $category) : ?>
    <li class="list_contents">
        <a href="<?php echo get_category_link($category->term_id); ?>" style="color:white">
            <span class="cat_space">></span>
            <?php echo $category->name; ?>
        </a>
    </li>
    <?php endforeach; ?>
</ul>