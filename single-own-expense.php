<?php
include('header.php');
?>
<main>
<?php if ( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post(); ?>
    <h2 class="cmn-title"><?php the_title(); ?></h2>
    <div class="own-expense-container">
        <div class="own-expense-sentence"><p><?php the_content(); ?></p></div>
        <div class="own-expense-thumnail-img"><?php the_post_thumbnail('full'); ?></div>
    </div>
  <?php endwhile;?>
<?php endif; ?>
</main>
<?php
include('footer.php');
?>