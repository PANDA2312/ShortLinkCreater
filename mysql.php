<?php
$con = mysqli_connect("localhost","user","password","database");
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
$arg = $_GET['url'];
mysqli_set_charset($con, "utf8");
$sql="SELECT `Num` FROM `lastNum` WHERE 1";
$result = mysqli_query($con,$sql);
$num = mysqli_fetch_array($result);
$num2 = $num[0]+1;
$sql="UPDATE lastNum SET Num = Num + 1";
$result = mysqli_query($con,$sql);
$sql="INSERT INTO linkData (linkNum,linkUrl) VALUES (".$num2.",\"".$arg."\")";
$result = mysqli_query($con,$sql);
mysqli_close($con);
echo "<p>生成成功！地址：xxx.com/".$num2."</p>";
?>
