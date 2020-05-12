<?php 
class produk{
	public $judul,
			$penulis,
			$penerbit,
			$harga,
			$jmlhalaman,
			$waktuMain;

	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlhalaman=0,$waktuMain=0){
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;
		$this->jmlhalaman=$jmlhalaman;
		$this->waktuMain=$waktuMain;
	
	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	public function  GetInfoProduct(){
		
		$str="{$this->judul} | {$this->getLabel()}(RP.{$this->harga})";
		
		return $str;
	}
}

class komik extends produk
{
	public  function GetInfoProduct(){
		$str="Komik: {$this->judul} | {$this->getLabel()}(RP.{$this->harga})- {$this->jmlhalaman} Halaman.";
		return $str;

	}
	
}


class Game extends produk
{
	public  function GetInfoProduct(){
		$str="Game: {$this->judul} | {$this->getLabel()}(RP.{$this->harga})- {$this->waktuMain} Jam";
		return $str;

	}
	
}

class CetakInfoProduk{
	public function cetak( produk $produk){
		$str="{$produk->judul}|{$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}
}

$product1=new komik("Naruto","Masashi Kismoto","Shonen Jump",3000,100,0,"komik");
$product2=new Game("Uncharted","Neil Druckmann","Sony Computer",25000,0,50,"Game");


echo $product1->GetInfoProduct();
echo "<br>";
echo $product2->GetInfoProduct();
 ?>