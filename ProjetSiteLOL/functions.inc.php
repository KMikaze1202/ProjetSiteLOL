<?php

require_once('./mysql.inc.php');

//--------------------------------------------------------------------------
/*
 * Allows connection to the database
 */
function dbConnect() {
//--------------------------------------------------------------------------
    global $dbc;
    try {
        $dbc = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } catch (Exception $e) {
        echo 'Erreur : ' . $e->getMessage() . '<br />';
        echo 'NÂ° : ' . $e->getCode();
        die('Could not connect to MySQL');
    }
}

//--------------------------------------------------------------------------
/*
 * Allows add a user to the database
 */
function addUser($auser) {
//--------------------------------------------------------------------------
    global $dbc;

    $req = $dbc->prepare('INSERT INTO t_users(FirstName, LastName, Email, IsAdmin, IsModerator, BirthDate, Password, JoinDate) VALUES (:FirstName, :LastName, :Email, :IsAdmin, :IsModerator, :BirthDate, :Password, :JoinDate);');
    return $req->execute(array(
                ':FirstName' => $auser['FirstName'],
                ':LastName' => $auser['LastName'],
                ':Email' => $auser['Email'],
                ':IsAdmin' => 0,
                ':IsModerator' => 0,
                ':BirthDate' => $auser['BirthDate'],
                ':Password' => $auser['Password'],
                ':JoinDate' => date("Y-m-d")));
}

//--------------------------------------------------------------------------
/*
 * Check if a user already exist by his email
 */
function user_exist($Email) {
//--------------------------------------------------------------------------
    global $dbc;

    $sql = "SELECT Email FROM t_users WHERE Email = :Email";
    $req = $dbc->prepare($sql);
    $req->execute(array(':Email' => $Email));
    $userExist = $req->fetchAll(PDO::FETCH_ASSOC);
    if (isset($userExist)) {
        return $userExist;
    } else {
        return $userExist = 0;
    }
}
//--------------------------------------------------------------------------
/*
 * Allows connect a user checking if email and password is true
 */
function checkIfEmailAndPwdOk($Email, $Password) {
//--------------------------------------------------------------------------
    global $dbc;

    $sql = "SELECT UserId, Email, IsAdmin, IsModerator, FirstName, LastName FROM t_users where Email = :email AND Password = :password LIMIT 1;";
    $req = $dbc->prepare($sql);
    $req->execute(array(':email' => $Email,
        ':password' => $Password));
    $userId = $req->fetch(PDO::FETCH_ASSOC);
    if (isset($userId)) {
        return $userId;
    } else {
        return $userId = 0;
    }
}

?>