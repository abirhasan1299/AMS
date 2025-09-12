<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['submit'])) {
        include '../configuration/config.php';

        $name = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];
        $phone = $_POST['phone'];
        $unique_code =strtoupper(uniqid());

        $sql = "INSERT INTO users(unique_code,name,email,phone,password,role) VALUES ('$unique_code','$name','$email','$phone','$password','$role')";

        if(empty($name) || empty($email) || empty($password) || empty($role) || empty($phone)) {
            echo '<div class="alert alert-danger" role="alert">Fill the blanks Properly ! </div>';
        }else{

            $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

            if($query){
                echo '<div class="alert alert-success" role="alert">New User Creation Done, Go <a href="login.php">Login</a> Area ...</div>';
            }else{
                echo '<div class="alert alert-danger" role="alert">Something Went Wrong</div>';
            }
        }


    }
}

?>