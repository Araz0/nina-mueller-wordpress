<!DOCTYPE html>
<html lang="de">
    <?php include 'head.php';?>
    <body>
        <?php wp_body_open();?>
        <?php get_header(); ?>
        <main>
            <section id="hero-section">
                <img src="<?php echo get_template_directory_uri().'/graphics/hero.png' ?>" alt="hero image">
                <h1>Nina Müller</h1>
                <p>I'm baby pug austin lo-fi etsy hella direct trade semiotics neutra listicle fam hexagon irony enamel pin. You probably haven't heard of them gluten-free blue bottle pug 3 wolf moon, salvia tofu hexagon migas edison bulb iceland.</p>
            
            </section>
            <section id="videos-section">
                <div class="section-hero">
                    <h2>Newest Videos</h2>
                    <p>The home of Nina Müller on YouTube. Recipe tutorials, tips, techniques and the best bits from the archives. New uploads every week - subscribe now to stay up to date!</p>
                    <img src="<?php echo get_template_directory_uri().'/graphics/flower.svg' ?>" alt="flower"> 
                </div>
                <div class="section-posts">
                    <article>
                        <img src="<?php echo get_template_directory_uri().'/graphics/baking.jpg' ?>" alt="image of making cake">
                        <a href="#" target="_blank">Title of video hebrevc</a>
                    </article>
                </div>
                <a href="#" target="_blank" class="redirect-arrow">visit the channel <i></i></a>
            </section>

            <section id="updates-section">
                <div class="section-hero">
                    <h2>Life Updates</h2>
                    <p>Every about baking and more. Nina keeps you up to date with her quick updates on her life. Definitly follow Nina’s Instagram and Twitter for even more content.</p>
                    <img src="<?php echo get_template_directory_uri().'/graphics/flower.svg' ?>" alt="flower"> 
                </div>
                <div class="section-posts">
                    <article>
                        <h3>Tumblr mixtape gastropub blog</h3>
                        <p>I'm baby pug austin lo-fi etsy hella direct trade semiotics neutra listicle fam hexagon irony enamel pin. You probably haven't heard of them gluten-free blue bottle pug 3 wolf moon, salvia tofu hexagon migas edison bulb iceland.</p>
                    </article>
                    <article>
                        <h3>Baking for breakfast</h3>
                        <p>Fixie next level VHS, selfies fanny pack venmo +1 adaptogen williamsburg. Direct trade pok pok kombucha swag gentrify raclette kogi selvage fixie master cleanse listicle ethical fam air plant. Live-edge meggings flexitarian, man bun listicle knausgaard XOXO farm-to-table kale chips. Put a bird on it cray tote bag messenger bag literally, XOXO wolf lyft green juice authentic single-origin coffee everyday carry.</p>
                    </article>
                </div>
                <a href="#" target="_blank" class="redirect-arrow">visit the channel <i></i></a>
            </section>
        </main>
        <?php include 'footer.php';?>
    </body>
</html>