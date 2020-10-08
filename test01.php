<!DOCTYPE html>
<html lang="en">

<head style="">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: 微軟正黑體;
        }
    </style>
    <title>TEST01</title>
</head>

<body>
    <h2>TEST01生日詢問表單</h2>
    <hr>
    <?php include "menu.php"; ?>
    <hr>
    <form method=POST action="response.php">
        民國<select name=year>
            <?php
            for ($i = 106; $i >= 40; $i--) {
                echo "<option value=$i>$i</option>";
            }
            ?>
        </select>年
        <select name=month>
            <?php
            for ($i = 1; $i <= 12; $i++) {
                echo "<option value=$i>$i</option>";
            }
            ?>
        </select>月
        <select name=day>
            <?php
            for ($i = 1; $i <= 31; $i++) {
                echo "<option value=$i>$i</option>";
            }
            ?>
        </select>日
        <input type=submit>
        <?php include "footer.php"; ?>
        <hr>
</body>

</html>