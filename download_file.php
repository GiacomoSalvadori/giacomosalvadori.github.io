<?php
	
	
	$fileCode = $_POST['file_code'];
	$fileList = array(
					'0wz9ZB6Oax' => 'creamy_battle.zip'
				);
	
	$fileName = $fileList[$fileCode];
	
	if(!$fileName){
		echo '<h1>ACCESS DENIED</h1>';
	} else {
		$file_path = __DIR__.'/games/'.$fileName;
		
		header("Content-type: application/zip");
		header("Content-Disposition: attachment; filename=$fileName");
		header("Pragma: no-cache"); 
		header("Expires: 0"); 
		readfile("$file_path");
	}
	
	exit();
?>