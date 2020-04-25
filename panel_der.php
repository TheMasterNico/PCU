<div class="container-fluid" style="padding-top:30px;">
    <div class="panel panel-default">
        <div class="panel-heading">Informacion del servidor</div>
        <div class="panel-body black">
            <font color="black">
				<?php
                    require("SampQuery.class.php"); 
        
                    $query = new SampQuery("127.0.0.1", 7777); 
        
                    if ($query->connect()) {
                        $server = $query->getInfo();
                    } 
                    else 
                    {
                        echo "El servidor no responde!<br />";
                    }
                    $query->close();
					if(isset($server["hostname"]))
					{
						echo '<strong class="pull-left">Nombre:</strong><div class="text-right">'.$server["hostname"].'</div><br/>';
						echo '<strong class="pull-left">IP:</strong><div class="pull-right">'.$IP.'</div><br/>';
						echo '<strong class="pull-left">Modo:</strong><div class="pull-right">'.$server["gamemode"].'</div><br/>';
						echo '<strong class="pull-left">Idioma:</strong><div class="pull-right">'.$server["map"].'</div><br/>';
						echo '<strong class="pull-left">Jugadores:</strong><div class="pull-right">'.$server["players"].'/'.$server["maxplayers"].'</div>';	
					}
					else echo '<br>Refresca la pagina en otro momento para obtener información sobre el servidor';
				?>
            </font>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel-default">
		<div class="panel-heading">
			<?php
				if($Conecto != 0)
				{
					echo $DatosUser["Nombre"];
				}
				else
				{
					echo 'Ingresar o Registrar';
				}
			?>
		</div>
        <div class="panel-body">
            <font color="black">
			<?php
				if($Conecto != 0)
				{				
					/*echo '<div class="table-responsive"><table class="table">';
					echo '<p>Bienvenido <strong>'.$DatosUser["Nombre"].'</strong>.</p> <p>Puedes dar un vistazo a tu cuenta <a href="./cuenta.php">aquí</a> o puedes configurar tu cuenta <a href="./cuenta.php?action=config">aquí</a></p>';
  					echo '</table></div>';*/
?>
<img class="img-responsive" style="width:80px;height:150px;float:left;" src="http://pawnoscript.com/BlodGamer/img/AvatarSkin/BG_<?php echo $DatosUser["Skin"]; ?>.png" alt="Tu Skin actual" />
<div class="btn-group-vertical" style="float:right;">
<a href="http://blodgamer.com/cuenta.php" class="btn btn-primary" role="button" style="float:right;">Mi cuenta</a>
<br/>
<br/>
<a href="http://blodgamer.com/invitar-amigo.php" class="btn btn-primary" role="button" style="float:right;">Invitar Amigo</a>
</div>
<?php
				}
				else
				{
					echo '<form role="form" action="./index.php?login=true" method="POST" name="LoginForm">
						<div class="form-group has-feedback" id="DIVName">
							<label>Nombre</label>
							<input name="NombreJugador" type="text" class="form-control" id="NameLogin" placeholder="Nombre_Apellido" required>
							<span id="SpanName" class=""></span>
						</div>
						<div class="form-group has-feedback" id="DIVPass">
							<label>Contraseña</label>
							<input name="PasswordUser" type="password" class="form-control" id="PassLogin" placeholder="Contraseña" required>
							<span id="SpanPass" class=""></span>
						</div>
						<div class="form-group">
							<div class="checkbox">
								<label><input type="checkbox" id="SeRecuerda" name="Recordarme"> Recordarme</label>
							</div>
						</div>
						<button type="button" class="btn btn-success" onclick="Comprobar()">Ingresar</button>
						<button type="button" class="btn btn-primary pull-right" data-toggle="modal" data-target="#registro">Registrar</button>
					</form>';
				}
			?>
            </font>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel-default">
        <div class="fb-like-box" data-href="https://www.facebook.com/BlodGamer" data-colorscheme="light" data-show-faces="false" data-header="false" data-stream="false" data-show-border="false"></div>
    </div>
</div>

<script type="text/javascript">
    function SeQuiereRegistrar()
    {
        document.getElementById('RegisterDiv').style.display = 'block'; 
    }
    function CerrarRegistro()
    {
        document.getElementById('RegisterDiv').style.display = 'none'; 
    }
</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>