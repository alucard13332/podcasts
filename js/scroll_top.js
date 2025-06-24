$(document).ready(function() {
    // Показать кнопку при прокрутке вниз
    // $(window).scroll(function() {
    //     if ($(this).scrollTop() > 100) {
    //         $('#scrollToTop').fadeIn();
    //     } else {
    //         $('#scrollToTop').fadeOut();
    //     }
    // });

    // Обработчик клика для прокрутки вверх
    $('#scrollToTop').click(function() {
        $('html, body').animate({ scrollTop: 0 }, 800);
        return false; // чтобы предотвратить переход по ссылке
    });
    $('.scroll-link').on('click', function(event) {
        // Предотвращаем стандартное поведение ссылки
        event.preventDefault();

        // Получаем значение href ссылки (идентификатор секции)
        var target = $(this).attr('href');

        // Плавно прокручиваем к выбранному элементу
        $('html, body').animate({
            scrollTop: $(target).offset().top
        }, 1000); // 1000 - это длительность анимации в миллисекундах
    });
});