<?php 

class produk{

	public $judul="judul",
			$penulis="penulis",
			$penerbit="penebit",
			$harga="harga";

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}



}



$product3=new produk();
$product3->judul="Naruto";
$product3->penulis="Masashi Kishimoto";
$product3->penerbit="Shonen Jump";
$product3->harga=3000;

$product4=new produk();
$product4->judul="Uncharted";
$product4->penulis="Neil Druckmann";
$product4->penerbit="Sony Computer";
$product4->harga=25000;


echo "komik: $product3->penulis,$product3->penerbit";
echo "<br>";
echo "komik:".$product3->getLabel();
echo "<br>";
echo "Game:".$product4->getLabel();
 ?>