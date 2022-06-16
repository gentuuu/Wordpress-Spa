<?php get_header(); ?>

<?php get_head(); ?>

<main class="main-home">


 
<div class="main-pakiet">
    <div class="container">
      <div class="main-pakiet-content">
        <div class="main-pakiet__title">Nasze paliety</div>
        <div class="main-pakiet__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit mollitia at, architecto porro aliquam temporibus corrupti quasi ab sed dicta facilis expedita perspiciatis. Id veritatis est dolor nam cupiditate ut!</div>
        <div class="main-pakiet-items">

        <?php global $post;
          $args = array('posts_per_page'=>3, 'post_type' => 'pakiety');
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          <div class="main-pakiet-item">
          <div>
              <div class="main-pakiet-item__title"><?php the_title(); ?></div>
              <div class="main-pakiet-item__price"><?php the_field('cena_pakietu'); ?></div>

              <ul class="main-pakiet-item__list">
              <?php
                $featured_posts = get_field('relacja_oferta');
                if( $featured_posts ): ?>
                    <?php foreach( $featured_posts as $featured_post ): 
                        $permalink = get_permalink( $featured_post->ID );
                        $title = get_the_title( $featured_post->ID );
                        $custom_field = get_field( 'field_name', $featured_post->ID );
                        ?>
                        <li>
                          <?php echo esc_html( $title ); ?>
                        </li>
                    <?php endforeach; ?>
                <?php endif; ?>
              </ul>
            </div>
             <a href="<?php the_permalink(); ?>">Zobacz szczegóły</a> 
          </div>
          <?php endforeach; wp_reset_postdata();?>

        </div>
      </div>
    </div>
  </div>

</main>

<?php get_footer(); ?>


