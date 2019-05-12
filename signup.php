<?php
require_once 'connectmysql.php';
$data = file_get_contents('php://input');
$obj = json_decode($data);
$mail= $obj->{'mail'};
$password= $obj->{'password'};
$mysqlrequest=$db->prepare('INSERT INTO users SET mail=?,password=?');
$insert=$mysqlrequest->execute([$mail,$password]);
if ($insert) {
  echo '[{"state":"success"}]';
}else{
  echo "404";
}

?>
