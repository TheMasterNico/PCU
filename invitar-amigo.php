<?php 
    if(empty($_COOKIE['UserDataXMLFG230'])){echo '<script>window.location="index.php";</script>';}
    include 'overal_header.php';
?>
    <div class="col-md-8">
		<div class="well-group" style="padding-top:30px;">
			<div class="well well-lg" style="color: black;">
				<div style="border: 0px solid red;">
          <p>
            Invita a tus amigos y consigue grandes beneficios. Por cada amigo invitado recibiras <b>$ 10000 Dolares</b> una vez completado todos los requisitos. La recompensa se repartira entre tu y tu amigo, tu recibiras un total de <b>$ 7500 Dolares</b> y tu amigo se llevara el resto <b>$ 2500 Dolares</b>.
          </p>
          <br>
          <p>
            Comparte este enlace con tus amigos, para que ellos se registren y asi obtener la recompensa:
          </p>
          <div style="width:100%;text-align:center;color:#c0c0c0;margin:auto;padding:5px;border:1px #DCDCDC solid;">
            http://www.blodgamer.com/?afid=<?php echo md5($_COOKIE['UserDataXMLFG230']); ?>  
          </div>                                    
          <br>
          <p>
            Lista de amigos invitados:
          </p>
          <ul style="margin-left:-40px;list-style:none;"> 
<?php 
  $count_invs = 0;
  $hel_us = mysqli_fetch_array(mysqli_query($conex, "SELECT * FROM rp_usuarios WHERE Nombre='".$_COOKIE['UserDataXMLFG230']."'"));
  $sql_as = mysqli_query($conex, "SELECT * FROM web_afiliados WHERE a_uid='".$hel_us['id_user']."'");
  while($gold_as = mysqli_fetch_array($sql_as))
  {
    $count_invs++;
    $hol_us = mysqli_fetch_array(mysqli_query($conex, "SELECT * FROM rp_usuarios WHERE id_user='".$gold_as['i_uid']."'"));
    $calc_porciento = (100*$hol_us['Nivel'])/3;
    if($calc_porciento > 100) {$calc_porciento = 100;}else{$exp_calcporciento = explode('.', $calc_porciento);}
    if($calc_porciento > 99) {
      if($gold_as['xd'] == 0 && $hol_us['Nivel'] == 3)
      {
        if($hol_us['OnOff'] == 0 && $hel_us['OnOff'] == 0)
        {
          $sql_xdus = mysqli_query($conex, "UPDATE rp_usuarios SET Dinero=Dinero+2500 WHERE id_user='".$hol_us['id_user']."'");
          $sql_xdus = mysqli_query($conex, "UPDATE rp_usuarios SET Dinero=Dinero+7500 WHERE id_user='".$hel_us['id_user']."'");
          $sql_xd = mysqli_query($conex, "UPDATE web_afiliados SET xd='1' WHERE a_uid='".$hel_us['id_user']."' AND i_uid='".$hol_us['id_user']."'");  
        }
      }
    }
?>
            <li style="padding:5px;margin-top:10px;width:100%;border:1px #c0c0c0 solid;">
              <img style="float:left;width:60px;height:114px;margin-right:15px;" src="http://pawnoscript.com/BlodGamer/img/AvatarSkin/BG_<?php echo $hol_us["Skin"]; ?>.png" alt="Tu Skin actual" />
              <p style="font-size:24px;"><?php echo $hol_us["Nombre"]; ?></p>
              <p>
                Fecha de registro: <b><?php echo date("d-m-Y", $gold_as["time"]); ?></b>
              </p>
              <p>
                <span style="float:right;margin-right:15px;font-size:12px;">[Nivel: <?php echo $hol_us['Nivel']; ?>]</span>
                <div class="progress" style="width:65%;">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $exp_calcporciento['0']; ?>%;">
                    <?php echo $exp_calcporciento['0']; ?>%
                  </div>
                </div>
              </p>
            </li>    
<?php
  }
  if($count_invs == 0)
  {
?>
            <li style="text-align:center;color:red;padding:5px;margin-top:10px;width:100%;border:1px #c0c0c0 solid;">
              Ningun amigo invitado todavia
            </li>    
<?php
  }
?>               
          </ul>                                   
    		</div> 
			</div>
		</div>
    </div>
    <div class="col-md-4">
        <?php include 'panel_der.php';    ?>
    </div>

<?php include 'overal_footer.php';    ?>