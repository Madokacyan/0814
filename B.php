<div style="margin:20% auto; text-align:center">B.php<br><br>
<?
//$Badd=0;
if(!empty($_POST['a'])){
	echo 'B='.$_POST['a'];
	
	$toA=($_POST['a']+1);
}
/*
if(!empty($_POST['BB'])){
	$Badd++;
	$toA=($_GET['a']+1);
	echo $toA;
	header("location:A.php?b=$toA");
}
*/
?>
<form method="post" action="A.php">
<input type="submit" name="submit" value="送B值到A.php">
<input type="hidden" name="b" value="<?=$toA; ?>">
</form>
</div>
