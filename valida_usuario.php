<?php


include_once("conexion.php");

    // enable sessions
    session_start();

     

// conectamos a la bd
   
    $dbQuery = mysql_query("select * from usuarios where usuario ='".$_POST["usuario"]."' and password = '".$_POST["password"]."'");
    $USER="";
    $PASS="";
    
                      
    // if username and password were submitted, check them
    if (isset($_POST["usuario"]) && isset($_POST["password"]))
    {
        // if username and password are valid, log user in
        if (mysql_num_rows($dbQuery)>0)
        { 

            // remember that user's logged in
            $_SESSION["identificado"] = true;
            

            // save username in cookie for a week
            // revisar
            setcookie("usuario", $_POST["password"], time() + 7 * 24 * 60 * 60);

            // redirect user to home page, using absolute path, per
            // http://us2.php.net/manual/en/function.header.php
            $host = $_SERVER["HTTP_HOST"];
            $path = rtrim(dirname($_SERVER["PHP_SELF"]), "/\\");
            header("location: menu.php");
            exit;
        }else{
            
        echo "Usuario o contraseña Incorrecta. Vuelva a Intetar\n";
          header("location: login.php");
        }
    }

?>