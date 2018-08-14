<div style="margin:20% auto; text-align:center">A.php<br><br>
<?
/*$add=1;
echo 'A='.$add;

if(!empty($_POST['submit'])){
	$add++;
	header("location:B.php?a=$add");
}
*/


if(!empty($_POST['b'])){	
	//$add++;
	echo 'A='.$_POST['b'];
	$toB=($_POST['b']+1);
	//header("location:B.php?a=$AB");
}else{
	echo 'A=1';	
	$a=1;
	$toB=($a+1);
}

?>

<form method="post" action="B.php">
<input type="submit" name="submit" value="送A值到B.php">
<input type="hidden" name="a" value="<?=$toB ?>">
</form>
</div>

