<?php   
    /* Cambia localhost por la ip de t webhost mysql*/
    //error_reporting(E_ALL);
    //ini_set('display_errors', '1');

    //FORO
    /*define('IN_PHPBB', true);
    $phpbb_root_path = './foro/';
    $phpEx = substr(strrchr(__FILE__, '.'), 1);
    require_once($phpbb_root_path . 'common.' . $phpEx);
    require_once($phpbb_root_path . 'includes/functions_user.' . $phpEx);*/
    define ("UTC", 5); // Colocar el horario del servidor
    //FORO
    if(isset($_GET["RegistroName"]))
    {
        echo RegistrarUser($request->variable("RegistroName", ''), $request->variable('RegistroMail', ''), $request->variable("RegistroPass1", ''), $request->variable('skin', ''));
    }

    function RegistrarUser($ElName, $ElMail, $ElPass, $ElSkin)
    {
        $LaConex =  mysqli_connect('localhos:3308', 'root', '', 'pawno_BG');
		//FORO		
		$nick = mysqli_real_escape_string($LaConex, $ElName);
		$email = $ElMail;
		if (validate_username($nick)){
			$UsuarioExisetnte = 20;
            return 0; // El Nombre de usuario no esta disponible
		}
		if (phpbb_validate_email($email)){
			switch(phpbb_validate_email($email)){
				case DOMAIN_NO_MX_RECORD:
					//echo "El dominio de la cuenta e-mail especificada no existe<br />";
					$UsuarioExisetnte = 21;
                    return 1; // El dominio de la cuenta e-mail especificada no existe
					break;
				case EMAIL_TAKEN:
					//echo "Existe un usuario registrado con el mismo e-mail<br />";
					$UsuarioExisetnte = 22;
                    return 2; // Existe un usuario registrado con el mismo e-mail
					break;
				case EMAIL_INVALID:
					//echo "El e-mail especificado no es válido<br />";
					$UsuarioExisetnte = 23;
                    return 3; // El e-mail especificado no es válido
					break;
			}
		}
		//FORO		
		
		$ComprobarUser = mysqli_query($LaConex, "SELECT * FROM `rp_usuarios` WHERE Nombre = '" . $nick . "'");	
		if(mysqli_num_rows($ComprobarUser) != 0)
		{
			$UsuarioExisetnte = 20;
            return 0; // El Nombre de usuario no esta disponible
		}
		else if($UsuarioExisetnte < 20)
		{
			//FORO
			$hash = md5($ElPass);
			$actkey = substr(md5(time()), 0, 13);// Generamos un código de activación para la cuenta

			$dades_forum = array(
				"username"				=>	$nick, 	// Nombre de usuario
				"user_password"			=>	$hash, 	// Contraseña encriptada
				"group_id"				=>	2, 		// Grupo al que pertenece
				"user_email"			=>	$email,
				"user_type"				=>	0, //Activo
				//0 is normal user, 1 is inactive and needs to activate their account through an activation link, 2 is a pre-defined type to ignore user (bot), 3 is Founder. 
				"user_actkey"			=>	$actkey, // Clave de activación de cuenta
				"user_lang"				=>	"es",
				"user_timezone"			=>	$utc, // Diferencia horaria del cliente
				"user_inactive_reason"	=>	1, // Motivo por el cual su cuenta está inactiva
				"user_inactive_time"	=>	time()-UTC*3600, //** Hora en que se "inactiva" su cuenta
				"user_regdate"			=>	time()-UTC*3600// Hora de registro (menos la diferencia horaria con el servidor)
			); 
			// Añadimos el usuario
			$ID_User = user_add($dades_forum);	
            
            //mail($ElMail,"Bienvenido a Blod Gamer",'<html><head><title>Código de activación</title></head><body><h1>Hola <b>'.$nick.'</b>.</h1><h3> Te damos la bienvenida a Blod Gamer.</h3><br/><p>Puedes activar tu cuenta accediendo a la siguiente dirección web: <a href="http://blodgamer.com/cuenta.php?accion=activar&id='.$ID_User.'&k='.$actkey.'">Activar mi Cuenta</a></p><br/>Para activar tu cuenta del foro puedes hacerlo <a href="http://blodgamer.com/foro/ucp.php?mode=activate&u='.$ID_User.'&k='.$actkey.'">aquí</a></body></html>',"MIME-Version: 1.0\r\nContent-type: text/html; charset=UTF-8\r\nFrom: Blod Gamer <no-reply@blodgamer.com>\r\n");  
            
			// Para el registro link: /ucp.php?mode=activate&u=$user_id&k=$actkey
			// Hacer que el link de activacion lleve a blodgamer (No el foro) y de ahí se abra una neuva ventana con la activacion de la cuenta del foro
            $foro =  mysqli_connect('localhost:3308', 'root', '', 'pawno_ForoBG');
            mysqli_query($foro, "UPDATE `bg_users` SET `user_avatar` = 'http://pawnoscript.com/BlodGamer/img/AvatarSkin/BG_".$ElSkin.".png', `user_avatar_type` = '2', `user_avatar_width` = '100', `user_avatar_height` = 200 WHERE `user_id` = '". $ID_User ."'");
            mysqli_close($foro);               
			//FORO
			mysqli_query($LaConex, "INSERT INTO `rp_usuarios` (`id_user`, `Nombre`, `Clave`, `E_Mail`, `Skin`, `RegisterDate`) VALUES ('". $ID_User ."', '".$nick."', '".hash("whirlpool", $ElPass)."', '".$ElMail."', '".$ElSkin."', '".(time()-UTC*3600)."')");
			mysqli_query($LaConex, "INSERT INTO `rp_banco` (`id_user`) VALUES ('". $ID_User ."')");
			mysqli_query($LaConex, "INSERT INTO `rp_posicion` (`id_user`) VALUES ('". $ID_User ."')");
			mysqli_query($LaConex, "INSERT INTO `rp_administracion` (`id_user`, `ActKey` , `Activa`) VALUES ('". $ID_User ."', '".$actkey."', '1')");
			mysqli_query($LaConex, "INSERT INTO `rp_faccion` (`id_user`) VALUES ('". $ID_User ."')");
			mysqli_query($LaConex, "INSERT INTO `rp_ciudadania` (`id_user`, `Imagen`) VALUES ('". $ID_User ."', '". $ElSkin ."')");
			mysqli_query($LaConex, "INSERT INTO `rp_carcel` (`id_user`) VALUES ('". $ID_User ."')");
			mysqli_query($LaConex, "INSERT INTO `rp_advertencias` (`id_user`) VALUES ('". $ID_User ."')");
			mysqli_query($LaConex, "INSERT INTO `rp_auto` (`id_user`) VALUES ('". $ID_User ."')");
			mysqli_query($LaConex, "INSERT INTO `rp_trabajo` (`id_user`) VALUES ('". $ID_User ."')");
			mysqli_query($LaConex, "INSERT INTO `rp_traficante` (`id_user`) VALUES ('". $ID_User ."')");
			mysqli_query($LaConex, "INSERT INTO `rp_casa` (`id_user`) VALUES ('". $ID_User ."')");
			mysqli_query($LaConex, "INSERT INTO `rp_celular` (`id_user`) VALUES ('". $ID_User ."')");
			mysqli_query($LaConex, "INSERT INTO `rp_bolsillos` (`id_user`) VALUES ('". $ID_User ."')");
			mysqli_query($LaConex, "INSERT INTO `rp_armas` (`id_user`) VALUES ('". $ID_User ."')");
			$UsuarioExisetnte = 0;
            $LaID = $ID_User;
			// Lo de abajo solo me dira cuantos usuarios estan registrados
			$Comprobar = mysqli_query($LaConex, "SELECT `Usuarios` FROM `configuracion`");
			$Config = mysqli_fetch_assoc($Comprobar);
			mysqli_free_result($Comprobar);
			$ID_User = $Config['Usuarios']+1;
			mysqli_query($LaConex, "UPDATE `configuracion` SET `Usuarios`= '".$ID_User."'");
			// Lo de arriba solo me dira cuantos usuarios estan registrados		
			$MensajeRecienRegistrado = true;
            return $LaID;
		}
    }
?>