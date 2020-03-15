<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>File Uploading</title>
</head>
<body>
	<form method='post' action='Moving/Multi_Uploading_Validation.php' enctype='multipart/form-data'>
		<input type="file" name="File[]" id="file" multiple>
		<input type="submit" name="submit" value="upload">
		
	</form>

</body>
</html>