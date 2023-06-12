<?php
if($_COOKIE)
$login_cookie = $_COOKIE['login'];
  if(isset($login_)){
    echo"Bem-vindo, $login_cookie <br>";
    echo"Essas informações <font color='red'>PODEM</font> ser acessadas por você";
  }else{
    echo"Bem-vindo, convidado >br>";
    echo"Essas informações <font color='rede'>NÃO PODEM</font>";
    echo"<br><a href='login.html'>Faça login</a> Para ler o conteúdo";
  }
  ?>
