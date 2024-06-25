<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bigdeal
 */

?>

<div class="modal" data-modal="modal-donate">
    <div class="modal__content">
        <button class="modal__close" data-modal-toggle="modal-donate">
            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M13.5502 0.70998C13.4577 0.617276 13.3478 0.543728 13.2268 0.493547C13.1059 0.443366 12.9762 0.417535 12.8452 0.417535C12.7143 0.417535 12.5846 0.443366 12.4636 0.493547C12.3426 0.543728 12.2327 0.617276 12.1402 0.70998L7.25022 5.58998L2.36022 0.699979C2.26764 0.607397 2.15773 0.533957 2.03677 0.483852C1.9158 0.433747 1.78615 0.407959 1.65522 0.407959C1.52429 0.407959 1.39464 0.433747 1.27368 0.483852C1.15272 0.533957 1.04281 0.607397 0.950223 0.699979C0.857642 0.792561 0.784202 0.902472 0.734097 1.02344C0.683992 1.1444 0.658203 1.27405 0.658203 1.40498C0.658203 1.53591 0.683992 1.66556 0.734097 1.78652C0.784202 1.90749 0.857642 2.0174 0.950223 2.10998L5.84022 6.99998L0.950223 11.89C0.857642 11.9826 0.784202 12.0925 0.734097 12.2134C0.683992 12.3344 0.658203 12.464 0.658203 12.595C0.658203 12.7259 0.683992 12.8556 0.734097 12.9765C0.784202 13.0975 0.857642 13.2074 0.950223 13.3C1.04281 13.3926 1.15272 13.466 1.27368 13.5161C1.39464 13.5662 1.52429 13.592 1.65522 13.592C1.78615 13.592 1.9158 13.5662 2.03677 13.5161C2.15773 13.466 2.26764 13.3926 2.36022 13.3L7.25022 8.40998L12.1402 13.3C12.2328 13.3926 12.3427 13.466 12.4637 13.5161C12.5846 13.5662 12.7143 13.592 12.8452 13.592C12.9762 13.592 13.1058 13.5662 13.2268 13.5161C13.3477 13.466 13.4576 13.3926 13.5502 13.3C13.6428 13.2074 13.7162 13.0975 13.7663 12.9765C13.8165 12.8556 13.8422 12.7259 13.8422 12.595C13.8422 12.464 13.8165 12.3344 13.7663 12.2134C13.7162 12.0925 13.6428 11.9826 13.5502 11.89L8.66022 6.99998L13.5502 2.10998C13.9302 1.72998 13.9302 1.08998 13.5502 0.70998Z" fill="#101010"/>
            </svg>
        </button>
        <h2 class="modal__title">
            Выберите цель пожертвования
        </h2>
        <form id="donate_form" class="modal__form">
            <div class="modal__form-col">
                <div class="select-wrapper" data-select>
                    <input
                            type="text"
                            hidden
                            name="transport_method"
                    >
                    <label class="select-label">
                        Способ перевозки
                    </label>
                    <div class="select">
                        <button type="button" class="select-content">
                            <span>
                            </span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.1035 7.73554L13.076 14.652C12.9227 14.8037 12.7157 14.8888 12.5 14.8888C12.2844 14.8888 12.0774 14.8037 11.924 14.652L4.89654 7.73704C4.74226 7.58543 4.5346 7.50048 4.31829 7.50048C4.10198 7.50048 3.89433 7.58543 3.74004 7.73704C3.66407 7.81111 3.60369 7.89963 3.56247 7.9974C3.52124 8.09516 3.5 8.20019 3.5 8.3063C3.5 8.4124 3.52124 8.51742 3.56247 8.61519C3.60369 8.71295 3.66407 8.80148 3.74004 8.87554L10.766 15.7905C11.2288 16.2449 11.8515 16.4995 12.5 16.4995C13.1486 16.4995 13.7713 16.2449 14.234 15.7905L21.26 8.87554C21.3362 8.80146 21.3968 8.71284 21.4382 8.61493C21.4795 8.51703 21.5009 8.41183 21.5009 8.30554C21.5009 8.19926 21.4795 8.09406 21.4382 7.99615C21.3968 7.89825 21.3362 7.80963 21.26 7.73554C21.1058 7.58393 20.8981 7.49898 20.6818 7.49898C20.4655 7.49898 20.2578 7.58393 20.1035 7.73554Z" fill="currentColor"/>
                            </svg>
                        </button>
                        <ul class="select-items">
                            <li class="select-items__item">
                                <button type="button" class="select-items__item-button" data-select-value="Сборный груз">
                                    Сборный груз
                                </button>
                            </li>
                            <li class="select-items__item">
                                <button type="button" class="select-items__item-button" data-select-value="Сборный груз">
                                    Сборный груз
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="select-wrapper" data-select>
                    <input
                            type="text"
                            hidden
                            name="fee_id"
                    >
                    <label class="select-label">
                        Сбор
                    </label>
                    <div class="select">
                        <button type="button" class="select-content">
                            <span>
                            </span>
                            <svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20.1035 7.73554L13.076 14.652C12.9227 14.8037 12.7157 14.8888 12.5 14.8888C12.2844 14.8888 12.0774 14.8037 11.924 14.652L4.89654 7.73704C4.74226 7.58543 4.5346 7.50048 4.31829 7.50048C4.10198 7.50048 3.89433 7.58543 3.74004 7.73704C3.66407 7.81111 3.60369 7.89963 3.56247 7.9974C3.52124 8.09516 3.5 8.20019 3.5 8.3063C3.5 8.4124 3.52124 8.51742 3.56247 8.61519C3.60369 8.71295 3.66407 8.80148 3.74004 8.87554L10.766 15.7905C11.2288 16.2449 11.8515 16.4995 12.5 16.4995C13.1486 16.4995 13.7713 16.2449 14.234 15.7905L21.26 8.87554C21.3362 8.80146 21.3968 8.71284 21.4382 8.61493C21.4795 8.51703 21.5009 8.41183 21.5009 8.30554C21.5009 8.19926 21.4795 8.09406 21.4382 7.99615C21.3968 7.89825 21.3362 7.80963 21.26 7.73554C21.1058 7.58393 20.8981 7.49898 20.6818 7.49898C20.4655 7.49898 20.2578 7.58393 20.1035 7.73554Z" fill="currentColor"/>
                            </svg>
                        </button>
                        <ul class="select-items">
                            <?php
                            // Аргументы для запроса
                            $args = array(
                                'post_type' => 'fee',  // Тип поста
                                'posts_per_page' => -1, // Все посты
                                'post_status' => 'publish', // Только опубликованные посты
                            );

                            // Выполнение запроса
                            $query = new WP_Query($args);

                            // Проверка наличия постов
                            if ($query->have_posts()) {
                                // Цикл вывода постов
                                while ($query->have_posts()) {
                                    $query->the_post();
                                    ?>
                                    <li class="select-items__item">
                                        <button type="button" class="select-items__item-button" data-select-value="<?php echo esc_attr(get_the_title()); ?>">
                                            <?php the_title(); ?>
                                        </button>
                                    </li>
                                    <?php
                                }
                                // Сброс данных поста
                                wp_reset_postdata();
                            } else {
                                // Если нет постов
                                echo '<li class="select-items__item">Нет доступных сборов</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="input__wrapper">
                    <label class="input__label">
                        Имя*
                    </label>
                    <input
                            name="name"
                            type="text"
                            class="input"
                    />
                </div>
                <div class="modal__form-row">
                    <div class="input__wrapper">
                        <label class="input__label">
                            Телефон*
                        </label>
                        <input
                                type="tel"
                                name="phone"
                                pattern="\+7\(\d{3}\)\d{3}-\d{2}-\d{2}"
                                class="input"
                        />
                    </div>
                    <div class="input__wrapper">
                        <label class="input__label">
                            Email*
                        </label>
                        <input
                                type="email"
                                name="email"
                                class="input"
                        />
                    </div>
                </div>
                <div class="input__wrapper">
                    <label class="input__label">
                        Введите сумму пожертвования
                    </label>
                    <input
                            type="number"
                            class="input"
                            name="donation_amount"
                            id="inputDonateSum"
                            max="1000000"
                            min="1"
                    />
                </div>
            </div>
            <p class="modal__price" id="sumValueEl">
                Сумма:
                <span>0</span>
            </p>
            <label class="modal__checkbox checkbox">
                <input
                        type="checkbox"
                        hidden
                />
                <div class="checkbox__box">
                    <svg width="18" height="13" viewBox="0 0 18 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M16.7948 0.294836C17.1843 0.684289 17.1843 1.31572 16.7948 1.70517L5.49998 13L0.705408 8.20543C0.315809 7.81584 0.315808 7.18417 0.705407 6.79457C1.09467 6.40531 1.72567 6.40492 2.11541 6.79371L5.49998 10.17L15.3848 0.294503C15.7743 -0.0946357 16.4055 -0.0944865 16.7948 0.294836Z" fill="#FBFBFD"/>
                    </svg>
                </div>
                <span class="checkbox__text">
                    Согласен с <a href="#" target="_blank" class="text-blue">политикой конфиденциальности</a> и <a href="#" target="_blank" class="text-blue">договором оферты</a>
                </span>
            </label>
            <button class="modal__submit button" type="submit" id="donate_send_btn">
                <span class="button-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                </span>
                Внести пожертвование
            </button>
        </form>
    </div>
</div>

<?php wp_footer(); ?>

<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

<script>
    jQuery(document).ready(function($) {
        $('#donate_form').on('submit', function(event) {
            event.preventDefault(); // Отменяем стандартное действие отправки формы

            var formData = $(this).serialize(); // Сериализуем данные формы

            $.ajax({
                type: 'POST', // Метод запроса
                url: '<?php echo admin_url( "admin-ajax.php" ) ?>', // URL для отправки AJAX запроса, определенный в WordPress
                data: {
                    action: 'create_yookassa_payment', // Название AJAX действия
                    form_data: formData, // Данные формы для передачи на сервер
                    security: '<?php echo wp_create_nonce("donate_nonce"); ?>'
                },
                success: function(response) {
                    // редирект на URL платежа
                    window.location.href = response;
                },
                error: function(xhr, status, error) {
                    // Обработка ошибок AJAX запроса
                    console.error('Ошибка AJAX: ' + error);
                }
            });
        });
    });
</script>
</body>
</html>
