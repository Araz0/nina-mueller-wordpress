<!DOCTYPE html>
<html lang="de">
    <?php include 'head.php';?>
    <body>
        <?php wp_body_open();?>
        <?php get_header(); ?>
        <main class="">
            <div class="max-main-width">
                <section class="hero">
                    <div class="hero__background">
                        <?php include "logo.php" ?>
                        <?php include "logo.php" ?>
                    </div>
                    <div class="hero__image__wrapper">
                        <img class="hero__image__wrapper__item" src="<?php echo get_template_directory_uri().'/images/hero-image.jpeg' ?>" alt="a mother and her child baking together" width="218" height="395">
                    </div>
                    <h1 class="hero__heading"><span class="first-word">Nina</span><span class="second-word">Müller</span></h1>
                    <p class="hero__copy">I'm baby pug austin lo-fi etsy hella direct trade semiotics neutra listicle fam hexagon irony enamel pin. You probably haven't heard of them gluten-free blue bottle pug 3 wolf moon, salvia tofu hexagon migas edison bulb iceland.</p>
                    <img class="hero__arrow" src="<?php echo get_template_directory_uri().'/images/arrow-vertical.svg' ?>" alt="a vertical arrow" >
                </section>
            </div>
            <section id="video" class="container">
                <div class="intro">
                    <h2 class="intro__heading"><span class="first-word">Newest</span><span class="second-word">Videos</span></h2>
                    <p class="intro__copy">The home of Nina Müller on YouTube. Recipe tutorials, tips, techniques and the best bits from the archives. New uploads every week - subscribe now to stay up to date!</p>
                    <img class="intro__flower" src="<?php echo get_template_directory_uri().'/images/logo-small.svg' ?>" alt="Nina Müller Logo in small" width="40" height="40"> 
                </div>

                <div class="container__posts">
                    <div class="container__posts__item">
                        <img class="container__posts__item__image" src="<?php echo get_template_directory_uri().'/images/video-1.jpeg' ?>" alt="image of making cake" width="320" height="180">
                        <a class="container__posts__item__overlay" href="#" target="_blank">
                            <img class="container__posts__item__overlay__button" src="<?php echo get_template_directory_uri().'/images/play-button.svg' ?>" alt="video play button" width="32" height="32">
                            <h4 class="container__posts__item__overlay__link">Baking for Breakfast</h4>
                        </a>
                    </div>
                    <div class="container__posts__item">
                        <img class="container__posts__item__image" src="<?php echo get_template_directory_uri().'/images/video-2.jpeg' ?>" alt="image of making cake" width="320" height="180">
                        <a class="container__posts__item__overlay" href="#" target="_blank">
                            <img class="container__posts__item__overlay__button" src="<?php echo get_template_directory_uri().'/images/play-button.svg' ?>" alt="video play button" width="32" height="32">
                            <a class="container__posts__item__overlay__link" href="#" target="_blank"><h4>How to use Eggs for Breakfast</h4></a>
                        </a>
                    </div>
                </div>
                <a href="#" target="_blank" class="redirect-arrow container__link"><h4>visit the channel</h4><i></i></a>
            </section>

            <section id="update" class="container">
                <div class="intro">
                    <h2 class="intro__heading"><span class="first-word">Life</span><span class="second-word">Updates</span></h2>
                    <p class="intro__copy">Every about baking and more. Nina keeps you up to date with her quick updates on her life. Definitly follow Nina’s Instagram and Twitter for even more content.</p>
                    <img class="intro__flower" src="<?php echo get_template_directory_uri().'/images/logo-small.svg' ?>" alt="Nina Müller Logo in small" width="40" height="40"> 
                </div>

                <div class="container__posts">
                    <article class="container__posts__item">
                        <h3 class="container__posts__item__heading">Tumblr mixtape gastropub blog</h3>
                        <p class="container__posts__item__copy">I'm baby pug austin lo-fi etsy hella direct trade semiotics neutra listicle fam hexagon irony enamel pin. You probably haven't heard of them gluten-free blue bottle pug 3 wolf moon, salvia tofu hexagon migas edison bulb iceland.</p>
                    </article>
                    <article class="container__posts__item">
                        <h3 class="container__posts__item__heading">Baking for breakfast</h3>
                        <p class="container__posts__item__copy">Fixie next level VHS, selfies fanny pack venmo +1 adaptogen williamsburg. Direct trade pok pok kombucha swag gentrify raclette kogi selvage fixie master cleanse listicle ethical fam air plant. Live-edge meggings flexitarian, man bun listicle knausgaard XOXO farm-to-table kale chips. Put a bird on it cray tote bag messenger bag literally, XOXO wolf lyft green juice authentic single-origin coffee everyday carry.</p>
                    </article>
                </div>
                <a href="#" target="_blank" class="redirect-arrow container__link"><h4>see all updates</h4><i></i></a>
            </section>
        </main>
        <?php include 'footer.php';?>
    </body>
    <script src="<?php echo get_template_directory_uri().'/js/script.js' ?>"></script>
</html>