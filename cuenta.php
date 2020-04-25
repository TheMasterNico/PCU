<?php 
    include 'overal_header.php';
?>
    <div class="col-md-8">
		<div class="well-group" style="padding-top:30px;">
			<div class="well well-lg" style="color: black;">
				<div style="border: 0px solid red;">
					<?php
                        function NombreTrabajo($id)
                        {
                            switch($id)  
                            {
                                case 0:{ $nam = "Desempleado"; return $nam;}
                                case 1:{ $nam = "Taxista"; return $nam;}
                                case 2:{ $nam = "Barrendero"; return $nam;}
                                case 3:{ $nam = "Granjero"; return $nam;}
                                case 4:{ $nam = "Camionero"; return $nam;}
                                case 5:{ $nam = "Detective"; return $nam;}
                                case 6:{ $nam = "Traficante de Armas"; return $nam;}
                            }
                        }
                        function GetWeaponName($id)
                        {
                            switch($id)
                            {
                                case 1: return "Brass Knuckles";   
                                case 2: return "Golf Club";
                                case 3: return "Nightstick";
                                case 4: return "Knife";
                                case 5: return "Baseball Bat";
                                case 6: return "Shovel";
                                case 7: return "Pool Cue";
                                case 8: return "Katana";
                                case 9: return "Chainsaw";
                                case 10: return "Purple Dildo";
                                case 11: return "Dildo";
                                case 12: return "Vibrator";
                                case 13: return "Silver Vibrator";
                                case 14: return "Flowers";
                                case 15: return "Cane";
                                case 16: return "Grenade";
                                case 17: return "Tear Gas";
                                case 18: return "Molotov Cocktail";
                                case 19: return "";
                                case 20: return "";
                                case 21: return "";
                                case 22: return "9mm";
                                case 23: return "Silenced 9mm";
                                case 24: return "Desert Eagle";
                                case 25: return "Shotgun";
                                case 26: return "Sawnoff Shotgun";
                                case 27: return "Combat Shotgun";
                                case 28: return "Micro SMG/Uzi";
                                case 29: return "MP5";
                                case 30: return "AK-47";
                                case 31: return "M4";
                                case 32: return "Tec-9";
                                case 33: return "Country Rifle";
                                case 34: return "Sniper Rifle";
                                case 35: return "RPG";
                                case 36: return "HS Rocket";
                                case 37: return "Flamethrower";
                                case 38: return "Minigun";
                                case 39: return "Satchel Charge";
                                case 40: return "Detonator";
                                case 41: return "Spraycan";
                                case 42: return "Fire Extinguisher";
                                case 43: return "Camera";
                                case 44: return "";
                                case 45: return "";
                                case 46: return "Parachute";
                            }
                        }
                        if(isset($_GET['accion']) && $_GET['accion'] == 'activar' && isset($_GET['id']) && isset($_GET['k']))
                        {
                            $consulta = "SELECT * FROM `rp_administracion` WHERE id_user = '" . $_GET["id"] . "' AND `ActKey` = '" . $_GET["k"] . "' AND `Activa` = '0'";	// 0 es que no esta activa
                            $ComprobarKey = mysqli_query($conex, $consulta);
                            if(mysqli_num_rows($ComprobarKey) != 0)
                            {
                                //http://localhost/cuenta.php?accion=activar&id=54&k=69996c95cbd31
                                mysqli_query($conex, "UPDATE `rp_administracion` SET `Activa` = '1' WHERE `id_user` = '".$_GET["id"]."'"); // 1 ya esta activa  
                                $Conecto = 3;
                                //window.open("./foro/ucp.php?mode=activate&u='.$_GET['id'].'&k='.$_GET['k']');
                            }
                            else
                            {
                                echo '<script type="text/javascript">window.alert("Esta cuenta ya esta activa o estas proporcionando datos falsos.");</script>'; 
                                $Conecto = 0;
                            }
                        }
						if($Conecto == 1)
                        {
							echo '<h4>Información sobre <span style="color:red;">'.$DatosUser["Nombre"].'</span> - <span style="color:blue;">';
if($DatosUser["OnOff"] == 1)echo 'Conectado'; else echo 'Desconectado';
echo '</span></h4>';
							echo '<div style="border: 3px inset black; padding:3px;">';
							echo '<table class="table table-condensed table-responsive"><tr><th>Dato</th><th>Valor</th></tr>
                            <tr><td>Salud/Armadura</td><td>'.$DatosUser["Vida"].'&#37; / '.$DatosUser["Armadura"].'&#37;</td></tr>
                            <tr><td>Nivel</td><td>'.$DatosUser["Nivel"].'</td></tr>
                            <tr><td>Experiencia</td><td>'.$DatosUser["Experiencia"].'</td></tr>
                            <tr><td>Dinero</td><td><b><font color="Green">'.$DatosUser["Dinero"].'$</font></b></td></tr>';
                            if($banco["Banco"] != 0) echo '<tr><td>Dinero en el Banco</td><td>'.$banco["Dinero"].'$</td></tr>';
                            if($faccion["Miembro"] != 0)
                            {
                                $consulta = mysqli_query($conex, "SELECT `FNombre` FROM `facciones` WHERE FId = '" . $faccion["Miembro"] . "'");
                                $nombreF = mysqli_fetch_assoc($consulta);mysqli_free_result($consulta);
                                $consulta = mysqli_query($conex, "SELECT `FRangos".$faccion["Rango"]."` FROM `facciones` WHERE FId = '" . $faccion["Miembro"] . "'");
                                $rango = mysqli_fetch_assoc($consulta); mysqli_free_result($consulta);
                                $rango["FRangos".$faccion["Rango"]];                                
                                echo '<tr><td>Facción</td><td>'.$nombreF["FNombre"].'</td></tr>';
                                echo '<tr><td>Rango</td><td>'.$rango["FRangos".$faccion["Rango"]] .'</td></tr>';
                            }
                            else
                            {
                                echo '<tr><td>Facción</td><td>Ciudadano</td></tr>';
                            }
                            echo '<tr><td>Trabajo</td><td>'.NombreTrabajo($faccion["Trabajo"]).'</td></tr>';
                            
                            echo '<tr><td>Número de Celular</td><td>'.$celular["Numero"].'</td></tr>';
                            $Slot = 0;
                            while($Slot < 13)
                            {
                                
                                if($armas['a'.$Slot] != 0 && $armas['b'.$Slot] != 0)
                                {
                                    echo '<tr><td>'.GetWeaponName($armas['a'.$Slot]).'</td><td>'.$armas['b'.$Slot].' Balas</td></tr>';
                                }
                                $Slot++;   
                            }
                            echo'</table>';
							echo '</div>';
						}
						else if($Conecto == 0)
						{
				            echo '<script type="text/javascript">window.location="./";</script>';
						}
						else if($Conecto == 3)
						{
                            echo '<script type="text/javascript">window.alert("Gracias por activar tu cuenta. Ya puedes jugar.");</script>'; 
				            echo '<script type="text/javascript">window.location="./";</script>';
						}
					?>
				</div> 
			</div>
		</div>
    <div class="well-group" style=""><!-- Aca -->
			<div class="well well-lg" style="color: black;">
				<div style="border: 0px solid red;">
          <p style="font-size:20px;">Información sobre mi vehiculo</p>
<?php

  $sql_tes = mysqli_query($conex, "SELECT * FROM rp_usuarios WHERE Nombre='".$_COOKIE['UserDataXMLFG230']."'");
  if($user_temp = mysqli_fetch_array($sql_tes))
  {
    $this_veh = mysqli_fetch_array( mysqli_query($conex, "SELECT * FROM rp_auto WHERE id_user='".$user_temp['id_user']."'") );
    if($this_veh['LlaveAuto'] != '-1')
    {
      $sel_veh = mysqli_fetch_array( mysqli_query($conex, "SELECT * FROM rp_vehiculos WHERE ID='".$this_veh['LlaveAuto']."'") );
?>
<div style="width:204px;height:125px;background-image:url(img/vehicles/Vehicle_<?php echo $sel_veh['Modelo']; ?>.jpg);background-repeat:no-repeat;background-size:100% 100%;float:right;border:1px #c0c0c0 solid;">

</div>
<p>Modelo: <span style="float:right;margin-right:15px;"><b><?php echo GetVehicleName($sel_veh['Modelo']); ?></b></span></p>
<p>Precio: <span style="float:right;margin-right:15px;"><b>$ <?php echo $sel_veh['Precio']; ?></b></span></p>
<p>Matricula: <span style="float:right;margin-right:15px;"><b><?php echo $sel_veh['Matricula']; ?></b></span></p>
<p>Gasolina/Bateria: <span style="float:right;margin-right:15px;"><b><?php echo $sel_veh['Gasolina']; ?>/<?php echo $sel_veh['Bateria']; ?></b></span></p> 
<?php    
  }else {
?>
<h2 style="text-align:center;color:red;">No tienes vehiculo</h2>
<?php    
    }
  }

?>
        </div>
      </div>
    </div> <!-- Aca -->
    </div>
    
    <div class="col-md-4">
        <?php include 'panel_der.php';    ?>
    </div>

<?php include 'overal_footer.php';    ?>