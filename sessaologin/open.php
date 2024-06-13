<?php 
    include_once "factory/conexao.php"; //trazer a conexao pro arquivo
    SESSION_START(); //ABRIR UM ESPAÇO TEMPORÁRIO NA NUVEM

    $login = $_POST["cxlogin"];
    $senha = $_POST["cxsenha"];
    $sql = "select * from tbusuario WHERE 
    login = '$login' AND senha = '$senha'";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION["login"] = $login;
        $_SESSION["senha"] = $senha;
        header('location:menu.php');
    } 
    else 
    {
        echo "E-mail e senha errados!";
        unset($_SESSION["login"]);
        unset($_SESSION["senha"]);
    }
?>