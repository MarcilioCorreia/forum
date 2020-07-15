<html>
    <head>
    <meta charset="utf-8">
    <title>FÓRUM - Marcílio Correia</title>
			<?php 
    //verificar se existe sessao com variavel iniciada
	session_start();
	if(!isset($_SESSION['nick']))      
        	header ('location: index.html');
    ?>
    </head>
<body>
    <?php
    session_start(); 
    //estabelece a conexão ao servidor 
    $ligacao = mysqli_connect("XXXX", "XXXXXXX", "XXXX","XXXXXXXX");
    //tento efetuar a conexão
    if ($ligacao -> connect_error){
        die (mysqli_error($ligacao));
    }
    $sql ="SELECT * FROM t_user WHERE id =". $_SESSION['id'];
    //executo o SQL no meu servidor
    $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
    $linha = mysqli_fetch_assoc($resultado);
    ?>
    <h1>Editar dados do utilizador</h1>
    <form action ="perfil2.php" method="post" name="f1">
    Nick: <input type=text name="nick" size="20" required maxlength="20" readonly value ="<?php echo $linha['nick']?>"><br><br>
    Nome: <input type=text name="nome" size="100" required maxlength="100" value ="<?php echo $linha['nome']?>"><br><br>
    Email: <input type=text name="email" size="50" required maxlength="50" value ="<?php echo $linha['email']?>"><br><br>
    Data de Nascimento: <input type="date" name="data_nasc" size="10" required maxlength="10" value ="<?php echo $linha['data_nasc']?>"><br><br>
    Pass: <input type="password" name="pass" size="20" required maxlength="20" value ="<?php echo $linha['pass']?>"><br><br>
    Foto: <br><textarea cols="80" rows="4" name="foto"><?php echo $linha['foto']?></textarea><br><br>
            
    <input type="submit" value="Alterar"><br><br>
    <input type="reset" value="Limpar"><br><br>
    <input type="button" value="Cancelar" onclick="window.history.go(-1);">
    
    </form>
    </body>
</html>