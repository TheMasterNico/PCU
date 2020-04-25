            </div>       <!-- division recuadro negro de fondo -->    <br/>
            <center style="font-size: 1.3em; font-family: Times New Roman; color:#fff;">Copyright © <strong>Blod Gamer</strong> 2014<br/>Realizado por Blod Gamer con la ayuda del framework Bootstrap</center>  
      		<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation"> <!--  -->
              	<div class="container-fluid">
                	<!-- Brand and toggle get grouped for better mobile display -->
                	<div class="navbar-header">
                  		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarbottom">
                    		<span class="sr-only">Ocultar</span>
                    		<span class="icon-bar"></span>
                    		<span class="icon-bar"></span>
                    		<span class="icon-bar"></span>
						</button>
						<?php
							if(isset($_COOKIE["UserDataXMLFG230"]))
							{
								echo '<a class="navbar-brand" href="./"><font color="#fff">'.$DatosUser["Nombre"].'</font></a>';
							}
							else
							{
								echo '<a class="navbar-brand" href="./"><font color="#fff">Bienvenido</font></a>';
							}
						?>
                	</div>

                	<!-- Collect the nav links, forms, and other content for toggling -->
                	<div class="collapse navbar-collapse" id="navbarbottom">
                  		<ul class="nav navbar-nav">
							<?php
                                function getBrowser()
                                {
                                    $u_agent = $_SERVER['HTTP_USER_AGENT'];
                                    $ub = '';
                                    if(preg_match('/MSIE/i',$u_agent))
                                    {
                                        $ub = "Internet Explorer";
                                    }
                                    elseif(preg_match('/Firefox/i',$u_agent))
                                    {
                                        $ub = "Mozilla Firefox";
                                    }
                                    elseif(preg_match('/Safari/i',$u_agent))
                                    {
                                        $ub = "Apple Safari";
                                    }
                                    elseif(preg_match('/Chrome/i',$u_agent))
                                    {
                                        $ub = "Google Chrome";
                                    }
                                    elseif(preg_match('/Flock/i',$u_agent))
                                     {
                                        $ub = "Flock";
                                    }
                                    elseif(preg_match('/Opera/i',$u_agent))
                                    {
                                        $ub = "Opera";
                                    }
                                    elseif(preg_match('/Netscape/i',$u_agent))
                                    {
                                        $ub = "Netscape";
                                    }
                                    return $ub;
                                }

								if(isset($_COOKIE["UserDataXMLFG230"]))
								{
									echo '<p class="navbar-text" style="color:#fff;">Nivel: <span style="color:#0042ff;">' . $DatosUser["Nivel"] . '</span> [<span style="color:red;">' . $DatosUser["Experiencia"] . '</span>/<span style="color:red;">' . (($DatosUser["Nivel"]*4) + 4) . '</span>]</p>';
									echo '<p class="navbar-text" style="color:#fff;">Dinero: <span style="color:green;">' . $DatosUser["Dinero"] . '$</span></p>';							
									echo '<p class="navbar-text" style="color:#fff;">Número Celular: <span style="color:#7c5ec7;">' . $celular["Numero"] . '</span></p>';
                                    if(getBrowser() == "Apple Safari" || getBrowser() == "Google Chrome")
                                    {
                                        echo '<a href="./cuenta.php" class="navbar-text">Mas información sobre tu cuenta</a>';
                                    }
                                    else
                                    {
									   echo '<a href="./cuenta.php" role="button" class="btn btn-warning navbar-btn">Mas información sobre tu cuenta</a>';
                                    }
								}
								else
								{
									echo '<p class="navbar-text">Puedes </p>
                    		<li ><button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#ingreso">Ingresar</button></li>
                    		<p class="navbar-text"> a tu cuenta, o puedes </p>
                    		<li><button type="button" class="btn btn-default navbar-btn" data-toggle="modal" data-target="#registro">Registrar</button></li>
                    		<p class="navbar-text"> una nueva.</p>';
								}
							?>						
                    		
                  		</ul>
                  		<ul class="nav navbar-nav navbar-right">
							<?php
								if(isset($_COOKIE["UserDataXMLFG230"]))
								{
									echo '<a href="./index.php?Salir=true" class="navbar-link" style="color:white;"><button type="button" class="btn btn-danger navbar-btn">Cerrar Sesión</button>&nbsp;';
								}
                    			echo '<a href="samp://'.$IP.'" class="navbar-link" style="color:white;"><button type="button" class="btn btn-info navbar-btn">JUGAR</button></a>&nbsp;&nbsp;';
							?>
										
                  		</ul>
                	</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
		</div> <!-- pertenece al primer <div class="container"> -->
        <div class="modal fade" id="ingreso" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Ingresar en Blod Gamer's</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" action="./index.php?login=true" method="post" name="LoginForm2">
                            <div class="form-group has-feedback" id="DIVName2">
                                <label>Nombre</label>
                                <input name="NombreJugador" type="text" class="form-control" id="NameLogin2" placeholder="Nombre_Apellido" required>
                                <span id="SpanName2" class=""></span>
                            </div>
                            <div class="form-group has-feedback" id="DIVPass2">
                                <label>Contraseña</label>
                                <input name="PasswordUser" type="password" class="form-control" id="PassLogin2" placeholder="Contraseña" required>
                                <span id="SpanPass2" class=""></span>
                            </div>
                            <div class="form-group">
                                <div class="checkbox">
                                    <label><input type="checkbox" id="SeRecuerda2" name="Recordarme"> Recordarme</label>
                                </div>
                            </div>     
							<button type="button" class="btn btn-success" onclick="Comprobar2()">Ingresar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#registro">Quiero Registrarme</button>
                        </form>                        
                    </div>
                    <!--<div class="modal-footer"></div> -->
                </div>
            </div>
        </div>

        <div class="modal fade" id="registro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">
                            <span class="glyphicon glyphicon-remove"></span><span class="sr-only">Close</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Registrar nueva cuenta</h4>
                    </div>
                    <div class="modal-body">
                        <form role="form" method="post" action="./index.php?registro=true" name="RegistroForm">
                            <div class="form-group has-feedback" id="DivR1">
                                <label>Nombre de usuario</label>
                                <input name="RegistroName" type="text" class="form-control" id="RegistroNameID" placeholder="Nombre_Apellido" required>
                                <span id="SpanRegistroName" class=""></span>
                            </div>
                            <div class="alert alert-danger alert-dismissible" role="alert" id="ErrorName" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>¡Advertencia!</strong> <span id="TextoErrorName"></span>
                            </div>
                            <div class="form-group has-feedback" id="DivR2">
                                <label for="exampleInputPassword1">Contraseña</label>
                                <input name="RegistroPass1" type="password" class="form-control" id="RegistroPass1ID" placeholder="Password" required>
                                <span id="SpanRegistroPass" class=""></span>
                            </div>
                            <div class="alert alert-danger alert-dismissible" role="alert" id="ErrorPass1" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>¡Advertencia!</strong> <span id="TextoErrorPass1"></span>
                            </div>
                            <div class="form-group has-feedback" id="DivR3">
                                <label for="exampleInputPassword1">Confirma tu contraseña</label>
                                <input name="RegistroPass2" type="password" class="form-control" id="RegistroPass2ID" placeholder="Confirmar Password" required>
                                <span id="SpanRegistroPass2" class=""></span>
                            </div>
                            <div class="alert alert-danger alert-dismissible" role="alert" id="ErrorPass2" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>¡Advertencia!</strong> <span id="TextoErrorPass2"></span>
                            </div>
                            <div class="form-group has-feedback" id="DivR4">
                                <label for="exampleInputPassword1">Dirección de email:</label>
                                <input name="RegistroMail" type="email" class="form-control" id="RegistroMailID" placeholder="direccion@email.com" required>
                                <span id="SpanRegistroMail" class=""></span>
                                <p class="help-block">Un correo de activación sera enviado a esta dirección de email.</p>
                            </div>
                            <div class="alert alert-danger alert-dismissible" role="alert" id="ErrorMail" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>¡Advertencia!</strong> <span id="TextoErrorMail"></span>
                            </div>
                            <div class="form-group has-feedback" id="DivR5">
                                <label for="exampleInputPassword1">Selecciona tu sexo:</label>	
									<label class="radio-inline">
										<input type="radio" name="Sexo" id="EsMujer" onclick="CambiarMujer()" value="Mujer" checked>
										Mujer
									</label>
									<label  class="radio-inline">
										<input type="radio" name="Sexo" onclick="CambiarHombre()" id="EsHombre" value="Hombre">
										Hombre
									</label>
							</div>
                            <div class="form-group has-feedback" id="DivR6">
                                <label for="exampleInputPassword1">Selecciona tu apariencia:</label>
								<div id="skinMujeres" style="display: inline;">
									<label class="radio-inline">
										<input type="radio" name="skin" id="SkinFemale1" value="9" checked>
										<img src="http://wiki.sa-mp.com/wroot/images2/2/22/Skin_9.png" class="img-responsive" alt="Apariencia1 ">
									</label>
									<label class="radio-inline">
										<input type="radio" name="skin" id="SkinFemale2" value="31">
										<img src="http://wiki.sa-mp.com/wroot/images2/2/2b/Skin_31.png" class="img-responsive" alt="Apariencia 2">
									</label>
									<label class="radio-inline">
										<input type="radio" name="skin" id="SkinFemale3" value="56" >
										<img src="http://wiki.sa-mp.com/wroot/images2/9/9c/Skin_56.png" class="img-responsive" alt="Apariencia 3">
									</label>
								</div>
								<div id="skinHombres" style="display: none;">
									<label class="radio-inline">
										<input type="radio" name="skin" id="SkinMale1" value="0">
										<img src="http://wiki.sa-mp.com/wroot/images2/c/cc/Skin_0.png" class="img-responsive" alt="Apariencia1 ">
									</label>
									<label class="radio-inline">
										<input type="radio" name="skin" id="SkinMale2" value="1">
										<img src="http://wiki.sa-mp.com/wroot/images2/2/2e/Skin_1.png" class="img-responsive" alt="Apariencia 2">
									</label>
									<label class="radio-inline">
										<input type="radio" name="skin" id="SkinMale3" value="4">
										<img src="http://wiki.sa-mp.com/wroot/images2/0/08/Skin_4.png" class="img-responsive" alt="Apariencia 3">
									</label>
								</div>
							</div>
                            <div class="form-group has-feedback" id="DivR7">
								<div class="input-group">
									<div class="input-group-addon">5 * (4 + 2) = </div>
									<input name="EnBlanco" type="text" class="form-control" id="BlancoText" placeholder="Escribe el resultado">
									<span id="SpanCapt" class=""></span>
								</div>
							</div>
                            <div class="alert alert-danger alert-dismissible" role="alert" id="ErrorCapt" style="display: none;">
                                <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <strong>¡Advertencia!</strong> <span id="TextoErrorCapt"></span>
                            </div>
                            <button type="button" class="btn btn-primary"  onclick="ComprobarR()">Registrarme</button>
                            <button type="reset" class="btn btn-warning pull-right" name="reset" data-dismiss="modal">Cerrar</button>
                        </form>                       
                    </div>
                    <!--<div class="modal-footer"></div> -->
                </div>
            </div>
        </div>    
	</body>
    <script type="text/javascript">
		function CambiarMujer()
		{
			document.getElementById('skinMujeres').style.display = 'inline'; 
			document.getElementById('skinHombres').style.display = 'none'; 
			document.getElementById('SkinFemale1').checked = true;
		}
		function CambiarHombre()
		{
			document.getElementById('skinHombres').style.display = 'inline'; 
			document.getElementById('skinMujeres').style.display = 'none'; 
			document.getElementById('SkinMale1').checked = true;
		}
        function ComprobarR()
        {
            var R1 = document.getElementById("RegistroNameID").value; 
            var R2 = document.getElementById("RegistroPass1ID").value; 
            var R3 = document.getElementById("RegistroPass2ID").value; 
            var R4 = document.getElementById("RegistroMailID").value; 
            var R7 = document.getElementById("BlancoText").value;
			if(R7 != 30)
			{
                $('#DivR7').addClass('has-error');
                document.getElementById('ErrorCapt').style.display = 'block'; 
                document.getElementById('TextoErrorCapt').innerHTML = "El valor es incorrecto"; 
                $('#SpanCapt').addClass('glyphicon glyphicon-remove input-group-addon');
			}
			else
			{
                document.getElementById('ErrorCapt').style.display = 'none'; 
                document.getElementById('TextoErrorCapt').innerHTML = ""; 
                $('#DivR7').removeClass('has-error');
                $('#SpanCapt').removeClass('glyphicon glyphicon-remove input-group-addon');
                $('#DivR7').addClass('has-success');
                $('#SpanCapt').addClass('glyphicon glyphicon-ok input-group-addon');
			}
            if(NombreRP(R1) == false || R1.length == 0)
            {
                $('#DivR1').addClass('has-error');
                document.getElementById('ErrorName').style.display = 'block'; 
                document.getElementById('TextoErrorName').innerHTML = "Use el formato Nombre_Apellido"; 
                $('#SpanRegistroName').addClass('glyphicon glyphicon-remove form-control-feedback');
            }   
            else    
            {
                document.getElementById('ErrorName').style.display = 'none'; 
                document.getElementById('TextoErrorName').innerHTML = ""; 
                $('#DivR1').removeClass('has-error');
                $('#SpanRegistroName').removeClass('glyphicon glyphicon-remove form-control-feedback');
                $('#DivR1').addClass('has-success');
                $('#SpanRegistroName').addClass('glyphicon glyphicon-ok form-control-feedback');
            }
            if(R2.length < 6 || R2.length > 24)
            {
                document.getElementById('ErrorPass1').style.display = 'block'; 
                document.getElementById('TextoErrorPass1').innerHTML = "La longitud debe estar entre los 6 y 24 caracteres"; 
                $('#DivR2').addClass('has-error');
                $('#SpanRegistroPass').addClass('glyphicon glyphicon-remove form-control-feedback');
            } 
            else    
            {
                document.getElementById('ErrorPass1').style.display = 'none'; 
                document.getElementById('TextoErrorPass1').innerHTML = ""; 
                $('#DivR2').removeClass('has-error');
                $('#SpanRegistroPass').removeClass('glyphicon glyphicon-remove form-control-feedback');
                $('#DivR2').addClass('has-success');
                $('#SpanRegistroPass').addClass('glyphicon glyphicon-ok form-control-feedback');
            }
            if(R2 != R3 || (R2.length < 6 || R2.length > 24) && R2.length != 0 || R2.length == 0)
            {
                document.getElementById('ErrorPass2').style.display = 'block'; 
                document.getElementById('TextoErrorPass2').innerHTML = "Las contraseñas no coinciden"; 
                $('#DivR3').addClass('has-error');
                $('#SpanRegistroPass2').addClass('glyphicon glyphicon-remove form-control-feedback');
            }   
            else
            {
                document.getElementById('ErrorPass2').style.display = 'none'; 
                document.getElementById('TextoErrorPass2').innerHTML = ""; 
                $('#DivR3').removeClass('has-error');
                $('#SpanRegistroPass2').removeClass('glyphicon glyphicon-remove form-control-feedback');
                $('#DivR3').addClass('has-success');
                $('#SpanRegistroPass2').addClass('glyphicon glyphicon-ok form-control-feedback');
            }
            if(/\S+@\S+\.\S+/.test(R4) == false)
            {
                document.getElementById('ErrorMail').style.display = 'block'; 
                document.getElementById('TextoErrorMail').innerHTML = "La dirección de email es invalida"; 
                $('#DivR4').addClass('has-error');
                $('#SpanRegistroMail').addClass('glyphicon glyphicon-remove form-control-feedback');
            } 
            else    
            {
                document.getElementById('ErrorMail').style.display = 'none'; 
                document.getElementById('TextoErrorMail').innerHTML = ""; 
                $('#DivR4').removeClass('has-error');
                $('#SpanRegistroMail').removeClass('glyphicon glyphicon-remove form-control-feedback');
                $('#DivR4').addClass('has-success');
                $('#SpanRegistroMail').addClass('glyphicon glyphicon-ok form-control-feedback');
            }
            if(/\S+@\S+\.\S+/.test(R4) == true && NombreRP(R1) == true && (R2.length >= 6 && R2.length <= 24) && R2 == R3 && R7 == 30)
            {
                document.RegistroForm.submit() 
            }
        }
        function NombreRP(name)
        {
			if(name.length == 0) return false
            if(/[A-Z]{1,1}[a-z]{2,9}[+_][A-Z]{1,1}[a-z]{2,9}/.test(name) == false) return false;
            else return true;            
        }
        
        function Comprobar()
        {
            var nombre = document.getElementById("NameLogin").value; 
            var pass = document.getElementById("PassLogin").value; 
			if(NombreRP(nombre) == false || nombre.length == 0)
            {
                $('#DIVName').addClass('has-error');
                $('#SpanName').addClass('glyphicon glyphicon-remove form-control-feedback');
            }   
            else    
            {
                $('#DIVName').removeClass('has-error');
                $('#SpanName').removeClass('glyphicon glyphicon-remove form-control-feedback');
                $('#DIVName').addClass('has-success');
                $('#SpanName').addClass('glyphicon glyphicon-ok form-control-feedback');
            }
			if(pass.length >= 6 && pass.length <= 24)
            {
                $('#DIVPass').removeClass('has-error');
                $('#SpanPass').removeClass('glyphicon glyphicon-remove form-control-feedback');
                $('#DIVPass').addClass('has-success');
                $('#SpanPass').addClass('glyphicon glyphicon-ok form-control-feedback');
            } 
            else    
            {
                $('#DIVPass').addClass('has-error');
                $('#SpanPass').addClass('glyphicon glyphicon-remove form-control-feedback');
            }
			if(NombreRP(nombre) == true && pass.length > 5)
			{
                document.LoginForm.submit() 
			}
        }
        
        function Comprobar2()
        {
            var nombre = document.getElementById("NameLogin2").value; 
            var pass = document.getElementById("PassLogin2").value; 
			if(NombreRP(nombre) == false || nombre.length == 0)
            {
                $('#DIVName2').addClass('has-error');
                $('#SpanName2').addClass('glyphicon glyphicon-remove form-control-feedback');
            }   
            else    
            {
                $('#DIVName2').removeClass('has-error');
                $('#SpanName2').removeClass('glyphicon glyphicon-remove form-control-feedback');
                $('#DIVName2').addClass('has-success');
                $('#SpanName2').addClass('glyphicon glyphicon-ok form-control-feedback');
            }
			if(pass.length >= 6 && pass.length <= 24)
            {
                $('#DIVPass2').removeClass('has-error');
                $('#SpanPass2').removeClass('glyphicon glyphicon-remove form-control-feedback');
                $('#DIVPass2').addClass('has-success');
                $('#SpanPass2').addClass('glyphicon glyphicon-ok form-control-feedback');
            } 
            else    
            {
                $('#DIVPass2').addClass('has-error');
                $('#SpanPass2').addClass('glyphicon glyphicon-remove form-control-feedback');
            }
			if(NombreRP(nombre) == true && pass.length > 5)
			{
                document.LoginForm2.submit() 
			}
        }
    </script>

		
    <?php
        if(!isset($_COOKIE['UserDataXMLFG614']) || $_COOKIE['UserDataXMLFG614'] != hash("whirlpool", "Conectado"))
        {
            if(isset($_GET['login']) && $request->variable('login', '') == true)
            {
                if($Conecto == 0)
                {
                    echo '<script type="text/javascript">document.getElementById(\'AlertaSobreAlgo\').style.display = \'block\'; document.getElementById(\'textoalerta\').innerHTML = "<strong>¡Cuidado!</strong> El usuario y contraseña es incorrecto"; </script>';
                }		
                else if($Conecto == 2)
                {
                    echo '<script type="text/javascript">document.getElementById(\'AlertaSobreAlgo\').style.display = \'block\'; document.getElementById(\'textoalerta\').innerHTML = "<strong>¡Cuidado!</strong> No has activado tu cuenta."; </script>';
                }
            }
        }
        if(isset($UsuarioExisetnte))
        {
            if($UsuarioExisetnte == 20)
            {
            echo '<script type="text/javascript">document.getElementById(\'AlertaSobreAlgo\').style.display = \'block\'; document.getElementById(\'textoalerta\').innerHTML = "<strong>¡Cuidado!</strong> El nombre de usuario no esta disponible"; </script>';
            }
            else if($UsuarioExisetnte == 21)
            {
            echo '<script type="text/javascript">document.getElementById(\'AlertaSobreAlgo\').style.display = \'block\'; document.getElementById(\'textoalerta\').innerHTML = "<strong>¡Cuidado!</strong> El dominio de la cuenta e-mail especificada no existe"; </script>';
            }
            else if($UsuarioExisetnte == 22)
            {
            echo '<script type="text/javascript">document.getElementById(\'AlertaSobreAlgo\').style.display = \'block\'; document.getElementById(\'textoalerta\').innerHTML = "<strong>¡Cuidado!</strong> Existe un usuario registrado con el mismo e-mail"; </script>';
            }
            else if($UsuarioExisetnte == 23)
            {
            echo '<script type="text/javascript">document.getElementById(\'AlertaSobreAlgo\').style.display = \'block\'; document.getElementById(\'textoalerta\').innerHTML = "<strong>¡Cuidado!</strong> EEl e-mail especificado no es válido"; </script>';
            }
        }
        if(isset($MensajeRecienRegistrado))
        {
            if($MensajeRecienRegistrado == true)
            {
                echo '<script type="text/javascript">window.alert("Bienvenido a Blod Gamer.\n\nSe te ha enviado un correo electrónico con un link de activación al e-mail que proporcionaste");</script>';
            }
        }
    ?>
</html>