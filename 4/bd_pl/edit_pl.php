<?php header('Content-Type: text/html; charset=windows-1251'); ?>

<html>
<head>
<title> �������������� ������ </title>
</head>
<body>
<?php
 $conn = mysqli_connect("sql11.freemysqlhosting.net","sql11466478","vbqFjsYdN9", "sql11466478") or die ("���������� ������������ � �������");
 mysqli_query($conn, 'SET NAMES cp1251');
 $rows=mysqli_query($conn, "SELECT * FROM pl WHERE id='".$_GET['id']."'");
 while ($st = mysqli_fetch_array($rows)) {
 $id=$st['id'];
 $name=$st['name'];
 $type = $st['type'];
 $year = $st['year'];
 $exec = $st['exec'];
 $dev = $st['dev'];
 }
print "<form action='save_edit_pl.php' metod='get'>";
print "��������: <input name='name' size='20' type='text'
value='".$name."'>";
print "<br>���: <input name='type' size='20' type='text'
value='".$type."'>";
print "<br>��� ����������: <input name='year' size='10' type='text'
value='".$year."'>";
print "<br>��� ����������: <input name='exec' size='20' type='text'
value='".$exec."'>";
print "<br>�����������: <input name='dev' size='20' type='text'
value='".$dev."'>";
print "<input type='hidden' name='id' value='".$id."'> <br>";
print "<input type='submit' name='' value='���������'>";
print "</form>";
print "<p><a href=\"index.php\"> ��������� </a>";
?>
</body>
</html>