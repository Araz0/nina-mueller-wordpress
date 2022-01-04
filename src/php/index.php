<!DOCTYPE html>
<html lang="de">
    <?php include 'head.php';?>
    <body>
        <?php wp_body_open();?>
        <?php get_header(); ?>
        <main class="min-main-height">
            <div class="max-main-width">
                <section class="container">
                    <?php 
                        if (have_posts()) {
                            while (have_posts()) {
                                the_post();
                                echo '<h2>'.get_the_title().'</h2>';
                                the_content();
                            }
                        }else{
                            echo "<h2>nothing to show here... ~_~</h2>";
                        }
                    ?>
                </section>
            
            </div>
        </main>
        <?php include 'footer.php';?>
    </body>
    <script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>