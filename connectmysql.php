<?php
try{
  $db=new PDO('mysql:host=localhost;port=8889;dbname=aydenizt_youtubetest;charset=utf8','aydenizt_youtubetest','youtube.test');
  
}catch(PDOException $e){
  echo $e;
}
?>
