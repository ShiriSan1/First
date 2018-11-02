<!DOCTYPE html>
<html lang="en">
<head>
	<title>HappyNewYear</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
</head>
<body>
<h1>Лабораторная 1</h1>
<br>
<?php
$names = array("Иван","Петр","Семен");
if ($names[0]=="Иван") {
    echo "Привет, Ваня!<br>";
    $num = 1;
    $account = 2000;
} else {
    echo "Привет, $names[0].А мы ждали Ваню :(";
}
if ($num) echo "Иван первый в списке!<br>";
else echo "Иван НЕ первый в списке?!<br>";

$bax = 30;
if($account>(100*$bax+3))
{
    echo "Эта строка не появится на экране,
так как условие не выполнено<br>";
}
    else
{
echo "Зато появится эта строка!<br><br>";
}

echo"<table class='table table-bordered table-striped'>";
echo"<thead> <tr> <th>Нумбер</th> </tr> </thead>";
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
