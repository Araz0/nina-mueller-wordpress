<!DOCTYPE html>
<html lang="de">
    <?php include 'head.php';?>
    <body>
        <?php wp_body_open();?>
        <?php get_header(); ?>
        <main class="">
            <div class="max-main-width">
                <section class="hero">
                    <div class="hero__background">
                        <?php include "logo.php" ?>
                        <?php include "logo.php" ?>
                    </div>
                    <div class="hero__image__wrapper">
                        <?php
                            $thumbnail_Link = get_template_directory_uri()."/images/illuminated-keyboard.jpg";
                            $thumbnail_alt = "Page Thumbnail image";
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                $thumbnail_Link= get_the_post_thumbnail_url();
                                $thumbnail_alt= get_the_post_thumbnail_caption();
                            }
                            echo '<img class="hero__image__wrapper__item" src="'. $thumbnail_Link .'" alt="'. $thumbnail_alt .'" width="218" height="395">';
                        ?>
                    </div>
                    <?php $title = explode(" ", get_the_title()); ?>
                    <h1 class="hero__heading"><span class="first-word"><?php echo $title[0];?></span><span class="second-word"><?php echo $title[1];?></span></h1>
                    <p class="hero__copy"><?php echo get_the_content(); ?></p>
                    <img class="hero__arrow" src="<?php echo get_template_directory_uri().'/images/arrow-vertical.svg' ?>" alt="a vertical arrow" >
                </section>
            </div>
            <section id="video" class="container">
                <div class="intro">
                <?php 
                        $updates_page = get_page_intro_by_path("videos");
                        $title = explode(" ", $updates_page[0]);
                        $content = $updates_page[1];
                    ?>
                    <h2 class="intro__heading"><span class="first-word"><?php echo $title[0] ?></span><span class="second-word"><?php echo $title[1]?></span></h2>
                    <p class="intro__copy"><?php echo $content?></p>
                    <img class="intro__flower" src="<?php echo get_template_directory_uri().'/images/logo-small.svg' ?>" alt="Nina Müller Logo in small" width="40" height="40"> 
                </div>

                <div class="container__posts">
                    <?php
                        $updates_query = new WP_Query('order=DESC&category_name=videos&posts_per_page=2');
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
                            <img class="container__posts__item__image" src="<?php echo $featured_img_url ?>" alt="<?php echo $featured_img_alt; ?>" width="320" height="180">
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
                <a href="/videos" target="_blank" class="redirect-arrow container__link"><h4>more videos</h4><i></i></a>
            </section>

            <section id="update" class="container">
                <div class="intro">
                    <?php 
                        $updates_page = get_page_intro_by_path("updates");
                        $title = explode(" ", $updates_page[0]);
                        $content = $updates_page[1];
                    ?>
                    <h2 class="intro__heading"><span class="first-word"><?php echo $title[0] ?></span><span class="second-word"><?php echo $title[1]?></span></h2>
                    <p class="intro__copy"><?php echo $content?></p>
                    <img class="intro__flower" src="<?php echo get_template_directory_uri().'/images/logo-small.svg' ?>" alt="Nina Müller Logo in small" width="40" height="40"> 
                </div>

                <div class="container__posts">
                    <?php
                        $updates_query = new WP_Query('order=DESC&category_name=updates&posts_per_page=2');
                        if ($updates_query->have_posts()):
                        while ($updates_query->have_posts()): $updates_query->the_post();?>
                        <article class="container__posts__item">
                            <a class="container__posts__item__heading" href="<?php the_permalink();?>">
                                <h3 class="container__posts__item__heading"><?php the_title();?></h3>
                            </a>
                            <p class="container__posts__item__copy"><?php echo get_the_excerpt(); ?></p>
                        </article>
                        <?php endwhile;?>
                        <?php else: ?>
                    <p>Erster Post demnächst...</p>
                    <?php endif;?>

                    <?php wp_reset_postdata();?>
                </div>
                <a href="/updates" target="_blank" class="redirect-arrow container__link"><h4>see all updates</h4><i></i></a>
            </section>
        </main>
        <?php include 'footer.php';?>
    </body>
    <script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>