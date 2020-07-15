<html>
    <head>
    <meta charset="utf-8">
    <title>Forum dos Programadores</title>
    </head>
		<?php 
    //verificar se existe sessao com variavel iniciada
	session_start();
	if(!isset($_SESSION['nick']))      
        	header ('location: index.html');
    ?>
    <body>
<?php
    //liga-se ao servidor com user e pass
    $ligacao = mysqli_connect("XXXX", "XXXXXXX", "XXXX","XXXXXXXX");
    
    //verifica se a ligação é feita com sucesso
    if (!$ligacao){
        die("Erro na ligação" . mysqli_connect_error());
    }
    //instrução SQL para bloquear
    $sql ="UPDATE t_user SET apagado=1
    WHERE id =". $_POST['id_user'];
    
    //echo $sql;
if(mysqli_query($ligacao, $sql)){
    echo "<h1>Utilizador bloqueado com sucesso!</h1>";
}
mysqli_close($ligacao);
?>
    <input type="button" value="Continuar"
    onclick="window.history.go(-2);">
    </body>
</html>