<?php
session_start();
include('connection.php');
$tempname=$_FILES['file']['tmp_name'];  //文件上传后存储在服务器上的临时文件名
$file=$_FILES['file']['name'];     //客户端的文件名
$type=$_FILES['file']['type']; 
$size=$_FILES['file']['size']; 
$choose_type=array('jpg','gif','png','html','doc','ppt');//可选文件类型
$lastname=array('image/jpeg' =>'jpg',
                'image/gif' => 'gif',
                'image/x-png' => 'png',
                'text/html' => 'html',
                'application/msword' => 'doc',
                'application/vnd.ms-powerpoint' => 'ppt');
if(!is_uploaded_file($tempname))
    echo "<script> alert('未上传文件！');history.go(-1); </script>"; 
else{
    if(isset($_POST['check'])){
        $check = $_POST['check'];
        if($check!=$_SESSION['checked'])
            echo "<script> alert('验证码错误！');history.go(-1);</script>";
        else{
            if (!in_array($lastname["$type"],$choose_type))//end(explode(".",strtolower($pho)))
            //end():将指针指向数组末尾,并输出，strtolower():将字母转换成小写字母，
            //explode():例中用.将字符串分割成数组
                echo "<script> alert('只允许上传以下类型的文件:\ngif,png,jpg,doc,html,ppt!'); 
                history.go(-1);</script>";
            else{
                if($size>70000000)
                    echo "<script> alert('文件大小不能超过70000000k！'); history.go(-1);</script>";
                else{
                    if(!is_dir("files"))
                        mkdir("files");
                    if(move_uploaded_file($tempname,"files/".$file)){
                       //文件存入数据库
                        $path="files/$file";
                        $size="$size b";
                        $sql="insert into file(name,path,type,size) values('$file','$path','$type','$size')";
                        $dbh->exec($sql);
                        echo "<script> alert('文件存入成功！'); </script>";
                    }
                    else
                        echo "<script> alert ('文件存入失败！'); </script>";
                }
            }
        }
    }
}
?>
