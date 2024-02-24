<?php
include('header.php');
?>
<?php if ( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post(); ?>
    <h2 class="cmn-title"><?php the_title(); ?></h2>
    <div class="symptoms-contents">
        <div class="content-sentence"><p><?php the_content(); ?></p></div>
        <div class="thumnail-img"><?php the_post_thumbnail('full'); ?></div>
    </div>
  <?php endwhile;?>
<?php endif; ?>
</main>
<?php
include('footer.php');
?>

