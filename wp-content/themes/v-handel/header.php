<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <!-- Your head content -->
</head>

<!-- Your site header content -->

<header>
    <nav class="main-navigation">
        <?php
        wp_nav_menu(
            array(
                'theme_location' => 'primary',
                'menu_class'     => 'primary-menu',
                'container'      => false,
            )
        );
        ?>
    </nav>

    <div style="border: solid 2px black; padding: 10px;">
        <ul>
            <li>
                <a href="">Startsida</a>
                <a href="">Shop</a>
                <a href="">Cart</a>
                <a href="">Contact</a>
            </li>

        </ul>
        
    </div>
</header>