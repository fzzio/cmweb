<?php 

require_once 'lib/swift/swift_required.php';


	if(isset($_POST)){



		$form = $_GET["form"];

		if ( $form == "chile" ) {
				
				

				$nombre = $_POST['nombreC'];
				$empresa = $_POST['empresaC'];
				$email = $_POST['emailC'];
				$mensaje = $_POST['mensajeC'];
				$telefono = $_POST['telefonoC'];
				$asunto = $_POST['asuntoC'];
				

				$message = '
						Pedido de informaci&oacute;n.<br /><br />
					    Se envio un comentario desde la pagina web de Celmedia, y los datos ingresados son los siguientes:<br /><br />
					      
					      
					      <strong>Nombre:</strong> '.$nombre.'<br />
					      <strong>Empresa:</strong> '.$empresa.'<br />
					      <strong>telefono:</strong> '.$telefono.'<br />
					      <strong>E-mail:</strong> '.$email.'<br />
					      <strong>Asunto:</strong> '.$asunto.'<br />
					      <strong>Comentario:</strong> '.$mensaje.'<br />
				';
				
				$to = " lpincay@celmedia.com, ". $email;
				//$to = "ihernandez@autofrancia.com.ec,lsanchez@autofrancia.com.ec,". $email;

				$subject = "Pedido de Informacion, Celmedia";
				//Cabeceras del correo
				$headers = "From: $email \r\n"; //Quien envia?
				$headers .= "X-Mailer: PHP5\n";
				$headers .= 'MIME-Version: 1.0' . "\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
				
				mail($to , $subject , $message,$headers);
				// echo("expression");
				

				$result=1;


		}elseif ( $form == "vehiculo" ) {
			
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$telefono = $_POST['telefono'];
				$email = $_POST['email'];
				$modelo = $_POST['modelo'];
				$mensaje = $_POST['mensaje'];
				


				$message = '
						Pedido de informaci&oacute;n.<br /><br />
					      Se ha enviado un nuevo pedido de informaci&oacute;n de un veh&iacute;culo desde Peugeot, y los datos ingresados son los siguientes:<br /><br />
					      
					      
					      <strong>Nombre:</strong> '.$nombre.'<br />
					      <strong>Apellido:</strong> '.$apellido.'<br />
					      <strong>Modelo:</strong> '.$modelo.'<br />
					      <strong>Tel&eacute;fono:</strong> '.$telefono.'<br />
					      <strong>E-mail:</strong> '.$email.'<br />
					      <strong>Comentario:</strong> '.$mensaje.'<br />
				';
				
				//$to = " lpincay@celmedia.com, ggomez@celmedia.com, ycosquillo@celmedia.com,  ". $email;
				$to = " rlandazuri@autofrancia.com.ec,". $email;

				$subject = "Pedido de Informacion, Peugeot";
				//Cabeceras del correo
				$headers = "From: $email \r\n"; //Quien envia?
				$headers .= "X-Mailer: PHP5\n";
				$headers .= 'MIME-Version: 1.0' . "\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
				
				mail($to , $subject , $message,$headers);
				// echo("expression");
				

				$result=1;

		}elseif ( $form == "cita" ) {

				
			
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$telefono = $_POST['telefono'];
				$email = $_POST['email'];
				$celular = $_POST['celular'];
				$reserva = $_POST['reserva'];
				$fecha = $_POST['fecha'];
				$mensaje = $_POST['mensaje'];
				$kilometraje = $_POST['kilometraje'];


				$message = '
						Pedido de informaci&oacute;n.<br /><br />
					      Se ha enviado un nuevo pedido de informaci&oacute;n de una cita desde Peugeot, y los datos ingresados son los siguientes:<br /><br />
					      
					      
					      <strong>Nombre:</strong> '.$nombre.'<br />
					      <strong>Apellido:</strong> '.$apellido.'<br />
					      Tel&eacute;fono:</strong> '.$telefono.'<br />
					      <strong>Celular:</strong> '.$celular.'<br />
					      <strong>E-mail:</strong> '.$email.'<br />
					      <strong>Reserva:</strong> '.$reserva.'<br />
					      <strong>Fecha Tentativa:</strong> '.$fecha.'<br />
					      <strong>kilometraje:</strong> '.$kilometraje.'<br />
					      <strong>Comentario:</strong> '.$mensaje.'<br />
				';
				
				//$to = " lpincay@celmedia.com, ggomez@celmedia.com, ycosquillo@celmedia.com, ". $email;
				$to = " ihernandez@autofrancia.com.ec, lsanchez@autofrancia.com.ec,  ". $email;

				$subject = "Pedido de Informacion, Peugeot";
				//Cabeceras del correo
				$headers = "From: $email \r\n"; //Quien envia?
				$headers .= "X-Mailer: PHP5\n";
				$headers .= 'MIME-Version: 1.0' . "\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
				
				mail($to , $subject , $message,$headers);
				// echo("expression");
				

				$result=1;

		}elseif ( $form == "test" ) {
			
				$nombre = $_POST['nombre'];
				$apellido = $_POST['apellido'];
				$telefono = $_POST['telefono'];
				$email = $_POST['email'];
				$cedula = $_POST['cedula'];
				$ciudad = $_POST['ciudad'];
				$nacimiento = $_POST['nacimiento'];
				$agencia = $_POST['agencia'];
				$vehiculo = $_POST['vehiculo'];
				$fecha = $_POST['fecha'];
				$hora = $_POST['hora'];
				$mensaje = $_POST['mensaje'];


				$message = '
						Pedido de informaci&oacute;n.<br /><br />
					      Se ha enviado un nuevo pedido de informaci&oacute;n de test drive desde Peugeot, y los datos ingresados son los siguientes:<br /><br />
					      
					      
					      <strong>Nombre:</strong> '.$nombre.'<br />
					      <strong>Apellido:</strong> '.$apellido.'<br />
					      <strong>Cedula:</strong> '.$cedula.'<br />
					      <strong>Ciudad:</strong> '.$ciudad.'<br />
					      <strong>Fecha de Nacimiento:</strong> '.$nacimiento.'<br />
					      <strong>Tel&eacute;fono:</strong> '.$telefono.'<br />
					      <strong>E-mail:</strong> '.$email.'<br />				    
					      <strong>Agencia:</strong> '.$agencia.'<br />
					      <strong>Vehiculo:</strong> '.$vehiculo.'<br />
					      <strong>Fecha del test:</strong> '.$fecha.'<br />
						  <strong>Hora del test:</strong> '.$hora.'<br />
					      <strong>Comentario:</strong> '.$mensaje.'<br />
				';
				
				//$to = " lpincay@celmedia.com, ggomez@celmedia.com, ycosquillo@celmedia.com,  ". $email;
				$to = " rlandazuri@autofrancia.com.ec,  ". $email;

				$subject = "Pedido de Informacion, Peugeot";
				//Cabeceras del correo
				$headers = "From: $email \r\n"; //Quien envia?
				$headers .= "X-Mailer: PHP5\n";
				$headers .= 'MIME-Version: 1.0' . "\n";
				$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; //
				
				mail($to , $subject , $message,$headers);
				// echo("expression");
				

				$result=1;

		}elseif ( $form == "avaluo" ) {
			
				//$direccion_envio= 'lpincay@celmedia.com, ggomez@celmedia.com, ycosquillo@celmedia.com'; 	
				$direccion_envio= 'mmarcillo@autofrancia.com.ec';							
				//la direccion a la que se enviara el email.

				$url= 'http://www.peugeot.com.ec/contacto-form.php'; 	
				//la URL donde esta publicado el formulario. SIN la barra al final


				require("inc/class.phpmailer.php");

				$mail = new PHPMailer();

				//recogemos las variables y configuramos PHPMailer
				$mail->From     = $_POST['emailA'];
				$mail->FromName = $_POST['nombreA'];
				$mail->AddAddress($direccion_envio); 
				$mail->Subject = "Pedido de informacion, Peugeot";
				$mail->AddReplyTo($_POST['emailA'],$_POST['nombreA']);
				$mail->IsHTML(true);                              
				$comentario=$_POST['mensajeA'];


				//comprobamos que sea una petición ajax
				if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
				{
				 
				    //obtenemos el archivo a subir
				    $file = $_FILES['foto1']['name'];
				 
				    //comprobamos si existe un directorio para subir el archivo
				    //si no es así, lo creamos
				    if(!is_dir("assets/archivos/"))
				        mkdir("assets/archivos/", 0777);

				    
				    for($i=1;$i<=4;$i++){

				    	$aleatorio = rand(); 
				    	$nombre = 'foto'.$i;
					    $achivos_adjuntos='';
						$nuevonombre = $aleatorio.'-'.$_FILES[$nombre]['name'];
						copy($_FILES[$nombre]['tmp_name'],'assets/archivos/'.$nuevonombre);
						$achivos_adjuntos .= '<br /><a href="'.$url.'/assets/archivos/'.$nuevonombre.'">'.$nuevonombre.'</a></strong>';
						$mail->AddAttachment($_FILES[$nombre]['tmp_name'], $nuevonombre);

				    }
				    
				    
				    //comprobamos si el archivo ha subido
				    if ($file)
				    {
				       sleep(3);//retrasamos la petición 3 segundos
	     
						$nombre = $_POST['nombreA'];
						$apellido = $_POST['apellidoA'];
						$email = $_POST['emailA'];
						$cedula = $_POST['cedulaA'];
						$celular = $_POST['celularA'];
						$modelo = $_POST['modeloA'];
						$mensaje = $_POST['mensajeA'];

						//armamos el html
						
						$contenido .= 'Pedido de informaci&oacute;n.<br /><br />';
						$contenido .= 'Se ha enviado un nuevo pedido de informaci&oacute;n de avaluo desde Peugeot, y los datos ingresados son los siguientes:<br/><br/>';					
						$contenido .= '<strong>Nombre: </strong> '.$nombre.'<br/>';
						$contenido .= '<strong>Apellido: </strong>'.$apellido.'<br/>';
						$contenido .= '<strong>Cedula: </strong>'.$cedula.'<br/>';
						$contenido .= '<strong>Email: </strong>'.$email.'<br/>';
						$contenido .= '<strong>Celular: </strong>'.$celular.'<br/>';
						$contenido .= '<strong>Modelo: </strong>'.$modelo.'<br/>';
						$contenido .= '<strong>Comentario: </strong>'.$mensaje.'<br/>';
						
						$mail->Body    = $contenido;
						// si todos los campos fueron completados enviamos el mail
						$mail->Send();

				    }
				}else{
				    throw new Exception("Error Processing Request", 1);  
				}

				$result=1;

		}
		
	}else{

		$result = 0;
	}


	echo ($result);


 ?>