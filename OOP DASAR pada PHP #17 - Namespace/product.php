 <?php

class Product{
    public $judul =" judul",
           $penulis = "penulis", 
           $penerbit = "penerbit",
           $harga = 0;


           public function getlabel() {
               return "$this->penulis, $this->penerbit";   //method
           }
}

// $produk1 = new Product();
// $produk1->judul="Naruto";
// var_dump($produk1); 
// $produk2 = new Product();   //instance
// $produk2->judul = "Uncharted";
// $produk2->tambahproperty ="hahha";
// var_dump($produk2); 

$produk3 = new product();
$produk3->judul ="Naruto";
$produk3->penulis ="Masasi Kishimoto";
$produk3->penerbit ="Shoenen jump";
$produk3->harga = 30000;

// echo "Komik : $produk3->penulis, $produk3->penerbit";
// echo"<br>"; 

$produk4 = new product();
$produk4->judul = "Uncharted";
$produk4->penulis ="Neil Druckmann";
$produk4->pernerbit ="Sony Computer";
$produk4->harga =250000;

echo "Komik : ". $produk3->getlabel();
echo "<br>";
echo "Game : ". $produk4->getlabel();

