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

     	$sql = "select nome,email from tbPessoa";

      $resultado = mysqli_query($con,$sql);

      echo "<h2>Lista de pessoas<h2>";

      while ($pessoa = mysqli_fetch_array($resultado)) {
        echo $pessoa['nome'] . " - " . $pessoa['email'] ."<br><br>";
      }
 

     mysqli_close($con);
 }

 
 ?>