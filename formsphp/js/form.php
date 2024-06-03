<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário</title>
</head>
<body>
     <h1>Cadastro</h1>
     <form action="#" method="post">
     	<label for="nome">Nome</label>
     	<input type="text" name="nome" id="nome" maxlength="50" placeholder="Insira seu nome:" autocomplete="off" autofocus required><br><br>
     	<label for="E-mail">E-mail</label>
     	<input type="email" name="email" id="E-mail" maxlength="50" placeholder="Insira seu E-mail:" 
     	autocomplete="off"  required><br><br>
      
<br>
<input type="radio" name="Teste" value="Teste">Testecast
<br>
<input type="radio" name="Teste" value="Teste2">Testate
<br>
<input type="radio" name="Teste" value="Teste3">Testea
<br>
<input type="radio" name="Teste" value="Teste4">Test
<br>


Escolha seu animal vavoriot entre estes:
<select name="Animais">
  <option selected></option>
  <option >Elefante</option>
  <option>Gorila</option>
  <option>Tucunaré</option>
 <option>Topera++</option>

</select>


      <br>

      Abrir Arquivo<input type="file" name="files"><br> 

      Data <input type="month" name="calendario">
      <br>
      Pesquisar: <input type="search" name="search"> <br>
       <input type="submit" name="enviar" value="Enviar">
        <input type="reset" name="limpar" value="Limpar">     
        
     





     </form>
</body>
</html>