<?php
function makeUser() {
    global $pdo;

    $query = $pdo->prepare('INSERT INTO user (first_name,last_name,email,password,birthday,role)
                                VALUES (:first_name, :last_name, :email, :password, :birthday,"member")');

    //var_dump($_POST);
    $first = filter_input(INPUT_POST, 'first_name', FILTER_SANITIZE_STRING);
    $last = filter_input(INPUT_POST, 'last_name', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
    $birthday = filter_input(INPUT_POST, 'birthday', FILTER_SANITIZE_STRING);

    $query->bindParam(':first_name', $first,PDO::PARAM_STR);
    $query->bindParam(':last_name', $last,PDO::PARAM_STR);
    $query->bindParam(':email', $email,PDO::PARAM_STR);
    $query->bindParam(':password', $password,PDO::PARAM_STR);
    $query->bindParam(':birthday', $birthday,PDO::PARAM_STR);

    $query->execute();
    $_POST = [];

}

function getUserById(int $id)
{
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM user WHERE id = :id");
    $query->bindParam("id", $id);
    $result = $query->setFetchMode(PDO::FETCH_CLASS, 'User');
    return $result;
}

function getUser($email, $password){
    global $pdo;
    $query=$pdo->prepare("SELECT * FROM user WHERE email =  :email AND password = :password");
    $query->bindParam(":email", $email);
    $query->bindParam(":password", $password);
    $query->setFetchMode(PDO::FETCH_CLASS, 'User');
    $query->execute();
    $result= $query->fetch();
    return $result;
}
//
//function passwordEncrypt($password)
//{
//    $hash = password_hash($password,
//        PASSWORD_DEFAULT);
//    return $hash;
//}
//
//function verify($input, $check)
//{
//    $verify = password_verify($input, $check);
//    return $verify;
//}
//
function findEmail($email)
{
    global $pdo;
    $query = $pdo->prepare("SELECT email FROM user WHERE email = :email");
    $query->bindParam(":email", $email);
    $query->setFetchMode(PDO::FETCH_CLASS, 'User');
    $query->execute();
    return $query->fetch();
}
//
//function findName($first_name, $last_name)
//{
//    global $pdo;
//    $query = $pdo->prepare("SELECT first_name, last_name FROM user WHERE first_name = '$first_name' AND last_name = '$last_name'");
//    $query->execute();
//    $objects = $query->fetchAll(PDO::FETCH_CLASS, "User");
//    if (isset($objects[0])) {
//        return true;
//    } else {
//        return false;
//    }
//}
//
//function getUserByName($first_name, $last_name)
//{
//    global $pdo;
//    $query = $pdo->prepare("SELECT first_name, last_name FROM user WHERE first_name = '$first_name' AND last_name = '$last_name'");
//    $query->execute();
//    $objects = $query->fetchAll(PDO::FETCH_CLASS, "User");
//    if (isset($objects[0])) {
//        return $objects[0];
//    } else {
//        return false;
//    }
//}
//
//
//function LoginUser($first_name, $last_name, $givenpassword)
//{
//    global $pdo;
//    $targetUser = GetUserByName($first_name, $last_name);
//    if (!isset($targetUser)) {
//        die();
//    }
//    if (Verify($givenpassword, $targetUser->password)) {
//        return $targetUser;
//    }
//}