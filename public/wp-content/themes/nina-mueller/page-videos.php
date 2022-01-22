<!DOCTYPE html>
<html lang="de">
    <?php include 'head.php';?>
    <body>
        <?php wp_body_open();?>
        <?php get_header(); ?>
        <main class="min-main-height">
            <div class="max-main-width">
            <section id="video" class="container page">
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
                    $args = 'order=DESC&category_name=videos';
                    $context['posts'] = Timber::get_posts( $args );
                    Timber::render( 'videos.twig', $context );
                ?>
            </section>
            </div>
        </main>
        <?php include 'footer.php';?>
    </body>
    <script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>