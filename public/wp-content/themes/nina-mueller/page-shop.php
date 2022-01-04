<!DOCTYPE html>
<html lang="de">
    <?php include 'head.php';?>
    <body>
        <?php wp_body_open();?>
        <?php get_header(); ?>
        <main class="min-main-height">
            <div class="max-main-width">
                <section class="container">
                    <h2>This is a custom shop page</h2>
                </section>
            </div>
        </main>
        <?php include 'footer.php';?>
    </body>
    <script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>