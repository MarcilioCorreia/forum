<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="refresh" content="5;url=index.html" />
        <title>FÓRUM</title>
    </head>
    <body>
    
<?php
    session_start();
    //Apaga todas as variáveis da sessão
    $_SESSION = array();
    //Finalmente, destrói a sessão
    session_destroy();
?>
<h2 text-align="center">Sessão Terminada com sucesso!</h2>
        
<input type="button" value="Voltar ao início" onclick="window.open('index.html','_self')">
    </body>
</html>