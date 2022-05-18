<?php
include 'DB_functions.php';

if(isset($_POST["submit"])&&$_SERVER["REQUEST_METHOD"]=="POST"){
    
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email=$_POST['email'];
        $password=$_POST['password'];
    }
    $sql=$conn->prepare("SELECT id,name,password FROM users WHERE email=? LIMIT 1");
    $sql->bind_param('s',$email);
    $sql->execute();
    $sql->bind_result($id,$name,$str_pass);
    $sql->store_result();
    $sql->fetch();
    $check=password_verify($password,$str_pass);
    if($sql->num_rows()==1 && $check){
        if($check){
                $_SESSION['login']=1;
                $_SESSION['id']=$id;
                $_SESSION['name']=$name;
                $_SESSION['email']=$email;
                header("Location: ../home.php");
        }
        else{
            echo "not inserted in session";
        }
    }
    else{
        $_SESSION['error']=1;
        header("Location: ../index.php");
    }
    $sql->close();
}


?>