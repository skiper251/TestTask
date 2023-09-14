<?php
$conn = mysqli_connect("localhost","root","","Galanix");
$sqlinsert = "TRUNCATE TABLE users;";
$result = mysqli_query($conn,$sqlinsert);
header("Location:/../views/pages/LoadDataP.html");