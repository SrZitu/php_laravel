<!DOCTYPE html>
<html>

<head>
	<title>File Upload Project</title>
</head>

<body>
	<?php
	if (isset($_FILES['file'])) {
		$target_dir = "uploads/";
		$target_file = $target_dir . basename($_FILES['file']['name']);
		$upload_ok = 1;
		$file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

		//if already uploaded the same file
		if (file_exists($target_file)) {
			echo "file already exists ";
			$upload_ok = 0;
		}

		//if file is too large
		if ($_FILES['file']['size'] > 50000) {
			echo "file is too large to upload";
			$upload_ok = 0;
		}

		//match specific file format
		if($file_type!=="jpg"&& $file_type!=='png' && $file_type!=="jpeg"){
			echo "invalid file format";
			$upload_ok=0;
		}

		if($upload_ok==0){
			echo "sorry your file can't be uploaded";
		}else{
			if(move_uploaded_file($_FILES['file']['tmp_name'],$target_file)){
				echo "the file " . htmlspecialchars(basename($_FILES['file']['name'])) . "has been uploded";
			}else{
				echo "sorry there is an error to upload this file";
			}
		}
	}
	?>
</body>

</html>