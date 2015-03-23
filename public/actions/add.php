<?php
require_once('connect.php');

$query = "INSERT INTO `blog_post` (`UID`, `file`, `song`, `artist`, `key`, `bpm`, `info`) VALUES ('{$_POST[UID]}', '{$_POST[file]}', '{$_POST[song]}', '{$_POST[artist]}', '{$_POST[key]}', '{$_POST[bpm]}', '{$_POST[info]}')";
$posts = mysqli_query($con, $query);


 ?>