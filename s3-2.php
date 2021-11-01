<b>Задача 3.2</b><br>
<b>Калькулятор</b><br>
<HTML>
<HEAD> <TITLE> Дурнева А.Д. </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 <INPUT type="text" name="a" size="3">
 <INPUT type="text" name="b" size="3">
 <SELECT NAME="z" SIZE="1">
 <OPTION VALUE="1" SELECTED> сложить
 <OPTION VALUE="2"> вычесть
 <OPTION VALUE="3"> умножить
 <OPTION VALUE="4"> разделить
 </SELECT>
 <P> <INPUT type="submit" name="obr" value="Вычислить">
</FORM>
<?
if (isset($_POST["obr"])) {
	switch ($_POST["z"]) {
 // смотрим, чему равна переменная $z
 case 1:
 // 1 — сложить
 $s= $_POST["a"]+$_POST["b"];
 break;
 case 2:
 // 2 — вычесть
 $s= $_POST["a"]-$_POST["b"];
 break;
 case 3:
 // 3 — умножить
 $s= $_POST["a"]*$_POST["b"];
 break;
 case 4:
 // 4 — разделить
 $s= $_POST["a"]/$_POST["b"];
 break;
}
echo ("Результат = $s");
}
?>
</BODY> </HTML>