<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amallar</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = htmlspecialchars($_POST['name']); // Ma'lumotni xavfsiz qabul qilish
    echo "<h1>Assalmou alaykum</h1> " ."<h1>$name</h1>"  . " <h1>bizning Amallar dasturimizga xush kelibsiz</h1>";
} else {
    echo "Hech qanday ma'lumot yuborilmadi!";
}

?>

<div style="display: flex; justify-content: center; align-items: center; height: 100vh; gap: 10px;">
<form action="qoshish.php">
    <button style="color:white; background-color:green;">Qo'shish</button>
</form>
<form action="ayirish.php">
    <button style="color:white; background-color:red;">Ayirish</button>
</form>
<form action="kopaytirish.php">
    <button style="color:white; background-color:blue;">Ko'paytirish</button>
</form>
<form action="bolish.php">
    <button style="color:white; background-color:black;">Bo'lish</button>
</form>
</div>


    
</body>
</html>