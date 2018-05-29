<?php

$name = $_GET["name"];

$connection = mysqli_connect('localhost', 'root', '', 'list_ajax') or die ('Sorry, but it was not possible complete the connection');

mysqli_set_charset($connection, 'utf8');

$queryInsert = "INSERT INTO tb_item (nm_item) VALUES ('$name')";

mysqli_query($connection, $queryInsert) or die ("Failed to send datas");

$querySelect = mysqli_query($connection, "SELECT cd_item, nm_item FROM tb_item WHERE nm_item = '$name' ORDER BY cd_item DESC") or die("Commands execution failed".mysqli_error($server));

$row = mysqli_fetch_array($querySelect) or die("-----ERROR-----");

$name = $row['nm_item'];
$id = $row['cd_item'];

mysqli_close($connection);

echo "<tr id='".$id."'><td>".$id."</td><td>".$name."</td><td class='remove' onclick='remove(".$id.")'>X</td></tr>";

?>