<nav class="footer__nav">
    <ul class="footer__nav-items">
        <?php
        $menu_object = wp_get_nav_menu_object( 'Footer' );
        $menu_id = $menu_object->term_id;
        // Получение элементов меню по ID
        $menu_items = wp_get_nav_menu_items($menu_id);

        if (!empty($menu_items)) {
            foreach ($menu_items as $menu_item) {
        ?>
        <li class="footer__nav-item">
            <a href="<?php echo esc_url($menu_item->url); ?>" class="footer__nav-link">
                <?php echo esc_html($menu_item->title); ?>
            </a>
        </li>
        <?php
            }
        }
        ?>
    </ul>
    <a href="#" class="footer__info-text footer__nav-dev desktop">
        Разработка сайта
    </a>
</nav>