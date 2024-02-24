<?php
/* ---------- カスタム投稿タイプを追加 ---------- */

add_action( 'init', 'create_post_type' );

function create_post_type() {

  register_post_type(
    'insurance',
    array(
      'label' => '一般皮膚科',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 2,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_post_type(
    'own-expense',
    array(
      'label' => '美容皮膚科',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 3,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_post_type(
    'news',
    array(
      'label' => 'ニュース',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 4,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_post_type(
    'notice',
    array(
      'label' => '臨時休診のお知らせ',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

  register_taxonomy(
    'insurance-cat',
    'insurance',
    array(
      'label' => 'カテゴリー',
      'hierarchical' => true,
      'public' => true,
      'show_in_rest' => true,
    )
  );

  register_taxonomy(
    'insurance-tag',
    'insurance',
    array(
      'label' => 'タグ',
      'hierarchical' => false,
      'public' => true,
      'show_in_rest' => true,
      'update_count_callback' => '_update_post_term_count',
    )
  );
}
  //アイキャッチ画像
  add_theme_support( 'post-thumbnails' );

