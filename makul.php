<?php
$json_data=file_get_contents("makul.json");
$obj = json_decode($json_data);
echo "Nim: "; echo $obj->Nim;
echo "<br>";
echo "Nama: ";echo $obj->Nama;
echo "<br>";
echo "No Hp: ";echo $obj->No_Hp;
echo "<br>";
echo "Makul: ";
echo "<br>";
echo "-";echo $obj->Makul[0];
echo "<br>";
echo "-";echo $obj->Makul[1];
echo "<br>";
echo "-";echo $obj->Makul[2];
echo "<br>";
echo "-";echo $obj->Makul[3];
echo "<br>";
echo "-";echo $obj->Makul[4];
echo "<br>";
echo "-";echo $obj->Makul[5];
echo "<br>";
echo "-";echo $obj->Makul[6];
echo "<br>";
echo "-";echo $obj->Makul[7];
echo "<br>";
?>