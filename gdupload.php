<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>使用验证码上传图片</title>
<style type="text/css">
body {font-family:微软雅黑;
      font-size:13pt;
     }
a {font-family:微软雅黑;
      font-size:10pt;
    text-decoration: none;}
</style>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
请上传图片：
<input type="file" name="file" /><br><br>
<input type="text" name="check"/>
<img src="gd.php" id="checkpic"/>
<a href="gdupload.php">看不清？换一张</a><br><br>
<input type="submit" value="submit"/>
</form>
</body>
</html
