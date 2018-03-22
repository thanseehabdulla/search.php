<?php get_header(); ?>
    <main role="main">
        <!-- section -->
        <section class="clearfix">
            <div class="container">

                <h1><?php echo sprintf(__('%s Search Results for ', 'html5blank'), $wp_query->found_posts);
                    echo get_search_query(); ?></h1>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                            <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                <?php echo get_the_post_thumbnail($post_id, array('class' => 'alignleft')); ?>
                            </a>
                            <h2>
                                <a href="<?php the_permalink(); ?>"
                                   title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <span class="date"><?php the_time('F j, Y'); ?><?php the_time('g:i a'); ?></span>
                            <p><?php $excerpt = get_the_excerpt();
                                echo string_limit_words($excerpt, 15); ?></p>



                    </article>
                <?php endwhile; else: ?>
                    <article>
                        <h2><?php _e('Sorry, nothing to display.', 'html5blank'); ?></h2>
                    </article>
                <?php endif; ?>
                <div align="center clearfix">
                    <?php if (function_exists('wp_pagenavi')) { ?>
                        <?php wp_pagenavi(); ?>
                    <?php } else { ?>
                        <div class="navigation"><p>
                                <?php posts_nav_link('&#8734;', '&laquo;&laquo; Previous Posts', 'Older Posts &raquo;&raquo;'); ?></p>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </section>
        <!-- /section -->
    </main>
<? //php get_sidebar(); ?>
<?php get_footer(); ?>
