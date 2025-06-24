<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Спасибо за заявку!</title>
    <link rel="stylesheet" href="css/style.css">
    <?php $main = 'active'; ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
    <link rel="icon" href="img/favicon.ico" type="image/x-icon">
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i] || function () { (m[i].a = m[i].a || []).push(arguments) };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) { if (document.scripts[j].src === r) { return; } }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })
            (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

        ym(101462745, "init", {
            clickmap: true,
            trackLinks: true,
            accurateTrackBounce: true,
            webvisor: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/101462745" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
</head>

<body>
    <?php include 'include/header.php'; ?>
    <main>
        <section class="thanks">
            <div class="thanks_wrapper">
                <?php

                use PHPMailer\PHPMailer\PHPMailer;
                use PHPMailer\PHPMailer\SMTP;
                use PHPMailer\PHPMailer\Exception;

                require 'vendor/phpmailer/phpmailer/src/Exception.php';
                require 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
                require 'vendor/phpmailer/phpmailer/src/SMTP.php';

                //Create an instance; passing `true` enables exceptions
                $mail = new PHPMailer(true);

                try {
                    //Server settings
                    $mail->SMTPDebug = 0;
                    $mail->isSMTP();
                    $mail->Host = 'connect.smtp.bz';
                    $mail->SMTPAuth = true;
                    $mail->Username = 'xazemage@yandex.ru';
                    $mail->Password = 'DMyNjmAyqpCR';
                    $mail->SMTPSecure = 'tls';
                    $mail->Port = 587;
                    $mail->CharSet = 'UTF-8';


                    $mail->SMTPOptions = array(
                        'ssl' => array(
                            'verify_peer' => false,
                            'verify_peer_name' => false,
                            'allow_self_signed' => true
                        )
                    );

                    //Recipients
                    $mail->setFrom('site@xn----7sbabawd4be0afiggicsit6wka.xn--p1ai', 'прекрасная-подкастная.рф');
                    $mail->addAddress('xazemage@yandex.ru', 'Разработчик');
                    $mail->addAddress('402332@mail.ru', 'Почта для заявок');
                    $mail->addAddress('du73zmdj@spamtest.smtp.bz', 'Проверка на спам');

                    $name = htmlspecialchars(trim($_POST['name'])); // Получить имя
                    $phone = htmlspecialchars(trim($_POST['phone'])); // Получить телефон
                
                    //Content
                    $mail->isHTML(true);
                    $mail->Subject = 'Заявка с сайта Прекрасная подкастная';
                    $mail->Body = '
                         Имя: ' . $name . '<br> Телефон: ' . $phone . '
                   ';

                    if ($name !== '' && $phone !== '') {
                        $mail->send();
                        echo
                            '
                        <h1 class="thanks_title"> Благодарим за доверие! </h1>
                        <p class="thanks_subtitle">
                            Мы получили Вашу заявку и свяжемся с Вами в течении 15 минут.
                        </p>
                        <p class="thanks_text">
                            Сохраните наш номер телефона, чтобы не пропустить звонок от менеджера: <a href="tel: +7(985)924-35-34"> +7(985)924-35-34</a>
                        </p>
                        <p class="thanks_text">
                           Вы будете перенаправлены на главную страницу в течении 10 сек
                        </p>
                    ';
                        echo '
                        <script>
        setTimeout(function() {
            window.location.href = "https://прекрасная-подкастная.рф";
        }, 10000); // 10000 миллисекунд = 10 секунд
    </script>';
                    } else {
                        echo
                            '
                        <h1 class="thanks_title"> Благодарим за доверие! </h1>
                        <p class="thanks_subtitle">
                            Мы получили данные по заявке.
                        </p>
                        <p class="thanks_text">
                           Вы можете дождаться звонка менеджера или позвонить нам по номеру: <a href="tel: +7(985)924-35-34"> +7(985)924-35-34 </a>
                        </p>
                    ';
                    }
                } catch (Exception $e) {
                    echo '<h1 class="thanks_title"> Ошибка при отправке письма. ' . $mail->ErrorInfo . '</h1>';
                }

                ?>

                <a href="/" class="ofer_overlay_left_button_block_btn ">
                    На главную
                </a>
            </div>

        </section>
    </main>
    <?php include 'include/footer.php'; ?>

</body>

</html>