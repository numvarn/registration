<?php
if(!isset($_SESSION)) {
    session_start();
}

function auth(){
    if (!isset($_SESSION['user'])) {
        print("Access Denied !!!!");
        die();
    }
}

function register_edit(){
    $mysqli = connectdb();
    if (!empty($_POST['name']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone'])) {
        $gender = $_POST['gender'];
        $prefix = $_POST['prefix'];
        $name = strtolower($_POST['name']);
        $lname = strtolower($_POST['lname']);
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $id = $_POST['id'];

        if ($gender == 'male') {
            $gender = 0;
        }else {
            $gender = 1;
        }

        if ($prefix == 'mr') {
            $prefix = 0;
        } elseif ($prefix == 'miss') {
            $prefix = 1;
        } else {
            $prefix = 2;
        }

        $q = "UPDATE regis
              SET `gender`='$gender',
                  `prefix`='$prefix',
                  `name`='$name',
                  `lname`='$lname',
                  `email`='$email',
                  `phone`='$phone'
              WHERE id=$id";
        echo $q;
        $mysqli->query($q) or die(mysqli_error($mysqli));
        header("Location: ../index.php?q=show");
    }
}
function register(){
    $mysqli = connectdb();
    if (!empty($_POST['name']) && !empty($_POST['lname']) && !empty($_POST['email']) && !empty($_POST['phone'])) {
        $gender = $_POST['gender'];
        $prefix = $_POST['prefix'];
        $name = strtolower($_POST['name']);
        $lname = strtolower($_POST['lname']);
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        if ($gender == 'male') {
            $gender = 0;
        }else {
            $gender = 1;
        }

        if ($prefix == 'mr') {
            $prefix = 0;
        } elseif ($prefix == 'miss') {
            $prefix = 1;
        } else {
            $prefix = 2;
        }

        $regis_date = time();

        $q = "INSERT INTO `regis` (`id`, `gender`, `prefix`, `name`, `lname`, `email`, `phone`, `date_regis`) VALUES (NULL, '$gender', '$prefix', '$name', '$lname', '$email', '$phone', '$regis_date')";

        $mysqli->query($q) or die(mysqli_error($mysqli));
        header("Location: ../index.php?q=show");
    }
}

function connectdb(){
    $user = 'web';
    $password = 'web';
    $db = 'registration';
    $host = 'localhost';

    $mysqli = @new mysqli($host, $user, $password, $db);

    if(mysqli_connect_error()) {
        die('Connect Error ('. mysqli_connect_errno() .') '. mysqli_connect_error());
        exit;
    }
    else {
        return $mysqli;
    }
}

function login(){
    $mysqli = connectdb();
    if (!isset($_SESSION["user"])) {
        if (!empty($_POST['username']) && !empty($_POST['password'])) {
            $username = $_POST['username'];
            $password = md5($_POST['password']);

            $q ="SELECT uid FROM users WHERE name='$username' AND password='$password' LIMIT 1";

            $uid = 0;
            $result = $mysqli->query($q);
            $uid = $result->fetch_object();
            if ($uid) {
                echo "Login Success";
                $_SESSION["user"] = $uid;
            }else {
                echo "Username or Password Incorrect !!";
            }

            header("Location: ../index.php");
        }
    }
    else {
        header("Location: index.php");
    }
}

function logout(){
    unset($_SESSION['user']);
    header("Location: ../index.php");
}

function delete_regis($id) {
    $mysqli = connectdb();
    $q = "DELETE FROM regis WHERE id=$id";
    $mysqli->query($q) or die(mysqli_error($mysqli));
    header("Location: ../index.php?q=show");
}

?>
