<?php require_once __DIR__ . '/autoseo.php'; ?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <!-- === SEO‑базис для Прекрасная‑Подкастная.рф === -->
    <link rel="canonical" href="https://прекрасная-подкастная.рф/">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://прекрасная-подкастная.рф/">
    <meta property="og:title" content="Студия подкастов и видеозаписи в Москве | "Прекрасная подкастная">
    <meta property="og:description"
        content="Съемки коммерческих видео и подкастов на Sony FX30, микрофоны Shure SM7DB. Скидка 50% для новых клиентов.">
    <meta property="og:image" content="https://прекрасная-подкастная.рф/img/og_cover.webp">

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Студия подкастов и видеозаписи">
    <meta name="twitter:description" content="Выездные съемки в Москве. Топовое оборудование и команда профессиоанлов. ">
    <meta name="twitter:image" content="https://прекрасная-подкастная.рф/img/og_cover.webp">

    <!-- Быстрый коннект к CDN -->
    <link rel="preconnect" href="https://cdn.jsdelivr.net">
    <link rel="dns-prefetch" href="https://cdn.jsdelivr.net">

    <!-- JSON‑LD -->
    <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": ["Organization", "LocalBusiness", "AudioVisualStudio"],
  "name": "Прекрасная Подкастная",
  "alternateName": "Студия видеозаписи и подкастов в Москве",
  "description": "Профессиональная студия для записи подкастов и видеоконтента с современным оборудованием и лучшей командой операторов и монтажеров",
  "url": "https://прекрасная-подкастная.рф",
  "logo": "https://прекрасная-подкастная.рф/img/logo.png",
  "telephone": "+7 (985) 924-3534",
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
    <!-- === /SEO‑базис === -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/lightboxjs.min.css" />
    <?php $main = 'active'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <title>Студия подкастов и видеозаписи в Москве | Прекрасная Подкастная </title>
    <meta name="description"
        content="Видеостудия в центре Москвы для записи подкастов и коммерческого видео. Профессиональное оборудование: камеры Sony fx30, микрофоны Shure, свет Godox. Идеальная локация на Кутузовском проспекте с бесплатной парковкой. Скидки до 50%. Пишите в WhatsApp: +7(985)-924-35-34">
    <meta name="yandex-verification" content="b9b679576df4dce1" />
    <meta name="google-site-verification" content="74NqRpVhE8-JUK8_WGdomxBVl9tEIX4devXRyks8r7s" />
</head>

<body>
    <?php include 'include/header.php'; ?>
    <main>
        <section class="ofer" id="ofer">
            <div class="ofer_wrapper">
                <img src="img/back_ofer.jpg" alt="фото для офера" loading="lazy" decoding="async"
                    class="ofer_wrapper_img">
                <div class="ofer_overlay">
                    <div class="ofer_overlay_wrapper">
                        <div class="ofer_overlay_left">
                            <h1 class="ofer_overlay_left_title">
                                Выездные видеосъемки в Москве с командой профессионалов и топовым оборудованием.
                            </h1>
                            <p class="ofer_overlay_left_text">
- Идея<br>
- Сценарий<br>
- Съемка<br>
- Монтаж<br>
- Продвижение<br>

                            </p>
                            <!-- <h2 class="ofer_overlay_left_sub_title">
                                для подкастов, интервью, видеокурсов, медитаций, и других форматов
                            </h2> -->

                            <div class="ofer_overlay_left_button_block">
                                <div class="ofer_overlay_left_button_block_btn open_popup">
                                    скидка 50% для новых клиентов
                                </div>
                                <!-- <span class="ofer_overlay_left_button_block_text">
                                    Перезвоним через 5 минут!
                                </span> -->
                            </div>
                        </div>
                        <div class="ofer_overlay_right">
                            <div class="ofer_overlay_right_one_block">
                                <div class="ofer_overlay_right_one_block_top">
                                    <img src="img/icons/podcast.png" loading="lazy" decoding="async"
                                        alt="иконка наушников" class="ofer_overlay_right_one_block_top_img">
                                    <span class="ofer_overlay_right_one_block_top_text">20</span>
                                </div>
                                <div class="ofer_overlay_right_one_block_center">
                                    единиц лучшей техники <br> для видеозаписи и звука
                                </div>
                                <!-- <div class="ofer_overlay_right_one_block_bottom">
                                    Примерное описание
                                </div> -->
                            </div>
                            <div class="ofer_overlay_right_one_block">
                      
                                <!-- <div class="ofer_overlay_right_one_block_bottom">
                                    Примерное описание
                                </div> -->
                            </div>
                        </div>
                        <!-- <div class="ofer_overlay_mail_block">
                            <div class="ofer_overlay_mail_block_left">
                                <img src="img/icons/email.svg" loading="lazy" decoding="async" alt="иконка почты"
                                    class="ofer_overlay_mail_block_left_img">
                            </div>
                            <div class="ofer_overlay_mail_block_right">
                                <div class="ofer_overlay_mail_block_right_text">
                                    Пишите нам на почту:
                                </div>
                                <a href="mailto:402332@mail.ru"
                                    class="ofer_overlay_mail_block_right_link">402332@mail.ru</a>
                            </div>
                        </div> -->
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
                    <!-- <h2 class="about_left_title">
                        О компании
                    </h2> -->
                    <div class="about_left_micro_block">
                        <!-- <img src="img/micro.webp" alt="фото микрофона" loading="lazy" decoding="async" class="about_left_micro_block_img"> -->
                        <img src="img/logo.png" loading="lazy" decoding="async" alt="фото микрофона"
                            class="about_left_micro_block_img">
                        <!-- <div class="about_left_micro_block_wrapper">
                            <span class="about_left_micro_block_span_one">
                                Работаем с
                            </span>
                            <span class="about_left_micro_block_span_two">
                                20
                            </span>
                            <span class="about_left_micro_block_span_three">
                                06
                            </span>
                            <span class="about_left_micro_block_span_four">
                                года
                            </span>
                        </div> -->
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
                        <strong> Отличная локация:</strong> Кутузовский проспект, м. Студенческая (7 минут пешком) <br>
                        Бесплатная
                        парковка
                    </p>
                    <div class="about_right_call_btn ofer_overlay_left_button_block_btn open_popup">
                        заказать обратный звонок
                    </div>
                    <div class="about_right_priemushestva">
                        <div class="about_right_priemushestva_item">
                            <div class="about_right_priemushestva_item_img_block">
                                <img src="img/icons/micro.png" loading="lazy" decoding="async" alt="иконка качества"
                                    class="about_right_priemushestva_item_img_block_img">
                                <!-- <span class="about_right_priemushestva_item_img_block_number">
                                    01
                                </span> -->
                            </div>
                            <div class="about_right_priemushestva_item_name">
                                качественное оборудование
                            </div>
                            <!-- <div class="about_right_priemushestva_item_description">
                                 
                            </div> -->
                        </div>
                        <div class="about_right_priemushestva_item">
                            <div class="about_right_priemushestva_item_img_block">
                                <img src="img/icons/map.png" loading="lazy" decoding="async" alt="иконка качества"
                                    class="about_right_priemushestva_item_img_block_img">
                                <!-- <span class="about_right_priemushestva_item_img_block_number">
                                    02
                                </span> -->
                            </div>
                            <div class="about_right_priemushestva_item_name">
                                отличное местоположение
                            </div>
                            <!-- <div class="about_right_priemushestva_item_description">
                                 
                            </div> -->
                        </div>
                        <div class="about_right_priemushestva_item">
                            <div class="about_right_priemushestva_item_img_block">
                                <img src="img/icons/team.png" loading="lazy" decoding="async" alt="иконка качества"
                                    class="about_right_priemushestva_item_img_block_img">
                                <!-- <span class="about_right_priemushestva_item_img_block_number">
                                    02
                                </span> -->
                            </div>
                            <div class="about_right_priemushestva_item_name">
                                опытная <br> команда
                            </div>
                            <!-- <div class="about_right_priemushestva_item_description">
                                 
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section class="oborydovanie" id="oborydovanie">
            <div class="oborydovanie_wrapper">
                <span class="oborydovanie_sub_title">
                    топовое оборудование для видеосъемок
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
                                    <img src="img/oborydovanie/sony_fx30_00.jpg" loading="lazy" decoding="async"
                                        alt="картинка Камеры Sony FX30" class="swiper-slide-content_oborydovanie_img">
                                    <div class="swiper-slide-title swiper-slide-title_oborydovanie">Камеры Sony FX30
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide_oborydovanie">
                                <div class="swiper-slide-content  swiper-slide-content_oborydovanie">
                                    <img src="img/oborydovanie/micro.jpg" loading="lazy" decoding="async"
                                        alt="картинка Микрофоны DJI Mic 2"
                                        class="swiper-slide-content_oborydovanie_img">
                                    <div class="swiper-slide-title swiper-slide-title_oborydovanie">Беспроводные микрофоны DJI Mic 2
                                    </div>
                                </div>
                            </div>

                            <div class="swiper-slide swiper-slide_oborydovanie">
                                <div class="swiper-slide-content  swiper-slide-content_oborydovanie">
                                    <img src="img/oborydovanie/godox.jpg" loading="lazy" decoding="async"
                                        alt="картинка Световое оборудование Godox"
                                        class="swiper-slide-content_oborydovanie_img">
                                    <div class="swiper-slide-title swiper-slide-title_oborydovanie">Световое
                                        оборудование Godox</div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide_oborydovanie">
                                <div class="swiper-slide-content  swiper-slide-content_oborydovanie">
                                    <img src="img/oborydovanie/rs4.jpg" loading="lazy" decoding="async"
                                        alt="картинка Стабилизатор"
                                        class="swiper-slide-content_oborydovanie_img">
                                    <div class="swiper-slide-title swiper-slide-title_oborydovanie">Стабилизатор Dji ronin rs4</div>
                                </div>
                            </div>
                            <div class="swiper-slide swiper-slide_oborydovanie">
                                <div class="swiper-slide-content  swiper-slide-content_oborydovanie">
                                    <img src="img/oborydovanie/telesuflor.png" loading="lazy" decoding="async"
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
<section class="location" id="location">
    <div class="location_wrapper">
        <span class="location_sub_title">Примеры наших работ</span>
        <h2 class="location_title">Несколько наших работ</h2>
        <div class="super_wrapper_swiper_location">
            <div class="swiper-button-prev swiper-button-prev_location"></div>
            <div class="swiper swiper_location">
                <div class="swiper-wrapper">
                    <!-- Видео 1 -->
                    <div class="swiper-slide swiper-slide_location">
                        <div class="swiper-slide-content swiper-slide-content_location">
                            <div class="video-container" data-video-id="b28177c07cee9d1a779b4a7052c1b358">
                                <img src="https://pic.rutubelist.ru/video/8f/98/8f98587cf6d85a7af3ffbe76e25c7c8c.jpg" 
                                     class="video-preview" 
                                     alt="Пример нашей работы 1"
                                     loading="lazy"
                                     width="640"
                                     height="360">
                                <div class="play-button"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Видео 2 -->
                    <div class="swiper-slide swiper-slide_location">
                        <div class="swiper-slide-content swiper-slide-content_location">
                            <div class="video-container" data-video-id="41ff85b4202b267b638eca6171e37b7c">
                                <img src="https://pic.rutubelist.ru/video/3d/4a/3d4a0f28fee1ce631dca70444e299ab9.jpg" 
                                     class="video-preview" 
                                     alt="Пример нашей работы 2"
                                     loading="lazy"
                                     width="640"
                                     height="360">
                                <div class="play-button"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Видео 3 -->
                    <div class="swiper-slide swiper-slide_location">
                        <div class="swiper-slide-content swiper-slide-content_location">
                            <div class="video-container" data-video-id="ee00ebe66909b3b2e587c7d9b0611e26">
                                <img src="https://pic.rutubelist.ru/video/2024-10-12/8a/d0/8ad0d3d00cdfdec8bbb0b4ef5efaf495.jpg" 
                                     class="video-preview" 
                                     alt="Пример нашей работы 3"
                                     loading="lazy"
                                     width="640"
                                     height="360">
                                <div class="play-button"></div>
                            </div>
                        </div>
                    </div>

                    <!-- Видео 4 -->
                    <div class="swiper-slide swiper-slide_location">
                        <div class="swiper-slide-content swiper-slide-content_location">
                            <div class="video-container" data-video-id="fa89f99994169de9b916cc0f20dbeba0">
                                <img src="https://pic.rutubelist.ru/video/e6/f3/e6f3fe44c401cbb042bf59723fa03400.jpg" 
                                     class="video-preview" 
                                     alt="Пример нашей работы 4"
                                     loading="lazy"
                                     width="640"
                                     height="360">
                                <div class="play-button"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next swiper-button-next_location"></div>
        </div>
    </div>
</section>

<!-- Модальное окно для видео -->
<div id="videoModal" class="modal">
    <div class="modal-content">
        <span class="close-modal">&times;</span>
        <div class="video-wrapper">
            <iframe id="videoFrame" frameborder="0" allowfullscreen></iframe>
        </div>
    </div>
</div>

<style>
    /* Стили для видео контейнеров */
    .video-container {
        position: relative;
        width: 100%;
        aspect-ratio: 16/9;
        overflow: hidden;
        background: #000;
        border-radius: 8px;
        cursor: pointer;
        transition: transform 0.3s ease;
    }
    .video-container:hover {
        transform: scale(1.02);
    }
    .video-preview {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: opacity 0.3s ease;
        display: block;
    }
    .play-button {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 60px;
        height: 60px;
        background: rgba(255, 65, 65, 0.8);
        border-radius: 50%;
        border: none;
        z-index: 10;
        transition: all 0.3s ease;
    }
    .play-button::after {
        content: "";
        position: absolute;
        left: 52%;
        top: 50%;
        transform: translate(-50%, -50%);
        border-style: solid;
        border-width: 10px 0 10px 16px;
        border-color: transparent transparent transparent white;
    }

    /* Стили для модального окна */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0,0,0,0.9);
        animation: fadeIn 0.3s;
    }
    .modal-content {
        position: relative;
        margin: auto;
        width: 80%;
        max-width: 1200px;
        top: 50%;
        transform: translateY(-50%);
    }
    .video-wrapper {
        position: relative;
        padding-bottom: 56.25%; /* 16:9 */
        height: 0;
    }
    #videoFrame {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        border: none;
    }
    .close-modal {
        position: absolute;
        top: -40px;
        right: 0;
        color: white;
        font-size: 30px;
        font-weight: bold;
        cursor: pointer;
    }
    @keyframes fadeIn {
        from {opacity: 0;}
        to {opacity: 1;}
    }

    @media (max-width: 768px) {
        .modal-content {
            width: 95%;
        }
        .play-button {
            width: 40px;
            height: 40px;
        }
        .play-button::after {
            border-width: 7px 0 7px 12px;
        }
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Инициализация модального окна
    const modal = document.getElementById('videoModal');
    const videoFrame = document.getElementById('videoFrame');
    const closeBtn = document.querySelector('.close-modal');
    
    // Обработчики для открытия видео
    document.querySelectorAll('.video-container').forEach(container => {
        container.addEventListener('click', function() {
            const videoId = this.getAttribute('data-video-id');
            videoFrame.src = `https://rutube.ru/embed/${videoId}/?hideTitle=1&hideAuthor=1&hideStats=1&hideLikes=1&hideDislikes=1&hideComments=1&autoplay=1`;
            modal.style.display = 'block';
            document.body.style.overflow = 'hidden'; // Блокируем скролл страницы
        });
    });
    
    // Закрытие модального окна
    closeBtn.addEventListener('click', function() {
        modal.style.display = 'none';
        videoFrame.src = ''; // Останавливаем видео
        document.body.style.overflow = 'auto'; // Восстанавливаем скролл
    });
    
    // Закрытие при клике вне окна
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
            videoFrame.src = '';
            document.body.style.overflow = 'auto';
        }
    });
    
    // Остановка видео при переходе слайдов (если используется Swiper)
    if (typeof Swiper !== 'undefined') {
        const swiper = document.querySelector('.swiper_location').swiper;
        if (swiper) {
            swiper.on('slideChange', function() {
                if (modal.style.display === 'block') {
                    modal.style.display = 'none';
                    videoFrame.src = '';
                    document.body.style.overflow = 'auto';
                }
            });
        }
    }
    
    // Обработка ошибок загрузки превью
    document.querySelectorAll('.video-preview').forEach(img => {
        img.onerror = function() {
            this.src = 'img/default-preview.jpg'; // Запасное изображение
        };
    });
});
</script>
<style>
    /* Стили для модального окна */
    .modal {
        display: none;
        position: fixed;
        z-index: 1000;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.9);
        overflow: auto;
    }
    
    .modal-content {
        position: relative;
        margin: auto;
        padding: 20px;
        width: 80%;
        max-width: 800px;
        top: 50%;
        transform: translateY(-50%);
    }
    
    .close-modal {
        position: absolute;
        top: -40px;
        right: 0;
        color: white;
        font-size: 35px;
        font-weight: bold;
        cursor: pointer;
    }
    
    .modal-content iframe {
        width: 100%;
        height: 450px;
    }
    
    /* Стили для миниатюр видео */
    .video-thumbnail {
        position: relative;
        cursor: pointer;
    }
    
    .play-button-overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.3);
        display: flex;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s;
    }
    
    .play-button-overlay::before {
        content: "▶";
        color: white;
        font-size: 50px;
        background: rgba(0, 0, 0, 0.6);
        width: 80px;
        height: 80px;
        border-radius: 50%;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    
    .video-thumbnail:hover .play-button-overlay {
        opacity: 1;
    }
    
    @media (max-width: 768px) {
        .modal-content {
            width: 95%;
        }
        
        .modal-content iframe {
            height: 300px;
        }
    }
</style>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Получаем все элементы с видео
        const videoThumbnails = document.querySelectorAll('.video-thumbnail');
        const modal = document.getElementById('videoModal');
        const modalIframe = document.getElementById('modalVideoIframe');
        const closeModal = document.querySelector('.close-modal');
        
        // Добавляем обработчик клика для каждого видео
        videoThumbnails.forEach(thumbnail => {
            thumbnail.addEventListener('click', function() {
                const videoSrc = this.getAttribute('data-video-src');
                modalIframe.src = videoSrc;
                modal.style.display = "block";
                document.body.style.overflow = "hidden"; // Запрещаем прокрутку страницы
            });
        });
        
        // Закрываем модальное окно при клике на крестик
        closeModal.addEventListener('click', function() {
            modal.style.display = "none";
            modalIframe.src = "";
            document.body.style.overflow = "auto"; // Возвращаем прокрутку страницы
        });
        
        // Закрываем модальное окно при клике вне его
        window.addEventListener('click', function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
                modalIframe.src = "";
                document.body.style.overflow = "auto";
            }
        });
    });
</script>
    </main>
    <?php include 'include/footer.php'; ?>
    <!-- Swiper и ваши модули -->
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script defer src="js/swiper_oborydovanie.js"></script>
    <script defer src="js/swiper_location.js"></script>
    <script defer src="js/swiper_reviews.js"></script>
    <script defer src="js/share-modal.js"></script>
    <script src="js/fslightboxx.js?v=<?= time() ?>"></script>

    <!-- Yandex.Metrika (часть юзеров = AdBlock  → ok) -->
    <script async src="https://mc.yandex.ru/metrika/tag.js"></script>
    <script>
        window.ym = window.ym || function () { (ym.a = ym.a || []).push(arguments) };
        ym(101462745, 'init', { clickmap: true, trackLinks: true, accurateTrackBounce: true, webvisor: true });

        /* пример безопасной цели */
        function goal(btn) {
            if (typeof ym === 'function') ym(101462745, 'reachGoal', btn);
        }
    </script>
    <noscript><img src="https://mc.yandex.ru/watch/101462745" style="position:absolute;left:-9999px" alt=""></noscript>

    <script async src='//widjet.matomba.ru/quiz/0c409d0fe4178a457834e477337024bc'></script>


</body>

</html>