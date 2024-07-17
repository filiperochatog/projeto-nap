<?php
require_once 'classes/usuarios.php';
$u = new usuario;

?>
<!DOCTYPE html>
<html>
// inicio
<head>
    <meta charset="utf-8" />
    <meta name="author" contente="Grupo 04">
    <meta name="description" contente="Trem de Hermes ">
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Cadastrar</title>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>



    <br><br><br>

</head>

<body class="a">
    <div id="corpo-form-cad">
        <form method="POST" class="b">
            <legend class="c">
            </legend>
            <div class="form">
                <img src="https://cdn.univicosa.com.br/img/portal/nap/big/logo.jpg" width="200" height="100">
                <br><br>
                <label>
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                        </svg>
                    </div>
                </label>
                <input class="imput" type="text" name="nome" placeholder=" Primeiro e ultimo nome" maxlength="30">
                <label>
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg>
                    </div>
                </label>
                <input class="imput" type="text" name="telefone" placeholder=" Telefone" maxlength="30">
                <br><br>
                <label>
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg>
                    </div>
                </label>
                <input class="imput" type="email" name="email" placeholder=" Email" maxlength="40">
                <label>
                    <div class="icone2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        </svg>
                    </div>
                </label>
                <input class="imput" type="password" name="senha" placeholder=" Senha">
                <br><br>
                <label>
                    <div class="icone2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        </svg>
                    </div>
                </label>
                <input class="imput" type="password" name="confsenha" placeholder=" Confirmar senha" maxlength="15">

                <input class="btn btn-primary" type="submit" value="Cadastrar">

                <a href="index.php" class="btn btn-primary">
                    <span class="glyphicon glyphicon-user"></span> Login
                </a>


        </form>
    </div>

    <?php
    if (isset($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $telefone = addslashes($_POST['telefone']);
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);
        $confirmarsenha = addslashes($_POST['confsenha']);

        if (!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarsenha)) {
            $u->conectar("login", "localhost", "root", "");
            if ($u->msgErro == "") {
                if ($senha == $confirmarsenha) {

                    if ($u->cadastrar($nome, $telefone, $email, $senha)) {
    ?>
                        <div>
                            <script>
                                alert("Cadastrado com sucesso!");
                            </script>
                        </div>
                        

                    <?php
                    } else {
                    ?>
                        <div>
                            <script>
                                alert("Email já cadastrado!");
                            </script>
                        </div>

                    <?php
                    }
                } else {
                    ?>
                    <div>
                        <script>
                            alert("Senha e confirmar senha não corresponde!");
                        </script>
                    </div>

                <?php

                }
            } else {
                ?>
                <div>
                    <?php echo "Erro: " . $u->msgErro; ?>
                </div>
            <?php
            }
        } else {
            ?>
            <div>
                <script>
                    alert("Preencha todos os campos!");
                </script>
            </div>

    <?php

        }
    }



    ?>
</body>

</html>
