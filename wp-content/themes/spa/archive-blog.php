<?php get_header(); ?>

<?php get_head(); ?>
	
<main class="main-home">

  <div class="main-blog">
    <div class="container">
      <div class="main-blog-section">
        <div class="main-blog__title">main-blog</div>
        <div class="main-blog__text"><?php $obj = get_post_type_object( 'blog' ); echo esc_html( $obj->description );?></div>
        <div class="main-blog-items">
          <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            $args = array( 
                'posts_per_page' => 100, 
                'paged' => $paged, 
                'post_type' => 'blog'
            );
            $loop = new WP_Query($args);
            ?>
            <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>
          <div class="main-blog-item">
            <div class="main-blog-item__img">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="main-blog-item__row">
              <div class="main-blog-item__title"><?php the_title(); ?></div>
              <div class="main-blog-item__date"><i class="fa fa-calendar" aria-hidden="true"></i> <?php the_time( 'F j, Y' ); ?></div>
              <div class="main-blog-item__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit praesentium distinctio</div>
              <a href="<?php the_permalink(); ?>" class="main-blog-item__read">Czytaj dalej</a>
            </div>
          </div>
         <?php endwhile; endif; ?>
        </div>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>