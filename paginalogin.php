<?php 
                                    include('login.php');

                                  if (isset($_POST['email']) || isset($_POST['senha'])) {

                                        $email = $mysqli->real_escape_string($_POST['email']);
                                        $senha = $mysqli->real_escape_string($_POST['senha']);



                                        if(strlen($_POST['email']) == 0) {
                                        echo "Preencha seu e-mail";
                                    } else if(strlen($_POST['senha']) == 0) {
                                        echo "Preencha sua senha";
                                    } else {

                                        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
                                        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

                                        $row = $sql_query->fetch_object();

                                        $qtd = $sql_query->num_rows;




                                     if ($qtd == 1) {

                                        if(!isset($_SESSION)) {
                                                session_start();
                                            }

                                            $_SESSION["email"] = $email;
                                            $_SESSION["nome"] = $row->nome;

                                        header("Location: paglogada.php");

                                        } 



                                    }

                                }
                            ?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <script type="module"src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"> </script> 
    <script nomodule  src="https://unpkg/.com/ionicons@7.1.0/dist/ionicons/ionicons.js"> </script>
    <meta charset='UTF-8'>
   <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <link rel='stylesheet' type='text/css' href='loginstyle.css'>
   <title>Login Onbli</title>
  </head>
  <body>


    <section class="ocean">
  <section class="wave"></section>
  <section class="wave"></section>
</section>


    <section class="quadrado" class>
        <div>
            

        </div>
            <div class="form-box">
                <div class="form-value">
                    <form action="" method="POST">
                        <h2>Login</h2>
                        <div class="inputbox">
                            <ion-icon name="mail-outline"></ion-icon>
                            <input type="email" required name="email">
                            <legend for="">Email</legend>
                        </div>
                        <div class="inputbox">
                            <ion-icon name="lock-closed-outline"></ion-icon>
                            <input type="password" required name="senha">
                            <legend for="">Senha</legend>
                        </div>
                        <div class="forget">
                            <legend for=""><input type="checkbox"> Lembrar senha  /<a href="#"> Esqueceu a senha?</a></legend>
                          
                        </div>
                        <button type="submit">Log in</button>
                        <div class="register">
                            <p>Não tenho conta <a href="#">Registrar</a></p>
                        </div>

                        <div id="erro">
                            
                           <?php
                                include('login.php');

                                  if (isset($_POST['email']) || isset($_POST['senha'])) {

                                        $email = $mysqli->real_escape_string($_POST['email']);
                                        $senha = $mysqli->real_escape_string($_POST['senha']);



                                        if(strlen($_POST['email']) == 0) {
                                        echo "Preencha seu e-mail";
                                    } else if(strlen($_POST['senha']) == 0) {
                                        echo "Preencha sua senha";
                                    } else {

                                        $sql_code = "SELECT * FROM usuario WHERE email = '$email' AND senha = '$senha'";
                                        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

                                        $row = $sql_query->fetch_object();

                                        $qtd = $sql_query->num_rows;




                                     if ($qtd == 0) {
                                            echo "E-mail ou senha incorreto";
                                        } 
                                    }

                                }
                                
                            ?>
                        </div>
                    </form>
                </div>
            </div>
    </section>
</body>
</html>

