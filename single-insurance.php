<?php
include('header.php');
?>
<main>
<?php if ( have_posts() ) : ?>
  <?php while( have_posts() ) : the_post(); ?>
      <h2 class="cmn-title cmn-font-family"><?php the_title(); ?></h2>
      <div class="symptoms-contents">
          <div class="content-sentence"><?php the_content(); ?></div>
          <!-- <div class="thumnail-img"> -->
            <!-- <?php the_post_thumbnail('full'); ?> -->
          <!-- </div> -->
      </div>
  <?php endwhile;?>
<?php endif; ?>
</main>
<?php
include('footer.php');
?>