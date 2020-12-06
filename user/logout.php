<?php
session_start();
include "dbcontroller.php";
session_unset();
header("location:../index.php");
?>