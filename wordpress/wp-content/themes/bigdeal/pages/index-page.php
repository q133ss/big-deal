<?php
/*
 * Template name: Главная
 */

get_header();
?>
<body data-page="main-page" <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="wrapper">

    <header class="header">
        <div class="container">
            <div class="header__content">
                <a href="/" class="header__logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="80" height="54" viewBox="0 0 80 54" fill="none">
                        <g clip-path="url(#clip0_114_326)">
                            <g mask="url(#mask0_114_326)">
                                <path d="M79.9971 53.6942H0V0H79.9971V53.6942ZM2.84423 50.849H77.152V2.84423H2.84423V50.849Z" fill="currentColor"/>
                                <path d="M8.19067 41.9963H9.94763L12.8394 27.8085H24.1897V41.9963H25.7574V46.726H8.19067V41.9963ZM18.2711 32.5371H17.433L15.9738 41.9963H18.2711V32.5371Z" fill="currentColor"/>
                                <path d="M27.1077 46.7252V27.8077H39.7555V30.1592L38.8099 32.564H32.9997V34.6719H38.8099V39.4016H32.9997V41.9956H39.7555V46.7252H27.1077Z" fill="currentColor"/>
                                <path d="M49.5645 46.7252V32.5373H48.7274L46.511 46.7252H40.5657V44.3737L44.1329 27.8077H55.4565V46.7252H49.5645Z" fill="currentColor"/>
                                <path d="M59.9963 46.7252C58.5913 46.7252 57.6182 45.7521 57.6182 44.3737V30.1582C57.6182 28.7799 58.5913 27.8068 59.9963 27.8068H69.4279C70.8329 27.8068 71.806 28.7799 71.806 30.1582V44.3737C71.806 45.7521 70.8329 46.7252 69.4279 46.7252H59.9963ZM63.5368 32.5649V41.9965H65.8883V32.5649H63.5368Z" fill="currentColor"/>
                                <path d="M15.461 13.0312C15.8358 13.2813 16.1155 13.6105 16.2981 14.0185V24.1941C16.0727 24.6687 15.7312 25.0312 15.2727 25.2813H8.58447V6.9679H15.6855V10.4428H11.8606V12.6554H14.1987C14.6658 12.6554 15.0863 12.78 15.461 13.0302V13.0312ZM13.024 22.069V16.1436H11.8615V22.069H13.024Z" fill="currentColor"/>
                                <path d="M24.762 23.9322C24.5699 24.3327 24.2892 24.657 23.9183 24.9072C23.5473 25.1574 23.1287 25.282 22.6617 25.282H19.1363C18.6693 25.282 18.2507 25.1574 17.8797 24.9072C17.5087 24.657 17.2319 24.3317 17.0483 23.9322V8.06821C17.2738 7.57641 17.6277 7.21018 18.1109 6.96857H23.6985C24.1732 7.21018 24.528 7.57737 24.7611 8.06821V23.9322H24.762ZM21.4869 21.7938V10.18H20.3244V21.7938H21.4869Z" fill="currentColor"/>
                                <path d="M31.9999 6.96777L33.7626 21.1442V25.2822H30.7995L29.637 14.144L28.487 25.2822H25.5115V21.1442L27.2865 6.96777H31.999H31.9999Z" fill="currentColor"/>
                                <path d="M41.3876 13.0312C41.7624 13.2813 42.042 13.6105 42.2247 14.0185V24.1941C41.9992 24.6687 41.6577 25.0312 41.1992 25.2813H34.511V6.9679H37.7861V12.6564H40.1243C40.5914 12.6564 41.0118 12.781 41.3866 13.0312H41.3876ZM38.9505 22.069V16.1436H37.788V22.069H38.9505Z" fill="currentColor"/>
                                <path d="M51.8643 6.9679H55.1394V25.2823H42.9758V6.9679H46.2633V21.7941H47.4258V6.9679H50.7009V21.7941H51.8633V6.9679H51.8643Z" fill="currentColor"/>
                                <path d="M63.6028 23.9322C63.4107 24.3327 63.1301 24.6571 62.7591 24.9073C62.3881 25.1574 61.9695 25.2821 61.5025 25.2821H57.9771C57.5101 25.2821 57.0915 25.1574 56.7206 24.9073C56.3496 24.6571 56.0728 24.3318 55.8892 23.9322V8.06827C56.1146 7.57648 56.4685 7.21025 56.9517 6.96863H62.5393C63.014 7.21025 63.3688 7.57743 63.6019 8.06827V23.9322H63.6028ZM60.3277 21.7938V10.18H59.1653V21.7938H60.3277Z" fill="currentColor"/>
                                <path d="M64.353 6.9679H71.3285V10.1803H67.8403V13.6685H70.1652V17.1567H67.8403V21.795H71.3285V25.2832H64.353V6.9679Z" fill="currentColor"/>
                            </g>
                        </g>
                        <defs>
                            <clipPath id="clip0_114_326">
                                <rect width="80" height="53.7455" fill="currentColor"/>
                            </clipPath>
                        </defs>
                    </svg>
                </a>
                <?php get_template_part('/inc/main-menu'); ?>
                <button class="button-white header__donate" data-modal-toggle="modal-donate">
                <span class="button-arrow">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                </span>
                    Помочь
                </button>
                <button class="header__burger-toggle" data-burger-toggle>
                    <svg width="36" height="36" viewBox="0 0 36 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M6 9H30M6 18H30M19.5 27H30" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </button>
            </div>
        </div>
    </header>
    <div class="header__filler"></div>
    <div class="header__burger">
        <div class="header__burger-top">
            <a href="/" class="header__burger-logo">
                <svg xmlns="http://www.w3.org/2000/svg" width="80" height="54" viewBox="0 0 80 54" fill="none">
                    <g clip-path="url(#clip0_114_326)">
                        <g mask="url(#mask0_114_326)">
                            <path d="M79.9971 53.6942H0V0H79.9971V53.6942ZM2.84423 50.849H77.152V2.84423H2.84423V50.849Z" fill="currentColor"/>
                            <path d="M8.19067 41.9963H9.94763L12.8394 27.8085H24.1897V41.9963H25.7574V46.726H8.19067V41.9963ZM18.2711 32.5371H17.433L15.9738 41.9963H18.2711V32.5371Z" fill="currentColor"/>
                            <path d="M27.1077 46.7252V27.8077H39.7555V30.1592L38.8099 32.564H32.9997V34.6719H38.8099V39.4016H32.9997V41.9956H39.7555V46.7252H27.1077Z" fill="currentColor"/>
                            <path d="M49.5645 46.7252V32.5373H48.7274L46.511 46.7252H40.5657V44.3737L44.1329 27.8077H55.4565V46.7252H49.5645Z" fill="currentColor"/>
                            <path d="M59.9963 46.7252C58.5913 46.7252 57.6182 45.7521 57.6182 44.3737V30.1582C57.6182 28.7799 58.5913 27.8068 59.9963 27.8068H69.4279C70.8329 27.8068 71.806 28.7799 71.806 30.1582V44.3737C71.806 45.7521 70.8329 46.7252 69.4279 46.7252H59.9963ZM63.5368 32.5649V41.9965H65.8883V32.5649H63.5368Z" fill="currentColor"/>
                            <path d="M15.461 13.0312C15.8358 13.2813 16.1155 13.6105 16.2981 14.0185V24.1941C16.0727 24.6687 15.7312 25.0312 15.2727 25.2813H8.58447V6.9679H15.6855V10.4428H11.8606V12.6554H14.1987C14.6658 12.6554 15.0863 12.78 15.461 13.0302V13.0312ZM13.024 22.069V16.1436H11.8615V22.069H13.024Z" fill="currentColor"/>
                            <path d="M24.762 23.9322C24.5699 24.3327 24.2892 24.657 23.9183 24.9072C23.5473 25.1574 23.1287 25.282 22.6617 25.282H19.1363C18.6693 25.282 18.2507 25.1574 17.8797 24.9072C17.5087 24.657 17.2319 24.3317 17.0483 23.9322V8.06821C17.2738 7.57641 17.6277 7.21018 18.1109 6.96857H23.6985C24.1732 7.21018 24.528 7.57737 24.7611 8.06821V23.9322H24.762ZM21.4869 21.7938V10.18H20.3244V21.7938H21.4869Z" fill="currentColor"/>
                            <path d="M31.9999 6.96777L33.7626 21.1442V25.2822H30.7995L29.637 14.144L28.487 25.2822H25.5115V21.1442L27.2865 6.96777H31.999H31.9999Z" fill="currentColor"/>
                            <path d="M41.3876 13.0312C41.7624 13.2813 42.042 13.6105 42.2247 14.0185V24.1941C41.9992 24.6687 41.6577 25.0312 41.1992 25.2813H34.511V6.9679H37.7861V12.6564H40.1243C40.5914 12.6564 41.0118 12.781 41.3866 13.0312H41.3876ZM38.9505 22.069V16.1436H37.788V22.069H38.9505Z" fill="currentColor"/>
                            <path d="M51.8643 6.9679H55.1394V25.2823H42.9758V6.9679H46.2633V21.7941H47.4258V6.9679H50.7009V21.7941H51.8633V6.9679H51.8643Z" fill="currentColor"/>
                            <path d="M63.6028 23.9322C63.4107 24.3327 63.1301 24.6571 62.7591 24.9073C62.3881 25.1574 61.9695 25.2821 61.5025 25.2821H57.9771C57.5101 25.2821 57.0915 25.1574 56.7206 24.9073C56.3496 24.6571 56.0728 24.3318 55.8892 23.9322V8.06827C56.1146 7.57648 56.4685 7.21025 56.9517 6.96863H62.5393C63.014 7.21025 63.3688 7.57743 63.6019 8.06827V23.9322H63.6028ZM60.3277 21.7938V10.18H59.1653V21.7938H60.3277Z" fill="currentColor"/>
                            <path d="M64.353 6.9679H71.3285V10.1803H67.8403V13.6685H70.1652V17.1567H67.8403V21.795H71.3285V25.2832H64.353V6.9679Z" fill="currentColor"/>
                        </g>
                    </g>
                    <defs>
                        <clipPath id="clip0_114_326">
                            <rect width="80" height="53.7455" fill="currentColor"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
            <button class="header__burger-close" data-burger-toggle>
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M18.3002 5.70998C18.2077 5.61728 18.0978 5.54373 17.9768 5.49355C17.8559 5.44337 17.7262 5.41754 17.5952 5.41754C17.4643 5.41754 17.3346 5.44337 17.2136 5.49355C17.0926 5.54373 16.9827 5.61728 16.8902 5.70998L12.0002 10.59L7.11022 5.69998C7.01764 5.6074 6.90773 5.53396 6.78677 5.48385C6.6658 5.43375 6.53615 5.40796 6.40522 5.40796C6.27429 5.40796 6.14464 5.43375 6.02368 5.48385C5.90272 5.53396 5.79281 5.6074 5.70022 5.69998C5.60764 5.79256 5.5342 5.90247 5.4841 6.02344C5.43399 6.1444 5.4082 6.27405 5.4082 6.40498C5.4082 6.53591 5.43399 6.66556 5.4841 6.78652C5.5342 6.90749 5.60764 7.0174 5.70022 7.10998L10.5902 12L5.70022 16.89C5.60764 16.9826 5.5342 17.0925 5.4841 17.2134C5.43399 17.3344 5.4082 17.464 5.4082 17.595C5.4082 17.7259 5.43399 17.8556 5.4841 17.9765C5.5342 18.0975 5.60764 18.2074 5.70022 18.3C5.79281 18.3926 5.90272 18.466 6.02368 18.5161C6.14464 18.5662 6.27429 18.592 6.40522 18.592C6.53615 18.592 6.6658 18.5662 6.78677 18.5161C6.90773 18.466 7.01764 18.3926 7.11022 18.3L12.0002 13.41L16.8902 18.3C16.9828 18.3926 17.0927 18.466 17.2137 18.5161C17.3346 18.5662 17.4643 18.592 17.5952 18.592C17.7262 18.592 17.8558 18.5662 17.9768 18.5161C18.0977 18.466 18.2076 18.3926 18.3002 18.3C18.3928 18.2074 18.4662 18.0975 18.5163 17.9765C18.5665 17.8556 18.5922 17.7259 18.5922 17.595C18.5922 17.464 18.5665 17.3344 18.5163 17.2134C18.4662 17.0925 18.3928 16.9826 18.3002 16.89L13.4102 12L18.3002 7.10998C18.6802 6.72998 18.6802 6.08998 18.3002 5.70998Z" fill="#101010"/>
                </svg>
            </button>
        </div>
        <nav class="header__burger-nav">
            <?php get_template_part('/inc/mobile-menu'); ?>
        </nav>
        <div class="header__burger-help">
            <p class="header__burger-help-text">
                Даже разовое пожертвование <br />
                <span>может спасти жизнь</span>
            </p>
            <button class="header__burger-help-button button" data-modal-toggle="modal-donate">
            <span class="button-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
            </span>
                Помочь
            </button>
        </div>
    </div>

    <main class="main" id="main">
        <div>
            <section class="main-initial">
                <img
                        src="<?php echo get_template_directory_uri(); ?>/img/main-initial-bg.png"
                        alt="Фон"
                        class="main-initial__bg"
                />
                <div class="main-initial__content container">
                    <h1 class="main-initial__title">
                        Благотворительный фонд «БОЛЬШОЕ ДЕЛО»
                    </h1>
                    <p class="main-initial__text">
                        Фонд помощи и поддержки граждан России, находящихся в зоне проведения СВО, созданный основателями бизнес-сообщества CLUB 500
                    </p>
                </div>
            </section>
            <div class="main-initial__help container">
                <div class="help-card">
                    <div class="help-card__left">
                        <div class="help-card__left-top">
                            <div class="help-card__left-title">
                                Мы помогаем:
                            </div>
                            <div class="help-card__left-line"></div>
                            <ul class="help-card__list">
                                <li class="help-card__list-item">
                                    Мирным жителям
                                </li>
                                <li class="help-card__list-item">
                                    Военнослужащим
                                </li>
                                <li class="help-card__list-item">
                                    Детским домам
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="help-card__ui">
                        <p class="help-card__ui-text">
                            Даже разовое пожертвование <br /> <span>может спасти жизнь</span>
                        </p>
                        <button class="help-card__ui-button button" data-modal-toggle="modal-donate">
            <span class="button-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
            </span>
                            Помочь
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <section class="main-mission">
            <div class="main-mission__content container">
                <h2 class="main-mission__title title">
                    Миссия фонда
                </h2>
                <ul class="main-mission__items">
                    <li class="main-mission__item">
                        <div class="main-mission__img-wrapper">
                            <div class="main-mission__img-info">
                                <p class="main-mission__img-text">
                                    Помощь членам семей военнослужащих, а также жителям новых субъектов РФ, нуждающихся в помощи.
                                </p>
                                <button class="button-white" data-modal-toggle="modal-donate">
                            <span class="button-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                            </span>
                                    Сделать пожертвование
                                </button>
                            </div>
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/main-mission-item-1.png"
                                    alt="Гуманитарная помощь"
                                    class="main-mission__img"
                            />
                        </div>
                        <div class="main-mission__item-bot">
                            <h3 class="main-mission__item-title">
                                Гуманитарная помощь
                            </h3>
                            <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.00016 11L16.2502 11L11.0002 5.75L11.6602 5L18.1602 11.5L11.6602 18L11.0002 17.25L16.2502 12L4.00016 12V11Z" fill="#101010"/>
                            </svg>
                        </div>
                        <p class="main-mission__img-text mobile">
                            Помощь членам семей военнослужащих, а также жителям новых субъектов РФ, нуждающихся в помощи.
                        </p>
                        <button class="main-mission__item-button main-mission__item-button-mobile button-white" data-modal-toggle="modal-donate">
                    <span class="button-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                    </span>
                            Сделать пожертвование
                        </button>
                    </li>
                    <li class="main-mission__item">
                        <div class="main-mission__img-wrapper">
                            <div class="main-mission__img-info">
                                <p class="main-mission__img-text">
                                    Содействие популяризации достижений науки <br />
                                    и техники, инновационных технологий, развитию научно-технического, художественного творчества детей и молодежи.
                                </p>
                                <button class="button-white" data-modal-toggle="modal-donate">
                            <span class="button-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                            </span>
                                    Сделать пожертвование
                                </button>
                            </div>
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/main-mission-item-2.png"
                                    alt="Дети и молодежь"
                                    class="main-mission__img"
                            />
                        </div>
                        <div class="main-mission__item-bot">
                            <h3 class="main-mission__item-title">
                                Дети и молодежь
                            </h3>
                            <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.00016 11L16.2502 11L11.0002 5.75L11.6602 5L18.1602 11.5L11.6602 18L11.0002 17.25L16.2502 12L4.00016 12V11Z" fill="#101010"/>
                            </svg>
                        </div>
                        <p class="main-mission__img-text mobile">
                            Содействие популяризации достижений науки <br />
                            и техники, инновационных технологий, развитию научно-технического, художественного творчества детей и молодежи.
                        </p>
                        <button class="main-mission__item-button main-mission__item-button-mobile button-white" data-modal-toggle="modal-donate">
                    <span class="button-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                    </span>
                            Сделать пожертвование
                        </button>
                    </li>
                    <li class="main-mission__item">
                        <div class="main-mission__img-wrapper">
                            <div class="main-mission__img-info">
                                <p class="main-mission__img-text">
                                    Развитие международного сотрудничества и взаимопомощи соотечественникам проживающим за рубежом — защита прав и интересов, а также сохранение общероссийской культурной идентичности.
                                </p>
                                <button class="button-white" data-modal-toggle="modal-donate">
                            <span class="button-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                            </span>
                                    Сделать пожертвование
                                </button>
                            </div>
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/main-mission-item-3.png"
                                    alt="Международное сотрудничество"
                                    class="main-mission__img"
                            />
                        </div>
                        <div class="main-mission__item-bot">
                            <h3 class="main-mission__item-title">
                                Международное сотрудничество
                            </h3>
                            <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.00016 11L16.2502 11L11.0002 5.75L11.6602 5L18.1602 11.5L11.6602 18L11.0002 17.25L16.2502 12L4.00016 12V11Z" fill="#101010"/>
                            </svg>
                        </div>
                        <p class="main-mission__img-text mobile">
                            Развитие международного сотрудничества и взаимопомощи соотечественникам проживающим за рубежом — защита прав и интересов, а также сохранение общероссийской культурной идентичности.
                        </p>
                        <button class="main-mission__item-button main-mission__item-button-mobile button-white" data-modal-toggle="modal-donate">
                    <span class="button-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                    </span>
                            Сделать пожертвование
                        </button>
                    </li>
                    <li class="main-mission__item">
                        <div class="main-mission__img-wrapper">
                            <div class="main-mission__img-info">
                                <p class="main-mission__img-text">
                                    Помощь членам семей военнослужащих, а также жителям новых субъектов РФ, нуждающихся в помощи
                                </p>
                                <button class="button-white" data-modal-toggle="modal-donate">
                            <span class="button-arrow">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                            </span>
                                    Сделать пожертвование
                                </button>
                            </div>
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/main-mission-item-4.png"
                                    alt="Помощь военнослужащим"
                                    class="main-mission__img"
                            />
                        </div>
                        <div class="main-mission__item-bot">
                            <h3 class="main-mission__item-title">
                                Помощь военнослужащим
                            </h3>
                            <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.00016 11L16.2502 11L11.0002 5.75L11.6602 5L18.1602 11.5L11.6602 18L11.0002 17.25L16.2502 12L4.00016 12V11Z" fill="#101010"/>
                            </svg>
                        </div>
                        <p class="main-mission__img-text mobile">
                            Помощь членам семей военнослужащих, а также жителям новых субъектов РФ, нуждающихся в помощи
                        </p>
                        <button class="main-mission__item-button main-mission__item-button-mobile button-white" data-modal-toggle="modal-donate">
                    <span class="button-arrow">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                    </span>
                            Сделать пожертвование
                        </button>
                    </li>
                </ul>
            </div>
        </section>
        <section class="main-directions">
            <div class="main-directions__content container">
                <h2 class="main-directions__title title text-center">Направления деятельности</h2>
                <ul class="main-directions__items">
                    <li class="main-directions__item">
                        <div class="main-directions__item-info">
                            <div class="main-directions__item-body">
                                <h3 class="main-directions__item-title">
                                    Гуманитарная <br />
                                    помощь
                                </h3>
                                <div class="main-directions__item-text">
                                    <p>Детям-сиротам в детских домах, военнослужащим и их семьям, мирным жителям находящихся в зоне СВО.</p>
                                    <p>Совместная работа с местными органами власти по восстановлению городов, пострадавших в результате боевых действий.</p>
                                </div>
                            </div>
                            <button class="main-directions__item-button" data-modal-toggle="modal-donate">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Сделать пожертвование
                            </button>
                        </div>
                        <img
                                src="<?php echo get_template_directory_uri(); ?>/img/main-directions-item-1.png"
                                alt="Гуманитарная помощь"
                                class="main-directions__item-img"
                        />
                    </li>
                    <li class="main-directions__item">
                        <div class="main-directions__item-info">
                            <div class="main-directions__item-body">
                                <h3 class="main-directions__item-title">
                                    Помощь <br />
                                    военнослужащим
                                </h3>
                                <div class="main-directions__item-text">
                                    <p>БФ «Большое дело» будет заниматься адаптацией и возвращением к мирной гражданской жизни участников спецоперации после достижения целей СВО.</p>
                                </div>
                            </div>
                            <button class="main-directions__item-button" data-modal-toggle="modal-donate">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Сделать пожертвование
                            </button>
                        </div>
                        <img
                                src="<?php echo get_template_directory_uri(); ?>/img/main-directions-item-2.png"
                                alt="Помощь военнослужащим"
                                class="main-directions__item-img"
                        />
                    </li>
                    <li class="main-directions__item">
                        <div class="main-directions__item-info">
                            <div class="main-directions__item-body">
                                <h3 class="main-directions__item-title">
                                    Развитие <br />
                                    молодёжи
                                </h3>
                                <div class="main-directions__item-text">
                                    <p>Способствование формированию у молодежи здорового образа жизни за счет установки спортивно-тренировочных комплексов вблизи жилых домов по всей территории Российской Федерации. Борьба с вредными привычками граждан.</p>
                                </div>
                            </div>
                            <button class="main-directions__item-button" data-modal-toggle="modal-donate">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Сделать пожертвование
                            </button>
                        </div>
                        <img
                                src="<?php echo get_template_directory_uri(); ?>/img/main-directions-item-3.png"
                                alt="Развитие молодёжи"
                                class="main-directions__item-img"
                        />
                    </li>
                    <li class="main-directions__item">
                        <div class="main-directions__item-info">
                            <div class="main-directions__item-body">
                                <h3 class="main-directions__item-title">
                                    Создание новых <br />
                                    школьных классов
                                </h3>
                                <div class="main-directions__item-text">
                                    <p>Создание пространства для доступа к знаниям и образованию для учащихся государственных школ на территории Российской Федерации за счет улучшений условий обучения и обновления техники в школах.</p>
                                </div>
                            </div>
                            <button class="main-directions__item-button" data-modal-toggle="modal-donate">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
                                    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                Сделать пожертвование
                            </button>
                        </div>
                        <img
                                src="<?php echo get_template_directory_uri(); ?>/img/main-directions-item-4.jpg"
                                alt="Создание новых школьных классов"
                                class="main-directions__item-img"
                        />
                    </li>
                </ul>
            </div>
        </section>
        <section class="main-fees">
            <div class="main-fees__content container">
                <h2 class="main-fees__title title text-center">
                    Актуальные сборы
                </h2>
                <div class="main-fees__wrapper">
                    <button class="main-fees__button-prev slider-button slider-button__prev">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.079 7.5L6.287 13.292L7 14L14 7L7 0L6.287 0.708L12.079 6.5H0V7.5H12.079Z" fill="#2F83E5"/>
                        </svg>
                    </button>
                    <button class="main-fees__button-next slider-button slider-button__next">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.079 7.5L6.287 13.292L7 14L14 7L7 0L6.287 0.708L12.079 6.5H0V7.5H12.079Z" fill="#2F83E5"/>
                        </svg>
                    </button>
                    <div class="main-fees__slider-wrapper swiper">
                        <div class="main-fees__slider swiper-wrapper">
                            <?php
                            $args = array(
                                'post_type' => 'fee',
                                'posts_per_page' => 6,
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) :
                                while ( $query->have_posts() ) : $query->the_post(); ?>
                            <div class="fees-item swiper-slide">
                                <div class="fees-item__wrapper">
                                    <div class="fees-item__info">
                                        <h3 class="fees-item__title">
                                            <?php echo get_the_title(); ?>
                                        </h3>
                                        <div class="fees-item__fee">
                                            <p class="fees-item__fee-title">
                                                Собрано:
                                            </p>
                                            <div class="fees-item__fee-line">
                                                <div class="fees-item__fee-progress" data-result="<?php get_field('sum'); ?>" data-progress="100000"></div>
                                            </div>
                                            <div class="fees-item__fee-bot">
                                                <p class="fees-item__fee-text">100 000 ₽</p>
                                                <p class="fees-item__fee-text">из <?php echo get_field('sum'); ?> ₽</p>
                                            </div>
                                        </div>
                                        <p class="fees-item__text">
                                            <?php echo get_the_content(); ?>
                                        </p>
                                        <div class="fees-item__buttons fees-item__buttons-desktop">
                                            <a href="<?php echo get_the_permalink(); ?>" class="button-white">
                                        <span class="button-arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                                        </span>
                                                Подробнее
                                            </a>
                                            <button class="button" data-modal-toggle="modal-donate">
                                        <span class="button-arrow">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                                        </span>
                                                Помочь
                                            </button>
                                        </div>
                                    </div>
                                    <img
                                            src="<?php echo get_the_post_thumbnail_url(); ?>"
                                            alt="<?php echo get_the_post_thumbnail_caption(); ?>"
                                            class="fees-item__img"
                                    />
                                </div>
                                <div class="fees-item__buttons fees-item__buttons-mobile">
                                    <a href="<?php echo get_the_permalink(); ?>" class="button-white">
                                <span class="button-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                                </span>
                                        Подробнее
                                    </a>
                                    <button class="button" data-modal-toggle="modal-donate">
                                <span class="button-arrow">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
                                </span>
                                        Помочь
                                    </button>
                                </div>
                            </div>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </div>
                    </div>
                    <div class="main-fees__pagination slider-pagination"></div>
                </div>
            </div>
        </section>
        <section class="founders">
            <div class="founders__content container">
                <div class="founders__desktop">
                    <h2 class="founders__title founders__title-grid title">
                        Учредители и <br />
                        попечители фонда
                    </h2>
                    <div class="founders__item founders__item-grid-first">
                        <img
                                src="<?php echo get_template_directory_uri(); ?>/img/founder-desktop-item-1.png"
                                alt="Дмитрий Портнягин"
                                class="founders__item-img"
                        />
                    </div>
                    <div class="founders__item founders__item-grid-second">
                        <img
                                src="<?php echo get_template_directory_uri(); ?>/img/founder-desktop-item-2.png"
                                alt="Андрей Веселов"
                                class="founders__item-img"
                        />
                    </div>
                    <div class="founders__item">
                        <img
                                src="<?php echo get_template_directory_uri(); ?>/img/founder-desktop-item-3.png"
                                alt="Игорь Мгеладзе"
                                class="founders__item-img"
                        />
                    </div>
                    <div>

                    </div>
                    <div class="founders__item">
                        <img
                                src="<?php echo get_template_directory_uri(); ?>/img/founder-desktop-item-4.png"
                                alt="Вячеслав Варяников"
                                class="founders__item-img"
                        />
                        <h3 class="founders__item-title">
                            Вячеслав Варяников
                        </h3>
                        <p class="founders__item-text">
                            Попечитель фонда, основатель сети глазных клиник World Vision Clinic и сети стоматологических клиник World Dent
                            <br><br>
                            Резидент CLUB 500
                        </p>
                    </div>
                    <div class="founders__item">
                        <img
                                src="<?php echo get_template_directory_uri(); ?>/img/founder-desktop-item-5.png"
                                alt="Евгений Фёдоров"
                                class="founders__item-img"
                        />
                        <h3 class="founders__item-title">
                            Евгений Фёдоров
                        </h3>
                        <p class="founders__item-text">
                            Попечитель фонда, основатель и владелец компании по промышленному и гражданскому строительству
                            <br><br>
                            Резидент CLUB 500
                        </p>
                    </div>
                    <div class="founders__item">
                        <h3 class="founders__item-title">
                            Игорь Мгеладзе
                        </h3>
                        <p class="founders__item-text">
                            Попечитель фонда, основатель инвестиционно-финансовой группы
                            <br><br>
                            Резидент CLUB 500
                        </p>
                    </div>
                    <div class="founders__item">
                        <img
                                src="<?php echo get_template_directory_uri(); ?>/img/founder-desktop-item-6.png"
                                alt="Антон Агапов"
                                class="founders__item-img"
                        />
                        <h3 class="founders__item-title">
                            Антон Агапов
                        </h3>
                        <p class="founders__item-text">
                            Попечитель фонда, Партнер агрегаторов такси
                            Яндекс.Такси <br />
                            и Ситимобил
                            <br><br>
                            Резидент CLUB 500
                        </p>
                    </div>
                </div>
                <div class="founders__mobile">
                    <h2 class="founders__title title">
                        Учредители и <br />
                        попечители фонда
                    </h2>
                    <div class="founders__wrapper">
                        <button class="founders__button-prev slider-button slider-button__prev">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.079 7.5L6.287 13.292L7 14L14 7L7 0L6.287 0.708L12.079 6.5H0V7.5H12.079Z" fill="#2F83E5"/>
                            </svg>
                        </button>
                        <button class="founders__button-next slider-button slider-button__next">
                            <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.079 7.5L6.287 13.292L7 14L14 7L7 0L6.287 0.708L12.079 6.5H0V7.5H12.079Z" fill="#2F83E5"/>
                            </svg>
                        </button>
                        <div class="founders__slider-wrapper swiper">
                            <div class="founders__slider swiper-wrapper">
                                <div class="founders__item swiper-slide">
                                    <img
                                            src="<?php echo get_template_directory_uri(); ?>/img/founder-mobile-item-1.png"
                                            alt="Дмитрий Портнягин"
                                            class="founders__item-img"
                                    />
                                    <h3 class="founders__item-title">
                                        Дмитрий Портнягин
                                    </h3>
                                    <p class="founders__item-text">
                                        Учредитель фонда, основатель компаний:
                                    </p>
                                    <ul class="founders__item-list list">
                                        <li class="list__item">
                                            Бизнес-сообщество CLUB500,
                                        </li>
                                        <li class="list__item">
                                            Банный спа-комплекс SIBERIA,
                                        </li>
                                        <li class="list__item">
                                            Прокат автомобилей DEIZ,
                                        </li>
                                        <li class="list__item">
                                            Коллекционные арт-игрушки TUD,
                                        </li>
                                        <li class="list__item">
                                            Агентство путешествий Transformatortravel,
                                        </li>
                                        <li class="list__item">
                                            Сеть барбершопов Borodach,
                                        </li>
                                        <li class="list__item">
                                            Ресторан Manul.
                                        </li>
                                    </ul>
                                </div>
                                <div class="founders__item swiper-slide">
                                    <img
                                            src="<?php echo get_template_directory_uri(); ?>/img/founder-mobile-item-2.png"
                                            alt="Андрей Веселов"
                                            class="founders__item-img"
                                    />
                                    <h3 class="founders__item-title">
                                        Андрей Веселов
                                    </h3>
                                    <ul class="founders__item-list list">
                                        <li class="list__item">
                                            Сооснователь бизнес-сообщества CLUB 500
                                        </li>
                                        <li class="list__item">
                                            Сооснователь благотворительного фонда «Большое дело»
                                        </li>
                                    </ul>
                                </div>
                                <div class="founders__item swiper-slide">
                                    <img
                                            src="<?php echo get_template_directory_uri(); ?>/img/founder-mobile-item-3.png"
                                            alt="Игорь Мгеладзе"
                                            class="founders__item-img"
                                    />
                                    <h3 class="founders__item-title">
                                        Игорь Мгеладзе
                                    </h3>
                                    <p class="founders__item-text">
                                        Попечитель фонда, основатель инвестиционно-финансовой группы
                                        <br><br>
                                        Резидент CLUB 500
                                    </p>
                                </div>
                                <div class="founders__item swiper-slide">
                                    <img
                                            src="<?php echo get_template_directory_uri(); ?>/img/founder-mobile-item-4.png"
                                            alt="Вячеслав Варяников"
                                            class="founders__item-img"
                                    />
                                    <h3 class="founders__item-title">
                                        Вячеслав Варяников
                                    </h3>
                                    <p class="founders__item-text">
                                        Попечитель фонда, основатель сети глазных клиник World Vision Clinic и сети стоматологических клиник World Dent
                                        <br><br>
                                        Резидент CLUB 500
                                    </p>
                                </div>
                                <div class="founders__item swiper-slide">
                                    <img
                                            src="<?php echo get_template_directory_uri(); ?>/img/founder-mobile-item-5.png"
                                            alt="Евгений Фёдоров"
                                            class="founders__item-img"
                                    />
                                    <h3 class="founders__item-title">
                                        Евгений Фёдоров
                                    </h3>
                                    <p class="founders__item-text">
                                        Попечитель фонда, основатель и владелец компании по промышленному и гражданскому строительству
                                        <br><br>
                                        Резидент CLUB 500
                                    </p>
                                </div>
                                <div class="founders__item swiper-slide">
                                    <img
                                            src="<?php echo get_template_directory_uri(); ?>/img/founder-mobile-item-6.png"
                                            alt="Антон Агапов"
                                            class="founders__item-img"
                                    />
                                    <h3 class="founders__item-title">
                                        Антон Агапов
                                    </h3>
                                    <p class="founders__item-text">
                                        Попечитель фонда, основатель и владелец компании по промышленному и гражданскому строительству
                                        <br><br>
                                        Резидент CLUB 500
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="founders__pagination slider-pagination"></div>
                </div>
            </div>
        </section>
        <section class="trust">
            <div class="trust__content container">
                <h2 class="title trust__title">
                </h2>
                <div class="trust__grid">
                    <ul class="trust__items">
                        <li>
                        </li>
                        <li class="trust__item">
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/trust-item-1.png"
                                    alt="Народный фронт"
                                    class="trust__item-img trust__item-img-front"
                            />
                        </li>
                        <li class="trust__item">
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/trust-item-2.png"
                                    alt="База"
                                    class="trust__item-img trust__item-img-base"
                            />
                        </li>
                        <li class="trust__item">
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/trust-item-3.png"
                                    alt="Наш фонд"
                                    class="trust__item-img trust__item-img-our"
                            />
                        </li>
                    </ul>
                    <div class="trust__item trust__item-logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="54" viewBox="0 0 80 54" fill="none">
                            <g clip-path="url(#clip0_114_326)">
                                <g mask="url(#mask0_114_326)">
                                    <path d="M79.9971 53.6942H0V0H79.9971V53.6942ZM2.84423 50.849H77.152V2.84423H2.84423V50.849Z" fill="currentColor"/>
                                    <path d="M8.19067 41.9963H9.94763L12.8394 27.8085H24.1897V41.9963H25.7574V46.726H8.19067V41.9963ZM18.2711 32.5371H17.433L15.9738 41.9963H18.2711V32.5371Z" fill="currentColor"/>
                                    <path d="M27.1077 46.7252V27.8077H39.7555V30.1592L38.8099 32.564H32.9997V34.6719H38.8099V39.4016H32.9997V41.9956H39.7555V46.7252H27.1077Z" fill="currentColor"/>
                                    <path d="M49.5645 46.7252V32.5373H48.7274L46.511 46.7252H40.5657V44.3737L44.1329 27.8077H55.4565V46.7252H49.5645Z" fill="currentColor"/>
                                    <path d="M59.9963 46.7252C58.5913 46.7252 57.6182 45.7521 57.6182 44.3737V30.1582C57.6182 28.7799 58.5913 27.8068 59.9963 27.8068H69.4279C70.8329 27.8068 71.806 28.7799 71.806 30.1582V44.3737C71.806 45.7521 70.8329 46.7252 69.4279 46.7252H59.9963ZM63.5368 32.5649V41.9965H65.8883V32.5649H63.5368Z" fill="currentColor"/>
                                    <path d="M15.461 13.0312C15.8358 13.2813 16.1155 13.6105 16.2981 14.0185V24.1941C16.0727 24.6687 15.7312 25.0312 15.2727 25.2813H8.58447V6.9679H15.6855V10.4428H11.8606V12.6554H14.1987C14.6658 12.6554 15.0863 12.78 15.461 13.0302V13.0312ZM13.024 22.069V16.1436H11.8615V22.069H13.024Z" fill="currentColor"/>
                                    <path d="M24.762 23.9322C24.5699 24.3327 24.2892 24.657 23.9183 24.9072C23.5473 25.1574 23.1287 25.282 22.6617 25.282H19.1363C18.6693 25.282 18.2507 25.1574 17.8797 24.9072C17.5087 24.657 17.2319 24.3317 17.0483 23.9322V8.06821C17.2738 7.57641 17.6277 7.21018 18.1109 6.96857H23.6985C24.1732 7.21018 24.528 7.57737 24.7611 8.06821V23.9322H24.762ZM21.4869 21.7938V10.18H20.3244V21.7938H21.4869Z" fill="currentColor"/>
                                    <path d="M31.9999 6.96777L33.7626 21.1442V25.2822H30.7995L29.637 14.144L28.487 25.2822H25.5115V21.1442L27.2865 6.96777H31.999H31.9999Z" fill="currentColor"/>
                                    <path d="M41.3876 13.0312C41.7624 13.2813 42.042 13.6105 42.2247 14.0185V24.1941C41.9992 24.6687 41.6577 25.0312 41.1992 25.2813H34.511V6.9679H37.7861V12.6564H40.1243C40.5914 12.6564 41.0118 12.781 41.3866 13.0312H41.3876ZM38.9505 22.069V16.1436H37.788V22.069H38.9505Z" fill="currentColor"/>
                                    <path d="M51.8643 6.9679H55.1394V25.2823H42.9758V6.9679H46.2633V21.7941H47.4258V6.9679H50.7009V21.7941H51.8633V6.9679H51.8643Z" fill="currentColor"/>
                                    <path d="M63.6028 23.9322C63.4107 24.3327 63.1301 24.6571 62.7591 24.9073C62.3881 25.1574 61.9695 25.2821 61.5025 25.2821H57.9771C57.5101 25.2821 57.0915 25.1574 56.7206 24.9073C56.3496 24.6571 56.0728 24.3318 55.8892 23.9322V8.06827C56.1146 7.57648 56.4685 7.21025 56.9517 6.96863H62.5393C63.014 7.21025 63.3688 7.57743 63.6019 8.06827V23.9322H63.6028ZM60.3277 21.7938V10.18H59.1653V21.7938H60.3277Z" fill="currentColor"/>
                                    <path d="M64.353 6.9679H71.3285V10.1803H67.8403V13.6685H70.1652V17.1567H67.8403V21.795H71.3285V25.2832H64.353V6.9679Z" fill="currentColor"/>
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_114_326">
                                    <rect width="80" height="53.7455" fill="currentColor"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </div>
                    <ul class="trust__items">
                        <li class="trust__item">
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/trust-item-4.png"
                                    alt="Администрация президента РФ"
                                    class="trust__item-img trust__item-img-president"
                            />
                        </li>
                        <li class="trust__item">
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/trust-item-5.png"
                                    alt="Лого"
                                    class="trust__item-img trust__item-img-administration"
                            />
                        </li>
                        <li class="trust__item">
                            <img
                                    src="<?php echo get_template_directory_uri(); ?>/img/trust-item-6.png"
                                    alt="CLUB 500"
                                    class="trust__item-img trust__item-img-club"
                            />
                        </li>
                        <li>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="news">
            <div class="news__content container">
                <h2 class="news__title title">
                    Новости фонда
                </h2>
                <div class="news__wrapper">
                    <button class="news__button news__button-prev slider-button slider-button__prev">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.079 7.5L6.287 13.292L7 14L14 7L7 0L6.287 0.708L12.079 6.5H0V7.5H12.079Z" fill="#2F83E5"/>
                        </svg>
                    </button>
                    <button class="news__button news__button-next slider-button slider-button__next">
                        <svg width="14" height="14" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M12.079 7.5L6.287 13.292L7 14L14 7L7 0L6.287 0.708L12.079 6.5H0V7.5H12.079Z" fill="#2F83E5"/>
                        </svg>
                    </button>
                    <div class="news__slider-wrapper swiper">
                        <ul class="news__slider swiper-wrapper">
                            <?php
                            $args = array(
                                'post_type' => 'post',
                                'posts_per_page' => 5,
                            );
                            $query = new WP_Query( $args );

                            if ( $query->have_posts() ) :
                            while ( $query->have_posts() ) : $query->the_post(); ?>
                                <li class="news__slider-item swiper-slide">
                                <a href="<?php echo get_the_permalink(); ?>" class="news__slider-link">
                                    <img
                                            src="<?php echo get_the_post_thumbnail_url(); ?>"
                                            alt="<?php echo get_the_post_thumbnail_caption(); ?>"
                                            class="news__slider-img"
                                    />
                                    <div class="news__slider-top">
                                        <p class="news__slider-date">
                                            <?php echo get_the_date('d.m.Y'); ?>
                                        </p>
                                        <svg width="20" height="24" viewBox="0 0 20 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4.00016 11L16.2502 11L11.0002 5.75L11.6602 5L18.1602 11.5L11.6602 18L11.0002 17.25L16.2502 12L4.00016 12V11Z" fill="#101010"/>
                                        </svg>
                                    </div>
                                    <h3 class="news__slider-title">
                                        <?php echo get_the_title(); ?>
                                    </h3>
                                    <p class="news__slider-text">
                                        <?php echo get_the_excerpt(); ?>
                                    </p>
                                </a>
                            </li>
                            <?php
                                endwhile;
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <section class="help">
            <div class="help__content container">
                <h2 class="help__title">
                    Даже разовое пожертвование <br />
                    <span>может спасти жизнь</span>
                </h2>
                <button class="help__button button" data-modal-toggle="modal-donate">
            <span class="button-arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
    <path d="M1 1.14545H17M17 1.14545V16.8545M17 1.14545L1 16.8545" stroke="currentColor" stroke-width="2"/>
</svg>
            </span>
                    Помочь
                </button>
            </div>
        </section>
    </main>

    <footer class="footer">
        <div class="container">
            <div class="footer__content">
                <div class="footer__info">
                    <a href="/" class="footer__logo">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="54" viewBox="0 0 80 54" fill="none">
                            <g clip-path="url(#clip0_114_326)">
                                <g mask="url(#mask0_114_326)">
                                    <path d="M79.9971 53.6942H0V0H79.9971V53.6942ZM2.84423 50.849H77.152V2.84423H2.84423V50.849Z" fill="currentColor"/>
                                    <path d="M8.19067 41.9963H9.94763L12.8394 27.8085H24.1897V41.9963H25.7574V46.726H8.19067V41.9963ZM18.2711 32.5371H17.433L15.9738 41.9963H18.2711V32.5371Z" fill="currentColor"/>
                                    <path d="M27.1077 46.7252V27.8077H39.7555V30.1592L38.8099 32.564H32.9997V34.6719H38.8099V39.4016H32.9997V41.9956H39.7555V46.7252H27.1077Z" fill="currentColor"/>
                                    <path d="M49.5645 46.7252V32.5373H48.7274L46.511 46.7252H40.5657V44.3737L44.1329 27.8077H55.4565V46.7252H49.5645Z" fill="currentColor"/>
                                    <path d="M59.9963 46.7252C58.5913 46.7252 57.6182 45.7521 57.6182 44.3737V30.1582C57.6182 28.7799 58.5913 27.8068 59.9963 27.8068H69.4279C70.8329 27.8068 71.806 28.7799 71.806 30.1582V44.3737C71.806 45.7521 70.8329 46.7252 69.4279 46.7252H59.9963ZM63.5368 32.5649V41.9965H65.8883V32.5649H63.5368Z" fill="currentColor"/>
                                    <path d="M15.461 13.0312C15.8358 13.2813 16.1155 13.6105 16.2981 14.0185V24.1941C16.0727 24.6687 15.7312 25.0312 15.2727 25.2813H8.58447V6.9679H15.6855V10.4428H11.8606V12.6554H14.1987C14.6658 12.6554 15.0863 12.78 15.461 13.0302V13.0312ZM13.024 22.069V16.1436H11.8615V22.069H13.024Z" fill="currentColor"/>
                                    <path d="M24.762 23.9322C24.5699 24.3327 24.2892 24.657 23.9183 24.9072C23.5473 25.1574 23.1287 25.282 22.6617 25.282H19.1363C18.6693 25.282 18.2507 25.1574 17.8797 24.9072C17.5087 24.657 17.2319 24.3317 17.0483 23.9322V8.06821C17.2738 7.57641 17.6277 7.21018 18.1109 6.96857H23.6985C24.1732 7.21018 24.528 7.57737 24.7611 8.06821V23.9322H24.762ZM21.4869 21.7938V10.18H20.3244V21.7938H21.4869Z" fill="currentColor"/>
                                    <path d="M31.9999 6.96777L33.7626 21.1442V25.2822H30.7995L29.637 14.144L28.487 25.2822H25.5115V21.1442L27.2865 6.96777H31.999H31.9999Z" fill="currentColor"/>
                                    <path d="M41.3876 13.0312C41.7624 13.2813 42.042 13.6105 42.2247 14.0185V24.1941C41.9992 24.6687 41.6577 25.0312 41.1992 25.2813H34.511V6.9679H37.7861V12.6564H40.1243C40.5914 12.6564 41.0118 12.781 41.3866 13.0312H41.3876ZM38.9505 22.069V16.1436H37.788V22.069H38.9505Z" fill="currentColor"/>
                                    <path d="M51.8643 6.9679H55.1394V25.2823H42.9758V6.9679H46.2633V21.7941H47.4258V6.9679H50.7009V21.7941H51.8633V6.9679H51.8643Z" fill="currentColor"/>
                                    <path d="M63.6028 23.9322C63.4107 24.3327 63.1301 24.6571 62.7591 24.9073C62.3881 25.1574 61.9695 25.2821 61.5025 25.2821H57.9771C57.5101 25.2821 57.0915 25.1574 56.7206 24.9073C56.3496 24.6571 56.0728 24.3318 55.8892 23.9322V8.06827C56.1146 7.57648 56.4685 7.21025 56.9517 6.96863H62.5393C63.014 7.21025 63.3688 7.57743 63.6019 8.06827V23.9322H63.6028ZM60.3277 21.7938V10.18H59.1653V21.7938H60.3277Z" fill="currentColor"/>
                                    <path d="M64.353 6.9679H71.3285V10.1803H67.8403V13.6685H70.1652V17.1567H67.8403V21.795H71.3285V25.2832H64.353V6.9679Z" fill="currentColor"/>
                                </g>
                            </g>
                            <defs>
                                <clipPath id="clip0_114_326">
                                    <rect width="80" height="53.7455" fill="currentColor"/>
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                    <p class="footer__info-text">
                        © 2024 БЛАГОТВОРИТЕЛЬНЫЙ ФОНД "БОЛЬШОЕ ДЕЛО"
                    </p>
                    <a href="#" target="_blank" class="footer__info-text">
                        Политика конфиденциальности
                    </a>
                    <a href="#" target="_blank" class="footer__info-text">
                        Договор-оферта
                    </a>
                    <a href="#" target="_blank" class="footer__info-text mobile">
                        Разработка сайта
                    </a>
                </div>
                <?php get_template_part('/inc/footer-menu'); ?>
            </div>
        </div>
    </footer>

</div>
<?php
get_footer();
?>
