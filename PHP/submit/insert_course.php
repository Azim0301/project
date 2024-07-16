<?php 

    // var_dump($_POST);

    require_once("../inc/connection.php");

    $sql = 'insert into course(title,fees,duration,description) value (?,?,?,?)';
    $cmd = $db->prepare ($sql);

    $cmd->bindparam(1,$_POST['title']);
    $cmd->bindparam(2,$_POST['fees']);
    $cmd->bindparam(3,$_POST['duration']);
    $cmd->bindparam(4,$_POST['description']);

    //Query run
    $cmd->execute();

    $msg = "Course Added Successfully";

    header("location:../course.php?success=$msg");
?>