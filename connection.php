<?php

$con= new PDO('mysql:host=localhost;dbname=notice_board','root','');

echo "successeful";

$con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



?>