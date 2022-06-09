<!DOCTYPE html>
<html>
	<!--Incluir con php el archivo Style-->
	<?php 
		include_once 'layouts/style.php';
	?>
	<body>
		<!--Incluir con php el archivo navbar-->
		<?php 
					include_once 'layouts/navbar.php';
		?>
		
		<br>
		    <div class="row justify-content-center" style="text-align: justify-all;">
		        <div class="col-md-12 w-auto">
		        	<div class="container">
			        	<div class="row">
			        		<!--Incluir con php de los archivos introduccion y container-->
				        	<?php  
				        		include_once 'layouts/introduccion.php';
				        		include_once 'layouts/container.php';
				        	?>
						</div>
				    </div>
				</div>
			</div>
		<br>
		<br>
		<!--Incluir con php el archivo footer-->
		<?php  
			include_once 'layouts/footer.php';
		?>

		<!--Script de animaciones aosJs-->
		<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script>
		    AOS.init();
		</script>
	</body>
</html>