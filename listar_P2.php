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
    <?php //abre o código php
    //estabelece a conexão ao servidor
        $ligacao = mysqli_connect("XXXX", "XXXXXXX", "XXXX","XXXXXXXX");
    //tento efetuar a conexão
    if ($ligacao->connect_error){
        die (mysqli_error($ligacao));
    }
    $sql ="SELECT * FROM t_post WHERE apagado=0";
    //executo o SQL no meu servidor
    $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
    $numreg = 0;
    //repete este ciclo enquanto houver linhas
while($linha = mysqli_fetch_assoc($resultado))
{
    echo "<h3>Id: " . $linha['id']."</h3>";
    echo "<b>Tema:</b> " . $linha['tema']."<br>";
    echo "<b>Titulo:</b> " . $linha['titulo']."<br>";
    echo "<b>Texto:</b> " . $linha['texto']."<br>";
    echo "<b>Foto:</b><br> <img src='" . 
    $linha['foto']."' height='100'><br><br>";
    //versão primitiva onde imprime o id do user
    //echo "User: " . $linha['id_user']."<br><br>";
    //versao nova onde imprime o nickname
    //procurar o utilizador pelo id
    $sql2 = "SELECT * FROM t_user WHERE id=" . $linha['id_user'];
    //executo o SQL no meu servidor
    $resultado2=mysqli_query($ligacao, $sql2) or die (mysqli_error($ligacao));
    $linha2 = mysqli_fetch_assoc($resultado2) ;
    echo "<h3>Nick: " . $linha2['nick']."</h3>";
   
    echo "select nick from t_user as u
    left join t_resp as r
    on u.id_user = r.id_user
    left join t_post as p
    on r.id_user = p.id_user" . $linha2['nick'];
    
    ?>
    <form action="inserirR.php" method="post">
        <input type="hidden" value="<?php echo $linha['id']?>" name="id_post">
        <input type="submit" value="Ver Respostas / Responder">
    </form>
    <?php
    echo "<hr>";
    $numreg = $numreg + 1;
}
    echo "N. de Postagens > " . $numreg;
    mysqli_close($ligacao);
?>
    <br><br>
    <input type="button" value="Voltar ao menu" onclick="window.history.go(-1);">
    
</body>    
</html>