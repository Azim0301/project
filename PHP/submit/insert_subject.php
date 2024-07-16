<?php

// var_dump($_POST);

require_once("../inc/connection.php");

$sql = 'insert into subject(courseid,title,rate) value (?,?,?)';

$cmd = $db->prepare($sql);

extract($_POST);

$data = array($courseid,$title,$rate);

$cmd->execute($data);

$msg = "Subject Added successfully";

header("location:../subject.php?success=$msg");
?>