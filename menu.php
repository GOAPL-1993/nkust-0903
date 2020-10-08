<?php
$target = $_POST["target"];
if ($target != NULL) {
    header("Location:$target");
    exit;
}
//建立一個結合陣列的陣列
//menudata是整個選單的陣列
//中間每個項目都是以結合陣列的型式儲存名稱和連結
$menudata = array(
    array("name" => "HOMEPAGE", "link" => "index.php"),
    array("name" => "生日詢問表單", "link" => "test01.php"),
    array("name" => "gossip", "link" => "test02.php"),
    array("name" => "播放清單", "link" => "test03.php"),
    array("name" => "高科大", "link" => "http://www.nkust.edu.tw")

);
echo "<form method=POST action=index.php>";
echo "選單：<select name=target>";
foreach ($menudata as $item) {
    echo "<option value=" . $item["link"] . ">" . $item["name"] . "</option>";
}
echo "</select>";
echo "<input type=submit value=GO>";
echo "</form>";
