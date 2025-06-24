<?php require_once __DIR__ . '/autoseo.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Canonical -->
    <link rel="canonical" href="https://прекрасная-подкастная.рф/">

    <!-- SEO -->
    <meta name="description"
        content="Видеостудия в центре Москвы для записи подкастов и коммерческого видео. Профессиональное оборудование. Идеальная локация в центре Москвы на Кутузовском проспекте с бесплатной парковкой. Скидки до 50%. WhatsApp: +7 (985) 924-35-34">
    <meta name="yandex-verification" content="b9b679576df4dce1">
    <meta name="google-site-verification" content="74NqRpVhE8-JUK8_WGdomxBVl9tEIX4devXRyks8r7s">
    <meta name="p:domain_verify" content="c11fd3451048c4a58a0c8b945b2947ba">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://прекрасная-подкастная.рф/">
    <meta property="og:title" content="Студия подкастов и видеозаписи в Москве">
    <meta property="og:description"
        content="Снимем подкаст и коммерческое видео в 4К на Sony FX30, звук — Shure SM7DB. Студия видеозаписи рядом с Москва-Сити. Скидка до 50% для новых клиентов. WhatsApp: +7(985)924-35-34">
    <meta property="og:image" content="https://прекрасная-подкастная.рф/img/og_cover.webp">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Студия подкастов и видеозаписи">
    <meta name="twitter:description"
        content="Запишите идеальный подкаст или видео в 4К. Студия записи в центре Москвы на Кутузовском проспекте. Бесплатная парковка. Скидка до 50% для новых клиентов. WhatsApp: +7(985)924-35-34">
    <meta name="twitter:image" content="https://прекрасная-подкастная.рф/img/og_cover.webp">

    <!-- JSON-LD -->
    <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": ["Organization", "LocalBusiness", "AudioVisualStudio"],
    "name": "Прекрасная Подкастная",
    "alternateName": "Студия записи подкастов в Москве",
    "description": "Профессиональная студия для записи подкастов и видеоконтента с современным оборудованием и звукоизоляцией. Находимся на Кутузовском проспекте. Есть бесплатная парковка. Скидка до 50% для новых клиентов. Пишите в WhatsApp: +7(985)924-35-34",
    "url": "https://прекрасная-подкастная.рф",
    "logo": "https://прекрасная-подкастная.рф/img/logo.webp",
    "telephone": "+7 (985) 924-35-34",
    "email": "402332@mail.ru",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "ул. Студенческая, д. 22, корпус 1",
      "addressLocality": "Москва",
      "postalCode": "119899",
      "addressCountry": "RU"
    },
    "geo": {
      "@type": "GeoCoordinates",
      "latitude": "55.738",
      "longitude": "37.53"
    },
    "openingHoursSpecification": {
      "@type": "OpeningHoursSpecification",
      "dayOfWeek": ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday"],
      "opens": "09:00",
      "closes": "21:00"
    },
    "priceRange": "$$",
    "sameAs": [
      "https://vk.com/prekrasnaya_podkastnaya",
      "https://t.me/prekrasnaya_podkastnaya"
    ]
  }
  </script>

    <!-- Preconnect to CDN -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net" crossorigin>
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">


    <!-- Preload critical images -->
    <link rel="preload" href="/img/back_ofer.webp" as="image" fetchpriority="high">
    <link rel="preload" href="/img/logo.webp" as="image">
    <link rel="preload" href="/img/icons/podcast.webp" as="image">
    <link rel="preload" href="/img/icons/studio-mixer.webp" as="image">

    <!-- Fonts (inline critical CSS) -->
    <style>
        @font-face {
            font-family: "Inter";
            src: url("/css/fonts/Inter/Inter-Bold.woff2") format("woff2");
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: "Soyuz Grotesk";
            src: url("/css/fonts/SoyuzGrotesk/Soyuz_Grotesk_Bold.woff2") format("woff2");
            font-weight: 700;
            font-style: normal;
            font-display: swap;
        }
    </style>

    <!-- Styles -->
    <link rel="stylesheet" href="/css/style.css">

    <noscript>
        <link rel="stylesheet" href="/css/style.css">
    </noscript>

    <link rel="stylesheet" href="/css/lightboxjs.min.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">

    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.ico" type="image/x-icon">

    <!-- Title -->
    <title>Студия подкастов и видеозаписи в Москве | Прекрасная Подкастная</title>

    <?php $main = 'active'; ?>
</head>


<body>
    <?php include 'include/header.php'; ?>
    <main>
        <section class="ofer" id="ofer">
            <div class="ofer_wrapper">
                <picture>
                    <source srcset="img/back_ofer_768.webp" media="(max-width: 768px)">
                    <source srcset="img/back_ofer_1280.webp" media="(max-width: 1280px)">
                    <img src="img/back_ofer.webp" alt="фото для офера" class="ofer_wrapper_img" width="1920"
                        height="1080" loading="eager" fetchpriority="high" decoding="async">
                </picture>

                <div class="ofer_overlay">
                    <div class="ofer_overlay_wrapper">
                        <div class="ofer_overlay_left">
                            <h1 class="ofer_overlay_left_title">
                                Студия видеозаписи и подкастов. Кутузовский пр.
                                <strong> Подкаст на 3 камеры от 3500 руб/час</strong>
                            </h1>
                            <p class="ofer_overlay_left_text">
                                - Топовое оборудование <br>
                                - Идеальный звук и картинка <br>
                                - Бесплатная парковка и гримерка <br>
                            </p>
                            <div class="ofer_overlay_left_button_block">
                                <div class="ofer_overlay_left_button_block_btn open_popup">
                                    скидки до 50% для новых клиентов
                                </div>
                            </div>
                        </div>

                        <div class="ofer_overlay_right">
                            <div class="ofer_overlay_right_one_block">
                                <div class="ofer_overlay_right_one_block_top">
                                    <img src="img/icons/podcast.webp" loading="lazy" decoding="async"
                                        alt="иконка наушников" class="ofer_overlay_right_one_block_top_img" width="48"
                                        height="48">
                                    <span class="ofer_overlay_right_one_block_top_text">20</span>
                                </div>
                                <div class="ofer_overlay_right_one_block_center">
                                    единиц лучшей техники <br> для видеозаписи и звука
                                </div>
                            </div>

                            <div class="ofer_overlay_right_one_block">
                                <div class="ofer_overlay_right_one_block_top">
                                    <img src="img/icons/studio-mixer.webp" loading="lazy" decoding="async"
                                        alt="иконка пульта" class="ofer_overlay_right_one_block_top_img" width="48"
                                        height="48">
                                    <span class="ofer_overlay_right_one_block_top_text">6</span>
                                </div>
                                <div class="ofer_overlay_right_one_block_center">
                                    локаций в темном и светлом исполнении
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="about" id="about">
            <div class="about_wrapper">
                <div class="about_left">
                    <span class="about_left_text">
                        <strong>Full-cycle</strong> видеостудия - от идеи до продвижения
                    </span>

                    <div class="about_left_micro_block">
                        <img src="img/logo.webp" loading="lazy" decoding="async" alt="фото микрофона"
                            class="about_left_micro_block_img">
                    </div>
                </div>
                <div class="about_right">
                    <p class="about_right_text_one">
                        <strong>Студия видеозаписи и подкастов</strong> — это пространство для креативных людей и
                        бизнеса, где каждый
                        может получить профессиональную поддержку и техническое оборудование для записи контента
                        высокого качества. Мы поможем вам создать подкаст, снять видеоблог или коммерческое видео, не
                        тратя время на поиски оборудования, настройку и обучение.
                    </p>
                    <p class="about_right_text_one">
                        <strong>Команда профессионалов:</strong> маркетологи, продюсеры, видеооператоры, монтажеры, PR и
                        SMM специалисты
                    </p>
                    <p class="about_right_text_one">
                        <strong>Профессиональное оборудование:</strong> Sony, Shure, Godox
                    </p>
                    <p class="about_right_text_one">
                        <strong> Отличная локация:</strong>г.Москва, Кутузовский проспект, м. Студенческая (7 минут пешком) <br>
                        Бесплатная
                        парковка
                    </p>
                    <div class="about_right_call_btn ofer_overlay_left_button_block_btn open_popup">
                        заказать обратный звонок
                    </div>
                    <div class="about_right_priemushestva">
                        <div class="about_right_priemushestva_item">
                            <div class="about_right_priemushestva_item_img_block">
                                <img src="img/icons/micro.webp" loading="lazy" decoding="async" alt="иконка качества"
                                    class="about_right_priemushestva_item_img_block_img">
                            </div>
                            <div class="about_right_priemushestva_item_name">
                                качественное оборудование
                            </div>
                        </div>
                        <div class="about_right_priemushestva_item">
                            <div class="about_right_priemushestva_item_img_block">
                                <img src="img/icons/map.webp" loading="lazy" decoding="async" alt="иконка качества"
                                    class="about_right_priemushestva_item_img_block_img">
                            </div>
                            <div class="about_right_priemushestva_item_name">
                                отличное местоположение
                            </div>
                        </div>
                        <div class="about_right_priemushestva_item">
                            <div class="about_right_priemushestva_item_img_block">
                                <img src="img/icons/team.webp" loading="lazy" decoding="async" alt="иконка качества"
                                    class="about_right_priemushestva_item_img_block_img">
                            </div>
                            <div class="about_right_priemushestva_item_name">
                                опытная <br> команда
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="location" id="location">
            <div class="location_wrapper">
                <span class="location_sub_title">
                    6 различных вариантов локаций
                </span>
                <h2 class="location_title">
                    оформление декором в вашей стилистике
                </h2>
                <div class="super_wrapper_swiper_location">
                    <div class="swiper-button-prev swiper-button-prev_location"></div>
                    <div class="swiper swiper_location">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide_location">
                                <div class="swiper-slide-content  swiper-slide-content_location">
                                    <a href="img/location/1.webp" data-fslightbox="swiper1">
                                        <img src="img/location/1.webp" loading="lazy" decoding="async"
                                            alt="картинка рекордер" class="swiper-slide-content_location_img">
                                    </a>

                                    <div class="swiper-slide-content_location_btn open_popup"> Забронировать со скидкой
                                       до 50%</div>
                                </div>
                            </div>

                            <div class="swiper-slide swiper-slide_location">
                                <div class="swiper-slide-content  swiper-slide-content_location">
                                    <a href="img/location/2.webp" data-fslightbox="swiper1">
                                        <img src="img/location/2.webp" loading="lazy" decoding="async"
                                            alt="картинка рекордер" class="swiper-slide-content_location_img">
                                    </a>

                                    <div class="swiper-slide-content_location_btn open_popup"> Забронировать со скидкой
                                        до 50%</div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide_location">
                                <div class="swiper-slide-content  swiper-slide-content_location">
                                    <a href="img/location/6.webp" data-fslightbox="swiper1">
                                        <img src="img/location/6.webp" loading="lazy" decoding="async"
                                            alt="картинка рекордер" class="swiper-slide-content_location_img">
                                    </a>

                                    <div class="swiper-slide-content_location_btn open_popup"> Забронировать со скидкой
                                        до 50%</div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide_location">
                                <div class="swiper-slide-content  swiper-slide-content_location">
                                    <a href="img/location/3.webp" data-fslightbox="swiper1">
                                        <img src="img/location/3.webp" loading="lazy" decoding="async"
                                            alt="картинка рекордер" class="swiper-slide-content_location_img">
                                    </a>

                                    <div class="swiper-slide-content_location_btn open_popup"> Забронировать со скидкой
                                        до 50%</div>
                                </div>
                            </div>

                            <div class="swiper-slide swiper-slide_location">
                                <div class="swiper-slide-content  swiper-slide-content_location">
                                    <a href="img/location/4.webp" data-fslightbox="swiper1">
                                        <img src="img/location/4.webp" loading="lazy" decoding="async"
                                            alt="картинка рекордер" class="swiper-slide-content_location_img">
                                    </a>

                                    <div class="swiper-slide-content_location_btn open_popup"> Забронировать со скидкой
                                        до 50%</div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide_location">
                                <div class="swiper-slide-content  swiper-slide-content_location">
                                    <a href="img/location/5.webp" data-fslightbox="swiper1">
                                        <img src="img/location/5.webp" loading="lazy" decoding="async"
                                            alt="картинка рекордер" class="swiper-slide-content_location_img">
                                    </a>

                                    <div class="swiper-slide-content_location_btn open_popup"> Забронировать со скидкой
                                        до 50%</div>
                                </div>
                            </div>



                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next_location"></div>
                </div>
            </div>
        </section>
        <section class="oborydovanie" id="oborydovanie">
            <div class="oborydovanie_wrapper">
                <span class="oborydovanie_sub_title">
                    Оборудование для видеосъемок
                </span>
                <h2 class="oborydovanie_title">
                    для идеального видео и звука
                </h2>
                <div class="super_wrapper_swiper_oborydovanie">
                    <div class="swiper-button-prev swiper-button-prev_oborydovanie"></div>
                    <div class="swiper swiper_oborydovanie">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide swiper-slide_oborydovanie">
                                <div class="swiper-slide-content  swiper-slide-content_oborydovanie">
                                    <img src="img/oborydovanie/sony_fx30_00.webp" loading="lazy" decoding="async"
                                        alt="картинка Камеры Sony FX30" class="swiper-slide-content_oborydovanie_img">
                                    <div class="swiper-slide-title swiper-slide-title_oborydovanie">Камеры Sony FX30
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide_oborydovanie">
                                <div class="swiper-slide-content  swiper-slide-content_oborydovanie">
                                    <img src="img/oborydovanie/micro_shure.webp" loading="lazy" decoding="async"
                                        alt="картинка Микрофоны Shure SM7B"
                                        class="swiper-slide-content_oborydovanie_img">
                                    <div class="swiper-slide-title swiper-slide-title_oborydovanie">Микрофоны Shure
                                        SM7DB
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide swiper-slide_oborydovanie">
                                <div class="swiper-slide-content  swiper-slide-content_oborydovanie">
                                    <img src="img/oborydovanie/godox.webp" loading="lazy" decoding="async"
                                        alt="картинка Световое оборудование Godox"
                                        class="swiper-slide-content_oborydovanie_img">
                                    <div class="swiper-slide-title swiper-slide-title_oborydovanie">Световое
                                        оборудование Godox</div>
                                </div>
                            </div>

                            <div class="swiper-slide swiper-slide_oborydovanie">
                                <div class="swiper-slide-content  swiper-slide-content_oborydovanie">
                                    <img src="img/oborydovanie/telesuflor.webp" loading="lazy" decoding="async"
                                        alt="картинка Телесуфлёр" class="swiper-slide-content_oborydovanie_img">
                                    <div class="swiper-slide-title swiper-slide-title_oborydovanie">Телесуфлёр </div>
                                </div>
                            </div>

                            <div class="swiper-slide swiper-slide_oborydovanie">
                                <div class="swiper-slide-content  swiper-slide-content_oborydovanie">
                                    <img src="img/oborydovanie/3.webp" loading="lazy" decoding="async"
                                        alt="картинка Наушники" class="swiper-slide-content_oborydovanie_img">
                                    <div class="swiper-slide-title swiper-slide-title_oborydovanie">Наушники</div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide_oborydovanie">
                                <div class="swiper-slide-content  swiper-slide-content_oborydovanie">
                                    <img src="img/oborydovanie/2.webp" loading="lazy" decoding="async"
                                        alt="картинка рекордер" class="swiper-slide-content_oborydovanie_img">
                                    <div class="swiper-slide-title swiper-slide-title_oborydovanie">Звук</div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="swiper-button-next swiper-button-next_oborydovanie"></div>
                </div>
            </div>
        </section>
        <section class="services">
            <div class="services_wrapper">
                <h2 class="services_title">
                    Кто наши клиенты:
                </h2>
                <div class="services_block">
                    <div class="services_block_item">
                        <div class="services_block_item_left">
                            <img src="img/clients/1.webp" loading="lazy" decoding="async" alt="услуга запись подкаста"
                                class="services_block_item_left_img">
                        </div>
                        <div class="services_block_item_right">
                            <div class="services_block_item_right_bottom clients">
                                <div class="services_block_item_right_bottom_name">
                                    <strong>Корпоративные клиенты <br> (компании и предприниматели)</strong>
                                </div>
                                <div class="services_block_item_right_bottom_description">
                                    - Поможем записать видео о Вашей компании. <br> - Видеообзор Вашего продукта <br> -
                                    Видеоинструкции для сотрудников <br> - Реклама
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services_block_item">
                        <div class="services_block_item_left">
                            <img src="img/clients/2.webp" loading="lazy" decoding="async" alt="услуга монтаж подкаста"
                                class="services_block_item_left_img">
                        </div>
                        <div class="services_block_item_right">
                            <div class="services_block_item_right_bottom clients">
                                <div class="services_block_item_right_bottom_name">
                                    <strong>Подкастеры и блогеры</strong>
                                </div>
                                <div class="services_block_item_right_bottom_description">
                                    - Поможем с идеей <br>
                                    - Напишем сценарий <br>
                                    - Снимем видео в лучшем виде <br>
                                    - Продвинем канал, группу, личный блог<br>
                                    - Форматы: видео, аудио и текст
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services_block_item">
                        <div class="services_block_item_left">
                            <img src="img/clients/3.webp" loading="lazy" decoding="async" alt="услуга запись подкаста"
                                class="services_block_item_left_img">
                        </div>
                        <div class="services_block_item_right">
                            <div class="services_block_item_right_bottom clients">
                                <div class="services_block_item_right_bottom_name">
                                    <strong>Психологи, коучи, учителя, лекторы</strong>
                                </div>
                                <div class="services_block_item_right_bottom_description">
                                    Поможем записать: <br>
                                    - Онлайн-курс <br>
                                    - Видеоуроки <br>
                                    - Медитации<br>
                                    - Короткие видео
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services_block_item">
                        <div class="services_block_item_left">
                            <img src="img/clients/4.webp" loading="lazy" decoding="async" alt="услуга монтаж подкаста"
                                class="services_block_item_left_img">
                        </div>
                        <div class="services_block_item_right">
                            <div class="services_block_item_right_bottom clients">
                                <div class="services_block_item_right_bottom_name">
                                    <strong>Контент мейкеры и будущие звёзды </strong>
                                </div>
                                <div class="services_block_item_right_bottom_description">
                                    - Поможем выбрать нишу для контента <br>
                                    - Снимем видео под ключ <br>
                                    - Продвинем контент в массы <br>
                                    - Сделаем из вас звезду
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="steps">
            <div class="steps_wrapper">
                <h2 class="steps_title">
                    Подарки при аренде студии видеозаписи
                </h2>
                <div class="steps_item">
                    <div class="steps_item_top">
                        <div class="steps_item_top_number">
                            01
                        </div>
                    </div>
                    <div class="steps_item_title">
                        Заставка для видео
                    </div>
                    <div class="steps_item_description">
                        при аренде видеостудии от 3х часов
                    </div>
                </div>
                <div class="steps_item">
                    <div class="steps_item_top">
                        <div class="steps_item_top_number">
                            02
                        </div>
                    </div>
                    <div class="steps_item_title">
                        Монтаж 3-х шортсов
                    </div>
                    <div class="steps_item_description">
                        при аренде видеостудии от 4х часов
                    </div>
                </div>
                <div class="steps_item">
                    <div class="steps_item_top">
                        <div class="steps_item_top_number">
                            03
                        </div>
                    </div>
                    <div class="steps_item_title">
                        Скидка до 50%
                    </div>
                    <div class="steps_item_description">
                        Индивидуальные условия для блогеров
                    </div>
                </div>
            </div>
        </section>
        <section class="services" id="services">
            <div class="services_wrapper">
                <div class="services_sub_title">
                    студия видеозаписи полного цикла
                </div>
                <h2 class="services_title">
                    от идеи для видео или подкаста,<br> до продвижения
                </h2>
                <div class="services_block">
                    <div class="services_block_item">
                        <div class="services_block_item_left">
                            <img src="img/services/1.webp" loading="lazy" decoding="async" alt="услуга запись подкаста"
                                class="services_block_item_left_img">
                        </div>
                        <div class="services_block_item_right">
                            <div class="services_block_item_right_top">
                                <div class="services_block_item_right_top_arrow  open_popup">
                                    <img src="img/icons/arrow.svg" class="services_block_item_right_top_arrow_img"
                                        loading="lazy" decoding="async" alt="иконка стрелки">
                                </div>
                                <div class="services_block_item_right_top_price">
                                    от <strong>2.500</strong> ₽/час
                                </div>
                            </div>
                            <div class="services_block_item_right_bottom">
                                <div class="services_block_item_right_bottom_name">
                                    <strong>Аренда студии видеозаписи</strong>
                                </div>
                                <div class="services_block_item_right_bottom_description">
                                    - Аренда видеостудии без оборудования - от 2.500 ₽/час<br>
                                    - Аренда видеостудии с оборудованием и оператором - от 3.500 ₽/час
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services_block_item">
                        <div class="services_block_item_left">
                            <img src="img/services/2.webp" loading="lazy" decoding="async" alt="услуга монтаж подкаста"
                                class="services_block_item_left_img">
                        </div>
                        <div class="services_block_item_right">
                            <div class="services_block_item_right_top">
                                <div class="services_block_item_right_top_arrow  open_popup">
                                    <img src="img/icons/arrow.svg" class="services_block_item_right_top_arrow_img"
                                        loading="lazy" decoding="async" alt="иконка стрелки">
                                </div>
                                <div class="services_block_item_right_top_price">
                                    от <strong>3.000</strong> ₽
                                </div>
                            </div>
                            <div class="services_block_item_right_bottom">
                                <div class="services_block_item_right_bottom_name">
                                    <strong>Идея и сценарий видео</strong>
                                </div>
                                <div class="services_block_item_right_bottom_description">
                                    Топовые продюсеры и маркетологи проведут анализ целевой аудитории, придумают идею
                                    для видео, подкаста или рилс, напишут сценарий.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services_block_item">
                        <div class="services_block_item_left">
                            <img src="img/services/3.webp" loading="lazy" decoding="async" alt="услуга запись подкаста"
                                class="services_block_item_left_img">
                        </div>
                        <div class="services_block_item_right">
                            <div class="services_block_item_right_top">
                                <div class="services_block_item_right_top_arrow  open_popup">
                                    <img src="img/icons/arrow.svg" class="services_block_item_right_top_arrow_img"
                                        loading="lazy" decoding="async" alt="иконка стрелки">
                                </div>
                                <div class="services_block_item_right_top_price">
                                    от <strong>7.500</strong> ₽/час
                                </div>
                            </div>
                            <div class="services_block_item_right_bottom">
                                <div class="services_block_item_right_bottom_name">
                                    <strong>Профессиональный видеомонтаж</strong>
                                </div>
                                <div class="services_block_item_right_bottom_description">
                                    - Черновой вариант монтажа через 48 часов <br>
                                    - Правки до идеального варианта <br>
                                    - Аудиоформат и транскрибация текстом
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services_block_item">
                        <div class="services_block_item_left">
                            <img src="img/services/4.webp" loading="lazy" decoding="async" alt="услуга монтаж подкаста"
                                class="services_block_item_left_img">
                        </div>
                        <div class="services_block_item_right">
                            <div class="services_block_item_right_top">
                                <div class="services_block_item_right_top_arrow  open_popup">
                                    <img src="img/icons/arrow.svg" class="services_block_item_right_top_arrow_img"
                                        loading="lazy" decoding="async" alt="иконка стрелки">
                                </div>
                                <div class="services_block_item_right_top_price">
                                    от <strong>5.000</strong> ₽
                                </div>
                            </div>
                            <div class="services_block_item_right_bottom">
                                <div class="services_block_item_right_bottom_name">
                                    <strong>Публикация и продвижение видео</strong>
                                </div>
                                <div class="services_block_item_right_bottom_description">
                                    Опытный продюсер поможет с анонсом, публикацией видео на площадках и продвижением
                                    видео
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services_block_item">
                        <div class="services_block_item_left">
                            <img src="img/services/5.webp" loading="lazy" decoding="async" alt="услуга монтаж подкаста"
                                class="services_block_item_left_img">
                        </div>
                        <div class="services_block_item_right">
                            <div class="services_block_item_right_top">
                                <div class="services_block_item_right_top_arrow  open_popup">
                                    <img src="img/icons/arrow.svg" class="services_block_item_right_top_arrow_img"
                                        loading="lazy" decoding="async" alt="иконка стрелки">
                                </div>
                                <div class="services_block_item_right_top_price">
                                    от <strong>10.000</strong> ₽
                                </div>
                            </div>
                            <div class="services_block_item_right_bottom">
                                <div class="services_block_item_right_bottom_name">
                                    <strong>Пакетные решения</strong>
                                </div>
                                <div class="services_block_item_right_bottom_description">
                                    - Выездные видеосъемки - от 5.000 ₽/час <br>
                                    - Съемки 10 Reels - от 15.000 ₽
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="services_block_item">
                        <div class="services_block_item_left">
                            <img src="img/services/6.webp" loading="lazy" decoding="async" alt="услуга монтаж подкаста"
                                class="services_block_item_left_img">
                        </div>
                        <div class="services_block_item_right">
                            <div class="services_block_item_right_top">
                                <div class="services_block_item_right_top_arrow  open_popup">
                                    <img src="img/icons/arrow.svg" class="services_block_item_right_top_arrow_img"
                                        loading="lazy" decoding="async" alt="иконка стрелки">
                                </div>
                                <div class="services_block_item_right_top_price">
                                    от <strong>12.000</strong> ₽
                                </div>
                            </div>
                            <div class="services_block_item_right_bottom">
                                <div class="services_block_item_right_bottom_name">
                                    <strong>Съемка подкаста под ключ</strong>
                                </div>
                                <div class="services_block_item_right_bottom_description">
                                    - Стилизация и декор студии под Ваш подкаст <br>
                                    - Идея, съемка, монтаж и продвижение видео
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php include 'include/footer.php'; ?>