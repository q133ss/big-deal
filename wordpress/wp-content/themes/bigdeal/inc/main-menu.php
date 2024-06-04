<nav class="header__nav">
    <ul class="header__nav-items">
        <?php
        $menu_object = wp_get_nav_menu_object( 'main' );
        $menu_id = $menu_object->term_id;
        // Получение элементов меню по ID
        $menu_items = wp_get_nav_menu_items($menu_id);

        if (!empty($menu_items)) {
            foreach ($menu_items as $menu_item) {
        ?>
        <li class="header__nav-item">
            <a href="<?php echo esc_url($menu_item->url); ?>" class="header__nav-link">
                <?php echo esc_html($menu_item->title); ?>
            </a>
        </li>
        <?php
            }
        }
        ?>
    </ul>
</nav>