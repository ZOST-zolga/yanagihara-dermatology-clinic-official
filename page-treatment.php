<?php
include('header.php');
?>
<main>
<?php if ( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post(); ?>
    <h2 class="cmn-title"><?php the_title(); ?></h2>
    <p class="title-desc">当院では、保険診療と自費診療の同日受診は、混合診療の観点から、行っておりません。
      <br>例えば、自費で炭酸ガスレーザーを受けた日に手荒れの診察はできません。ただし、化粧品など物品購入の場合は販売の扱いになるため、同時に保険診療をお受け頂けます。
      <br>ご理解のほど宜しくお願いいたします。
    </p>
    <div class="symptoms-contents">
        <div class="content-sentence treatment-all">
          <a href="<?php echo home_url('insurance-treatment'); ?>" class="insurance-treatment">
              <h3 class="treatment-title">一般皮膚科</h3>
          </a>
          <a href="<?php echo home_url('own-expense-treatment'); ?>" class="own-expense-treatment">
              <h3 class="treatment-title">美容皮膚科</h3>
          </a>
        </div>
        <!-- <div class="thumnail-img"><?php the_post_thumbnail('full'); ?></div> -->
    </div>
  <?php endwhile;?>
<?php endif; ?>
</main>
<?php
include('footer.php');
?>