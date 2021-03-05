<?php
	header('Access-Control-Allow-Origin: '.$_SERVER['HTTP_ORIGIN']);
	header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
	header('Access-Control-Max-Age: 1000');
	header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
	date_default_timezone_set("America/Tegucigalpa");
	if (isset($_POST['email']))
	{
		
				//enviando correo
					$email=	$_POST['email'];	
					$mensaje=$_POST['message'];	
					$nombre=$_POST['nombre'];	
					$subject=$_POST['subject'];
				$para  = 'germanedusp@gmail.com' . ', ';
					//$para  = $email . ', '; // atenci贸n a la coma
					
					 
					// Asunto
					$titulo = 'Correo enviado por cliente desde la pagina';
					
		
					 
					// Cuerpo o mensaje
					$html='<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">	
	<style type="text/css">
	    body{
	    	background-color: black;
	    }
		div{
			background-color: black;
			font-size: 14px;
			width:100%;
		}
		table{
			background-color: #FDC22F;
		}
		p{
			text-align: justify;
			font-weight: lighter;
			margin:10px;
			font-family:"Comic Sans MS", Tahoma, Arial;
			font-size: 16px;
			line-height: 1.5;
		}

	</style>
</head>
<body>
   <table width="90%" align="center">
   	  <tr>
   	  	<td>Nombre del cliente:</td><td>'.$nombre.'</td>
   	  </tr>
   	  <tr>
   	  	<td>Email:</td><td>'.$email.'</td>
   	  </tr>
   	  <tr>
   	  	<td>Asunto:</td><td>'.$subject.'</td>
   	  </tr>
   	  <tr>
   	  	<td>Mensaje:</td><td>'.$mensaje.'</td>
   	  </tr>
   	 </table>
</body>
</html>';
					    
					    
						
					    
					$cabeceras  = 'MIME-Version: 1.0' . "\r\n";
					$cabeceras .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
					 
					// Cabeceras adicionales
					$cabeceras .= 'From: Atencion al Cliente-greenqualityfoods.com <hondusite@gmail.com>' . "\r\n";
					
					 
					// enviamos el correo!
					mail($para, $titulo, $html, $cabeceras);
					
					exit;	



		}	
		else
		{
			
			exit;	
		}
	

?>
