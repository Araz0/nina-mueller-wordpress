<!DOCTYPE html>
<html lang="de">
    <?php include 'head.php';?>
    <body>
        <?php wp_body_open();?>
        <?php get_header(); ?>
        <main class="min-main-height">
            <div class="max-main-width">
            <section id="video" class="container">
                <div class="intro">
                    <?php 
                        $title = explode(" ", get_the_title());
                        $content = get_the_content();
                    ?>
                    <h2 class="intro__heading"><span class="first-word"><?php echo $title[0] ?></span><span class="second-word"><?php echo $title[1]?></span></h2>
                    <p class="intro__copy"><?php echo $content?></p>
                    <img class="intro__flower" src="<?php echo get_template_directory_uri().'/images/logo-small.svg' ?>" alt="Nina Müller Logo in small" width="40" height="40"> 
                </div>

                <div class="container__posts">
                    <?php
                        $updates_query = new WP_Query('order=DESC&category_name=videos');
                        if ($updates_query->have_posts()):
                        while ($updates_query->have_posts()): $updates_query->the_post();?>

                        <div class="container__posts__item">
                            <?php
                                $featured_img_url = get_template_directory_uri().'/images/video-1.jpeg';
                                $featured_img_alt = 'image of making cake';
                                if (has_post_thumbnail()) {
                                    /* grab the url for the full size featured image */
                                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                    $featured_img_alt = get_the_post_thumbnail_caption(get_the_ID());
                                }
                            ?>
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