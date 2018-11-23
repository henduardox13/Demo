<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
   
    <div class="col-md-12">
		<nav class="navbar navbar-inverse " role="navigation" align="center">
			 <div class="navbar-header"> 
			 	<button type="button" class="navbar-toggle" data-toggle="collapse"data-target=".navbar-ex1-collapse"> 
			 		<span class="sr-only">Desplegar navegación</span> 
			 		<span class="icon-bar"></span> 
			 		<span class="icon-bar"></span>
			 		<span class="icon-bar"></span> 
			 	</button> <a class="navbar-brand" href="#">Logotipo</a> 
			  </div>
			  <div class="collapse navbar-collapse navbar-ex1-collapse">
			    <ul class="nav navbar-nav"> 
			    	<li>
			    		<?= anchor('','Inicio |','title="Inicio"'); ?> 
			    	</li>
			    	<li>
			    		<?= anchor('Acerca/','Acerca De |','title="Acerca"'); ?> 
			    	</li>
			    	<li>
			    		<?= anchor('Contacto/','Contacto |','title="Contacto"'); ?> 
			        </li>
			        </ul>
			        <form class="navbar-form navbar-right" role="search">
			        	<div class="form-group">
			        	  <input type="text" class="form-control" placeholder="Buscar">
			        	</div>
			        	  <button type="submit" class="btn btn-default">Enviar</button>
			        </form>
			    </div> 
	    </nav>	
     
   
    
    		
    	
	




    	

    
   


</body>
</html>