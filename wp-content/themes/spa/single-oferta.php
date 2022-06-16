<?php get_header(); ?>

<?php get_head_post(); ?>

<main class="main-home">


<div class="page-offers">
      <div class="container">
          <div class="page-offers-content">
              <div class="page-offers-img">
                <img src="/img/Krajobraz.webp" alt="">
              </div>
              <div class="page-offers-row">
                <div class="page-offers-text"> <?php the_content() ?></div>
                <ul class="page-offers-info">
                  <li><span>Czas</span> Pon - Pt : 8:00 - 18:00</li>
                  <li><span>Cena:</span> <?php the_field('cena'); ?> zł</li>
                  <li><span>Osoby prowadące zabieg:</span>
                    <?php
                      $featured_posts = get_field('relacja_osoba');
                      if( $featured_posts ): ?>
                          <?php foreach( $featured_posts as $post ): 
                              setup_postdata($post); ?>
                                  <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                          <?php endforeach; ?>
                          <?php wp_reset_postdata(); ?>
                      <?php endif; ?>
                  </li>
                  <li><span>Czas trwania:</span> <?php the_field('czas_trwania'); ?></li>
                </ul>
              </div>
          </div>
      </div>
</div>

<div class="page-features">
    <div class="page-features-row">
      <div class="page-features-title">Lorem ipsum</div>
      <div class="page-features-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis accusamus, doloribus unde</div>
      <div class="page-features-items">
        <div class="page-features-item">
          <div class="page-features-item__icon"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i></div>
          <div class="page-features-item__title"><?php echo do_shortcode( '[library term="pakiety-box1-title"]' ) ?></div>
          <div class="page-features-item__text"><?php echo do_shortcode( '[library term="pakiety-box1-text"]' ) ?></div>
        </div>
        <div class="page-features-item">
          <div class="page-features-item__icon"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i></div>
          <div class="page-features-item__title"><?php echo do_shortcode( '[library term="pakiety-box2-title"]' ) ?></div>
          <div class="page-features-item__text"><?php echo do_shortcode( '[library term="pakiety-box2-text"]' ) ?></div>
        </div>
        <div class="page-features-item">
          <div class="page-features-item__icon"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i></div>
          <div class="page-features-item__title"><?php echo do_shortcode( '[library term="pakiety-box3-title"]' ) ?></div>
          <div class="page-features-item__text"><?php echo do_shortcode( '[library term="pakiety-box3-text"]' ) ?></div>
        </div>
        <div class="page-features-item">
          <div class="page-features-item__icon"><i class="fa fa-assistive-listening-systems" aria-hidden="true"></i></div>
          <div class="page-features-item__title"><?php echo do_shortcode( '[library term="pakiety-box4-title"]' ) ?></div>
          <div class="page-features-item__text"><?php echo do_shortcode( '[library term="pakiety-box4-text"]' ) ?></div>
        </div>
      </div>
    </div>
    <div class="page-features-img">
     <?php echo do_shortcode( '[library term="oferta-zdjecie"]' ) ?>
    </div>
  </div>

  <div class="main-pakiet">
    <div class="container">
      <div class="main-pakiet-content">
        <div class="main-pakiet__title">Nasze paliety</div>
        <div class="main-pakiet__text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugit mollitia at, architecto porro aliquam temporibus corrupti quasi ab sed dicta facilis expedita perspiciatis. Id veritatis est dolor nam cupiditate ut!</div>
        <div class="main-pakiet-items">

        <?php global $post;
          $args = array('posts_per_page'=>100, 'post_type' => 'pakiety');
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

  <div class="offers">
    <div class="container">
      <div class="main-offers-section">
        <div class="main-offers__title">Podobne oferty</div>
        <div class="main-offers__text"> <?php $obj = get_post_type_object( 'oferta' ); echo esc_html( $obj->description );?></div>
        <div class="main-offers-items">
        <?php global $post;
          $args = array('posts_per_page'=>3, 'post_type' => 'oferta', 'orderby' => 'rand' );
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

</main>



<?php get_footer(); ?>