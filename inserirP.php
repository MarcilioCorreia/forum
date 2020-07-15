<!DOCTYPE html>
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
	//session_start(); ?>
    <h1>Inserir Posts</h1>
    <form action="inserirP2.php" method="POST" name="f1">
    Id user: <input type="text" size="20" maxlength="20" name="id" readonly value="<?php echo $_SESSION['id']?>"><br><br>
    Tema: <input type="text" size="20" maxlength="20" name="tema" required><br><br>
    <!-- Caso pretenda pode tornar o seu programa mais eficiente e criar os conjuntos de temas 
    numa tabela, ou apenas colocar diretamente dentro de um select -->
    Título: <input type="text" size="50" maxlength="50" name="titulo" required><br><br>
    Texto:<br><textarea cols="80" rows="4" name="texto" required></textarea><br><br>
    Foto(url):<br><textarea cols="80" rows="4" name="foto"></textarea><br><br>
        
    <input type="submit" value="Colocar Post"><br><br>
    <input type="reset" value="Limpar"><br><br>
    <input type="button" value="Voltar" onclick="window.history.go(-1)">
    </form>

</body>
</html>