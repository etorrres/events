<?php 

require_once '../config/db.php';
require_once '../config/conexion.php';

$user=$_POST['username'];
$pass=$_POST['password'];

if(isset($user) || isset($pass)){   

    $sql = "SELECT * FROM event_app.user WHERE email_usr = '".$user."'";
    $query = $con->query($sql);
    
    
    if($query){
        $row = $query->fetch_assoc();

        if(password_verify($pass, $row["password_usr"])){

            session_start();
            $_SESSION['id_usr'] = $row["id_usr"];
            $_SESSION['nombre_usr'] = $row["nombre_usr"];
            $_SESSION['apellido_usr'] = $row["apellido_usr"];
            $_SESSION['f_name'] = $row["nombre_usr"]." ".$row["apellido_usr"];
            $_SESSION['email_usr'] = $row["email_usr"];
            $_SESSION['nivel_usr'] = $row["nivel_usr"];
            $_SESSION['user_login_status'] = 1;

            echo '<script type="text/javascript">;
            window.location.href="../index.php";</script>';

        }else{
            echo '<script type="text/javascript">;
            alert("Error! Password Incorrecto..");
            window.location.href="../login.php";</script>';
        }
    }else{
        echo '<script type="text/javascript">;
        alert("Error! Usuario No encontrado..");
        window.location.href="../login.php";</script>';
    }

}else{
    echo '<script type="text/javascript">;
    alert("Error! Debe ingresar la informacion requerida..");
    window.location.href="../login.php";</script>';
}

?>