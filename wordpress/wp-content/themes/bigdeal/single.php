<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bigdeal
 */

get_header();
?>
    <body data-page="main-page">
    <div class="wrapper">
    <style>
        .header__nav-link , .header__logo{
            color: #101010;
        }
    </style>
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
        <div class="header__filler" style="height: 111px; min-height: 111px;"></div>
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
                <ul class="header__burger-items">
                    <?php get_template_part('/inc/mobile-menu'); ?>
                </ul>
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
            <section class="state-main">
                <div class="state-main__content container">
                    <div class="state-main__top">
                        <h1 class="state-main__title title">
                            Гуманитарная помощь
                            мирному населению
                        </h1>
                        <p class="state-main__date"><?php echo get_the_date('d.m.Y'); ?></p>
                    </div>
                    <img
                            src="<?php echo get_template_directory_uri(); ?>/img/main-directions-item-1.png"
                            alt="Гуманитарная помощь мирному населению"
                            class="state-main__img"
                    />
                    <div class="state-main__body">
                        <?php the_content(); ?>
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
                                        'post_type'      => 'post',
                                        'posts_per_page' => 3,
                                        'post__not_in'   => [get_the_ID()]
                                    );
                                    $query = new WP_Query( $args );

                                    if ( $query->have_posts() ) :
                                        while ( $query->have_posts() ) : $query->the_post();
                                ?>
                                <li class="news__slider-item swiper-slide">
                                    <a href="#" class="news__slider-link">
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
                    <nav class="footer__nav">
                        <ul class="footer__nav-items">
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">
                                    О фонде
                                </a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">
                                    Текущие сборы
                                </a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">
                                    Партнёры
                                </a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">
                                    Благодарности
                                </a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">
                                    Реквизиты
                                </a>
                            </li>
                            <li class="footer__nav-item">
                                <a href="#" class="footer__nav-link">
                                    Новости и статьи
                                </a>
                            </li>
                        </ul>
                        <a href="#" class="footer__info-text footer__nav-dev desktop">
                            Разработка сайта
                        </a>
                    </nav>
                </div>
            </div>
        </footer>
<?php
get_footer();
