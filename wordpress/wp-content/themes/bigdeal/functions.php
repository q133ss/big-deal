<?php
/**
 * bigdeal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package bigdeal
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function bigdeal_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on bigdeal, use a find and replace
		* to change 'bigdeal' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'bigdeal', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'bigdeal' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'bigdeal_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'bigdeal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function bigdeal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'bigdeal_content_width', 640 );
}
add_action( 'after_setup_theme', 'bigdeal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function bigdeal_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'bigdeal' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'bigdeal' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'bigdeal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function bigdeal_scripts() {
	wp_enqueue_style( 'bigdeal-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'bigdeal-style', 'rtl', 'replace' );

	wp_enqueue_script( 'bigdeal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'bigdeal_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

wp_enqueue_style ('style', get_template_directory_uri().'/css/style.css');

wp_enqueue_script( 'swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array( 'jquery' ), 1.1, true);
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), 1.1, true);

// Register post types
add_action( 'init', 'register_post_types' );

function register_post_types(){

    register_post_type( 'fee', [
        'label'  => null,
        'labels' => [
            'name'               => 'Сбор', // основное название для типа записи
            'singular_name'      => 'Сбор', // название для одной записи этого типа
            'add_new'            => 'Добавить сбор', // для добавления новой записи
            'add_new_item'       => 'Добавление сбора', // заголовка у вновь создаваемой записи в админ-панели.
            'edit_item'          => 'Редактирование сбора', // для редактирования типа записи
            'new_item'           => 'Новый сбор', // текст новой записи
            'view_item'          => 'Смотреть сбор', // для просмотра записи этого типа.
            'search_items'       => 'Искать сбор', // для поиска по этим типам записи
            'not_found'          => 'Не найдено', // если в результате поиска ничего не было найдено
            'not_found_in_trash' => 'Не найдено в корзине', // если не было найдено в корзине
            'parent_item_colon'  => '', // для родителей (у древовидных типов)
            'menu_name'          => 'Сборы', // название меню
        ],
        'description'            => '',
        'public'                 => true,
        // 'publicly_queryable'  => null, // зависит от public
        // 'exclude_from_search' => null, // зависит от public
        // 'show_ui'             => null, // зависит от public
        // 'show_in_nav_menus'   => null, // зависит от public
        'show_in_menu'           => null, // показывать ли в меню админки
        // 'show_in_admin_bar'   => null, // зависит от show_in_menu
        'show_in_rest'        => null, // добавить в REST API. C WP 4.7
        'rest_base'           => null, // $post_type. C WP 4.7
        'menu_position'       => null,
        'menu_icon'           => null,
        //'capability_type'   => 'post',
        //'capabilities'      => 'post', // массив дополнительных прав для этого типа записи
        //'map_meta_cap'      => null, // Ставим true чтобы включить дефолтный обработчик специальных прав
        'hierarchical'        => false,
        'supports'            => [ 'title', 'editor', 'thumbnail' ], // 'title','editor','author','thumbnail','excerpt','trackbacks','custom-fields','comments','revisions','page-attributes','post-formats'
        'taxonomies'          => [],
        'has_archive'         => false,
        'rewrite'             => true,
        'query_var'           => true,
    ] );

}

function create_donations_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'donations';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        ID mediumint(9) NOT NULL AUTO_INCREMENT,
        name varchar(100) NOT NULL,
        phone varchar(20) NOT NULL,
        email varchar(100) NOT NULL,
        donation_amount decimal(10,2) NOT NULL,
        delivery_method varchar(50) NOT NULL,
        payment_id varchar(50) NOT NULL,
        fee_id varchar(50) NOT NULL DEFAULT '',
        status varchar(20) NOT NULL DEFAULT 'wait',
        PRIMARY KEY  (ID)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);

    if ($wpdb->get_var("SHOW TABLES LIKE '$table_name'") != $table_name) {
        error_log("Failed to create table $table_name");
    } else {
        error_log("Table $table_name created successfully");
    }
}

create_donations_table();


// Функция для добавления поля status к существующей таблице donations
function add_status_to_donations_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'donations';

    $charset_collate = $wpdb->get_charset_collate();

    $sql = "ALTER TABLE $table_name
            ADD COLUMN status varchar(10) DEFAULT 'wait' NOT NULL AFTER payment_id;";

    require_once ABSPATH . 'wp-admin/includes/upgrade.php';
    dbDelta($sql);
}

// Запускаем функцию при активации плагина или темы (можно выбрать любое событие)
register_activation_hook(__FILE__, 'add_status_to_donations_table');


function schedule_payment_status_check($payment_id) {
    if (!wp_next_scheduled('check_payment_status_' . $payment_id)) {
        wp_schedule_event(time(), 'minute', 'check_payment_status_' . $payment_id);
    }
}

function check_payment_status($payment_id) {
    $yookassa_api_url = 'https://api.yookassa.ru/v3/payments/' . $payment_id;
//    $yookassa_shop_id = '363770';
    $yookassa_shop_id = '408768';
    //$yookassa_secret_key = 'live_kNjSgrfbhQ5kfdCqCEMpbgdGYCdAnxXHLUFighiU5ZI';
    $yookassa_secret_key = 'test_ohhEuZX2hZozjr3Sj7omDvbJMSZZY7nPx8ZLqI74zE4';

    $ch = curl_init($yookassa_api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Authorization: Basic ' . base64_encode("$yookassa_shop_id:$yookassa_secret_key")
    ));

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_code === 200) {
        $payment_data = json_decode($response, true);
        if ($payment_data['status'] === 'succeeded') {
            update_payment_status($payment_id, 'done');
            wp_clear_scheduled_hook('check_payment_status_' . $payment_id);
        } elseif ($payment_data['status'] === 'canceled') {
            update_payment_status($payment_id, 'cancel');
            wp_clear_scheduled_hook('check_payment_status_' . $payment_id);
        }
    } else {
        // error
    }
}

function update_payment_status($payment_id, $status) {
    global $wpdb;
    $table_name = $wpdb->prefix . 'donations';
    $wpdb->update($table_name, array('status' => $status), array('payment_id' => $payment_id));
}


// AJAX обработчик для создания платежа в YooKassa
add_action('wp_ajax_create_yookassa_payment', 'create_yookassa_payment');
add_action('wp_ajax_nopriv_create_yookassa_payment', 'create_yookassa_payment');

function create_yookassa_payment() {
    check_ajax_referer('donate_nonce', 'security');

    $form_data = $_POST['form_data'];
    parse_str($form_data, $form_array);

    if (isset($form_array['fee_id']) && !empty($form_array['fee_id'])) {
        // Аргументы для запроса WP_Query
        $args = array(
            'post_type' => 'fee', // Тип поста
            'posts_per_page' => 1, // Ограничение на количество найденных постов (в данном случае ищем только один)
            'post_status' => 'publish', // Ищем только опубликованные посты
            'title' => $form_array['fee_id'], // Заголовок поста должен совпадать с переданным значением в fee_id
            'fields' => 'ids' // Возвращаем только ID найденных постов
        );

        // Создаем новый объект запроса
        $query = new WP_Query($args);

        // Проверяем, есть ли найденные посты
        if ($query->have_posts()) {
            // Получаем ID первого найденного поста (должен быть только один, так как мы ограничили посты до одного)
            $post_id = $query->posts[0];

            // Записываем ID поста в переменную $form_array['fee']
            $form_array['fee'] = $post_id;
        } else {
            // Если пост с указанным названием не найден
            $form_array['fee'] = null; // Можно установить null или какое-то другое значение по умолчанию
        }

        // Сбрасываем данные запроса
        wp_reset_postdata();
    } else {
        wp_die();
    }

    $yookassa_api_url = 'https://api.yookassa.ru/v3/payments';
//    $yookassa_shop_id = '363770';
    $yookassa_shop_id = '408768';
//    $yookassa_secret_key = 'live_kNjSgrfbhQ5kfdCqCEMpbgdGYCdAnxXHLUFighiU5ZI';
    $yookassa_secret_key = 'test_ohhEuZX2hZozjr3Sj7omDvbJMSZZY7nPx8ZLqI74zE4';
    $idempotence_key = uniqid();

    $payload = json_encode(array(
        'amount' => array(
            'value' => $form_array['donation_amount'],
            'currency' => 'RUB'
        ),
        'payment_method_data' => array(
            'type' => 'bank_card'
        ),
        'confirmation' => array(
            'type' => 'redirect',
            'return_url' => home_url('/return_url')
        ),
        'description' => 'Заказ №72'
    ));

    $ch = curl_init($yookassa_api_url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $payload);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Idempotence-Key: ' . $idempotence_key,
        'Authorization: Basic ' . base64_encode("$yookassa_shop_id:$yookassa_secret_key")
    ));

    $response = curl_exec($ch);
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($http_code === 200) {
        $payment_data = json_decode($response, true);
        if (isset($payment_data['confirmation']['confirmation_url'])) {
            global $wpdb;
            $table_name = $wpdb->prefix . 'donations';
            $data_to_insert = array(
                'name' => sanitize_text_field($form_array['name']),
                'phone' => sanitize_text_field($form_array['phone']),
                'email' => sanitize_email($form_array['email']),
                'donation_amount' => $form_array['donation_amount'],
                'fee_id' => $form_array['fee'],
                'delivery_method' => 'YooKassa',
                'payment_id' => $payment_data['id'],
                'status' => 'wait'
            );
            $wpdb->insert($table_name, $data_to_insert);

            // Устанавливаем расписание проверки статуса платежа
            schedule_payment_status_check($payment_data['id']);

            echo $payment_data['confirmation']['confirmation_url'];
        } else {
            echo 'Ошибка при создании платежа: неверный формат ответа от YooKassa';
        }
    } else {
        echo 'Ошибка при создании платежа: HTTP ' . $http_code;
    }

    wp_die();
}

// Добавляем страницу в меню админки для вывода таблицы с donations
add_action('admin_menu', 'create_donations_page');

function create_donations_page() {
    add_menu_page(
        'Пожертвования', // Название страницы
        'Пожертвования', // Заголовок меню
        'manage_options', // Роль пользователя, которому доступно меню
        'donations_page', // Уникальный идентификатор страницы
        'donations_page_content', // Функция, которая выводит содержимое страницы
        'dashicons-heart', // Иконка меню
        6 // Позиция в меню
    );
}

// Функция для вывода содержимого страницы с таблицей donations
function donations_page_content() {
    ?>
    <div class="wrap">
        <h1 class="wp-heading-inline">Donations</h1>

        <?php
        if (!class_exists('WP_List_Table')) {
            require_once ABSPATH . 'wp-admin/includes/class-wp-list-table.php';
        }

        class Donations_List_Table extends WP_List_Table {

            function prepare_items() {
                global $wpdb;
                $table_name = $wpdb->prefix . 'donations';
                $per_page = 10;

                $columns = $this->get_columns();
                $hidden = array();
                $sortable = $this->get_sortable_columns();

                $this->_column_headers = array($columns, $hidden, $sortable);

                $current_page = $this->get_pagenum();
                $total_items = $wpdb->get_var("SELECT COUNT(id) FROM $table_name");

                $this->set_pagination_args(array(
                    'total_items' => $total_items,
                    'per_page'    => $per_page
                ));

                $this->items = $wpdb->get_results($wpdb->prepare(
                    "SELECT * FROM $table_name ORDER BY id DESC LIMIT %d OFFSET %d",
                    $per_page,
                    ($current_page - 1) * $per_page
                ));
            }

            function get_columns() {
                $columns = array(
                    'id' => 'ID',
                    'name' => 'Имя',
                    'phone' => 'Телефон',
                    'email' => 'Email',
                    'donation_amount' => 'Сумма',
                    'delivery_method' => 'Способ перевозки',
                    'payment_id' => 'ID платежа',
                    'fee_id' => 'ID сбора',
                    'status' => 'Статус'
                );
                return $columns;
            }

            function get_sortable_columns() {
                $sortable_columns = array(
                    'id' => array('id', true),
                    'name' => array('name', false),
                    'email' => array('email', false),
                    'donation_amount' => array('donation_amount', false),
                    'delivery_method' => array('delivery_method', false),
                    'payment_id' => array('payment_id', false),
                    'fee_id' => array('fee_id', false),
                    'status' => array('status', false)
                );
                return $sortable_columns;
            }

            function display_table() {
                $this->prepare_items();
                $this->display();
            }

            function column_default($item, $column_name) {
                return isset($item->$column_name) ? $item->$column_name : '';
            }
        }

        $donations_table = new Donations_List_Table();
        $donations_table->display_table();
        ?>

    </div>
    <?php
}

// Хук для выполнения проверки статуса платежа через cron
add_action('init', 'init_payment_status_check_cron');

function init_payment_status_check_cron() {
    if (!wp_next_scheduled('payment_status_check_cron')) {
        wp_schedule_event(time(), 'minute', 'payment_status_check_cron');
    }
}

// Запуск функции проверки статуса платежа по расписанию
add_action('payment_status_check_cron', 'run_payment_status_check_cron');

function run_payment_status_check_cron() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'donations';
    $results = $wpdb->get_results("SELECT payment_id FROM $table_name WHERE status = 'wait'");

    foreach ($results as $result) {
        check_payment_status($result->payment_id);
    }
}