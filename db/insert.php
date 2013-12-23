<?php
require_once('config.php');
$dbc = mysqli_connect(DBIP, USER, PWD, DBNAME) or die("Error on connected mysql.");
// $sql = "select * from users u where u.username = 'test'";
// $result = mysqli_query($dbc, $sql) or die("Error on query executed.");
// mysqli_close($dbc);
$username = $_POST['username'];
$password = $_POST['password'];
// $res = mysqli_fetch_all($result);
// print_r($res);
if(isset($username) && isset($password)){
	$sql = "insert into users(username, password) values".
		"('$username','$password')";
	$result = mysqli_query($dbc, $sql) or die("insert error");
}
mysqli_close($dbc);
?>

<html>
<head>
	<title></title>
</head>
<body>
	<form id="query" action="" method="post">	
		<lable>username:</lable>
		<input type="text" id="username" name="username">
		<br>
		<label for="">password:</label>
		<input type="password" name="password">
		<br>
		<p>
			<input type="submit" value="sign up">
		</p>
	</form>
</body>
</html>