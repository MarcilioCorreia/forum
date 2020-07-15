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
        
    //session_start();
    echo "<h2>Login com sucesso!</h2>";
    echo "<h2>Bem-vindo " .$_SESSION['nick']."</h2>";
                $ligacao = mysqli_connect("XXXX", "XXXXXXX", "XXXX","XXXXXXXX");
        //Tento efectuar a conexao 
        if ($ligacao->connect_error){
            die (mysqli_error($ligacao));
        }
       
        $query ="SELECT COUNT(id_user) FROM t_post WHERE id_user=".$_SESSION['id'];
        $resultado = mysqli_query($ligacao,$query) or die (mysqli_error ($ligacao));
        $busca = mysqli_fetch_assoc($resultado);
       // echo "<h3>Numero de pesquisas: " .$busca['id_user']."</h3>";
       //$post=mysqli_fetch_assoc($resultado);    
       // echo $busca['COUNT(id_user)'] ;
        echo "<p>Numero de Posts: ".$busca['COUNT(id_user)']. " </p>";
       // echo "<p>".$post. "</p>";
       
       $query ="SELECT COUNT(id_user)  as tot_resp FROM t_resp WHERE id_user=".$_SESSION['id'];
       $resultado = mysqli_query($ligacao,$query) or die (mysqli_error ($ligacao));
       $busca = mysqli_fetch_assoc($resultado);
       echo "<p>Numero de Respostas: ".$busca['tot_resp']. " </p>";

    ?>
        <input type="button" value="Editar Perfil"
        onclick="window.open('perfil.php','_self')">        
        <input type="button" value="Colocar Post"
        onclick="window.open('inserirP.php','_self')">
        <input type="button" value="Listar Posts"
        onclick="window.open('listar_P.php','_self')">
        <input type="button" value="Meus Posts"
        onclick="window.open('meusP.php','_self')">
        <input type="button" value="Minhas Respostas"
        onclick="window.open('minhasR.php','_self')">
        <input type="button" value="Logout"
        onclick="window.open('logout.php','_self')">
        
   	<?php   
        
    if (strcmp($_SESSION['nick'],"admin")==0)
	{
	?>
		<br><br> <h2>Área de Administração</h2>
			<input type="button" value="Gerir Utilizadores" onclick="window.open('gerir_U.php','_self')">
			<input type="button" value="Gerir Posts" onclick="window.open('gerir_P.php','_self')">
			<input type="button" value="Gerir Respostas" onclick="window.open('gerir_R.php','_self')">
		
	<?php
	}
	?>
        
    </body>
</html>