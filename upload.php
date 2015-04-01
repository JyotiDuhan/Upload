<?php
include('<path to db connection file>/db.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Upload Files</title>
	<meta charset="utf-8">
	<script src="/dropzone.js"></script>
	<link rel="stylesheet" href="/dropzone.css">
</head>
<body>
	<label>Image</label>
	<form action="/upload_target.php" class="dropzone" style="height: 150px; width: 200px; min-height: 0px; padding: 0px;"></form>
	<label>Address Proof</label>
	<form action="/upload_target.php" class="dropzone" style="height: 150px; width: 200px; min-height: 0px; padding: 0px;"></form>

	<p>
		<?php
			$sql = "select path from uploads";
			$result = mysqli_query($con,$sql);
			while($pic = mysqli_fetch_assoc($result)){
				foreach ($pic as $pics=>$val) {
					if(strstr($val,'.jpg') || strstr($val,'.png') || strstr($val,'.jpeg')){?>
						<embed src="<? echo $val;?>" width="100px" height="100px">
					<?}else if(strstr($val,'.pdf')){?>
						<object width="100px" height="100px" data="<? echo $val;?>"></object>
					<?}else if(strstr($val,'.docx')){?>
						<a href="<? echo $val;?>"><img src="word.jpeg" width="100px" height="100px">
					<?}
				}
			}
		?>
	</p>
</body>
</html>
