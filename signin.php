<?php
require_once 'connectmysql.php';
$data = file_get_contents('php://input');
$obj = json_decode($data);
$mail= $obj->{'mail'};
$password= $obj->{'password'};
$mysqlrequest=$db->query("SELECT * FROM users WHERE (mail='$mail') and (password='$password')")->fetch(PDO::FETCH_ASSOC);
if(count($mysqlrequest)==4){
  echo '[{"state":"success","userid":'.$mysqlrequest['id'].'}]';
}else{
  echo "404";
}

 ?>
