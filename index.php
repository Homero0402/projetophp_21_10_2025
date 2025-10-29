<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Formulário de cadastro</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="css/style.css">	
</head>
<body>
	<main class="container">
		<h1>Cadastro de usuários</h1>
		<form action="include/cadastrar.php" method="post">
			<div class="md-3">
				<label for="primeiroNome">Primeiro nome</label>
				<input type="text" name="primeiroNome" 
				id="primeiroNome" placeholder="Primeiro nome ..."
				maxlength="50" required autofocus autocomplete="off">	
			</div>
			<div class="md-3">
				<label for="segundoNome">Sobrenome</label>
				<input type="text" name="segundoNome" 
				id="segundoNome" placeholder="Sobrenome ..."
				maxlength="50" required autocomplete="off">
			</div>
			<div class="md-3">
			</div>
			<div class="md-3">
				<label>Escolha seu pet:</label>
				<div class="md-3">
				<label>Cachorro</label><input type="checkbox" name="cachorro">
					</div>
				<div class="md-3">
				<label>Gato</label><input type="checkbox" name="gato">
				</div>
				<div class="md-3">
				<label>Peixe</label><input type="checkbox" name="peixe">
				</div>
				<div class="md-3">
				<label>Passaro</label><input type="checkbox" name="passaro">
				</div>

				<form name="cadastro" method="post" >
					<input type="hidden" name="user" values="admin">
					<input type="hidden" name="nivel" values="2">
					</form>
					<label>Escolha seu Estado</label>
					<select name="Estados">
						<option values="SP">São Paulo</option>
						<option values="RJ">Rio de Janeiro</option>
						<option values="MG">Minas Gerais</option>
						<option values="MA">Bahia</option>
					</select>
				<div class="md-3">
				<button class="btn btn-primary" type="submit">Enviar</button>
			</div>
			<div class="md-3">
				<button class="btn btn-success" type="reset">Limpar</button>
			</div>
		</form>

	</main>
	

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


</body>
</html>