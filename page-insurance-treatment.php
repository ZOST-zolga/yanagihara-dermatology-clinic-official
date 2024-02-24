<?php
include('header.php');
?>
<main>
    <h2 class="cmn-title">一般皮膚科</h2>
    <p class="title-desc">当院では、下記の疾患以外にも、皮膚疾患全般の診療をしています。</p>
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
    <li class="medical-contents-detail">
      <a href="<?php the_permalink(); ?>" class="medical-contents-detail-a">&#9632; <?php the_title(); ?>
        <div class="thumnail-img"><?php the_post_thumbnail('full'); ?></div>
      </a>
    </li>
    
    <?php endwhile; ?>
    
    <?php wp_reset_postdata(); ?>
    </ul>
    <a href="<?php echo home_url(''); ?>/vaccine" class="vaccine-container">
        <section>
          <h3 class="h3-title">予防接種</h3>
          <p class="vaccine-sentence">当院では、帯状疱疹の予防接種も行っております。お気軽にお問い合わせください。</p>
        </section>
        <div class="vaccine-img">
          <img src="<?php echo get_template_directory_uri(); ?>/img/vaccine/AdobeStock_639295804_reduced.jpg" class="vaccine-pic" alt="vaccine">
        </div>
    </a>
    </div>
    </section>
</main>
<?php
include('footer.php');
?>