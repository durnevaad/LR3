<b>Задача 3.4</b><br>
<HTML>
<HEAD> <TITLE> Дурнева А.Д. </TITLE> </HEAD>
<BODY>
<FORM method="post" action="<?php print $PHP_SELF ?>">
 Введите логин: <INPUT type="text" name="a" size="30">
 
 <P> <INPUT type="submit" name="obr" value="Вход">
</FORM>
<?
if (isset($_POST["obr"])) {
if ($_POST["a"]=="annad"){
	echo "Здравствуйте, Дурнева Анна Дмитриевна!";}
else if ($_POST["a"]=="dimdim"){
	echo "Здравствуйте, Дим Димыч!";}
else if ($_POST["a"]=="haeva"){
	echo "Здравствуйте, Хаева Марина Андреевна!";}
else if ($_POST["a"]=="mara"){
	echo "Здравствуйте, Фазуллин Марат Рауфович!";}
else {echo "Вы не зарегестрированный пользователь!";}
}
?>
</BODY> </HTML>