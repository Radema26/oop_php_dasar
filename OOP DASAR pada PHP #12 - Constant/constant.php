<?php 	

// define('NAME','RADEMA');
// echo NAME;

// echo "<br>";
// echo "<hr>";

// const UMUR=32;
// echo UMUR;

// class Coba{
// 	const NAMA ='Radema';

// }

//  echo Coba::NAMA;

echo __LINE__;
 echo "<hr>";

echo __FILE__;
echo "<hr>";

echo __DIR__;
echo "<hr>";

function coba(){
return __FUNCTION__;
}
echo coba();
echo "<hr>";

class Coba{
	public $kelas=__CLASS__;
}
$obj=new Coba;
echo $obj->kelas;
echo "<hr>";




