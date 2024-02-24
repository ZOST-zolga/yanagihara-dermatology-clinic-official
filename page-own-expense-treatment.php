<?php
include('header.php');
?>
<main>
    <h2 class="cmn-title">美容皮膚科</h2>
    <section class="medical-contents">
    <div>
    <div class="beauty-fee-container">
      <p class="beauty-fee"><span class="beauty-fee-title">初診料</span>1,500円</p>
      <p class="beauty-fee"><span class="beauty-fee-title">再診料</span>1,000円</p>
    </div>
    <?php
      $args = array(
        'post_type' => 'own-expense', //カスタム投稿タイプ名
        'posts_per_page' => 20 //取得する投稿の件数
      );
      $my_query = new WP_Query( $args );
    ?>
    <ul class="medical-contents-list">
    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
    <li class="medical-contents-detail">
      <a href="<?php the_permalink(); ?>" class="beauty-contents-detail-a">&#9632; <?php the_title(); ?>
        <div class="thumnail-img"><?php the_post_thumbnail('full'); ?></div>
      </a>
    </li>
    
    <?php endwhile; ?>
    
    <?php wp_reset_postdata(); ?>
    </ul>
    </div>
    </section>
</main>
<?php
include('footer.php');
?>