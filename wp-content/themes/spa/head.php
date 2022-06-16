<header>
  <div class="header-page">
    <div class="header-page__img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/header-img.jpg" alt="">
    </div>
    <div class="header-page-content">
      <h1 class="header-page__title">
      <?php $post_name = get_post_type( get_the_ID() );
      echo  $post_name ?>
      </h1>
    </div>
  </div>
</header>

