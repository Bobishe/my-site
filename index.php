<!doctype html>
<html lang=ru>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="assets/style.css">

    <link rel="stylesheet" href="assets/lib/css/bootstrap.css">
    <link rel="stylesheet" href="assets/lib/js/bootstrap.js">
    <title>Осколков Е.М.</title>
</head>
<body>

<?php
if (isset($_GET['message']) && $_GET['message'] === 'success') {
    echo '<img id="massage" class="massage img-fluid" src="assets/img/info_massege.png" alt=""></img>';
}
?>

<div class="index">

    <div class="header">
        <div class="header_link ">


            <button class="link" id="myButton0"><p>Обо мне</p></button>
            <button class="link" id="myButton1"><p>Достижения</p></button>
            <button class="link" id="myButton2"><p>Скилы</p></button>
            <button class="link" id="myButton3"><p>Работы</p></button>
            <button class="link" id="myButton4"><p>Хобби и планы</p></button>

        </div>
        <div class="header_btn">
            <div class="bable" id="bable"></div>
            <div class="bable" id="bable"></div>
            <div class="bable" id="bable"></div>
        </div>
    </div>


    <div class="info" id="info_btn">
        <button>
            <img src="assets/img/info.png" class="img-fluid" width="70" height="70" alt="#">
            <h4 class="h4" style="font-weight: bold;">Связаться</h4>
        </button>
    </div>

    <div class="info_block" id="info_block" >
        <div class="info_block_header">
            <div class="close" id="close">
            </div>
        </div>

        <div class="row">
            <div class="col-2">
                <div class="info_link">
                    <a href="">
                        <img src="assets/img/telegram.png" class="img-fluid" alt="#" width="60">
                    </a>
                </div>
            </div>

            <form class="contact-form col-7 mt-5" method="post" action="scripts/send_email.php">
                <input type="email" id="email" name="email" placeholder="Ваш Email" required>
                <input type="text" id="name" name="name" placeholder="Имя" required>
                <input type="tel" id="phone" name="phone" placeholder="Номер телефона" required>
                <textarea id="message" name="message" placeholder="Сообщение" required></textarea>
                <button type="submit" class="btn_submit mt-3">Отправить</button>
            </form>
        </div>


    </div>


    <div class="frame_container position-absolute top-50 start-50 translate-middle">
        <div class="frame_header">
            <div class="line1">
                <div class="line_inner"></div>
                <div class="line_inner"></div>
                <div class="line_inner"></div>
                <div class="line_inner"></div>
                <div class="line_inner"></div>
            </div>
            <div class="block"></div>
            <div class="line2">
                <div class="line_inner"></div>
                <div class="line_inner"></div>
                <div class="line_inner"></div>
                <div class="line_inner"></div>
                <div class="line_inner"></div>
            </div>
            <div class="header_text "><p  id="header_text">обо мне</p></div>
            <div class="line3">
                <div class="line_inner"></div>
                <div class="line_inner"></div>
                <div class="line_inner"></div>
                <div class="line_inner"></div>
                <div class="line_inner"></div>
            </div>
        </div>


        <iframe id="myFrame" src="pages/about.html" ></iframe>


    </div>
</div>


<script src="assets/script.js">

</script>

</body>
</html>