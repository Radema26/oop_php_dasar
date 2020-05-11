<?php 	
class Buah{
private $warna;
public function makan(){
	//makan
	//nyam ..nyam..nyamm

}
public function setWarna($warna){
	$this->warna=$warna;
}
}


/**
 * 
 */
class Apel extends Buah
{
	
	public function makan(){
		//kunyak
		//sampai bagian tengan

	}
}

class Jeruk extends Buah
{
	
	public function makan(){
		//kupas
		//kunyah
		
	}
}
$apel=new apel();
$apel->makan();



////membuat kelas abstrak
abstract class Buah{
	private $warna;
abstract public function makan();
public function setWarna($warna){
	$this->warna=$warna;
}

}


// abstract class
semua kelas turunan , harus memgimpementaskan method abstrak yang ada di keas abstraknya
- kelas abstract boleh memiliki property/method reguler
- kelas abstrack boleh memiliki property/static method



 ?>

 