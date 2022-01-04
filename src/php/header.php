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
            <?php
                //   this is to display a menu with full control over its items.
                $menu_name = 'main-left';
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );

                foreach ( $menuitems as $item ):
                    $id = get_post_meta( $item->ID, '_menu_item_object_id', true );
                    $page = get_page( $id );
                    $link = get_page_link( $id ); ?>
            
                    <li><a href="<?php echo $link; ?>"><?php echo $page->post_title; ?></a></li>
            <?php endforeach; ?>
        </ul>
        <a href="/" class="list list__mid">
            <?php include 'logo.php';?>
        </a>
        <ul class="list list__right">
            <?php
                //   this is to display a menu with full control over its items.
                $menu_name = 'main-right';
                $locations = get_nav_menu_locations();
                $menu = wp_get_nav_menu_object( $locations[ $menu_name ] );
                $menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
                
                foreach ( $menuitems as $item ):
                $id = get_post_meta( $item->ID, '_menu_item_object_id', true );
                $page = get_page( $id );
                $link = get_page_link( $id ); ?>
            
                <li><a href="<?php echo $link; ?>"><?php echo $page->post_title; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </div>

</header>