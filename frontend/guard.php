<?php
session_start();
if($_SESSION['isValidUser'])
{
echo "access denied";
}
else
{
    header('location:guard.php');
}
?>