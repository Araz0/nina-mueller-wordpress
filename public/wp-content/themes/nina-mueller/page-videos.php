<!DOCTYPE html>
<html lang="de">
    <?php include 'head.php';?>
    <body>
        <?php wp_body_open();?>
        <?php get_header(); ?>
        <main class="min-main-height">
            <div class="max-main-width">
            <section id="video" class="container">
                <?php 
                    $page = 'videos';
                    $updates_page = get_page_intro_by_path($page);
                    $title = explode(" ", $updates_page[0]);
                    $context = Timber::context();
                    $context['title1'] = $title[0];
                    $context['title2'] = $title[1];
                    $context['content'] = $updates_page[1];
                    Timber::render( 'intro.twig', $context );
                ?>
                <div class="container__posts">
                    <?php
                        /* using Normal WP Loop instead of Timber due to issues in Timber working with our Custon Function "get_yt_video_thumbnail"*/
                        $services_query = new WP_Query('order=DESC&category_name=videos');
                        if ($services_query->have_posts()):
                        while ($services_query->have_posts()): $services_query->the_post();?>
                            <div class="container__posts__item">
                                <img class="container__posts__item__image" src="<?php echo get_yt_video_thumbnail(get_field("yt_url")); ?>" alt="youtube thumbnail image" width="320" height="180">
                                <a class="container__posts__item__overlay" href="<?php the_permalink();?>" target="_blank">
                                    <img class="container__posts__item__overlay__button" src="<?php echo get_template_directory_uri().'/images/play-button.svg' ?>" alt="video play button" width="32" height="32">
                                    <h4 class="container__posts__item__overlay__link"><?php the_title();?></h4>
                                </a>
                            </div>
                        <?php endwhile;?>
                        <?php else: ?>
                    <p>Erster Post demnächst...</p>
                    <?php endif;?>
                    <?php wp_reset_postdata();?>
                </div>
            </section>
            </div>
        </main>
        <?php include 'footer.php';?>
    </body>
    <script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>