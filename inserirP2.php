<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="2;url=login2.php" />
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
    if (!ligacao){
    die ("Erro na ligação" . mysqli_connect_error());
    }    
    //instrução sql para adicionar
    $sql ="INSERT INTO t_post (tema, titulo, texto, foto, id_user) VALUES
    ('$_POST[tema]',
    '$_POST[titulo]','$_POST[texto]',
    '$_POST[foto]',$_POST[id])";
        
    //echo $sql;
if (mysqli_query($ligacao, $sql)){
    echo "<h1>Post colocado com sucesso!</h1>";
}
mysqli_close($ligacao);
?>
            <input type="button" value="Continuar" onclick="window.history.go(-2)">
    </body>
</html>
