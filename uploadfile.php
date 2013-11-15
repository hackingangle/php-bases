<?php
	if(isset($_POST['submit'])){
		echo $_FILES["image"]['name'];
		move_uploaded_file($_FILES['image']['tmp_name'], time().$_FILES['image']['name']);
	}
?>
<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" enctype="multipart/form-data">
	<input type="file" name="image" id="image">
	<input type="submit" value="upload" name="submit">
</form>