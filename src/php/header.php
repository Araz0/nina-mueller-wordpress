<header>
    <div class="header header__mobile">
        <ul class="nav">
            <li class="nav__left">
                <a href="#">
                    <img src="<?php echo get_template_directory_uri().'/images/youtube-icon.svg' ?>" alt="youtube logo" width="32" height="32">
                </a>
            </li>
            <li class="nav__mid">
                <a href="/" >
                    <?php include 'logo.php';?>
                </a>
            </li>
            <li class="nav__right">
                <button id="nav-button">
                    <img src="<?php echo get_template_directory_uri().'/images/navigation.svg' ?>" alt="navigation icon" width="32" height="32">
                </button>
            </li>
        </ul>
    </div>
    
    <div class="header header__desktop">
        <ul class="list list__left">
            <li><a href="#">My Videos</a></li>
            <li><a href="#">Recipies</a></li>
            <li><a href="#">Life Updates</a></li>
        </ul>
        <a href="/" class="list list__mid">
            <?php include 'logo.php';?>
        </a>
        <ul class="list list__right">
            <li><a href="#">About</a></li>
            <li><a href="#">Shop (soon)</a></li>
            <li><a href="#">Contact</a></li>
        </ul>
    </div>

</header>