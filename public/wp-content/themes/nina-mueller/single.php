<!DOCTYPE html>
<html lang="de">
    <?php include 'head.php';?>
    <body>
        <?php wp_body_open();?>
        <?php get_header(); ?>
        <main class="min-main-height">
            <div class="max-main-width">
                <section class="container">
                    <Article class="full-post">
                        <h2 class="full-post__title"><?php echo get_the_title(); ?></h2>
                        <p class="full-post__tags">Tags: #tag1 #tag2 #tag6</p>
                        <?php
                            $thumbnail_Link = get_template_directory_uri()."/images/nina-mueller-banner.png";
                            $thumbnaul_alt = "post thumbnail image";
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                $thumbnail_Link= get_the_post_thumbnail_url();
                                $thumbnaul_alt = get_the_post_thumbnail_caption();
                            }
                        ?>
                        <img class="full-post__thumbnail" src="<?php echo $thumbnail_Link; ?>" alt="<?php echo $thumbnaul_alt; ?>">
                        <p class="full-post__content"><?php echo get_the_content(); ?></p>
                    </Article>
                </section>
            </div>
        </main>
        <?php include 'footer.php';?>
    </body>
    <script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>