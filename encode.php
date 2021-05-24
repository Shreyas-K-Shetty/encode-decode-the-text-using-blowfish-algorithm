<?php
$db=mysqli_connect('localhost','root','','demo') or die("could not connect to database");
$user_name=mysqli_real_escape_string($db,$_POST['uname']);
$invisible=mysqli_real_escape_string($db,$_POST['uname1']);
echo $invisible;