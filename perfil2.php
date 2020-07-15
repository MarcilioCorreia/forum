<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="3;url=login2.php" />
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
    session_start();
    //liga-se ao servidor com user e pass
    $ligacao = mysqli_connect("XXXX", "XXXXXXX", "XXXX","XXXXXXXX");
    //verifica se a ligação é feita com sucesso
    if (!$ligacao){
        die("Erro na ligação" . mysqli_connect_error());
    }
    //instrução SQL para alterar
    $sql ="UPDATE t_user SET
    nome='$_POST[nome]',
    email='$_POST[email]',
    data_nasc='$_POST[data_nasc]',
    pass='$_POST[pass]',
    foto='$_POST[foto]'
    WHERE id=".$_SESSION['id'];
    //echo $sql;
if(mysqli_query($ligacao, $sql)){
    echo "<h1>Dados alterados com sucesso!</h1>";
}
mysqli_close($ligacao);
?>
    <h2>Aguarde que vai ser redireccionado</h2>
    </body>
</html>