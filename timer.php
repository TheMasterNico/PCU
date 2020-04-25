<?php

$conex =  mysqli_connect('localhost:3308', 'pawnoscr_user', '_NJvdEQK.{yk', 'pawnoscr_BG');

$temporales = mysqli_query($conex, "SELECT * FROM `rp_usuarios` WHERE `Expulsado` = 2");
if(mysqli_num_rows($temporales) != 0)
{
    while($DatosTemporales = mysqli_fetch_assoc($temporales)) {
        if($DatosTemporales['TimeDesBan']-time() <= 0)    {
            mysqli_query($conex,  "UPDATE `rp_usuarios` SET `Expulsado` = 3,`TimeDesBan` = 0,`Serial` = 0 WHERE `id_user` = ".$DatosTemporales['id_user']);
        }
    }      
    mysqli_free_result($temporales);      
}
?>