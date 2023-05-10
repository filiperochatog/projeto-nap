<?php
require_once 'classes/usuarios.php';
$u = new usuario;
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="author" contente="Grupo 04">
    <meta name="description" contente="Trem de Hermes ">
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Login</title>
    <script src="jquery-3.4.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>


</head>

<body class="a">
    <div id="corpo-form">
        <form method="post" class="b">
            <legend class="c">
            </legend>
            <div class="form">
                <img src="https://cdn.univicosa.com.br/img/portal/nap/big/logo.jpg" width="200" height="100">
                <br><br>
                <label>
                    <div class="icone">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope-fill" viewBox="0 0 16 16">
                            <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                        </svg>
                </label>
                <input class="imput" type="email" placeholder=" Email" name="email">
                <br><br>
                <label>
                    <div class="icone2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                            <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z" />
                        </svg>
                    </div>
                </label>
                <input class="imput" type="password" placeholder=" Senha" name="senha">
                <br><br>
                <input type="submit" value="Login" class="btn btn-primary">
                <br>
                </a>
                <a href="cadastrar.php">
                    <span class="glyphicon glyphicon-user"></span> Cadastrar
                </a>
        </form>
    </div>
    <?php

    if (isset($_POST['email'])) {
        $email = addslashes($_POST['email']);
        $senha = addslashes($_POST['senha']);

        if (!empty($email) && !empty($senha)) {
            $u->conectar("login", "localhost", "root", "");
            if ($u->msgErro == "") {
                if ($u->logar($email, $senha)) {
                    header("location: pag2.php");
                } else {
    ?>
                    <div>
                    <script>
                        alert("Email e/ou senha estão incorretos!");
                </script>
                    </div>

                <?php
                }
            } else {
                ?>
                <div class="msg-erro">
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
