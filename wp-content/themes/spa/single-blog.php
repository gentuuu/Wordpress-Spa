<?php get_header(); ?>

<?php get_head_post(); ?>

<main class="main-home">


<div class="page-blog">
            <div class="container">
                <div class="page-blog-content">
                    <div class="page-blog-left">
                        <div class="page-blog__img">
                        <?php $obraz = get_field( 'zdjecie_blog' ); ?>
                        <?php if ( $obraz ) { ?>
                            <img src="<?php echo $obraz['url']; ?>" alt="<?php echo $obraz['alt']; ?>" />
                        <?php } ?>
                        </div>
                        <div class="page-blog__date">
                            <i class="fa fa-calendar"></i> <?php the_time( 'F j, Y' );?>
                        </div>
                        <div class="page-blog__text">
                            <?php the_content() ?>
                        </div>
                            <?php $tags = get_the_tags($post->ID);  ?>

                            <div class="page-blog__list">
                            <?php foreach($tags as $tag) :  ?>
                                            <a  href="<?php bloginfo('url');?>/tag/<?php print_r($tag->slug);?>">
                                                    <?php print_r($tag->name); ?>
                                            </a>   
                         
                            <?php endforeach; ?>
                            
                            </div>
                                
                           


                    </div>
                    <div class="page-blog-right">
                     

                        <div class="page-blog-random">
                            <div class="page-blog-random-items">
                                <div class="page-blog-random__title">
                                    Popularne artykuły
                                </div>
                                <?php $rand_posts = get_posts( array(
                                        'posts_per_page' => 4,
                                        'orderby'        => 'rand',
                                        'post_type' => 'blog' 
                                    ) );
                                    
                                    if ( $rand_posts ) {
                                    foreach ( $rand_posts as $post ) : 
                                        setup_postdata( $post );
                                ?>
                                <a href="<?php the_permalink(); ?>" class="page-blog-random-item">
                                    <div class="page-blog-random-item__img">
                                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                                    </div>
                                    <div class="page-blog-random-item__text">
                                        <div class="page-blog-random-item__title">
                                        <?php the_title(); ?>
                                        </div>
                                        <div class="page-blog-random-item__date">
                                            <?php the_time( 'F j, Y' );?>
                                        </div>
                                    </div>
                                </a>
                                <?php endforeach; wp_reset_postdata(); } ?>
                                
                            </div>
                        </div>
                        <div class="page-blog-category">
                            <div class="page-blog-category__title">Kategorie</div>
                            <div class="page-blog-category-items">
                                <?php
                                    $categories = get_categories( array(
                                        'orderby' => 'name',
                                        'order'   => 'ASC'
                                    ) );
                                    
                                    foreach( $categories as $category ) {
                                        $category_link = sprintf( 
                                            '<a href="%1$s" alt="%2$s" class="page-blog-category-item">%3$s</a>',
                                            esc_url( get_category_link( $category->term_id ) ),
                                            esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ),
                                            esc_html( $category->name )
                                        );
                                        
                                        echo sprintf( $category_link );
                                    } 
                                ?>
                            </div>
                        </div>

                        <div class="page-blog-tags">
                            <div class="page-blog-tags__title">Tagi</div>
                            <div class="page-blog-tags-items">
                                <?php 
                                $tags = get_tags();
                                $html = '<div class="page-blog-tags-item">';
                                foreach ( $tags as $tag ) {
                                    $tag_link = get_tag_link( $tag->term_id );
                                
                                    $html .= "<a href='{$tag_link}' title='{$tag->name} Tag' class='{$tag->slug}'>";
                                    $html .= "{$tag->name}</a>";
                                }
                                $html .= '</div>';
                                echo $html;
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



</main>


<?php get_footer();  ?>