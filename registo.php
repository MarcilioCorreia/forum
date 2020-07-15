<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="100;url=index.html" />
        <title>FORUM - Marcilio Correia </title>
    </head>
<body>
<?php
//liga-se ao servidor com user e pass
$ligacao = mysqli_connect("XXXX", "XXXXXXX", "XXXX","XXXXXXXX");
//verifica se a ligação é feita com sucesso
if(!$ligacao){
    die("Erro na ligação" . mysqli_connect_error());
}
    //instrução SQL para adicionar
    $sql ="INSERT INTO t_user (nick, nome, email, data_nasc, pass, foto) VALUES ('$_POST[nick]',
    '$_POST[nome]','$_POST[email]',
    '$_POST[data_nasc]','$_POST[pass]',
    '$_POST[foto]')";
    echo $sql;
if (mysqli_query($ligacao, $sql)){
    echo "<h1>Registo efetuado com sucesso!</h1>";
}
mysqli_close($ligacao);
?>
    <h2> Aguarde que vai ser redirecionado</h2>
    </body>
</html>