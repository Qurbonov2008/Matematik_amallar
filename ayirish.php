<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ayirish</title>
</head>


<style>
    body {
        text-align: center;
    }

    button {
        color: white;
        background-color: blue;
    }

    div {
        margin-left: 550px;

        margin-top: -38px;
        /* 20px yuqoriga */


    }
</style>

<body>

    <h1>Iltimos raqam kiriting va uni jo'natish</h1>

    <form action="ayirish_javoblari.php" method="POST">

        <input type="number" name="number1" placeholder="Iltimos raqam kiriting" required>
        -
        <input type="number" name="number2" placeholder="Iltimos raqam kiriting" required>
        <button>Yuborish</button>

    </form>
    <br>

    <div>
        <a href="welcome.php"><button>Orqaga</button></a>
    </div>

</body>

</html>