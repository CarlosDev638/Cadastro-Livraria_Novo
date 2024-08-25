<?php

 if(isset($_POST['submit']));
 {
/*
  print_r('Nome: ' . $_POST['nome']);
  print_r('<br>');
  print_r('CPF: ' . $_POST['cpf']);
  print_r('<br>');
  print_r('Data Nascimento: ' . $_POST['data_nasc']);
  print_r('<br>');
  print_r('Sexo: ' . $_POST['genero']);
  print_r('<br>');
  print_r('Telefone: ' . $_POST['tel']);
  print_r('<br>');
  print_r('E-mail: ' . $_POST['email']);
  print_r('<br>');
  print_r('Senha: ' . $_POST['senha']);
  print_r('<br>');
*/

 include_once('config.php');

 $nome = $_POST['nome'] ;
 $cpf = $_POST['cpf']; 
 $data_nasc = $_POST['data_nasc'];
 $genero = $_POST['genero'];
 $tel = $_POST['tel'];
 $email = $_POST['email'];
 $senha = $_POST['senha'];


 $result = mysqli_query ($conexao, "INSERT INTO usuarios(nome,cpf,data_nasc,genero,tel,email,senha)
 VALUES ('$nome','$cpf','$data_nasc','$genero',' $tel','$email','$senha')");

}
  
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Livraria Novo</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            color: #333;
            margin: 0;
            padding: 0;
        }

        .bg {
            background-color: #fff;
            padding: 30px;
            margin: 40px auto;
            max-width: 700px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .main {
            padding: 20px;
        }

        p {
            font-size: 28px;
            font-weight: 600;
            margin-bottom: 20px;
            color: #4a4a4a;
            border-bottom: 2px solid #f0c14b;
            padding-bottom: 10px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #555;
        }

        input[type="text"], 
        input[type="password"], 
        input[type="tel"], 
        input[type="date"], 
        input[type="int"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #f0c14b;
            color: #333;
            border: none;
            padding: 12px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #e3a73b;
        }

        .radio-group {
            margin-bottom: 20px;
        }

        .radio-group label {
            margin-right: 20px;
            font-weight: 400;
        }

        .form-section {
            margin-bottom: 20px;
        }

        .form-section:last-of-type {
            margin-bottom: 0;
        }
    </style>
</head>
<body>

    <div class="bg">
        <div class="main">
            <p>Cadastro de Usuário</p>
            <form action="index.php" method="POST">
                <div class="form-section">
                    <label for="nome">Nome:</label>
                    <input type="text" id="nome" name="nome" placeholder="Digite seu nome aqui:" required>
                </div>

                <div class="form-section">
                    <label for="cpf">CPF:</label>
                    <input type="text" id="cpf" name="cpf" placeholder="Digite seu CPF:" required>
                </div>

                <div class="form-section">
                    <label for="data_nasc">Data de nascimento:</label>
                    <input type="date" id="data_nasc" name="data_nasc" required>
                </div>

                <div class="form-section radio-group">
                    <p>Genêro:</p>
                    <label for="masc">Masculino</label>
                    <input type="radio" id="masc" name="genero" value="masculino" required>

                    <label for="fem">Feminino</label>
                    <input type="radio" id="fem" name="genero" value="feminino" required>

                    <label for="outros">Outros</label>
                    <input type="radio" id="outros" name="genero" value="outros" required>
                </div>

                <div class="form-section">
                    <label for="tel">Telefone:</label>
                    <input type="tel" id="tel" name="tel" placeholder="Digite seu número">
                </div>

                <div class="form-section">
                    <label for="email">E-mail:</label>
                    <input type="text" id="email" name="email" placeholder="Digite seu E-mail:" required>
                </div>

                <div class="form-section">
                    <label for="senha">Senha:</label>
                    <input type="password" id="senha" name="senha" placeholder="Digite uma senha:" required>
                </div>
                

                <div class="form-section">
                    <input type="submit" name="submit" id="submit" value="Enviar">
                </div>
            </form>
        </div>
    </div>
    
</body>
</html>
