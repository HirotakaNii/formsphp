<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>
<body>
     <h1>Formulário PHP</h1>
     <form action="#" method="post">
     	<label for="nome">Nome</label>
     	<input type="text" name="nome" id="nome" maxlength="50" placeholder="Insira seu nome:" autocomplete="off" autofocus required><br><br>
     	<label for="E-mail">E-mail</label>
     	<input type="email" name="email" id="E-mail" maxlength="50" placeholder="Insira seu E-mail:" 
     	autocomplete="off"  required><br><br>
       <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="limpar" value="Limpar">     
     
     </form>
</body>
</html>