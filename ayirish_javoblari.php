<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayirish javoblari</title>
</head>

<body>

    <style>
        body {
            text-align: center;
        }

        button {
            color: white;
            background-color: blue;
        }
    </style>


    <?php

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $number1 = htmlspecialchars($_POST['number1']);
        $number2 = htmlspecialchars($_POST['number2']);

        echo "Javob" . $number1 - $number2;
    } else {
        echo 'raqam yo\'q';
    }


    ?>


    <a href="ayirish.php"><button>Orqaga</button></a>


</body>

</html>