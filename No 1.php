 <!-- 
        Nama  : R. Yudo Arya Kusuma 
        NIM   : 20051397013 
        Prodi : 2020A - Manajemen Informatika 
        INHERITANCE - Asosiasi  
                                               -->
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="No 1.css">
    <title>Praktikum 4</title>
</head>
<body>
<div class="container">
<h2>Soal 1</h2>
<!-- Program PHP -->
<?php

class Orang{
    protected $nama,$umur;

    public function __construct($nama,$umur){
    $this->nama = $nama;
    $this->umur = $umur;
    }
}

class Dosen extends Orang{
    private $nip;
    
    public function __construct($nama, $umur, $nip){
    $this->nip = $nip;
    parent::__construct($nama, $umur);    
    }

    public function hasil(){
        return $this->nama . ' berumur ' . $this->umur. ' dengan NIP ' . $this->nip;
    }
}

$dosen1 = new Dosen('eyov', 30, 10034001);
$dosen2 = new Dosen('dani', 27, 10034002);
$dosen3 = new Dosen('deo', 24, 10034007);

echo $dosen1->hasil();
echo '<br> <br>';
echo $dosen2->hasil();
echo '<br> <br>';
echo $dosen3->hasil();
echo '<br> <br>';

?>
<!-- 
Akhir Program PHP 
-->
</div>
</body>
</html>