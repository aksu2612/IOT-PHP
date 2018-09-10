<?php
define('HOST','www.ganahijyen.com');
define('USER','ganahijy');
define('PASS','39KQqra7c3');
define('DB','ganahijy_gana');
 
$con = mysqli_connect(HOST,USER,PASS,DB);
 
$sql = "select * from su_urunler";
 
$res = mysqli_query($con,$sql);
 
$result = array();
 
while($row = mysqli_fetch_array($res)){
array_push($result,
array('id'=>$row[0],
'address'=>$row[1],
'name'=>$row[3],
'boyut'=>$row[2]
));
}
 
echo json_encode(array("result"=>$result));
 
mysqli_close($con);
 
?>