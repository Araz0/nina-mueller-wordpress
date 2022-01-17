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
                    $title = explode(" ", get_the_title());
                ?>
                <div class="intro">
                    <h2 class="intro__heading"><span class="first-word"><?php echo $title[0]; ?></span><span class="second-word"><?php echo $title[1]; ?></span></h2>
                    <p class="intro__copy"><?php echo get_the_content() ?></p>
                    <img class="intro__flower" src="<?php echo get_template_directory_uri().'/images/logo-small.svg' ?>" alt="Nina Müller Logo in small" width="40" height="40"> 
                </div>
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