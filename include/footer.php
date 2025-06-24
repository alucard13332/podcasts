<footer>
    <div class="footer_wrapper">
        <div class="footer_top">
            <!-- <div class="footer_top_logo">
                <img src="img/logo.png" alt="логотип компании в футере" class="footer_top_logo_img">
            </div> -->
            <div class="footer_bottom_left_callback_block">
                <div class="footer_bottom_left_callback_block_btn open_popup">
                    заказать звонок
                </div>
                <div class="footer_bottom_left_callback_block_phones">
                    <!-- <a target="_blank" href="tel:+7 (495) 924-35-34"
                        class="footer_bottom_left_callback_block_phones_item">
                        +7 (495) 924-35-34</a> -->
                    <a target="_blank" href="https://api.whatsapp.com/send/?phone=79859243534"
                        class="footer_bottom_left_callback_block_phones_item">
                        +7 (985) 924-35-34</a>
                </div>
            </div>
            <div class="footer_top_social">
                <a target="_blank" href="https://api.whatsapp.com/send/?phone=79859243534"
                    class="footer_top_social_item wa" onclick="yaCounter101462745.reachGoal('WA'); return true;">
                    <div class="footer_top_social_item_icon_wrapper">
                        <img src="img/icons/whatsapp-brands.svg" alt="иконка WhatsApp"
                            class="footer_top_social_item_icon_img">
                    </div>
                    <span class="footer_top_social_item_text">WhatsApp</span>
                </a>
                <a target="_blank" href="https://t.me/prekrasnaya_podkastnaya" class="footer_top_social_item tg">
                    <div class="footer_top_social_item_icon_wrapper">
                        <img src="img/icons/telegram-brands.svg" alt="иконка Telegramm"
                            class="footer_top_social_item_icon_img">
                    </div>
                    <span class="footer_top_social_item_text">Telegram</span>
                </a>
                <a target="_blank" href="https://vk.com/club230189528" class="footer_top_social_item vk">
                    <div class="footer_top_social_item_icon_wrapper">
                        <img src="img/icons/vk.svg" alt="иконка вк" class="footer_top_social_item_icon_img">
                    </div>
                    <span class="footer_top_social_item_text">Вконтакте</span>
                </a>

            </div>
        </div>
        <div class="footer_bottom">
            <div class="footer_bottom_left">
                <!-- <div class="footer_bottom_left_title">
                    <div class="footer_bottom_left_title_main">
                        записывайте <strong>подкасты</strong>
                    </div>
                    <div class="footer_bottom_left_title_sub">
                        в идеальном качестве и ламповой атмосфере
                    </div>
                </div>
                <span class="footer_bottom_left_description">
                    <strong>Студия видеозаписи и подкастов</strong> — это <strong>пространство для креативных людей и
                        бизнеса,</strong> где каждый может
                    получить <strong>профессиональную поддержку</strong> и <strong>техническое оборудование для записи
                        контента</strong> высокого
                    качества. Мы поможем вам создать подкаст, снять видеоблог или коммерческое видео, не тратя время на
                    поиски оборудования, настройку и обучение.
                </span> -->
               <div id="map-wrapper" style="width: 100%; height: 520px; background: #f1f1f1; position: relative;">
  <div id="yandex-map-placeholder"
       style="position: absolute; inset: 0; display: flex; align-items: center; justify-content: center; color: #888; font-size: 16px;">
    Загрузка карты...
  </div>
</div>

<script>
  let mapLoaded = false;
  function loadYandexMap() {
    if (mapLoaded) return;
    mapLoaded = true;

    const script = document.createElement("script");
    script.src = "https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3A889fff23ce794e65a419d70323536be5a3807f559e2d3d8d77d14d0a21152850&width=100%25&height=520&lang=ru_RU&scroll=true";
    script.async = true;

    script.onload = () => {
      // Удалим сообщение после загрузки карты
      const placeholder = document.getElementById("yandex-map-placeholder");
      if (placeholder) placeholder.remove();
    };

    document.getElementById("map-wrapper").appendChild(script);
  }

  const observer = new IntersectionObserver((entries) => {
    if (entries[0].isIntersecting) {
      loadYandexMap();
      observer.disconnect();
    }
  }, { threshold: 0.1 });

  observer.observe(document.getElementById("map-wrapper"));
</script>

            </div>
            <div class="footer_bottom_right">
                <div class="footer_bottom_right_top">
                    <div class="footer_bottom_right_top_title">
                        Навигация по сайту
                    </div>
                    <div class="footer_bottom_right_top_links">
                        <a href="#ofer" class="footer_bottom_right_top_links_item scroll-link">
                            Главная
                        </a>
                        <a href="#about1" class="footer_bottom_right_top_links_item scroll-link">
                            О нас
                        </a>
                        <a href="#location" class="footer_bottom_right_top_links_item scroll-link">
                            Локации
                        </a>
                        <a href="#oborydovanie" class="footer_bottom_right_top_links_item scroll-link">
                            Оборудование
                        </a>
                        <a href="#service" class="footer_bottom_right_top_links_item scroll-link">
                            Услуги
                        </a>
                    </div>
                </div>
                <div class="footer_bottom_right_bottom">
                    <div class="mini_header_right adress_in_footer">
                        <img src="img/icons/map.svg" alt="иконка карты" class="mini_header_right_map_img">
                        <span class="mini_header_right_text">
                            Адрес:
                        </span>
                        <a href="https://yandex.ru/maps/-/CHb052Zw" target="_blank"
                            class="mini_header_right_link_adress">
                            ул. Студенческая 22к1<br> Кутузовский проспект </a>
                    </div>
                    <div class="footer_bottom_right_bottom_copyright">
                        Copyright © 2025 Прекрасная подкастная
                    </div>
                    <div class="footer_bottom_right_bottom_inn">
                        ИНН: 1657194548
                    </div>
                    <div class="footer_bottom_right_bottom_ogrnip">
                        ОГРНИП: 1151690031470
                    </div>
                    <div class="footer_bottom_right_bottom_arrow_top" id="scrollToTop">
                        вернуться наверх <img src="img/icons/arrow_up.svg" alt="иконка стрелки вверх "
                            class="footer_bottom_right_bottom_arrow_top_img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<!-- <script>
    const phoneInput = document.getElementById('phone');
    phoneInput.addEventListener('input', function (e) {
        this.value = this.value.replace(/[^0-9]/g, '').replace(/(\d{1})(\d{3})(\d{3})/, "+7 ($2) $3-");
    });
</script> -->
     <script>
        $(document).ready(function() {
            // Добавление маски для ввода номера телефона
            $('#phone').mask('+7 (999) 999-99-99');

            $('#popup_content_form').on('submit', function(event) {
                var phoneInput = $('#phone').val();
                var phonePattern = /^\+7\s\(\d{3}\)\s\d{3}-\d{2}-\d{2}$/;

                if (!phonePattern.test(phoneInput)) {
                    event.preventDefault(); // Блокируем отправку формы при некорректном номере
                    $('#error').show();
                } else {
                    $('#error').hide(); // Скрываем сообщение об ошибке
                }
            });
        });
    </script>
<script src="js/scroll_top.js"></script>
<script src="js/burger_menu.js"></script>
<script src="js/popup.js"></script>
    <!-- Swiper и ваши модули -->
    <script defer src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script defer src="js/swiper_oborydovanie.js"></script>
    <script defer src="js/swiper_location.js"></script>
    <script defer src="js/swiper_reviews.js"></script>
    <script defer src="js/share-modal.js"></script>
    <script src="js/fslightboxx.js?v=<?= time() ?>"></script>

<!-- Yandex.Metrika -->
<script type="text/javascript">
    (function(m,e,t,r,i,k,a){
        m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
        m[i].l=1*new Date();
        k=e.createElement(t),a=e.getElementsByTagName(t)[0];
        k.async=1;k.src=r;
        a.parentNode.insertBefore(k,a)
    })(window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

    ym(101462745, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true,
        webvisor:true
    });

    // Безопасный вызов цели
    function goal(name) {
        if (typeof ym === 'function') ym(101462745, 'reachGoal', name);
    }
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/101462745" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika -->


    <script async src='//widjet.matomba.ru/quiz/0c409d0fe4178a457834e477337024bc'></script>


</body>

</html>