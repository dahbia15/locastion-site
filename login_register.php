<?php 
session_start(); 
require_once 'include/data.php';

if (isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $sqlstate = $pdo->prepare("SELECT email FROM utilisateur WHERE email = :email");
    $sqlstate->bindParam(':email',$email);
    $sqlstate->execute();
    if ($sqlstate->rowCount() > 0) {
        $_SESSION['register_error'] = 'Email is already registered!';
        $_SESSION['active_form'] = 'register';
    } else {
       $sqlstate = $pdo->prepare("INSERT INTO utilisateur (name, email, password, role) VALUES (:name, :email, :password, :role)");
       $sqlstate->bindParam(':name',$name);
       $sqlstate->bindParam(':email',$email);
       $sqlstate->bindParam(':password',$password);
       $sqlstate->bindParam(':role',$role);
       $sqlstate->execute();

    }
    header("Location: login.php");
    exit();
}
 if(isset($_POST['login'])){
                $email = $_POST['email'];
                $password = $_POST['password'];

                 if(!empty($email) && !empty($password)){
                    require_once 'include/data.php';
                    $sqlState = $pdo->prepare(query: 'SELECT * FROM utilisateur WHERE email=? AND password=?');
                    $sqlState->execute([$email,$password]);
                    if($sqlState->rowCount() >= 1){
                      $user = $sqlState->fetch(PDO::FETCH_ASSOC);
                       
                       if ($user && isset($user['role']))
                        {
                          $_SESSION['utilisateur'] = $user;
                          if($user['role'] === 'admin') {
                            header("location: admin_page.php");
                          }else{
                            header("location: index.php");
                            
                          }
                          exit();
                        }
                    }
                  }  
                  $_SESSION['login_error'] = 'Incorrect email or password';
                  $_SESSION['active_form'] = 'login';
                  header("location: login.php");
                  exit();
  }                

                      
               

