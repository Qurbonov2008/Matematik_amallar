<!-- Mahsulot ro'yxati yarating va foydalanuvchidan mahsulot tanlashni so'rang.
Mahsulotlar uchun PHP yordamida savat tizimini yarating. -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Amallar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Dasturga kirishdan oldin iltimos quydagi formani to'ldiring</h1>
    <div class="form">
        <form action="welcome.php" method="POST">
            <label for="name">Name</label>
            <input type="text" name="name" placeholder="Ismingzni to'ldiring" id="name" required>
            <br>
            <label for="birthday">Birthday</label>
            <input type="date" name="birthday" placeholder="Tug'ilgan kuningiz" id="birhtday" required>
            <div class="button">
                <button>Yuborish</button>
            </div>
        </form>
    </div>
</body>

</html>