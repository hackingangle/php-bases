<form action="" method="post">
<?php
require_once('dbconfig.php');
if(isset($_POST["submit"])){
	$ids = $_POST["ids"];
	print_r($ids);
	echo "<hr />";
}
$dbc = mysqli_connect(DBIP, USER, PWD, DBNAME) or die("Error on connected mysql.");

$sql = "select * from users u limit 1000";

$result = mysqli_query($dbc, $sql);

while($row = mysqli_fetch_array($result)){
?>
		<input type="checkbox" name="ids[]" value="<?php echo $row['uid']?>">
		<?php echo $row['username'];?>
<?php	
}
?>
<input type="submit" value="query" name="submit">
</form>