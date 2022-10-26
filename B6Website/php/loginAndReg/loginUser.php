<?php

    session_start();

    // connect to database
    require_once('../database.php');

    $login_user = filter_input(INPUT_POST, 'login_user_id');
    $login_pass = filter_input(INPUT_POST, 'login_password');
    $remember = filter_input(INPUT_POST, 'remember');


    try {
        $query = 'SELECT email, password_, type_, user_id FROM user WHERE email=:_email';

        $statement = $db->prepare($query);
        $statement->bindValue(':_email', $login_user);
        $statement->execute();
        $info = $statement->fetch();

        if(password_verify($login_pass, $info['password_'])) {
            // TODO start session with session variables for current logged in user HERE!!
            if (isset($remember)) {
                setcookie("username", $login_user, time()+3600*24);
                setcookie("password", $login_pass, time()+3600*24);
                setcookie("remember", true, time()+3600*24);
            }

            $_SESSION['loggedin'] = true;
            $_SESSION['userID'] = $info['user_id'];
            $_SESSION['userType'] = $info['type_'];
            header("Location: ../../index.php");
        } else {
            // Notify User their username/password was incorrect
            header("Location: ../../view/loginAndReg/login.php");
        }

    } catch(PDOException $e) {
        echo 'Error!';
        echo $e;
    }

?>