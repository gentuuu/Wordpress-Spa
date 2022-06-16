<?php get_header(); ?>

<header>
    <div class="swiper-container header-swiper">
      <div class="swiper-wrapper">
	  	  <?php global $post;
          $args = array('posts_per_page'=>5, 'post_type' => 'slider');
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>

          <div class="swiper-slide">
          <div class="header-item">
            <div class="header-item__img">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="header-item__text">
            <div class="header-item__primary"><?php the_title(); ?></div>
            <div class="header-item__secondary">
              <?php the_field('krotki_opis'); ?>
            </div>
            <div class="header-item__more">
                <a href="" class="header-item__btn">Czytaj więcej</a>
                <a href="" class="header-item__btn-1">kontakt</a>
            </div>
            </div>
          </div>
          </div>


        <?php endforeach; wp_reset_postdata();?>
      </div>
      <div class="header-swiper-left"><i class="fa fa-long-arrow-left" aria-hidden="true"></i></div>
      <div class="header-swiper-right"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></div>
    </div> 
</header>


	
<div class="main-aboutus">
    <div class="container">
      <div class="main-aboutus-section">
        <div class="main-aboutus__text">
          <?php echo do_shortcode( '[library term="home_o_nas"]' ) ?>
        </div>
        <div class="main-aboutus__img">
          <?php echo do_shortcode( '[library term="home-o-nas-zdjecie"]' ) ?>
        </div>
      </div>
    </div>
</div>


<div class="main-offers">
    <div class="container">
      <div class="main-offers-section">
        <div class="main-offers__title">Nasza Oferta</div>
        <div class="main-offers__text"> <?php $obj = get_post_type_object( 'oferta' ); echo esc_html( $obj->description );?></div>
        <div class="main-offers-items">
        <?php global $post;
          $args = array('posts_per_page'=>8, 'post_type' => 'oferta');
          $myposts = get_posts( $args );
          foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
          <a href="<?php the_permalink(); ?>" class="main-offers-item">
            <div class="main-offers-item__img">
              <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            </div>
            <div class="main-offers-item-desc">
              <div class="main-offers-item__title"><?php the_title(); ?></div>
              <div class="main-offers-item__text"><?php echo project_excerpt(); ?></div>
            </div>
          </a>
          <?php endforeach; wp_reset_postdata();?>
        </div>     
      </div>
    </div>
  </div>


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


  <div class="main-opinion">
    <div class="container">
      <div class="main-opinion-content">
        <div class="main-opinion-section">

          <div class="swiper opinion">
            <div class="swiper-wrapper">
            <?php global $post;
              $args = array('posts_per_page'=>100, 'post_type' => 'opinie');
              $myposts = get_posts( $args );
              foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
              <div class="swiper-slide">
                <div class="main-opinion-item">
                  <div class="main-opinion-item-display">
                    <div class="main-opinion-item__avatar">
                      <i class="fa fa-user"></i>
                    </div>
                    <div class="main-opinion-item__name">
                      <?php the_field('osoba_nazwa'); ?> 
                    </div>
                  </div>
                  <div class="main-opinion-item__text">
                    <?php the_content() ?>
                  </div>
                 
                </div>
              </div>
              <?php endforeach; wp_reset_postdata();?>
           
            </div>
               <!-- If we need pagination -->
               <div class="swiper-opinion-pagination"></div>
          </div>
  
        </div>
      </div>
    </div>
    <img class="main-opinion__img-1" src="<?php echo get_template_directory_uri(); ?>/img/1.jpg" alt="">
    <img class="main-opinion__img-2" src="<?php echo get_template_directory_uri(); ?>/img/2.jpg" alt="">
  </div>


  <div class="main-blog">
    <div class="container">
      <div class="main-blog-section">
        <div class="main-blog__title">main-blog</div>
        <div class="main-blog__text"><?php $obj = get_post_type_object( 'blog' ); echo esc_html( $obj->description );?></div>
        <div class="main-blog-items">
        <?php global $post;
				$args = array('posts_per_page'=>3, 'post_type' => 'blog', 'orderby' => 'rand');
				$myposts = get_posts( $args );
				foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
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
        <?php endforeach; wp_reset_postdata();?>
        </div>
      </div>
    </div>
  </div>

<?php get_footer(); ?>