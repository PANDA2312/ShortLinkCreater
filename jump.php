<?php
$con = mysqli_connect("localhost","user","password","database");
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
$arg = $_GET['code'];
mysqli_set_charset($con, "utf8");
$sql="SELECT * FROM `linkData` WHERE linkNum = ".str_replace("c","",$arg);
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_array($result);
mysqli_close($con);
$url = $row['linkUrl'];
header("Location:http://".$url);
exit;
?>