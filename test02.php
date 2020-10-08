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
    <title>阿鈺0903</title>
</head>

<body>
    <h2>gossip</h2>
    <hr>
    <hr>
    <?php include "menu.php"; ?>
    <hr>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "12345678";
    $dbname = "bbs";

    // Crea2te connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    echo "<form>";
    echo "張貼密碼:<input type=password name=password>";
    echo "<input type=submit value=login>";
    echo "</form>";
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM news order by id desc";//此段為排序id，dese為遞減
    $result = $conn->query($sql);

    if ($result->num_rows > 0) { //檢查記錄的數量，看是否有info
        // output data of each row
        echo "<table width=800 bgcolor=white>";
        echo "<tr bgcolor=#cccccc><td>no.</td><td>meg</td><td>time</td></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr bgcolor=pink>";
            echo "<td>" . $row["id"] . "</td>" . "<td>" . $row["message"] . "</td>" . "<td>" . $row["postdate"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "0 results"; //如果資料表中沒有記錄，則輸出0 result
    }
    $conn->close();
    ?>
    <hr>
    <?php include "footer.php"; ?>
</body>

</html>