<?php session_start(); ?>
<!--上方語法為啟用session，此語法要放在網頁最前方-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?php

$id=$_POST['id'];
$pw=$_POST['pw'];

if($id != null && $pw != null && $id=='user' && $pw=='181818')
{
        echo '登入成功!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=canvas.html>';
}
else
{
        echo '登入失敗!';
        echo '<meta http-equiv=REFRESH CONTENT=1;url=index.php>';
}
?>