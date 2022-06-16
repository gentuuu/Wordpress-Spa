<footer>
  <div class="footer">
    <div class="container">
      <div class="footer-content">
        <div class="footer-row-1">
          <div class="footer__logo">
            <img src="" alt="">
          </div>
          <div class="footer__text">
            <?php echo do_shortcode( '[library term="footer-opis"]' ) ?>
          </div>
          <div class="footer__social">
          <a href="<?php echo do_shortcode( '[library term="facebook"]' ) ?>"><i class="fa fa-facebook"></i> </a>
            <a href="<?php echo do_shortcode( '[library term="twitter"]' ) ?>"><i class="fa fa-twitter"></i> </a>
            <a href="<?php echo do_shortcode( '[library term="youtube"]' ) ?>"><i class="fa fa-youtube"></i> </a>
            <a href="<?php echo do_shortcode( '[library term="instagram"]' ) ?>"><i class="fa fa-instagram"></i> </a>
          </div>
        </div>
        <div class="footer-row-2">
          <div class="footer-menu">
            <div class="footer-menu__title">Menu</div>
            <ul>
              <?php wp_nav_menu( array( 'menu' => 'Menu Główne') ); ?>
            </ul>
          </div>
        </div>
        <div class="footer-row-3">
          <div class="footer-menu__title">Popularne posty</div>
          <div class="footer-row-items">
          <?php global $post;
          $args = array('posts_per_page'=>3, 'post_type' => 'blog', 'orderby' => 'rand' );
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
            <a href="<?php the_permalink(); ?>" class="footer-row-item">
              <div class="footer-row-item__img"><img src="<?php the_post_thumbnail_url(); ?>" alt=""></div>
              <div class="footer-row-item__title"><?php the_title(); ?></div>
            </a>
          <?php endforeach; wp_reset_postdata();?> 
          </div>
        </div>
        <div class="footer-row-4">
          <div class="footer-menu__title">Informacje</div>
          <div class="footer-row-info">
            <span><i class="fa fa-home" aria-hidden="true"></i></span>
            <span><?php echo do_shortcode( '[library term="lokalizacja"]' ) ?></span>
          </div>
          <div class="footer-row-info">
            <span><i class="fa fa-envelope" aria-hidden="true"></i></span>
            <span><a href="mailto:<?php echo do_shortcode( '[library term="email"]' ) ?>"><?php echo do_shortcode( '[library term="email"]' ) ?></a></span>
          </div>
          <div class="footer-row-info">
            <span><i class="fa fa-mobile" aria-hidden="true"></i></span>
            <span><a href="tel:+<?php echo do_shortcode( '[library term="telefon"]' ) ?>"><?php echo do_shortcode( '[library term="telefon"]' ) ?></a></span>
          </div>
          <div class="footer-row-info">
            <span><i class="fa fa-clock-o" aria-hidden="true"></i></span>
            <span>Otwarte od poniedziałku do piątku od 8 do 16</span>
          </div>
        </div>
      </div>
      <div class="footer-copyright">
        <?php echo do_shortcode( '[library term="copywrite"]' ) ?>
      </div>
    </div>
  </div>
</footer>





<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>

</html>