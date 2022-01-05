<!DOCTYPE html>
<html lang="de">
    <?php include 'head.php';?>
    <body>
        <?php wp_body_open();?>
        <?php get_header(); ?>
        <main class="min-main-height">
            <div class="max-main-width">
            <section id="update" class="container">
                <div class="intro">
                    <?php 
                        $title = explode(" ", get_the_title());
                    ?>
                    <h2 class="intro__heading"><span class="first-word"><?php echo $title[0] ?></span><span class="second-word"><?php echo $title[1]?></span></h2>
                    <p class="intro__copy"><?php echo get_the_content(); ?></p>
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
                            <p class="container__posts__item__copy"><?php echo get_the_excerpt(); ?> <a href="<?php the_permalink();?>">read more...</a></p>
                        </article>
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