<?php get_header(); ?>

<?php get_head(); ?>

<main class="main-home">

<div class="main-teams">
    <div class="container">
      <div class="main-teams-section">
        <div class="main-teams__title">Nasz zespół</div>
        <div class="main-teams__text"><?php $obj = get_post_type_object( 'zespol' ); echo esc_html( $obj->description );?></div>
        <div class="main-teams-items">
        <?php global $post;
				$args = array('posts_per_page'=>8, 'post_type' => 'zespol');
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          <div class="main-teams-item">
            <div class="main-teams-item__img">
              <?php $obraz = get_field( 'zdjecie_profilowe' ); ?>
              <?php if ( $obraz ) { ?>
              <img src="<?php echo $obraz['url']; ?>" alt="<?php echo $obraz['alt']; ?>" />
              <?php } ?>
              <div class="main-teams-item__social">
                <a class="main-teams-item__icons" href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook"></i> </a>
					    	<a class="main-teams-item__icons" href="<?php the_field('twitter'); ?>"><i class="fa fa-twitter"></i> </a>
						    <a class="main-teams-item__icons" href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram"></i> </a>
              </div>
            </div>
            <div class="main-teams-item__text">
              <a href="<?php the_permalink(); ?>">
                <div class="main-teams-item__name"><?php the_title(); ?></div>
                <div class="main-teams-item__job"><?php the_field('zawod'); ?></div>
              </a>
            </div>   
          </div>
        <?php endforeach; wp_reset_postdata();?>
        </div>
      </div>
    </div>
  </div>




    <?php get_footer(); ?>