<?php
/*
$fm = new FileMaster('/Users/person1/Pictures/house.png');
$fm->extension(); // 'png'
$fm->filename(); // 'house'
$fm->dirpath(); // '/Users/person1/Pictures/'
*/

class FileMaster {
	
	public function __construct($filepath){
	$this->filepath = $filepath;
	}
	
	public function extension(){
	$c = $this->filepath;
	$num = strrpos($c, ".");
	return substr($c, $num+1);
	}
	
	public function filename(){
	$str = $this->filepath;
	$file = strrpos($str, "/");
	$file2 = strrpos($str, ".");
	$txt = substr($str, $file+1, $file2-$file-1);
	return $txt;
	}
	
	public function dirpath(){
	$str2 = $this->filepath;
	$dir = strrpos($str2, "/");
	$txt = substr($str2, 0, $dir+1);
	return $txt;
	}
}

 ?>

