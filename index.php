<?php
    $session_time = 86400;
    ini_set( 'session.gc_divisor', 1);
    ini_set( 'session.gc_maxlifetime', $session_time );
?>
<?php
session_start();
include('header.php');
?>
<main>
    <?php 
    if(!isset($_SESSION['is_visited'])): 
    ?>
    <div class="hero-fadein">
        <div class="hero-slidein-container">
            <img class="hero-slidein" src="<?php echo get_template_directory_uri(); ?>/img/yanagihara-derma_logo-rectangle.png" alt="">
            <!-- <p class="hero-slidein">YANAGIHARA</p>
            <p class="hero-slidein">DERMATOLOGY</p>
            <p class="hero-slidein">CLINIC</p> -->
        </div>
    </div>
    <?php 
    endif; 
    $_SESSION['is_visited'] = true; 
    ?>
    <div class="swiper">
        <!-- Additional required wrapper -->
        <div class="swiper-wrapper">
        <!-- Slides -->
        <!-- <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/mainslide/slide1.jpg" alt="slide1"></div> -->
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/mainslide/slide14.jpg" alt="slide2"></div>
        <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/mainslide/slide3.jpg" alt="slide3"></div>
        <!-- <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/mainslide/slide4.jpg" alt="slide4"></div> -->
        <!-- <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/mainslide/slide10.jpg" alt="slide10"></div> -->
        <!-- <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/mainslide/slide9.jpg" alt="slide9"></div> -->
        </div>
        <!-- If we need pagination -->
        <div class="swiper-pagination"></div>
    
        <!-- If we need navigation buttons -->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    
        <!-- If we need scrollbar -->
        <div class="swiper-scrollbar"></div>
    </div>
    <div class="inner">
        <div class="tel-area-container-sp">
            <i class="fas fa-phone tel-mark-sp"></i><a href="tel:06-6963-3492" class="tel-sp">06-6963-3492</a>
            <p class="tel-info-sp">いつでもお気軽にお電話下さい</p>
        </div>
        <section class="notice-container">
            <h2 class="notice-title">臨時休診のお知らせ</h2>
                <ul class="loop-area">
                    <?php
                    $args = array(
                    'post_type' => 'notice', //カスタム投稿タイプ名
                    'posts_per_page' => 20 //取得する投稿の件数
                    );

                    $my_query = new WP_Query( $args );
                    ?>
                    <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
                    <li class="loop-content"><?php the_content(); ?></li>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                </ul>
        </section>
        <section class="news-container">
            <h2 class="news-title">\ ニュース /</h2>
            <!-- <p class="news-content">&#9670;2024年2月1日、無事、柳原皮膚科クリニック、リニューアルオープンいたしました!!</p> -->
            <?php
            $args = array(
            'post_type' => 'news', //カスタム投稿タイプ名
            'posts_per_page' => 20 //取得する投稿の件数
            );

            $my_query = new WP_Query( $args );
            ?>
            <?php while ( $my_query->have_posts() ) : $my_query->the_post(); ?>
            <p class="news-content"><?php the_content(); ?></p>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        </section>
        <section class="tel-area-container">
            <i class="fas fa-phone tel-mark"></i>
            <span class="tel-area">
                <a href="tel:06-6963-3492" class="tdn"><span class="tel">06-6963-3492</span></a>
            </span>
            <p class="tel-info">いつでも<br>お気軽に<br>お電話下さい</p>
        </section>
    </div>
</main>
<?php
include('footer.php');
?>