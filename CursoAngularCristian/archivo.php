<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
$conn = new mysqli("localhost", "root", "", "tabla");
$result = $conn->query("SELECT * FROM tabla");
$outp = "";
while($rs = $result->fetch_array(MYSQLI_ASSOC)) {
    if ($outp != "") {$outp .= ",";}
    $outp .= '{"nombre":"'  . $rs["nombre"] . '",';
    $outp .= '"precio":"'   . $rs["precio"]        . '",';
    $outp .= '"stock":"'. $rs["stock"]     . '"}';
}
$outp ='{"records":['.$outp.']}';
$conn->close();
echo($outp);
?>