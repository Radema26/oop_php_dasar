<?php 
class produk{

	public $judul="judul",
			$penulis="penulis",
			$penerbit="penebit",
			$harga="harga";

	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;

	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
}

class CetakInfoProduk{
	public function cetak( produk $produk){
		$str="{$produk->judul}|{$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}
}

$product1=new produk("Naruto","Masashi Kismoto","Shonen Jump",3000);
$product2=new produk("Uncharted","Neil Druckmann","Sony Computer",25000);
$product3=new produk("Dragon Ball");


echo "komik:".$product1->getLabel();
echo "<br>";
echo "Game:".$product2->getLabel();
echo "<br>";
$infoProduk1=new CetakInfoProduk();
echo $infoProduk1->cetak($product1);


 ?>