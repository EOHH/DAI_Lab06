<?php
function conectar(){
  $xc = mysqli_connect("localhost", "root", "", "dai");
  return $xc;
}

function desconectar($xc){
  mysqli_close( $xc );
}
?>
