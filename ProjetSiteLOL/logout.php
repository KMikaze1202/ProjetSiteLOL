<?php
/**
 * Permet de tuer les cookies et la session de l'utilisateur connecter et de le
 * rediriger vers l'index
 */
session_start();
session_unset();
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params
            ["secure"], $params["httponly"]);}
    session_destroy();

header('Location: login.php');

?>