<?php
$a = [1, 2, 3, 'hello', 'dunia', 100, 'enjang', 200, 450, 'cep'];
for ($i=0; $i < count($a) ; $i++) { 
    echo "index array ke- $i dengan isi data $a[$i]<br>";
}
foreach($a as $data){
    echo $data ."<br>";
}

$ass = ['nama' => 'Alfi', 'umur' => 15, 'alamat' => 'bandung'];
foreach($ass as $c => $d){
    echo $c . " : $d <br>";
}