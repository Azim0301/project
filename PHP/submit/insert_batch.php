<?php

   // var_dump($_POST);

    require_once("../inc/connection.php");

    $sql = 'insert into batch (courseid,startdate,enddate,classtime) value (?,?,?,?)';

    $cmd = $db->prepare ($sql);

    extract($_POST);

    $data = array($courseid,$startdate,$enddate,$classtime);

    $cmd->execute($data);

    $msg = "Batch Added successfully";
    
    header("location:../batch.php?success=$msg");
?> 



