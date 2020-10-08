<script>
    alert("hello");
</script>
<?php
$year = $_POST["year"] + 1911;
$month = $_POST["month"];
$day = $_POST["day"];

$birthday="ur birthday is:$year-$month-$day";
echo "<script>";
echo "alert('$birthday');";
echo "</script>";
?>
<button><a href="test01.php">重選</a></button>