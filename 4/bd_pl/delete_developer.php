<?php
 $conn = mysqli_connect("sql11.freemysqlhosting.net","sql11466478","vbqFjsYdN9", "sql11466478") or die ("���������� ������������ � �������");
 $zapros="DELETE FROM developer WHERE id=" . $_GET['id'];
 mysqli_query($conn, $zapros);
 header("Location: index.php");
 exit;
?>