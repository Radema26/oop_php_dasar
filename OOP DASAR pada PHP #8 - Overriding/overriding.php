<?php 
class produk{
	public $judul,
			$penulis,
			$penerbit,
			$harga;

	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;
		
	
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
	public $jmlhalaman;
	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlhalaman=0){

		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->jmlhalaman=$jmlhalaman;


	}
	public  function GetInfoProduct(){
		$str="Komik: ". parent::GetInfoProduct()."- {$this->jmlhalaman} Halaman.";
		return $str;

	}
	
}


class Game extends produk
{
	public $waktuMain;
	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$waktuMain=0){

		parent::__construct($judul,$penulis,$penerbit,$harga);
		$this->waktuMain=$waktuMain;


	}
	public  function GetInfoProduct(){
		$str="Game: ". parent::GetInfoProduct()."- {$this->waktuMain} jam.";
		return $str;

	}
	
}

class CetakInfoProduk{
	public function cetak( produk $produk){
		$str="{$produk->judul}|{$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}
}

$product1=new komik("Naruto","Masashi Kismoto","Shonen Jump",3000,100);
$product2=new Game("Uncharted","Neil Druckmann","Sony Computer",25000,50);


echo $product1->GetInfoProduct();
echo "<br>";
echo $product2->GetInfoProduct();
 ?>