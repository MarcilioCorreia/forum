<html>
    <head>
    <meta charset="utf-8">
    <title>Alterar Clientes - Marcilio Correia</title>
		<?php 
    //verificar se existe sessão com variável iniciada
	session_start();
	if(!isset($_SESSION['nick']))      
        	header ('location: index.html');
    ?>

    </head>
<body>
    <h1>Alterar Utilizador</h1>
 <form action="alterar_U2.php" method="post">
     <?php
     
     // obtem o valor da combobox do form anterior
     $cp_id=$_POST['id_user'];
     
     //estabelece a conexão ao servidor 
    $ligacao = mysqli_connect("XXXX", "XXXXXXX", "XXXX","XXXXXXXX");
    if ($ligacao -> connect_error){
        die (mysqli_error($ligacao));
    }
    //procura na base de dados o registro que selecionei 
    $sql ="SELECT * FROM t_user WHERE id =". $cp_id;
    $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
    $linha = mysqli_fetch_assoc($resultado);
    
?>
    <hr>
    <form action ="alterar_U2.php" method="post">
    <p> Id: <input type= "text" name="id" size = "5" value ="<?php echo $linha['id']?>" readonly></p>
    <p> Nick: <input type=text name="nick" size="20" value ="<?php echo $linha['nick']?>"></p>
    <p> Nome: <input type=text name="nome" size="100" value ="<?php echo $linha['nome']?>"></p>
    <p> Email: <input type=text name="email" size="50" value ="<?php echo $linha['email']?>"></p>
    <p> Data de Nascimento: <input type="date" name="data_nasc" size="9" value ="<?php echo $linha['data_nasc']?>"></p>
    <p> Pass: <input type="password" name="pass" size="20" value ="<?php echo $linha['pass']?>"></p>
    <p> Foto: <br><textarea cols="80" rows="4" name="foto"><?php echo $linha['foto']?></textarea><br><br></p>
            
    <input type="submit" value="Alterar" >
    <input type="reset" value="Limpar" >
    <input type="button" value="Cancelar" onclick="window.history.go(-1);">
    
    </form>
    <?php
    mysqli_close($ligacao);
    ?>
</body>
</html>