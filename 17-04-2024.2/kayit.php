<?php
if(isset($_GET['notlar'])){
         $dosya = fopen('Dosyalarim/not.txt', 'w+');
         $gelen=$_GET['notlar'];
         fwrite($dosya,$gelen);
         fclose($dosya);
 }
 else{  echo "Dosya bulunamadı!";}
?>