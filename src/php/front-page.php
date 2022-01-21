<!DOCTYPE html>
<html lang="de">
    <?php include 'head.php';?>
    <body>
        <?php wp_body_open();?>
        <?php get_header(); ?>
        <main class="min-main-height">
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
                <?php 
                    $context = Timber::context();
                    $args = 'order=DESC&category_name=videos&posts_per_page=2';
                    $context['posts'] = Timber::get_posts( $args );
                    Timber::render( 'videos.twig', $context );
                ?>

                <a href="<?php echo get_permalink( get_page_by_path( $page ) ); ?>" target="_blank" class="redirect-arrow container__link"><h4>more videos</h4><i></i></a>
            </section>

            <section id="update" class="container">
                <?php 
                    $page = 'blog';
                    $updates_page = get_page_intro_by_path($page);
                    
                    $title = explode(" ", $updates_page[0]);
                    $context = Timber::context();
                    $context['title1'] = $title[0];
                    $context['title2'] = $title[1];
                    $context['content'] = $updates_page[1];
                    Timber::render( 'intro.twig', $context );
                ?>
                <?php 
                    $context = Timber::context();
                    $args = 'order=DESC&category_name=blog&posts_per_page=2';
                    $context['posts'] = Timber::get_posts( $args );
                    Timber::render( 'front-posts.twig', $context );
                ?>

                <a href="<?php echo get_permalink( get_page_by_path( $page ) ); ?>" target="_blank" class="redirect-arrow container__link"><h4>see all updates</h4><i></i></a>
            </section>
        </main>
        <?php include 'footer.php';?>
    </body>
    <script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>