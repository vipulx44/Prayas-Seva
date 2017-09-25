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
		
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			
				<div class="container">
			
				  <div class="collapse navbar-collapse" id="navbarNav">
				  
				    <ul class="navbar-nav">
				      <li class="nav-item">
				        <a class="nav-link <?php if($pageid==1){echo "active";} ?>" href="?page=1">Home <span class="sr-only">(current)</span></a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Features</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Mission</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link" href="#">Accomplishments</a>
				      </li>
				      <li class="nav-item">
				        <a class="nav-link <?php if($pageid==2){echo "active";} ?>" href="?page=2">About Us</a>
				      </li>
				    </ul>
			
				    </div>
			
			  </div>
		
			</nav><!-- End Main Navigation -->
					
			<div class="container">
				<h1><?php echo $page["header"]; ?></h1>
				<p><?php echo $page["body"]; ?></p>
			</div>
			
			<footer class="footer">
      			
      			<div class="container">
        			<span class="text-muted">This is the footer</span>
      			</div>
    		
    		</footer>
	
		<?php include('config/js.php'); ?>
	
	</body>
	
	
</html>