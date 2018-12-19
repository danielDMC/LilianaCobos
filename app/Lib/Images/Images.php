<?php
class Images{
	public function reconstruct($path, $file, $fileName = ''){
		if(!preg_match("/\/$/", $path)){
			$path .= "/";
		}

		// $path = getcwd() . $path;
		$path = getcwd() . '/img/' . $path;
		$img = getimagesize($file);
		
		if(preg_match("/^image/", $img['mime']) != false){
			CakeLog::write("debug", __LINE__.':'.__METHOD__ . print_r("Creating path", true));
			if (!file_exists($path)) {
				CakeLog::write("debug", __LINE__.':'.__METHOD__ . print_r("Path created", true));
				mkdir($path, 0755, true);
			}else{
				CakeLog::write("debug", __LINE__.':'.__METHOD__ . print_r("Error creating path", true));
			}
			switch(strtolower($img['mime'])){
				case "image/jpeg":
				case "image/jpg":
					$img = imagecreatefromjpeg($file);
					if($fileName == ''){
						$fileName = hash('sha256', $file) . '.jpg';
					}
					if(imagejpeg($img, $path . $fileName)){
						CakeLog::write("debug", print_r("ok", true));
					}else{
						CakeLog::write("debug", print_r("error", true));
					}
					
					
					break;
				case "image/png":
					$img = imagecreatefrompng($file);
					if($fileName == ''){
						$fileName = hash('sha256', $file) . '.png';
					}
					if(imagepng($img, $path . $fileName)){
						CakeLog::write("debug", print_r("ok", true));
					}else{
						CakeLog::write("debug", print_r("error", true));
					}
					break;
				case "image/gif":
					$img = imagecreatefromgif($file);
					if($fileName == ''){
						$fileName = hash('sha256', $file) . '.gif';
					}
					if(imagegif($img, $path . $fileName)){
						CakeLog::write("debug", print_r("ok", true));
					}else{
						CakeLog::write("debug", print_r("error", true));
					}
					break;
				default:
					return false;
			}
		}else{
			return false;
		}
		return $fileName;
	}

	


	

}