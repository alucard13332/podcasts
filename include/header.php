
    <style>

        
        .main_header_call_block {
            width: 350px;
            height: 130px;
            background: var(--main_color);
            position: relative;
            top: 20px;
            border-radius: 30px;
            background-image: linear-gradient(to right bottom, var(--color_for_btn_gradient) 0%, rgba(255, 255, 255, 0) 100%);
            background-repeat: no-repeat;
            background-position: left 0px top 0px;
            background-size: auto;
            background-attachment: scroll;
            display: flex;
            justify-content: space-between;
            align-content: center;
            padding: 0 30px;
            gap: 10px;
            z-index: 1;
            flex-wrap: wrap;
        }
        
        /* Стили для фиксированного состояния на мобильных */
        @media (max-width: 980px) {
            .main_header_call_block {
                position: sticky;
                top: 20px;
                margin-bottom: 20px;
                z-index: 999;
            }
            
            /* Для плавного скролла */
            html {
                scroll-padding-top: 150px;
            }
            
            /* Альтернативный вариант с фиксацией после скролла */
            .main_header_call_block.fixed {
                position: fixed;
                top: 20px;
                left: 50%;
                transform: translateX(-50%);
                animation: fadeIn 0.3s ease;
                box-shadow: 0 4px 15px rgba(0,0,0,0.1);
                z-index: 1000;
            }
            
            @keyframes fadeIn {
                from { opacity: 0.8; transform: translateX(-50%) translateY(-10px); }
                to { opacity: 1; transform: translateX(-50%) translateY(0); }
            }
        }
    </style>
</head>
<body>

<header>
    <div class="mini_header">
        <div class="mini_header_wrapper">
            <div class="burger_btn" id="burger_btn">
                <img src="img/icons/burger.svg" alt="картинка бургер меню">
            </div>
            <div class="mini_header_left">
                <img src="img/icons/time.svg" alt="иконка часов" class="mini_header_left_time_img">
                <span class="mini_header_left_text">
                    Работаем ежедневно:
                </span>
                <span class="mini_header_left_time_work">с 08:00 до 21:00</span>
            </div>
            <div class="mini_header_center">
                <a target="_blank" href="https://t.me/prekrasnaya_podkastnaya" class="mini_header_center_item">
                    <div class="mini_header_center_item_icon_wrapper">
                        <img src="img/icons/telegram-brands.svg" alt="иконка TG"
                            class="mini_header_center_item_icon_img">
                    </div>
                    <span class="mini_header_center_item_icon_text">Telegram</span>
                </a>
                <a target="_blank" href="https://vk.com/club230189528" class="mini_header_center_item">
                    <div class="mini_header_center_item_icon_wrapper">
                        <img src="img/icons/vk.svg" alt="иконка вк" class="mini_header_center_item_icon_img">
                    </div>
                    <span class="mini_header_center_item_icon_text">Вконтакте</span>
                </a>
            </div>
            <div class="mini_header_right">
                <img src="img/icons/map.svg" alt="иконка карты" class="mini_header_right_map_img">
                <span class="mini_header_right_text">
                    Адрес:
                </span>
                <a href="https://yandex.ru/maps/-/CHb052Zw" target="_blank" class="mini_header_right_link_adress">
                    г. Москва, ул. Студенческая 22к1. Кутузовский проспект </a>
            </div>
        </div>
    </div>
    <div class="main_header">
        <div class="main_header_wrapper">
            <a href="/" class="main_header_logo">
                <img src="img/logo.webp" alt="логотип компании" class="main_header_logo_img">
            </a>
            <div class="main_header_menu">
                <div class="main_header_menu_ul">
                    <a href="/" class="main_header_menu_ul_item <?= $main ?> ">
                        <li class="main_header_menu_ul_item_text">Главная</li>
                    </a>
                    <a href="/#about" class="main_header_menu_ul_item">
                        <li class="main_header_menu_ul_item_text">О нас</li>
                    </a>
                    <a href="/#location" class="main_header_menu_ul_item">
                        <li class="main_header_menu_ul_item_text">Локация</li>
                    </a>
                    <a href="/#oborydovanie" class="main_header_menu_ul_item">
                        <li class="main_header_menu_ul_item_text">Оборудование</li>
                    </a>
                    <a href="/blog.php" class="main_header_menu_ul_item">
                        <li class="main_header_menu_ul_item_text">Блог</li>
                    </a>
                    <a href="/viezd.php" class="main_header_menu_ul_item">
                        <li class="main_header_menu_ul_item_text">Выездные съёмки</li>
                    </a>
                    <?php if (basename($_SERVER['SCRIPT_NAME']) === 'index.php'): ?>
                        <a href="#services" class="main_header_menu_ul_item scroll-link">
                            <li class="main_header_menu_ul_item_text">Услуги</li>
                        </a>
                    <?php endif; ?>
                </div>
            </div>
            <div class="main_header_call_block">
                <div class="main_header_call_block_item">
                    <img src="img/icons/phone.svg" alt="иконка телефона" class="main_header_call_block_left_img">
                    <a target="_blank" href="tel: +7(985)924-35-34" class="main_header_call_block_right_phone">+7(985)924-35-34</a>
                </div>
                <div class="main_header_call_block_item">
                    <img src="img/icons/whatsapp-brands.svg" alt="иконка ватсап"
                        class="main_header_call_block_left_img">
                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=79859243534"
                        class="main_header_call_block_right_phone"
                        onclick="yaCounter101462745.reachGoal('WA'); return true;">+7(985)924-35-34</a>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="header_mobile_podlojka">
    <div class="header_mobile">
        <div class="header_mobile_item_top_arrow" id="close_burger_menu">
            <svg data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="512" height="512"
                data-prefix="ijzj0hv7b">
                <path
                    d="M512 30.17L481.83 0 256 225.83 30.17 0 0 30.17 225.83 256 0 481.83 30.17 512 256 286.17 481.83 512 512 481.83 286.17 256z"
                    class="path-i4htnuep0"></path>
            </svg>
        </div>
        <a href="#ofer" class="header_mobile_item">
            Главная
        </a>
        <a href="/#about" class="header_mobile_item">
            О нас
        </a>
        <a href="/#location" class="header_mobile_item">
            Локация
        </a>
        <a href="/#oborydovanie" class="header_mobile_item">
            Оборудование
        </a>
        <a href="/#services" class="header_mobile_item">
            Услуги
        </a>
        <a href="/blog.php" class="header_mobile_item">
            Блог
        </a>
        <a href="/viezd.php" class="header_mobile_item">
            Выездные съёмки
        </a>
    </div>
</div>

<div class="popup" id="popup">
    <div class="popup_wrapper">
        <div class="popup_content">
            <div class="popup_content_close_btn" id="close_popup">
                <svg data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="512"
                    height="512" data-prefix="i1y0g7pzc">
                    <path
                        d="M512 30.17L481.83 0 256 225.83 30.17 0 0 30.17 225.83 256 0 481.83 30.17 512 256 286.17 481.83 512 512 481.83 286.17 256z"
                        class="path-ij1hf145k"></path>
                </svg>
            </div>
            <p class="popup_content_title">
                Оставьте заявку
            </p>
            <p class="popup_content_sub_title">
                Наши менеджеры свяжутся с Вами в течение 5 минут
            </p>
            <form method="post" action="thanks.php" class="popup_content_form" id="popup_content_form">
                <input type="text" name="name" class="popup_content_form_input" required placeholder="Ваше имя">
                <input type="text" name="phone" id="phone" placeholder="+7 (999) 999-99-99"
                    class="popup_content_form_input" required>
                <label>
                    <input type="checkbox" class="custom-radio" name="agreement" value="yes" required>
                    <span class="custom-radio-label">Нажимая на кнопку, я даю согласие на обработку своих персональных
                        данных</span>
                </label>
                <button class="popup_content_form_btn"
                    onclick="yaCounter101462745.reachGoal ('order'); return true;">Отправить запрос</button>
                <div id="error" style="color: red; display: none;">Некорректный номер телефона</div>
            </form>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const callBlock = document.querySelector('.main_header_call_block');
    const originalOffset = callBlock.offsetTop - 20; // Учитываем ваш top: 20px

    function handleScroll() {
        if (window.innerWidth > 980) return;

        if (window.pageYOffset > originalOffset) {
            callBlock.classList.add('fixed');
        } else {
            callBlock.classList.remove('fixed');
        }
    }

    // Инициализация
    if (window.innerWidth <= 980) {
        window.addEventListener('scroll', handleScroll);
        handleScroll();
    }

    // Обработчик изменения размера окна
    window.addEventListener('resize', function() {
        if (window.innerWidth <= 980) {
            window.addEventListener('scroll', handleScroll);
            handleScroll();
        } else {
            callBlock.classList.remove('fixed');
            window.removeEventListener('scroll', handleScroll);
        }
    });
});
document.addEventListener('DOMContentLoaded', function() {
    const headerWrapper = document.querySelector('.main_header_wrapper');
    const originalOffset = headerWrapper.offsetTop;
    const headerHeight = headerWrapper.offsetHeight;
    
    // Сохраняем оригинальные стили перед фиксацией
    const originalStyles = {
        position: headerWrapper.style.position,
        top: headerWrapper.style.top,
        width: headerWrapper.style.width,
        padding: headerWrapper.style.padding,
        backgroundColor: headerWrapper.style.backgroundColor
    };
    
    function handleScroll() {
        if (window.pageYOffset > originalOffset) {
            // Фиксируем блок
            headerWrapper.style.position = 'fixed';
            headerWrapper.style.top = '0';
            headerWrapper.style.width = '100%';
            headerWrapper.style.padding = '0px 40px';
            headerWrapper.style.backgroundColor = 'white';
            headerWrapper.style.zIndex = '1000';
            headerWrapper.style.boxShadow = '0 2px 10px rgba(0,0,0,0.1)';
            
            // Добавляем отступ для основного контента
            document.body.style.paddingTop = headerHeight + 'px';
        } else {
            // Возвращаем оригинальные стили
            headerWrapper.style.position = originalStyles.position;
            headerWrapper.style.top = originalStyles.top;
            headerWrapper.style.width = originalStyles.width;
            headerWrapper.style.padding = originalStyles.padding;
            headerWrapper.style.backgroundColor = originalStyles.backgroundColor;
            headerWrapper.style.boxShadow = '';
            
            // Убираем отступ
            document.body.style.paddingTop = '0';
        }
    }
    
    // Оптимизация производительности
    let ticking = false;
    window.addEventListener('scroll', function() {
        if (!ticking) {
            window.requestAnimationFrame(function() {
                handleScroll();
                ticking = false;
            });
            ticking = true;
        }
    });
    
    // Обработчик изменения размера окна
    window.addEventListener('resize', function() {
        originalOffset = headerWrapper.offsetTop;
    });
});
</script>

</body>
</html>