<?php
include('header.php');
?>
<main>
<?php if ( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post(); ?>
    <h2 class="cmn-title"><?php the_title(); ?></h2>
    <div class="symptoms-contents">
        <div class="content-sentence treatment-all">
          <a href="<?php echo home_url('insurance-treatment'); ?>" class="insurance-treatment">
              <h3 class="treatment-title">保険治療</h3>
          </a>
          <a href="<?php echo home_url('own-expense-treatment'); ?>" class="own-expense-treatment">
              <h3 class="treatment-title">自費診療</h3>
          </a>
        </div>
        <div class="thumnail-img"><?php the_post_thumbnail('full'); ?></div>
    </div>
  <?php endwhile;?>
<?php endif; ?>
</main>
<?php
include('footer.php');
?>