 <?php
$hostname = "www.ganahijyen.com";
 
$username = "ganahijy";
 
$password = "39KQqra7c3";

$dbname = "ganahijy_gana";
 
 $con = mysqli_connect($hostname,$username,$password,$dbname);
 
 $urunID = $_POST['urunID'];
 $kullaniciID= $_POST['kullaniciID'];
 $adres= $_POST['adres'];
 $Adet=_POST['Adet'];
 $alis_Tarihi=$_POST['alis_Tarihi'];
$teslim_Tarihi=$_POST['teslim_Tarihi'];

 $Sql_Query = "insert into su_siparis (urunID,kullaniciID,adres,Adet,teslim_Tarihi,alis_tarihi) values ('$urunID','$kullaniciID','$adres','$Adet','$teslim_Tarihi','$alis_Tarihi')";
 
 if(mysqli_query($con,$Sql_Query)){
 
 echo 'Data Inserted Successfully';
 
 }
 else{
 
 echo 'Try Again';
 
 }
 mysqli_close($con);
?>