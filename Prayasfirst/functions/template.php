<?php 

function nav_main($dbc,$pageid){

$q="SELECT * FROM pages";

$r= mysqli_query($dbc, $q);

while($nav=mysqli_fetch_assoc($r)){
				
			?>
			<li class="nav-item">
	        	<a class="nav-link <?php if($pageid==$nav['id']){echo "active";} ?>" href="?page=<?php echo $nav['id']; ?>"><?php echo $nav['label']; ?> <span class="sr-only">(current)</span></a>
	      	</li>
	    	<?php }
}

?>