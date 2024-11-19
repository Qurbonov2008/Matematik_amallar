<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Javoblar</title>
</head>
<style>
    body{
        text-align: center;
    }
    button{
        color: white;
        background-color: blue;
    }
</style>

<body>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Foydalanuvchi kiritgan qiymatlarni olish va to'g'ri formatlash
        $number1 = floatval($_POST['number1']);
        $number2 = floatval($_POST['number2']);

        // Javobni hisoblash
        $sum = $number1 + $number2;

        echo "Javob: " . $sum;
    } else {
        echo 'Hech narsa yo\'q';
    }
    ?>



 <a href="qoshish.php"><button>Orqaga</button></a>

</body>

</html>
