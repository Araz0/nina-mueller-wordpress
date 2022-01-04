<!DOCTYPE html>
<html lang="de">
    <?php include 'head.php';?>
    <body>
        <?php wp_body_open();?>
        <?php get_header(); ?>
        <main class="">
            <div class="max-main-width">
            <?php 
                if (have_posts()) {
                    while (have_posts()) {
                        the_post();
                        echo '<article class="post__container">';
                        echo '<h2>'.get_the_title().'</h2>';
                        the_content();

                        echo '</article>';
                    }
                }else{
                    echo "<p>nothing to show here... ~_~</p>";
                }
                ?>
            </div>
        </main>
        <?php include 'footer.php';?>
    </body>
    <script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>