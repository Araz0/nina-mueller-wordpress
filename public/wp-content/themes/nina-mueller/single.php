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

                        
                        <p class="full-post__tags">
                            <?php
                            $tags = get_tags();
                            if ( $tags ) :
                                foreach ( $tags as $tag ) : ?>
                                    <a href="<?php echo esc_url( get_tag_link( $tag->term_id ) ); ?>" title="<?php echo esc_attr( $tag->name ); ?>"> #<?php echo esc_html( $tag->name ); ?></a>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </p>
                        <?php
                            $thumbnail_Link = get_template_directory_uri()."/images/nina-mueller-banner.png";
                            $thumbnaul_alt = "post thumbnail image";
                            if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                $thumbnail_Link= get_the_post_thumbnail_url();
                                $thumbnaul_alt = get_the_post_thumbnail_caption();
                            }
                            $yt_vid_id = get_yt_video_id(get_field("yt_url"));
                        ?>
                        <iframe src="https://www.youtube-nocookie.com/embed/<?php echo $yt_vid_id; ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        <?php echo get_the_content(); ?>
                    </Article>
                </section>
            </div>
        </main>
        <?php include 'footer.php';?>
    </body>
    <script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>