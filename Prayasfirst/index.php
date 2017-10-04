<?php include('config/setup.php'); ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo $page["title"].' | '.$site_title;?></title>
		
		<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<?php include('config/css.php');?>

    	<!-- FONT AWESOME-->
    	<script src="https://use.fontawesome.com/3ce65aca62.js"></script>
    	
    </head>	
	
	<body>
		
		<?php include(D_TEMPLATE.'/navigation.php'); //Main Navigation ?> 
					
		<div class="container">
			<h1 style= " margin-top:20px;"><?php echo $page["header"]; ?></h1>
			<?php echo $page["body_formatted"]; ?>
				
		</div>
			
		<?php include(D_TEMPLATE.'/footer.php'); //Page Footer ?>
		<?php if($debug==1) { include('widgets/debug.php'); } ?>
		
		<?php include('config/js.php');?>
	</body>
	
	
</html>