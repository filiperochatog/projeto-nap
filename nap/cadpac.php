<?php
require_once 'classes/pacientes.php';
$u = new paciente;
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="author" contente="Grupo 04">
    <meta name="description" contente="Trem de Hermes ">
    <link rel="stylesheet" type="text/css" href="estilo.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Cadastrar Pacientes</title>


</head>

<body class="pg2">
    <header class="logouni">
        <br>
        <img src="https://cdn.univicosa.com.br/img/logos/novo/univicosa_horizontal.png" class="logo">
        <div class="sair">
            <a href="index.php">
                <font color="#fffff">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z" />
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z" />
                    </svg>
                </font>
            </a>
        </div>

    </header>
    <div class="cadpac">
        <a href="pag2.php">
            <div class="voltar">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg>
            </div>
        </a>
        <div class="logcad">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
                <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
                <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
            </svg>
        </div>
        <h5 class="txtcad">
            Cadastrar paciente
        </h5>
    </div>
    <form method="POST">
    <div class="cna">
        <label>Nome do aluno:</label><br>
        <input class="imputca" type="text" name="nome" placeholder=" Nome" maxlength="30">
    </div>
    <div class="cm">
        <label>Matrícula:</label><br>
        <input class="imputcb" type="text" name="matricula" placeholder=" Matrícula" maxlength="30">
    </div>
    <div class="cc">
        <label>Contato:</label><br>
        <input class="imputcc" type="text" name="contato" placeholder=" Email/telefone" maxlength="30">
    </div>
    <div class="cra">
        <label>Responsável pelo<br> atendimento:</label><br>
        <input class="imputcd" type="text" name="responsavel" placeholder=" Nome" maxlength="30">
    </div>
    <div class="cd">
        <label>Data:</label><br>
        <input class="imputce" type="date" name="datas" placeholder=" dd/mm/aa" maxlength="30">
    </div>
    <div class="ch">
        <label>Horário:</label><br>
        <input class="imputcf" type="time" name="hora" placeholder=" H:min" maxlength="30">
    </div>
    <div class="cbp">
        <label>Breve descrição do problema:</label><br>
        <input class="imputcg" type="text" name="descricao" placeholder=" Uso de medicação..." maxlength="150">
    </div>
    <div class="chi">
        <label>Histórico:</label><br>
        <input class="imputch" type="text" name="historico" placeholder=" Histórico de doenças familiares..." maxlength="30">
    </div>
    <input class="rcad" type="reset" value="Cancelar">
    <input class="bcad" type="submit" value="Salvar">
    </form>

    <footer class="fim">
        <img src="https://play-lh.googleusercontent.com/dwjhi4bErPtRalof28qRURMslGavPhQfMr1V5x-lPedJVbx3cDA0KeUTb2-jUNr5ilI" width="30" height="30" class="lfim">
        <p class="tfim">
            contato@univicosa.com.br (31)3899-8000 Viçosa
        </p>
    </footer>

    <?php
    if (isset($_POST['nome'])) {
        $nome = addslashes($_POST['nome']);
        $matricula = addslashes($_POST['matricula']);
        $contato = addslashes($_POST['contato']);
        $responsavel = addslashes($_POST['responsavel']);
        $datas = addslashes($_POST['datas']);
        $hora = addslashes($_POST['hora']);
        $descricao = addslashes($_POST['descricao']);
        $historico = addslashes($_POST['historico']);

        if (!empty($nome) && !empty($matricula) && !empty($contato) && !empty($responsavel) && !empty($datas) && !empty($hora) && !empty($descricao) && !empty($historico)) {
            $u->conectar("login", "localhost", "root", "");
            if ($u->msgErro == "") {
                if ($nome == $nome) {

                    if ($u->cadastrar($nome, $matricula, $contato, $responsavel, $datas, $hora, $descricao, $historico)) {
    ?>
                        <div>
                            <script>
                                alert("Cadastrado com sucesso!");
                            </script>
                        </div>

                <?php
                    }
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
