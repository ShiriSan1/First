<!DOCTYPE html>
<html lang="en">
<head>
	<title>HappyNewYear</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
<h1>������������ 1</h1>
<br>
<?php
$names = array("����","����","�����");
if ($names[0]=="����") {
    echo "������, ����!<br>";
    $num = 1;
    $account = 2000;
} else {
    echo "������, $names[0].� �� ����� ���� :(";
}
if ($num) echo "���� ������ � ������!<br>";
else echo "���� �� ������ � ������?!<br>";

$bax = 30;
if($account>(100*$bax+3))
{
    echo "��� ������ �� �������� �� ������,
��� ��� ������� �� ���������<br>";
}
    else
{
echo "���� �������� ��� ������!<br><br>";
}

echo"<table class='table table-bordered table-striped'>";
echo"<thead> <tr> <th>������</th> </tr> </thead>";
echo"<tbody>";
	$i = 1;
    while ($i < 10) {
        if ($i % 2 == 0)echo"<tr> <th scope='row'>$i</th> </tr>";
        $i++;
    }
echo"<tbody>";
echo"</table>";
?>
	</body>
</html>
