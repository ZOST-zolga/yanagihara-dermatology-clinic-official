<?php
include('header.php');
?>
<main>
    <h2 class="cmn-title">保険治療</h2>
    <section class="medical-contents">
    <div>
    <?php
      $args = array(
        'post_type' => 'insurance', //カスタム投稿タイプ名
        'posts_per_page' => 20 //取得する投稿の件数
      );
    
      $my_query = new WP_Query( $args );
    ?>
    <ul class="medical-contents-list">
    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    <li class="medical-contents-detail"><a href="<?php the_permalink(); ?>" class="medical-contents-detail-a">&#9632; <?php the_title(); ?></a></li>
    
    <?php endwhile; ?>
    
    <?php wp_reset_postdata(); ?>
    </ul>
    </div>
    </section>
</main>
<?php
include('footer.php');
?>