<?php 
//setup file


$dbc = mysqli_connect('localhost','vipul','1234','prayasmain') OR die("Could Not connect because:".mysqli_connect_error());

//Constants
define('D_TEMPLATE','template');


//Functions
include('functions/data.php');
include('functions/template.php');

//Site Setup

$debug= data_setting_value($dbc,'debug-status');

$site_title='Prayas Seva Sanstha';


if(isset($_GET['page'])){
	
	$pageid=$_GET['page']; //set pageid to given url
	
}else {
	$pageid=1;	//else set pageid to 1
}

//Page Setup here
$page=data_page($dbc, $pageid);



?>