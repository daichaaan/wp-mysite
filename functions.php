<?php

function setup()
{
    add_theme_support('post-thumbnails'); // アイキャッチ画像を有効化
    add_theme_support('title-tag'); // タイトルタグ自動生成
}

add_action('after_setup_theme', 'setup');


/* カスタム投稿タイプを追加 */

add_action('init', 'create_post_type');
function create_post_type()
{
    register_post_type('orijinal_themes', //カスタム投稿タイプ名を指定
        [
            'labels' => [
            'name' => __('オリジナルテーマ作成'),
            'singular_name' => __('オリジナルテーマ作成'),
        ],
        'public' => true,
        'has_archive' => true, /* アーカイブページを持つ */
        'menu_position' => 5, //管理画面のメニュー順位
        'supports' => ['title', 'editor', 'author', 'thumbnail', 'excerpt', 'custom-fields', 'comments'],
        ]
    );
}