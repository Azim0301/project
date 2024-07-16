<?php
    session_start();
    if(isset($_SESSION['userid']) == false)
    {
        header("location:index.php?error=Login first");
    }
?>