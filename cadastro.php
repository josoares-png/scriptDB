<?php 
     $host = "localhost";
     $user = "user_dbLoja";
     $pwd = "0712@";
     $db = "dbloja";

     //criando uma conexão com banco de dados

     $con = mysqli_connect($host,$user,$pwd,$db);

      if (mysqli_connect_errno()) {

          echo "Erro ao acessar a base de dados" . mysqli_connect_error();
     }else{

     	$sql = "insert into tbPessoa(nome,email)values('$_POST[nome]','$_POST[email]')";

     	if (mysqli_query($con,$sql)){
    
     	echo "Cadastrado com sucesso!!!";

     }else{
     	echo "Erro ao cadastrar!!!" . mysqli_error();
     }
     mysqli_close($con);
 }

 
 ?>