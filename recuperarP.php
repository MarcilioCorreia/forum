<html>
    <head>
        <meta charset="utf-8">
        <title>FÓRUM</title>
			<?php 
    //verificar se existe sessao com variavel iniciada
	session_start();
	if(!isset($_SESSION['nick']))      
        	header ('location: index.html');
    ?>
    </head>
    <body>
<?php
    //liga-se ao servidor com user e pass
    $ligacao = mysqli_connect("XXXX", "XXXXXXX", "XXXX","XXXXXXXX");
    //verifica se a ligação é feita com sucesso
    if (!$ligacao){
        die ("Erro na ligação" . mysqli_connect_error());
    }
    //instrução sql para adicionar
		$sql ="UPDATE t_post set apagado=0 WHERE id = ". $_POST['id_post'];
        
    //echo $sql;
    if (mysqli_query($ligacao, $sql)){
        echo "<h1>Post recuperado com sucesso!</h1>";
    }
mysqli_close($ligacao);
?>
        <input type="button" value="Continuar" onclick="window.history.go(-2);">
        </body>
</html>