<?php
//array numerik
$binatang=array('ayam','kucing','tupai');
echo $binatang[1];

//array asosiatif
$binatang2=array('kucing'=>'beranak','ayam'=>"bertelur",'punai'=>"bertelur");
echo"</br>";
echo "kucing aadalah binatang yang ". $binatang2['kucing'];

//array multidimensional
$panjangarray=count($binatang);
echo "panjang array adalah".$panjangarray;


//menampilkan bersamaan dengan indexnya
sort($binatang);
for ($i=0; $i<$panjangarray; $i++) {
echo "</br>ini adalah binatang $binatang[$i] yang merupakan index ke [$i]";
} 
//terbalik
rsort($binatang);
for ($i=0; $i<$panjangarray; $i++) {
echo "</br>ini adalah binatang $binatang[$i] yang merupakan index ke [$i]";
} 
echo"</br>";
//arraymultidimensional
$mat=array(
	array('12','13','14'),
	array('76','28','10'),
	array('18','67','32'),
);
echo $mat[0][0]." ".$mat[0][1]." ".$mat[0][2]."</br>";
echo $mat[1][0]." ".$mat[1][1]." ".$mat[1][2]."</br>";
echo $mat[2][0]." ".$mat[2][1]." ".$mat[2][2]."</br>";


?>

