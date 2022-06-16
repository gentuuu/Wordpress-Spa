<?php get_header(); ?>

<?php get_head(); ?>

<main>

    <div class="faq">
        <div class="container">
            <div class="faq-content">
                <?php
                $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                $args = array( 
                    'posts_per_page' => 100, 
                    'paged' => $paged, 
                    'post_type' => 'faq'
                );
                $loop = new WP_Query($args);
                ?>
                <?php if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post(); ?>

                <div class="faq-item">
                    <div class="faq-item-header">
                        <div class="faq-item-question">
                            <?php the_title(); ?>
                        </div>
                        <div class="faq-item-icon">
                            <i class="fa fa-angle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class="faq-item-content">
                        <p class="faq-item-answer">
                            <?php the_content(); ?>
                        </p>
                    </div>
                </div>

                <?php endwhile; endif; ?>

            </div>
        </div>
    </div>



</main>


<?php get_footer(); ?>