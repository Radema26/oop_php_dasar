<?php 
class produk{

	public $judul="judul",
			$penulis="penulis",
			$penerbit="penebit",
			$harga="harga",
			$jmlhalaman,
			$waktuMain,
			$tipe;

	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0,$jmlhalaman=0,$waktuMain=0,$tipe){
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;
		$this->jmlhalaman=$jmlhalaman;
		$this->waktuMain=$waktuMain;
		$this->tipe=$tipe;

	}

	public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	public function  GetInfoLengkap(){
		//komik:Naruto| Mahashi Kishimoto,Shonen Jump (Rp.3000) - 100 halaman
		$str="{$this->tipe} : {$this->judul} | {$this->getLabel()}(RP.{$this->harga})";

		if($this->tipe == "komik"){
			$str.= "-{$this->jmlhalaman} Halaman.";
		}else if ($this->tipe =="Game"){
			$str .= "~{$this->waktuMain} Jam.";
		}
		
		return $str;
	}
}

class CetakInfoProduk{
	public function cetak( produk $produk){
		$str="{$produk->judul}|{$produk->getLabel()} (Rp.{$produk->harga})";
		return $str;
	}
}

$product1=new produk("Naruto","Masashi Kismoto","Shonen Jump",3000,100,0,"komik");
$product2=new produk("Uncharted","Neil Druckmann","Sony Computer",25000,0,50,"Game");


echo $product1->GetInfoLengkap();
echo "<br>";
echo $product2->GetInfoLengkap();
 ?>