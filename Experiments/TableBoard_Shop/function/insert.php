<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-04-04
 * Time: 오전 9:39
 */

# TODO: MySQL DB에서, POST로 받아온 내용 입력하기!
$connect = mysql_connect("localhost","ysh","qlalfqjsgh1234"); // DB 연결
mysql_select_db("ysh_db", $connect);

$sql = "select * from tableboard_shop where name = $_GET[num]";
$result = mysql_query($sql,$connect);
$row = mysql_fetch_array($result);

//if(!$row) {
$sql = "insert into tableboard_shop(date, order_id, name, price, quantity) 
values('$_POST[date]','$_POST[order_id]', '$_POST[name]','$_POST[price]','$_POST[quantity]')";

$result = mysql_query($sql,$connect);

# 참고 : 에러 메시지 출력 방법
echo "<script> alert('insert - error message') </script>"

?>

<script>
    location.replace('../index.php');
</script>
