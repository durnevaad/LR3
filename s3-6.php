<title>Дурнева А.Д.</title>
<b>Задача 3.6</b><br>
<?
echo ("6-е задание: <br>") ;
$text = $_POST["t"];
$gav = strtoupper($text);
$izm= str_split($gav);
$s=0;
if (in_array ("A", $izm)){
	$s=$s+1;
echo "Входит гласная a <br>";}
if (in_array ("E", $izm)){
	$s=$s+1;
echo "Входит гласная e <br>";}
if (in_array ("I", $izm)){
	$s=$s+1;
echo "Входит гласная i <br>";}
if (in_array ("O", $izm)){
	$s=$s+1;
echo "Входит гласная o <br>";}
if (in_array ("U", $izm)){
	$s=$s+1;
echo "Входит гласная u <br>";}
if (in_array ("Y", $izm)){
	$s=$s+1;
echo "Входит гласная y <br>";}
echo "Гласных в предложениии: $s <br>";

echo ("<br>8-е задание: <br>") ;
echo join (array_unique(str_split($text)));



echo ("<br><br>10-е задание: <br>") ;
echo strtoupper ($text);
?>
<p><a href="s3-6.html">Вернуться назад</a></p>