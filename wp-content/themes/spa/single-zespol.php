<?php get_header(); ?>

<?php get_head_post(); ?>

<main class="main-home">


    <div class="page-job">
        <div class="container">
            <div class="page-job-content">
                <div class="page-job-about">
                    <div class="page-job-about__img">
                        <?php $obraz = get_field( 'zdjecie_profilowe' ); ?>
                        <?php if ( $obraz ) { ?>
                        <img src="<?php echo $obraz['url']; ?>" alt="<?php echo $obraz['alt']; ?>" />
                        <?php } ?>
                    </div>
                    <div class="page-job-about__desc">
                        <div class="page-job-about__name"><?php the_title(); ?></div>
                        <div class="page-job-about__info">
                            <span>Zawód:</span> <?php the_field('zawod'); ?>
                        </div>
                        <div class="page-job-about__info">
                            <span>DOświadczenie:</span> <?php the_field('doswiadczenie'); ?>
                        </div>
                        <div class="page-job-about__info">
                            <span>Email:</span> <?php the_field('email'); ?>
                        </div>
                        <div class="page-job-about__info">
                            <span>Phone:</span> <?php the_field('telefon'); ?>
                        </div>
                        <div class="page-job-about__social">
                            <?php if( get_field('facebook') ): ?>
                                <a href="<?php the_field('facebook'); ?>"><i class="fa fa-facebook"></i> </a>
                            <?php endif; ?>
                            <?php if(get_field('twitter') ): ?>
                                <a href="<?php the_field('twitter'); ?>"><i class="fa fa-twitter"></i> </a>
                            <?php endif; ?>
                            <?php if(get_field('instagram') ) : ?>
                                <a href="<?php the_field('instagram'); ?>"><i class="fa fa-instagram"></i> </a>
                            <?php endif; ?>
                            <?php if(get_field('linkedin') ) : ?>
                                <a href="<?php the_field('linkedin'); ?>"><i class="fa fa-linkedin"></i> </a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="page-job__title">Poznaj mnie</div>
                <div class="page-job__text">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>

</main>


<?php get_footer(); ?>