<?php
	
	
	$fileCode = $_POST['file_code'];
	$fileList = array(
					'games' => array(
									'0wz9ZB6Oax' => 'creamy_battle.zip'
									),
					'papers' => array(
									'puYfP2Kg4P' => 'COD_WaW_Black_cats_ENG.pdf'
									)
				);
	
	$filePath = "";
	$file = "";
	
	foreach($fileList as $dir => $fileName){
		if($fileName[$fileCode]){
			$filePath = __DIR__.'/'.$dir.'/'.$fileName[$fileCode];
			$file = $fileName[$fileCode];
			break;
		}
	}
	
	$fileName = $fileList[$fileCode];
	
	if(!$filePath){
		echo '<h1>ACCESS DENIED</h1>';
	} else {		
		header("Content-type: application/zip");
		header("Content-Disposition: attachment; filename=$file");
		header("Pragma: no-cache"); 
		header("Expires: 0"); 
		readfile("$file_path");
	}
	
	exit();
?>