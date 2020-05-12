<?php 
abstract class produk{
	private $judul,
			$penulis,
			$penerbit,
			$harga,
			$diskon=0;
	

	public function __construct($judul="judul",$penulis="penulis",$penerbit="penerbit",$harga=0){
		$this->judul=$judul;
		$this->penulis=$penulis;
		$this->penerbit=$penerbit;
		$this->harga=$harga;
	}
public function setJudul($judul){
	if (!is_string($judul)	) {
		throw new Exception("Judul harus string");
		
	}
	return $this->judul=$judul;
}

public function setPenulis($penulis){
	
	return $this->penulis=$penulis;
}
public function setPenerbit($penerbit){
	
	return $this->penerbit=$penerbit;
}
public function setHarga($harga){
	
	return $this->harga=$harga;
}
public function setDiskon($diskon){
	
	return $this->diskon=$diskon;
}

public function getJudul(){

	return $this->judul;
}
public function getPenulis(){

	return $this->penulis;
}
public function getPenerbit(){

	return $this->penerbit;
}

	public function getHarga(){
	return $this->harga-($this->harga * $this->diskon/100);
}

public function getDiskon(){

	return $this->diskon;
}

	 public function getLabel(){
		return "$this->penulis, $this->penerbit";
	}
	abstract public function  GetInfoProduct();
	public function getInfo(){
		
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
		$str="Komik: ". $this->GetInfo()."- {$this->jmlhalaman} Halaman.";
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
		$str="Game: ".$this->GetInfo()."- {$this->waktuMain} jam.";
		return $str;
	}
}


class CetakInfoProduk{
	public $daftarProduct=array();

		public function tambahProduct( Produk $produk){
			$this->daftarProduk[]= $produk;
		}

	public function cetak(){
		$str="DATTAR PRODUK : <BR>";
		foreach ($this ->daftarProduk as $p) {
			$str .="-{$p->GetInfoProduct()} <br>";
		}
		return $str;
	}
}

$product1=new komik("Naruto","Masashi Kismoto","Shonen Jump",3000,100);
$product2=new Game("Uncharted","Neil Druckmann","Sony Computer",25000,50);



$cetakProduct= new CetakInfoProduk();
$cetakProduct->tambahProduct($product1);
$cetakProduct->tambahProduct($product2);
echo $cetakProduct->cetak();
