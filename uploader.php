<html>
<body>

<?php
if (!empty($_POST))
{
	$pass = $_POST["pass"];
	$uploadedfile = $_POST["uploadedfile"];
	$name = $_POST["name"];

	if($pass = "a long and super secret password")
	{
		$target_path = "uploads/";

		$target_path = $target_path . basename( $_FILES['uploadedfile']['name']); 

		if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
			echo "The file ".  basename( $_FILES['uploadedfile']['name']). 
			" has been uploaded";
		} else{
			echo "There was an error uploading the file, please try again!";
		}
	}
	else {
		echo "Bad Password";
	}
}
?>

<form enctype="multipart/form-data" action="uploader.php" method="POST">
<input type="hidden" name="MAX_FILE_SIZE" value="100000000" />
Choose a file to upload: <input name="uploadedfile" type="file" /><br />
Secret word: <input name="pass" type="text" /><br />
<input type="submit" value="Upload File" />
</form>

</body>
</html>