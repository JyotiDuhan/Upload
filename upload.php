<!DOCTYPE html>

<meta charset="utf-8">
<title>Upload</title>
<script src="/dropzone.js"></script>
<link rel="stylesheet" href="https://rawgit.com/enyo/dropzone/master/dist/dropzone.css">
<form action="/store.php" class="dropzone">
</form>
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
