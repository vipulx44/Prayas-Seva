<?php 
//setup file

$dbc = mysqli_connect('localhost','vipul','1234','prayasmain') OR die("Could Not connect because:".mysqli_connect_error());
$site_title='Prayas Seva Sanstha';


// 
if(isset($_GET['page'])){
	
	$pageid=$_GET['page']; //set pageid to given url
	
}else {
	$pageid=1;	//else set pageid to 1
}


//Page Setup here
$q = "SELECT * FROM pages where id=$pageid";

$r = mysqli_query($dbc, $q);

$page = mysqli_fetch_assoc($r);


?>