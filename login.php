<html>
    <head>
        <meta charset="utf-8">
        <title>FÓRUM</title>
    </head>
    <body>
<?php
    //liga-se ao servidor com user e pass
    $ligacao = mysqli_connect("XXXX", "XXXXXXX", "XXXX","XXXXXXXX");
        
    //verifica se a ligação é feita com sucesso
    if(!$ligacao){
        die ("Erro na ligação" . mysqli_connect_error());
    }
    //verificar se existe a sessão
    if ( session_status() !== PHP_SESSION_ACTIVE )
{
    //instrução sql para adicionar
    $sql = "SELECT * FROM t_user WHERE nick='$_POST[nick]'";
        
    $resultado=mysqli_query($ligacao, $sql) or die (mysqli_error($ligacao));
    $linha = mysqli_fetch_assoc($resultado);
    if (strcmp($_POST['pass'], $linha['pass'])==0)
        {
        echo "<h2>Login com sucesso!</h2>";
        echo "<h2>Bem-vindo " .$linha['nome']."</h2>";
        session_start();
        $_SESSION['id']=$linha['id'];
        $_SESSION['nick']=$linha['nick'];
        header('Location: login2.php');
        
        ?>
        <input type="button" value="Colocar Post"
        onclick="window.open('inserirP.php','_self')">
        <input type="button" value="Listar Posts"
        onclick="window.open('listar_P.php','_self')">
        <input type="button" value="Meus Posts"
        onclick="window.open('meusP.php','_self')">
        <?php
        }
        else
        {
            echo "<h2>Dados de login inválidos!<h2>";
        }
    
        //else da verificação
    }
        else
        {
            echo "<h2>Bem-vindo " .$linha['nome']."</h2>";
            ?>
        <input type="button" value="Colocar Post"
        onclick="window.open('inserirP.php','_self')">
        <input type="button" value="Listar Posts"
        onclick="window.open('listar_P.php','_self')">
        <input type="button" value="Meus Post"
        onclick="window.open('meusP.php','_self')">
        <?php
        //fim do else da verificação da sessão
    }
        
    mysqli_close($ligacao);
    ?>
        </body>
</html>
    
    
    
    