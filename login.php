<?php
$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);
$connect = mysql_connect('nome_do_servidor' , 'nome_do_usuario' , 'senha );
$db = mysql_select_db('nome_do_banco_de_dados');
  if (isset($entrar)) {

    $verifica = mysql_query("SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'") or die("erro de selecionar);
    if (mysql_num_rows($verificar)<=0){
        echo"<script language='javascript' type='text/javascript'>
        alert('Login e/ou senho incorretos');window.location.href='login.html'</script";
        die();
    }else{
        setcookies("login",$login);
        header("Location:index.php");
    }
}
?>