<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ko'paytirish</title>
    <style>

        body{
            text-align: center;
        }
        h1{
            color: green;
        }
        button{
                color: white;
                background-color: blue;
        }
        div{
            margin-left: 600px;
            margin-top: -40px;
        }
    </style>
    
    
</head>
<body>
<h1>Iltimos raqam kiriting va uni jo'natish</h1>

<form action="kopaytirish_javoblari.php" method="POST">
<input type="number" name="number1" placeholder="Iltimos raqam kiriting" required>
*
<input type="number" name="number2" placeholder="Iltimos raqam kiriting" required>
<button>Jo'natish</button>
</form>

<br>
<div>
    <a href="welcome.php"><button>Orqaga</button></a>
</div>
    
</body>
</html>