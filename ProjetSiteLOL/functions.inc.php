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

    $req = $dbc->prepare('INSERT INTO t_users(FirstName, LastName, Email, Avatar, IsAdmin, IsModerator, BirthDate, Password, JoinDate) VALUES (:FirstName, :LastName, :Email, :Avatar, :IsAdmin, :IsModerator, :BirthDate, :Password, :JoinDate);');
    return $req->execute(array(
                ':FirstName' => $auser['FirstName'],
                ':LastName' => $auser['LastName'],
                ':Email' => $auser['Email'],
                ':Avatar' => $auser['Avatar'],
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
    $userExist = $req->fetch(PDO::FETCH_ASSOC);
    if ($userExist != 0) {
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
//--------------------------------------------------------------------------
/*
 * Recorvers all accessories informations
 */
function get_all_articles_info() {
//--------------------------------------------------------------------------
    global $dbc;

    $sql = "SELECT t_articles.*, t_users.* FROM t_articles, t_users WHERE t_articles.ValidatorId = t_users.UserId";
    $req = $dbc->prepare($sql);
    $req->execute();
    $articles = $req->fetchAll(PDO::FETCH_ASSOC);
    return $articles;
}
//--------------------------------------------------------------------------
/*
 * Recorvers moto informations by his id
 */
function get_articles_info_by_id($id) {
//--------------------------------------------------------------------------
    global $dbc;

    $sql = "SELECT t_articles.*, t_users.* FROM t_articles, t_users WHERE t_articles.ValidatorId = t_users.UserId AND t_articles.ArticleId = :id";
    $req = $dbc->prepare($sql);
    $req->execute(array(':id' => $id));
    $article = $req->fetch(PDO::FETCH_ASSOC);
    return $article;
}
//--------------------------------------------------------------------------
/*
 * Recorvers moto informations by his id
 */
function get_keywords_by_article_id($id) {
//--------------------------------------------------------------------------
    global $dbc;
    $sql = "SELECT t_keywords.Keyword FROM t_keywords, t_keywords_of_articles, t_articles WHERE t_articles.ArticleId = t_keywords_of_articles.ArticleId AND t_keywords.KeywordId = t_keywords_of_articles.keywordId AND t_articles.ArticleId = :id";
    $req = $dbc->prepare($sql);
    $req->execute(array(':id' => $id));
    $article = $req->fetchAll();
    return $article;
}

//--------------------------------------------------------------------------
/*
 * Add a picture to my folder of pictures
 */
function add_picture() {
//--------------------------------------------------------------------------
    $maxfilesize = (isset($_REQUEST["MAX_FILE_SIZE"]) ? $_REQUEST["MAX_FILE_SIZE"] : 18000000);

    if ((($_FILES["Avatar"]["type"] == "image/gif") || ($_FILES["Avatar"]["type"] == "image/png") || ($_FILES["Avatar"]["type"] == "image/jpeg") || ($_FILES["Avatar"]["type"] == "image/pjpeg")) && ($_FILES["Avatar"]["size"] < $maxfilesize)) {

        if ($_FILES["Avatar"]["error"] > 0) {
            $_SESSION['message'] = "Erreur : " . $_FILES["Avatar"]["error"];
            $_SESSION['MessageType'] = "error";
        } else {

            if (file_exists("./img/" . $_FILES["Avatar"]["name"])) {
                $_SESSION['message'] = $_FILES["Avatar"]["name"] . " existe déjà";
                $_SESSION['MessageType'] = "error";
            } else {
                move_uploaded_file($_FILES["Avatar"]["tmp_name"], "img/" . $_FILES["Avatar"]["name"]);
                $_SESSION['message'] = "Enregistré sous : " . "./img/" . $_FILES["Avatar"]["name"];
            }
        }
    } else {
        $_SESSION['message'] = "Fichier invalide";
        $_SESSION['MessageType'] = "error";
    }
}
//--------------------------------------------------------------------------
/*
 * Recorvers all reviews informations by his item
 */
function get_all_comments_infos($ArticleId) {
//--------------------------------------------------------------------------    
    global $dbc;

    $sql = 'SELECT * FROM t_comments, t_users, t_articles WHERE t_comments.ArticleId=t_articles.ArticleId AND t_comments.UserId=t_users.UserId AND t_comments.ArticleId = :ArticleId';
    $req = $dbc->prepare($sql);
    $req->execute(array(':ArticleId' => $ArticleId));
    $comments = $req->fetchAll(PDO::FETCH_ASSOC);
    return $comments;
}
//--------------------------------------------------------------------------
/*
 * Allows add a user to the database
 */
function addComment($acomment) {
//--------------------------------------------------------------------------
    global $dbc;

    $req = $dbc->prepare('INSERT INTO t_comments(Comment, CommentDate, ArticleId, UserId) VALUES (:Comment, :CommentDate, :ArticleId, :UserId);');
    return $req->execute(array(
                ':Comment' => $acomment['Comment'],
                ':CommentDate' => date("Y-m-d"),
                ':ArticleId' => $acomment['ArticleId'],
                ':UserId' => $acomment['UserId']));
}

//--------------------------------------------------------------------------
/*
 * Recorvers all reviews informations by his item
 */
function get_all_articles_infos_by_tag($tag) {
//--------------------------------------------------------------------------    
    global $dbc;

    $sql = "SELECT t_articles.*, t_users.*, t_keywords.* FROM t_articles, t_users, t_keywords, t_keywords_of_articles WHERE t_articles.ArticleId = t_keywords_of_articles.ArticleId AND t_keywords_of_articles.KeywordId = t_keywords.KeywordId AND t_users.UserId = t_articles.AuthorId AND t_keywords.Keyword = :keyword";
    $req = $dbc->prepare($sql);
    $req->execute(array(':keyword' => $tag));
    $articles = $req->fetchAll(PDO::FETCH_ASSOC);
    if (!empty($articles)) {
        return $articles;
    }  else {
        return $articles = 0;
    }
}

?>