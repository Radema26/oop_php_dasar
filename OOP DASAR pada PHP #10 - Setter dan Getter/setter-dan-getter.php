<?php 
class produk{
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
echo "<hr>";
 $product2->setDiskon(60);
echo $product2->getHarga();
echo "<hr>";
$product1->setPenulis("Radema");
echo $product1->getPenulis();

 ?>