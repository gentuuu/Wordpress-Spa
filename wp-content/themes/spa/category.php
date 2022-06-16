<?php get_header(); ?>

<?php get_head(); ?>


<div class="main-blog">
  <div class="container">
    <div class="main-blog-section">
      <div class="blog__title">Artykuły z kategorii: <?php single_term_title(); ?></div>
      <div class="main-blog-items">
        <?php
					$current_category = get_queried_object();
          $args = get_posts( array(
          'post_type' => 'blog',
					'orderby' => 'post_date',
					'order' => 'DESC',
					'cat' => $current_category->cat_ID ) );
                            
          if ( $args ) {
          foreach ( $args as $post ) : 
          setup_postdata( $post ); ?>
          <div class="main-blog-item">
            <div class="main-blog-item__img">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="main-blog-item__row">
              <div class="main-blog-item__title"><?php the_title(); ?></div>
              <div class="main-blog-item__date"><i class="fa fa-calendar" aria-hidden="true"></i>
                <?php the_time( 'F j, Y' ); ?></div>
              <div class="main-blog-item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit praesentium
                distinctio</div>
              <a href="<?php the_permalink(); ?>" class="main-blog-item__read">Czytaj dalej</a>
            </div>
          </div>

        <?php endforeach; wp_reset_postdata(); } ?>
      </div>
    </div>
  </div>
</div>


<?php get_footer(); ?>