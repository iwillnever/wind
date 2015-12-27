<html>
<head>
<meta http-equiv="refresh" content="1;url=website.php" charset="utf-8">
</head>
</body>
<?php
include('connection.php');
$name = $_POST['addname'];
$delete = $_POST['delete'];
$path = $_POST['addpath'];
$type = $_POST['addtype'];
$sql0 = "insert into websites(name,path,type) values('$name','$path','$type')";
$sql00 = "delete from websites where name='$delete'";
$sqll = "select * from websites where name='$delete'";
$resu = $dbh->prepare($sqll);
$resu->execute();
$messag = $resu->fetchAll(PDO::FETCH_ASSOC);
if($delete == NULL){
	if(!$name||!$path||!$type)
		echo "<script> alert ('请填写完整！'); </script>";
    else{
    	$dbh->exec($sql0);
        echo "添加成功!";
    }
}
else{
    if($messag == NULL)
    	echo "<script> alert ('无这个网址！'); </script>";
    else{
    	$dbh->exec($sql00);
        echo "删除成功!";
    }
}
?>
</body>
</head>
