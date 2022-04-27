<?php
$db_host="localhost"; 
$db_user="root";	
$db_password="";	   
$db_name="patientn";	

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>

<?php 
function bd()
{
try {
$bdd= new PDO('mysql:host=localhost;dbname=patientn','root','');

} catch (Exception $e) {
	$e->getMessage();
}
 return $bdd;
}
?>


