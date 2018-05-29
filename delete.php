<?php

$id = $_GET['id'];

$connection = mysqli_connect("localhost", "root", "", "list_ajax") or die('Sorry, but it was not possible complete the connection');

mysqli_set_charset($connection,'utf8');

$query = "UPDATE tb_item SET cd_status = 0 WHERE cd_item = '".$id."'";

mysqli_query($connection, $query) or die("Failed to send datas");

mysqli_close($connection);

?>