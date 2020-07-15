<html>
    <head>
        <meta charset="utf-8">
        <title>FÓRUM DO FRONTEND</title>
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
    $sql = "UPDATE t_resp set apagado=1
    WHERE id =". $_POST['id_resp'];
        
    //echo $sql;
if (mysqli_query($ligacao, $sql)){
    echo "<h1>Resposta removida com sucesso!</h1>";
}
mysqli_close($ligacao);
?>
        <input type="button" value="Continuar"
    onclick="window.history.go(-2);">
</body>
</html>