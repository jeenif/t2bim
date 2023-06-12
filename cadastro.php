<?php
30
31 $login = $_POST['login'];
32 $senha = MD5($_POST['senha']);
33 $connect = mysqli_connect('localhost','root','');
34 $db = mysqli_select_db($connect, 't2bim');
35 $query_select = "SELECT login FROM usuarios WHERE login = '$login'";
36 $select = mysqli_query($connect, $query_select);
37 $array = mysqli_fetch_array($select, MYSQLI_NUM);
38 $logarray = $array['login'];
39
40 if($login == "" || $login == null){
41 echo"<script language='javascript' type='text/javascript'>
42 alert('O campo login deve ser preenchido');window.location.href='
43 cadastro.html';</script>";
44
45 }else{
46 if($logarray == $login){
47
48 echo"<script language='javascript' type='text/javascript'>
49 alert('Esse login já existe');window.location.href='
50 cadastro.html';</script>";
51 die();
52
53 }else{
54 $query = "INSERT INTO usuarios (login,senha) VALUES ('$login','$senha')";
55 $insert = mysqli_query($connect, $query);
56
57 if($insert){
58 echo"<script language='javascript' type='text/javascript'>
59 alert('Usuário cadastrado com sucesso!');window.location.
60 href='login.html'</script>";
61 }else{
62 echo"<script language='javascript' type='text/javascript'>
63 alert('Não foi possível cadastrar esse usuário');window.location
64 .href='cadastro.html'</script>";
65 }
66 }
67 }
68 ?>